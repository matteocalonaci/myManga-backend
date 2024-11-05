<?php

namespace Database\Seeders;

use App\Models\Author;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $authors = [
            'Masakazu Ishiguro',
            'Muneyuki Kaneshiro',
            "Shin'ichi Sakamoto",
            'Keigo Shinzo',
            'Akasaka Aka',
            'Jirō Taniguchi',

        ];

        foreach ($authors as $authorName) {
            $newAuthor = new Author();
            $newAuthor->name = $authorName;
            $newAuthor->save();
        }
    }
}
