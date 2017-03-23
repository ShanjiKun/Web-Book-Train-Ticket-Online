<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFARETABLETable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('FARETABLE', function (Blueprint $table) {
            $table->unsignedInteger('station_leave_id');
            $table->unsignedInteger('station_arrive_id');
            $table->string('type_seat_id', 20);
            $table->string('train_id', 20);
            $table->float('fare', 8, 2);
            $table->foreign('station_leave_id')->references('station_id')->on('STATION');
            $table->foreign('station_arrive_id')->references('station_id')->on('STATION');
            $table->foreign('type_seat_id')->references('type_seat_id')->on('TYPE_SEAT');
            $table->foreign('train_id')->references('train_id')->on('TRAIN');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('FARETABLE');
    }
}
