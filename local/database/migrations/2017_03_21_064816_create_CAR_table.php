<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCARTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('CAR', function (Blueprint $table) {
            $table->increments('car_id');
            $table->string('name', 20);
            $table->unsignedInteger('num_seat');
            $table->string('type_seat_id', 20);
            $table->foreign('type_seat_id')->references('type_seat_id')->on('TYPE_SEAT');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('CAR');
    }
}
