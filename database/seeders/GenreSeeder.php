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
            'Azione',
            'Avventura',
            'Commedia',
            'Dramma',
            'Fantasia',
            'Horror',
            'Mistero',
            'Romanzo',
            'Fantascienza',
            'Vita Quotidiana',
            'Supernaturale',
            'Thriller',
            'Storico',
            'Sport',
            'Isekai',
            'Mecha',
            'Ragazza Magica',
            'Yuri',
            'Yaoi',
            'Josei',
            'Shonen',
            'Shojo',
            'Seinen',
            'Kodomo',
            'Musica',
            'Psicologico'
        ];

        foreach ($genres as $genreName) {
            $newGenre = new Genre();
            $newGenre->name = $genreName;
            $newGenre->save();
        }
    }
}
