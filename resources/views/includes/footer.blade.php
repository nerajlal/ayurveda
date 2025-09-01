<!-- Footer -->
    <footer id="contact" class="bg-ayur-green text-white py-12">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div>
                    <div class="flex items-center space-x-3 mb-6">
                        <div class="w-10 h-10 bg-white rounded-full flex items-center justify-center">
                            <span class="text-ayur-green font-bold">🌿</span>
                        </div>
                        <div>
                            <h3 class="font-playfair text-xl font-bold">AyurVeda</h3>
                            <p class="text-sm opacity-90">Wellness Store</p>
                        </div>
                    </div>
                    <p class="opacity-90 mb-4">Your trusted partner in natural wellness and Ayurvedic healing.</p>
                    <div class="flex space-x-4">
                        <a href="#" class="w-8 h-8 bg-white bg-opacity-20 rounded-full flex items-center justify-center hover:bg-opacity-30 transition duration-300"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="w-8 h-8 bg-white bg-opacity-20 rounded-full flex items-center justify-center hover:bg-opacity-30 transition duration-300"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="w-8 h-8 bg-white bg-opacity-20 rounded-full flex items-center justify-center hover:bg-opacity-30 transition duration-300"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
                
                <div class="md:col-span-2">
                    <div class="grid grid-cols-2 gap-8">
                        <div>
                            <h4 class="font-semibold text-lg mb-4">Quick Links</h4>
                            <ul class="space-y-2">
                                <li><a href="/" class="opacity-90 hover:opacity-100 transition duration-300">Home</a></li>
                                <li><a href="/products" class="opacity-90 hover:opacity-100 transition duration-300">Products</a></li>
                                <li><a href="/about" class="opacity-90 hover:opacity-100 transition duration-300">About Us</a></li>
                                <li><a href="/contact" class="opacity-90 hover:opacity-100 transition duration-300">Contact</a></li>
                                <!-- <li><a href="#" class="opacity-90 hover:opacity-100 transition duration-300">Blog</a></li> -->
                            </ul>
                        </div>
                        
                        <div>
                            <h4 class="font-semibold text-lg mb-4">Categories</h4>
                            <ul class="space-y-2">
                                <li><a href="#" class="opacity-90 hover:opacity-100 transition duration-300">Herbal Oils</a></li>
                                <li><a href="#" class="opacity-90 hover:opacity-100 transition duration-300">Herbal Teas</a></li>
                                <li><a href="#" class="opacity-90 hover:opacity-100 transition duration-300">Churnas & Powders</a></li>
                                <li><a href="#" class="opacity-90 hover:opacity-100 transition duration-300">Skincare</a></li>
                                <li><a href="#" class="opacity-90 hover:opacity-100 transition duration-300">Supplements</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <div>
                    <h4 class="font-semibold text-lg mb-4">Contact Info</h4>
                    <div class="space-y-3">
                        <!-- Address -->
                        <div class="flex items-center space-x-3">
                            <div class="w-8 h-8 bg-white bg-opacity-20 rounded-full flex items-center justify-center">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <p class="opacity-90">123 Wellness Street, Ayurveda City, Kerala 680001</p>
                        </div>

                        <!-- Phone -->
                        <div class="flex items-center space-x-3">
                            <div class="w-8 h-8 bg-white bg-opacity-20 rounded-full flex items-center justify-center">
                                <i class="fas fa-phone-alt"></i>
                            </div>
                            <p class="opacity-90">+91 9876543210</p>
                        </div>

                        <!-- Email -->
                        <div class="flex items-center space-x-3">
                            <div class="w-8 h-8 bg-white bg-opacity-20 rounded-full flex items-center justify-center">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <p class="opacity-90">info@ayurvedawellness.com</p>
                        </div>

                        <!-- Working Hours -->
                        <div class="flex items-center space-x-3">
                            <div class="w-8 h-8 bg-white bg-opacity-20 rounded-full flex items-center justify-center">
                                <i class="fas fa-clock"></i>
                            </div>
                            <p class="opacity-90">Mon-Sat: 9AM-7PM</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="border-t border-white border-opacity-20 mt-8 pt-8 flex flex-col md:flex-row justify-between items-center">
                <p class="opacity-90 mb-4 md:mb-0">© 2025 AyurVeda Wellness Store. All rights reserved.</p>
                <div class="flex space-x-6">
                    <a href="/privacy" class="opacity-90 hover:opacity-100 transition duration-300">Privacy Policy</a>
                    <a href="/terms" class="opacity-90 hover:opacity-100 transition duration-300">Terms of Service</a>
                    <a href="/refund" class="opacity-90 hover:opacity-100 transition duration-300">Refund Policy</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Floating WhatsApp Button -->
    <div class="fixed bottom-6 right-6 z-50">
        <a href="#">
            <button class="bg-green-500 text-white w-14 h-14 rounded-full shadow-lg hover:bg-green-600 transition duration-300 flex items-center justify-center">
                <i class="fab fa-whatsapp"></i>
            </button>
        </a>
    </div>

    <!-- Order Details Modal -->
    <div id="orderDetailsModal" class="fixed inset-0 modal-backdrop z-50 flex items-center justify-center p-4 hidden">
        <div class="bg-white rounded-2xl shadow-2xl max-w-2xl w-full max-h-[90vh] overflow-y-auto">
            <div id="orderDetailsContent" class="p-8">
                <!-- Dynamic content will be injected here -->
                <div class="text-center">
                    <p>Loading order details...</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Back to Top Button -->
    <button id="backToTop" class="fixed bottom-6 left-6 bg-ayur-green text-white w-12 h-12 rounded-full shadow-lg hover:bg-opacity-90 transition duration-300 flex items-center justify-center opacity-0 invisible">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18"></path>
        </svg>
    </button>

    <script>
        function closeOrderDetailsModal() {
            const modal = document.getElementById('orderDetailsModal');
            modal.classList.add('hidden');
            document.body.style.overflow = 'auto';
        }

        async function openOrderDetailsModal(orderId) {
            const modal = document.getElementById('orderDetailsModal');
            const contentDiv = document.getElementById('orderDetailsContent');

            // Show modal with loading state
            contentDiv.innerHTML = '<p class="text-center">Loading order details...</p>';
            modal.classList.remove('hidden');
            document.body.style.overflow = 'hidden';

            try {
                const response = await fetch(`/orders/${orderId}`);
                if (!response.ok) {
                    throw new Error('Failed to fetch order details.');
                }
                const order = await response.json();

                // Date formatting
                const orderDate = new Date(order.created_at).toLocaleDateString('en-US', { year: 'numeric', month: 'long', day: 'numeric' });

                // Status mapping
                const statuses = { 0: 'Pending', 1: 'Processing', 2: 'Shipped', 3: 'Delivered' };
                const statusText = statuses[order.status] || 'Unknown';

                let itemsHtml = '';
                order.items.forEach(item => {
                    const imageUrl = item.product_size.product.images.find(img => img.is_primary)
                        ? `/images/${item.product_size.product.images.find(img => img.is_primary).image_path}`
                        : 'https://via.placeholder.com/80';

                    itemsHtml += `
                        <div class="flex items-center space-x-4 py-3 border-b border-gray-100">
                            <img src="${imageUrl}" alt="${item.product_size.product.name}" class="w-16 h-16 rounded-lg object-cover">
                            <div class="flex-grow">
                                <p class="font-semibold text-ayur-green">${item.product_size.product.name}</p>
                                <p class="text-sm text-ayur-brown">${item.product_size.size}</p>
                            </div>
                            <div class="text-right">
                                <p class="text-sm text-ayur-brown">${item.quantity} x ₹${parseFloat(item.price).toFixed(2)}</p>
                                <p class="font-semibold text-ayur-green">₹${(item.quantity * item.price).toFixed(2)}</p>
                            </div>
                        </div>
                    `;
                });

                const modalHtml = `
                    <div class="flex justify-between items-start mb-6">
                        <div>
                            <h2 class="font-playfair text-2xl font-bold text-ayur-green">Order Details</h2>
                            <p class="text-ayur-brown">Order #${order.id} &bull; <span class="text-ayur-gold font-medium">${statusText}</span></p>
                        </div>
                        <button onclick="closeOrderDetailsModal()" class="text-ayur-brown hover:text-ayur-green transition duration-300">&times;</button>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 text-sm">
                        <div>
                            <h4 class="font-semibold text-ayur-green mb-2">Order Date</h4>
                            <p class="text-ayur-brown">${orderDate}</p>
                        </div>
                        <div>
                            <h4 class="font-semibold text-ayur-green mb-2">Shipping Address</h4>
                            <address class="text-ayur-brown not-italic">
                                ${order.shipping_address_line_1}<br>
                                ${order.shipping_address_line_2 ? order.shipping_address_line_2 + '<br>' : ''}
                                ${order.shipping_city}, ${order.shipping_state} ${order.shipping_postal_code}<br>
                                ${order.shipping_country}<br>
                                Ph: ${order.shipping_phone_number || 'N/A'}
                            </address>
                        </div>
                    </div>

                    <div class="mt-8">
                        <h4 class="font-semibold text-ayur-green mb-2">Order Items</h4>
                        <div class="border border-gray-200 rounded-lg p-4">
                            ${itemsHtml}
                            <div class="flex justify-end mt-4 pt-4 border-t border-gray-200">
                                <div class="text-right">
                                    <p class="text-ayur-brown">Total Amount:</p>
                                    <p class="font-bold text-xl text-ayur-green">₹${parseFloat(order.total_amount).toFixed(2)}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                `;
                contentDiv.innerHTML = modalHtml;

            } catch (error) {
                console.error('Error fetching order details:', error);
                contentDiv.innerHTML = '<p class="text-center text-red-500">Could not load order details. Please try again later.</p>';
            }
        }

        document.addEventListener('DOMContentLoaded', function() {
            @if (session('show_address_modal'))
                openAddressModal();
            @endif
        });

        // Back to top functionality
        const backToTopButton = document.getElementById('backToTop');
        
        window.addEventListener('scroll', () => {
            if (window.pageYOffset > 300) {
                backToTopButton.classList.remove('opacity-0', 'invisible');
                backToTopButton.classList.add('opacity-100', 'visible');
            } else {
                backToTopButton.classList.add('opacity-0', 'invisible');
                backToTopButton.classList.remove('opacity-100', 'visible');
            }
        });
        
        backToTopButton.addEventListener('click', () => {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });
        
        // Smooth scrolling for navigation links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });
        
        // Add to cart functionality (demo)
        document.querySelectorAll('button').forEach(button => {
            if (button.textContent.includes('Add to Cart')) {
                button.addEventListener('click', () => {
                    const originalText = button.textContent;
                    button.textContent = 'Added!';
                    button.classList.add('bg-ayur-gold');
                    
                    setTimeout(() => {
                        button.textContent = originalText;
                        button.classList.remove('bg-ayur-gold');
                    }, 2000);
                    
                    // Update cart counter
                    const cartCounter = document.querySelector('.absolute.-top-2.-right-2');
                    const currentCount = parseInt(cartCounter.textContent);
                    cartCounter.textContent = currentCount + 1;
                });
            }
        });
        
        // Newsletter subscription
        const subscribeButton = document.querySelector('button:has-text("Subscribe")');
        if (subscribeButton) {
            subscribeButton.addEventListener('click', () => {
                const email = document.querySelector('input[type="email"]');
                if (email && email.value) {
                    alert('Thank you for subscribing! You will receive wellness tips and exclusive offers.');
                    email.value = '';
                } else {
                    alert('Please enter a valid email address.');
                }
            });
        }
        
        // Mobile menu toggle (basic implementation)
        const menuButton = document.querySelector('.md\\:hidden');
        const nav = document.querySelector('nav');
        
        if (menuButton && nav) {
            menuButton.addEventListener('click', () => {
                nav.classList.toggle('hidden');
                nav.classList.toggle('block');
            });
        }
    </script>
</body>
</html>