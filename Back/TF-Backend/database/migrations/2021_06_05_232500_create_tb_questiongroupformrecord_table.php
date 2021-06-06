<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbQuestiongroupformrecordTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_questiongroupformrecord', function (Blueprint $table) {
            $table->integer('questionGroupFormRecordID', true);
            $table->integer('formRecordID')->index('FKtb_Questio935723');
            $table->integer('crfFormsID');
            $table->integer('questionID');
            $table->integer('listOfValuesID')->nullable()->index('FKtb_Questio928457');
            $table->string('answer', 512)->nullable();
            $table->index(['crfFormsID', 'questionID'], 'FKtb_Questio489549');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_questiongroupformrecord');
    }
}
