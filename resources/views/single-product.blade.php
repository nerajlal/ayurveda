<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Brahmi Hair Oil - Premium Ayurvedic Hair Care | AyurVeda Wellness</title>
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
            transform: translateY(-2px);
            box-shadow: 0 15px 35px rgba(74, 124, 89, 0.2);
        }
        
        .thumbnail {
            transition: border-color 0.3s ease;
        }
        
        .thumbnail.active {
            border-color: #4a7c59;
        }
        
        .zoom-container {
            overflow: hidden;
            cursor: zoom-in;
        }
        
        .zoom-image {
            transition: transform 0.3s ease;
        }
        
        .zoom-container:hover .zoom-image {
            transform: scale(1.2);
        }
        
        .progress-bar {
            background: linear-gradient(90deg, #4a7c59 var(--progress), #e5e7eb var(--progress));
        }
    </style>
</head>
<body class="font-inter bg-ayur-cream">
    <!-- Header (Simplified for product page) -->
    <header class="bg-white shadow-lg sticky top-0 z-50">
        <div class="container mx-auto px-4">
            <div class="flex justify-between items-center py-4">
                <div class="flex items-center space-x-3">
                    <a href="#" class="flex items-center space-x-3">
                        <div class="w-10 h-10 bg-ayur-green rounded-full flex items-center justify-center">
                            <span class="text-white font-bold">🌿</span>
                        </div>
                        <div>
                            <h1 class="font-playfair text-xl font-bold text-ayur-green">AyurVeda</h1>
                        </div>
                    </a>
                </div>
                
                <nav class="hidden md:flex space-x-6">
                    <a href="#" class="text-ayur-green hover:text-ayur-gold transition duration-300">Home</a>
                    <a href="#" class="text-ayur-green hover:text-ayur-gold transition duration-300">Products</a>
                    <a href="#" class="text-ayur-green hover:text-ayur-gold transition duration-300">Contact</a>
                </nav>
                
                <div class="flex items-center space-x-4">
                    <button class="text-ayur-green hover:text-ayur-gold transition duration-300 relative">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4m0 0L7 13m0 0l-2.5 5h15.5M7 13v8a2 2 0 002 2h6a2 2 0 002-2v-8"></path>
                        </svg>
                        <span class="absolute -top-2 -right-2 bg-ayur-gold text-white text-xs rounded-full h-5 w-5 flex items-center justify-center">2</span>
                    </button>
                </div>
            </div>
        </div>
    </header>

    <!-- Breadcrumb -->
    <div class="bg-white border-b">
        <div class="container mx-auto px-4 py-3">
            <nav class="flex text-sm">
                <a href="#" class="text-ayur-sage hover:text-ayur-green">Home</a>
                <span class="mx-2 text-gray-500">/</span>
                <a href="#" class="text-ayur-sage hover:text-ayur-green">Hair Care</a>
                <span class="mx-2 text-gray-500">/</span>
                <span class="text-ayur-green font-medium">Brahmi Hair Oil</span>
            </nav>
        </div>
    </div>

    <!-- Main Product Section -->
    <div class="container mx-auto px-4 py-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
            <!-- Product Images -->
            <div class="space-y-4">
                <!-- Main Image -->
                <div class="zoom-container bg-white rounded-2xl p-6 leaf-shadow">
                    <img id="mainImage" 
                         src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='500' height='500' viewBox='0 0 500 500'%3E%3Crect width='500' height='500' fill='%23d4a574'/%3E%3Ccircle cx='250' cy='200' r='80' fill='%234a7c59'/%3E%3Crect x='220' y='280' width='60' height='120' rx='10' fill='%234a7c59'/%3E%3Ctext x='50%25' y='85%25' dominant-baseline='middle' text-anchor='middle' font-size='16' fill='white'%3EBrahmi Hair Oil%3C/text%3E%3C/svg%3E" 
                         alt="Brahmi Hair Oil" 
                         class="zoom-image w-full h-96 object-contain">
                </div>
                
                <!-- Thumbnail Images -->
                <div class="flex space-x-3">
                    <img class="thumbnail active w-20 h-20 object-cover rounded-lg border-2 border-ayur-green cursor-pointer" 
                         src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='100' height='100' viewBox='0 0 100 100'%3E%3Crect width='100' height='100' fill='%23d4a574'/%3E%3Ccircle cx='50' cy='40' r='15' fill='%234a7c59'/%3E%3Crect x='45' y='55' width='10' height='25' rx='2' fill='%234a7c59'/%3E%3C/svg%3E" 
                         onclick="changeMainImage(this)" alt="Main view">
                    <img class="thumbnail w-20 h-20 object-cover rounded-lg border-2 border-gray-300 cursor-pointer" 
                         src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='100' height='100' viewBox='0 0 100 100'%3E%3Crect width='100' height='100' fill='%2387a96b'/%3E%3Ctext x='50%25' y='50%25' dominant-baseline='middle' text-anchor='middle' font-size='10' fill='white'%3EIngredients%3C/text%3E%3C/svg%3E" 
                         onclick="changeMainImage(this)" alt="Ingredients view">
                    <img class="thumbnail w-20 h-20 object-cover rounded-lg border-2 border-gray-300 cursor-pointer" 
                         src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='100' height='100' viewBox='0 0 100 100'%3E%3Crect width='100' height='100' fill='%234a7c59'/%3E%3Ctext x='50%25' y='50%25' dominant-baseline='middle' text-anchor='middle' font-size='10' fill='white'%3EUsage%3C/text%3E%3C/svg%3E" 
                         onclick="changeMainImage(this)" alt="Usage instructions">
                    <img class="thumbnail w-20 h-20 object-cover rounded-lg border-2 border-gray-300 cursor-pointer" 
                         src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='100' height='100' viewBox='0 0 100 100'%3E%3Crect width='100' height='100' fill='%238b4513'/%3E%3Ctext x='50%25' y='50%25' dominant-baseline='middle' text-anchor='middle' font-size='10' fill='white'%3EPackaging%3C/text%3E%3C/svg%3E" 
                         onclick="changeMainImage(this)" alt="Packaging">
                </div>
            </div>

            <!-- Product Details -->
            <div class="space-y-6">
                <!-- Product Title and Rating -->
                <div>
                    <h1 class="font-playfair text-3xl lg:text-4xl font-bold text-ayur-green mb-3">
                        Premium Brahmi Hair Oil
                    </h1>
                    <p class="text-lg text-ayur-brown mb-4">Natural Hair Nourishment with Brahmi & Amla</p>
                    
                    <!-- Rating -->
                    <div class="flex items-center space-x-4 mb-4">
                        <div class="flex items-center">
                            <div class="text-ayur-gold">⭐⭐⭐⭐⭐</div>
                            <span class="text-sm text-ayur-brown ml-2">(4.8/5)</span>
                        </div>
                        <span class="text-sm text-ayur-sage">127 Reviews</span>
                    </div>
                    
                    <!-- Price -->
                    <div class="flex items-center space-x-4">
                        <span class="text-3xl font-bold text-ayur-green">₹899</span>
                        <span class="text-xl text-gray-500 line-through">₹1,299</span>
                        <span class="bg-ayur-gold text-white px-3 py-1 rounded-full text-sm font-medium">31% OFF</span>
                    </div>
                </div>

                <!-- Key Benefits -->
                <div class="bg-white p-6 rounded-xl leaf-shadow">
                    <h3 class="font-playfair text-xl font-semibold text-ayur-green mb-4">Key Benefits</h3>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <div class="flex items-center space-x-3">
                            <span class="w-6 h-6 bg-ayur-green rounded-full flex items-center justify-center">
                                <span class="text-white text-xs">✓</span>
                            </span>
                            <span class="text-ayur-brown">Reduces Hair Fall</span>
                        </div>
                        <div class="flex items-center space-x-3">
                            <span class="w-6 h-6 bg-ayur-green rounded-full flex items-center justify-center">
                                <span class="text-white text-xs">✓</span>
                            </span>
                            <span class="text-ayur-brown">Promotes Growth</span>
                        </div>
                        <div class="flex items-center space-x-3">
                            <span class="w-6 h-6 bg-ayur-green rounded-full flex items-center justify-center">
                                <span class="text-white text-xs">✓</span>
                            </span>
                            <span class="text-ayur-brown">Prevents Premature Graying</span>
                        </div>
                        <div class="flex items-center space-x-3">
                            <span class="w-6 h-6 bg-ayur-green rounded-full flex items-center justify-center">
                                <span class="text-white text-xs">✓</span>
                            </span>
                            <span class="text-ayur-brown">Natural Conditioning</span>
                        </div>
                    </div>
                </div>

                <!-- Quantity and Size Selection -->
                <div class="space-y-4">
                    <div>
                        <label class="block text-ayur-green font-medium mb-2">Size:</label>
                        <div class="flex space-x-3">
                            <button class="size-option px-4 py-2 border-2 border-ayur-green text-ayur-green rounded-lg hover:bg-ayur-green hover:text-white transition duration-300 active">
                                100ml - ₹899
                            </button>
                            <button class="size-option px-4 py-2 border-2 border-gray-300 text-gray-600 rounded-lg hover:border-ayur-green hover:text-ayur-green transition duration-300">
                                200ml - ₹1,599
                            </button>
                            <button class="size-option px-4 py-2 border-2 border-gray-300 text-gray-600 rounded-lg hover:border-ayur-green hover:text-ayur-green transition duration-300">
                                500ml - ₹3,499
                            </button>
                        </div>
                    </div>
                    
                    <div>
                        <label class="block text-ayur-green font-medium mb-2">Quantity:</label>
                        <div class="flex items-center space-x-3">
                            <button id="decreaseQty" class="w-10 h-10 bg-ayur-cream border border-ayur-green text-ayur-green rounded-lg hover:bg-ayur-green hover:text-white transition duration-300">-</button>
                            <span id="quantity" class="w-12 text-center font-semibold text-ayur-green text-lg">1</span>
                            <button id="increaseQty" class="w-10 h-10 bg-ayur-cream border border-ayur-green text-ayur-green rounded-lg hover:bg-ayur-green hover:text-white transition duration-300">+</button>
                            <span class="text-ayur-sage ml-4">Only 12 left in stock!</span>
                        </div>
                    </div>
                </div>

                <!-- Action Buttons -->
                <div class="flex flex-col sm:flex-row space-y-3 sm:space-y-0 sm:space-x-4">
                    <button id="addToCart" class="flex-1 bg-ayur-green text-white px-8 py-4 rounded-lg hover:bg-opacity-90 transition duration-300 font-medium text-lg">
                        Add to Cart
                    </button>
                    <button class="flex-1 border-2 border-ayur-green text-ayur-green px-8 py-4 rounded-lg hover:bg-ayur-green hover:text-white transition duration-300 font-medium text-lg">
                        Buy Now
                    </button>
                    <button class="border border-ayur-sage text-ayur-sage p-4 rounded-lg hover:bg-ayur-sage hover:text-white transition duration-300">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                        </svg>
                    </button>
                </div>

                <!-- Delivery Info -->
                <div class="bg-gradient-to-r from-ayur-cream to-white p-6 rounded-xl border-l-4 border-ayur-green">
                    <div class="space-y-3">
                        <div class="flex items-center space-x-3">
                            <span class="text-ayur-green">🚚</span>
                            <span class="text-ayur-brown">Free delivery on orders above ₹999</span>
                        </div>
                        <div class="flex items-center space-x-3">
                            <span class="text-ayur-green">📦</span>
                            <span class="text-ayur-brown">Delivery in 3-5 business days</span>
                        </div>
                        <div class="flex items-center space-x-3">
                            <span class="text-ayur-green">↩️</span>
                            <span class="text-ayur-brown">30-day return policy</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Product Information Tabs -->
    <div class="container mx-auto px-4 py-12">
        <div class="bg-white rounded-2xl leaf-shadow overflow-hidden">
            <!-- Tab Headers -->
            <div class="flex border-b bg-ayur-cream">
                <button class="tab-btn px-8 py-4 font-medium text-ayur-green border-b-2 border-ayur-green bg-white" data-tab="description">Description</button>
                <button class="tab-btn px-8 py-4 font-medium text-ayur-brown hover:text-ayur-green transition duration-300" data-tab="ingredients">Ingredients</button>
                <button class="tab-btn px-8 py-4 font-medium text-ayur-brown hover:text-ayur-green transition duration-300" data-tab="usage">How to Use</button>
                <button class="tab-btn px-8 py-4 font-medium text-ayur-brown hover:text-ayur-green transition duration-300" data-tab="reviews">Reviews (127)</button>
            </div>
            
            <!-- Tab Contents -->
            <div class="p-8">
                <!-- Description Tab -->
                <div id="description" class="tab-content">
                    <h3 class="font-playfair text-2xl font-semibold text-ayur-green mb-6">Product Description</h3>
                    <div class="prose max-w-none text-ayur-brown leading-relaxed">
                        <p class="text-lg mb-6">
                            Our Premium Brahmi Hair Oil is a carefully crafted blend of traditional Ayurvedic herbs designed to nourish, strengthen, and revitalize your hair from root to tip. This time-tested formulation combines the power of Brahmi (Bacopa Monnieri) with Amla, Bhringraj, and other potent herbs to create a comprehensive hair care solution.
                        </p>
                        
                        <h4 class="text-xl font-semibold text-ayur-green mb-4">Why Choose Our Brahmi Hair Oil?</h4>
                        <ul class="space-y-3 mb-6">
                            <li class="flex items-start space-x-3">
                                <span class="w-2 h-2 bg-ayur-green rounded-full mt-2"></span>
                                <span><strong>Pure & Natural:</strong> Made with 100% natural ingredients, free from harmful chemicals and sulfates.</span>
                            </li>
                            <li class="flex items-start space-x-3">
                                <span class="w-2 h-2 bg-ayur-green rounded-full mt-2"></span>
                                <span><strong>Traditional Formula:</strong> Based on ancient Ayurvedic texts and time-tested recipes.</span>
                            </li>
                            <li class="flex items-start space-x-3">
                                <span class="w-2 h-2 bg-ayur-green rounded-full mt-2"></span>
                                <span><strong>Clinically Tested:</strong> Proven results in reducing hair fall and promoting healthy growth.</span>
                            </li>
                        </ul>
                        
                        <div class="bg-ayur-cream p-6 rounded-xl">
                            <h4 class="font-semibold text-ayur-green mb-3">Suitable For:</h4>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div>• All hair types</div>
                                <div>• Dry and damaged hair</div>
                                <div>• Hair fall problems</div>
                                <div>• Premature graying</div>
                                <div>• Scalp irritation</div>
                                <div>• Thinning hair</div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Ingredients Tab -->
                <div id="ingredients" class="tab-content hidden">
                    <h3 class="font-playfair text-2xl font-semibold text-ayur-green mb-6">Natural Ingredients</h3>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="space-y-6">
                            <div class="flex space-x-4">
                                <div class="w-16 h-16 bg-ayur-green rounded-full flex items-center justify-center text-white font-bold">B</div>
                                <div>
                                    <h4 class="font-semibold text-ayur-green text-lg">Brahmi (Bacopa Monnieri)</h4>
                                    <p class="text-ayur-brown">Promotes hair growth, reduces stress-related hair fall, and improves scalp circulation.</p>
                                </div>
                            </div>
                            
                            <div class="flex space-x-4">
                                <div class="w-16 h-16 bg-ayur-gold rounded-full flex items-center justify-center text-white font-bold">A</div>
                                <div>
                                    <h4 class="font-semibold text-ayur-green text-lg">Amla (Indian Gooseberry)</h4>
                                    <p class="text-ayur-brown">Rich in Vitamin C, prevents premature graying and adds natural shine to hair.</p>
                                </div>
                            </div>
                            
                            <div class="flex space-x-4">
                                <div class="w-16 h-16 bg-ayur-sage rounded-full flex items-center justify-center text-white font-bold">B</div>
                                <div>
                                    <h4 class="font-semibold text-ayur-green text-lg">Bhringraj (Eclipta Alba)</h4>
                                    <p class="text-ayur-brown">Known as the "King of Hair", it strengthens hair follicles and promotes healthy growth.</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="space-y-6">
                            <div class="flex space-x-4">
                                <div class="w-16 h-16 bg-ayur-brown rounded-full flex items-center justify-center text-white font-bold">C</div>
                                <div>
                                    <h4 class="font-semibold text-ayur-green text-lg">Coconut Oil</h4>
                                    <p class="text-ayur-brown">Base oil that deeply moisturizes and conditions hair, preventing protein loss.</p>
                                </div>
                            </div>
                            
                            <div class="flex space-x-4">
                                <div class="w-16 h-16 bg-ayur-green rounded-full flex items-center justify-center text-white font-bold">S</div>
                                <div>
                                    <h4 class="font-semibold text-ayur-green text-lg">Sesame Oil</h4>
                                    <p class="text-ayur-brown">Nourishes the scalp, improves blood circulation, and has natural SPF properties.</p>
                                </div>
                            </div>
                            
                            <div class="flex space-x-4">
                                <div class="w-16 h-16 bg-ayur-gold rounded-full flex items-center justify-center text-white font-bold">F</div>
                                <div>
                                    <h4 class="font-semibold text-ayur-green text-lg">Fenugreek Seeds</h4>
                                    <p class="text-ayur-brown">Rich in proteins and nicotinic acid, helps strengthen hair and reduce dandruff.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Usage Tab -->
                <div id="usage" class="tab-content hidden">
                    <h3 class="font-playfair text-2xl font-semibold text-ayur-green mb-6">How to Use</h3>
                    <div class="space-y-8">
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                            <div class="text-center p-6 bg-ayur-cream rounded-xl">
                                <div class="w-16 h-16 bg-ayur-green rounded-full flex items-center justify-center mx-auto mb-4">
                                    <span class="text-white font-bold text-xl">1</span>
                                </div>
                                <h4 class="font-semibold text-ayur-green mb-2">Warm the Oil</h4>
                                <p class="text-ayur-brown">Gently warm 2-3 tablespoons of oil for better absorption.</p>
                            </div>
                            
                            <div class="text-center p-6 bg-ayur-cream rounded-xl">
                                <div class="w-16 h-16 bg-ayur-green rounded-full flex items-center justify-center mx-auto mb-4">
                                    <span class="text-white font-bold text-xl">2</span>
                                </div>
                                <h4 class="font-semibold text-ayur-green mb-2">Massage Scalp</h4>
                                <p class="text-ayur-brown">Apply to scalp and massage in circular motions for 10-15 minutes.</p>
                            </div>
                            
                            <div class="text-center p-6 bg-ayur-cream rounded-xl">
                                <div class="w-16 h-16 bg-ayur-green rounded-full flex items-center justify-center mx-auto mb-4">
                                    <span class="text-white font-bold text-xl">3</span>
                                </div>
                                <h4 class="font-semibold text-ayur-green mb-2">Leave & Wash</h4>
                                <p class="text-ayur-brown">Leave for 30 minutes minimum, then wash with mild shampoo.</p>
                            </div>
                        </div>
                        
                        <div class="bg-white border-l-4 border-ayur-gold p-6 rounded-xl">
                            <h4 class="font-semibold text-ayur-green mb-3">💡 Pro Tips for Best Results:</h4>
                            <ul class="space-y-2 text-ayur-brown">
                                <li>• Use 2-3 times per week for optimal results</li>
                                <li>• For deep conditioning, leave overnight and wash in the morning</li>
                                <li>• Massage gently to improve blood circulation</li>
                                <li>• Use consistently for 6-8 weeks to see visible improvements</li>
                                <li>• Store in a cool, dry place away from direct sunlight</li>
                            </ul>
                        </div>
                        
                        <div class="bg-red-50 border border-red-200 p-6 rounded-xl">
                            <h4 class="font-semibold text-red-700 mb-3">⚠️ Precautions:</h4>
                            <ul class="space-y-1 text-red-600 text-sm">
                                <li>• Perform a patch test before first use</li>
                                <li>• Avoid contact with eyes</li>
                                <li>• Discontinue use if irritation occurs</li>
                                <li>• Not suitable for children under 3 years</li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <!-- Reviews Tab -->
                <div id="reviews" class="tab-content hidden">
                    <div class="flex flex-col lg:flex-row gap-8">
                        <!-- Rating Summary -->
                        <div class="lg:w-1/3">
                            <div class="bg-ayur-cream p-6 rounded-xl text-center">
                                <div class="text-4xl font-bold text-ayur-green mb-2">4.8</div>
                                <div class="text-ayur-gold text-2xl mb-2">⭐⭐⭐⭐⭐</div>
                                <p class="text-ayur-brown">Based on 127 reviews</p>
                                
                                <!-- Rating Breakdown -->
                                <div class="mt-6 space-y-3">
                                    <div class="flex items-center space-x-3">
                                        <span class="text-sm text-ayur-brown w-8">5★</span>
                                        <div class="flex-1 h-3 bg-gray-200 rounded-full">
                                            <div class="h-full bg-ayur-gold rounded-full" style="width: 78%"></div>
                                        </div>
                                        <span class="text-sm text-ayur-brown w-8">99</span>
                                    </div>
                                    <div class="flex items-center space-x-3">
                                        <span class="text-sm text-ayur-brown w-8">4★</span>
                                        <div class="flex-1 h-3 bg-gray-200 rounded-full">
                                            <div class="h-full bg-ayur-gold rounded-full" style="width: 15%"></div>
                                        </div>
                                        <span class="text-sm text-ayur-brown w-8">19</span>
                                    </div>
                                    <div class="flex items-center space-x-3">
                                        <span class="text-sm text-ayur-brown w-8">3★</span>
                                        <div class="flex-1 h-3 bg-gray-200 rounded-full">
                                            <div class="h-full bg-ayur-gold rounded-full" style="width: 5%"></div>
                                        </div>
                                        <span class="text-sm text-ayur-brown w-8">6</span>
                                    </div>
                                    <div class="flex items-center space-x-3">
                                        <span class="text-sm text-ayur-brown w-8">2★</span>
                                        <div class="flex-1 h-3 bg-gray-200 rounded-full">
                                            <div class="h-full bg-ayur-gold rounded-full" style="width: 2%"></div>
                                        </div>
                                        <span class="text-sm text-ayur-brown w-8">2</span>
                                    </div>
                                    <div class="flex items-center space-x-3">
                                        <span class="text-sm text-ayur-brown w-8">1★</span>
                                        <div class="flex-1 h-3 bg-gray-200 rounded-full">
                                            <div class="h-full bg-ayur-gold rounded-full" style="width: 1%"></div>
                                        </div>
                                        <span class="text-sm text-ayur-brown w-8">1</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Reviews List -->
                        <div class="lg:w-2/3">
                            <div class="space-y-6">
                                <!-- Review 1 -->
                                <div class="bg-white border border-ayur-cream p-6 rounded-xl">
                                    <div class="flex items-start justify-between mb-4">
                                        <div class="flex items-center space-x-4">
                                            <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='50' height='50' viewBox='0 0 50 50'%3E%3Ccircle cx='25' cy='25' r='25' fill='%23d4a574'/%3E%3Ctext x='50%25' y='50%25' dominant-baseline='middle' text-anchor='middle' font-size='16' fill='white'%3EP%3C/text%3E%3C/svg%3E" 
                                                 alt="User" class="w-12 h-12 rounded-full">
                                            <div>
                                                <h4 class="font-semibold text-ayur-green">Priya Sharma</h4>
                                                <p class="text-sm text-ayur-brown">Verified Purchase</p>
                                            </div>
                                        </div>
                                        <div class="text-right">
                                            <div class="text-ayur-gold">⭐⭐⭐⭐⭐</div>
                                            <p class="text-sm text-ayur-brown">2 weeks ago</p>
                                        </div>
                                    </div>
                                    <p class="text-ayur-brown mb-3">
                                        "Amazing product! I've been using this oil for 3 months now and the results are incredible. My hair fall has reduced significantly and my hair feels so much stronger and shinier. The smell is divine too!"
                                    </p>
                                    <div class="flex items-center space-x-4 text-sm">
                                        <button class="text-ayur-sage hover:text-ayur-green">👍 Helpful (23)</button>
                                        <button class="text-ayur-sage hover:text-ayur-green">Reply</button>
                                    </div>
                                </div>
                                
                                <!-- Review 2 -->
                                <div class="bg-white border border-ayur-cream p-6 rounded-xl">
                                    <div class="flex items-start justify-between mb-4">
                                        <div class="flex items-center space-x-4">
                                            <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='50' height='50' viewBox='0 0 50 50'%3E%3Ccircle cx='25' cy='25' r='25' fill='%234a7c59'/%3E%3Ctext x='50%25' y='50%25' dominant-baseline='middle' text-anchor='middle' font-size='16' fill='white'%3ER%3C/text%3E%3C/svg%3E" 
                                                 alt="User" class="w-12 h-12 rounded-full">
                                            <div>
                                                <h4 class="font-semibold text-ayur-green">Rajesh Kumar</h4>
                                                <p class="text-sm text-ayur-brown">Verified Purchase</p>
                                            </div>
                                        </div>
                                        <div class="text-right">
                                            <div class="text-ayur-gold">⭐⭐⭐⭐⭐</div>
                                            <p class="text-sm text-ayur-brown">1 month ago</p>
                                        </div>
                                    </div>
                                    <p class="text-ayur-brown mb-3">
                                        "Excellent quality oil. I was skeptical at first but decided to try it based on reviews. After 6 weeks of regular use, I can see new hair growth and my scalp feels much healthier. Highly recommended!"
                                    </p>
                                    <div class="flex items-center space-x-4 text-sm">
                                        <button class="text-ayur-sage hover:text-ayur-green">👍 Helpful (18)</button>
                                        <button class="text-ayur-sage hover:text-ayur-green">Reply</button>
                                    </div>
                                </div>
                                
                                <!-- Review 3 -->
                                <div class="bg-white border border-ayur-cream p-6 rounded-xl">
                                    <div class="flex items-start justify-between mb-4">
                                        <div class="flex items-center space-x-4">
                                            <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='50' height='50' viewBox='0 0 50 50'%3E%3Ccircle cx='25' cy='25' r='25' fill='%2387a96b'/%3E%3Ctext x='50%25' y='50%25' dominant-baseline='middle' text-anchor='middle' font-size='16' fill='white'%3EA%3C/text%3E%3C/svg%3E" 
                                                 alt="User" class="w-12 h-12 rounded-full">
                                            <div>
                                                <h4 class="font-semibold text-ayur-green">Anita Desai</h4>
                                                <p class="text-sm text-ayur-brown">Verified Purchase</p>
                                            </div>
                                        </div>
                                        <div class="text-right">
                                            <div class="text-ayur-gold">⭐⭐⭐⭐⭐</div>
                                            <p class="text-sm text-ayur-brown">3 weeks ago</p>
                                        </div>
                                    </div>
                                    <p class="text-ayur-brown mb-3">
                                        "Love this oil! It has a pleasant herbal fragrance and doesn't leave my hair greasy. I've noticed less hair fall and my hair looks more voluminous. The packaging is also very good."
                                    </p>
                                    <div class="flex items-center space-x-4 text-sm">
                                        <button class="text-ayur-sage hover:text-ayur-green">👍 Helpful (15)</button>
                                        <button class="text-ayur-sage hover:text-ayur-green">Reply</button>
                                    </div>
                                </div>
                                
                                <!-- Load More Reviews -->
                                <div class="text-center pt-6">
                                    <button class="border-2 border-ayur-green text-ayur-green px-6 py-3 rounded-lg hover:bg-ayur-green hover:text-white transition duration-300">
                                        Load More Reviews
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Related Products -->
    <section class="container mx-auto px-4 py-12">
        <h2 class="font-playfair text-3xl font-bold text-ayur-green mb-8 text-center">Related Products</h2>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            <!-- Related Product 1 -->
            <div class="bg-white rounded-xl overflow-hidden leaf-shadow hover-lift">
                <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='300' height='200' viewBox='0 0 300 200'%3E%3Crect width='300' height='200' fill='%2387a96b'/%3E%3Ctext x='50%25' y='50%25' dominant-baseline='middle' text-anchor='middle' font-size='14' fill='white'%3EAmla Hair Oil%3C/text%3E%3C/svg%3E" 
                     alt="Amla Hair Oil" class="w-full h-40 object-cover">
                <div class="p-4">
                    <h3 class="font-semibold text-ayur-green mb-2">Pure Amla Hair Oil</h3>
                    <div class="flex items-center mb-2">
                        <div class="text-ayur-gold text-sm">⭐⭐⭐⭐⭐</div>
                        <span class="text-xs text-ayur-brown ml-2">(89)</span>
                    </div>
                    <div class="flex justify-between items-center">
                        <span class="font-bold text-ayur-green">₹749</span>
                        <button class="bg-ayur-green text-white px-3 py-1 rounded text-sm hover:bg-opacity-90">Add</button>
                    </div>
                </div>
            </div>
            
            <!-- Related Product 2 -->
            <div class="bg-white rounded-xl overflow-hidden leaf-shadow hover-lift">
                <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='300' height='200' viewBox='0 0 300 200'%3E%3Crect width='300' height='200' fill='%23d4a574'/%3E%3Ctext x='50%25' y='50%25' dominant-baseline='middle' text-anchor='middle' font-size='14' fill='white'%3EHair Mask%3C/text%3E%3C/svg%3E" 
                     alt="Hair Mask" class="w-full h-40 object-cover">
                <div class="p-4">
                    <h3 class="font-semibold text-ayur-green mb-2">Herbal Hair Mask</h3>
                    <div class="flex items-center mb-2">
                        <div class="text-ayur-gold text-sm">⭐⭐⭐⭐⭐</div>
                        <span class="text-xs text-ayur-brown ml-2">(156)</span>
                    </div>
                    <div class="flex justify-between items-center">
                        <span class="font-bold text-ayur-green">₹599</span>
                        <button class="bg-ayur-green text-white px-3 py-1 rounded text-sm hover:bg-opacity-90">Add</button>
                    </div>
                </div>
            </div>
            
            <!-- Related Product 3 -->
            <div class="bg-white rounded-xl overflow-hidden leaf-shadow hover-lift">
                <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='300' height='200' viewBox='0 0 300 200'%3E%3Crect width='300' height='200' fill='%234a7c59'/%3E%3Ctext x='50%25' y='50%25' dominant-baseline='middle' text-anchor='middle' font-size='14' fill='white'%3EShampoo%3C/text%3E%3C/svg%3E" 
                     alt="Herbal Shampoo" class="w-full h-40 object-cover">
                <div class="p-4">
                    <h3 class="font-semibold text-ayur-green mb-2">Ayurvedic Shampoo</h3>
                    <div class="flex items-center mb-2">
                        <div class="text-ayur-gold text-sm">⭐⭐⭐⭐⭐</div>
                        <span class="text-xs text-ayur-brown ml-2">(203)</span>
                    </div>
                    <div class="flex justify-between items-center">
                        <span class="font-bold text-ayur-green">₹449</span>
                        <button class="bg-ayur-green text-white px-3 py-1 rounded text-sm hover:bg-opacity-90">Add</button>
                    </div>
                </div>
            </div>
            
            <!-- Related Product 4 -->
            <div class="bg-white rounded-xl overflow-hidden leaf-shadow hover-lift">
                <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='300' height='200' viewBox='0 0 300 200'%3E%3Crect width='300' height='200' fill='%238b4513'/%3E%3Ctext x='50%25' y='50%25' dominant-baseline='middle' text-anchor='middle' font-size='14' fill='white'%3EHair Serum%3C/text%3E%3C/svg%3E" 
                     alt="Hair Serum" class="w-full h-40 object-cover">
                <div class="p-4">
                    <h3 class="font-semibold text-ayur-green mb-2">Nourishing Hair Serum</h3>
                    <div class="flex items-center mb-2">
                        <div class="text-ayur-gold text-sm">⭐⭐⭐⭐⭐</div>
                        <span class="text-xs text-ayur-brown ml-2">(78)</span>
                    </div>
                    <div class="flex justify-between items-center">
                        <span class="font-bold text-ayur-green">₹999</span>
                        <button class="bg-ayur-green text-white px-3 py-1 rounded text-sm hover:bg-opacity-90">Add</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer (Simplified) -->
    <footer class="bg-ayur-green text-white py-8">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
                <div>
                    <h3 class="font-playfair text-lg font-bold mb-3">AyurVeda Wellness</h3>
                    <p class="text-sm opacity-90">Your trusted partner in natural wellness.</p>
                </div>
                <div>
                    <h4 class="font-medium mb-3">Customer Service</h4>
                    <ul class="text-sm space-y-1 opacity-90">
                        <li>Contact Us</li>
                        <li>Shipping Info</li>
                        <li>Returns</li>
                        <li>FAQ</li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-medium mb-3">Quick Links</h4>
                    <ul class="text-sm space-y-1 opacity-90">
                        <li>About Us</li>
                        <li>Blog</li>
                        <li>Consultation</li>
                        <li>Testimonials</li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-medium mb-3">Contact Info</h4>
                    <div class="text-sm space-y-1 opacity-90">
                        <p>📞 +91 9876543210</p>
                        <p>✉️ support@ayurvedawellness.com</p>
                        <p>🕒 Mon-Sat: 9AM-7PM</p>
                    </div>
                </div>
            </div>
            <div class="border-t border-white border-opacity-20 mt-6 pt-6 text-center text-sm opacity-90">
                © 2025 AyurVeda Wellness. All rights reserved.
            </div>
        </div>
    </footer>

    <script>
        // Image gallery functionality
        function changeMainImage(thumbnail) {
            // Remove active class from all thumbnails
            document.querySelectorAll('.thumbnail').forEach(thumb => {
                thumb.classList.remove('active', 'border-ayur-green');
                thumb.classList.add('border-gray-300');
            });
            
            // Add active class to clicked thumbnail
            thumbnail.classList.add('active', 'border-ayur-green');
            thumbnail.classList.remove('border-gray-300');
            
            // Change main image
            document.getElementById('mainImage').src = thumbnail.src;
        }
        
        // Quantity controls
        let quantity = 1;
        
        document.getElementById('decreaseQty').addEventListener('click', () => {
            if (quantity > 1) {
                quantity--;
                document.getElementById('quantity').textContent = quantity;
            }
        });
        
        document.getElementById('increaseQty').addEventListener('click', () => {
            if (quantity < 12) { // Stock limit
                quantity++;
                document.getElementById('quantity').textContent = quantity;
            }
        });
        
        // Size selection
        document.querySelectorAll('.size-option').forEach(button => {
            button.addEventListener('click', () => {
                // Remove active class from all size options
                document.querySelectorAll('.size-option').forEach(btn => {
                    btn.classList.remove('bg-ayur-green', 'text-white', 'active');
                    btn.classList.add('border-gray-300', 'text-gray-600');
                });
                
                // Add active class to clicked option
                button.classList.add('bg-ayur-green', 'text-white', 'active');
                button.classList.remove('border-gray-300', 'text-gray-600');
            });
        });
        
        // Tab functionality
        document.querySelectorAll('.tab-btn').forEach(button => {
            button.addEventListener('click', () => {
                const tabId = button.getAttribute('data-tab');
                
                // Remove active class from all tab buttons
                document.querySelectorAll('.tab-btn').forEach(btn => {
                    btn.classList.remove('text-ayur-green', 'border-ayur-green', 'bg-white');
                    btn.classList.add('text-ayur-brown');
                });
                
                // Add active class to clicked button
                button.classList.add('text-ayur-green', 'border-ayur-green', 'bg-white');
                button.classList.remove('text-ayur-brown');
                
                // Hide all tab contents
                document.querySelectorAll('.tab-content').forEach(content => {
                    content.classList.add('hidden');
                });
                
                // Show selected tab content
                document.getElementById(tabId).classList.remove('hidden');
            });
        });
        
        // Add to cart functionality
        document.getElementById('addToCart').addEventListener('click', () => {
            const button = document.getElementById('addToCart');
            const originalText = button.textContent;
            
            button.textContent = 'Added to Cart!';
            button.classList.add('bg-ayur-gold');
            
            setTimeout(() => {
                button.textContent = originalText;
                button.classList.remove('bg-ayur-gold');
            }, 2000);
            
            // Update cart counter in header
            const cartCounter = document.querySelector('.absolute.-top-2.-right-2');
            const currentCount = parseInt(cartCounter.textContent);
            cartCounter.textContent = currentCount + quantity;
        });
        
        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth'
                    });
                }
            });
        });
    </script>
</body>
</html>