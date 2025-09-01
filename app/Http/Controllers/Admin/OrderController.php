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

        // Get the current month and the previous month
        $currentMonth = Carbon::now()->month;
        $previousMonth = Carbon::now()->subMonth()->month;

        // Get total revenue for the current month
        $totalRevenueCurrentMonth = Order::whereMonth('created_at', $currentMonth)->sum('total_amount');

        // Get total revenue for the previous month
        $totalRevenuePreviousMonth = Order::whereMonth('created_at', $previousMonth)->sum('total_amount');

        // Calculate the percentage change in revenue
        $revenuePercentageChange = 0;
        if ($totalRevenuePreviousMonth > 0) {
            $revenuePercentageChange = (($totalRevenueCurrentMonth - $totalRevenuePreviousMonth) / $totalRevenuePreviousMonth) * 100;
        }

        // Get total orders for the current month
        $totalOrdersCurrentMonth = Order::whereMonth('created_at', $currentMonth)->count();

        // Get total orders for the previous month
        $totalOrdersPreviousMonth = Order::whereMonth('created_at', $previousMonth)->count();

        // Calculate the percentage change in orders
        $ordersPercentageChange = 0;
        if ($totalOrdersPreviousMonth > 0) {
            $ordersPercentageChange = (($totalOrdersCurrentMonth - $totalOrdersPreviousMonth) / $totalOrdersPreviousMonth) * 100;
        }

        // Get new customers for the current month
        $newCustomersCurrentMonth = User::whereMonth('created_at', $currentMonth)->count();

        // Get new customers for the previous month
        $newCustomersPreviousMonth = User::whereMonth('created_at', $previousMonth)->count();

        // Calculate the percentage change in new customers
        $customersPercentageChange = 0;
        if ($newCustomersPreviousMonth > 0) {
            $customersPercentageChange = (($newCustomersCurrentMonth - $newCustomersPreviousMonth) / $newCustomersPreviousMonth) * 100;
        }

        // Assuming consultations are represented by orders
        $consultationsCurrentMonth = $totalOrdersCurrentMonth;
        $consultationsPreviousMonth = $totalOrdersPreviousMonth;
        $consultationsPercentageChange = $ordersPercentageChange;

        $stats = [
            'totalRevenueCurrentMonth' => $totalRevenueCurrentMonth,
            'revenuePercentageChange' => $revenuePercentageChange,
            'totalOrdersCurrentMonth' => $totalOrdersCurrentMonth,
            'ordersPercentageChange' => $ordersPercentageChange,
            'newCustomersCurrentMonth' => $newCustomersCurrentMonth,
            'customersPercentageChange' => $customersPercentageChange,
            'consultationsCurrentMonth' => $consultationsCurrentMonth,
            'consultationsPercentageChange' => $consultationsPercentageChange,
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
