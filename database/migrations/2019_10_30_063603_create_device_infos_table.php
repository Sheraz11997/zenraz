<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDeviceInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('device_infos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('devicename');
            $table->string('imei');
            $table->string('model');
            $table->bigInteger('issue_to');
            $table->enum('is_deleted', ['n', 'y']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('device_infos');
    }
}
