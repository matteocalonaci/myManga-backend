<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            'Shonen',
            'Shojo',
            'Seinen',
            'Josei',
            'Kodomo',
            'Manhwa',
            'Manhua',
            'Isekai',
            'Slice of Life',
            'Fantasy',
            'Action',
            'Romance',
            'Horror',
            'Mystery',
            'Adventure',
            'Comedy',
            'Supernatural',
            'Historical',
            'Sports',
            'Mecha',
            'Magical Girl',
            'Yuri',
            'Yaoi',
            'Harem',
            'Reverse Harem',
            'Psychological',
            'Dystopian',
            'Post-Apocalyptic',
            'Cyberpunk',
            'Gourmet',
            'Music',
            'Game',
            'School Life',
            'Martial Arts',
        ];

        foreach ($categories as $categoryName) {
            $newCategory = new Category();
            $newCategory->name = $categoryName;
            $newCategory->save();
        }
    }
}
