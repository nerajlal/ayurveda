<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\User;
use Carbon\Carbon;
use App\Models\ProductSize;

class AnalyticsController extends Controller
{
    public function index()
    {
        $now = now();
        $currentYear = $now->year;
        $currentMonth = $now->month;

        $previousMonthCarbon = $now->copy()->subMonthNoOverflow();
        $previousMonthYear = $previousMonthCarbon->year;
        $previousMonth = $previousMonthCarbon->month;

        // Total Revenue This Month vs Last Month
        $totalRevenueCurrentMonth = Order::whereYear('created_at', $currentYear)->whereMonth('created_at', $currentMonth)->sum('total_amount');
        $totalRevenuePreviousMonth = Order::whereYear('created_at', $previousMonthYear)->whereMonth('created_at', $previousMonth)->sum('total_amount');
        $revenuePercentageChange = $totalRevenuePreviousMonth > 0 ? (($totalRevenueCurrentMonth - $totalRevenuePreviousMonth) / $totalRevenuePreviousMonth) * 100 : ($totalRevenueCurrentMonth > 0 ? 100 : 0);

        // Total Orders This Month vs Last Month
        $totalOrdersCurrentMonth = Order::whereYear('created_at', $currentYear)->whereMonth('created_at', $currentMonth)->count();
        $totalOrdersPreviousMonth = Order::whereYear('created_at', $previousMonthYear)->whereMonth('created_at', $previousMonth)->count();
        $ordersPercentageChange = $totalOrdersPreviousMonth > 0 ? (($totalOrdersCurrentMonth - $totalOrdersPreviousMonth) / $totalOrdersPreviousMonth) * 100 : ($totalOrdersCurrentMonth > 0 ? 100 : 0);

        // New Customers This Month vs Last Month
        $newCustomersCurrentMonth = User::whereYear('created_at', $currentYear)->whereMonth('created_at', $currentMonth)->count();
        $newCustomersPreviousMonth = User::whereYear('created_at', $previousMonthYear)->whereMonth('created_at', $previousMonth)->count();
        $customersPercentageChange = $newCustomersPreviousMonth > 0 ? (($newCustomersCurrentMonth - $newCustomersPreviousMonth) / $newCustomersPreviousMonth) * 100 : ($newCustomersCurrentMonth > 0 ? 100 : 0);

        // New Orders (Pending)
        $newOrders = Order::where('status', 0)->count();

        // Recent Orders
        $recentOrders = Order::with('user', 'items.productSize.product')->latest()->take(5)->get();

        // Out of Stock Variants Count
        $outOfStockVariantsCount = ProductSize::where('stock_quantity', 0)->count();

        return view('admin.index', compact(
            'totalRevenueCurrentMonth',
            'revenuePercentageChange',
            'totalOrdersCurrentMonth',
            'ordersPercentageChange',
            'newCustomersCurrentMonth',
            'customersPercentageChange',
            'newOrders',
            'recentOrders',
            'outOfStockVariantsCount'
        ));
    }
}
