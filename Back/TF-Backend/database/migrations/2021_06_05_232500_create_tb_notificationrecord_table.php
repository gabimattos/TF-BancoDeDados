<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbNotificationrecordTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_notificationrecord', function (Blueprint $table) {
            $table->integer('userID');
            $table->integer('profileID');
            $table->integer('hospitalUnitID');
            $table->string('tableName');
            $table->integer('rowdID');
            $table->timestamp('changedOn')->useCurrent();
            $table->string('operation', 1);
            $table->text('log')->nullable();
            $table->primary(['userID', 'profileID', 'hospitalUnitID', 'tableName', 'rowdID', 'changedOn', 'operation']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_notificationrecord');
    }
}
