<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToTbCrfformsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tb_crfforms', function (Blueprint $table) {
            $table->foreign('questionnaireID', 'tb_crfforms_ibfk_1')->references('questionnaireID')->on('tb_questionnaire')->onUpdate('RESTRICT')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tb_crfforms', function (Blueprint $table) {
            $table->dropForeign('tb_crfforms_ibfk_1');
        });
    }
}
