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
                    <a href="/admin" class="flex items-center space-x-3 p-3 rounded-lg active-nav text-white">
                        <span class="text-lg">📊</span>
                        <span class="font-medium">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="/admin-products" class="flex items-center space-x-3 p-3 rounded-lg text-ayur-green hover:bg-ayur-cream transition duration-300">
                        <span class="text-lg">📦</span>
                        <span class="font-medium">Products</span>
                        <span class="ml-auto bg-ayur-gold text-white text-xs px-2 py-1 rounded-full">{{ $productCount }}</span>
                    </a>
                </li>
                <li>
                    <a href="/admin-orders" class="flex items-center space-x-3 p-3 rounded-lg text-ayur-green hover:bg-ayur-cream transition duration-300">
                        <span class="text-lg">🛒</span>
                        <span class="font-medium">Orders</span>
                        <span class="ml-auto bg-red-500 text-white text-xs px-2 py-1 rounded-full">12</span>
                    </a>
                </li>
                <li>
                    <a href="/admin-customers" class="flex items-center space-x-3 p-3 rounded-lg text-ayur-green hover:bg-ayur-cream transition duration-300">
                        <span class="text-lg">👥</span>
                        <span class="font-medium">Customers</span>
                    </a>
                </li>
                <!-- <li>
                    <a href="#consultations" class="flex items-center space-x-3 p-3 rounded-lg text-ayur-green hover:bg-ayur-cream transition duration-300">
                        <span class="text-lg">👨‍⚕️</span>
                        <span class="font-medium">Consultations</span>
                        <span class="ml-auto bg-blue-500 text-white text-xs px-2 py-1 rounded-full">8</span>
                    </a>
                </li> -->
                {{-- <li>
                    <a href="/admin-inventory" class="flex items-center space-x-3 p-3 rounded-lg text-ayur-green hover:bg-ayur-cream transition duration-300">
                        <span class="text-lg">📋</span>
                        <span class="font-medium">Inventory</span>
                    </a>
                </li> --}}
                <li>
                    <a href="/admin-analytics" class="flex items-center space-x-3 p-3 rounded-lg text-ayur-green hover:bg-ayur-cream transition duration-300">
                        <span class="text-lg">📈</span>
                        <span class="font-medium">Analytics</span>
                    </a>
                </li>
                <li>
                    <a href="/admin-setting" class="flex items-center space-x-3 p-3 rounded-lg text-ayur-green hover:bg-ayur-cream transition duration-300">
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
                <form action="{{ route('logout') }}" method="post">
                    @csrf
                    <button type="submit" class="w-full bg-ayur-green text-white py-2 px-3 rounded-lg text-sm hover:bg-ayur-dark transition duration-300">
                        Logout
                    </button>
                </form>
            </div>
        </div>
    </div>