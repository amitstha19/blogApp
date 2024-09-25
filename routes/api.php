<?php
// use App\Models\User;
// use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\API\UserController;

//Route::get('/user', [UserController::class, 'index']);

// Route::get('/user', function (Request $request) {
//     dd(User::all());
//     return $request->user();
// }); //->middleware('auth:sanctum');


// use App\Http\Controllers\PostController;

// Route::middleware('auth:sanctum')->group(function () {
//     Route::get('/posts', [PostController::class, 'index']);
//     Route::get('/posts/{id}', [PostController::class, 'show']);
// });

// use App\Http\Controllers\PostController;

// Route::middleware(['auth:sanctum'])->group(function () {
//     Route::get('/posts', [PostController::class, 'index']);
//     Route::get('/posts/{id}', [PostController::class, 'show']);
//     Route::post('/posts', [PostController::class, 'store']);
//     Route::put('/posts/{id}', [PostController::class, 'update']);
//     Route::delete('/posts/{id}', [PostController::class, 'destroy']);
// });

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/posts', [PostController::class, 'index']);
Route::get('/posts/{id}', [PostController::class, 'show']);
