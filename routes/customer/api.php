<?php

use App\Http\Controllers\customer\CartController;
use App\Http\Controllers\customer\CustomerProfileController;

Route::get('shopping-bag', [CartController::class, 'shoppingBag'])->name('shopping.bag');
Route::get('shipping-and-checkout', [CartController::class, 'checkout'])->name('checkout');
Route::get('confirmation', [CartController::class, 'confirmation'])->name('confirmation');
Route::post('add-shopping-bag', [CartController::class, 'addShoppingBag'])->name('store.shopping.bag');
Route::get('remove-cart-item/{id}', [CartController::class, 'removeCartItem'])->name('remove.cartitem');