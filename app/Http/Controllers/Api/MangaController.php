<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Manga;
use App\Models\Author;
use App\Models\Genre;
use App\Models\Category;
use App\Models\Editor;
use Illuminate\Http\Request;


class MangaController extends Controller
{
    public function index(Request $request) {
        // Recupera i parametri di paginazione
        $perPage = $request->input('per_page', 12); // Imposta il numero di risultati per pagina, default a 12

        // Recupera i manga con paginazione e carica i generi associati
        $mangas = Manga::with('genres')->paginate($perPage);

        // Recupera gli autori, generi, categorie ed editor
        $authors = Author::all();
        $genres = Genre::all();
        $categories = Category::all();
        $editors = Editor::all();

        return response()->json([
            'success' => true,
            'mangas' => [
                'data' => $mangas->items(), // I dati della pagina corrente
                'current_page' => $mangas->currentPage(), // Pagina corrente
                'last_page' => $mangas->lastPage(), // Ultima pagina
                'total' => $mangas->total(), // Totale elementi
            ],
            'authors' => $authors,
            'genres' => $genres,
            'categories' => $categories,
            'editors' => $editors,
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
