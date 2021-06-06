<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbFormrecordTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_formrecord', function (Blueprint $table) {
            $table->integer('formRecordID', true);
            $table->integer('participantID');
            $table->integer('hospitalUnitID');
            $table->integer('questionnaireID');
            $table->integer('crfFormsID')->index('FKtb_FormRec2192');
            $table->timestamp('dtRegistroForm')->useCurrent();
            $table->index(['participantID', 'hospitalUnitID', 'questionnaireID'], 'FKtb_FormRec984256');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_formrecord');
    }
}
