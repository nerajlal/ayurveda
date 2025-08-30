@include('includes.header')


    <!-- Hero Section -->
    <section class="gradient-bg py-24 mt-16 hero-pattern">
        <div class="container mx-auto px-4 text-center">
            <h1 class="font-playfair text-5xl lg:text-6xl font-bold text-ayur-green mb-6 leading-tight">
                Get in Touch
            </h1>
            <p class="text-xl text-ayur-brown mb-8 max-w-3xl mx-auto leading-relaxed">
                Have questions about Ayurveda or need personalized wellness guidance? Our expert team is here to help you on your natural healing journey.
            </p>
            <div class="flex justify-center space-x-8 text-center">
                <div class="bg-white bg-opacity-70 px-6 py-4 rounded-xl">
                    <div class="text-2xl mb-2">📞</div>
                    <div class="text-ayur-brown text-sm">Call us anytime</div>
                </div>
                <div class="bg-white bg-opacity-70 px-6 py-4 rounded-xl">
                    <div class="text-2xl mb-2">💬</div>
                    <div class="text-ayur-brown text-sm">Live chat support</div>
                </div>
                <div class="bg-white bg-opacity-70 px-6 py-4 rounded-xl">
                    <div class="text-2xl mb-2">📧</div>
                    <div class="text-ayur-brown text-sm">Email response</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Form & Info Section -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                <!-- Contact Form -->
                <div class="bg-ayur-cream p-8 rounded-2xl leaf-shadow">
                    <h2 class="font-playfair text-3xl font-bold text-ayur-green mb-6">Send us a Message</h2>
                    <form class="contact-form space-y-6">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <label class="block text-ayur-brown font-medium mb-2">First Name *</label>
                                <input type="text" required class="w-full px-4 py-3 border-2 border-ayur-sage border-opacity-30 rounded-lg transition duration-300" placeholder="Your first name">
                            </div>
                            <div>
                                <label class="block text-ayur-brown font-medium mb-2">Last Name *</label>
                                <input type="text" required class="w-full px-4 py-3 border-2 border-ayur-sage border-opacity-30 rounded-lg transition duration-300" placeholder="Your last name">
                            </div>
                        </div>
                        
                        <div>
                            <label class="block text-ayur-brown font-medium mb-2">Email Address *</label>
                            <input type="email" required class="w-full px-4 py-3 border-2 border-ayur-sage border-opacity-30 rounded-lg transition duration-300" placeholder="your.email@example.com">
                        </div>
                        
                        <div>
                            <label class="block text-ayur-brown font-medium mb-2">Phone Number</label>
                            <input type="tel" class="w-full px-4 py-3 border-2 border-ayur-sage border-opacity-30 rounded-lg transition duration-300" placeholder="+91 9876543210">
                        </div>
                        
                        <div>
                            <label class="block text-ayur-brown font-medium mb-2">Subject *</label>
                            <select required class="w-full px-4 py-3 border-2 border-ayur-sage border-opacity-30 rounded-lg transition duration-300">
                                <option value="">Select a topic</option>
                                <option value="consultation">Book Consultation</option>
                                <option value="product">Product Inquiry</option>
                                <option value="order">Order Support</option>
                                <option value="general">General Question</option>
                                <option value="feedback">Feedback</option>
                            </select>
                        </div>
                        
                        <div>
                            <label class="block text-ayur-brown font-medium mb-2">Message *</label>
                            <textarea required rows="5" class="w-full px-4 py-3 border-2 border-ayur-sage border-opacity-30 rounded-lg transition duration-300 resize-none" placeholder="Tell us how we can help you..."></textarea>
                        </div>
                        
                        <button type="submit" class="w-full bg-ayur-green text-white py-4 rounded-lg hover:bg-opacity-90 transition duration-300 font-medium shadow-lg">
                            Send Message
                        </button>
                        
                        <p class="text-ayur-brown text-sm text-center">
                            We typically respond within 24 hours during business days.
                        </p>
                    </form>
                </div>

                <!-- Contact Information -->
                <div class="space-y-8">
                    <div>
                        <h2 class="font-playfair text-3xl font-bold text-ayur-green mb-6">Contact Information</h2>
                        <p class="text-lg text-ayur-brown mb-8">
                            Reach out to us through any of the following channels. Our wellness experts are ready to assist you with personalized guidance and support.
                        </p>
                    </div>

                    <!-- Contact Cards -->
                    <div class="space-y-6">
                        <div class="bg-white p-6 rounded-xl leaf-shadow hover-lift">
                            <div class="flex items-start space-x-4">
                                <div class="w-12 h-12 bg-ayur-green rounded-full flex items-center justify-center flex-shrink-0">
                                    <span class="text-white text-xl">📍</span>
                                </div>
                                <div>
                                    <h3 class="font-playfair text-xl font-semibold text-ayur-green mb-2">Visit Our Store</h3>
                                    <p class="text-ayur-brown">
                                        123 Wellness Street<br>
                                        Ayurvedic Quarter, Kollam<br>
                                        Kerala 691001, India
                                    </p>
                                    <p class="text-ayur-sage text-sm mt-2">Open: Mon-Sat 9:00 AM - 7:00 PM</p>
                                </div>
                            </div>
                        </div>

                        <div class="bg-white p-6 rounded-xl leaf-shadow hover-lift">
                            <div class="flex items-start space-x-4">
                                <div class="w-12 h-12 bg-ayur-sage rounded-full flex items-center justify-center flex-shrink-0">
                                    <span class="text-white text-xl">📞</span>
                                </div>
                                <div>
                                    <h3 class="font-playfair text-xl font-semibold text-ayur-green mb-2">Call Us</h3>
                                    <p class="text-ayur-brown">
                                        <strong>Main:</strong> +91 9876543210<br>
                                        <strong>Consultation:</strong> +91 9876543211<br>
                                        <strong>Orders:</strong> +91 9876543212
                                    </p>
                                    <p class="text-ayur-sage text-sm mt-2">Available: 9:00 AM - 8:00 PM (IST)</p>
                                </div>
                            </div>
                        </div>

                        <div class="bg-white p-6 rounded-xl leaf-shadow hover-lift">
                            <div class="flex items-start space-x-4">
                                <div class="w-12 h-12 bg-ayur-gold rounded-full flex items-center justify-center flex-shrink-0">
                                    <span class="text-white text-xl">📧</span>
                                </div>
                                <div>
                                    <h3 class="font-playfair text-xl font-semibold text-ayur-green mb-2">Email Us</h3>
                                    <p class="text-ayur-brown">
                                        <strong>General:</strong> info@ayurwellness.com<br>
                                        <strong>Consultation:</strong> consult@ayurwellness.com<br>
                                        <strong>Support:</strong> support@ayurwellness.com
                                    </p>
                                    <p class="text-ayur-sage text-sm mt-2">Response within 24 hours</p>
                                </div>
                            </div>
                        </div>

                        <div class="bg-white p-6 rounded-xl leaf-shadow hover-lift">
                            <div class="flex items-start space-x-4">
                                <div class="w-12 h-12 bg-ayur-brown rounded-full flex items-center justify-center flex-shrink-0">
                                    <span class="text-white text-xl">💬</span>
                                </div>
                                <div>
                                    <h3 class="font-playfair text-xl font-semibold text-ayur-green mb-2">Live Chat</h3>
                                    <p class="text-ayur-brown">
                                        Get instant help with our live chat support. Click the chat icon at the bottom right of your screen.
                                    </p>
                                    <p class="text-ayur-sage text-sm mt-2">Available: Mon-Sat 9:00 AM - 6:00 PM</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Map Section -->
    <section class="py-16 gradient-bg">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="font-playfair text-4xl font-bold text-ayur-green mb-4">Find Our Store</h2>
                <p class="text-xl text-ayur-brown max-w-2xl mx-auto">Visit our wellness center for personalized consultations and to experience our products firsthand.</p>
            </div>
            
            <div class="bg-white rounded-2xl leaf-shadow overflow-hidden">
                <div class="grid grid-cols-1 lg:grid-cols-3">
                    <div class="lg:col-span-2 map-placeholder h-96 flex items-center justify-center">
                        <div class="text-center p-8">
                            <div class="text-6xl text-ayur-green mb-4">🗺️</div>
                            <h3 class="font-playfair text-2xl font-semibold text-ayur-green mb-2">Interactive Map</h3>
                            <p class="text-ayur-brown">
                                123 Wellness Street, Ayurvedic Quarter<br>
                                Kollam, Kerala 691001, India
                            </p>
                        </div>
                    </div>
                    <div class="p-8 bg-ayur-cream">
                        <h3 class="font-playfair text-2xl font-semibold text-ayur-green mb-6">Store Information</h3>
                        <div class="space-y-4">
                            <div>
                                <h4 class="font-medium text-ayur-green mb-2">Store Hours</h4>
                                <p class="text-ayur-brown text-sm">
                                    Monday - Saturday: 9:00 AM - 7:00 PM<br>
                                    Sunday: 10:00 AM - 5:00 PM
                                </p>
                            </div>
                            <div>
                                <h4 class="font-medium text-ayur-green mb-2">Services Available</h4>
                                <ul class="text-ayur-brown text-sm space-y-1">
                                    <li>• Ayurvedic Consultations</li>
                                    <li>• Product Testing</li>
                                    <li>• Wellness Workshops</li>
                                    <li>• Health Assessments</li>
                                </ul>
                            </div>
                            <div>
                                <h4 class="font-medium text-ayur-green mb-2">Parking</h4>
                                <p class="text-ayur-brown text-sm">Free parking available in front of the store</p>
                            </div>
                        </div>
                        
                        <button class="w-full mt-6 bg-ayur-green text-white py-3 rounded-lg hover:bg-opacity-90 transition duration-300 font-medium">
                            Get Directions
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="font-playfair text-4xl font-bold text-ayur-green mb-4">Frequently Asked Questions</h2>
                <p class="text-xl text-ayur-brown max-w-2xl mx-auto">Quick answers to common questions about our products and services.</p>
            </div>
            
            <div class="max-w-4xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="bg-ayur-cream p-6 rounded-xl hover-lift">
                    <h3 class="font-playfair text-xl font-semibold text-ayur-green mb-3">How do I book a consultation?</h3>
                    <p class="text-ayur-brown text-sm">You can book through our website, call us directly, or visit our store. Online bookings are available 24/7.</p>
                </div>
                
                <div class="bg-ayur-cream p-6 rounded-xl hover-lift">
                    <h3 class="font-playfair text-xl font-semibold text-ayur-green mb-3">Are your products organic?</h3>
                    <p class="text-ayur-brown text-sm">Yes, all our products are made from certified organic ingredients sourced from trusted farms.</p>
                </div>
                
                <div class="bg-ayur-cream p-6 rounded-xl hover-lift">
                    <h3 class="font-playfair text-xl font-semibold text-ayur-green mb-3">Do you ship nationwide?</h3>
                    <p class="text-ayur-brown text-sm">We ship across India with free delivery on orders above ₹999. International shipping is also available.</p>
                </div>
                
                <div class="bg-ayur-cream p-6 rounded-xl hover-lift">
                    <h3 class="font-playfair text-xl font-semibold text-ayur-green mb-3">What if I'm not satisfied?</h3>
                    <p class="text-ayur-brown text-sm">We offer a 30-day money-back guarantee on all products if you're not completely satisfied.</p>
                </div>
            </div>
        </div>
    </section>

    @include('includes.footer')
