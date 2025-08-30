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
                    <p class="text-2xl font-bold text-ayur-green mt-1">1,247</p>
                    <p class="text-green-600 text-sm mt-1">+8.2% from last month</p>
                </div>
                <div class="w-12 h-12 bg-green-100 rounded-full flex items-center justify-center">
                    <span class="text-green-600 text-xl">📦</span>
                </div>
            </div>
        </div>
        
        <div class="bg-white p-6 rounded-xl card-shadow hover-lift">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-ayur-brown text-sm font-medium">Pending Orders</p>
                    <p class="text-2xl font-bold text-ayur-green mt-1">42</p>
                    <p class="text-red-600 text-sm mt-1">Immediate action required</p>
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
                    <p class="text-2xl font-bold text-ayur-green mt-1">215</p>
                    <p class="text-blue-600 text-sm mt-1">On-time rate: 98%</p>
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
                    <p class="text-2xl font-bold text-ayur-green mt-1">₹1,247</p>
                    <p class="text-purple-600 text-sm mt-1">↗ ₹85 from last month</p>
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
                        <tr class="table-hover">
                            <td class="py-3 text-sm font-medium text-ayur-green">#AYR-1234</td>
                            <td class="py-3 text-sm text-ayur-brown">Priya Sharma</td>
                            <td class="py-3 text-sm text-ayur-brown">2 items</td>
                            <td class="py-3 text-sm text-ayur-brown">₹899</td>
                            <td class="py-3 text-sm text-ayur-brown">2023-10-25</td>
                            <td class="py-3">
                                <select class="text-ayur-green bg-white border border-gray-300 rounded-full px-2 py-1 text-xs font-medium focus:outline-none focus:ring-1 focus:ring-ayur-green">
                                    <option>Pending</option>
                                    <option>Processing</option>
                                    <option>Shipped</option>
                                    <option selected>Delivered</option>
                                    <option>Canceled</option>
                                </select>
                            </td>
                            <td class="py-3">
                                <button class="text-ayur-green hover:text-ayur-dark text-sm mr-2">View</button>
                                <button class="text-blue-500 hover:text-blue-700 text-sm">Invoice</button>
                            </td>
                        </tr>
                        <tr class="table-hover">
                            <td class="py-3 text-sm font-medium text-ayur-green">#AYR-1235</td>
                            <td class="py-3 text-sm text-ayur-brown">Rajesh Kumar</td>
                            <td class="py-3 text-sm text-ayur-brown">1 item</td>
                            <td class="py-3 text-sm text-ayur-brown">₹549</td>
                            <td class="py-3 text-sm text-ayur-brown">2023-10-26</td>
                            <td class="py-3">
                                <select class="text-ayur-green bg-white border border-gray-300 rounded-full px-2 py-1 text-xs font-medium focus:outline-none focus:ring-1 focus:ring-ayur-green">
                                    <option>Pending</option>
                                    <option selected>Processing</option>
                                    <option>Shipped</option>
                                    <option>Delivered</option>
                                    <option>Canceled</option>
                                </select>
                            </td>
                            <td class="py-3">
                                <button class="text-ayur-green hover:text-ayur-dark text-sm mr-2">View</button>
                                <button class="text-blue-500 hover:text-blue-700 text-sm">Invoice</button>
                            </td>
                        </tr>
                        <tr class="table-hover">
                            <td class="py-3 text-sm font-medium text-ayur-green">#AYR-1236</td>
                            <td class="py-3 text-sm text-ayur-brown">Meera Patel</td>
                            <td class="py-3 text-sm text-ayur-brown">3 items</td>
                            <td class="py-3 text-sm text-ayur-brown">₹1,245</td>
                            <td class="py-3 text-sm text-ayur-brown">2023-10-26</td>
                            <td class="py-3">
                                <select class="text-ayur-green bg-white border border-gray-300 rounded-full px-2 py-1 text-xs font-medium focus:outline-none focus:ring-1 focus:ring-ayur-green">
                                    <option selected>Pending</option>
                                    <option>Processing</option>
                                    <option>Shipped</option>
                                    <option>Delivered</option>
                                    <option>Canceled</option>
                                </select>
                            </td>
                            <td class="py-3">
                                <button class="text-ayur-green hover:text-ayur-dark text-sm mr-2">View</button>
                                <button class="text-blue-500 hover:text-blue-700 text-sm">Invoice</button>
                            </td>
                        </tr>
                        <tr class="table-hover">
                            <td class="py-3 text-sm font-medium text-ayur-green">#AYR-1237</td>
                            <td class="py-3 text-sm text-ayur-brown">Amit Singh</td>
                            <td class="py-3 text-sm text-ayur-brown">1 item</td>
                            <td class="py-3 text-sm text-ayur-brown">₹299</td>
                            <td class="py-3 text-sm text-ayur-brown">2023-10-27</td>
                            <td class="py-3">
                                <select class="text-ayur-green bg-white border border-gray-300 rounded-full px-2 py-1 text-xs font-medium focus:outline-none focus:ring-1 focus:ring-ayur-green">
                                    <option>Pending</option>
                                    <option>Processing</option>
                                    <option selected>Shipped</option>
                                    <option>Delivered</option>
                                    <option>Canceled</option>
                                </select>
                            </td>
                            <td class="py-3">
                                <button class="text-ayur-green hover:text-ayur-dark text-sm mr-2">View</button>
                                <button class="text-blue-500 hover:text-blue-700 text-sm">Invoice</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
    
@include('admin.includes.footer')
