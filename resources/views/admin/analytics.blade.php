@include('admin.includes.sidebar')

<!-- Custom Styles -->
<style>
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
                <h2 class="font-playfair text-3xl font-bold text-ayur-green">Analytics & Reporting</h2>
                <p class="text-ayur-brown mt-1">Dive into your store's performance with key insights and data.</p>
            </div>
            <div class="flex items-center space-x-4">
                <button class="bg-white p-3 rounded-lg card-shadow hover-lift text-ayur-green">
                    <span class="text-lg">🔔</span>
                </button>
                <button class="bg-ayur-green text-white px-6 py-3 rounded-lg hover:bg-ayur-dark transition duration-300 font-medium">
                    Generate Report
                </button>
            </div>
        </div>
    </div>

    <!-- Analytics Stats Cards -->
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
        
        {{-- <div class="bg-white p-6 rounded-xl card-shadow hover-lift">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-ayur-brown text-sm font-medium">Unique Visitors</p>
                    <p class="text-2xl font-bold text-ayur-green mt-1">9,450</p>
                    <p class="text-blue-600 text-sm mt-1">+8.2% from last month</p>
                </div>
                <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center">
                    <span class="text-blue-600 text-xl">📈</span>
                </div>
            </div>
        </div> --}}
        
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
        
        {{-- <div class="bg-white p-6 rounded-xl card-shadow hover-lift">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-ayur-brown text-sm font-medium">Customer Retention</p>
                    <p class="text-2xl font-bold text-ayur-green mt-1">87%</p>
                    <p class="text-orange-600 text-sm mt-1">+2% from last month</p>
                </div>
                <div class="w-12 h-12 bg-orange-100 rounded-full flex items-center justify-center">
                    <span class="text-orange-600 text-xl">♻️</span>
                </div>
            </div>
        </div> --}}
    </div>

    <!-- Charts and Data Tables -->
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 mb-8">
        <!-- Sales Overview Chart -->
        <div class="lg:col-span-2 bg-white rounded-xl card-shadow">
            <div class="p-6 border-b border-gray-100">
                <h3 class="font-playfair text-xl font-semibold text-ayur-green">Sales Overview (Last 6 Months)</h3>
            </div>
            <div class="p-6">
                <canvas id="salesChart" width="400" height="200"></canvas>
            </div>
        </div>
        
        <!-- Top Selling Products -->
        <div class="bg-white rounded-xl card-shadow">
            <div class="p-6 border-b border-gray-100">
                <h3 class="font-playfair text-xl font-semibold text-ayur-green">Top Selling Products</h3>
            </div>
            <div class="p-6">
                <div class="overflow-x-auto">
                    <table class="w-full">
                        <thead>
                            <tr class="text-left border-b border-gray-100">
                                <th class="pb-3 text-sm font-medium text-ayur-brown">Product</th>
                                <th class="pb-3 text-sm font-medium text-ayur-brown">Units Sold</th>
                                <th class="pb-3 text-sm font-medium text-ayur-brown">Revenue</th>
                            </tr>
                        </thead>
                        <tbody class="space-y-2">
                            @forelse ($topSellingProducts as $product)
                                <tr class="table-hover">
                                    <td class="py-3 text-sm font-medium text-ayur-green">{{ $product->name }}</td>
                                    <td class="py-3 text-sm text-ayur-brown">{{ $product->units_sold }}</td>
                                    <td class="py-3 text-sm text-ayur-brown">₹{{ number_format($product->revenue, 2) }}</td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="3" class="text-center py-4">No sales data available.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Additional Analytics Metrics -->
    <div class="grid grid-cols-1 lg:grid-cols-4 gap-6">
        {{-- <div class="bg-white p-6 rounded-xl card-shadow">
            <h4 class="font-medium text-ayur-brown mb-4">Conversion Rate</h4>
            <div class="flex items-center justify-between mb-2">
                <span class="text-2xl font-bold text-ayur-green">3.2%</span>
                <span class="text-green-500 text-sm">↗ 0.5%</span>
            </div>
        </div> --}}
        
        <div class="bg-white p-6 rounded-xl card-shadow">
            <h4 class="font-medium text-ayur-brown mb-4">Average Order Value</h4>
            <div class="flex items-center justify-between mb-2">
                <span class="text-2xl font-bold text-ayur-green">₹{{ number_format($avgOrderValueCurrentMonth, 2) }}</span>
                <span class="text-{{ $avgOrderValuePercentageChange >= 0 ? 'green' : 'red' }}-500 text-sm">
                    {{ $avgOrderValuePercentageChange >= 0 ? '↗' : '↘' }} {{ number_format(abs($avgOrderValuePercentageChange), 1) }}%
                </span>
            </div>
        </div>
        
        {{-- <div class="bg-white p-6 rounded-xl card-shadow">
            <h4 class="font-medium text-ayur-brown mb-4">Page Views</h4>
            <div class="flex items-center justify-between mb-2">
                <span class="text-2xl font-bold text-ayur-green">45,120</span>
                <span class="text-red-500 text-sm">↘ 1.2%</span>
            </div>
        </div> --}}
        
        {{-- <div class="bg-white p-6 rounded-xl card-shadow">
            <h4 class="font-medium text-ayur-brown mb-4">Bounce Rate</h4>
            <div class="flex items-center justify-between mb-2">
                <span class="text-2xl font-bold text-ayur-green">28%</span>
                <span class="text-red-500 text-sm">↘ 3%</span>
            </div>
        </div> --}}
    </div>
</div>

@include('admin.includes.footer')

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const ctx = document.getElementById('salesChart').getContext('2d');
        const salesChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: @json($chartLabels),
                datasets: [{
                    label: 'Sales',
                    data: @json($chartData),
                    backgroundColor: 'rgba(34, 197, 94, 0.1)',
                    borderColor: 'rgba(34, 197, 94, 1)',
                    borderWidth: 2,
                    tension: 0.4,
                    fill: true,
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    });
</script>
