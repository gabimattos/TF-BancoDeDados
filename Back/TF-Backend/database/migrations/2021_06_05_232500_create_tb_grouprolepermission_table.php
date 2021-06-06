<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbGrouprolepermissionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_grouprolepermission', function (Blueprint $table) {
            $table->integer('groupRoleID');
            $table->integer('permissionID')->index('FKtb_GroupRo893005');
            $table->primary(['groupRoleID', 'permissionID']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_grouprolepermission');
    }
}
