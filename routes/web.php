<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

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
Route::get('/products', function () {
    return view('products');
});
Route::get('/product', function () {
    return view('single-product');
});
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
Route::get('/admin-products', function () {
    return view('admin.products');
});
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
use App\Http\Controllers\Admin\ProductController;

Route::get('/admin-setting', function () {
    return view('admin.setting');
});

Route::post('/admin/products', [ProductController::class, 'store'])->name('admin.products.store');