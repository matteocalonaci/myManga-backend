<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    /**
     * Search for authors based on the search term.
     */
    public function searchAuthors(Request $request)
    {
        $searchTerm = $request->get('q');
        $authors = Author::where('name', 'LIKE', "%{$searchTerm}%")->get();

        return response()->json($authors);
    }

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        // Inizializza la query
        $query = Author::query();

        // Aggiungi la logica di ricerca
        if ($request->has('search') && $request->search != '') {
            $query->where('name', 'like', '%' . $request->search . '%');
        }

        // Recupera gli autori paginati
        $authors = $query->paginate(5);

        return view('admin.authors.index', ['authors' => $authors]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.authors.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
        ], [
            'name.required' => 'Devi inserire il nome dell\'autore.',
        ]);

        // Crea il nuovo autore
        Author::create($data);

        return redirect()->route('admin.authors.index')->with('success', 'Autore creato con successo!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Author $author)
    {
        return view('admin.authors.show', compact('author'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Author $author)
    {
        return view('admin.authors.edit', compact('author'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Author $author)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
        ], [
            'name.required' => 'Devi inserire il nome dell\'autore.',
        ]);

        // Aggiorna l'autore
        $author->update($data);

        return redirect()->route('admin.authors.index')->with('success', 'Autore aggiornato con successo!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Author $author)
    {
        $author->delete();

        return redirect()->route('admin.authors.index')->with('success', 'Autore eliminato con successo!');
    }
}
