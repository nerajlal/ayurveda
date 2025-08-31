@include('includes.header')

    <!-- Breadcrumb -->
    <div class="bg-white border-b">
        <div class="container mx-auto px-4 py-3">
            <nav class="flex text-sm">
                <a href="{{ route('products.index') }}" class="text-ayur-sage hover:text-ayur-green">Home</a>
                <span class="mx-2 text-gray-500">/</span>
                <a href="#" class="text-ayur-sage hover:text-ayur-green">{{ $product->category_name }}</a>
                <span class="mx-2 text-gray-500">/</span>
                <span class="text-ayur-green font-medium">{{ $product->name }}</span>
            </nav>
        </div>
    </div>

    <!-- Main Product Section -->
    <div class="container mx-auto px-4 py-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
            <!-- Product Images -->
            <div class="space-y-4">
                @php
                    $primaryImage = $product->images->firstWhere('is_primary', true) ?? $product->images->first();
                @endphp
                <!-- Main Image -->
                <div class="zoom-container bg-white rounded-2xl p-6 leaf-shadow">
                    <img id="mainImage" 
                         src="{{ $primaryImage ? url('images/' . $primaryImage->image_path) : 'https://via.placeholder.com/500' }}"
                         alt="{{ $product->name }}"
                         class="zoom-image w-full h-96 object-contain">
                </div>
                
                <!-- Thumbnail Images -->
                <div class="flex space-x-3">
                    @foreach ($product->images as $image)
                    <img class="thumbnail w-20 h-20 object-cover rounded-lg border-2 cursor-pointer {{ $image->is_primary ? 'border-ayur-green' : 'border-gray-300' }}"
                         src="{{ url('images/' . $image->image_path) }}"
                         onclick="changeMainImage(this)" alt="{{ $product->name }} view">
                    @endforeach
                </div>
            </div>

            <!-- Product Details -->
            <div class="space-y-6">
                <!-- Product Title and Rating -->
                <div>
                    <h1 class="font-playfair text-3xl lg:text-4xl font-bold text-ayur-green mb-3">
                        {{ $product->name }}
                    </h1>
                    <p class="text-lg text-ayur-brown mb-4">{{ $product->subtitle }}</p>
                    
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
                        <span id="productPrice" class="text-3xl font-bold text-ayur-green"></span>
                        <span id="productOriginalPrice" class="text-xl text-gray-500 line-through"></span>
                        <span id="productDiscount" class="bg-ayur-gold text-white px-3 py-1 rounded-full text-sm font-medium"></span>
                    </div>
                </div>

                <!-- Key Benefits -->
                @if($product->key_benefits)
                <div class="bg-white p-6 rounded-xl leaf-shadow">
                    <h3 class="font-playfair text-xl font-semibold text-ayur-green mb-4">Key Benefits</h3>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        @foreach(explode("\n", $product->key_benefits) as $benefit)
                        <div class="flex items-center space-x-3">
                            <span class="w-6 h-6 bg-ayur-green rounded-full flex items-center justify-center">
                                <span class="text-white text-xs">✓</span>
                            </span>
                            <span class="text-ayur-brown">{{ trim($benefit) }}</span>
                        </div>
                        @endforeach
                    </div>
                </div>
                @endif

                <!-- Quantity and Size Selection -->
                <div class="space-y-4">
                    <div>
                        <label class="block text-ayur-green font-medium mb-2">Size:</label>
                        <div class="flex space-x-3">
                            @foreach ($product->sizes as $index => $size)
                            <button class="size-option px-4 py-2 border-2 rounded-lg transition duration-300 {{ $index == 0 ? 'border-ayur-green text-ayur-green active' : 'border-gray-300 text-gray-600' }}"
                                    data-price="{{ $size->price }}"
                                    data-original-price="{{ $size->original_price }}"
                                    data-stock="{{ $size->stock_quantity }}">
                                {{ $size->size }} - ₹{{ (int)$size->price }}
                            </button>
                            @endforeach
                        </div>
                    </div>
                    
                    <div>
                        <label class="block text-ayur-green font-medium mb-2">Quantity:</label>
                        <div class="flex items-center space-x-3">
                            <button id="decreaseQty" class="w-10 h-10 bg-ayur-cream border border-ayur-green text-ayur-green rounded-lg hover:bg-ayur-green hover:text-white transition duration-300">-</button>
                            <span id="quantity" class="w-12 text-center font-semibold text-ayur-green text-lg">1</span>
                            <button id="increaseQty" class="w-10 h-10 bg-ayur-cream border border-ayur-green text-ayur-green rounded-lg hover:bg-ayur-green hover:text-white transition duration-300">+</button>
                            <span id="stockMessage" class="text-ayur-sage ml-4"></span>
                        </div>
                    </div>
                </div>

                <!-- Action Buttons -->
                <form action="{{ route('cart.store') }}" method="POST">
                    @csrf
                    <input type="hidden" name="product_size_id" id="selected_product_size_id" value="{{ $product->sizes->first()->id ?? '' }}">
                    <input type="hidden" name="quantity" id="selected_quantity" value="1">

                    <div class="flex flex-col sm:flex-row space-y-3 sm:space-y-0 sm:space-x-4">
                        <button type="submit" id="addToCart" class="flex-1 bg-ayur-green text-white px-8 py-4 rounded-lg hover:bg-opacity-90 transition duration-300 font-medium text-lg">
                            Add to Cart
                        </button>
                        <button type="button" class="flex-1 border-2 border-ayur-green text-ayur-green px-8 py-4 rounded-lg hover:bg-ayur-green hover:text-white transition duration-300 font-medium text-lg">
                            Buy Now
                        </button>
                        <button type="button" class="border border-ayur-sage text-ayur-sage p-4 rounded-lg hover:bg-ayur-sage hover:text-white transition duration-300">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                            </svg>
                        </button>
                    </div>
                </form>

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
                @if($product->ingredients)
                <button class="tab-btn px-8 py-4 font-medium text-ayur-brown hover:text-ayur-green transition duration-300" data-tab="ingredients">Ingredients</button>
                @endif
                @if($product->how_to_use)
                <button class="tab-btn px-8 py-4 font-medium text-ayur-brown hover:text-ayur-green transition duration-300" data-tab="usage">How to Use</button>
                @endif
                <button class="tab-btn px-8 py-4 font-medium text-ayur-brown hover:text-ayur-green transition duration-300" data-tab="reviews">Reviews (127)</button>
            </div>
            
            <!-- Tab Contents -->
            <div class="p-8">
                <!-- Description Tab -->
                <div id="description" class="tab-content">
                    <h3 class="font-playfair text-2xl font-semibold text-ayur-green mb-6">Product Description</h3>
                    <div class="prose max-w-none text-ayur-brown leading-relaxed">
                       {!! nl2br(e($product->description)) !!}
                    </div>
                </div>
                
                <!-- Ingredients Tab -->
                @if($product->ingredients)
                <div id="ingredients" class="tab-content hidden">
                    <h3 class="font-playfair text-2xl font-semibold text-ayur-green mb-6">Natural Ingredients</h3>
                     <div class="prose max-w-none text-ayur-brown leading-relaxed">
                       {!! nl2br(e($product->ingredients)) !!}
                    </div>
                </div>
                @endif
                
                <!-- Usage Tab -->
                @if($product->how_to_use)
                <div id="usage" class="tab-content hidden">
                    <h3 class="font-playfair text-2xl font-semibold text-ayur-green mb-6">How to Use</h3>
                    <div class="prose max-w-none text-ayur-brown leading-relaxed">
                       {!! nl2br(e($product->how_to_use)) !!}
                    </div>
                </div>
                @endif
                
                <!-- Reviews Tab -->
                <div id="reviews" class="tab-content hidden">
                    <p>Reviews will be here soon.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Related Products -->
    <section id="products" class="py-16 gradient-bg">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="font-playfair text-4xl font-bold text-ayur-green mb-4">Related Products</h2>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Product 1 -->
                <div class="bg-white rounded-2xl overflow-hidden shadow-lg hover-lift">
                    <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='300' height='200' viewBox='0 0 300 200'%3E%3Crect width='300' height='200' fill='%23d4a574'/%3E%3Ctext x='50%25' y='50%25' dominant-baseline='middle' text-anchor='middle' font-size='14' fill='white'%3EHerbal Oil%3C/text%3E%3C/svg%3E" 
                         alt="Herbal Oil" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="font-playfair text-xl font-semibold text-ayur-green mb-2">Brahmi Hair Oil</h3>
                        <p class="text-ayur-brown text-sm mb-4">Nourishing hair oil with Brahmi and Amla for healthy, lustrous hair.</p>
                        <div class="flex justify-between items-center">
                            <span class="font-bold text-ayur-green text-lg">₹899</span>
                            <a href="/product">
                                <button class="bg-ayur-green text-white px-4 py-2 rounded-lg hover:bg-opacity-90 transition duration-300">View Product</button>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Product 2 -->
                <div class="bg-white rounded-2xl overflow-hidden shadow-lg hover-lift">
                    <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='300' height='200' viewBox='0 0 300 200'%3E%3Crect width='300' height='200' fill='%2387a96b'/%3E%3Ctext x='50%25' y='50%25' dominant-baseline='middle' text-anchor='middle' font-size='14' fill='white'%3EHerbal Tea%3C/text%3E%3C/svg%3E" 
                         alt="Herbal Tea" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="font-playfair text-xl font-semibold text-ayur-green mb-2">Immunity Tea Blend</h3>
                        <p class="text-ayur-brown text-sm mb-4">Powerful blend of Tulsi, Ginger, and Turmeric for natural immunity.</p>
                        <div class="flex justify-between items-center">
                            <span class="font-bold text-ayur-green text-lg">₹549</span>
                            <a href="/product">
                                <button class="bg-ayur-green text-white px-4 py-2 rounded-lg hover:bg-opacity-90 transition duration-300">View Product</button>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Product 3 -->
                <div class="bg-white rounded-2xl overflow-hidden shadow-lg hover-lift">
                    <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='300' height='200' viewBox='0 0 300 200'%3E%3Crect width='300' height='200' fill='%238b4513'/%3E%3Ctext x='50%25' y='50%25' dominant-baseline='middle' text-anchor='middle' font-size='14' fill='white'%3EAyurvedic Powder%3C/text%3E%3C/svg%3E" 
                         alt="Ayurvedic Powder" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="font-playfair text-xl font-semibold text-ayur-green mb-2">Triphala Churna</h3>
                        <p class="text-ayur-brown text-sm mb-4">Traditional digestive support formula with three powerful fruits.</p>
                        <div class="flex justify-between items-center">
                            <span class="font-bold text-ayur-green text-lg">₹399</span>
                            <a href="/product">
                                <button class="bg-ayur-green text-white px-4 py-2 rounded-lg hover:bg-opacity-90 transition duration-300">View Product</button>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Product 4 -->
                <div class="bg-white rounded-2xl overflow-hidden shadow-lg hover-lift">
                    <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='300' height='200' viewBox='0 0 300 200'%3E%3Crect width='300' height='200' fill='%234a7c59'/%3E%3Ctext x='50%25' y='50%25' dominant-baseline='middle' text-anchor='middle' font-size='14' fill='white'%3EFace Pack%3C/text%3E%3C/svg%3E" 
                         alt="Face Pack" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="font-playfair text-xl font-semibold text-ayur-green mb-2">Neem Face Pack</h3>
                        <p class="text-ayur-brown text-sm mb-4">Natural face pack with Neem and Turmeric for clear, glowing skin.</p>
                        <div class="flex justify-between items-center">
                            <span class="font-bold text-ayur-green text-lg">₹299</span>
                            <a href="/product">
                                <button class="bg-ayur-green text-white px-4 py-2 rounded-lg hover:bg-opacity-90 transition duration-300">View Product</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="text-center mt-12">
                <a href="/products">
                    <button class="bg-ayur-green text-white px-8 py-4 rounded-lg hover:bg-opacity-90 transition duration-300 font-medium shadow-lg">
                        View All Products
                    </button>
                </a>
            </div>
        </div>
    </section>

    <!-- Footer -->
    @include('includes.footer')

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