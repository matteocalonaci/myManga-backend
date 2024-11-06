<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'other_columns']; // Aggiungi qui le colonne necessarie

    protected $table = 'categories';

    public function mangas(){
        return $this->hasMany(Manga::class, 'category_id');
    }
}
