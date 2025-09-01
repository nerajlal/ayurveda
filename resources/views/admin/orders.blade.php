@include('admin.includes.sidebar')

<!-- Custom Styles for Status Badges and Dropdown -->
<style>
    .status-pending { background-color: #fca5a5; } /* Red for Pending */
    .status-processing { background-color: #fde047; } /* Yellow for Processing */
    .status-shipped { background-color: #60a5fa; } /* Blue for Shipped */
    .status-delivered { background-color: #22c55e; } /* Green for Delivered */
    .status-canceled { background-color: #9ca3af; } /* Gray for Canceled */

    .card-shadow { box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05), 0 1px 3px rgba(0, 0, 0, 0.1); }
    .hover-lift:hover { transform: translateY(-4px); transition: transform 0.3s ease-in-out; }
    .table-hover:hover { background-color: #f9fafb; transition: background-color 0.3s; }
</style>

<!-- Main Content -->
<div class="ml-64 p-6 bg-gray-50 min-h-screen font-sans">
    <!-- Header -->
    <div class="mb-8">
        <div class="flex justify-between items-center mb-6">
            <div>
                <h2 class="font-playfair text-3xl font-bold text-ayur-green">Orders Management</h2>
                <p class="text-ayur-brown mt-1">Track, process, and fulfill customer orders with ease.</p>
            </div>
            <div class="flex items-center space-x-4">
                <button class="bg-white p-3 rounded-lg card-shadow hover-lift text-ayur-green">
                    <span class="text-lg">🔔</span>
                </button>
                <button class="bg-ayur-green text-white px-6 py-3 rounded-lg hover:bg-ayur-dark transition duration-300 font-medium">
                    + Export Orders
                </button>
            </div>
        </div>
    </div>

    <!-- Order Stats Cards -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
        <div class="bg-white p-6 rounded-xl card-shadow hover-lift">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-ayur-brown text-sm font-medium">Total Orders</p>
                    <p class="text-2xl font-bold text-ayur-green mt-1">{{ number_format($stats['total_orders']) }}</p>
                </div>
                <div class="w-12 h-12 bg-green-100 rounded-full flex items-center justify-center">
                    <span class="text-green-600 text-xl">📦</span>
                </div>
            </div>
        </div>
        
        <div class="bg-white p-6 rounded-xl card-shadow hover-lift">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-ayur-brown text-sm font-medium">New Orders</p>
                    <p class="text-2xl font-bold text-ayur-green mt-1">{{ number_format($stats['new_orders']) }}</p>
                </div>
                <div class="w-12 h-12 bg-red-100 rounded-full flex items-center justify-center">
                    <span class="text-red-600 text-xl">⏳</span>
                </div>
            </div>
        </div>
        
        <div class="bg-white p-6 rounded-xl card-shadow hover-lift">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-ayur-brown text-sm font-medium">Delivered This Week</p>
                    <p class="text-2xl font-bold text-ayur-green mt-1">{{ number_format($stats['delivered_this_week']) }}</p>
                </div>
                <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center">
                    <span class="text-blue-600 text-xl">✅</span>
                </div>
            </div>
        </div>
        
        <div class="bg-white p-6 rounded-xl card-shadow hover-lift">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-ayur-brown text-sm font-medium">Average Order Value</p>
                    <p class="text-2xl font-bold text-ayur-green mt-1">₹{{ number_format($stats['avg_order_value'], 2) }}</p>
                </div>
                <div class="w-12 h-12 bg-purple-100 rounded-full flex items-center justify-center">
                    <span class="text-purple-600 text-xl">💰</span>
                </div>
            </div>
        </div>
    </div>

    <!-- Orders List and Filters -->
    <div class="bg-white rounded-xl card-shadow">
        <div class="p-6 border-b border-gray-100 flex justify-between items-center flex-wrap gap-4">
            <h3 class="font-playfair text-xl font-semibold text-ayur-green">All Orders</h3>
            <div class="flex items-center space-x-2 flex-grow sm:flex-grow-0">
                <input type="text" placeholder="Search orders..." class="flex-grow border border-gray-300 rounded-md px-3 py-2 text-sm focus:outline-none focus:ring-1 focus:ring-ayur-green">
                <select class="border border-gray-300 rounded-md px-3 py-2 text-sm text-ayur-brown focus:outline-none focus:ring-1 focus:ring-ayur-green">
                    <option>Filter by Status</option>
                    <option>Pending</option>
                    <option>Processing</option>
                    <option>Shipped</option>
                    <option>Delivered</option>
                    <option>Canceled</option>
                </select>
                <button class="bg-gray-100 p-2 rounded-md text-ayur-brown hover:bg-gray-200 transition duration-300">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M3 3a1 1 0 011-1h12a1 1 0 011 1v3a1 1 0 01-.293.707L12 9.414V17a1 1 0 01-1.485.876l-3-2A1 1 0 017 15V9.414L3.293 6.707A1 1 0 013 6V3z" clip-rule="evenodd" />
                    </svg>
                </button>
            </div>
        </div>
        <div class="p-6">
            <div class="overflow-x-auto">
                <table class="w-full min-w-max">
                    <thead>
                        <tr class="text-left border-b border-gray-100">
                            <th class="pb-3 text-sm font-medium text-ayur-brown">Order ID</th>
                            <th class="pb-3 text-sm font-medium text-ayur-brown">Customer</th>
                            <th class="pb-3 text-sm font-medium text-ayur-brown">Items</th>
                            <th class="pb-3 text-sm font-medium text-ayur-brown">Amount</th>
                            <th class="pb-3 text-sm font-medium text-ayur-brown">Date</th>
                            <th class="pb-3 text-sm font-medium text-ayur-brown">Status</th>
                            <th class="pb-3 text-sm font-medium text-ayur-brown">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($orders as $order)
                            <tr class="table-hover">
                                <td class="py-3 text-sm font-medium text-ayur-green">#{{ $order->id }}</td>
                                <td class="py-3 text-sm text-ayur-brown">{{ $order->user->first_name }} {{ $order->user->last_name }}</td>
                                <td class="py-3 text-sm text-ayur-brown">{{ $order->items->count() }} item(s)</td>
                                <td class="py-3 text-sm text-ayur-brown">₹{{ number_format($order->total_amount, 2) }}</td>
                                <td class="py-3 text-sm text-ayur-brown">{{ $order->created_at->format('d M Y') }}</td>
                                <td class="py-3">
                                    <form action="{{ route('admin.orders.updateStatus', $order) }}" method="POST">
                                        @csrf
                                        @method('PATCH')
                                        <select name="status" onchange="this.form.submit()" class="text-ayur-green bg-white border border-gray-300 rounded-full px-2 py-1 text-xs font-medium focus:outline-none focus:ring-1 focus:ring-ayur-green">
                                            <option value="0" @if($order->status == 0) selected @endif>Pending</option>
                                            <option value="1" @if($order->status == 1) selected @endif>Processing</option>
                                            <option value="2" @if($order->status == 2) selected @endif>Shipped</option>
                                            <option value="3" @if($order->status == 3) selected @endif>Delivered</option>
                                        </select>
                                    </form>
                                </td>
                                <td class="py-3">
                                    <button onclick="openOrderDetailsModal({{ $order->id }})" class="text-ayur-green hover:text-ayur-dark text-sm mr-2">View</button>
                                    <a href="{{ route('admin.orders.invoice', $order) }}" target="_blank" class="text-blue-500 hover:text-blue-700 text-sm">Invoice</a>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="7" class="text-center py-8 text-ayur-brown">No orders found.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
            <div class="p-6 border-t border-gray-100">
                {{ $orders->links() }}
            </div>
        </div>
    </div>
</div>
    
@include('admin.includes.footer')
