<?php

use App\Http\Controllers\customer\ContactUsController;

Route::get('blog/{page_name}', [ContactUsController::class, 'blog_show'])->name('blog_show');
