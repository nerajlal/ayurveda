@include('includes.header')

    <!-- Breadcrumb -->
    <div class="bg-white border-b">
        <div class="container mx-auto px-4 py-3">
            <nav class="text-sm">
                <a href="/" class="text-ayur-green hover:text-ayur-gold">Home</a>
                <span class="mx-2 text-ayur-brown">></span>
                <span class="text-ayur-brown">Wishlist</span>
            </nav>
        </div>
    </div>

    <!-- Page Title -->
    <div class="bg-white">
        <div class="container mx-auto px-4 py-8">
            <h1 class="font-playfair text-4xl font-bold text-ayur-green mb-2">My Wishlist</h1>
            <p class="text-lg text-ayur-brown">Your collection of favorite Ayurvedic products.</p>
        </div>
    </div>

    <!-- Session Messages -->
    <div class="container mx-auto px-4">
        @if (session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">
                <span class="block sm:inline">{{ session('success') }}</span>
            </div>
        @endif
        @if (session('error'))
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4" role="alert">
                <span class="block sm:inline">{{ session('error') }}</span>
            </div>
        @endif
    </div>

    <!-- Wishlist Items -->
    <div class="container mx-auto px-4 pb-16">
        @if ($wishlistItems->isNotEmpty())
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8">
                @foreach ($wishlistItems as $item)
                    <div class="bg-white rounded-2xl overflow-hidden shadow-lg hover-lift flex flex-col">
                        <div class="relative">
                            <a href="{{ route('products.show', $item->product) }}">
                                <img src="{{ $item->product->images->firstWhere('is_primary', true) ? url('images/' . $item->product->images->firstWhere('is_primary', true)->image_path) : 'https://via.placeholder.com/300x200' }}"
                                     alt="{{ $item->product->name }}" class="w-full h-48 object-cover">
                            </a>
                            <div class="absolute top-4 right-4">
                                <form action="{{ route('wishlist.destroy', $item->product) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="w-8 h-8 bg-white bg-opacity-80 rounded-full flex items-center justify-center hover:bg-red-500 hover:text-white transition duration-300" title="Remove from Wishlist">
                                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                        </svg>
                                    </button>
                                </form>
                            </div>
                        </div>
                        <div class="p-6 flex flex-col flex-grow">
                            <div class="flex-grow">
                                <h3 class="font-playfair text-xl font-semibold text-ayur-green mb-2">
                                    <a href="{{ route('products.show', $item->product) }}">{{ $item->product->name }}</a>
                                </h3>
                                <p class="text-ayur-brown text-sm mb-3 line-clamp-2">{{ $item->product->subtitle }}</p>
                            </div>
                            <div class="mt-4 flex justify-between items-center">
                                <span class="font-bold text-ayur-green text-lg">₹{{ $item->product->sizes->first()->price ?? 'N/A' }}</span>
                                <a href="{{ route('products.show', $item->product) }}" class="text-ayur-green hover:text-ayur-gold transition duration-300">View Product</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <div class="text-center py-16">
                <div class="text-6xl mb-4">🤍</div>
                <h3 class="font-playfair text-2xl font-semibold text-ayur-green mb-4">Your wishlist is empty</h3>
                <p class="text-ayur-brown mb-8">Explore our products and add your favorites to your wishlist.</p>
                <a href="/products" class="bg-ayur-green text-white px-8 py-3 rounded-lg hover:bg-opacity-90 transition duration-300 font-medium">
                    Explore Products
                </a>
            </div>
        @endif
    </div>

@include('includes.footer')
</body>
</html>