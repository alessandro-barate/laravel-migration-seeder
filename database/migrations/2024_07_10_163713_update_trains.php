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
            $table->string('departure_hour', 70);
            $table->string('arrival_hour', 70);
            $table->string('train_code', 70);
            $table->tinyInteger('cars_number', 2);
            $table->string('is_in_time', 70);
            $table->string('is_canceled', 70);
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
