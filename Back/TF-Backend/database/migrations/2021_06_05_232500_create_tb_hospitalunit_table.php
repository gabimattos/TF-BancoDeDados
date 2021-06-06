<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbHospitalunitTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_hospitalunit', function (Blueprint $table) {
            $table->integer('hospitalUnitID', true);
            $table->string('hospitalUnitName', 500)->comment('(pt-br) Nome da unidade hospitalar.
(en) Name of the hospital unit.');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_hospitalunit');
    }
}
