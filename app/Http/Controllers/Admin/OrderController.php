<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;

class OrderController extends Controller
{
    public function index(Request $request)
    {
        $query = Order::with('user')->latest();

        // Handle search
        if ($request->has('search') && $request->search != '') {
            $searchTerm = $request->search;
            $query->where(function($q) use ($searchTerm) {
                $q->where('id', 'like', '%' . $searchTerm . '%')
                  ->orWhereHas('user', function($userQuery) use ($searchTerm) {
                      $userQuery->where('first_name', 'like', '%' . $searchTerm . '%')
                                ->orWhere('last_name', 'like', '%' . $searchTerm . '%')
                                ->orWhere('email', 'like', '%' . $searchTerm . '%');
                  });
            });
        }

        // Handle status filter
        if ($request->has('status') && $request->status != '') {
            $query->where('status', $request->status);
        }

        $orders = $query->paginate(15)->withQueryString();

        // Calculate stats
        $now = now();

        // Orders This Month vs Last Month
        $ordersThisMonth = Order::whereBetween('created_at', [$now->startOfMonth(), $now->endOfMonth()])->count();
        $ordersLastMonth = Order::whereBetween('created_at', [$now->copy()->subMonth()->startOfMonth(), $now->copy()->subMonth()->endOfMonth()])->count();
        $ordersPercentageChange = $ordersLastMonth > 0 ? (($ordersThisMonth - $ordersLastMonth) / $ordersLastMonth) * 100 : ($ordersThisMonth > 0 ? 100 : 0);

        // Delivered This Week vs Last Week
        $deliveredThisWeek = Order::where('status', 3)->whereBetween('updated_at', [$now->startOfWeek(), $now->endOfWeek()])->count();
        $deliveredLastWeek = Order::where('status', 3)->whereBetween('updated_at', [$now->copy()->subWeek()->startOfWeek(), $now->copy()->subWeek()->endOfWeek()])->count();
        $deliveredPercentageChange = $deliveredLastWeek > 0 ? (($deliveredThisWeek - $deliveredLastWeek) / $deliveredLastWeek) * 100 : ($deliveredThisWeek > 0 ? 100 : 0);

        // Avg Order Value This Month vs Last Month
        $avgThisMonth = Order::whereBetween('created_at', [$now->startOfMonth(), $now->endOfMonth()])->avg('total_amount');
        $avgLastMonth = Order::whereBetween('created_at', [$now->copy()->subMonth()->startOfMonth(), $now->copy()->subMonth()->endOfMonth()])->avg('total_amount');
        $avgPercentageChange = $avgLastMonth > 0 ? (($avgThisMonth - $avgLastMonth) / $avgLastMonth) * 100 : ($avgThisMonth > 0 ? 100 : 0);

        $stats = [
            'orders_this_month' => $ordersThisMonth,
            'orders_percentage_change' => $ordersPercentageChange,
            'new_orders' => Order::where('status', 0)->count(),
            'delivered_this_week' => $deliveredThisWeek,
            'delivered_percentage_change' => $deliveredPercentageChange,
            'avg_order_value_this_month' => $avgThisMonth,
            'avg_percentage_change' => $avgPercentageChange,
        ];

        return view('admin.orders', [
            'orders' => $orders,
            'stats' => $stats,
            'filters' => $request->only(['search', 'status']),
        ]);
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
