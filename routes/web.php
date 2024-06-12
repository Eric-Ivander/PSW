<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CheckoutController;
use App\Models\Product;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/menu', function () {
    return view('menu');
})->middleware(['auth', 'verified'])->name('menu');

Route::get('/promo', function () {
    return view('promo');
})->middleware(['auth', 'verified'])->name('promo');

Route::get('/store', function () {
    return view('store');
})->middleware(['auth', 'verified'])->name('store');

Route::get('/help', function () {
    return view('help');
})->middleware(['auth', 'verified'])->name('help');

Route::get('/aboutus', function () {
    return view('aboutus');
})->middleware(['auth', 'verified'])->name('aboutus');

Route::get('/dashboard', [ProductController::class, 'display'])->name('dashboard');
Route::get('add-to-cart/{id}', [ProductController::class, 'addToCart'])->name('add_to_cart');
Route::get('cart', [ProductController::class, 'cart'])->name('cart');
Route::patch('update-cart', [ProductController::class, 'updates'])->name('update_cart');
Route::delete('remove-from-cart', [ProductController::class, 'remove'])->name('remove_from_cart');
Route::post('/checkout', [CheckoutController::class, 'process'])->name('checkout.process');

Route::get('/checkout/success', function () {
    return redirect('/dashboard');
})->name('checkout.success');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('welcome', [ProfileController::class, 'home'])->name('welcome');
});

Route::middleware('auth', 'admin')->group(function(){

    Route::get('admin/dashboard', [HomeController::class, 'index'])->name('admin/dashboard');
    Route::get('/admin/products', [ProductController::class, 'index'])->name('admin/products');
    Route::get('/admin/products/create', [ProductController::class, 'create'])->name('admin/products/create');
    Route::post('/admin/products/save', [ProductController::class, 'save'])->name('admin/products/save');
    Route::get('/admin/products/edit/{id}', [ProductController::class, 'edit'])->name('admin/products/edit');
    Route::put('/admin/products/edit/{id}', [ProductController::class, 'update'])->name('admin/products/update');
    Route::get('/admin/products/delete/{id}', [ProductController::class, 'delete'])->name('admin/products/delete');
    Route::get('/admin/order', [CheckoutController::class, 'display'])->name('admin/order');
    Route::delete('admin/order/destroy/{id}', [CheckoutController::class, 'destroy'])->name('admin/order/destroy');
});

require __DIR__.'/auth.php';

//Route::get('admin/dashboard', [HomeController::class, 'index']);
//Route::get('admin/dashboard', [HomeController::class, 'index'])->middleware(['auth', 'admin']);