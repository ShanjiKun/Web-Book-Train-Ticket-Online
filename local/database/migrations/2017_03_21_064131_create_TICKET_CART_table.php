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
            $table->string('ticket_cart_id', 20)->primary();
            $table->string('card_date_id', 20);
            $table->string('name', 50);
            $table->string('type_passenger', 20);
            $table->string('ticket_information');
            $table->float('price', 8, 2);
            $table->float('discount', 8, 2);
            $table->float('cost', 8, 2);
            $table->datetime('date_sell');
            $table->unsignedInteger('payment_type')->nullable(); //1: online, 2: pay later
            $table->unsignedInteger('bill_id')->nullable();
            $table->foreign('bill_id')->references('bill_id')->on('BILL');
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
