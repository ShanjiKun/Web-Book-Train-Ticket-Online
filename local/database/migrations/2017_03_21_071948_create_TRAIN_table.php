<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTRAINTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('TRAIN', function (Blueprint $table) {
            $table->increments('train_id');
            $table->string('name', 20)->unique();
            $table->bigInteger('fare');
            $table->string('state', 1)->default('E'); //E: exist, D: delete
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('TRAIN');
    }
}
