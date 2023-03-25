<?php

use App\Http\Controllers\ProductMediaController;
use App\Http\Controllers\ProductPricingController;
use App\Http\Controllers\ProductSetupController;

Route::get('/add/product-specification/{id}', [ProductSetupController::class, 'add_specification_form'])->name("add_specification_form");
Route::post('/add/product-specification/{id}', [ProductSetupController::class, 'add_specification_store'])->name("add_specification_store");


Route::get('/product-specification-options/{pid}/{id}', [ProductSetupController::class, 'product_specification_options'])->name("product_specification_options");

Route::get('/product-specification-options/{pid}/{id}/form', [ProductSetupController::class, 'product_specification_options_add_form'])->name("product_specification_options_add_form");

Route::get('/product-specification-options-edit/{id}', [ProductSetupController::class, 'product_specification_options_edit_form'])->name("product_specification_options_edit_form");


Route::post('/product-specification-options/store', [ProductSetupController::class, 'product_specification_options_add_store'])->name("product_specification_options_add_store");
Route::delete('/product-specification-options-delete/{id}', [ProductSetupController::class, 'product_specification_options_delete']);


Route::get('/product/{id}/edit/media', [ProductMediaController::class, 'open_media_form'])->name("product_media_page");
Route::get('/product/{id}/edit/pricing', [ProductPricingController::class, 'open_pricing_form'])->name("product_pricing_page");

Route::get('/product/{id}/edit/seo', [ProductPricingController::class, 'open_seo_form'])->name("product_seo_page");
