<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Admin\ProductController as AdminProductController;
use App\Http\Controllers\Admin\OrderController as AdminOrderController;
use App\Http\Controllers\Admin\CustomerController as AdminCustomerController;
use App\Http\Controllers\Admin\AnalyticsController as AdminAnalyticsController;
use App\Http\Controllers\Admin\AnalyticsPageController as AdminAnalyticsPageController;
use App\Http\Controllers\Admin\SettingController as AdminSettingController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\WishlistController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\OrderController;

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

Route::get('/', [HomeController::class, 'index']);
Route::get('/products', [ProductController::class, 'index'])->name('products.index');
Route::get('/product/{product}', [ProductController::class, 'show'])->name('products.show');
Route::get('/images/{path}', [ImageController::class, 'show'])->where('path', '.*');
Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', function () {
    return view('contact');
});


Route::middleware('auth')->group(function () {
    Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
    Route::post('/cart', [CartController::class, 'store'])->name('cart.store');
    Route::patch('/cart/{cartItem}', [CartController::class, 'update'])->name('cart.update');
    Route::delete('/cart/{cartItem}', [CartController::class, 'destroy'])->name('cart.destroy');

    Route::get('/wishlist', [WishlistController::class, 'index'])->name('wishlist.index');
    Route::post('/wishlist', [WishlistController::class, 'store'])->name('wishlist.store');
    Route::delete('/wishlist/{product}', [WishlistController::class, 'destroy'])->name('wishlist.destroy');

    Route::get('/profile/address', [ProfileController::class, 'getAddress'])->name('profile.address.get');
    Route::patch('/profile/address', [ProfileController::class, 'updateAddress'])->name('profile.address.update');

    Route::post('/checkout', [OrderController::class, 'store'])->name('checkout.store');
    Route::get('/order-success/{order}', [OrderController::class, 'success'])->name('order.success');

    Route::get('/my-orders', [OrderController::class, 'index'])->name('my-orders');
    Route::get('/orders/{order}', [OrderController::class, 'show'])->name('order.show');
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

Route::get('/admin', [AdminAnalyticsController::class, 'index'])->name('admin.index');
Route::get('/admin-products', [AdminProductController::class, 'index'])->name('admin.products.index');
Route::get('/admin-orders', [AdminOrderController::class, 'index'])->name('admin.orders.index');
Route::get('/admin/orders/export', [AdminOrderController::class, 'export'])->name('admin.orders.export');
Route::get('/admin-customers', [AdminCustomerController::class, 'index'])->name('admin.customers.index');
Route::get('/admin-inventory', function () {
    return view('admin.inventory');
});
Route::get('/admin-analytics', [AdminAnalyticsPageController::class, 'index'])->name('admin.analytics');
Route::get('/admin-setting', [AdminSettingController::class, 'index'])->name('admin.setting');
Route::post('/admin/setting/password', [AdminSettingController::class, 'updatePassword'])->name('admin.setting.password');

Route::post('/admin/products', [AdminProductController::class, 'store'])->name('admin.products.store');
Route::delete('/admin/products/{product}', [AdminProductController::class, 'destroy'])->name('admin.products.destroy');
Route::patch('/admin/product-sizes/{product_size}/stock', [AdminProductController::class, 'updateStock'])->name('admin.product_sizes.updateStock');
Route::patch('/admin/orders/{order}/status', [AdminOrderController::class, 'updateStatus'])->name('admin.orders.updateStatus');
Route::get('/admin/orders/{order}/invoice', [AdminOrderController::class, 'showInvoice'])->name('admin.orders.invoice');