@include('includes.header')

    <!-- Breadcrumb -->
    <div class="bg-white border-b">
        <div class="w-full px-6 py-3">
            <nav class="text-sm max-w-7xl mx-auto">
                <a href="/" class="text-ayur-green hover:text-ayur-gold">Home</a>
                <span class="mx-2 text-ayur-brown">></span>
                <span class="text-ayur-brown">Terms of Service</span>
            </nav>
        </div>
    </div>

    <!-- Hero Section -->
    <div class="bg-gradient-to-r from-ayur-green to-ayur-sage">
        <div class="w-full px-6 py-16">
            <div class="max-w-7xl mx-auto text-center text-white">
                <h1 class="font-playfair text-5xl font-bold mb-6">Terms of Service</h1>
                <p class="text-xl opacity-90 mb-4 max-w-3xl mx-auto">Please read these terms carefully before using our services. By using our website, you agree to these terms.</p>
                <div class="text-sm opacity-80">
                    Last updated: August 30, 2025
                </div>
            </div>
        </div>
    </div>

    <div class="w-full px-6 py-12 bg-gray-50">
        <div class="max-w-7xl mx-auto">
            
            <!-- Table of Contents Card -->
            <div class="bg-white rounded-2xl shadow-lg p-8 mb-12">
                <h2 class="font-playfair text-3xl font-bold text-ayur-green mb-8 text-center">Table of Contents</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                    <a href="#acceptance" class="p-4 border border-ayur-sage rounded-lg hover:bg-ayur-cream transition duration-300 group">
                        <div class="flex items-center">
                            <span class="bg-ayur-green text-white rounded-full w-8 h-8 flex items-center justify-center text-sm font-bold mr-3 group-hover:bg-ayur-brown transition duration-300">1</span>
                            <span class="text-ayur-brown group-hover:text-ayur-green transition duration-300">Acceptance of Terms</span>
                        </div>
                    </a>
                    <a href="#services-description" class="p-4 border border-ayur-sage rounded-lg hover:bg-ayur-cream transition duration-300 group">
                        <div class="flex items-center">
                            <span class="bg-ayur-green text-white rounded-full w-8 h-8 flex items-center justify-center text-sm font-bold mr-3 group-hover:bg-ayur-brown transition duration-300">2</span>
                            <span class="text-ayur-brown group-hover:text-ayur-green transition duration-300">Services Description</span>
                        </div>
                    </a>
                    <a href="#user-accounts" class="p-4 border border-ayur-sage rounded-lg hover:bg-ayur-cream transition duration-300 group">
                        <div class="flex items-center">
                            <span class="bg-ayur-green text-white rounded-full w-8 h-8 flex items-center justify-center text-sm font-bold mr-3 group-hover:bg-ayur-brown transition duration-300">3</span>
                            <span class="text-ayur-brown group-hover:text-ayur-green transition duration-300">User Accounts</span>
                        </div>
                    </a>
                    <a href="#orders-payments" class="p-4 border border-ayur-sage rounded-lg hover:bg-ayur-cream transition duration-300 group">
                        <div class="flex items-center">
                            <span class="bg-ayur-green text-white rounded-full w-8 h-8 flex items-center justify-center text-sm font-bold mr-3 group-hover:bg-ayur-brown transition duration-300">4</span>
                            <span class="text-ayur-brown group-hover:text-ayur-green transition duration-300">Orders & Payments</span>
                        </div>
                    </a>
                    <a href="#shipping-returns" class="p-4 border border-ayur-sage rounded-lg hover:bg-ayur-cream transition duration-300 group">
                        <div class="flex items-center">
                            <span class="bg-ayur-green text-white rounded-full w-8 h-8 flex items-center justify-center text-sm font-bold mr-3 group-hover:bg-ayur-brown transition duration-300">5</span>
                            <span class="text-ayur-brown group-hover:text-ayur-green transition duration-300">Shipping & Returns</span>
                        </div>
                    </a>
                    <a href="#prohibited-uses" class="p-4 border border-ayur-sage rounded-lg hover:bg-ayur-cream transition duration-300 group">
                        <div class="flex items-center">
                            <span class="bg-ayur-green text-white rounded-full w-8 h-8 flex items-center justify-center text-sm font-bold mr-3 group-hover:bg-ayur-brown transition duration-300">6</span>
                            <span class="text-ayur-brown group-hover:text-ayur-green transition duration-300">Prohibited Uses</span>
                        </div>
                    </a>
                    <a href="#intellectual-property" class="p-4 border border-ayur-sage rounded-lg hover:bg-ayur-cream transition duration-300 group">
                        <div class="flex items-center">
                            <span class="bg-ayur-green text-white rounded-full w-8 h-8 flex items-center justify-center text-sm font-bold mr-3 group-hover:bg-ayur-brown transition duration-300">7</span>
                            <span class="text-ayur-brown group-hover:text-ayur-green transition duration-300">Intellectual Property</span>
                        </div>
                    </a>
                    <a href="#disclaimers" class="p-4 border border-ayur-sage rounded-lg hover:bg-ayur-cream transition duration-300 group">
                        <div class="flex items-center">
                            <span class="bg-ayur-green text-white rounded-full w-8 h-8 flex items-center justify-center text-sm font-bold mr-3 group-hover:bg-ayur-brown transition duration-300">8</span>
                            <span class="text-ayur-brown group-hover:text-ayur-green transition duration-300">Disclaimers</span>
                        </div>
                    </a>
                    <a href="#limitation-liability" class="p-4 border border-ayur-sage rounded-lg hover:bg-ayur-cream transition duration-300 group">
                        <div class="flex items-center">
                            <span class="bg-ayur-green text-white rounded-full w-8 h-8 flex items-center justify-center text-sm font-bold mr-3 group-hover:bg-ayur-brown transition duration-300">9</span>
                            <span class="text-ayur-brown group-hover:text-ayur-green transition duration-300">Limitation of Liability</span>
                        </div>
                    </a>
                    <a href="#termination" class="p-4 border border-ayur-sage rounded-lg hover:bg-ayur-cream transition duration-300 group">
                        <div class="flex items-center">
                            <span class="bg-ayur-green text-white rounded-full w-8 h-8 flex items-center justify-center text-sm font-bold mr-3 group-hover:bg-ayur-brown transition duration-300">10</span>
                            <span class="text-ayur-brown group-hover:text-ayur-green transition duration-300">Termination</span>
                        </div>
                    </a>
                    <a href="#governing-law" class="p-4 border border-ayur-sage rounded-lg hover:bg-ayur-cream transition duration-300 group">
                        <div class="flex items-center">
                            <span class="bg-ayur-green text-white rounded-full w-8 h-8 flex items-center justify-center text-sm font-bold mr-3 group-hover:bg-ayur-brown transition duration-300">11</span>
                            <span class="text-ayur-brown group-hover:text-ayur-green transition duration-300">Governing Law</span>
                        </div>
                    </a>
                    <a href="#changes-terms" class="p-4 border border-ayur-sage rounded-lg hover:bg-ayur-cream transition duration-300 group">
                        <div class="flex items-center">
                            <span class="bg-ayur-green text-white rounded-full w-8 h-8 flex items-center justify-center text-sm font-bold mr-3 group-hover:bg-ayur-brown transition duration-300">12</span>
                            <span class="text-ayur-brown group-hover:text-ayur-green transition duration-300">Changes to Terms</span>
                        </div>
                    </a>
                </div>
            </div>

            <!-- Content Cards Grid -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                
                <!-- Section 1 Card -->
                <div id="acceptance" class="bg-white rounded-2xl shadow-lg p-8 section-anchor">
                    <div class="flex items-center mb-6">
                        <div class="bg-ayur-green text-white rounded-full w-12 h-12 flex items-center justify-center text-lg font-bold mr-4">1</div>
                        <h2 class="font-playfair text-2xl font-bold text-ayur-green">Acceptance of Terms</h2>
                    </div>
                    <div class="bg-ayur-cream p-6 rounded-lg border-l-4 border-ayur-green mb-6">
                        <p class="text-gray-700 leading-relaxed font-medium">By accessing and using this website, you accept and agree to be bound by the terms and provision of this agreement.</p>
                    </div>
                    <p class="text-gray-700 leading-relaxed mb-4">These Terms of Service constitute a legally binding agreement between you and AyurVeda Store. If you do not agree to these terms, please do not use our website or services.</p>
                    <p class="text-gray-700 leading-relaxed">These terms apply to all visitors, users, and customers who access or use our service, including but not limited to users who are browsers, vendors, customers, merchants, and content contributors.</p>
                </div>

                <!-- Section 2 Card -->
                <div id="services-description" class="bg-white rounded-2xl shadow-lg p-8 section-anchor">
                    <div class="flex items-center mb-6">
                        <div class="bg-ayur-green text-white rounded-full w-12 h-12 flex items-center justify-center text-lg font-bold mr-4">2</div>
                        <h2 class="font-playfair text-2xl font-bold text-ayur-green">Services Description</h2>
                    </div>
                    <p class="text-gray-700 leading-relaxed mb-6">AyurVeda Store provides an online platform for purchasing authentic Ayurvedic products including:</p>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-6">
                        <div class="bg-ayur-cream p-4 rounded-lg border border-ayur-sage">
                            <h4 class="font-semibold text-ayur-brown mb-3">Products Available</h4>
                            <ul class="text-sm text-gray-700 space-y-2">
                                <li class="flex items-center"><span class="w-2 h-2 bg-ayur-green rounded-full mr-2"></span>Herbal supplements and tablets</li>
                                <li class="flex items-center"><span class="w-2 h-2 bg-ayur-green rounded-full mr-2"></span>Natural oils and skincare products</li>
                                <li class="flex items-center"><span class="w-2 h-2 bg-ayur-green rounded-full mr-2"></span>Ayurvedic teas and powders</li>
                                <li class="flex items-center"><span class="w-2 h-2 bg-ayur-green rounded-full mr-2"></span>Traditional wellness formulations</li>
                            </ul>
                        </div>
                        <div class="bg-ayur-cream p-4 rounded-lg border border-ayur-sage">
                            <h4 class="font-semibold text-ayur-brown mb-3">Service Features</h4>
                            <ul class="text-sm text-gray-700 space-y-2">
                                <li class="flex items-center"><span class="w-2 h-2 bg-ayur-green rounded-full mr-2"></span>Online ordering and payment</li>
                                <li class="flex items-center"><span class="w-2 h-2 bg-ayur-green rounded-full mr-2"></span>Product information and recommendations</li>
                                <li class="flex items-center"><span class="w-2 h-2 bg-ayur-green rounded-full mr-2"></span>Customer support and consultation</li>
                                <li class="flex items-center"><span class="w-2 h-2 bg-ayur-green rounded-full mr-2"></span>Secure shipping and delivery</li>
                            </ul>
                        </div>
                    </div>

                    <div class="border-l-4 border-yellow-500 pl-6 bg-yellow-50 p-4 rounded-r-lg">
                        <p class="text-yellow-800 text-sm"><strong>Important Notice:</strong> Our products are not intended to diagnose, treat, cure, or prevent any disease. Please consult with a healthcare professional before using any Ayurvedic products.</p>
                    </div>
                </div>

                <!-- Section 3 Card -->
                <div id="user-accounts" class="bg-white rounded-2xl shadow-lg p-8 section-anchor">
                    <div class="flex items-center mb-6">
                        <div class="bg-ayur-green text-white rounded-full w-12 h-12 flex items-center justify-center text-lg font-bold mr-4">3</div>
                        <h2 class="font-playfair text-2xl font-bold text-ayur-green">User Accounts</h2>
                    </div>
                    
                    <div class="space-y-6">
                        <div>
                            <h3 class="font-semibold text-ayur-brown text-lg mb-3">Account Registration</h3>
                            <p class="text-gray-700 leading-relaxed mb-3">To access certain features of our service, you may be required to create an account. When creating an account, you agree to:</p>
                            <ul class="space-y-2 text-gray-700">
                                <li class="flex items-start"><span class="w-2 h-2 bg-ayur-green rounded-full mr-3 mt-2"></span>Provide accurate, current, and complete information</li>
                                <li class="flex items-start"><span class="w-2 h-2 bg-ayur-green rounded-full mr-3 mt-2"></span>Maintain and update your information to keep it accurate</li>
                                <li class="flex items-start"><span class="w-2 h-2 bg-ayur-green rounded-full mr-3 mt-2"></span>Maintain the security of your password</li>
                                <li class="flex items-start"><span class="w-2 h-2 bg-ayur-green rounded-full mr-3 mt-2"></span>Accept responsibility for all activities under your account</li>
                            </ul>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div class="p-4 border border-ayur-sage rounded-lg bg-green-50">
                                <h4 class="font-medium text-ayur-green mb-2">You Must:</h4>
                                <ul class="text-sm text-gray-700 space-y-1">
                                    <li class="flex items-center"><span class="w-1 h-1 bg-ayur-green rounded-full mr-2"></span>Keep login credentials secure</li>
                                    <li class="flex items-center"><span class="w-1 h-1 bg-ayur-green rounded-full mr-2"></span>Notify us of unauthorized access</li>
                                    <li class="flex items-center"><span class="w-1 h-1 bg-ayur-green rounded-full mr-2"></span>Use accurate personal information</li>
                                    <li class="flex items-center"><span class="w-1 h-1 bg-ayur-green rounded-full mr-2"></span>Comply with all applicable laws</li>
                                </ul>
                            </div>
                            <div class="p-4 border border-red-300 rounded-lg bg-red-50">
                                <h4 class="font-medium text-red-800 mb-2">You Must Not:</h4>
                                <ul class="text-sm text-red-700 space-y-1">
                                    <li class="flex items-center"><span class="w-1 h-1 bg-red-500 rounded-full mr-2"></span>Share your account credentials</li>
                                    <li class="flex items-center"><span class="w-1 h-1 bg-red-500 rounded-full mr-2"></span>Create false or misleading accounts</li>
                                    <li class="flex items-center"><span class="w-1 h-1 bg-red-500 rounded-full mr-2"></span>Use accounts for illegal activities</li>
                                    <li class="flex items-center"><span class="w-1 h-1 bg-red-500 rounded-full mr-2"></span>Circumvent security measures</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Section 4 Card -->
                <div id="orders-payments" class="bg-white rounded-2xl shadow-lg p-8 section-anchor">
                    <div class="flex items-center mb-6">
                        <div class="bg-ayur-green text-white rounded-full w-12 h-12 flex items-center justify-center text-lg font-bold mr-4">4</div>
                        <h2 class="font-playfair text-2xl font-bold text-ayur-green">Orders & Payments</h2>
                    </div>
                    
                    <div class="space-y-6">
                        <div>
                            <h3 class="font-semibold text-ayur-brown text-lg mb-3">Order Process</h3>
                            <div class="space-y-4">
                                <div class="flex items-start space-x-4 p-3 bg-ayur-cream rounded-lg">
                                    <div class="bg-ayur-green text-white rounded-full w-8 h-8 flex items-center justify-center text-sm font-bold flex-shrink-0">1</div>
                                    <div>
                                        <h4 class="font-medium text-ayur-brown">Order Submission</h4>
                                        <p class="text-sm text-gray-700">You submit an order through our website with product selections and delivery information.</p>
                                    </div>
                                </div>
                                <div class="flex items-start space-x-4 p-3 bg-ayur-cream rounded-lg">
                                    <div class="bg-ayur-green text-white rounded-full w-8 h-8 flex items-center justify-center text-sm font-bold flex-shrink-0">2</div>
                                    <div>
                                        <h4 class="font-medium text-ayur-brown">Order Confirmation</h4>
                                        <p class="text-sm text-gray-700">We send you an email confirmation with order details and estimated delivery time.</p>
                                    </div>
                                </div>
                                <div class="flex items-start space-x-4 p-3 bg-ayur-cream rounded-lg">
                                    <div class="bg-ayur-green text-white rounded-full w-8 h-8 flex items-center justify-center text-sm font-bold flex-shrink-0">3</div>
                                    <div>
                                        <h4 class="font-medium text-ayur-brown">Processing & Fulfillment</h4>
                                        <p class="text-sm text-gray-700">We process your order, prepare items for shipment, and provide tracking information.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="border border-ayur-sage rounded-lg p-4 bg-ayur-cream">
                            <h4 class="font-semibold text-ayur-brown mb-3">Payment Terms</h4>
                            <ul class="text-gray-700 space-y-2 text-sm">
                                <li><strong>Payment Methods:</strong> We accept major credit cards, debit cards, and digital payment services.</li>
                                <li><strong>Payment Processing:</strong> All payments are processed securely through trusted third-party providers.</li>
                                <li><strong>Pricing:</strong> All prices are listed in your local currency and include applicable taxes where required.</li>
                                <li><strong>Payment Authorization:</strong> By providing payment information, you authorize us to charge the specified amount.</li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Full Width Cards for Longer Sections -->
            <div class="space-y-8 mt-8">
                
                <!-- Section 5 Card -->
                <div id="shipping-returns" class="bg-white rounded-2xl shadow-lg p-8 section-anchor">
                    <div class="flex items-center mb-6">
                        <div class="bg-ayur-green text-white rounded-full w-12 h-12 flex items-center justify-center text-lg font-bold mr-4">5</div>
                        <h2 class="font-playfair text-2xl font-bold text-ayur-green">Shipping & Returns</h2>
                    </div>
                    
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                        <div>
                            <h3 class="font-semibold text-ayur-brown text-lg mb-4">Shipping Policy</h3>
                            <div class="space-y-4">
                                <div class="p-4 bg-ayur-cream rounded-lg border border-ayur-sage">
                                    <h4 class="font-medium text-ayur-brown mb-2">Delivery Times</h4>
                                    <p class="text-sm text-gray-700">Standard shipping: 3-7 business days<br>Express shipping: 1-3 business days</p>
                                </div>
                                <div class="p-4 bg-ayur-cream rounded-lg border border-ayur-sage">
                                    <h4 class="font-medium text-ayur-brown mb-2">Shipping Costs</h4>
                                    <p class="text-sm text-gray-700">Free shipping on orders over $50<br>Standard rates apply to smaller orders</p>
                                </div>
                                <div class="p-4 bg-ayur-cream rounded-lg border border-ayur-sage">
                                    <h4 class="font-medium text-ayur-brown mb-2">International Shipping</h4>
                                    <p class="text-sm text-gray-700">Available to select countries<br>Additional customs fees may apply</p>
                                </div>
                            </div>
                        </div>
                        
                        <div>
                            <h3 class="font-semibold text-ayur-brown text-lg mb-4">Return Policy</h3>
                            <div class="space-y-4">
                                <div class="p-4 border border-ayur-sage rounded-lg bg-green-50">
                                    <h4 class="font-medium text-ayur-green mb-2">Return Window</h4>
                                    <p class="text-sm text-gray-700">30 days from delivery date for unopened items in original packaging</p>
                                </div>
                                <div class="p-4 border border-ayur-sage rounded-lg bg-green-50">
                                    <h4 class="font-medium text-ayur-green mb-2">Return Process</h4>
                                    <p class="text-sm text-gray-700">Contact customer service to initiate return and receive return shipping label</p>
                                </div>
                                <div class="p-4 border border-red-300 rounded-lg bg-red-50">
                                    <h4 class="font-medium text-red-800 mb-2">Non-Returnable Items</h4>
                                    <p class="text-sm text-red-700">Opened supplements, personalized items, and perishable products</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Section 6 Card -->
                <div id="prohibited-uses" class="bg-white rounded-2xl shadow-lg p-8 section-anchor">
                    <div class="flex items-center mb-6">
                        <div class="bg-ayur-green text-white rounded-full w-12 h-12 flex items-center justify-center text-lg font-bold mr-4">6</div>
                        <h2 class="font-playfair text-2xl font-bold text-ayur-green">Prohibited Uses</h2>
                    </div>
                    <p class="text-gray-700 leading-relaxed mb-6">You may not use our service:</p>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div class="space-y-3">
                            <div class="flex items-start space-x-3 p-3 bg-red-50 rounded-lg border border-red-200">
                                <svg class="w-5 h-5 text-red-500 mt-1 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd"></path>
                                </svg>
                                <p class="text-sm text-gray-700">To harass, abuse, insult, harm, defame, slander, disparage, intimidate, or discriminate</p>
                            </div>
                        </div>
                        <div class="space-y-3">
                            <div class="flex items-start space-x-3 p-3 bg-red-50 rounded-lg border border-red-200">
                                <svg class="w-5 h-5 text-red-500 mt-1 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd"></path>
                                </svg>
                                <p class="text-sm text-gray-700">To submit false or misleading information</p>
                            </div>
                            <div class="flex items-start space-x-3 p-3 bg-red-50 rounded-lg border border-red-200">
                                <svg class="w-5 h-5 text-red-500 mt-1 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd"></path>
                                </svg>
                                <p class="text-sm text-gray-700">To upload or transmit viruses or any other type of malicious code</p>
                            </div>
                            <div class="flex items-start space-x-3 p-3 bg-red-50 rounded-lg border border-red-200">
                                <svg class="w-5 h-5 text-red-500 mt-1 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd"></path>
                                </svg>
                                <p class="text-sm text-gray-700">To collect or track personal information of others</p>
                            </div>
                            <div class="flex items-start space-x-3 p-3 bg-red-50 rounded-lg border border-red-200">
                                <svg class="w-5 h-5 text-red-500 mt-1 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd"></path>
                                </svg>
                                <p class="text-sm text-gray-700">To spam, phish, farm, pretexts, spider, crawl, or scrape</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Section 7 Card -->
                <div id="intellectual-property" class="bg-white rounded-2xl shadow-lg p-8 section-anchor">
                    <div class="flex items-center mb-6">
                        <div class="bg-ayur-green text-white rounded-full w-12 h-12 flex items-center justify-center text-lg font-bold mr-4">7</div>
                        <h2 class="font-playfair text-2xl font-bold text-ayur-green">Intellectual Property Rights</h2>
                    </div>
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                        <div class="space-y-6">
                            <div>
                                <h3 class="font-semibold text-ayur-brown text-lg mb-3">Our Content</h3>
                                <p class="text-gray-700 leading-relaxed">The service and its original content, features, and functionality are and will remain the exclusive property of AyurVeda Store and its licensors. The service is protected by copyright, trademark, and other laws.</p>
                            </div>
                            
                            <div>
                                <h3 class="font-semibold text-ayur-brown text-lg mb-3">User Content</h3>
                                <p class="text-gray-700 leading-relaxed">Our service may allow you to post, link, store, share and otherwise make available certain information, text, graphics, videos, or other material. You retain ownership of your content, but grant us a license to use it in connection with our service.</p>
                            </div>
                        </div>

                        <div class="bg-ayur-cream p-6 rounded-lg border border-ayur-sage">
                            <h4 class="font-semibold text-ayur-brown mb-3">What You Can Do</h4>
                            <ul class="text-gray-700 space-y-2">
                                <li class="flex items-start"><span class="w-2 h-2 bg-ayur-green rounded-full mr-3 mt-2"></span>Use our service for personal, non-commercial purposes</li>
                                <li class="flex items-start"><span class="w-2 h-2 bg-ayur-green rounded-full mr-3 mt-2"></span>Share product information with proper attribution</li>
                                <li class="flex items-start"><span class="w-2 h-2 bg-ayur-green rounded-full mr-3 mt-2"></span>Create user accounts and participate in community features</li>
                            </ul>
                            <h4 class="font-semibold text-ayur-brown mb-3 mt-4">What You Cannot Do</h4>
                            <ul class="text-gray-700 space-y-2">
                                <li class="flex items-start"><span class="w-2 h-2 bg-red-500 rounded-full mr-3 mt-2"></span>Copy, reproduce, or distribute our content without permission</li>
                                <li class="flex items-start"><span class="w-2 h-2 bg-red-500 rounded-full mr-3 mt-2"></span>Use our trademarks or branding in unauthorized ways</li>
                                <li class="flex items-start"><span class="w-2 h-2 bg-red-500 rounded-full mr-3 mt-2"></span>Reverse engineer or attempt to extract our source code</li>
                                <li class="flex items-start"><span class="w-2 h-2 bg-red-500 rounded-full mr-3 mt-2"></span>Create derivative works based on our content</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Section 8 Card -->
                <div id="disclaimers" class="bg-white rounded-2xl shadow-lg p-8 section-anchor">
                    <div class="flex items-center mb-6">
                        <div class="bg-ayur-green text-white rounded-full w-12 h-12 flex items-center justify-center text-lg font-bold mr-4">8</div>
                        <h2 class="font-playfair text-2xl font-bold text-ayur-green">Disclaimers</h2>
                    </div>
                    
                    <div class="space-y-6">
                        <div class="bg-yellow-50 border border-yellow-300 rounded-lg p-6">
                            <h3 class="font-semibold text-yellow-800 text-lg mb-3">Health and Medical Disclaimers</h3>
                            <ul class="text-yellow-800 space-y-2 text-sm">
                                <li class="flex items-start"><span class="w-2 h-2 bg-yellow-600 rounded-full mr-3 mt-2"></span>Our products are not intended to diagnose, treat, cure, or prevent any disease</li>
                                <li class="flex items-start"><span class="w-2 h-2 bg-yellow-600 rounded-full mr-3 mt-2"></span>Statements have not been evaluated by the FDA or other regulatory agencies</li>
                                <li class="flex items-start"><span class="w-2 h-2 bg-yellow-600 rounded-full mr-3 mt-2"></span>Individual results may vary and are not guaranteed</li>
                                <li class="flex items-start"><span class="w-2 h-2 bg-yellow-600 rounded-full mr-3 mt-2"></span>Consult your healthcare provider before starting any new supplement regimen</li>
                                <li class="flex items-start"><span class="w-2 h-2 bg-yellow-600 rounded-full mr-3 mt-2"></span>Discontinue use and consult a physician if adverse reactions occur</li>
                            </ul>
                        </div>

                        <div>
                            <h3 class="font-semibold text-ayur-brown text-lg mb-3">Service Disclaimers</h3>
                            <p class="text-gray-700 leading-relaxed mb-4">The information on this website is provided on an "as is" basis. To the fullest extent permitted by law, we exclude:</p>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div class="p-4 border border-gray-300 rounded-lg bg-gray-50">
                                    <h4 class="font-medium text-ayur-brown mb-2">Technical Disclaimers</h4>
                                    <ul class="text-sm text-gray-700 space-y-1">
                                        <li class="flex items-center"><span class="w-1 h-1 bg-gray-500 rounded-full mr-2"></span>All warranties, express or implied</li>
                                        <li class="flex items-center"><span class="w-1 h-1 bg-gray-500 rounded-full mr-2"></span>Liability for website downtime</li>
                                        <li class="flex items-center"><span class="w-1 h-1 bg-gray-500 rounded-full mr-2"></span>Accuracy of technical information</li>
                                        <li class="flex items-center"><span class="w-1 h-1 bg-gray-500 rounded-full mr-2"></span>Third-party service interruptions</li>
                                    </ul>
                                </div>
                                <div class="p-4 border border-gray-300 rounded-lg bg-gray-50">
                                    <h4 class="font-medium text-ayur-brown mb-2">Content Disclaimers</h4>
                                    <ul class="text-sm text-gray-700 space-y-1">
                                        <li class="flex items-center"><span class="w-1 h-1 bg-gray-500 rounded-full mr-2"></span>Completeness of information</li>
                                        <li class="flex items-center"><span class="w-1 h-1 bg-gray-500 rounded-full mr-2"></span>Accuracy of product descriptions</li>
                                        <li class="flex items-center"><span class="w-1 h-1 bg-gray-500 rounded-full mr-2"></span>Currency of pricing information</li>
                                        <li class="flex items-center"><span class="w-1 h-1 bg-gray-500 rounded-full mr-2"></span>User-generated content accuracy</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Section 9 Card -->
                <div id="limitation-liability" class="bg-white rounded-2xl shadow-lg p-8 section-anchor">
                    <div class="flex items-center mb-6">
                        <div class="bg-ayur-green text-white rounded-full w-12 h-12 flex items-center justify-center text-lg font-bold mr-4">9</div>
                        <h2 class="font-playfair text-2xl font-bold text-ayur-green">Limitation of Liability</h2>
                    </div>
                    
                    <div class="bg-red-50 border border-red-300 rounded-lg p-6 mb-6">
                        <h3 class="font-semibold text-red-800 text-lg mb-3">Important Legal Notice</h3>
                        <p class="text-red-800 text-sm leading-relaxed">In no case shall AyurVeda Store, our directors, officers, employees, affiliates, agents, contractors, interns, suppliers, service providers, or licensors be liable for any injury, loss, claim, or any direct, indirect, incidental, punitive, special, or consequential damages of any kind.</p>
                    </div>

                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                        <div>
                            <h4 class="font-semibold text-ayur-brown mb-3">Liability Limitations Include:</h4>
                            <ul class="text-gray-700 space-y-2">
                                <li class="flex items-start"><span class="w-2 h-2 bg-red-500 rounded-full mr-3 mt-2"></span>Lost profits, revenue, or data</li>
                                <li class="flex items-start"><span class="w-2 h-2 bg-red-500 rounded-full mr-3 mt-2"></span>Personal injury or property damage</li>
                                <li class="flex items-start"><span class="w-2 h-2 bg-red-500 rounded-full mr-3 mt-2"></span>Business interruption or loss of use</li>
                                <li class="flex items-start"><span class="w-2 h-2 bg-red-500 rounded-full mr-3 mt-2"></span>Cost of substitute goods or services</li>
                                <li class="flex items-start"><span class="w-2 h-2 bg-red-500 rounded-full mr-3 mt-2"></span>Any damages arising from use of our products or services</li>
                            </ul>
                        </div>

                        <div class="p-6 bg-ayur-cream rounded-lg border border-ayur-sage">
                            <h4 class="font-semibold text-ayur-brown mb-3">Maximum Liability</h4>
                            <p class="text-ayur-brown text-sm">In any event, our total liability to you for all damages shall not exceed the amount paid by you for the specific product or service that gave rise to the claim.</p>
                        </div>
                    </div>
                </div>

                <!-- Section 10 Card -->
                <div id="termination" class="bg-white rounded-2xl shadow-lg p-8 section-anchor">
                    <div class="flex items-center mb-6">
                        <div class="bg-ayur-green text-white rounded-full w-12 h-12 flex items-center justify-center text-lg font-bold mr-4">10</div>
                        <h2 class="font-playfair text-2xl font-bold text-ayur-green">Termination</h2>
                    </div>
                    
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                        <div>
                            <h3 class="font-semibold text-ayur-brown text-lg mb-3">Termination by You</h3>
                            <p class="text-gray-700 leading-relaxed mb-3">You may terminate your account at any time by:</p>
                            <ul class="text-gray-700 space-y-2">
                                <li class="flex items-start"><span class="w-2 h-2 bg-ayur-green rounded-full mr-3 mt-2"></span>Contacting our customer service team</li>
                                <li class="flex items-start"><span class="w-2 h-2 bg-ayur-green rounded-full mr-3 mt-2"></span>Using the account deletion feature in your profile settings</li>
                                <li class="flex items-start"><span class="w-2 h-2 bg-ayur-green rounded-full mr-3 mt-2"></span>Sending a written request to our support email</li>
                            </ul>
                        </div>

                        <div>
                            <h3 class="font-semibold text-ayur-brown text-lg mb-3">Termination by Us</h3>
                            <p class="text-gray-700 leading-relaxed mb-3">We may terminate or suspend your account immediately if you:</p>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div class="p-4 border border-red-300 rounded-lg bg-red-50">
                                    <h4 class="font-medium text-red-800 mb-2">Violations</h4>
                                    <ul class="text-sm text-red-700 space-y-1">
                                        <li class="flex items-center"><span class="w-1 h-1 bg-red-500 rounded-full mr-2"></span>Breach these terms of service</li>
                                        <li class="flex items-center"><span class="w-1 h-1 bg-red-500 rounded-full mr-2"></span>Engage in fraudulent activity</li>
                                        <li class="flex items-center"><span class="w-1 h-1 bg-red-500 rounded-full mr-2"></span>Violate intellectual property rights</li>
                                        <li class="flex items-center"><span class="w-1 h-1 bg-red-500 rounded-full mr-2"></span>Misuse our service or platform</li>
                                    </ul>
                                </div>
                                <div class="p-4 border border-red-300 rounded-lg bg-red-50">
                                    <h4 class="font-medium text-red-800 mb-2">Legal Issues</h4>
                                    <ul class="text-sm text-red-700 space-y-1">
                                        <li class="flex items-center"><span class="w-1 h-1 bg-red-500 rounded-full mr-2"></span>Engage in illegal activities</li>
                                        <li class="flex items-center"><span class="w-1 h-1 bg-red-500 rounded-full mr-2"></span>Pose security risks to other users</li>
                                        <li class="flex items-center"><span class="w-1 h-1 bg-red-500 rounded-full mr-2"></span>Fail to pay for orders repeatedly</li>
                                        <li class="flex items-center"><span class="w-1 h-1 bg-red-500 rounded-full mr-2"></span>Create multiple accounts to abuse policies</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mt-6 bg-ayur-cream p-6 rounded-lg border border-ayur-sage">
                        <h4 class="font-semibold text-ayur-brown mb-3">Effect of Termination</h4>
                        <p class="text-gray-700 text-sm leading-relaxed">Upon termination, your right to use the service will cease immediately. We may retain certain information as required by law or for legitimate business purposes. Provisions that by their nature should survive termination will survive, including intellectual property rights, warranty disclaimers, and limitation of liability.</p>
                    </div>
                </div>

                <!-- Section 11 Card -->
                <div id="governing-law" class="bg-white rounded-2xl shadow-lg p-8 section-anchor">
                    <div class="flex items-center mb-6">
                        <div class="bg-ayur-green text-white rounded-full w-12 h-12 flex items-center justify-center text-lg font-bold mr-4">11</div>
                        <h2 class="font-playfair text-2xl font-bold text-ayur-green">Governing Law</h2>
                    </div>
                    
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                        <div class="space-y-6">
                            <div class="p-6 bg-ayur-cream rounded-lg border border-ayur-sage">
                                <h3 class="font-semibold text-ayur-brown text-lg mb-3">Jurisdiction</h3>
                                <p class="text-gray-700 leading-relaxed">These Terms shall be interpreted and governed by the laws of [Your State/Country], without regard to its conflict of law provisions. Our failure to enforce any right or provision will not be considered a waiver of those rights.</p>
                            </div>
                        </div>

                        <div>
                            <h3 class="font-semibold text-ayur-brown text-lg mb-3">Dispute Resolution</h3>
                            <div class="space-y-4">
                                <div class="flex items-start space-x-4 p-3 bg-ayur-cream rounded-lg">
                                    <div class="bg-ayur-green text-white rounded-full w-8 h-8 flex items-center justify-center text-sm font-bold flex-shrink-0">1</div>
                                    <div>
                                        <h4 class="font-medium text-ayur-brown">Direct Communication</h4>
                                        <p class="text-sm text-gray-700">We encourage resolving disputes through direct communication with our customer service team.</p>
                                    </div>
                                </div>
                                <div class="flex items-start space-x-4 p-3 bg-ayur-cream rounded-lg">
                                    <div class="bg-ayur-green text-white rounded-full w-8 h-8 flex items-center justify-center text-sm font-bold flex-shrink-0">2</div>
                                    <div>
                                        <h4 class="font-medium text-ayur-brown">Mediation</h4>
                                        <p class="text-sm text-gray-700">If direct resolution fails, we prefer mediation through a neutral third party.</p>
                                    </div>
                                </div>
                                <div class="flex items-start space-x-4 p-3 bg-ayur-cream rounded-lg">
                                    <div class="bg-ayur-green text-white rounded-full w-8 h-8 flex items-center justify-center text-sm font-bold flex-shrink-0">3</div>
                                    <div>
                                        <h4 class="font-medium text-ayur-brown">Legal Action</h4>
                                        <p class="text-sm text-gray-700">Any legal action must be brought in the courts of [Your Jurisdiction].</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Section 12 Card -->
                <div id="changes-terms" class="bg-white rounded-2xl shadow-lg p-8 section-anchor">
                    <div class="flex items-center mb-6">
                        <div class="bg-ayur-green text-white rounded-full w-12 h-12 flex items-center justify-center text-lg font-bold mr-4">12</div>
                        <h2 class="font-playfair text-2xl font-bold text-ayur-green">Changes to Terms</h2>
                    </div>
                    
                    <div class="space-y-6">
                        <div>
                            <h3 class="font-semibold text-ayur-brown text-lg mb-3">Our Right to Modify</h3>
                            <p class="text-gray-700 leading-relaxed mb-4">We reserve the right to modify or replace these Terms at any time. If a revision is material, we will try to provide at least 30 days advance notice prior to any new terms taking effect.</p>
                        </div>

                        <div>
                            <h3 class="font-semibold text-ayur-brown text-lg mb-3">Notification Process</h3>
                            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                                <div class="text-center p-6 bg-ayur-cream rounded-lg border border-ayur-sage">
                                    <div class="w-16 h-16 bg-ayur-green rounded-full flex items-center justify-center mx-auto mb-4">
                                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                        </svg>
                                    </div>
                                    <h4 class="font-semibold text-ayur-brown mb-2">Email Notice</h4>
                                    <p class="text-sm text-gray-700">Registered users receive email notifications of significant changes.</p>
                                </div>
                                <div class="text-center p-6 bg-ayur-cream rounded-lg border border-ayur-sage">
                                    <div class="w-16 h-16 bg-ayur-green rounded-full flex items-center justify-center mx-auto mb-4">
                                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-5 5v-5zM4.828 4.828l14.142 14.142M9 21H5a2 2 0 01-2-2V5a2 2 0 012-2h4m0 18V9"></path>
                                        </svg>
                                    </div>
                                    <h4 class="font-semibold text-ayur-brown mb-2">Website Banner</h4>
                                    <p class="text-sm text-gray-700">Prominent notices appear on our website for major changes.</p>
                                </div>
                                <div class="text-center p-6 bg-ayur-cream rounded-lg border border-ayur-sage">
                                    <div class="w-16 h-16 bg-ayur-green rounded-full flex items-center justify-center mx-auto mb-4">
                                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                    </div>
                                    <h4 class="font-semibold text-ayur-brown mb-2">Update Date</h4>
                                    <p class="text-sm text-gray-700">The "Last updated" date reflects when changes were made.</p>
                                </div>
                            </div>
                        </div>

                        <div class="p-4 bg-blue-50 border border-blue-300 rounded-lg">
                            <p class="text-blue-800 text-sm"><strong>Your Acceptance:</strong> By continuing to access or use our service after revisions become effective, you agree to be bound by the revised terms. If you do not agree to the new terms, please stop using the service.</p>
                        </div>
                    </div>
                
                    <div class="flex items-start space-x-3 p-3 bg-red-50 rounded-lg border border-red-200">
                                <svg class="w-5 h-5 text-red-500 mt-1 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd"></path>
                                </svg>
                                <p class="text-sm text-gray-700">To violate any international, federal, provincial, or state regulations or laws</p>
                            </div>
                            <div class="flex items-start space-x-3 p-3 bg-red-50 rounded-lg border border-red-200">
                                <svg class="w-5 h-5 text-red-500 mt-1 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd"></path>
                                </svg>
                                <p class="text-sm text-gray-700">To infringe upon or violate our intellectual property rights or others'</p>
                            </div>
                            <div class="flex items-start space-x-3 p-3 bg-red-50 rounded-lg border border-red-200">
                                <svg class="w-5 h-5 text-red-500 mt-1 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd"></path>
                                </svg>
                                <p class="text-sm text-gray-700">For any unlawful purpose or to solicit others to perform unlawful acts</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


  @include('includes.footer')