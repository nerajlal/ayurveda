<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::with('sizes')->latest()->get();
        $totalProducts = Product::count();
        $outOfStockCount = Product::whereDoesntHave('sizes', function ($query) {
            $query->where('stock_quantity', '>', 0);
        })->count();

        return view('admin.products', compact('products', 'totalProducts', 'outOfStockCount'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // 1. Validate the incoming request data
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'subtitle' => 'nullable|string|max:255',
            'category_name' => 'required|string|max:255',
            'description' => 'required|string',
            'key_benefits' => 'nullable|string',
            'suitable_for' => 'nullable|string',
            'ingredients' => 'nullable|string',
            'how_to_use' => 'nullable|string',
            'pro_tips' => 'nullable|string',
            'precautions' => 'nullable|string',

            // Validation for sizes array
            'sizes' => 'required|array|min:1',
            'sizes.*.size' => 'required|string|max:255',
            'sizes.*.price' => 'required|numeric|min:0',
            'sizes.*.original_price' => 'nullable|numeric|min:0',
            'sizes.*.stock_quantity' => 'required|integer|min:0',

            // Validation for images array
            'images' => 'required|array|min:1',
            'images.*' => 'image|mimes:webp|max:2048',
            'primary_image_index' => 'required|integer',
        ]);

        // Use a database transaction to ensure all or nothing is saved
        DB::beginTransaction();
        try {
            // 2. Create the Product
            $product = Product::create([
                'name' => $validated['name'],
                'slug' => Str::slug($validated['name']),
                'subtitle' => $validated['subtitle'],
                'category_name' => $validated['category_name'],
                'description' => $validated['description'],
                'key_benefits' => $validated['key_benefits'],
                'suitable_for' => $validated['suitable_for'],
                'ingredients' => $validated['ingredients'],
                'how_to_use' => $validated['how_to_use'],
                'pro_tips' => $validated['pro_tips'],
                'precautions' => $validated['precautions'],
            ]);

            // 3. Create the Product Sizes
            foreach ($validated['sizes'] as $sizeData) {
                $product->sizes()->create($sizeData);
            }

            // 4. Handle Image Uploads and Create Product Images
            if ($request->hasFile('images')) {
                foreach ($request->file('images') as $index => $imageFile) {
                    $path = $imageFile->store('products', 'public');
                    $product->images()->create([
                        'image_path' => $path,
                        'is_primary' => ($index == $validated['primary_image_index']),
                    ]);
                }
            }

            // If everything is successful, commit the transaction
            DB::commit();

            return back()->with('success', 'Product created successfully!');

        } catch (\Exception $e) {
            // If anything goes wrong, rollback the transaction
            DB::rollBack();
            // Log the error and redirect back with an error message
            // Log::error('Product Creation Failed: ' . $e->getMessage());
            return back()->with('error', 'Failed to create product. Please try again. Error: ' . $e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return back()->with('success', 'Product deleted successfully.');
    }
}
