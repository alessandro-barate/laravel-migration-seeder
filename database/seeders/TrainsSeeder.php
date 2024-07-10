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
            $train->departure_day = $faker '2024-08-23 12:52:28';
            $train->departure_time = $faker '2024-08-23 12:52:28';
            $train->arrival_day = $faker '2024-08-23 15:14:48';
            $train->arrival_time = $faker '2024-08-23 15:14:48';
            $train->train_code = $faker 'AAA35346';
            $train->cars_number = $faker '9';
            $train->is_in_time = $faker 1;
            $train->is_canceled = $faker 0;

            // Salvo il record
            $train->save();
        }
    }
}
