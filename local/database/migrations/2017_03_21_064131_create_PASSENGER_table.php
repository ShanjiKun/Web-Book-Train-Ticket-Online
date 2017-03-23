<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePASSENGERTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('PASSENGER', function (Blueprint $table) {
            $table->string('card_id', 20)->primary();
            $table->string('name', 50);
            $table->string('phone', 20);
            $table->string('gmail', 50)->unique();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('PASSENGER');
    }
}
