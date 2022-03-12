<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
use Illuminate\Support\Facades\Route;

// Home

Route::redirect('/', '/posts')->name('home');



// Posts

Route::get('/posts', [PostController::class, 'index'])->name('posts');

Route::get('/posts/{post:slug}', [PostController::class, 'show'])->name('post');



// User Registration

Route::get('/register', [RegisterController::class, 'create'])->middleware('guest');

Route::post('/register', [RegisterController::class, 'store'])->middleware('guest');



// User Logout

Route::post('logout', [SessionsController::class, 'destroy']);
