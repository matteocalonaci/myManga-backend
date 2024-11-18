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
            $order = Order::create([
                'client_name' => $faker->name,
                'client_address' => $faker->address,
                'status' => $faker->randomElement(['in attesa', 'in lavorazione', 'spedito', 'consegnato', 'annullato']),
                'order_date' => $faker->dateTimeThisYear(),
                'total_price' => $faker->randomFloat(2, 10, 500),
            ]);

            $mangas = Manga::inRandomOrder()->take(rand(1, 10))->get();
            foreach ($mangas as $manga) {
                $order->mangas()->attach($manga->id, ['quantity' => $faker->numberBetween(1, 3)]);
            }
        }
    }
}
