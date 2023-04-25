<?php

use App\Http\Controllers\customer\CartController;
use App\Http\Controllers\customer\ContactUsController;
use App\Http\Controllers\customer\CustomerProfileController;
use App\Http\Controllers\customer\SignController;
use App\Http\Controllers\customer\SolutionController;

Route::any('shopping-bag', [CartController::class, 'shoppingBag'])->name('shopping.bag');

Route::get('confirmation/{order_id}', [CartController::class, 'confirmation'])->name('confirmation');
Route::post('add-shopping-bag', [CartController::class, 'addShoppingBag'])->name('store.shopping.bag');
Route::get('remove-cart-item/{id}', [CartController::class, 'removeCartItem'])->name('remove.cartitem');
Route::get('specification-ajax', [SignController::class, 'specificationAjax'])->name('specification.ajax');
Route::get('solution-highway', [SolutionController::class, 'solutionHighway'])->name('solution.highway');
Route::get('solution-tunnels', [SolutionController::class, 'solutionTunnel'])->name('solution.tunnel');
Route::get('solution-city', [SolutionController::class, 'solutionCity'])->name('solution.city');
Route::get('solution-transit', [SolutionController::class, 'solutionTransit'])->name('solution.transit');
Route::get('contact-us', [ContactUsController::class, 'contactUs'])->name('contact.us');
Route::get('about-us', [ContactUsController::class, 'aboutUs'])->name('about.us');