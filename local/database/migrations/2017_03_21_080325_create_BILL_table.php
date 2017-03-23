<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBILLTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('BILL', function (Blueprint $table) {
            $table->string('bill_id', 20)->primary();
            $table->string('card_id', 20);
            $table->float('sum_fare', 8, 2);
            $table->foreign('card_id')->references('card_id')->on('PASSENGER');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('BILL');
    }
}
