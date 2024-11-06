<?php

use App\Http\Controllers\Admin\AuthorController;
use App\Http\Controllers\Admin\CategoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController; //<---- Import del controller precedentemente creato!
use App\Http\Controllers\Admin\EditorController;
use App\Http\Controllers\Admin\GenreController;
use App\Http\Controllers\Admin\MangaController;
use App\Models\Category;
use App\Models\Genre;
use Database\Seeders\EditorSeeder;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth'])
    ->prefix('admin') // Definisce il prefisso "admin/" per le rotte di questo gruppo
    ->name('admin.') // Definisce il pattern con cui generare i nomi delle rotte cioè "admin.qualcosa"
    ->group(function () {
        Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
        Route::resource('/mangas', MangaController::class);
        Route::get('/search-authors', [AuthorController::class, 'searchAuthors']);
        Route::get('/search-categories', [CategoryController::class, 'searchCategories']);
        Route::get('/search-genres', [GenreController::class, 'searchGenres']);
        Route::get('/search-editors', [EditorController::class, 'searchEditors']);


    });

require __DIR__ . '/auth.php';



