<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class AnalyticsPageController extends Controller
{
    public function index()
    {
        $now = now();
        $currentYear = $now->year;
        $currentMonth = $now->month;
        $previousMonthCarbon = $now->copy()->subMonthNoOverflow();
        $previousMonthYear = $previousMonthCarbon->year;
        $previousMonth = $previousMonthCarbon->month;

        // --- Top Cards ---
        // Total Revenue
        $totalRevenueCurrentMonth = Order::whereYear('created_at', $currentYear)->whereMonth('created_at', $currentMonth)->sum('total_amount');
        $totalRevenuePreviousMonth = Order::whereYear('created_at', $previousMonthYear)->whereMonth('created_at', $previousMonth)->sum('total_amount');
        $revenuePercentageChange = $totalRevenuePreviousMonth > 0 ? (($totalRevenueCurrentMonth - $totalRevenuePreviousMonth) / $totalRevenuePreviousMonth) * 100 : ($totalRevenueCurrentMonth > 0 ? 100 : 0);

        // New Customers
        $newCustomersCurrentMonth = User::whereYear('created_at', $currentYear)->whereMonth('created_at', $currentMonth)->count();
        $newCustomersPreviousMonth = User::whereYear('created_at', $previousMonthYear)->whereMonth('created_at', $previousMonth)->count();
        $customersPercentageChange = $newCustomersPreviousMonth > 0 ? (($newCustomersCurrentMonth - $newCustomersPreviousMonth) / $newCustomersPreviousMonth) * 100 : ($newCustomersCurrentMonth > 0 ? 100 : 0);

        // Average Order Value
        $avgOrderValueCurrentMonth = Order::whereYear('created_at', $currentYear)->whereMonth('created_at', $currentMonth)->avg('total_amount');
        $avgOrderValuePreviousMonth = Order::whereYear('created_at', $previousMonthYear)->whereMonth('created_at', $previousMonth)->avg('total_amount');
        $avgOrderValuePercentageChange = $avgOrderValuePreviousMonth > 0 ? (($avgOrderValueCurrentMonth - $avgOrderValuePreviousMonth) / $avgOrderValuePreviousMonth) * 100 : ($avgOrderValueCurrentMonth > 0 ? 100 : 0);

        // --- Sales Overview Chart (Last 6 Months) ---
        $salesData = Order::select(
            DB::raw('YEAR(created_at) as year'),
            DB::raw('MONTH(created_at) as month'),
            DB::raw('SUM(total_amount) as total')
        )
        ->where('created_at', '>=', Carbon::now()->subMonths(5)->startOfMonth())
        ->groupBy('year', 'month')
        ->orderBy('year', 'asc')
        ->orderBy('month', 'asc')
        ->get();

        $chartLabels = $salesData->map(function($item) {
            return Carbon::createFromDate($item->year, $item->month)->format('M Y');
        });
        $chartData = $salesData->pluck('total');

        // --- Top Selling Products ---
        $topSellingProducts = DB::table('order_items')
            ->join('product_sizes', 'order_items.product_size_id', '=', 'product_sizes.id')
            ->join('products', 'product_sizes.product_id', '=', 'products.id')
            ->select(
                'products.name',
                DB::raw('SUM(order_items.quantity) as units_sold'),
                DB::raw('SUM(order_items.quantity * order_items.price) as revenue')
            )
            ->groupBy('products.name')
            ->orderByDesc('units_sold')
            ->take(4)
            ->get();

        return view('admin.analytics', compact(
            'totalRevenueCurrentMonth',
            'revenuePercentageChange',
            'newCustomersCurrentMonth',
            'customersPercentageChange',
            'avgOrderValueCurrentMonth',
            'avgOrderValuePercentageChange',
            'chartLabels',
            'chartData',
            'topSellingProducts'
        ));
    }
}
