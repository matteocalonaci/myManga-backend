<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Author;
use App\Models\Category;
use App\Models\Editor;
use App\Models\Genre;
use App\Models\Manga;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class MangaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        // Inizializza la query
        $query = Manga::query();

        // Aggiungi la logica di ricerca
        if ($request->has('search') && $request->search != '') {
            $query->where('title', 'like', '%' . $request->search . '%');
        }

        // Recupera i manga paginati
        $mangas = $query->paginate(5);

        $data = [
            'mangas' => $mangas,
        ];

        return view('admin.mangas.index', $data);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $mangas = Manga::all();
        $authors = Author::all();
        $categories = Category::all();
        $genres = Genre::all();
        $editors = Editor::all();

        $data = [
         'mangas' => $mangas,
         'authors' => $authors,
         'categories' => $categories,
         'genres' => $genres,
         'editors' => $editors
        ];
        return view('admin.mangas.create', $data);
     }

    /**
     * Store a newly created resource in storage.
     */

     public function store(Request $request)
     {
         // Valida i dati del manga
         $data = $request->validate([
             'title' => 'required|string|max:255',
             'cover_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
             'description' => 'required|string',
             'price' => 'required|numeric',
             'availability' => 'required|boolean',
             'volume' => 'required|integer',
             'year' => 'required|integer',
             'in_progress' => 'required|boolean',
             'author_id' => 'required|exists:authors,id',
             'category_id' => 'required|exists:categories,id',
             'editor_id' => 'required|exists:editors,id',
             'genres' => 'required|array', // Assicurati che i generi siano forniti come array
         ],     [
            'price.min' => 'Il prezzo deve essere maggiore di 0.',
            'cover_image.max' => 'Il file immagine non può essere più grande di 2 MB.',
            'title.required' => 'Devi inserire il nome del manga.',
            'year.required' => 'L\'anno di pubblicazione è obbligatorio.',
            'year.numeric' => 'L\'anno deve essere un numero valido.',
            'volume.required' => 'Il volume è obbligatorio.',
            'volume.numeric' => 'Il volume deve essere un numero valido.',
            'description.required' => 'Inserisci una descrizione.',
            'author_id.required' => "Inserisci l'autore.",
            'category_id.required' => 'Inserisci la categoria.',
            'genres.required' => 'Inserisci il genere.',
        ]);

             // Caricamento dell'immagine
         if ($request->has('cover_image')) {
             $image_path = $request->file('cover_image')->store('images', 'public');
             $data['cover_image'] = $image_path;
         }

         // Crea il manga
         $manga = Manga::create($data);

         // Aggiungi i generi associati
         $manga->genres()->attach($request->input('genres')); // Supponendo che 'genres' sia un array di ID

         return redirect()->route('admin.mangas.index')->with('success', 'Manga creato con successo!');
     }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $manga = Manga::with(['authors', 'editors', 'categories', 'genres'])->findOrFail($id);
        return view('admin.mangas.show', compact('manga'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Manga $manga)
    {
        // Recupera gli autori, le categorie, gli editori e i generi
        $authors = Author::all();
        $categories = Category::all();
        $editors = Editor::all();
        $genres = Genre::all();

        // Passa i dati alla vista di modifica
        return view('admin.mangas.edit', compact('manga', 'authors', 'categories', 'editors', 'genres'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Manga $manga)
    {
        // Valida i dati del manga
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'cover_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'description' => 'required|string|max:1500',
            'price' => 'required|numeric|min:0',
            'availability' => 'required|boolean',
            'volume' => 'required|integer',
            'year' => 'required|integer',
            'in_progress' => 'required|boolean',
            'author_id' => 'required|exists:authors,id',
            'category_id' => 'required|exists:categories,id',
            'editor_id' => 'required|exists:editors,id',
            'genres' => 'required|array',
        ], [
            'price.min' => 'Il prezzo deve essere maggiore di 0.',
            'cover_image.max' => 'Il file immagine non può essere più grande di 2 MB.',
            'title.required' => 'Devi inserire il nome del manga.',
            'year.required' => 'L\'anno di pubblicazione è obbligatorio.',
            'year.integer' => 'L\'anno deve essere un numero valido.',
            'volume.required' => 'Il volume è obbligatorio.',
            'volume.integer' => 'Il volume deve essere un numero valido.',
            'description.required' => 'Inserisci una descrizione.',
            'author_id.required' => "Inserisci l'autore.",
            'category_id.required' => 'Inserisci la categoria.',
            'genres.required' => 'Inserisci il genere.',
        ]);

        // Gestione dell'immagine di copertura
        if ($request->has('cover_image')) {
            // Elimina l'immagine esistente se ce n'è una
            if ($manga->cover_image) {
                Storage::disk('public')->delete($manga->cover_image);
            }

            // Salva la nuova immagine
            $data['cover_image'] = $request->file('cover_image')->store('images', 'public');
        } else {
            // Se non viene caricata una nuova immagine, mantieni l'immagine esistente
            $data['cover_image'] = $manga->cover_image;
        }

        // Aggiorna il manga esistente
        $manga->update($data);

        // Aggiungi o aggiorna i generi associati
        $manga->genres()->sync($request->input('genres'));

        return redirect()->route('admin.mangas.index')->with('success', 'Manga aggiornato con successo!');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy($mangaId)
    {
        // Trova il manga da eliminare
        $manga = Manga::find($mangaId);

        if ($manga) {
            // Controlla se esiste un'immagine di copertura e, in caso affermativo, eliminala
            if ($manga->cover_image) {
                Storage::disk('public')->delete($manga->cover_image);
            }

            // Elimina le relazioni nella tabella pivot
            $manga->genres()->detach(); // Rimuove tutte le associazioni

            // Ora puoi eliminare il manga
            $manga->delete();

            return redirect()->route('admin.mangas.index')->with('success', 'Manga eliminato con successo.');
        } else {
            return redirect()->route('admin.mangas.index')->with('error', 'Manga non trovato.');
        }
    }
}
