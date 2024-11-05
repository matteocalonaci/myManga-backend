<?php

namespace Database\Seeders;

use App\Models\Editor;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EditorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $editors = [
            'J-POP',
            'Star Comics',
            'Panini Comics',
            'Goen',
            'Magic Press',
            'Coconino Press',
            'Bao Publishing',
            '001 Edizioni (Hikari)',
        ];

        foreach ($editors as $editorName) {
            $newEditor = new Editor();
            $newEditor->name = $editorName;
            $newEditor->save();
        }
    }
}
