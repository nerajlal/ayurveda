@include('includes.header')


    <!-- Hero Section -->
    <section class="gradient-bg py-24 mt-16 hero-pattern">
        <div class="container mx-auto px-4 text-center">
            <h1 class="font-playfair text-5xl lg:text-6xl font-bold text-ayur-green mb-6 leading-tight">
                Our Ayurvedic Journey
            </h1>
            <p class="text-xl text-ayur-brown mb-8 max-w-3xl mx-auto leading-relaxed">
                Rooted in ancient wisdom, committed to modern wellness. Discover how we're bridging 5000 years of Ayurvedic tradition with contemporary health needs.
            </p>
            <div class="flex flex-col sm:flex-row items-center justify-center gap-8 text-center">
                <div class="bg-white bg-opacity-70 px-6 py-4 rounded-xl w-48">
                    <div class="text-3xl font-bold text-ayur-green">25+</div>
                    <div class="text-ayur-brown text-sm">Years of Excellence</div>
                </div>
                <div class="bg-white bg-opacity-70 px-6 py-4 rounded-xl w-48">
                    <div class="text-3xl font-bold text-ayur-green">5000+</div>
                    <div class="text-ayur-brown text-sm">Happy Customers</div>
                </div>
                <div class="bg-white bg-opacity-70 px-6 py-4 rounded-xl w-48">
                    <div class="text-3xl font-bold text-ayur-green">100+</div>
                    <div class="text-ayur-brown text-sm">Premium Products</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Story Section -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="flex flex-col lg:flex-row items-center">
                <div class="lg:w-1/2 mb-10 lg:mb-0 lg:pr-12">
                    <img src="{{ asset('images/about.png') }}"
                         alt="Our Story" class="w-full rounded-2xl leaf-shadow">
                </div>
                <div class="lg:w-1/2">
                    <h2 class="font-playfair text-4xl font-bold text-ayur-green mb-6">
                        From Heritage to Health
                    </h2>
                    <p class="text-lg text-ayur-brown mb-6 leading-relaxed">
                        Our story began 25 years ago when Dr. Pradeep Kumar, a third-generation Ayurvedic practitioner, recognized the need to make authentic Ayurvedic remedies accessible to modern families. Growing up in Kerala's traditional healing community, he witnessed firsthand how ancient formulations could transform lives.
                    </p>
                    <p class="text-lg text-ayur-brown mb-6 leading-relaxed">
                        What started as a small clinic has evolved into a trusted wellness brand, but our commitment remains unchanged: to provide authentic, high-quality Ayurvedic products that honor traditional methods while meeting contemporary standards.
                    </p>
                    <div class="bg-ayur-cream p-6 rounded-xl">
                        <p class="text-ayur-green font-medium italic">
                            "True healing happens when we align with nature's wisdom. Every product we create carries this philosophy forward."
                        </p>
                        <p class="text-ayur-brown text-sm mt-2">- Dr. Pradeep Kumar, Founder</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Values Section -->
    <section class="py-16 gradient-bg">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="font-playfair text-4xl font-bold text-ayur-green mb-4">Our Core Values</h2>
                <p class="text-xl text-ayur-brown max-w-2xl mx-auto">The principles that guide every decision we make and every product we create.</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="text-center p-8 bg-white rounded-2xl hover-lift leaf-shadow">
                    <div class="w-16 h-16 bg-ayur-green rounded-full flex items-center justify-center mx-auto mb-6">
                        <span class="text-2xl text-white"><i class="fas fa-leaf text-2xl"></i></span>
                    </div>
                    <h3 class="font-playfair text-xl font-semibold text-ayur-green mb-4">Authenticity</h3>
                    <p class="text-ayur-brown text-sm">Every formula is based on classical Ayurvedic texts and time-tested traditions.</p>
                </div>

                <div class="text-center p-8 bg-white rounded-2xl hover-lift leaf-shadow">
                    <div class="w-16 h-16 bg-ayur-sage rounded-full flex items-center justify-center mx-auto mb-6">
                        <span class="text-2xl"><i class="fas fa-microscope text-2xl text-white"></i></span>
                    </div>
                    <h3 class="font-playfair text-xl font-semibold text-ayur-green mb-4">Quality</h3>
                    <p class="text-ayur-brown text-sm">Rigorous testing and quality control ensure the highest standards in every product.</p>
                </div>

                <div class="text-center p-8 bg-white rounded-2xl hover-lift leaf-shadow">
                    <div class="w-16 h-16 bg-ayur-gold rounded-full flex items-center justify-center mx-auto mb-6">
                        <span class="text-2xl"><i class="fa-solid fa-handshake text-2xl text-white"></i></span>
                    </div>
                    <h3 class="font-playfair text-xl font-semibold text-ayur-green mb-4">Trust</h3>
                    <p class="text-ayur-brown text-sm">Transparent practices and honest communication build lasting relationships with our customers.</p>
                </div>

                <div class="text-center p-8 bg-white rounded-2xl hover-lift leaf-shadow">
                    <div class="w-16 h-16 bg-ayur-brown rounded-full flex items-center justify-center mx-auto mb-6">
                        <span class="text-2xl text-white"><i class="fa-solid fa-globe text-2xl text-white"></i></span>
                    </div>
                    <h3 class="font-playfair text-xl font-semibold text-ayur-green mb-4">Sustainability</h3>
                    <p class="text-ayur-brown text-sm">We protect the environment through ethical sourcing and eco-friendly practices.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="font-playfair text-4xl font-bold text-ayur-green mb-4">Meet Our Experts</h2>
                <p class="text-xl text-ayur-brown max-w-2xl mx-auto">Our team of certified practitioners and wellness experts are dedicated to your health journey.</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="text-center bg-ayur-cream p-8 rounded-2xl hover-lift">
                    <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='120' height='120' viewBox='0 0 120 120'%3E%3Ccircle cx='60' cy='60' r='60' fill='%234a7c59'/%3E%3Ctext x='50%25' y='50%25' dominant-baseline='middle' text-anchor='middle' font-size='24' fill='white'%3EDr.P%3C/text%3E%3C/svg%3E" 
                         alt="Dr. Pradeep Kumar" class="w-24 h-24 rounded-full mx-auto mb-6">
                    <h3 class="font-playfair text-xl font-semibold text-ayur-green mb-2">Dr. Pradeep Kumar</h3>
                    <p class="text-ayur-sage font-medium mb-3">Founder & Chief Practitioner</p>
                    <p class="text-ayur-brown text-sm">BAMS, 25+ years of experience in traditional Ayurvedic medicine and wellness consultation.</p>
                </div>

                <div class="text-center bg-ayur-cream p-8 rounded-2xl hover-lift">
                    <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='120' height='120' viewBox='0 0 120 120'%3E%3Ccircle cx='60' cy='60' r='60' fill='%2387a96b'/%3E%3Ctext x='50%25' y='50%25' dominant-baseline='middle' text-anchor='middle' font-size='24' fill='white'%3EDr.S%3C/text%3E%3C/svg%3E" 
                         alt="Dr. Sunita Rao" class="w-24 h-24 rounded-full mx-auto mb-6">
                    <h3 class="font-playfair text-xl font-semibold text-ayur-green mb-2">Dr. Sunita Rao</h3>
                    <p class="text-ayur-sage font-medium mb-3">Senior Ayurvedic Consultant</p>
                    <p class="text-ayur-brown text-sm">Specializes in women's health and Panchakarma treatments with 15+ years of clinical experience.</p>
                </div>

                <div class="text-center bg-ayur-cream p-8 rounded-2xl hover-lift">
                    <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='120' height='120' viewBox='0 0 120 120'%3E%3Ccircle cx='60' cy='60' r='60' fill='%23d4a574'/%3E%3Ctext x='50%25' y='50%25' dominant-baseline='middle' text-anchor='middle' font-size='24' fill='white'%3ER.K%3C/text%3E%3C/svg%3E" 
                         alt="Rajesh Krishnan" class="w-24 h-24 rounded-full mx-auto mb-6">
                    <h3 class="font-playfair text-xl font-semibold text-ayur-green mb-2">Rajesh Krishnan</h3>
                    <p class="text-ayur-sage font-medium mb-3">Quality Assurance Director</p>
                    <p class="text-ayur-brown text-sm">Ensures product authenticity and quality standards with expertise in Ayurvedic pharmacology.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Process Section -->
    <section class="py-16 gradient-bg">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="font-playfair text-4xl font-bold text-ayur-green mb-4">From Source to Shelf</h2>
                <p class="text-xl text-ayur-brown max-w-2xl mx-auto">Our meticulous process ensures every product maintains the highest standards of quality and authenticity.</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div class="text-center">
                    <div class="bg-white p-8 rounded-2xl hover-lift leaf-shadow mb-4">
                        <div class="w-16 h-16 bg-ayur-green rounded-full flex items-center justify-center mx-auto mb-6">
                            <span class="text-2xl text-white"><i class="fas fa-seedling text-2xl"></i></span>
                        </div>
                        <h3 class="font-playfair text-xl font-semibold text-ayur-green mb-4">Sourcing</h3>
                        <p class="text-ayur-brown text-sm">Direct partnerships with certified farms and traditional suppliers across India.</p>
                    </div>
                    <div class="text-3xl font-bold text-ayur-green">01</div>
                </div>

                <div class="text-center">
                    <div class="bg-white p-8 rounded-2xl hover-lift leaf-shadow mb-4">
                        <div class="w-16 h-16 bg-ayur-sage rounded-full flex items-center justify-center mx-auto mb-6">
                            <span class="text-2xl text-white"><i class="fas fa-flask text-2xl"></i></span>
                        </div>
                        <h3 class="font-playfair text-xl font-semibold text-ayur-green mb-4">Processing</h3>
                        <p class="text-ayur-brown text-sm">Traditional methods combined with modern hygiene standards in our certified facilities.</p>
                    </div>
                    <div class="text-3xl font-bold text-ayur-sage">02</div>
                </div>

                <div class="text-center">
                    <div class="bg-white p-8 rounded-2xl hover-lift leaf-shadow mb-4">
                        <div class="w-16 h-16 bg-ayur-gold rounded-full flex items-center justify-center mx-auto mb-6">
                            <span class="text-2xl text-white"><i class="fas fa-search text-2xl"></i></span>
                        </div>
                        <h3 class="font-playfair text-xl font-semibold text-ayur-green mb-4">Testing</h3>
                        <p class="text-ayur-brown text-sm">Comprehensive quality checks including purity, potency, and safety verification.</p>
                    </div>
                    <div class="text-3xl font-bold text-ayur-gold">03</div>
                </div>

                <div class="text-center">
                    <div class="bg-white p-8 rounded-2xl hover-lift leaf-shadow mb-4">
                        <div class="w-16 h-16 bg-ayur-brown rounded-full flex items-center justify-center mx-auto mb-6">
                            <span class="text-2xl text-white"><i class="fas fa-box-open text-2xl"></i></span>
                        </div>
                        <h3 class="font-playfair text-xl font-semibold text-ayur-green mb-4">Delivery</h3>
                        <p class="text-ayur-brown text-sm">Eco-friendly packaging and careful handling to preserve product integrity.</p>
                    </div>
                    <div class="text-3xl font-bold text-ayur-brown">04</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Certifications Section -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="font-playfair text-4xl font-bold text-ayur-green mb-4">Certifications & Recognition</h2>
                <p class="text-xl text-ayur-brown max-w-2xl mx-auto">Our commitment to quality is recognized by leading certification bodies and industry organizations.</p>
            </div>
            
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
                <div class="text-center p-6 bg-ayur-cream rounded-xl hover-lift">
                    <div class="w-20 h-20 bg-ayur-green rounded-full flex items-center justify-center mx-auto mb-4">
                        <span class="text-white font-bold text-sm">ISO</span>
                    </div>
                    <p class="text-ayur-brown font-medium">ISO 9001:2015</p>
                </div>

                <div class="text-center p-6 bg-ayur-cream rounded-xl hover-lift">
                    <div class="w-20 h-20 bg-ayur-sage rounded-full flex items-center justify-center mx-auto mb-4">
                        <span class="text-white font-bold text-xs">AYUSH</span>
                    </div>
                    <p class="text-ayur-brown font-medium">AYUSH Certified</p>
                </div>

                <div class="text-center p-6 bg-ayur-cream rounded-xl hover-lift">
                    <div class="w-20 h-20 bg-ayur-gold rounded-full flex items-center justify-center mx-auto mb-4">
                        <span class="text-white font-bold text-xs">ORGANIC</span>
                    </div>
                    <p class="text-ayur-brown font-medium">Organic Certified</p>
                </div>

                <div class="text-center p-6 bg-ayur-cream rounded-xl hover-lift">
                    <div class="w-20 h-20 bg-ayur-brown rounded-full flex items-center justify-center mx-auto mb-4">
                        <span class="text-white font-bold text-xs">GMP</span>
                    </div>
                    <p class="text-ayur-brown font-medium">GMP Compliant</p>
                </div>
            </div>
        </div>
    </section>

   

    @include('includes.footer')
