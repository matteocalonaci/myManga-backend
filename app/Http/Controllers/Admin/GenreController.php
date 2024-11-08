<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Genre;
use Illuminate\Http\Request;

class GenreController extends Controller
{
    /**
     * Search for genres based on the search term.
     */
    public function searchGenre(Request $request)
    {
        $searchTerm = $request->get('q');
        $genres = Genre::where('name', 'LIKE', "%{$searchTerm}%")->get();

        return response()->json($genres);
    }

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        // Inizializza la query
        $query = Genre::query();

        // Aggiungi la logica di ricerca
        if ($request->has('search') && $request->search != '') {
            $query->where('name', 'like', '%' . $request->search . '%');
        }

        // Recupera i generi paginati
        $genres = $query->paginate(5);

        return view('admin.genres.index', ['genres' => $genres]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.genres.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
        ], [
            'name.required' => 'Devi inserire il nome del genere.',
        ]);

        // Crea il nuovo genere
        Genre::create($data);

        return redirect()->route('admin.genres.index')->with('success', 'Genere creato con successo!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Genre $genre)
    {
        return view('admin.genres.show', compact('genre'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Genre $genre)
    {
        return view('admin.genres.edit', compact('genre'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Genre $genre)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
        ], [
            'name.required' => 'Devi inserire il nome del genere.',
        ]);

        // Aggiorna il genere
        $genre->update($data);

        return redirect()->route('admin.genres.index')->with('success', 'Genere aggiornato con successo!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Genre $genre)
    {
        $genre->delete();

        return redirect()->route('admin.genres.index')->with('success', 'Genere eliminato con successo!');
    }
}
