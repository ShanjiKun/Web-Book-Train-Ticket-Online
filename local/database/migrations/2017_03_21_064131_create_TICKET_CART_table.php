<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTICKETCARTTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('TICKET_CART', function (Blueprint $table) {
            $table->increments('ticket_cart_id');
            $table->string('card_date_id', 20);
            $table->string('name', 50);
            $table->string('type_passenger_id', 20)->nullable();
            $table->string('ticket_information');
            $table->float('price', 8, 2);
            $table->float('discount', 8, 2);
            $table->float('cost', 8, 2);
            $table->datetime('date_sell');
            $table->unsignedInteger('bill_id');
            $table->foreign('bill_id')->references('bill_id')->on('BILL');
            $table->foreign('type_passenger_id')->references('type_passenger_id')->on('TYPE_PASSENGER');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('TICKET_CART');
    }
}
