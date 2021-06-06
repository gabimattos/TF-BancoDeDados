<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbAssessmentquestionnaireTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_assessmentquestionnaire', function (Blueprint $table) {
            $table->integer('participantID')->comment('(pt-br)  Chave estrangeira para a tabela tb_Patient.
(en) Foreign key to the tb_Patient table.');
            $table->integer('hospitalUnitID')->index('FKtb_Assessm665217')->comment('(pt-br) Chave estrangeira para tabela tb_HospitalUnit.
(en) Foreign key for the tp_HospitalUnit table.');
            $table->integer('questionnaireID')->index('FKtb_Assessm419169');
            $table->primary(['participantID', 'hospitalUnitID', 'questionnaireID']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_assessmentquestionnaire');
    }
}
