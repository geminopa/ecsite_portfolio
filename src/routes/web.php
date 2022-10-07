<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::controller(LoginController::class)->prefix('login')->group(function() {
    Route::get('/', 'login')->name('login');
});

Route::controller(ProductController::class)->prefix('product')->group(function() {
    Route::get('/list', 'list')->name('product.list');
    Route::get('/detail', 'detail');
});

Route::controller(CartController::class)->prefix('cart')->group(function() {
    Route::get('/list', 'list')->name('cart.list');
    Route::get('/delivery_address', 'delivery_address')->name('cart.delivery_address');
    Route::get('/complete', 'complete')->name('cart.complete');
});

Route::controller(AccountController::class)->prefix('account')->group(function() {
    Route::get('/signup', 'signup')->name('account.signup');
    Route::get('/signup/complete', 'signup_complete')->name('account.signup_complete');
    Route::get('/edit', 'edit')->name('account.edit');
    Route::get('/edit/complete', 'edit_complete')->name('account.edit_complete');
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';
