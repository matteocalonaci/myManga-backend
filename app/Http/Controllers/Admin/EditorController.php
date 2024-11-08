<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Editor;
use Illuminate\Http\Request;

class EditorController extends Controller
{
    /**
     * Search for editors based on the search term.
     */
    public function searchEditors(Request $request)
    {
        $searchTerm = $request->get('q');
        $editors = Editor::where('name', 'LIKE', "%{$searchTerm}%")->get();

        return response()->json($editors);
    }

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        // Inizializza la query
        $query = Editor::query();

        // Aggiungi la logica di ricerca
        if ($request->has('search') && $request->search != '') {
            $query->where('name', 'like', '%' . $request->search . '%');
        }

        // Recupera gli editor paginati
        $editors = $query->paginate(5);

        return view('admin.editors.index', ['editors' => $editors]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.editors.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
        ], [
            'name.required' => 'Devi inserire il nome dell\'editore.',
        ]);

        // Crea il nuovo editore
        Editor::create($data);

        return redirect()->route('admin.editors.index')->with('success', 'Editore creato con successo!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Editor $editor)
    {
        return view('admin.editors.show', compact('editor'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Editor $editor)
    {
        return view('admin.editors.edit', compact('editor'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Editor $editor)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
        ], [
            'name.required' => 'Devi inserire il nome dell\'editore.',
        ]);

        // Aggiorna l'editore
        $editor->update($data);

        return redirect()->route('admin.editors.index')->with('success', 'Editore aggiornato con successo!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Editor $editor)
    {
        $editor->delete();

        return redirect()->route('admin.editors.index')->with('success', 'Editore eliminato con successo!');
    }
}
