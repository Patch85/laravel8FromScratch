<?php

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


// Comments
Route::post('/posts/{post:slug}/comments', [CommentController::class, 'store'])->middleware('auth');


// User Registration
Route::get('/register', [RegisterController::class, 'create'])->middleware('guest')->name('register');

Route::post('/register', [RegisterController::class, 'store'])->middleware('guest');


// User Login & Logout
Route::get('/login', [SessionsController::class, 'create'])->middleware('guest')->name('login');

Route::post('/login', [SessionsController::class, 'store'])->middleware('guest');

Route::post('/logout', [SessionsController::class, 'destroy'])->middleware('auth')->name('logout');


// Subscribe to the Newsletter
Route::post('/newsletter', NewsletterController::class);


// Admin
Route::get('admin/posts/create', [PostController::class, 'create'])->middleware('admin')->name('newPost');

Route::post('admin/posts', [PostController::class, 'store'])->middleware('admin');
