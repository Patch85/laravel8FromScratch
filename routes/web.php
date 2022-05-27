<?php

use App\Http\Controllers\AdminPostController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
use Illuminate\Support\Facades\Route;

// Home
Route::redirect('/', '/posts')->name('home');


// Posts
Route::get('/posts', [PostController::class, 'index'])->name('posts');

Route::get('/posts/{post:slug}', [PostController::class, 'show'])->name('post');


// Admin - Posts
Route::middleware('can:admin')->group(function () {
    Route::resource('admin/posts', AdminPostController::class)->except('show');
});

// Comments
Route::post('/posts/{post:slug}/comments', [CommentController::class, 'store'])->middleware('auth');


// User Registration
Route::middleware('guest')->group(function () {
    Route::get('/register', [RegisterController::class, 'create'])->name('register');

    Route::post('/register', [RegisterController::class, 'store']);
});


// User Login & Logout
Route::get('/login', [SessionsController::class, 'create'])->middleware('guest')->name('login');

Route::post('/login', [SessionsController::class, 'store'])->middleware('guest');

Route::post('/logout', [SessionsController::class, 'destroy'])->middleware('auth')->name('logout');


// Subscribe to the Newsletter
Route::post('/newsletter', NewsletterController::class);
