<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbUserroleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_userrole', function (Blueprint $table) {
            $table->integer('userID');
            $table->integer('groupRoleID')->index('FKtb_UserRol864770');
            $table->integer('hospitalUnitID')->index('FKtb_UserRol324331');
            $table->timestamp('creationDate')->useCurrent();
            $table->timestamp('expirationDate')->nullable();
            $table->primary(['userID', 'groupRoleID', 'hospitalUnitID']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_userrole');
    }
}
