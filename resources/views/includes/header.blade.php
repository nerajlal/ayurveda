<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AyurVeda Wellness - Premium Ayurvedic Products</title>
    <script src="https://cdn.tailwindcss.com"></script>
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
                    },
                    fontFamily: {
                        'serif': ['Georgia', 'serif'],
                    }
                }
            }
        }
    </script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600;700&family=Inter:wght@300;400;500;600&display=swap');
        
        .font-playfair { font-family: 'Playfair Display', serif; }
        .font-inter { font-family: 'Inter', sans-serif; }
        
        .gradient-bg {
            background: linear-gradient(135deg, #f4f1e8 0%, #e8e5d3 100%);
        }
        
        .leaf-shadow {
            box-shadow: 0 10px 25px rgba(74, 124, 89, 0.15);
        }
        
        .hover-lift {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        
        .hover-lift:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 35px rgba(74, 124, 89, 0.2);
        }
        
        .parallax-bg {
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }
    </style>
</head>
<body class="font-inter bg-ayur-cream">
    <!-- Header -->
    <header class="bg-white shadow-lg sticky top-0 z-50">
        <div class="container mx-auto px-4">
            <div class="flex justify-between items-center py-4">
                <div class="flex items-center space-x-3">
                    <div class="w-12 h-12 bg-ayur-green rounded-full flex items-center justify-center">
                        <span class="text-white font-bold text-xl">🌿</span>
                    </div>
                    <div>
                        <h1 class="font-playfair text-2xl font-bold text-ayur-green">AyurVeda</h1>
                        <p class="text-sm text-ayur-brown">Wellness Store</p>
                    </div>
                </div>
                
                <nav class="hidden md:flex space-x-8">
                    <a href="#" class="text-ayur-green hover:text-ayur-gold transition duration-300 font-medium">Home</a>
                    <a href="/products" class="text-ayur-green hover:text-ayur-gold transition duration-300 font-medium">Products</a>
                    <a href="#about" class="text-ayur-green hover:text-ayur-gold transition duration-300 font-medium">About</a>
                    <a href="#consultation" class="text-ayur-green hover:text-ayur-gold transition duration-300 font-medium">Consultation</a>
                    <a href="#contact" class="text-ayur-green hover:text-ayur-gold transition duration-300 font-medium">Contact</a>
                </nav>
                
                <div class="flex items-center space-x-4">
                    <button class="text-ayur-green hover:text-ayur-gold transition duration-300">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                        </svg>
                    </button>
                    <button class="text-ayur-green hover:text-ayur-gold transition duration-300 relative">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4m0 0L7 13m0 0l-2.5 5h15.5M7 13v8a2 2 0 002 2h6a2 2 0 002-2v-8"></path>
                        </svg>
                        <span class="absolute -top-2 -right-2 bg-ayur-gold text-white text-xs rounded-full h-5 w-5 flex items-center justify-center">0</span>
                    </button>
                    <button class="md:hidden text-ayur-green">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </header>