<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbCrfformsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_crfforms', function (Blueprint $table) {
            $table->integer('crfFormsID', true);
            $table->integer('questionnaireID')->index('questionnaireID');
            $table->string('description')->comment('(pt-br) Descrição .
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
        Schema::dropIfExists('tb_crfforms');
    }
}
