<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'other_columns']; // Aggiungi qui le colonne necessarie

    // Se hai specificato una tabella diversa, assicurati di definirla
    protected $table = 'authors'; // Cambia 'authors' con il nome della tua tabella se necessario

    public function mangas()
    {
        return $this->hasMany(Manga::class, 'author_id');
    }
}
