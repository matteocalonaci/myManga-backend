<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'other_columns'];

    protected $table = 'authors';

    public function mangas()
    {
        return $this->hasMany(Manga::class, 'author_id');
    }
}
