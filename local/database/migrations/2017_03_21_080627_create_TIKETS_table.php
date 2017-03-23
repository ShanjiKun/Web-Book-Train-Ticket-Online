<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTIKETSTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('TICKETS', function (Blueprint $table) {
            $table->increments('ticket_id');
            $table->unsignedInteger('car_id');
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
        Schema::dropIfExists('TICKETS');
    }
}
