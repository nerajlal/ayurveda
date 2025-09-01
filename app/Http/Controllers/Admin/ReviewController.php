<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Review;

class ReviewController extends Controller
{
    public function index()
    {
        $reviews = Review::with('user', 'product')->latest()->paginate(15);
        $totalReviews = Review::count();
        $averageRating = Review::avg('rating');

        return view('admin.reviews', compact('reviews', 'totalReviews', 'averageRating'));
    }

    public function destroy(Review $review)
    {
        $review->delete();
        return back()->with('success', 'Review deleted successfully.');
    }
}
