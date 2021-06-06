<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbQuestiongroupformTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_questiongroupform', function (Blueprint $table) {
            $table->integer('crfFormsID');
            $table->integer('questionID')->index('questionID');
            $table->integer('questionOrder');
            $table->primary(['crfFormsID', 'questionID']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_questiongroupform');
    }
}
