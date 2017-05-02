<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSTATIONTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('STATION', function (Blueprint $table) {
            $table->increments('station_id');
            $table->string('name', 100)->unique();
            $table->string('city')->nullable();
            $table->string('address');
            $table->float('distance', 8, 2);
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
        Schema::dropIfExists('STATION');
    }
}
