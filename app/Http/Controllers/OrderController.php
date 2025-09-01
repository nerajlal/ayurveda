<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Order;
use App\Models\CartItem;

class OrderController extends Controller
{
    public function store(Request $request)
    {
        $user = Auth::user();
        $cartItems = CartItem::where('user_id', $user->id)->with('productSize')->get();

        if ($cartItems->isEmpty()) {
            return redirect()->route('cart.index')->with('error', 'Your cart is empty.');
        }

        // Ensure user has a shipping address
        $shippingAddress = $user->shippingAddress;
        if (!$shippingAddress) {
            return redirect()->route('cart.index')->with('show_address_modal', true);
        }

        // Calculate total amount
        $totalAmount = $cartItems->sum(function ($cartItem) {
            return $cartItem->quantity * $cartItem->productSize->price;
        });

        // Create the order
        $order = Order::create([
            'user_id' => $user->id,
            'total_amount' => $totalAmount,
            'status' => 0,
            'shipping_address_line_1' => $shippingAddress->address_line_1,
            'shipping_address_line_2' => $shippingAddress->address_line_2,
            'shipping_city' => $shippingAddress->city,
            'shipping_state' => $shippingAddress->state,
            'shipping_postal_code' => $shippingAddress->postal_code,
            'shipping_country' => $shippingAddress->country,
            'shipping_phone_number' => $shippingAddress->delivery_phone_number,
        ]);

        // Create order items
        foreach ($cartItems as $cartItem) {
            $order->items()->create([
                'product_size_id' => $cartItem->product_size_id,
                'quantity' => $cartItem->quantity,
                'price' => $cartItem->productSize->price,
            ]);
        }

        // Clear the cart
        CartItem::where('user_id', $user->id)->delete();

        // Redirect to a success page (to be created)
        return redirect()->route('order.success', $order)->with('success', 'Your order has been placed successfully!');
    }

    public function success(Order $order)
    {
        return view('order-success', compact('order'));
    }
}
