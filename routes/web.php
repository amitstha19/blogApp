<?php

use App\Http\Controllers\PhotoController;
use App\Http\Controllers\PostController;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
/*
Route ::get('/posts', [PostController::class, 'index'])->name('post.index');
Route ::get('/posts/create', [PostController::class, 'create'])->name('post.create');
Route ::get('/posts/show', [PostController::class, 'show'])->name('post.show');
*/
Route ::group (['middleware'=> ['auth']], function(){

    Route ::resource('posts', PostController::class);
    //Route ::resource('photos', PhotoController::class);
    //Route::get('/posts', [PostController::class, 'index'])->name('posts.index');
    Route::get('/home', [PostController::class, 'index'])->name('home')->middleware('auth');
});
Auth::routes();


