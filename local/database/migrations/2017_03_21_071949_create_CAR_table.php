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
            $table->string('name', 20)->unique();
            $table->unsignedInteger('num_seat');
            $table->unsignedInteger('train_id');
            $table->string('type_seat_id', 20);
            $table->unsignedInteger('ordinal');
            $table->string('state', 1)->default('E'); //E: exist, D: delete
            $table->foreign('type_seat_id')->references('type_seat_id')->on('TYPE_SEAT');
            $table->foreign('train_id')->references('train_id')->on('train');
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
