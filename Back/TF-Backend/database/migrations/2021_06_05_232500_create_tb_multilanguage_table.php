<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbMultilanguageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_multilanguage', function (Blueprint $table) {
            $table->integer('languageID');
            $table->string('description', 300);
            $table->string('descriptionLang', 500);
            $table->primary(['languageID', 'description']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_multilanguage');
    }
}
