<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbListofvaluesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_listofvalues', function (Blueprint $table) {
            $table->integer('listOfValuesID', true);
            $table->integer('listTypeID')->index('FKtb_ListOfV184108');
            $table->string('description')->comment('(pt-br) Descrição.
(en) description.');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_listofvalues');
    }
}
