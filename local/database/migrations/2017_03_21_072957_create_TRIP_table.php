<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTRIPTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('TRIP', function (Blueprint $table) {
            $table->increments('trip_id');
            $table->unsignedInteger('train_id');
            $table->unsignedInteger('station_leave_id');
            $table->unsignedInteger('station_arrive_id');
            $table->unsignedInteger('user_id');
            $table->datetime('date_leave');
            $table->datetime('date_arrive');
            $table->datetime('date_sell');
            $table->foreign('train_id')->references('train_id')->on('TRAIN');
            $table->foreign('station_leave_id')->references('station_id')->on('STATION');
            $table->foreign('station_arrive_id')->references('station_id')->on('STATION');
            $table->foreign('user_id')->references('user_id')->on('USERS');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('TRIP');
    }
}
