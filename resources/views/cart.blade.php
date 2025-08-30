@include('includes.header')


    <!-- Breadcrumb -->
    <section class="pt-4 pb-4 bg-ayur-cream">
        <div class="container mx-auto px-4">
            <div class="flex items-center space-x-2 text-sm text-ayur-brown">
                <a href="/" class="hover:text-ayur-green">Home</a>
                <span>›</span>
                <a href="/products" class="hover:text-ayur-green">Products</a>
                <span>›</span>
                <span class="text-ayur-green font-medium">Shopping Cart</span>
            </div>
        </div>
    </section>

    <!-- Cart Content -->
    <section class="py-12 bg-white">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-12">
                <!-- Cart Items -->
                <div class="lg:col-span-2">
                    <div class="flex justify-between items-center mb-8">
                        <h1 class="font-playfair text-3xl font-bold text-ayur-green">Shopping Cart</h1>
                        <p class="text-ayur-brown">(<span id="total-items">3</span> items)</p>
                    </div>

                    <div class="space-y-6" id="cart-items">
                        <!-- Cart Item 1 -->
                        <div class="cart-item bg-ayur-cream p-6 rounded-2xl">
                            <div class="flex flex-col md:flex-row gap-6">
                                <div class="flex-shrink-0">
                                    <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='120' height='120' viewBox='0 0 120 120'%3E%3Crect width='120' height='120' fill='%23d4a574' rx='12'/%3E%3Ctext x='50%25' y='40%25' dominant-baseline='middle' text-anchor='middle' font-size='12' fill='white'%3EBrahmi%3C/text%3E%3Ctext x='50%25' y='60%25' dominant-baseline='middle' text-anchor='middle' font-size='12' fill='white'%3EHair Oil%3C/text%3E%3C/svg%3E" 
                                         alt="Brahmi Hair Oil" class="w-24 h-24 md:w-28 md:h-28 rounded-xl object-cover">
                                </div>
                                <div class="flex-grow">
                                    <div class="flex justify-between items-start mb-3">
                                        <div>
                                            <h3 class="font-playfair text-xl font-semibold text-ayur-green">Brahmi Hair Oil</h3>
                                            <p class="text-ayur-brown text-sm mt-1">Nourishing hair oil with Brahmi and Amla</p>
                                            <p class="text-ayur-sage text-sm">200ml bottle</p>
                                        </div>
                                        <button class="text-ayur-brown hover:text-red-500 text-xl" onclick="removeItem(this)" title="Remove item">
                                            ✕
                                        </button>
                                    </div>
                                    <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4">
                                        <div class="flex items-center space-x-3">
                                            <span class="text-ayur-brown text-sm">Quantity:</span>
                                            <div class="flex items-center border-2 border-ayur-sage border-opacity-30 rounded-lg">
                                                <button class="px-3 py-1 hover:bg-ayur-sage hover:bg-opacity-20 transition duration-300" onclick="updateQuantity(this, -1)">−</button>
                                                <input type="number" value="2" min="1" class="w-16 text-center py-1 border-none outline-none quantity-input bg-transparent" onchange="updateQuantity(this, 0)">
                                                <button class="px-3 py-1 hover:bg-ayur-sage hover:bg-opacity-20 transition duration-300" onclick="updateQuantity(this, 1)">+</button>
                                            </div>
                                        </div>
                                        <div class="text-right">
                                            <p class="text-ayur-brown text-sm line-through">₹999</p>
                                            <p class="font-bold text-ayur-green text-xl">₹899</p>
                                            <p class="text-ayur-sage text-sm">You save ₹100</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Cart Item 2 -->
                        <div class="cart-item bg-ayur-cream p-6 rounded-2xl">
                            <div class="flex flex-col md:flex-row gap-6">
                                <div class="flex-shrink-0">
                                    <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='120' height='120' viewBox='0 0 120 120'%3E%3Crect width='120' height='120' fill='%2387a96b' rx='12'/%3E%3Ctext x='50%25' y='40%25' dominant-baseline='middle' text-anchor='middle' font-size='12' fill='white'%3EImmunity%3C/text%3E%3Ctext x='50%25' y='60%25' dominant-baseline='middle' text-anchor='middle' font-size='12' fill='white'%3ETea Blend%3C/text%3E%3C/svg%3E" 
                                         alt="Immunity Tea Blend" class="w-24 h-24 md:w-28 md:h-28 rounded-xl object-cover">
                                </div>
                                <div class="flex-grow">
                                    <div class="flex justify-between items-start mb-3">
                                        <div>
                                            <h3 class="font-playfair text-xl font-semibold text-ayur-green">Immunity Tea Blend</h3>
                                            <p class="text-ayur-brown text-sm mt-1">Powerful blend of Tulsi, Ginger, and Turmeric</p>
                                            <p class="text-ayur-sage text-sm">100g pack</p>
                                        </div>
                                        <button class="text-ayur-brown hover:text-red-500 text-xl" onclick="removeItem(this)" title="Remove item">
                                            ✕
                                        </button>
                                    </div>
                                    <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4">
                                        <div class="flex items-center space-x-3">
                                            <span class="text-ayur-brown text-sm">Quantity:</span>
                                            <div class="flex items-center border-2 border-ayur-sage border-opacity-30 rounded-lg">
                                                <button class="px-3 py-1 hover:bg-ayur-sage hover:bg-opacity-20 transition duration-300" onclick="updateQuantity(this, -1)">−</button>
                                                <input type="number" value="1" min="1" class="w-16 text-center py-1 border-none outline-none quantity-input bg-transparent" onchange="updateQuantity(this, 0)">
                                                <button class="px-3 py-1 hover:bg-ayur-sage hover:bg-opacity-20 transition duration-300" onclick="updateQuantity(this, 1)">+</button>
                                            </div>
                                        </div>
                                        <div class="text-right">
                                            <p class="font-bold text-ayur-green text-xl">₹549</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Cart Item 3 -->
                        <div class="cart-item bg-ayur-cream p-6 rounded-2xl">
                            <div class="flex flex-col md:flex-row gap-6">
                                <div class="flex-shrink-0">
                                    <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='120' height='120' viewBox='0 0 120 120'%3E%3Crect width='120' height='120' fill='%234a7c59' rx='12'/%3E%3Ctext x='50%25' y='40%25' dominant-baseline='middle' text-anchor='middle' font-size='12' fill='white'%3ENeem%3C/text%3E%3Ctext x='50%25' y='60%25' dominant-baseline='middle' text-anchor='middle' font-size='12' fill='white'%3EFace Pack%3C/text%3E%3C/svg%3E" 
                                         alt="Neem Face Pack" class="w-24 h-24 md:w-28 md:h-28 rounded-xl object-cover">
                                </div>
                                <div class="flex-grow">
                                    <div class="flex justify-between items-start mb-3">
                                        <div>
                                            <h3 class="font-playfair text-xl font-semibold text-ayur-green">Neem Face Pack</h3>
                                            <p class="text-ayur-brown text-sm mt-1">Natural face pack with Neem and Turmeric</p>
                                            <p class="text-ayur-sage text-sm">50g container</p>
                                        </div>
                                        <button class="text-ayur-brown hover:text-red-500 text-xl" onclick="removeItem(this)" title="Remove item">
                                            ✕
                                        </button>
                                    </div>
                                    <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4">
                                        <div class="flex items-center space-x-3">
                                            <span class="text-ayur-brown text-sm">Quantity:</span>
                                            <div class="flex items-center border-2 border-ayur-sage border-opacity-30 rounded-lg">
                                                <button class="px-3 py-1 hover:bg-ayur-sage hover:bg-opacity-20 transition duration-300" onclick="updateQuantity(this, -1)">−</button>
                                                <input type="number" value="1" min="1" class="w-16 text-center py-1 border-none outline-none quantity-input bg-transparent" onchange="updateQuantity(this, 0)">
                                                <button class="px-3 py-1 hover:bg-ayur-sage hover:bg-opacity-20 transition duration-300" onclick="updateQuantity(this, 1)">+</button>
                                            </div>
                                        </div>
                                        <div class="text-right">
                                            <p class="font-bold text-ayur-green text-xl">₹299</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Continue Shopping -->
                    <div class="mt-8 text-center">
                        <a href="/products" class="inline-flex items-center text-ayur-green hover:text-ayur-brown transition duration-300">
                            ← Continue Shopping
                        </a>
                    </div>
                </div>

                <!-- Order Summary -->
                <div class="lg:col-span-1">
                    <div class="bg-ayur-cream p-6 rounded-2xl leaf-shadow sticky top-24">
                        <h2 class="font-playfair text-2xl font-bold text-ayur-green mb-6">Order Summary</h2>
                        
                        <div class="space-y-4 mb-6">
                            <div class="flex justify-between text-ayur-brown">
                                <span>Subtotal (4 items)</span>
                                <span id="subtotal">₹2,347</span>
                            </div>
                            <div class="flex justify-between text-ayur-sage">
                                <span>Discount</span>
                                <span id="discount">-₹100</span>
                            </div>
                            <div class="flex justify-between text-ayur-brown">
                                <span>Shipping</span>
                                <span id="shipping">₹99</span>
                            </div>
                            <div class="flex justify-between text-ayur-brown text-sm">
                                <span>GST (18%)</span>
                                <span id="gst">₹404</span>
                            </div>
                            <hr class="border-ayur-sage border-opacity-30">
                            <div class="flex justify-between font-bold text-lg text-ayur-green">
                                <span>Total</span>
                                <span id="total">₹2,750</span>
                            </div>
                        </div>

                        <!-- Promo Code -->
                        <div class="mb-6">
                            <label class="block text-ayur-brown font-medium mb-2">Promo Code</label>
                            <div class="flex gap-2">
                                <input type="text" placeholder="Enter code" class="flex-1 px-3 py-2 border-2 border-ayur-sage border-opacity-30 rounded-lg focus:outline-none focus:border-ayur-green">
                                <button class="bg-ayur-sage text-white px-4 py-2 rounded-lg hover:bg-opacity-90 transition duration-300">
                                    Apply
                                </button>
                            </div>
                        </div>

                        <!-- Free Shipping Notice -->
                        <div class="bg-ayur-sage bg-opacity-20 p-4 rounded-lg mb-6">
                            <p class="text-ayur-green text-sm text-center">
                                🚚 Add ₹249 more for FREE shipping!
                            </p>
                            <div class="bg-ayur-sage bg-opacity-30 rounded-full h-2 mt-2">
                                <div class="bg-ayur-green h-2 rounded-full" style="width: 75%"></div>
                            </div>
                        </div>

                        <!-- Checkout Button -->
                        <button class="w-full bg-ayur-green text-white py-4 rounded-lg hover:bg-opacity-90 transition duration-300 font-medium shadow-lg mb-4">
                            Proceed to Checkout
                        </button>

                        <!-- Payment Options -->
                        <div class="text-center text-ayur-brown text-sm">
                            <p class="mb-2">We accept:</p>
                            <div class="flex justify-center space-x-2">
                                <span class="bg-white px-2 py-1 rounded text-xs">💳 Cards</span>
                                <span class="bg-white px-2 py-1 rounded text-xs">📱 UPI</span>
                                <span class="bg-white px-2 py-1 rounded text-xs">🏦 Net Banking</span>
                                <span class="bg-white px-2 py-1 rounded text-xs">💸 COD</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Recommended Products -->
    <!-- Products Section -->
    <section id="products" class="py-16 gradient-bg">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="font-playfair text-4xl font-bold text-ayur-green mb-4">You might also like</h2>
                <p class="text-xl text-ayur-brown max-w-2xl mx-auto">Complete your wellness routine with these complementary products</p>
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
        function updateQuantity(element, change) {
            const input = element.tagName === 'INPUT' ? element : element.parentElement.querySelector('input');
            let currentValue = parseInt(input.value) || 1;
            
            if (change !== 0) {
                currentValue += change;
                if (currentValue < 1) currentValue = 1;
                input.value = currentValue;
            } else {
                currentValue = parseInt(input.value) || 1;
                if (currentValue < 1) {
                    input.value = 1;
                    currentValue = 1;
                }
            }
            
            updateCartTotals();
        }

        function removeItem(element) {
            const cartItem = element.closest('.cart-item');
            cartItem.classList.add('removing');
            
            setTimeout(() => {
                cartItem.remove();
                updateCartTotals();
                updateItemCount();
            }, 300);
        }

        function updateCartTotals() {
            // This is a simplified calculation - in a real app, this would be more complex
            const quantities = document.querySelectorAll('.quantity-input');
            let subtotal = 0;
            let itemCount = 0;
            
            quantities.forEach((input, index) => {
                const qty = parseInt(input.value) || 1;
                itemCount += qty;
                
                // Sample prices for calculation
                const prices = [899, 549, 299];
                if (index < prices.length) {
                    subtotal += prices[index] * qty;
                }
            });
            
            const discount = 100;
            const shipping = subtotal > 999 ? 0 : 99;
            const gst = Math.round((subtotal - discount + shipping) * 0.18);
            const total = subtotal - discount + shipping + gst;
            
            document.getElementById('subtotal').textContent = '₹' + subtotal.toLocaleString();
            document.getElementById('discount').textContent = '-₹' + discount;
            document.getElementById('shipping').textContent = shipping === 0 ? 'FREE' : '₹' + shipping;
            document.getElementById('gst').textContent = '₹' + gst;
            document.getElementById('total').textContent = '₹' + total.toLocaleString();
            document.getElementById('total-items').textContent = itemCount;
        }

        function updateItemCount() {
            const cartItems = document.querySelectorAll('.cart-item').length;
            const cartCount = document.getElementById('cart-count');
            cartCount.textContent = cartItems;
            
            if (cartItems === 0) {
                showEmptyCart();
            }
        }

        function showEmptyCart() {
            const cartItemsContainer = document.getElementById('cart-items');
            cartItemsContainer.innerHTML = `
                <div class="text-center py-16">
                    <div class="text-6xl mb-4">🛒</div>
                    <h3 class="font-playfair text-2xl font-semibold text-ayur-green mb-4">Your cart is empty</h3>
                    <p class="text-ayur-brown mb-8">Looks like you haven't added any products to your cart yet.</p>
                    <a href="/products" class="bg-ayur-green text-white px-8 py-3 rounded-lg hover:bg-opacity-90 transition duration-300 font-medium">
                        Continue Shopping
                    </a>
                </div>
            `;
            
            // Hide order summary
            document.querySelector('.lg\\:col-span-1').style.display = 'none';
        }

        // Add to cart functionality for recommended products
        document.addEventListener('DOMContentLoaded', function() {
            const addToCartButtons = document.querySelectorAll('.bg-ayur-green.text-white.px-3.py-1');
            addToCartButtons.forEach(button => {
                button.addEventListener('click', function(e) {
                    e.preventDefault();
                    
                    // Add visual feedback
                    const originalText = this.textContent;
                    this.textContent = 'Added!';
                    this.classList.add('bg-ayur-sage');
                    
                    // Update cart count
                    const cartCount = document.getElementById('cart-count');
                    cartCount.textContent = parseInt(cartCount.textContent) + 1;
                    
                    // Reset button after 2 seconds
                    setTimeout(() => {
                        this.textContent = originalText;
                        this.classList.remove('bg-ayur-sage');
                    }, 2000);
                });
            });
        });
    </script>
</body>
</html>