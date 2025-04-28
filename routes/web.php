<?php
Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);
Route::resource('posts', PostController::class);

Route::get('/aktualnosci', [PostController::class, 'indexNews'])->name('news.index');
Route::get('/aktualnosci/{post}', [PostController::class, 'show'])->name('news.show');

// For projects (projekty)
Route::get('/projekty', [PostController::class, 'indexProjects'])->name('projects.index');
Route::get('/projekty/{post}', [PostController::class, 'show'])->name('projects.show');
