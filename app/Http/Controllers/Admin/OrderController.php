<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::with('user')->latest()->paginate(15);

        $stats = [
            'total_orders' => Order::count(),
            'new_orders' => Order::where('status', 0)->count(),
            'delivered_this_week' => Order::where('status', 3)->where('updated_at', '>=', now()->startOfWeek())->count(),
            'avg_order_value' => Order::avg('total_amount'),
        ];

        return view('admin.orders', compact('orders', 'stats'));
    }

    public function updateStatus(Request $request, Order $order)
    {
        $request->validate([
            'status' => 'required|integer|in:0,1,2,3',
        ]);

        $order->update(['status' => $request->status]);

        return redirect()->route('admin.orders.index')->with('success', "Order #{$order->id} status has been updated.");
    }

    public function showInvoice(Order $order)
    {
        $order->load(['user', 'items.productSize.product']);

        return view('admin.invoice', compact('order'));
    }
}
