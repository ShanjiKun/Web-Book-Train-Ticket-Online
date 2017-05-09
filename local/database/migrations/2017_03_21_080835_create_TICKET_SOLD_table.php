<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTICKETSOLDTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('TICKET_SOLD', function (Blueprint $table) {
            $table->unsignedInteger('ticket_id');
            $table->unsignedInteger('trip_id');
            $table->string('ticket_cart_id', 20)->nullable()->unique();
            $table->unsignedInteger('user_id');
            $table->unsignedInteger('station_leave_id');
            $table->unsignedInteger('station_arrive_id');
            $table->string('state', 3);
            $table->unsignedInteger('own_time');
            $table->foreign('ticket_id')->references('ticket_id')->on('TICKETS');
            $table->foreign('trip_id')->references('trip_id')->on('TRIP');
            $table->foreign('station_leave_id')->references('station_id')->on('STATION');
            $table->foreign('station_arrive_id')->references('station_id')->on('STATION');
            $table->foreign('ticket_cart_id')->references('ticket_cart_id')->on('ticket_cart');
            $table->foreign('user_id')->references('user_id')->on('users');
            // $table->primary(['ticket_id', 'trip_id', 'station_leave_id', 'station_arrive_id']);
            //state:
            // U: unavailble
            // S: sold
            // W: wait
            // A: available
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('TICKET_SOLD');
    }
}
