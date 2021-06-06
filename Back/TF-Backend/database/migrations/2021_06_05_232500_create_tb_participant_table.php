<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbParticipantTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_participant', function (Blueprint $table) {
            $table->integer('participantID', true);
            $table->string('medicalRecord', 500)->comment('(pt-br) prontuário do paciente. 
(en) patient medical record.');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_participant');
    }
}
