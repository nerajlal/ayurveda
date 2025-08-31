<?php

namespace App\Http\View\Composers;

use App\Models\Product;
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
    }
}
