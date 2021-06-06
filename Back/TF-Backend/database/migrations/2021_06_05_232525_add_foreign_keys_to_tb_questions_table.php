<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToTbQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tb_questions', function (Blueprint $table) {
            $table->foreign('listTypeID', 'tb_questions_ibfk_1')->references('listTypeID')->on('tb_listtype')->onUpdate('RESTRICT')->onDelete('RESTRICT');
            $table->foreign('questionTypeID', 'tb_questions_ibfk_2')->references('questionTypeID')->on('tb_questiontype')->onUpdate('RESTRICT')->onDelete('RESTRICT');
            $table->foreign('questionGroupID', 'tb_questions_ibfk_3')->references('questionGroupID')->on('tb_questiongroup')->onUpdate('RESTRICT')->onDelete('SET NULL');
            $table->foreign('subordinateTo', 'tb_questions_ibfk_4')->references('questionID')->on('tb_questions')->onUpdate('RESTRICT')->onDelete('SET NULL');
            $table->foreign('isAbout', 'tb_questions_ibfk_5')->references('questionID')->on('tb_questions')->onUpdate('RESTRICT')->onDelete('SET NULL');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tb_questions', function (Blueprint $table) {
            $table->dropForeign('tb_questions_ibfk_1');
            $table->dropForeign('tb_questions_ibfk_2');
            $table->dropForeign('tb_questions_ibfk_3');
            $table->dropForeign('tb_questions_ibfk_4');
            $table->dropForeign('tb_questions_ibfk_5');
        });
    }
}
