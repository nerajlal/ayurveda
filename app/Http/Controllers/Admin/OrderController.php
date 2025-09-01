<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\User;
use Carbon\Carbon;

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

        // Total Revenue This Month vs Last Month
        $totalRevenueCurrentMonth = Order::whereBetween('created_at', [$now->startOfMonth(), $now->endOfMonth()])->sum('total_amount');
        $totalRevenuePreviousMonth = Order::whereBetween('created_at', [$now->copy()->subMonth()->startOfMonth(), $now->copy()->subMonth()->endOfMonth()])->sum('total_amount');
        $revenuePercentageChange = $totalRevenuePreviousMonth > 0 ? (($totalRevenueCurrentMonth - $totalRevenuePreviousMonth) / $totalRevenuePreviousMonth) * 100 : ($totalRevenueCurrentMonth > 0 ? 100 : 0);

        // Total Orders This Month vs Last Month
        $totalOrdersCurrentMonth = Order::whereBetween('created_at', [$now->startOfMonth(), $now->endOfMonth()])->count();
        $totalOrdersPreviousMonth = Order::whereBetween('created_at', [$now->copy()->subMonth()->startOfMonth(), $now->copy()->subMonth()->endOfMonth()])->count();
        $ordersPercentageChange = $totalOrdersPreviousMonth > 0 ? (($totalOrdersCurrentMonth - $totalOrdersPreviousMonth) / $totalOrdersPreviousMonth) * 100 : ($totalOrdersCurrentMonth > 0 ? 100 : 0);

        // Avg Order Value This Month vs Last Month
        $avgOrderValueCurrentMonth = Order::whereBetween('created_at', [$now->startOfMonth(), $now->endOfMonth()])->avg('total_amount');
        $avgOrderValuePreviousMonth = Order::whereBetween('created_at', [$now->copy()->subMonth()->startOfMonth(), $now->copy()->subMonth()->endOfMonth()])->avg('total_amount');
        $avgOrderValuePercentageChange = $avgOrderValuePreviousMonth > 0 ? (($avgOrderValueCurrentMonth - $avgOrderValuePreviousMonth) / $avgOrderValuePreviousMonth) * 100 : ($avgOrderValueCurrentMonth > 0 ? 100 : 0);

        // New Orders (Pending)
        $newOrders = Order::where('status', 0)->count();

        $stats = [
            'totalRevenueCurrentMonth' => $totalRevenueCurrentMonth,
            'revenuePercentageChange' => $revenuePercentageChange,
            'totalOrdersCurrentMonth' => $totalOrdersCurrentMonth,
            'ordersPercentageChange' => $ordersPercentageChange,
            'avgOrderValueCurrentMonth' => $avgOrderValueCurrentMonth,
            'avgOrderValuePercentageChange' => $avgOrderValuePercentageChange,
            'newOrders' => $newOrders,
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
