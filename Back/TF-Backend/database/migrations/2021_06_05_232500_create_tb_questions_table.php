<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_questions', function (Blueprint $table) {
            $table->integer('questionID', true);
            $table->string('description')->comment('(pt-br) Descrição.
(en) description.');
            $table->integer('questionTypeID')->index('questionTypeID')->comment('(pt-br) Chave estrangeira para tabela tb_QuestionsTypes.
(en) Foreign key for the tp_QuestionsTypes table.');
            $table->integer('listTypeID')->nullable()->index('listTypeID');
            $table->integer('questionGroupID')->nullable()->index('questionGroupID');
            $table->integer('subordinateTo')->nullable()->index('subordinateTo');
            $table->integer('isAbout')->nullable()->index('isAbout');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_questions');
    }
}
