<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rawProducts = Product::with('images', 'sizes')->get();

        $products = $rawProducts->map(function ($product) {
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
                'rating' => 4.5, // Placeholder rating
                'reviews' => 100, // Placeholder reviews
                'image' => $primaryImage ? asset('storage/' . $primaryImage->image_path) : 'https://via.placeholder.com/300x200',
                'description' => $product->subtitle, // Using subtitle as short description
                'benefits' => [], // Placeholder
                'isNew' => $product->created_at->isAfter(now()->subMonth()),
                'inStock' => $product->sizes->sum('stock_quantity') > 0,
            ];
        });

        return view('products', compact('products'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        // The product is automatically resolved by Laravel.
        // We can load the relationships if they are not already loaded.
        $product->load('images', 'sizes');

        return view('single-product', compact('product'));
    }
}
