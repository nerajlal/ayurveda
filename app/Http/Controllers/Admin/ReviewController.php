<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Review;
use App\Models\Product;
use Carbon\Carbon;

class ReviewController extends Controller
{
    public function index()
    {
        $reviews = Review::with('user', 'product')->latest()->paginate(15);
        $totalReviews = Review::count();
        $averageRating = Review::avg('rating');

        // Reviews change
        $reviewsThisMonth = Review::whereYear('created_at', Carbon::now()->year)->whereMonth('created_at', Carbon::now()->month)->count();
        $reviewsLastMonth = Review::whereYear('created_at', Carbon::now()->subMonth()->year)->whereMonth('created_at', Carbon::now()->subMonth()->month)->count();
        $reviewsChange = $reviewsThisMonth - $reviewsLastMonth;

        // Most reviewed product
        $mostReviewedProduct = Product::withCount('reviews')->orderByDesc('reviews_count')->first();

        // Highest rated product
        $highestRatedProduct = Product::withAvg('reviews', 'rating')->orderByDesc('reviews_avg_rating')->first();

        return view('admin.reviews', compact(
            'reviews',
            'totalReviews',
            'averageRating',
            'reviewsChange',
            'mostReviewedProduct',
            'highestRatedProduct'
        ));
    }

    public function destroy(Review $review)
    {
        $review->delete();
        return back()->with('success', 'Review deleted successfully.');
    }
}
