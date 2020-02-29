<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PostionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('postions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->integer('po_id');
            $table->integer('user_id');
            $table->enum('status', ['active', 'disable'])->default('active');
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
        Schema::dropIfExists('postions');
    }
}
