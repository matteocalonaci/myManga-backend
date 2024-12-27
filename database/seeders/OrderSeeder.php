<?php

namespace Database\Seeders;

use App\Models\Order;
use App\Models\Manga;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker) {
        for ($i = 0; $i < 3; $i++) {
            // Creazione di un nuovo ordine
            $order = Order::create([
                'user_name' => $faker->name,
                'user_surname' => $faker->lastName,
                'user_email' => $faker->email,
                'user_phone' => $faker->phoneNumber,
                'shipping_address' => $faker->address,
                'shipping_city' => $faker->city,
                'shipping_state' => $faker->state,
                'shipping_postal_code' => $faker->postcode,
                'shipping_method' => $faker->randomElement(['in lavorazione', 'spediata', 'consegnata']),
                'payment_method_nonce' => 'fake-nonce', // Valore fittizio
                'amount' => $faker->randomFloat(2, 10, 500),
                'transaction_id' => 'fake-transaction-id', // Valore fittizio
            ]);

            // Seleziona un numero casuale di manga da associare all'ordine
            $mangas = Manga::inRandomOrder()->take(rand(1, 10))->get();
            foreach ($mangas as $manga) {
                // Associa il manga all'ordine con la quantità
                $order->mangas()->attach($manga->id, ['quantity' => $faker->numberBetween(1, 3)]);
            }
        }
    }
}
