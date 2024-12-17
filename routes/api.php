<?php

use App\Http\Controllers\Api\MangaController;
use App\Http\Controllers\Api\OrderController; // Importa il tuo OrderController
use App\Http\Controllers\Api\BraintreeController;
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

// Rotta per ottenere l'utente autenticato
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Definisci le rotte API per i manga
Route::get('/mangas', [MangaController::class, 'index']);
Route::get('/mangas/{slug}', [MangaController::class, 'show']);

// Rotte per Braintree
Route::get('/braintree/token', [BraintreeController::class, 'getToken']);
Route::post('/braintree/checkout', [BraintreeController::class, 'checkout']);// Rotte per gli ordini
Route::post('/orders', [OrderController::class, 'createOrder'])->middleware('auth:sanctum'); // Aggiungi middleware di autenticazione
Route::get('/orders/{id}', [OrderController::class, 'getOrder'])->middleware('auth:sanctum'); // Aggiungi middleware di autenticazione
