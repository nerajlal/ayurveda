<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AyurVeda Admin Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.9.1/chart.min.js"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'ayur-green': '#4a7c59',
                        'ayur-gold': '#d4a574',
                        'ayur-cream': '#f4f1e8',
                        'ayur-brown': '#8b4513',
                        'ayur-sage': '#87a96b',
                        'ayur-dark': '#2d4a35',
                    },
                    fontFamily: {
                        'serif': ['Georgia', 'serif'],
                    }
                }
            }
        }
    </script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600;700&family=Inter:wght@300;400;500;600;700&display=swap');
        
        .font-playfair { font-family: 'Playfair Display', serif; }
        .font-inter { font-family: 'Inter', sans-serif; }
        
        .gradient-bg {
            background: linear-gradient(135deg, #f4f1e8 0%, #e8e5d3 100%);
        }
        
        .card-shadow {
            box-shadow: 0 4px 15px rgba(74, 124, 89, 0.1);
        }
        
        .hover-lift {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        
        .hover-lift:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(74, 124, 89, 0.15);
        }
        
        .sidebar-shadow {
            box-shadow: 2px 0 10px rgba(74, 124, 89, 0.1);
        }
        
        .active-nav {
            background: linear-gradient(135deg, #4a7c59, #87a96b);
        }
        
        .status-pending { background-color: #fbbf24; }
        .status-completed { background-color: #10b981; }
        .status-cancelled { background-color: #ef4444; }
        .status-processing { background-color: #3b82f6; }
        
        .table-hover:hover {
            background-color: #f4f1e8;
        }
        
        .progress-bar {
            background: linear-gradient(90deg, #4a7c59, #87a96b);
        }
    </style>
</head>
<body class="font-inter bg-ayur-cream min-h-screen">
    <!-- Sidebar -->
    <div class="fixed left-0 top-0 h-full w-64 bg-white sidebar-shadow z-50">
        <div class="p-6 border-b border-gray-100">
            <div class="flex items-center space-x-3">
                <div class="w-12 h-12 bg-ayur-green rounded-full flex items-center justify-center">
                    <span class="text-white font-bold text-xl">🌿</span>
                </div>
                <div>
                    <h1 class="font-playfair text-xl font-bold text-ayur-green">AyurVeda</h1>
                    <p class="text-sm text-ayur-brown">Admin Panel</p>
                </div>
            </div>
        </div>
        
        <nav class="p-4">
            <ul class="space-y-2">
                <li>
                    <a href="#dashboard" class="flex items-center space-x-3 p-3 rounded-lg active-nav text-white">
                        <span class="text-lg">📊</span>
                        <span class="font-medium">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="#products" class="flex items-center space-x-3 p-3 rounded-lg text-ayur-green hover:bg-ayur-cream transition duration-300">
                        <span class="text-lg">📦</span>
                        <span class="font-medium">Products</span>
                        <span class="ml-auto bg-ayur-gold text-white text-xs px-2 py-1 rounded-full">247</span>
                    </a>
                </li>
                <li>
                    <a href="#orders" class="flex items-center space-x-3 p-3 rounded-lg text-ayur-green hover:bg-ayur-cream transition duration-300">
                        <span class="text-lg">🛒</span>
                        <span class="font-medium">Orders</span>
                        <span class="ml-auto bg-red-500 text-white text-xs px-2 py-1 rounded-full">12</span>
                    </a>
                </li>
                <li>
                    <a href="#customers" class="flex items-center space-x-3 p-3 rounded-lg text-ayur-green hover:bg-ayur-cream transition duration-300">
                        <span class="text-lg">👥</span>
                        <span class="font-medium">Customers</span>
                    </a>
                </li>
                <li>
                    <a href="#consultations" class="flex items-center space-x-3 p-3 rounded-lg text-ayur-green hover:bg-ayur-cream transition duration-300">
                        <span class="text-lg">👨‍⚕️</span>
                        <span class="font-medium">Consultations</span>
                        <span class="ml-auto bg-blue-500 text-white text-xs px-2 py-1 rounded-full">8</span>
                    </a>
                </li>
                <li>
                    <a href="#inventory" class="flex items-center space-x-3 p-3 rounded-lg text-ayur-green hover:bg-ayur-cream transition duration-300">
                        <span class="text-lg">📋</span>
                        <span class="font-medium">Inventory</span>
                    </a>
                </li>
                <li>
                    <a href="#analytics" class="flex items-center space-x-3 p-3 rounded-lg text-ayur-green hover:bg-ayur-cream transition duration-300">
                        <span class="text-lg">📈</span>
                        <span class="font-medium">Analytics</span>
                    </a>
                </li>
                <li>
                    <a href="#settings" class="flex items-center space-x-3 p-3 rounded-lg text-ayur-green hover:bg-ayur-cream transition duration-300">
                        <span class="text-lg">⚙️</span>
                        <span class="font-medium">Settings</span>
                    </a>
                </li>
            </ul>
        </nav>
        
        <div class="absolute bottom-4 left-4 right-4">
            <div class="bg-ayur-cream p-4 rounded-lg">
                <div class="flex items-center space-x-3 mb-2">
                    <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='40' height='40' viewBox='0 0 40 40'%3E%3Ccircle cx='20' cy='20' r='20' fill='%234a7c59'/%3E%3Ctext x='50%25' y='50%25' dominant-baseline='middle' text-anchor='middle' font-size='16' fill='white'%3EA%3C/text%3E%3C/svg%3E" 
                         alt="Admin" class="w-8 h-8 rounded-full">
                    <div>
                        <p class="text-sm font-medium text-ayur-green">Dr. Ayush Sharma</p>
                        <p class="text-xs text-ayur-brown">Administrator</p>
                    </div>
                </div>
                <button class="w-full bg-ayur-green text-white py-2 px-3 rounded-lg text-sm hover:bg-ayur-dark transition duration-300">
                    Logout
                </button>
            </div>
        </div>
    </div>

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

    <script>
        // Sales Chart
        const salesCtx = document.getElementById('salesChart').getContext('2d');
        new Chart(salesCtx, {
            type: 'line',
            data: {
                labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
                datasets: [{
                    label: 'Sales',
                    data: [12000, 19000, 15000, 25000, 22000, 30000, 28000],
                    borderColor: '#4a7c59',
                    backgroundColor: 'rgba(74, 124, 89, 0.1)',
                    tension: 0.4,
                    fill: true
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        display: false
                    }
                },
                scales: {
                    y: {
                        beginAtZero: true,
                        ticks: {
                            callback: function(value) {
                                return '₹' + value.toLocaleString();
                            }
                        }
                    }
                }
            }
        });

        // Category Chart
        const categoryCtx = document.getElementById('categoryChart').getContext('2d');
        new Chart(categoryCtx, {
            type: 'doughnut',
            data: {
                labels: ['Herbal Oils', 'Herbal Teas', 'Churnas', 'Skincare', 'Supplements'],
                datasets: [{
                    data: [35, 25, 20, 15, 5],
                    backgroundColor: [
                        '#4a7c59',
                        '#87a96b',
                        '#d4a574',
                        '#8b4513',
                        '#2d4a35'
                    ],
                    borderWidth: 0
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        position: 'bottom',
                        labels: {
                            padding: 20,
                            usePointStyle: true
                        }
                    }
                }
            }
        });

        // Navigation functionality
        document.querySelectorAll('nav a').forEach(link => {
            link.addEventListener('click', function(e) {
                e.preventDefault();
                
                // Remove active class from all links
                document.querySelectorAll('nav a').forEach(l => {
                    l.classList.remove('active-nav', 'text-white');
                    l.classList.add('text-ayur-green');
                });
                
                // Add active class to clicked link
                this.classList.add('active-nav', 'text-white');
                this.classList.remove('text-ayur-green');
            });
        });

        // Simulate real-time updates
        setInterval(() => {
            // Update notification badge randomly
            const notifications = document.querySelector('.bg-white.p-3.rounded-lg.card-shadow.hover-lift');
            if (Math.random() > 0.7) {
                notifications.classList.add('animate-pulse');
                setTimeout(() => {
                    notifications.classList.remove('animate-pulse');
                }, 2000);
            }
        }, 5000);

        // Interactive buttons
        document.querySelectorAll('button').forEach(button => {
            button.addEventListener('click', function() {
                if (this.textContent.includes('Add Product') || this.textContent.includes('Add New Product')) {
                    alert('Redirecting to Add Product form...');
                } else if (this.textContent.includes('Schedule Consultation')) {
                    alert('Opening consultation scheduler...');
                } else if (this.textContent.includes('Generate Report')) {
                    alert('Generating comprehensive analytics report...');
                } else if (this.textContent.includes('Update Inventory')) {
                    alert('Opening inventory management system...');
                }
            });
        });
    </script>
</body>
</html>