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
}
