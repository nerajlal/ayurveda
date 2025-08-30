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
                    <button class="bg-ayur-green text-white px-6 py-3 rounded-lg hover:bg-ayur-dark transition duration-300 font-medium">
                        + Add Product
                    </button>
                </div>
            </div>
        </div>

        <!-- Stats Cards -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
            <div class="bg-white p-6 rounded-xl card-shadow hover-lift">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-ayur-brown text-sm font-medium">Total Revenue</p>
                        <p class="text-2xl font-bold text-ayur-green mt-1">₹2,47,850</p>
                        <p class="text-green-600 text-sm mt-1">+12.5% from last month</p>
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
                        <p class="text-2xl font-bold text-ayur-green mt-1">1,247</p>
                        <p class="text-blue-600 text-sm mt-1">+8.2% from last month</p>
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
                        <p class="text-2xl font-bold text-ayur-green mt-1">189</p>
                        <p class="text-purple-600 text-sm mt-1">+23.1% from last month</p>
                    </div>
                    <div class="w-12 h-12 bg-purple-100 rounded-full flex items-center justify-center">
                        <span class="text-purple-600 text-xl">👥</span>
                    </div>
                </div>
            </div>
            
            <div class="bg-white p-6 rounded-xl card-shadow hover-lift">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-ayur-brown text-sm font-medium">Consultations</p>
                        <p class="text-2xl font-bold text-ayur-green mt-1">34</p>
                        <p class="text-orange-600 text-sm mt-1">+15.7% from last month</p>
                    </div>
                    <div class="w-12 h-12 bg-orange-100 rounded-full flex items-center justify-center">
                        <span class="text-orange-600 text-xl">👨‍⚕️</span>
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
                        <button class="text-ayur-green hover:text-ayur-dark transition duration-300 text-sm font-medium">
                            View All →
                        </button>
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
                                <tr class="table-hover">
                                    <td class="py-3 text-sm font-medium text-ayur-green">#AYR-1234</td>
                                    <td class="py-3 text-sm text-ayur-brown">Priya Sharma</td>
                                    <td class="py-3 text-sm text-ayur-brown">Brahmi Hair Oil</td>
                                    <td class="py-3 text-sm text-ayur-brown">₹899</td>
                                    <td class="py-3">
                                        <span class="status-completed text-white text-xs px-2 py-1 rounded-full">Completed</span>
                                    </td>
                                </tr>
                                <tr class="table-hover">
                                    <td class="py-3 text-sm font-medium text-ayur-green">#AYR-1235</td>
                                    <td class="py-3 text-sm text-ayur-brown">Rajesh Kumar</td>
                                    <td class="py-3 text-sm text-ayur-brown">Immunity Tea Blend</td>
                                    <td class="py-3 text-sm text-ayur-brown">₹549</td>
                                    <td class="py-3">
                                        <span class="status-processing text-white text-xs px-2 py-1 rounded-full">Processing</span>
                                    </td>
                                </tr>
                                <tr class="table-hover">
                                    <td class="py-3 text-sm font-medium text-ayur-green">#AYR-1236</td>
                                    <td class="py-3 text-sm text-ayur-brown">Meera Patel</td>
                                    <td class="py-3 text-sm text-ayur-brown">Triphala Churna</td>
                                    <td class="py-3 text-sm text-ayur-brown">₹399</td>
                                    <td class="py-3">
                                        <span class="status-pending text-white text-xs px-2 py-1 rounded-full">Pending</span>
                                    </td>
                                </tr>
                                <tr class="table-hover">
                                    <td class="py-3 text-sm font-medium text-ayur-green">#AYR-1237</td>
                                    <td class="py-3 text-sm text-ayur-brown">Amit Singh</td>
                                    <td class="py-3 text-sm text-ayur-brown">Neem Face Pack</td>
                                    <td class="py-3 text-sm text-ayur-brown">₹299</td>
                                    <td class="py-3">
                                        <span class="status-completed text-white text-xs px-2 py-1 rounded-full">Completed</span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            
            <!-- Quick Actions -->
            <div class="bg-white rounded-xl card-shadow">
                <div class="p-6 border-b border-gray-100">
                    <h3 class="font-playfair text-xl font-semibold text-ayur-green">Quick Actions</h3>
                </div>
                <div class="p-6 space-y-4">
                    <button class="w-full bg-ayur-green text-white p-4 rounded-lg hover:bg-ayur-dark transition duration-300 flex items-center space-x-3">
                        <span class="text-lg">📦</span>
                        <span class="font-medium">Add New Product</span>
                    </button>
                    <button class="w-full bg-blue-500 text-white p-4 rounded-lg hover:bg-blue-600 transition duration-300 flex items-center space-x-3">
                        <span class="text-lg">👨‍⚕️</span>
                        <span class="font-medium">Schedule Consultation</span>
                    </button>
                    <button class="w-full bg-purple-500 text-white p-4 rounded-lg hover:bg-purple-600 transition duration-300 flex items-center space-x-3">
                        <span class="text-lg">📊</span>
                        <span class="font-medium">Generate Report</span>
                    </button>
                    <button class="w-full bg-orange-500 text-white p-4 rounded-lg hover:bg-orange-600 transition duration-300 flex items-center space-x-3">
                        <span class="text-lg">📋</span>
                        <span class="font-medium">Update Inventory</span>
                    </button>
                </div>
                
                <!-- Low Stock Alert -->
                <div class="p-6 border-t border-gray-100">
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

        <!-- Performance Metrics -->
        <div class="grid grid-cols-1 lg:grid-cols-4 gap-6">
            <div class="bg-white p-6 rounded-xl card-shadow">
                <h4 class="font-medium text-ayur-brown mb-4">Conversion Rate</h4>
                <div class="flex items-center justify-between mb-2">
                    <span class="text-2xl font-bold text-ayur-green">3.2%</span>
                    <span class="text-green-500 text-sm">↗ 0.5%</span>
                </div>
                <div class="w-full bg-gray-200 rounded-full h-2">
                    <div class="progress-bar h-2 rounded-full" style="width: 32%"></div>
                </div>
            </div>
            
            <div class="bg-white p-6 rounded-xl card-shadow">
                <h4 class="font-medium text-ayur-brown mb-4">Average Order Value</h4>
                <div class="flex items-center justify-between mb-2">
                    <span class="text-2xl font-bold text-ayur-green">₹1,247</span>
                    <span class="text-green-500 text-sm">↗ ₹85</span>
                </div>
                <div class="w-full bg-gray-200 rounded-full h-2">
                    <div class="progress-bar h-2 rounded-full" style="width: 68%"></div>
                </div>
            </div>
            
            <div class="bg-white p-6 rounded-xl card-shadow">
                <h4 class="font-medium text-ayur-brown mb-4">Customer Retention</h4>
                <div class="flex items-center justify-between mb-2">
                    <span class="text-2xl font-bold text-ayur-green">87%</span>
                    <span class="text-green-500 text-sm">↗ 2%</span>
                </div>
                <div class="w-full bg-gray-200 rounded-full h-2">
                    <div class="progress-bar h-2 rounded-full" style="width: 87%"></div>
                </div>
            </div>
            
            <div class="bg-white p-6 rounded-xl card-shadow">
                <h4 class="font-medium text-ayur-brown mb-4">Satisfaction Score</h4>
                <div class="flex items-center justify-between mb-2">
                    <span class="text-2xl font-bold text-ayur-green">4.8/5</span>
                    <span class="text-green-500 text-sm">↗ 0.2</span>
                </div>
                <div class="w-full bg-gray-200 rounded-full h-2">
                    <div class="progress-bar h-2 rounded-full" style="width: 96%"></div>
                </div>
            </div>
        </div>
    </div>

    

@include('admin.includes.footer')
