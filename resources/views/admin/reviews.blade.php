@include('admin.includes.sidebar')

<!-- Main Content -->
<div class="ml-64 p-6 bg-gray-50 min-h-screen font-sans">
    <!-- Header -->
    <div class="mb-8">
        <div class="flex justify-between items-center mb-6">
            <div>
                <h2 class="font-playfair text-3xl font-bold text-ayur-green">Review Management</h2>
                <p class="text-ayur-brown mt-1">Moderate customer reviews for all products.</p>
            </div>
        </div>
    </div>

    <!-- Reviews List -->
    <div class="bg-white rounded-xl card-shadow">
        <div class="p-6 border-b border-gray-100">
            <h3 class="font-playfair text-xl font-semibold text-ayur-green">All Reviews</h3>
        </div>
        <div class="p-6">
            <div class="overflow-x-auto">
                <table class="w-full min-w-max">
                    <thead>
                        <tr class="text-left border-b border-gray-100">
                            <th class="pb-3 text-sm font-medium text-ayur-brown">Customer</th>
                            <th class="pb-3 text-sm font-medium text-ayur-brown">Product</th>
                            <th class="pb-3 text-sm font-medium text-ayur-brown">Rating</th>
                            <th class="pb-3 text-sm font-medium text-ayur-brown">Comment</th>
                            <th class="pb-3 text-sm font-medium text-ayur-brown">Date</th>
                            <th class="pb-3 text-sm font-medium text-ayur-brown">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($reviews as $review)
                            <tr class="table-hover">
                                <td class="py-3 text-sm text-ayur-brown">{{ $review->user->first_name }} {{ $review->user->last_name }}</td>
                                <td class="py-3 text-sm font-medium text-ayur-green">{{ $review->product->name }}</td>
                                <td class="py-3 text-sm text-ayur-gold">
                                    @for ($i = 0; $i < $review->rating; $i++)★@endfor
                                    @for ($i = $review->rating; $i < 5; $i++)☆@endfor
                                </td>
                                <td class="py-3 text-sm text-ayur-brown max-w-sm truncate">{{ $review->comment }}</td>
                                <td class="py-3 text-sm text-ayur-brown">{{ $review->created_at->format('d M Y') }}</td>
                                <td class="py-3">
                                    <form action="{{ route('admin.reviews.destroy', $review) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this review?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-red-500 hover:text-red-700 text-sm">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="text-center py-8 text-ayur-brown">No reviews found.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
            <div class="p-6 border-t border-gray-100">
                {{ $reviews->links() }}
            </div>
        </div>
    </div>
</div>

@include('admin.includes.footer')
