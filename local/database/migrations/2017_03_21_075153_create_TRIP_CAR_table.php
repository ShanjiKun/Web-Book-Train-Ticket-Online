<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTRIPCARTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('TRIP_CAR', function (Blueprint $table) {
            $table->unsignedInteger('trip_id');
            $table->unsignedInteger('car_id');
            $table->foreign('trip_id')->references('trip_id')->on('TRIP');
            $table->foreign('car_id')->references('car_id')->on('CAR');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('TRIP_CAR');
    }
}
