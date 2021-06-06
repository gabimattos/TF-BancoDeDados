<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_user', function (Blueprint $table) {
            $table->bigIncrements('userID');
            $table->string('login')->unique('login');
            $table->string('firstName', 100);
            $table->string('lastName', 100);
            $table->string('regionalCouncilCode')->nullable();
            $table->string('password');
            $table->string('eMail')->nullable();
            $table->string('foneNumber')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_user');
    }
}
