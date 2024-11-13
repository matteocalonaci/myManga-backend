<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Manga;

class MangaController extends Controller
{
    public function index(){
        return response()->json([
            'success'=> true,
            //with per pescare anche i generi
            'mangas' =>  Manga::with('genres')->orderBy('id')->paginate(10)
        ]);
    }

    public function show($slug) {
        // Trova il manga in base allo slug con tutte le relazioni
        $manga = Manga::with(['genres', 'categories', 'editors', 'authors'])->where('slug', $slug)->first();

        // Controlla se il manga esiste
        if (!$manga) {
            return response()->json([
                'success' => false,
                'message' => 'Manga non trovato'
            ], 404);
        }

        return response()->json([
            'success' => true,
            'manga' => $manga
        ]);
    }
}
