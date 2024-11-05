<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Manga extends Model
{
    protected $fillable = [
        'title',
        'author',
        'description',
        'cover_image',
        'price',
        'availibility',
        'year',
        'slug'
    ];

    use HasFactory;
    // La relazione esistente con Genre
    public function genre()
    {
        return $this->belongsToMany(Genre::class);
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }

}

