<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AccountController;

Route::controller(LoginController::class)->prefix('login')->group(function() {
    Route::get('/', 'login')->name('login');
});

Route::controller(ProductController::class)->prefix('product')->group(function() {
    Route::get('/list', 'list')->middleware(['auth', 'verified'])->name('product.list');
    Route::get('/detail', 'detail');
});

Route::controller(CartController::class)->prefix('cart')->group(function() {
    Route::get('/list', 'list')->name('cart.list');
    Route::get('/delivery_address', 'delivery_address')->name('cart.delivery_address');
    Route::get('/complete', 'complete')->name('cart.complete');
});

Route::controller(AccountController::class)->middleware(['auth'])->prefix('account')->group(function() {
    Route::get('/signup', 'signup')->name('account.signup');
    Route::get('/signup/complete', 'signup_complete')->name('account.signup_complete');
    Route::get('/edit', 'edit')->name('account.edit');
    Route::post('/edit/complete', 'editComplete')->name('account.edit_complete');
});

require __DIR__.'/auth.php';
