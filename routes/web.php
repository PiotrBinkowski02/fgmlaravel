<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);
Route::resource('posts', PostController::class);

// for news
Route::get('/aktualnosci', [PostController::class, 'indexNews'])->name('news.index');
Route::get('/aktualnosci/{post}', [PostController::class, 'show'])->name('news.show');

// For projects 
Route::get('/projekty', [PostController::class, 'indexProjects'])->name('projects.index');
Route::get('/projekty/{post}', [PostController::class, 'show'])->name('projects.show');