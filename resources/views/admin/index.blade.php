@include('admin.includes.sidebar')


    <!-- Main Content -->
    <div class="ml-64 p-6">
        <!-- Header -->
        <div class="mb-8">
            <div class="flex justify-between items-center mb-6">
                <div>
                    <h2 class="font-playfair text-3xl font-bold text-ayur-green">Dashboard Overview</h2>
                    <p class="text-ayur-brown mt-1">Welcome back, Dr. Sharma! Here's what's happening with your store.</p>
                </div>
                <div class="flex items-center space-x-4">
                    <button class="bg-white p-3 rounded-lg card-shadow hover-lift text-ayur-green">
                        <span class="text-lg">🔔</span>
                    </button>
                    <a href="/admin-products">
                        <button class="bg-ayur-green text-white px-6 py-3 rounded-lg hover:bg-ayur-dark transition duration-300 font-medium">
                            View Product
                        </button>
                    </a>
                </div>
            </div>
        </div>

        <!-- Stats Cards -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
            <div class="bg-white p-6 rounded-xl card-shadow hover-lift">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-ayur-brown text-sm font-medium">Total Revenue</p>
                        <p class="text-2xl font-bold text-ayur-green mt-1">₹{{ number_format($totalRevenueCurrentMonth, 2) }}</p>
                        <p class="text-{{ $revenuePercentageChange >= 0 ? 'green' : 'red' }}-600 text-sm mt-1">
                            {{ $revenuePercentageChange >= 0 ? '+' : '' }}{{ number_format($revenuePercentageChange, 1) }}% from last month
                        </p>
                    </div>
                    <div class="w-12 h-12 bg-green-100 rounded-full flex items-center justify-center">
                        <span class="text-green-600 text-xl">💰</span>
                    </div>
                </div>
            </div>
            
            <div class="bg-white p-6 rounded-xl card-shadow hover-lift">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-ayur-brown text-sm font-medium">Total Orders</p>
                        <p class="text-2xl font-bold text-ayur-green mt-1">{{ number_format($totalOrdersCurrentMonth) }}</p>
                        <p class="text-{{ $ordersPercentageChange >= 0 ? 'blue' : 'red' }}-600 text-sm mt-1">
                            {{ $ordersPercentageChange >= 0 ? '+' : '' }}{{ number_format($ordersPercentageChange, 1) }}% from last month
                        </p>
                    </div>
                    <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center">
                        <span class="text-blue-600 text-xl">📦</span>
                    </div>
                </div>
            </div>
            
            <div class="bg-white p-6 rounded-xl card-shadow hover-lift">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-ayur-brown text-sm font-medium">New Customers</p>
                        <p class="text-2xl font-bold text-ayur-green mt-1">{{ number_format($newCustomersCurrentMonth) }}</p>
                        <p class="text-{{ $customersPercentageChange >= 0 ? 'purple' : 'red' }}-600 text-sm mt-1">
                            {{ $customersPercentageChange >= 0 ? '+' : '' }}{{ number_format($customersPercentageChange, 1) }}% from last month
                        </p>
                    </div>
                    <div class="w-12 h-12 bg-purple-100 rounded-full flex items-center justify-center">
                        <span class="text-purple-600 text-xl">👥</span>
                    </div>
                </div>
            </div>
            
            <div class="bg-white p-6 rounded-xl card-shadow hover-lift">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-ayur-brown text-sm font-medium">New Orders</p>
                        <p class="text-2xl font-bold text-ayur-green mt-1">{{ number_format($newOrders) }}</p>
                        <p class="text-red-600 text-sm mt-1">Pending</p>
                    </div>
                    <div class="w-12 h-12 bg-orange-100 rounded-full flex items-center justify-center">
                        <span class="text-orange-600 text-xl">⏳</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Recent Orders and Quick Actions -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 mb-8">
            <!-- Recent Orders -->
            <div class="lg:col-span-2 bg-white rounded-xl card-shadow">
                <div class="p-6 border-b border-gray-100">
                    <div class="flex justify-between items-center">
                        <h3 class="font-playfair text-xl font-semibold text-ayur-green">Recent Orders</h3>
                        <a href="/admin-orders">
                            <button class="text-ayur-green hover:text-ayur-dark transition duration-300 text-sm font-medium">
                                View All →
                            </button>
                        </a>
                    </div>
                </div>
                <div class="p-6">
                    <div class="overflow-x-auto">
                        <table class="w-full">
                            <thead>
                                <tr class="text-left border-b border-gray-100">
                                    <th class="pb-3 text-sm font-medium text-ayur-brown">Order ID</th>
                                    <th class="pb-3 text-sm font-medium text-ayur-brown">Customer</th>
                                    <th class="pb-3 text-sm font-medium text-ayur-brown">Product</th>
                                    <th class="pb-3 text-sm font-medium text-ayur-brown">Amount</th>
                                    <th class="pb-3 text-sm font-medium text-ayur-brown">Status</th>
                                </tr>
                            </thead>
                            <tbody class="space-y-2">
                                @forelse ($recentOrders as $order)
                                    <tr class="table-hover">
                                        <td class="py-3 text-sm font-medium text-ayur-green">#{{ $order->id }}</td>
                                        <td class="py-3 text-sm text-ayur-brown">{{ $order->user->first_name }} {{ $order->user->last_name }}</td>
                                        <td class="py-3 text-sm text-ayur-brown">{{ $order->items->first() ? $order->items->first()->productSize->product->name : 'N/A' }}</td>
                                        <td class="py-3 text-sm text-ayur-brown">₹{{ number_format($order->total_amount, 2) }}</td>
                                        <td class="py-3">
                                            @php
                                                $statusClass = '';
                                                $statusText = '';
                                                switch ($order->status) {
                                                    case 0:
                                                        $statusClass = 'bg-red-500';
                                                        $statusText = 'Pending';
                                                        break;
                                                    case 1:
                                                        $statusClass = 'bg-yellow-500';
                                                        $statusText = 'Processing';
                                                        break;
                                                    case 2:
                                                        $statusClass = 'bg-blue-500';
                                                        $statusText = 'Shipped';
                                                        break;
                                                    case 3:
                                                        $statusClass = 'bg-green-500';
                                                        $statusText = 'Completed';
                                                        break;
                                                    default:
                                                        $statusClass = 'bg-gray-500';
                                                        $statusText = 'Unknown';
                                                }
                                            @endphp
                                            <span class="{{ $statusClass }} text-white text-xs px-2 py-1 rounded-full">{{ $statusText }}</span>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="5" class="text-center py-4">No recent orders found.</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            
            <!-- Quick Actions -->
            <div class="bg-white rounded-xl card-shadow">
                <!-- Header -->
                <div class="p-6 border-b border-gray-100">
                    <h3 class="font-playfair text-xl font-semibold text-ayur-green">Quick Actions</h3>
                </div>

                <!-- Action Buttons -->
                <div class="p-6 space-y-5">
                    <a href="/admin-products" class="block">
                        <button class="w-full bg-ayur-green text-white p-4 rounded-lg hover:bg-ayur-dark transition duration-300 flex items-center space-x-3">
                            <span class="text-lg">📦</span>
                            <span class="font-medium">Add New Product</span>
                        </button>
                    </a>

                    <a href="/admin-analytics" class="block">
                        <button class="w-full bg-purple-500 text-white p-4 rounded-lg hover:bg-purple-600 transition duration-300 flex items-center space-x-3">
                            <span class="text-lg">📊</span>
                            <span class="font-medium">Generate Report</span>
                        </button>
                    </a>

                    <a href="/admin-orders" class="block">
                        <button class="w-full bg-orange-500 text-white p-4 rounded-lg hover:bg-orange-600 transition duration-300 flex items-center space-x-3">
                            <span class="text-lg">📋</span>
                            <span class="font-medium">Check Orders</span>
                        </button>
                    </a>
                </div>

                <!-- Low Stock Alert -->
                <div class="px-6 pb-6"> <!-- unified padding -->
                    <div class="bg-red-50 border border-red-200 rounded-lg p-4">
                        <div class="flex items-center space-x-3">
                            <span class="text-red-500 text-lg">⚠️</span>
                            <div>
                                <p class="text-sm font-medium text-red-800">Low Stock Alert</p>
                                <p class="text-xs text-red-600 mt-1">3 products are running low</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

    

@include('admin.includes.footer')
