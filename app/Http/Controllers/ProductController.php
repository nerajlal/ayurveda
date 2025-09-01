<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\WishlistItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rawProducts = Product::with('images', 'sizes')
            ->withCount('reviews')
            ->withAvg('reviews', 'rating')
            ->get();

        $wishlistedProductIds = [];
        if (Auth::check()) {
            $wishlistedProductIds = WishlistItem::where('user_id', Auth::id())->pluck('product_id')->toArray();
        }

        $products = $rawProducts->map(function ($product) use ($wishlistedProductIds) {
            $primaryImage = $product->images->firstWhere('is_primary', true);
            $firstSize = $product->sizes->first();

            $categorySlug = match($product->category_name) {
                'Herbal Oils' => 'oils',
                'Skincare' => 'skincare',
                'Herbal Tea' => 'teas',
                'Churna & Powders' => 'powders',
                'Supplements' => 'supplements',
                default => 'general',
            };

            return [
                'id' => $product->id,
                'name' => $product->name,
                'slug' => $product->slug,
                'category' => $categorySlug,
                'price' => $firstSize->price ?? 0,
                'originalPrice' => $firstSize->original_price ?? 0,
                'rating' => $product->reviews_avg_rating ?? 0,
                'reviews' => $product->reviews_count,
                'image' => $primaryImage ? url('images/' . $primaryImage->image_path) : 'https://via.placeholder.com/300x200',
                'description' => $product->subtitle, // Using subtitle as short description
                'benefits' => [], // Placeholder
                'isNew' => $product->created_at->isAfter(now()->subMonth()),
                'inStock' => $product->sizes->sum('stock_quantity') > 0,
                'isWishlisted' => in_array($product->id, $wishlistedProductIds),
            ];
        });

        return view('products', compact('products'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        $product->load([
            'images',
            'sizes',
            'reviews' => function ($query) {
                $query->with('user')->latest();
            }
        ]);

        $avgRating = $product->reviews->avg('rating');
        $reviewCount = $product->reviews->count();

        // Fetch related products
        $relatedProducts = Product::with('images', 'sizes')
            ->where('category_name', $product->category_name)
            ->where('id', '!=', $product->id)
            ->inRandomOrder()
            ->take(4)
            ->get();

        if ($relatedProducts->count() < 4) {
            $needed = 4 - $relatedProducts->count();
            $excludeIds = $relatedProducts->pluck('id')->push($product->id);

            $otherProducts = Product::with('images', 'sizes')
                ->whereNotIn('id', $excludeIds)
                ->inRandomOrder()
                ->take($needed)
                ->get();

            $relatedProducts = $relatedProducts->concat($otherProducts);
        }

        return view('single-product', compact('product', 'relatedProducts', 'avgRating', 'reviewCount'));
    }
}
