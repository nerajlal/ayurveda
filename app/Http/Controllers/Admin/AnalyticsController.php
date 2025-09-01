<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\User;
use Carbon\Carbon;

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

        return view('admin.index', compact(
            'totalRevenueCurrentMonth',
            'revenuePercentageChange',
            'totalOrdersCurrentMonth',
            'ordersPercentageChange',
            'newCustomersCurrentMonth',
            'customersPercentageChange'
        ));
    }
}
