<?php

namespace Database\Seeders;

use App\Models\Editor;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UserSeeder::class,
            AuthorSeeder::class,
            GenreSeeder::class,
            CategorySeeder::class,
            EditorSeeder::class,
            MangaSeeder::class,
            // OrderSeeder::class, //  seeder per gli ordini
        ]);
    }
}
