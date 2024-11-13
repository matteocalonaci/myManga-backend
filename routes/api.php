<?php

use App\Http\Controllers\Api\MangaController;
use App\Models\Manga;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Definisci le rotte API per i manga
Route::get('/mangas', [MangaController::class, 'index']);
Route::get('/mangas/{slug}', [MangaController::class, 'show']);
