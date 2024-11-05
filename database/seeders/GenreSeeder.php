<?php

namespace Database\Seeders;

use App\Models\Genre;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $genres = [
            'Action',
            'Adventure',
            'Comedy',
            'Drama',
            'Fantasy',
            'Horror',
            'Mystery',
            'Romance',
            'Sci-Fi',
            'Slice of Life',
            'Supernatural',
            'Thriller',
            'Historical',
            'Sports',
            'Isekai',
            'Mecha',
            'Magical Girl',
            'Yuri',
            'Yaoi',
            'Josei',
            'Shonen',
            'Shojo',
            'Seinen',
            'Kodomo',
            'Music',
            'Psychologic'
        ];

        foreach ($genres as $genreName) {
            $newGenre = new Genre();
            $newGenre->name = $genreName;
            $newGenre->save();
        }
    }
}
