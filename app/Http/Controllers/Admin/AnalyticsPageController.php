<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\User;
use App\Models\OrderItem;
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
        $totalRevenueCurrentMonth = Order::whereYear('created_at', $currentYear)->whereMonth('created_at', $currentMonth)->sum('total_amount');
        $totalRevenuePreviousMonth = Order::whereYear('created_at', $previousMonthYear)->whereMonth('created_at', $previousMonth)->sum('total_amount');
        $revenuePercentageChange = $totalRevenuePreviousMonth > 0 ? (($totalRevenueCurrentMonth - $totalRevenuePreviousMonth) / $totalRevenuePreviousMonth) * 100 : ($totalRevenueCurrentMonth > 0 ? 100 : 0);

        $newCustomersCurrentMonth = User::whereYear('created_at', $currentYear)->whereMonth('created_at', $currentMonth)->count();
        $newCustomersPreviousMonth = User::whereYear('created_at', $previousMonthYear)->whereMonth('created_at', $previousMonth)->count();
        $customersPercentageChange = $newCustomersPreviousMonth > 0 ? (($newCustomersCurrentMonth - $newCustomersPreviousMonth) / $newCustomersPreviousMonth) * 100 : ($newCustomersCurrentMonth > 0 ? 100 : 0);

        $totalOrdersCurrentMonth = Order::whereYear('created_at', $currentYear)->whereMonth('created_at', $currentMonth)->count();
        $totalOrdersPreviousMonth = Order::whereYear('created_at', $previousMonthYear)->whereMonth('created_at', $previousMonth)->count();
        $ordersPercentageChange = $totalOrdersPreviousMonth > 0 ? (($totalOrdersCurrentMonth - $totalOrdersPreviousMonth) / $totalOrdersPreviousMonth) * 100 : ($totalOrdersCurrentMonth > 0 ? 100 : 0);

        $totalItemsSoldCurrentMonth = OrderItem::whereHas('order', function ($query) use ($currentYear, $currentMonth) {
            $query->whereYear('created_at', $currentYear)->whereMonth('created_at', $currentMonth);
        })->sum('quantity');
        $totalItemsSoldPreviousMonth = OrderItem::whereHas('order', function ($query) use ($previousMonthYear, $previousMonth) {
            $query->whereYear('created_at', $previousMonthYear)->whereMonth('created_at', $previousMonth);
        })->sum('quantity');
        $itemsSoldPercentageChange = $totalItemsSoldPreviousMonth > 0 ? (($totalItemsSoldCurrentMonth - $totalItemsSoldPreviousMonth) / $totalItemsSoldPreviousMonth) * 100 : ($totalItemsSoldCurrentMonth > 0 ? 100 : 0);

        // --- Chart Data (Last 6 Months) ---
        $sixMonthsAgo = Carbon::now()->subMonths(5)->startOfMonth();

        $revenueData = Order::select(DB::raw('YEAR(created_at) as year, MONTH(created_at) as month, SUM(total_amount) as total'))
            ->where('created_at', '>=', $sixMonthsAgo)->groupBy('year', 'month')->get()->keyBy(fn($item) => $item->year . '-' . $item->month);

        $ordersData = Order::select(DB::raw('YEAR(created_at) as year, MONTH(created_at) as month, COUNT(*) as total'))
            ->where('created_at', '>=', $sixMonthsAgo)->groupBy('year', 'month')->get()->keyBy(fn($item) => $item->year . '-' . $item->month);

        $customersData = User::select(DB::raw('YEAR(created_at) as year, MONTH(created_at) as month, COUNT(*) as total'))
            ->where('created_at', '>=', $sixMonthsAgo)->groupBy('year', 'month')->get()->keyBy(fn($item) => $item->year . '-' . $item->month);

        $itemsSoldData = OrderItem::join('orders', 'order_items.order_id', '=', 'orders.id')
            ->select(DB::raw('YEAR(orders.created_at) as year, MONTH(orders.created_at) as month, SUM(order_items.quantity) as total'))
            ->where('orders.created_at', '>=', $sixMonthsAgo)->groupBy('year', 'month')->get()->keyBy(fn($item) => $item->year . '-' . $item->month);

        $chartLabels = [];
        $chartRevenueData = [];
        $chartOrdersData = [];
        $chartCustomersData = [];
        $chartItemsSoldData = [];

        for ($i = 5; $i >= 0; $i--) {
            $date = Carbon::now()->subMonths($i);
            $year = $date->year;
            $month = $date->month;
            $key = $year . '-' . $month;

            $chartLabels[] = $date->format('M Y');
            $chartRevenueData[] = $revenueData->get($key)->total ?? 0;
            $chartOrdersData[] = $ordersData->get($key)->total ?? 0;
            $chartCustomersData[] = $customersData->get($key)->total ?? 0;
            $chartItemsSoldData[] = $itemsSoldData->get($key)->total ?? 0;
        }

        // --- Top Selling Products ---
        $topSellingProducts = DB::table('order_items')
            ->join('product_sizes', 'order_items.product_size_id', '=', 'product_sizes.id')
            ->join('products', 'product_sizes.product_id', '=', 'products.id')
            ->select('products.name', DB::raw('SUM(order_items.quantity) as units_sold'), DB::raw('SUM(order_items.quantity * order_items.price) as revenue'))
            ->groupBy('products.name')->orderByDesc('units_sold')->take(4)->get();

        return view('admin.analytics', compact(
            'totalRevenueCurrentMonth', 'revenuePercentageChange',
            'newCustomersCurrentMonth', 'customersPercentageChange',
            'totalOrdersCurrentMonth', 'ordersPercentageChange',
            'totalItemsSoldCurrentMonth', 'itemsSoldPercentageChange',
            'chartLabels',
            'chartRevenueData', 'chartOrdersData', 'chartCustomersData', 'chartItemsSoldData',
            'topSellingProducts'
        ));
    }
}
