<?php

use App\Http\Controllers\PostsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::prefix('posts')->group(function () {
    Route::get('/', [PostsController::class, 'index'])->name('posts.index');
    Route::post('/', [PostsController::class, 'store'])->name('posts.store');
});
