<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'other_columns'];

    protected $table = 'genres';

    public function mangas(){
        return $this->belongsToMany(Manga::class, 'manga_genre');
    }
}
