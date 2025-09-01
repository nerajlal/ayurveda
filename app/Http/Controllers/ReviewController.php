<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use App\Models\Order;
use App\Models\Review;

class ReviewController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'product_id' => 'required|exists:products,id',
            'order_id' => 'required|exists:orders,id',
            'rating' => 'required|integer|min:1|max:5',
            'comment' => 'nullable|string',
        ]);

        $user = Auth::user();
        $order = Order::where('id', $request->order_id)->where('user_id', $user->id)->first();

        if (!$order) {
            return back()->with('error', 'You can only review products from your own orders.');
        }

        $hasPurchased = $order->items()->whereHas('productSize', function ($query) use ($request) {
            $query->where('product_id', $request->product_id);
        })->exists();

        if (!$hasPurchased) {
            return back()->with('error', 'You have not purchased this product in this order.');
        }

        Review::updateOrCreate(
            [
                'user_id' => $user->id,
                'product_id' => $request->product_id,
                'order_id' => $request->order_id,
            ],
            [
                'rating' => $request->rating,
                'comment' => $request->comment,
            ]
        );

        return back()->with('success', 'Thank you for your review!');
    }
}
