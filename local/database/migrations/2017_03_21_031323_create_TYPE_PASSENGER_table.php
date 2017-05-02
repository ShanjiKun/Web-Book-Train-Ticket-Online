<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTYPEPASSENGERTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('TYPE_PASSENGER', function (Blueprint $table) {
            $table->string('type_passenger_id', 20)->primary();
            $table->string('name', 50);
            $table->unsignedInteger('discount');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('TYPE_PASSENGER');
    }
}
