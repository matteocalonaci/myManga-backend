<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Editor extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'other_columns'];

    protected $table = 'editors';

    public function mangas()
    {
        return $this->hasMany(Manga::class, 'editor_id');
    }
}
