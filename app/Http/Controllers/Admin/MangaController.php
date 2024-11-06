<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Author;
use App\Models\Category;
use App\Models\Genre;
use App\Models\Manga;
use Illuminate\Http\Request;

class MangaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $mangas = Manga::all();
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

        $data = [
         'mangas' => $mangas,
         'authors' => $authors,
         'categories' => $categories,
         'genres' => $genres,
        ];
        return view('admin.mangas.create', $data);
     }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if (!auth()->check()) {
            return redirect()->route('login')->with('error', "Devi aver effettuato l'accesso per creare un manga");
        }
        $manga = Manga::all();
        $data =     $request->validate([
            'title' => 'required|string|max:255',
            'cover_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'availability' => 'required|boolean',
            'in_progress' => 'required|boolean',
            'author_id' => 'required|exists:authors,id',
            'category_id' => 'required|exists:categories,id',
            'genre_id' => 'required|exists:genres,id',
        ]);

        // Creazione del nuovo manga
        $manga = new Manga();
        $manga->title = $request->title;
        $manga->description = $request->description;
        $manga->price = $request->price;
        $manga->availability = $request->availability;
        $manga->in_progress = $request->in_progress;
        $manga->author_id = $request->author_id;
        $manga->category_id = $request->category_id;
        $manga->genre_id = $request->genre_id;
    }

    /**
     * Display the specified resource.
     */
    public function show(Manga $manga)
    {
    $data = [
        'manga' => $manga,
    ];
    return view('admin.mangas.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Manga $manga)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Manga $manga)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Manga $manga)
    {
      $manga -> delete();
      return redirect()->route('admin.mangas.index');
    }
}
