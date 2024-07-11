<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TrainsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {

        // Ciclo for per generare i record
        for ($i = 0; $i < 50; $i++) {

            // Model da usare
            $train = new Train();

            // Dati dei treni da inserire
            $train->company = $faker->company();
            $train->departure_station = $faker->city();
            $train->arrival_station = $faker->city();
            $train->departure_time = $faker->dateTimeBetween('-1 week', '+1 week');
            $train->arrival_time = $faker->dateTimeBetween('-1 week', '+1 week');
            $train->train_code = $faker->bothify('??###?#?');
            $train->cars_number = $faker->numberBetween(2, 20);
            $train->is_in_time = $faker->boolean();
            $train->is_canceled = $faker->boolean();

            // Salvo il record
            $train->save();
        }
    }
}
