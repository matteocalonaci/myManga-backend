<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Manga extends Model
{
    protected $fillable = [
        'title',
        'cover_image',
        'description',
        'price',
        'availability',
        'volume',
        'year',
        'in_progress',
        'author_id',
        'category_id',
        'editor_id',
    ];

    use HasFactory;
    // La relazione esistente con Genre
    public function genres()
    {
        return $this->belongsToMany(Genre::class, 'manga_genre');
    }

    public function categories()
    {
        return $this->belongsTo(Category::class);
    }

    public function editors()
    {
        return $this->belongsTo(Editor::class);
    }

    public function authors()
    {
        return $this->belongsTo(Author::class);
    }

}

