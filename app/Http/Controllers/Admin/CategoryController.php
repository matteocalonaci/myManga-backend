<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Search for categories based on the search term.
     */
    public function searchCategories(Request $request)
    {
        $searchTerm = $request->get('q');
        $categories = Category::where('name', 'LIKE', "%{$searchTerm}%")->get();

        return response()->json($categories);
    }

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        // Inizializza la query
        $query = Category::query();

        // Aggiungi la logica di ricerca
        if ($request->has('search') && $request->search != '') {
            $query->where('name', 'like', '%' . $request->search . '%');
        }

        // Recupera le categorie paginati
        $categories = $query->paginate(5);

        return view('admin.categories.index', ['categories' => $categories]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
        ], [
            'name.required' => 'Devi inserire il nome della categoria.',
        ]);

        // Crea la nuova categoria
        Category::create($data);

        return redirect()->route('admin.categories.index')->with('success', 'Categoria creata con successo!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        return view('admin.categories.show', compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        return view('admin.categories.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
        ], [
            'name.required' => 'Devi inserire il nome della categoria.',
        ]);

        // Aggiorna la categoria
        $category->update($data);

        return redirect()->route('admin.categories.index')->with('success', 'Categoria aggiornata con successo!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        $category->delete();

        return redirect()->route('admin.categories.index')->with('success', 'Categoria eliminata con successo!');
    }
}
