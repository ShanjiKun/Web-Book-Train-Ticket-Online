<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTYPESEATTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('TYPE_SEAT', function (Blueprint $table) {
            $table->string('type_seat_id', 20)->primary();
            $table->string('name', 50)->unique();
            $table->float('fare', 8, 2);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('TYPE_SEAT');
    }
}
