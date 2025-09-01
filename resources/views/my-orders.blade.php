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
                            <button onclick="openOrderDetailsModal({{ $order->id }})" class="border border-ayur-green text-ayur-green px-4 py-2 rounded-lg hover:bg-ayur-green hover:text-white transition duration-300 text-sm">View Details</button>
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
                                <div class="flex items-center justify-between">
                                    <div class="flex items-center space-x-4">
                                        <img src="{{ $item->productSize->product->images->firstWhere('is_primary', true) ? url('images/' . $item->productSize->product->images->firstWhere('is_primary', true)->image_path) : 'https://via.placeholder.com/80' }}" alt="{{ $item->productSize->product->name }}" class="w-20 h-20 rounded-lg object-cover">
                                        <div>
                                            <p class="font-semibold text-ayur-green">{{ $item->productSize->product->name }}</p>
                                            <p class="text-sm text-ayur-brown">{{ $item->quantity }} x ₹{{ number_format($item->price, 2) }}</p>
                                        </div>
                                    </div>
                                    @if ($order->status == 3) {{-- Delivered --}}
                                        @if (isset($userReviews[$order->id . '-' . $item->productSize->product->id]))
                                            <span class="text-sm text-ayur-sage">Reviewed</span>
                                        @else
                                            <button onclick="openReviewModal({{ $order->id }}, {{ $item->productSize->product->id }})" class="border border-ayur-gold text-ayur-gold px-3 py-1 rounded-lg hover:bg-ayur-gold hover:text-white transition duration-300 text-sm">
                                                Write a Review
                                            </button>
                                        @endif
                                    @endif
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endif
</div>

<!-- Review Modal -->
<div id="reviewModal" class="fixed inset-0 modal-backdrop z-50 flex items-center justify-center p-4 hidden">
    <div class="bg-white rounded-2xl shadow-2xl max-w-lg w-full">
        <div class="p-8">
            <div class="flex justify-between items-center mb-6">
                <h2 class="font-playfair text-2xl font-bold text-ayur-green">Write a Review</h2>
                <button onclick="closeReviewModal()" class="text-ayur-brown hover:text-ayur-green transition duration-300">
                    <i class="fas fa-times text-xl"></i>
                </button>
            </div>
            <form id="reviewForm" action="{{ route('reviews.store') }}" method="POST" class="space-y-4">
                @csrf
                <input type="hidden" name="product_id" id="review_product_id">
                <input type="hidden" name="order_id" id="review_order_id">
                <div>
                    <label class="block text-ayur-green font-medium mb-2">Rating</label>
                    <div class="flex space-x-2 text-3xl text-gray-300">
                        @for ($i = 1; $i <= 5; $i++)
                            <span class="star cursor-pointer" data-rating="{{ $i }}">★</span>
                        @endfor
                    </div>
                    <input type="hidden" name="rating" id="rating" required>
                </div>
                <div>
                    <label for="comment" class="block text-ayur-green font-medium mb-2">Comment</label>
                    <textarea name="comment" id="comment" rows="4" class="form-input w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none" placeholder="Share your thoughts about the product..."></textarea>
                </div>
                <div class="flex justify-end pt-4">
                    <button type="submit" class="bg-ayur-green text-white px-6 py-3 rounded-lg hover:bg-ayur-gold transition duration-300 font-medium">Submit Review</button>
                </div>
            </form>
        </div>
    </div>
</div>


@include('includes.footer')

<script>
    function openReviewModal(orderId, productId) {
        document.getElementById('review_order_id').value = orderId;
        document.getElementById('review_product_id').value = productId;
        document.getElementById('reviewModal').classList.remove('hidden');
    }

    function closeReviewModal() {
        document.getElementById('reviewModal').classList.add('hidden');
    }

    document.querySelectorAll('.star').forEach(star => {
        star.addEventListener('click', function() {
            const rating = this.dataset.rating;
            document.getElementById('rating').value = rating;
            document.querySelectorAll('.star').forEach(s => {
                s.classList.toggle('text-ayur-gold', s.dataset.rating <= rating);
            });
        });
    });
</script>
