<?php

namespace App\Http\View\Composers;

use App\Models\WishlistItem;
use Illuminate\View\View;
use Illuminate\Support\Facades\Auth;

class WishlistComposer
{
    /**
     * Bind data to the view.
     *
     * @param  \Illuminate\View\View  $view
     * @return void
     */
    public function compose(View $view)
    {
        if (Auth::check()) {
            $wishlistCount = WishlistItem::where('user_id', Auth::id())->count();
            $view->with('wishlistCount', $wishlistCount);
        } else {
            $view->with('wishlistCount', 0);
        }
    }
}
