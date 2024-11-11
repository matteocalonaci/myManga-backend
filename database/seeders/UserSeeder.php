<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Definisci l'utente admin
        $adminUser  = [
            'name' => 'Matteo Calonaci',
            'email' => 'admin@example.com',
            'password' => Hash::make('12345678') // Usa una password sicura
        ];

        // Crea o aggiorna l'utente admin
        User::updateOrCreate(
            ['email' => $adminUser ['email']], // Cerca per email
            [
                'name' => $adminUser ['name'],
                'password' => $adminUser ['password']
            ]
        );
    }
}
