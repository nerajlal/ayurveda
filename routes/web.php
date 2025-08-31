<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Admin\ProductController as AdminProductController;
use App\Http\Controllers\ProductController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::post('/register', [AuthController::class, 'registerPost'])->name('register');
Route::post('/login', [AuthController::class, 'loginPost'])->name('login');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/', function () {
    return view('index');
});
Route::get('/products', [ProductController::class, 'index'])->name('products.index');
Route::get('/product/{product}', [ProductController::class, 'show'])->name('products.show');
Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/cart', function () {
    return view('cart');
});
Route::get('/wishlist', function () {
    return view('wishlist');
});

Route::get('/privacy', function () {
    return view('privacy-policy');
});
Route::get('/terms', function () {
    return view('terms');
});
Route::get('/refund', function () {
    return view('refund');
});

Route::get('/admin', function () {
    return view('admin.index');
});
Route::get('/admin-products', [AdminProductController::class, 'index'])->name('admin.products.index');
Route::get('/admin-orders', function () {
    return view('admin.orders');
});
Route::get('/admin-customers', function () {
    return view('admin.customers');
});
Route::get('/admin-inventory', function () {
    return view('admin.inventory');
});
Route::get('/admin-analytics', function () {
    return view('admin.analytics');
}); 
Route::get('/admin-setting', function () {
    return view('admin.setting');
});

Route::post('/admin/products', [AdminProductController::class, 'store'])->name('admin.products.store');
Route::delete('/admin/products/{product}', [AdminProductController::class, 'destroy'])->name('admin.products.destroy');