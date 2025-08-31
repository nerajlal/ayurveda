<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

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

        return view('admin.customers', compact('customers', 'totalCustomers', 'newestCustomer'));
    }
}
