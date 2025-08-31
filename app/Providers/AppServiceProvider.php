<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
use App\Http\View\Composers\AdminSidebarComposer;
use App\Http\View\Composers\CartComposer;
use App\Http\View\Composers\WishlistComposer;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Schema::defaultStringLength(191);
        View::composer('admin.includes.sidebar', AdminSidebarComposer::class);
        View::composer('includes.header', CartComposer::class);
        View::composer('includes.header', WishlistComposer::class);
    }
}
