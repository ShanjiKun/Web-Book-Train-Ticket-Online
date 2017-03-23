<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSTATIONSTOPTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('STATION_STOP', function (Blueprint $table) {
            $table->unsignedInteger('trip_id');
            $table->unsignedInteger('station_id');
            $table->datetime('time_arrive');
            $table->datetime('time_leave');
            $table->foreign('trip_id')->references('trip_id')->on('TRIP');
            $table->foreign('station_id')->references('station_id')->on('STATION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('STATION_STOP');
    }
}
