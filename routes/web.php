<?php

use App\Http\Controllers\PhotoController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

/*
Route ::get('/posts', [PostController::class, 'index'])->name('post.index');
Route ::get('/posts/create', [PostController::class, 'create'])->name('post.create');
Route ::get('/posts/show', [PostController::class, 'show'])->name('post.show');
*/
Route ::resource('photos', PostController::class);
Route ::resource('posts', PhotoController::class);
