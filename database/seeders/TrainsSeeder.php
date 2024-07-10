<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrainsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        // $train->save();

        // $table->string('company', 70);
        // $table->string('departure_station', 70);
        // $table->string('arrival_station', 70);
        // $table->dateTime('departure_time');
        // $table->dateTime('arrival_time');
        // $table->string('train_code', 20);
        // $table->tinyInteger('cars_number')->default(2);
        // $table->boolean('is_in_time')->default(true);
        // $table->boolean('is_canceled')->default(false);

        $train = new Train();
    }
}
