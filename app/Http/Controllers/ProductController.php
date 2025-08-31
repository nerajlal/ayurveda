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

            return [
                'id' => $product->id,
                'name' => $product->name,
                'slug' => $product->slug,
                'category' => $product->category_name, // The JS uses 'category', not 'category_name'
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
    public function show($slug)
    {
        // Find the product by its slug
        // Eager load all images and sizes for the detail page
        $product = Product::where('slug', $slug)->with('images', 'sizes')->firstOrFail();

        return view('single-product', compact('product'));
    }
}
