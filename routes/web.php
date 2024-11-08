<?php

use App\Http\Controllers\Admin\AuthorController;
use App\Http\Controllers\Admin\CategoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\EditorController;
use App\Http\Controllers\Admin\GenreController;
use App\Http\Controllers\Admin\MangaController;
use Illuminate\Support\Facades\Auth;

// ...

Route::get('/', function () {
    return view('welcome');
});

// Disabilita la registrazione prima di includere auth.php
Auth::routes(['register' => false]); // Disabilita la registrazione
Route::get('/register', function () {
    return redirect('/'); // Reindirizza alla home
});

Route::middleware(['auth'])
    ->prefix('admin')
    ->name('admin.')
    ->group(function () {
        Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
        Route::resource('/mangas', MangaController::class);
        Route::get('/search-authors', [AuthorController::class, 'searchAuthors']);
        Route::get('/search-categories', [CategoryController::class, 'searchCategories']);
        Route::get('/search-genres', [GenreController::class, 'searchGenres']);
        Route::get('/search-editors', [EditorController::class, 'searchEditors']);
    });

// Includi auth.php dopo aver disabilitato la registrazione
require __DIR__ . '/auth.php';
