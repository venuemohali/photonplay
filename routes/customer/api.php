<?php

use App\Http\Controllers\customer\CartController;
use App\Http\Controllers\customer\CustomerProfileController;
use App\Http\Controllers\customer\SignController;

Route::any('shopping-bag', [CartController::class, 'shoppingBag'])->name('shopping.bag');

Route::get('confirmation', [CartController::class, 'confirmation'])->name('confirmation');
Route::post('add-shopping-bag', [CartController::class, 'addShoppingBag'])->name('store.shopping.bag');
Route::get('remove-cart-item/{id}', [CartController::class, 'removeCartItem'])->name('remove.cartitem');
Route::get('specification-ajax', [SignController::class, 'specificationAjax'])->name('specification.ajax');
