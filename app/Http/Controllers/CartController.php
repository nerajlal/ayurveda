<?php

namespace App\Http\Controllers;

use App\Models\CartItem;
use App\Models\ProductSize;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cartItems = CartItem::where('user_id', Auth::id())
            ->with('product', 'productSize')
            ->get();

        return view('cart', compact('cartItems'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'product_size_id' => 'required|exists:product_sizes,id',
            'quantity' => 'required|integer|min:1',
        ]);

        $productSize = ProductSize::find($request->product_size_id);
        $userId = Auth::id();

        // Check if the item already exists in the cart
        $cartItem = CartItem::where('user_id', $userId)
            ->where('product_size_id', $productSize->id)
            ->first();

        if ($cartItem) {
            // If it exists, update the quantity
            $cartItem->quantity += $request->quantity;
            $cartItem->save();
        } else {
            // If not, create a new cart item
            CartItem::create([
                'user_id' => $userId,
                'product_id' => $productSize->product_id,
                'product_size_id' => $productSize->id,
                'quantity' => $request->quantity,
            ]);
        }

        return back()->with('success', 'Product added to cart!');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, CartItem $cartItem)
    {
        // Authorize that the user owns this cart item
        $this->authorize('update', $cartItem);

        $request->validate([
            'quantity' => 'required|integer|min:1',
        ]);

        $cartItem->update(['quantity' => $request->quantity]);

        return back()->with('success', 'Cart updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CartItem $cartItem)
    {
        // Authorize that the user owns this cart item
        $this->authorize('destroy', $cartItem);

        $cartItem->delete();

        return back()->with('success', 'Item removed from cart.');
    }
}
