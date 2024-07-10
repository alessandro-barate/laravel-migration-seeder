<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('trains', function (Blueprint $table) {
            $table->string('company', 70);
            $table->string('departure_station', 70);
            $table->string('arrival_station', 70);
            $table->dateTime('departure_day');
            $table->dateTime('arrival_day');
            $table->dateTime('departure_time');
            $table->dateTime('arrival_time');
            $table->string('train_code', 20);
            $table->tinyInteger('cars_number')->default(2);
            $table->boolean('is_in_time')->default(true);
            $table->boolean('is_canceled')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('trains', function (Blueprint $table) {
            $table->dropColumn('company');
            $table->dropColumn('departure_station');
            $table->dropColumn('arrival_station');
            $table->dropColumn('departure_hour');
            $table->dropColumn('arrival_hour');
            $table->dropColumn('train_code');
            $table->dropColumn('cars_number');
            $table->dropColumn('is_in_time');
            $table->dropColumn('is_canceled');
        });
    }
};
