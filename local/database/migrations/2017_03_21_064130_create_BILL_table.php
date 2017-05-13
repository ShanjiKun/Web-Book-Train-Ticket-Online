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
            $table->increments('bill_id');
            $table->unsignedInteger('user_id');
            $table->string('transaction_id', 50)->nullable()->unique();
            $table->bigInteger('sum_fare');
            $table->string('state', 1)->default('E');// E: Exist, C: cancel
            $table->unsignedInteger('own_time');
            $table->foreign('user_id')->references('user_id')->on('users');
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
