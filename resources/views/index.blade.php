@include('includes.header')

    <!-- Hero Section -->
    <section class="gradient-bg py-20">
        <div class="container mx-auto px-4">
            <div class="flex flex-col lg:flex-row items-center">
                <div class="lg:w-1/2 mb-10 lg:mb-0">
                    <h2 class="font-playfair text-5xl lg:text-6xl font-bold text-ayur-green mb-6 leading-tight">
                        Natural Healing for Modern Living
                    </h2>
                    <p class="text-xl text-ayur-brown mb-8 leading-relaxed">
                        Discover the ancient wisdom of Ayurveda with our premium collection of authentic herbs, oils, and wellness products. Each item is carefully sourced and crafted to restore your natural balance.
                    </p>
                    <div class="flex flex-col sm:flex-row space-y-4 sm:space-y-0 sm:space-x-4">
                        <button class="bg-ayur-green text-white px-8 py-4 rounded-lg hover:bg-opacity-90 transition duration-300 font-medium shadow-lg">
                            Shop Now
                        </button>
                        <button class="border-2 border-ayur-green text-ayur-green px-8 py-4 rounded-lg hover:bg-ayur-green hover:text-white transition duration-300 font-medium">
                            Free Consultation
                        </button>
                    </div>
                </div>
                <div class="lg:w-1/2 lg:pl-12">
                    <div class="relative">
                        <div class="bg-white rounded-2xl p-8 leaf-shadow">
                            <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='400' height='300' viewBox='0 0 400 300'%3E%3Crect width='400' height='300' fill='%23e8e5d3'/%3E%3Ctext x='50%25' y='50%25' dominant-baseline='middle' text-anchor='middle' font-size='18' fill='%234a7c59'%3EAyurvedic Products%3C/text%3E%3C/svg%3E" 
                                 alt="Ayurvedic Products" class="w-full h-64 object-cover rounded-lg">
                            <div class="absolute -bottom-4 -right-4 bg-ayur-gold text-white p-4 rounded-xl">
                                <span class="font-bold text-lg">5000+</span>
                                <p class="text-sm">Happy Customers</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="text-center p-8 rounded-xl bg-ayur-cream hover-lift">
                    <div class="w-16 h-16 bg-ayur-green rounded-full flex items-center justify-center mx-auto mb-6">
                        <span class="text-2xl">🌱</span>
                    </div>
                    <h3 class="font-playfair text-2xl font-semibold text-ayur-green mb-4">100% Natural</h3>
                    <p class="text-ayur-brown">All our products are made from pure, organic ingredients sourced directly from certified organic farms.</p>
                </div>
                <div class="text-center p-8 rounded-xl bg-ayur-cream hover-lift">
                    <div class="w-16 h-16 bg-ayur-green rounded-full flex items-center justify-center mx-auto mb-6">
                        <span class="text-2xl">⚖️</span>
                    </div>
                    <h3 class="font-playfair text-2xl font-semibold text-ayur-green mb-4">Traditional Methods</h3>
                    <p class="text-ayur-brown">Crafted using time-tested Ayurvedic formulations and traditional preparation methods.</p>
                </div>
                <div class="text-center p-8 rounded-xl bg-ayur-cream hover-lift">
                    <div class="w-16 h-16 bg-ayur-green rounded-full flex items-center justify-center mx-auto mb-6">
                        <span class="text-2xl">👨‍⚕️</span>
                    </div>
                    <h3 class="font-playfair text-2xl font-semibold text-ayur-green mb-4">Expert Guidance</h3>
                    <p class="text-ayur-brown">Get personalized recommendations from certified Ayurvedic practitioners and wellness experts.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Products Section -->
    <section id="products" class="py-16 gradient-bg">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="font-playfair text-4xl font-bold text-ayur-green mb-4">Featured Products</h2>
                <p class="text-xl text-ayur-brown max-w-2xl mx-auto">Explore our curated selection of premium Ayurvedic products designed to enhance your well-being naturally.</p>
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

    <!-- About Section -->
    <section id="about" class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="flex flex-col lg:flex-row items-center">
                <div class="lg:w-1/2 mb-10 lg:mb-0 lg:pr-12">
                    <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='500' height='400' viewBox='0 0 500 400'%3E%3Crect width='500' height='400' fill='%23e8e5d3'/%3E%3Ctext x='50%25' y='50%25' dominant-baseline='middle' text-anchor='middle' font-size='16' fill='%234a7c59'%3EAyurvedic Heritage%3C/text%3E%3C/svg%3E" 
                         alt="Ayurvedic Heritage" class="w-full rounded-2xl leaf-shadow">
                </div>
                <div class="lg:w-1/2">
                    <h2 class="font-playfair text-4xl font-bold text-ayur-green mb-6">
                        5000 Years of Wellness Wisdom
                    </h2>
                    <p class="text-lg text-ayur-brown mb-6 leading-relaxed">
                        Ayurveda, the ancient Indian system of medicine, focuses on maintaining health through the balance of mind, body, and consciousness. Our products are carefully formulated using traditional recipes passed down through generations.
                    </p>
                    <p class="text-lg text-ayur-brown mb-8 leading-relaxed">
                        We work directly with certified organic farms and traditional manufacturers to ensure the highest quality and authenticity in every product we offer.
                    </p>
                    
                    <div class="grid grid-cols-2 gap-6 mb-8">
                        <div class="text-center">
                            <div class="text-3xl font-bold text-ayur-green mb-2">100+</div>
                            <div class="text-ayur-brown">Premium Products</div>
                        </div>
                        <div class="text-center">
                            <div class="text-3xl font-bold text-ayur-green mb-2">25+</div>
                            <div class="text-ayur-brown">Years Experience</div>
                        </div>
                    </div>
                    
                    <button class="bg-ayur-green text-white px-8 py-4 rounded-lg hover:bg-opacity-90 transition duration-300 font-medium shadow-lg">
                        Learn More About Us
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- Consultation Section -->
    <section id="consultation" class="py-16 bg-ayur-green text-white">
        <div class="container mx-auto px-4 text-center">
            <h2 class="font-playfair text-4xl font-bold mb-6">Get Personalized Ayurvedic Consultation</h2>
            <p class="text-xl mb-8 max-w-2xl mx-auto opacity-90">
                Discover your unique constitution and receive personalized recommendations from our certified Ayurvedic practitioners.
            </p>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-12">
                <div class="text-center">
                    <div class="w-16 h-16 bg-white bg-opacity-20 rounded-full flex items-center justify-center mx-auto mb-4">
                        <span class="text-2xl">📋</span>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Assessment</h3>
                    <p class="opacity-90">Complete health and lifestyle assessment</p>
                </div>
                <div class="text-center">
                    <div class="w-16 h-16 bg-white bg-opacity-20 rounded-full flex items-center justify-center mx-auto mb-4">
                        <span class="text-2xl">💬</span>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Consultation</h3>
                    <p class="opacity-90">One-on-one session with expert practitioner</p>
                </div>
                <div class="text-center">
                    <div class="w-16 h-16 bg-white bg-opacity-20 rounded-full flex items-center justify-center mx-auto mb-4">
                        <span class="text-2xl">📝</span>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Recommendations</h3>
                    <p class="opacity-90">Personalized wellness plan and products</p>
                </div>
            </div>
            
            <button class="bg-white text-ayur-green px-8 py-4 rounded-lg hover:bg-opacity-90 transition duration-300 font-medium shadow-lg">
                Book Free Consultation
            </button>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="py-16 gradient-bg">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="font-playfair text-4xl font-bold text-ayur-green mb-4">What Our Customers Say</h2>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white p-8 rounded-2xl leaf-shadow">
                    <div class="flex items-center mb-6">
                        <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='60' height='60' viewBox='0 0 60 60'%3E%3Ccircle cx='30' cy='30' r='30' fill='%23d4a574'/%3E%3Ctext x='50%25' y='50%25' dominant-baseline='middle' text-anchor='middle' font-size='20' fill='white'%3ES%3C/text%3E%3C/svg%3E" 
                             alt="Customer" class="w-12 h-12 rounded-full mr-4">
                        <div>
                            <h4 class="font-semibold text-ayur-green">Sriyan Majeti</h4>
                            <div class="text-ayur-gold">⭐⭐⭐⭐⭐</div>
                        </div>
                    </div>
                    <p class="text-ayur-brown italic">"The Brahmi hair oil has transformed my hair completely. It's stronger, shinier, and healthier than ever before. Highly recommended!"</p>
                </div>
                
                <div class="bg-white p-8 rounded-2xl leaf-shadow">
                    <div class="flex items-center mb-6">
                        <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='60' height='60' viewBox='0 0 60 60'%3E%3Ccircle cx='30' cy='30' r='30' fill='%234a7c59'/%3E%3Ctext x='50%25' y='50%25' dominant-baseline='middle' text-anchor='middle' font-size='20' fill='white'%3EA%3C/text%3E%3C/svg%3E" 
                             alt="Customer" class="w-12 h-12 rounded-full mr-4">
                        <div>
                            <h4 class="font-semibold text-ayur-green">Ayesha Khan</h4>
                            <div class="text-ayur-gold">⭐⭐⭐⭐⭐</div>
                        </div>
                    </div>
                    <p class="text-ayur-brown italic">"The immunity tea blend is now part of my daily routine. I feel more energetic and haven't fallen sick since I started using it."</p>
                </div>
                
                <div class="bg-white p-8 rounded-2xl leaf-shadow">
                    <div class="flex items-center mb-6">
                        <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='60' height='60' viewBox='0 0 60 60'%3E%3Ccircle cx='30' cy='30' r='30' fill='%2387a96b'/%3E%3Ctext x='50%25' y='50%25' dominant-baseline='middle' text-anchor='middle' font-size='20' fill='white'%3ER%3C/text%3E%3C/svg%3E" 
                             alt="Customer" class="w-12 h-12 rounded-full mr-4">
                        <div>
                            <h4 class="font-semibold text-ayur-green">Rajesh Sharma</h4>
                            <div class="text-ayur-gold">⭐⭐⭐⭐⭐</div>
                        </div>
                    </div>
                    <p class="text-ayur-brown italic">"Triphala has helped regulate my digestion naturally. The quality is excellent and the consultation service is very helpful."</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Newsletter Section -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4 text-center">
            <h2 class="font-playfair text-3xl font-bold text-ayur-green mb-4">Stay Updated with Wellness Tips</h2>
            <p class="text-xl text-ayur-brown mb-8 max-w-2xl mx-auto">
                Subscribe to our newsletter for exclusive offers, Ayurvedic tips, and seasonal wellness advice.
            </p>
            
            <div class="max-w-md mx-auto">
                <div class="flex gap-4">
                    <input type="email" placeholder="Enter your email address" 
                           class="flex-1 px-4 py-3 border-2 border-ayur-sage rounded-lg focus:outline-none focus:border-ayur-green">
                    <button class="bg-ayur-green text-white px-6 py-3 rounded-lg hover:bg-opacity-90 transition duration-300 font-medium">
                        Subscribe
                    </button>
                </div>
            </div>
        </div>
    </section>

    
@include('includes.footer')
