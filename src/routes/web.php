<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\CartController;

Route::controller(LoginController::class)->prefix('login')->group(function() {
    Route::get('/', 'login')->name('login');
});

Route::controller(ProductController::class)->prefix('product')->group(function() {
    Route::get('/list', 'list')->name('product.list');
    Route::post('/list/search', 'search')->name('product.search');
    Route::get('/detail/{id}', 'detail')->name('product.detail');
});

Route::controller(CartController::class)->middleware(['auth'])->prefix('cart')->group(function() {
    Route::get('/list', 'list')->name('cart.list');
    Route::post('/cartIn', 'cartIn')->name('cart.cartIn');
    Route::post('/recalculation', 'recalculation')->name('cart.recalculation');
    Route::post('/deleteCart', 'deleteCart')->name('cart.deleteCart');
    Route::get('/delivery_address', 'delivery_address')->name('cart.delivery_address');
    Route::post('/execPurchase', 'execPurchase')->name('cart.execPurchase');
    Route::get('/showComplete', 'showComplete')->name('cart.showComplete');
});

Route::controller(AccountController::class)->middleware(['auth'])->prefix('account')->group(function() {
    Route::get('/signup', 'signup')->name('account.signup');
    Route::get('/signup/complete', 'signup_complete')->name('account.signup_complete');
    Route::get('/edit', 'edit')->name('account.edit');
    Route::post('/edit/complete', 'editComplete')->name('account.edit_complete');
});

require __DIR__.'/auth.php';
