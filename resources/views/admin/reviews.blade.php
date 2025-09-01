@include('admin.includes.sidebar')

<!-- Custom Styles -->
<style>
    .card-shadow { box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05), 0 1px 3px rgba(0, 0, 0, 0.1); }
    .hover-lift:hover { transform: translateY(-4px); transition: transform 0.3s ease-in-out; }
    .table-hover:hover { background-color: #f9fafb; transition: background-color 0.3s; }
</style>

<!-- Main Content -->
<div class="ml-64 p-6 bg-gray-50 min-h-screen font-sans">
    <!-- Header -->
    <div class="mb-8">
        <div class="flex justify-between items-center mb-6">
            <div>
                <h2 class="font-playfair text-3xl font-bold text-ayur-green">Product Reviews</h2>
                <p class="text-ayur-brown mt-1">Manage and moderate customer reviews and ratings.</p>
            </div>
            <div class="flex items-center space-x-4">
                <button class="bg-white p-3 rounded-lg card-shadow hover-lift text-ayur-green">
                    <span class="text-lg">🔔</span>
                </button>
                <button class="bg-ayur-green text-white px-6 py-3 rounded-lg hover:bg-ayur-dark transition duration-300 font-medium">
                    Filter Reviews
                </button>
            </div>
        </div>
    </div>

    <!-- Review Stats Cards -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
        <div class="bg-white p-6 rounded-xl card-shadow hover-lift">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-ayur-brown text-sm font-medium">Total Reviews</p>
                    <p class="text-2xl font-bold text-ayur-green mt-1">{{ number_format($totalReviews) }}</p>
                    <p class="text-green-600 text-sm mt-1">&nbsp;</p> <!-- Placeholder for subtitle -->
                </div>
                <div class="w-12 h-12 bg-green-100 rounded-full flex items-center justify-center">
                    <span class="text-green-600 text-xl">⭐</span>
                </div>
            </div>
        </div>

        <div class="bg-white p-6 rounded-xl card-shadow hover-lift">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-ayur-brown text-sm font-medium">Average Rating</p>
                    <p class="text-2xl font-bold text-ayur-green mt-1">{{ number_format($averageRating, 2) }} / 5</p>
                    <p class="text-blue-600 text-sm mt-1">Based on {{ number_format($totalReviews) }} ratings</p>
                </div>
                <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center">
                    <span class="text-blue-600 text-xl">📊</span>
                </div>
            </div>
        </div>

        <div class="bg-white p-6 rounded-xl card-shadow hover-lift">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-ayur-brown text-sm font-medium">Pending Reviews</p>
                    <p class="text-2xl font-bold text-ayur-green mt-1">0</p>
                    <p class="text-orange-600 text-sm mt-1">Awaiting moderation</p>
                </div>
                <div class="w-12 h-12 bg-orange-100 rounded-full flex items-center justify-center">
                    <span class="text-orange-600 text-xl">⏳</span>
                </div>
            </div>
        </div>

        <div class="bg-white p-6 rounded-xl card-shadow hover-lift">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-ayur-brown text-sm font-medium">Spam Reviews</p>
                    <p class="text-2xl font-bold text-ayur-green mt-1">0</p>
                    <p class="text-red-600 text-sm mt-1">Blocked automatically</p>
                </div>
                <div class="w-12 h-12 bg-red-100 rounded-full flex items-center justify-center">
                    <span class="text-red-600 text-xl">🚫</span>
                </div>
            </div>
        </div>
    </div>

    <!-- Reviews Table -->
    <div class="bg-white rounded-xl card-shadow">
        <div class="p-6 border-b border-gray-100">
            <div class="flex justify-between items-center">
                <h3 class="font-playfair text-xl font-semibold text-ayur-green">All Reviews</h3>
            </div>
        </div>
        <div class="p-6">
            <div class="overflow-x-auto">
                <table class="w-full">
                    <thead>
                        <tr class="text-left border-b border-gray-100">
                            <th class="pb-3 text-sm font-medium text-ayur-brown">Product</th>
                            <th class="pb-3 text-sm font-medium text-ayur-brown">Customer</th>
                            <th class="pb-3 text-sm font-medium text-ayur-brown">Rating</th>
                            <th class="pb-3 text-sm font-medium text-ayur-brown">Review</th>
                            <th class="pb-3 text-sm font-medium text-ayur-brown">Date</th>
                            <th class="pb-3 text-sm font-medium text-ayur-brown">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="space-y-2">
                        @forelse($reviews as $review)
                            <tr class="table-hover">
                                <td class="py-3 text-sm font-medium text-ayur-green">{{ $review->product->name }}</td>
                                <td class="py-3 text-sm text-ayur-brown">{{ $review->user->first_name }} {{ $review->user->last_name }}</td>
                                <td class="py-3 text-sm text-ayur-brown">{{ $review->rating }}/5</td>
                                <td class="py-3 text-sm text-ayur-brown max-w-sm overflow-hidden whitespace-nowrap overflow-ellipsis" title="{{ $review->comment }}">{{ $review->comment }}</td>
                                <td class="py-3 text-sm text-ayur-brown">{{ $review->created_at->format('M d, Y') }}</td>
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
