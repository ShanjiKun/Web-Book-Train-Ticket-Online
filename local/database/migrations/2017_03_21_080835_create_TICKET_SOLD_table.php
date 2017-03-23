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
            $table->datetime('date_sell');
            $table->string('type_passenger_id', 20)->nullable();
            $table->string('bill_id', 20)->nullable();
            $table->unsignedInteger('station_leave_id');
            $table->unsignedInteger('station_arrive_id');
            $table->foreign('ticket_id')->references('ticket_id')->on('TICKETS');
            $table->foreign('trip_id')->references('trip_id')->on('TRIP');
            $table->foreign('type_passenger_id')->references('type_passenger_id')->on('TYPE_PASSENGER');
            $table->foreign('bill_id')->references('bill_id')->on('BILL');
            $table->foreign('station_leave_id')->references('station_id')->on('STATION');
            $table->foreign('station_arrive_id')->references('station_id')->on('STATION');
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
