<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUSERSTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('USERS', function (Blueprint $table) {
            $table->increments('user_id');
            $table->string('name', 50);
            $table->string('password');
            $table->string('username', 20)->unique();
            $table->string('email', 100)->unique();
            $table->unsignedInteger('level'); //0: normal user, 1:admin, 2:superadmin
            $table->string('state', 1)->default('E'); //E: exist, D: deleted
            $table->rememberToken();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('USERS');
    }
}
