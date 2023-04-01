<?php

use App\Http\Controllers\ContentPageController;
use App\Http\Controllers\CouponController;
use App\Http\Controllers\ProductMediaController;
use App\Http\Controllers\ProductPricingController;
use App\Http\Controllers\ProductSeoController;
use App\Http\Controllers\ProductSetupController;

Route::get('/add/product-specification/{id}', [ProductSetupController::class, 'add_specification_form'])->name("add_specification_form");
Route::post('/add/product-specification/{id}', [ProductSetupController::class, 'add_specification_store'])->name("add_specification_store");


Route::get('/product-specification-options/{pid}/{id}', [ProductSetupController::class, 'product_specification_options'])->name("product_specification_options");

Route::get('/product-specification-options/{pid}/{id}/form', [ProductSetupController::class, 'product_specification_options_add_form'])->name("product_specification_options_add_form");

Route::get('/product-specification-options-edit/{id}', [ProductSetupController::class, 'product_specification_options_edit_form'])->name("product_specification_options_edit_form");


Route::post('/product-specification-options/store', [ProductSetupController::class, 'product_specification_options_add_store'])->name("product_specification_options_add_store");
Route::delete('/product-specification-options-delete/{id}', [ProductSetupController::class, 'product_specification_options_delete']);


Route::get('/product/{id}/edit/media', [ProductMediaController::class, 'open_media_form'])->name("product_media_page");
Route::post('/product/edit/media', [ProductMediaController::class, 'store'])->name("product_media_store");
Route::post('/product/edit/media/images', [ProductMediaController::class, 'store_all_images'])->name("product_media_store_images");
Route::delete('/product/delete/media/images/{id}', [ProductMediaController::class, 'delete_images'])->name("product_media_delete_images");


Route::get('/product/{id}/edit/pricing', [ProductPricingController::class, 'open_pricing_form'])->name("product_pricing_page");

Route::post('/product/edit/pricing', [ProductPricingController::class, 'open_pricing_store'])->name("product_pricing_store");
Route::post('/product/edit/quantity', [ProductPricingController::class, 'open_quantity_store'])->name("open_quantity_store");


Route::get('/product/{id}/edit/seo', [ProductSeoController::class, 'open_seo_form'])->name("product_seo_page");
Route::post('/product/edit/seo', [ProductSeoController::class, 'open_seo_edit_store'])->name("product_seo_store");

Route::resource('coupons', CouponController::class);

Route::get('/content-page/{page_name}/', [ContentPageController::class, 'index'])->name("show_page_content");
Route::post('/content-page/{page_name}/', [ContentPageController::class, 'store'])->name("content_store_update");
Route::get('/content-page/{page_name}/edit', [ContentPageController::class, 'edit'])->name("show_page_content_edit");
