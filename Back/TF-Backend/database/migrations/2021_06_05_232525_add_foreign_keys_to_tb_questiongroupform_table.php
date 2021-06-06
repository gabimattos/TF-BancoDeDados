<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToTbQuestiongroupformTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tb_questiongroupform', function (Blueprint $table) {
            $table->foreign('crfFormsID', 'tb_questiongroupform_ibfk_1')->references('crfFormsID')->on('tb_crfforms')->onUpdate('RESTRICT')->onDelete('CASCADE');
            $table->foreign('questionID', 'tb_questiongroupform_ibfk_2')->references('questionID')->on('tb_questions')->onUpdate('RESTRICT')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tb_questiongroupform', function (Blueprint $table) {
            $table->dropForeign('tb_questiongroupform_ibfk_1');
            $table->dropForeign('tb_questiongroupform_ibfk_2');
        });
    }
}
