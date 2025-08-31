<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AyurVeda Wellness - Premium Ayurvedic Products</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css" integrity="sha512-..." crossorigin="anonymous" referrerpolicy="no-referrer" />
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
        
        .modal-backdrop {
            background: rgba(74, 124, 89, 0.4);
            backdrop-filter: blur(5px);
        }
        
        .form-input {
            transition: all 0.3s ease;
        }
        
        .form-input:focus {
            border-color: #4a7c59;
            box-shadow: 0 0 0 3px rgba(74, 124, 89, 0.1);
        }
        
        .mobile-menu {
            transform: translateX(100%);
            transition: transform 0.3s ease;
        }
        
        .mobile-menu.active {
            transform: translateX(0);
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
                
                <nav class="hidden lg:flex space-x-8">
                    <a href="/" class="text-ayur-green hover:text-ayur-gold transition duration-300 font-medium">Home</a>
                    <a href="/products" class="text-ayur-green hover:text-ayur-gold transition duration-300 font-medium">Products</a>
                    <a href="/about" class="text-ayur-green hover:text-ayur-gold transition duration-300 font-medium">About</a>
                    <a href="/contact" class="text-ayur-green hover:text-ayur-gold transition duration-300 font-medium">Contact</a>
                </nav>
                
                <div class="flex items-center space-x-4">
                    <a href="{{ url('/cart') }}" class="text-ayur-green hover:text-ayur-gold transition duration-300 relative">
                        <i class="fas fa-shopping-cart text-xl"></i>
                        <span class="absolute -top-2 -right-2 bg-ayur-gold text-white text-xs rounded-full h-5 w-5 flex items-center justify-center">
                            0
                        </span>
                    </a>
                    <a href="{{ url('/wishlist') }}" class="text-ayur-green hover:text-ayur-gold transition duration-300 relative">
                        <i class="fas fa-heart text-xl"></i>
                        <span class="absolute -top-2 -right-2 bg-ayur-gold text-white text-xs rounded-full h-5 w-5 flex items-center justify-center">
                            0
                        </span>
                    </a>
                    
                    @guest
                    <!-- Sign In Button -->
                    <button onclick="openAuthModal()" class="hidden md:flex bg-ayur-green text-white px-4 py-2 rounded-lg hover:bg-ayur-gold transition duration-300 items-center space-x-2">
                        <i class="fas fa-user"></i>
                        <span>Sign In</span>
                    </button>
                    @endguest
                    @auth
                    <a href="#" class="text-ayur-green hover:text-ayur-gold transition duration-300 relative">
                        <i class="fas fa-user-circle text-2xl"></i>
                    </a>
                    <form action="{{ route('logout') }}" method="post">
                        @csrf
                        <button type="submit" class="hidden md:flex bg-ayur-green text-white px-4 py-2 rounded-lg hover:bg-ayur-gold transition duration-300 items-center space-x-2">
                            <i class="fas fa-sign-out-alt"></i>
                            <span>Logout</span>
                        </button>
                    </form>
                    @endauth

                    <button onclick="toggleMobileMenu()" class="lg:hidden text-ayur-green">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
        
        <!-- Mobile Menu -->
        <div id="mobileMenu" class="mobile-menu fixed top-0 right-0 h-full w-80 bg-white shadow-xl z-50 lg:hidden">
            <div class="p-6">
                <div class="flex justify-between items-center mb-8">
                    <div class="flex items-center space-x-3">
                        <div class="w-10 h-10 bg-ayur-green rounded-full flex items-center justify-center">
                            <span class="text-white font-bold">🌿</span>
                        </div>
                        <span class="font-playfair text-xl font-bold text-ayur-green">AyurVeda</span>
                    </div>
                    <button onclick="toggleMobileMenu()" class="text-ayur-green">
                        <i class="fas fa-times text-xl"></i>
                    </button>
                </div>
                
                <nav class="space-y-6">
                    <a href="/" class="block text-ayur-green hover:text-ayur-gold transition duration-300 font-medium text-lg">Home</a>
                    <a href="/products" class="block text-ayur-green hover:text-ayur-gold transition duration-300 font-medium text-lg">Products</a>
                    <a href="/about" class="block text-ayur-green hover:text-ayur-gold transition duration-300 font-medium text-lg">About</a>
                    <a href="/contact" class="block text-ayur-green hover:text-ayur-gold transition duration-300 font-medium text-lg">Contact</a>
                </nav>
                
                @guest
                <button onclick="openAuthModal(); toggleMobileMenu();" class="w-full mt-8 bg-ayur-green text-white px-6 py-3 rounded-lg hover:bg-ayur-gold transition duration-300 flex items-center justify-center space-x-2">
                    <i class="fas fa-user"></i>
                    <span>Sign In</span>
                </button>
                @endguest
                @auth
                <form action="{{ route('logout') }}" method="post" class="w-full mt-8">
                    @csrf
                    <button type="submit" class="w-full bg-ayur-green text-white px-6 py-3 rounded-lg hover:bg-ayur-gold transition duration-300 flex items-center justify-center space-x-2">
                        <i class="fas fa-sign-out-alt"></i>
                        <span>Logout</span>
                    </button>
                </form>
                @endauth
            </div>
        </div>
    </header>

    <!-- Authentication Modal -->
    <div id="authModal" class="fixed inset-0 modal-backdrop z-50 flex items-center justify-center p-4 hidden">
        <div class="bg-white rounded-2xl shadow-2xl max-w-md w-full max-h-[90vh] overflow-y-auto">
            <div class="p-8">
                <!-- Modal Header -->
                <div class="flex justify-between items-center mb-8">
                    <div class="text-center flex-1">
                        <div class="w-16 h-16 bg-ayur-green rounded-full flex items-center justify-center mx-auto mb-4">
                            <span class="text-white font-bold text-2xl">🌿</span>
                        </div>
                        <h2 id="modalTitle" class="font-playfair text-2xl font-bold text-ayur-green">Welcome Back</h2>
                        <p id="modalSubtitle" class="text-ayur-brown text-sm mt-2">Sign in to your account</p>
                    </div>
                    <button onclick="closeAuthModal()" class="text-ayur-brown hover:text-ayur-green transition duration-300">
                        <i class="fas fa-times text-xl"></i>
                    </button>
                </div>
                
                <!-- Sign In Form -->
                <form id="signInForm" class="space-y-6" action="{{ route('login') }}" method="post">
                    @csrf
                    <div>
                        <label class="block text-ayur-green font-medium mb-2">Email Address</label>
                        <input type="email" name="email" class="form-input w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none" placeholder="Enter your email" required>
                    </div>
                    <div>
                        <label class="block text-ayur-green font-medium mb-2">Password</label>
                        <div class="relative">
                            <input type="password" name="password" class="form-input w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none pr-12" placeholder="Enter your password" required>
                            <button type="button" class="absolute right-3 top-1/2 transform -translate-y-1/2 text-ayur-brown hover:text-ayur-green">
                                <i class="fas fa-eye"></i>
                            </button>
                        </div>
                    </div>
                    @if ($errors->any())
                        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <div class="flex items-center justify-between">
                        <label class="flex items-center">
                            <input type="checkbox" class="rounded border-gray-300 text-ayur-green focus:border-ayur-green focus:ring-ayur-green">
                            <span class="ml-2 text-sm text-ayur-brown">Remember me</span>
                        </label>
                        <a href="#" class="text-sm text-ayur-gold hover:text-ayur-green transition duration-300">Forgot Password?</a>
                    </div>
                    <button type="submit" class="w-full bg-ayur-green text-white py-3 rounded-lg hover:bg-ayur-gold transition duration-300 font-medium">
                        Sign In
                    </button>
                </form>
                
                <!-- Register Form -->
                <form id="registerForm" class="space-y-6 hidden" action="{{ route('register') }}" method="post">
                    @csrf
                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <label class="block text-ayur-green font-medium mb-2">First Name</label>
                            <input type="text" name="first_name" class="form-input w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none" placeholder="First name" required>
                        </div>
                        <div>
                            <label class="block text-ayur-green font-medium mb-2">Last Name</label>
                            <input type="text" name="last_name" class="form-input w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none" placeholder="Last name" required>
                        </div>
                    </div>
                    <div>
                        <label class="block text-ayur-green font-medium mb-2">Email Address</label>
                        <input type="email" name="email" class="form-input w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none" placeholder="Enter your email" required>
                    </div>
                    <div>
                        <label class="block text-ayur-green font-medium mb-2">Phone Number</label>
                        <input type="tel" name="phone_number" class="form-input w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none" placeholder="Enter your phone number" required>
                    </div>
                    <div>
                        <label class="block text-ayur-green font-medium mb-2">Password</label>
                        <div class="relative">
                            <input type="password" name="password" class="form-input w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none pr-12" placeholder="Create a password" required>
                            <button type="button" class="absolute right-3 top-1/2 transform -translate-y-1/2 text-ayur-brown hover:text-ayur-green">
                                <i class="fas fa-eye"></i>
                            </button>
                        </div>
                    </div>
                    <div>
                        <label class="block text-ayur-green font-medium mb-2">Confirm Password</label>
                        <div class="relative">
                            <input type="password" name="password_confirmation" class="form-input w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none pr-12" placeholder="Confirm your password" required>
                            <button type="button" class="absolute right-3 top-1/2 transform -translate-y-1/2 text-ayur-brown hover:text-ayur-green">
                                <i class="fas fa-eye"></i>
                            </button>
                        </div>
                    </div>
                    <div>
                        <label class="flex items-start">
                            <input type="checkbox" class="mt-1 rounded border-gray-300 text-ayur-green focus:border-ayur-green focus:ring-ayur-green" required>
                            <span class="ml-2 text-sm text-ayur-brown">I agree to the <a href="#" class="text-ayur-gold hover:text-ayur-green">Terms of Service</a> and <a href="#" class="text-ayur-gold hover:text-ayur-green">Privacy Policy</a></span>
                        </label>
                    </div>
                    <button type="submit" class="w-full bg-ayur-green text-white py-3 rounded-lg hover:bg-ayur-gold transition duration-300 font-medium">
                        Create Account
                    </button>
                </form>
                
                <!-- Toggle Between Forms -->
                <div class="mt-8 text-center">
                    <div class="flex items-center mb-6">
                        <hr class="flex-1 border-gray-300">
                        <span class="px-4 text-ayur-brown text-sm">or</span>
                        <hr class="flex-1 border-gray-300">
                    </div>
                    
                    <div id="signInToggle">
                        <p class="text-ayur-brown">Don't have an account? 
                            <button onclick="toggleAuthForm()" class="text-ayur-gold hover:text-ayur-green font-medium transition duration-300">Sign up</button>
                        </p>
                    </div>
                    
                    <div id="registerToggle" class="hidden">
                        <p class="text-ayur-brown">Already have an account? 
                            <button onclick="toggleAuthForm()" class="text-ayur-gold hover:text-ayur-green font-medium transition duration-300">Sign in</button>
                        </p>
                    </div>
                </div>
                
                <!-- Social Login -->
                <div class="mt-6 space-y-3">
                    <button class="w-full border border-gray-300 text-ayur-green py-3 rounded-lg hover:bg-gray-50 transition duration-300 flex items-center justify-center space-x-2">
                        <i class="fab fa-google text-red-500"></i>
                        <span>Continue with Google</span>
                    </button>
                    <button class="w-full border border-gray-300 text-ayur-green py-3 rounded-lg hover:bg-gray-50 transition duration-300 flex items-center justify-center space-x-2">
                        <i class="fab fa-facebook text-blue-600"></i>
                        <span>Continue with Facebook</span>
                    </button>
                </div>
            </div>
        </div>
    </div>

    

    <script>
        function openAuthModal() {
            document.getElementById('authModal').classList.remove('hidden');
            document.body.style.overflow = 'hidden';
        }
        
        function closeAuthModal() {
            document.getElementById('authModal').classList.add('hidden');
            document.body.style.overflow = 'auto';
        }
        
        function toggleAuthForm() {
            const signInForm = document.getElementById('signInForm');
            const registerForm = document.getElementById('registerForm');
            const signInToggle = document.getElementById('signInToggle');
            const registerToggle = document.getElementById('registerToggle');
            const modalTitle = document.getElementById('modalTitle');
            const modalSubtitle = document.getElementById('modalSubtitle');
            
            if (signInForm.classList.contains('hidden')) {
                // Show sign in form
                signInForm.classList.remove('hidden');
                registerForm.classList.add('hidden');
                signInToggle.classList.remove('hidden');
                registerToggle.classList.add('hidden');
                modalTitle.textContent = 'Welcome Back';
                modalSubtitle.textContent = 'Sign in to your account';
            } else {
                // Show register form
                signInForm.classList.add('hidden');
                registerForm.classList.remove('hidden');
                signInToggle.classList.add('hidden');
                registerToggle.classList.remove('hidden');
                modalTitle.textContent = 'Join AyurVeda';
                modalSubtitle.textContent = 'Create your wellness account';
            }
        }
        
        function toggleMobileMenu() {
            const mobileMenu = document.getElementById('mobileMenu');
            mobileMenu.classList.toggle('active');
        }
        
        // Close modal when clicking outside
        document.getElementById('authModal').addEventListener('click', function(e) {
            if (e.target === this) {
                closeAuthModal();
            }
        });
        
        // Close mobile menu when clicking outside
        document.addEventListener('click', function(e) {
            const mobileMenu = document.getElementById('mobileMenu');
            const menuButton = document.querySelector('[onclick="toggleMobileMenu()"]');
            
            if (!mobileMenu.contains(e.target) && !menuButton.contains(e.target)) {
                mobileMenu.classList.remove('active');
            }
        });
        
        // Handle form submissions
        document.getElementById('signInForm').addEventListener('submit', function(e) {
        });
        
        document.getElementById('registerForm').addEventListener('submit', function(e) {
        });
        
        // Password visibility toggle
        document.querySelectorAll('[type="password"] + button').forEach(button => {
            button.addEventListener('click', function() {
                const input = this.previousElementSibling;
                const icon = this.querySelector('i');
                
                if (input.type === 'password') {
                    input.type = 'text';
                    icon.classList.remove('fa-eye');
                    icon.classList.add('fa-eye-slash');
                } else {
                    input.type = 'password';
                    icon.classList.remove('fa-eye-slash');
                    icon.classList.add('fa-eye');
                }
            });
        });
    </script>
</body>
</html>