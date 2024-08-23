<?php

use App\Http\Controllers\PhotoController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Middleware\AdminMiddleware;
use App\Http\Controllers\Author\PostController as AuthorPostController;


Route::get('/', function () {

    return view('welcome');
});

// Admin routes for user and post management, protected by 'auth' and 'admin' middleware
Route::prefix('admin')->name('admin.')->middleware(['auth', AdminMiddleware::class])->group(function () {
    
    // User management routes
    Route::get('users', [UserController::class, 'index'])->name('users.index');
    Route::get('users/create', [UserController::class, 'create'])->name('users.create');
    Route::post('users', [UserController::class, 'store'])->name('users.store');
    Route::get('users/{user}', [UserController::class, 'show'])->name('users.show');
    Route::get('users/{user}/edit', [UserController::class, 'edit'])->name('users.edit');
    Route::put('users/{user}', [UserController::class, 'update'])->name('users.update');
    Route::delete('users/{user}', [UserController::class, 'destroy'])->name('users.destroy');

    // Post management routes
    Route::get('posts', [PostController::class, 'index'])->name('posts.index');
    Route::get('posts/create', [PostController::class, 'create'])->name('posts.create');
    Route::post('posts', [PostController::class, 'store'])->name('posts.store');
    Route::get('posts/{post}', [PostController::class, 'show'])->name('posts.show');
    Route::get('posts/{post}/edit', [PostController::class, 'edit'])->name('posts.edit');
    Route::put('posts/{post}', [PostController::class, 'update'])->name('posts.update');
    Route::delete('posts/{post}', [PostController::class, 'destroy'])->name('posts.destroy');
});


Route::prefix('author')->name('author.')->middleware(['auth'])->group(function () {    // Post management routes
    Route::get('posts', [AuthorPostController::class, 'index'])->name('posts.index');
    Route::get('posts/create', [AuthorPostController::class, 'create'])->name('posts.create');
    Route::post('posts', [AuthorPostController::class, 'store'])->name('posts.store');
    Route::get('posts/{post}', [AuthorPostController::class, 'show'])->name('posts.show');
    Route::get('posts/{post}/edit', [AuthorPostController::class, 'edit'])->name('posts.edit');
    Route::put('posts/{post}', [AuthorPostController::class, 'update'])->name('posts.update');
    Route::delete('posts/{post}', [AuthorPostController::class, 'destroy'])->name('posts.destroy');
});

Auth::routes();
