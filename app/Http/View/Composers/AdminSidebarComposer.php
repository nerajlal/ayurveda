<?php

namespace App\Http\View\Composers;

use App\Models\Product;
use App\Models\Order;
use Illuminate\View\View;

class AdminSidebarComposer
{
    /**
     * Bind data to the view.
     *
     * @param  \Illuminate\View\View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $view->with('productCount', Product::count());
        $view->with('newOrderCount', Order::where('status', 0)->count());
    }
}
