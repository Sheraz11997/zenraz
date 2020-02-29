<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AreaStructureTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('area_structure', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('t_name');
            $table->string('remarks');
            $table->string('address');
            $table->string('city');
            $table->string('province');
            $table->string('country');
            $table->string('crop');
            $table->enum('is_deleted', ['n', 'y'])->default('n');
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
        Schema::dropIfExists('area_structure');
    }
}
