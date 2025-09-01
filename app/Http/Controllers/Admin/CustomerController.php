<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Carbon\Carbon;

class CustomerController extends Controller
{
    /**
     * Display a listing of the customers.
     */
    public function index(Request $request)
    {
        // Base query for customers
        $query = User::where('user_type', 'user');

        // Handle search
        if ($request->filled('search')) {
            $searchTerm = '%' . $request->search . '%';
            $query->where(function ($q) use ($searchTerm) {
                $q->where('first_name', 'like', $searchTerm)
                  ->orWhere('last_name', 'like', $searchTerm)
                  ->orWhere('email', 'like', $searchTerm);
            });
        }

        // Paginate the results
        $customers = $query->latest()->paginate(15);

        // Stats for cards
        $totalCustomers = User::where('user_type', 'user')->count();
        $newestCustomer = User::where('user_type', 'user')->latest()->first();

        // Active Customers (last 30 days)
        $activeCustomers = User::where('user_type', 'user')
            ->whereHas('orders', function ($query) {
                $query->where('created_at', '>=', Carbon::now()->subDays(30));
            })
            ->count();

        // Top Spender
        $topSpender = User::where('user_type', 'user')
            ->withSum('orders', 'total_amount')
            ->orderByDesc('orders_sum_total_amount')
            ->first();

        return view('admin.customers', compact('customers', 'totalCustomers', 'newestCustomer', 'activeCustomers', 'topSpender'));
    }
}
