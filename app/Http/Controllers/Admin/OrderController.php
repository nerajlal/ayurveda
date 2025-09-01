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

        // Avg Order Value This Month vs Last Month
        $avgOrderValueCurrentMonth = Order::whereYear('created_at', $currentYear)->whereMonth('created_at', $currentMonth)->avg('total_amount');
        $avgOrderValuePreviousMonth = Order::whereYear('created_at', $previousMonthYear)->whereMonth('created_at', $previousMonth)->avg('total_amount');
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

    public function export(Request $request)
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

        $orders = $query->get();

        $fileName = 'orders.csv';
        $headers = array(
            "Content-type"        => "text/csv",
            "Content-Disposition" => "attachment; filename=$fileName",
            "Pragma"              => "no-cache",
            "Cache-Control"       => "must-revalidate, post-check=0, pre-check=0",
            "Expires"             => "0"
        );

        $columns = array('Order ID', 'Customer', 'Email', 'Total Amount', 'Status', 'Order Date');

        $callback = function() use($orders, $columns) {
            $file = fopen('php://output', 'w');
            fputcsv($file, $columns);

            foreach ($orders as $order) {
                $row['Order ID']  = $order->id;
                $row['Customer']    = $order->user->first_name . ' ' . $order->user->last_name;
                $row['Email']    = $order->user->email;
                $row['Total Amount']  = $order->total_amount;

                switch ($order->status) {
                    case 0:
                        $status = 'Pending';
                        break;
                    case 1:
                        $status = 'Processing';
                        break;
                    case 2:
                        $status = 'Shipped';
                        break;
                    case 3:
                        $status = 'Delivered';
                        break;
                    default:
                        $status = 'Unknown';
                }
                $row['Status'] = $status;

                $row['Order Date'] = $order->created_at->format('Y-m-d H:i:s');

                fputcsv($file, array($row['Order ID'], $row['Customer'], $row['Email'], $row['Total Amount'], $row['Status'], $row['Order Date']));
            }

            fclose($file);
        };

        return response()->stream($callback, 200, $headers);
    }
}
