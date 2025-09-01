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
            @if ($cartItems->isNotEmpty())
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-12">
                <!-- Cart Items -->
                <div class="lg:col-span-2">
                    <div class="flex justify-between items-center mb-8">
                        <h1 class="font-playfair text-3xl font-bold text-ayur-green">Shopping Cart</h1>
                        <p class="text-ayur-brown">({{ $cartItems->count() }} items)</p>
                    </div>

                    <div class="space-y-6">
                        @foreach ($cartItems as $item)
                        <div class="cart-item bg-ayur-cream p-6 rounded-2xl">
                            <div class="flex flex-col md:flex-row gap-6">
                                <div class="flex-shrink-0">
                                    <img src="{{ $item->product->images->firstWhere('is_primary', true) ? url('images/' . $item->product->images->firstWhere('is_primary', true)->image_path) : 'https://via.placeholder.com/120' }}"
                                         alt="{{ $item->product->name }}" class="w-24 h-24 md:w-28 md:h-28 rounded-xl object-cover">
                                </div>
                                <div class="flex-grow">
                                    <div class="flex justify-between items-start mb-3">
                                        <div>
                                            <h3 class="font-playfair text-xl font-semibold text-ayur-green">{{ $item->product->name }}</h3>
                                            <p class="text-ayur-sage text-sm">{{ $item->productSize->size }}</p>
                                        </div>
                                        <form action="{{ route('cart.destroy', $item) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="text-ayur-brown hover:text-red-500 text-xl" title="Remove item">✕</button>
                                        </form>
                                    </div>
                                    <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4">
                                        <form action="{{ route('cart.update', $item) }}" method="POST" class="flex items-center space-x-3">
                                            @csrf
                                            @method('PATCH')
                                            <span class="text-ayur-brown text-sm">Quantity:</span>
                                            <div class="flex items-center border-2 border-ayur-sage border-opacity-30 rounded-lg">
                                                <input type="number" name="quantity" value="{{ $item->quantity }}" min="1" class="w-16 text-center py-1 border-none outline-none quantity-input bg-transparent">
                                                <button type="submit" class="px-3 py-1 hover:bg-ayur-sage hover:bg-opacity-20 transition duration-300">Update</button>
                                            </div>
                                        </form>
                                        <div class="text-right">
                                            <p class="font-bold text-ayur-green text-xl">₹{{ $item->productSize->price * $item->quantity }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
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
                                <span>Subtotal</span>
                                <span>₹{{ number_format($subtotal, 2) }}</span>
                            </div>
                            <hr class="border-ayur-sage border-opacity-30">
                            <div class="flex justify-between font-bold text-lg text-ayur-green">
                                <span>Total</span>
                                <span>₹{{ number_format($subtotal, 2) }}</span>
                            </div>
                        </div>

                        <!-- Checkout Button -->
                        <form action="{{ route('checkout.store') }}" method="POST">
                            @csrf
                            <button type="submit" class="w-full bg-ayur-green text-white py-4 rounded-lg hover:bg-opacity-90 transition duration-300 font-medium shadow-lg mb-4">
                                Proceed to Checkout
                            </button>
                        </form>
                    </div>
                </div>
            </div>
            @else
            <div class="text-center py-16">
                <div class="text-6xl mb-4">🛒</div>
                <h3 class="font-playfair text-2xl font-semibold text-ayur-green mb-4">Your cart is empty</h3>
                <p class="text-ayur-brown mb-8">Looks like you haven't added any products to your cart yet.</p>
                <a href="/products" class="bg-ayur-green text-white px-8 py-3 rounded-lg hover:bg-opacity-90 transition duration-300 font-medium">
                    Continue Shopping
                </a>
            </div>
            @endif
        </div>
    </section>

    @include('includes.footer')