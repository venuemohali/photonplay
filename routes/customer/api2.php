<?php


use App\Http\Controllers\BlogLikeController;
use App\Http\Controllers\customer\ContactUsController;

Route::get('blog/{page_name}', [ContactUsController::class, 'blog_show'])->name('blog_show');
Route::get('blog/{blog_id}/like-unlike', [BlogLikeController::class, 'like_unlike'])->name('blog_like_unlike');

