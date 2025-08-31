<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\WishlistItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WishlistController extends Controller
{
    public function index()
    {
        $wishlistItems = WishlistItem::where('user_id', Auth::id())
            ->with('product.images')
            ->get();

        return view('wishlist', compact('wishlistItems'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'product_id' => 'required|exists:products,id',
        ]);

        $wishlistItem = WishlistItem::firstOrCreate([
            'user_id' => Auth::id(),
            'product_id' => $request->product_id,
        ]);

        if ($wishlistItem->wasRecentlyCreated) {
            return response()->json(['message' => 'Product added to wishlist.'], 201);
        }

        return response()->json(['message' => 'Product already in wishlist.'], 200);
    }

    public function destroy(Request $request, Product $product)
    {
        $wishlistItem = WishlistItem::where('user_id', Auth::id())
            ->where('product_id', $product->id)
            ->first();

        if ($wishlistItem) {
            $wishlistItem->delete();
            if ($request->wantsJson()) {
                return response()->json(['message' => 'Product removed from wishlist.']);
            }
            return back()->with('success', 'Product removed from wishlist.');
        }

        if ($request->wantsJson()) {
            return response()->json(['message' => 'Product not in wishlist.'], 404);
        }
        return back()->with('error', 'Product not found in wishlist.');
    }
}
