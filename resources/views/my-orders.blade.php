@include('includes.header')

<!-- Breadcrumb -->
<div class="bg-white border-b">
    <div class="container mx-auto px-4 py-3">
        <nav class="text-sm">
            <a href="/" class="text-ayur-green hover:text-ayur-gold">Home</a>
            <span class="mx-2 text-ayur-brown">></span>
            <span class="text-ayur-brown">My Orders</span>
        </nav>
    </div>
</div>

<!-- Page Title -->
<div class="bg-white">
    <div class="container mx-auto px-4 py-8">
        <h1 class="font-playfair text-4xl font-bold text-ayur-green mb-2">My Orders</h1>
        <p class="text-lg text-ayur-brown">View your order history and status.</p>
    </div>
</div>

<!-- Main Content -->
<div class="container mx-auto px-4 pb-16">
    @if($orders->isEmpty())
        <div class="text-center py-16">
            <div class="text-6xl mb-4">📦</div>
            <h3 class="font-playfair text-2xl font-semibold text-ayur-green mb-4">You have no orders yet.</h3>
            <p class="text-ayur-brown mb-8">All your future orders will be displayed here.</p>
            <a href="/products" class="bg-ayur-green text-white px-8 py-3 rounded-lg hover:bg-opacity-90 transition duration-300 font-medium">
                Start Shopping
            </a>
        </div>
    @else
        <div class="mt-8 grid grid-cols-1 lg:grid-cols-2 gap-8">
            @foreach($orders as $order)
                <div class="bg-white rounded-2xl shadow-lg overflow-hidden">
                    <div class="bg-ayur-cream p-4 flex justify-between items-center">
                        <div>
                            <p class="text-ayur-brown text-sm">Order Placed</p>
                            <p class="font-medium text-ayur-green">{{ $order->created_at->format('d M Y') }}</p>
                        </div>
                        <div>
                            <p class="text-ayur-brown text-sm">Total</p>
                            <p class="font-medium text-ayur-green">₹{{ number_format($order->total_amount, 2) }}</p>
                        </div>
                        <div>
                            <p class="text-ayur-brown text-sm">Order #</p>
                            <p class="font-medium text-ayur-green">{{ $order->id }}</p>
                        </div>
                        <div>
                            <a href="#" class="border border-ayur-green text-ayur-green px-4 py-2 rounded-lg hover:bg-ayur-green hover:text-white transition duration-300 text-sm">View Details</a>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="font-playfair text-xl font-semibold text-ayur-green mb-4">
                            Status:
                            <span class="text-ayur-gold">
                                @switch($order->status)
                                    @case(0) Pending @break
                                    @case(1) Processing @break
                                    @case(2) Shipped @break
                                    @case(3) Delivered @break
                                    @default Unknown
                                @endswitch
                            </span>
                        </h3>
                        <div class="space-y-4">
                            @foreach($order->items as $item)
                                <div class="flex items-center space-x-4">
                                    <img src="{{ $item->productSize->product->images->firstWhere('is_primary', true) ? url('images/' . $item->productSize->product->images->firstWhere('is_primary', true)->image_path) : 'https://via.placeholder.com/80' }}" alt="{{ $item->productSize->product->name }}" class="w-20 h-20 rounded-lg object-cover">
                                    <div>
                                        <p class="font-semibold text-ayur-green">{{ $item->productSize->product->name }}</p>
                                        <p class="text-sm text-ayur-brown">{{ $item->quantity }} x ₹{{ number_format($item->price, 2) }}</p>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endif
</div>

@include('includes.footer')
