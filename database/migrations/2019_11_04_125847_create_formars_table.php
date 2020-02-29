<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('farmers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('cnic');
            $table->string('mobile_number');
            $table->string('secondary_mobile_number')->nullable();
            $table->string('farm_address')->nullable();
            $table->string('res_address')->nullable();
            $table->string('territory')->nullable();
            $table->string('avatar')->nullable();
            $table->unsignedInteger('seed_production_expr')->nullable();
            $table->unsignedInteger('owned_acreage')->nullable();
            $table->unsignedInteger('leased_acreage')->nullable();
            $table->unsignedInteger('total_acreage')->nullable();
            $table->unsignedInteger('sanifa_acreage')->nullable();
            $table->unsignedInteger('water_source')->nullable();
            $table->string('manager_name')->nullable();
            $table->string('manager_phone')->nullable();
            $table->unsignedInteger('manager_relation_type')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('farmers');
    }
}
