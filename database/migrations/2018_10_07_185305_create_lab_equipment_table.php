<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLabEquipmentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lab_equipment', function (Blueprint $table) {
          $table->increments('id');
        $table->string('lab_name');
        $table->string('computer_name');
        $table->string('product_id');
        $table->string('operating_system');
        $table->string('processor');
        $table->string('ram');
        $table->string('system_type');
        $table->string('system_problem_or_lackings');
        $table->string('protection');
        $table->string('state');
        $table->string('photo');


        $table->rememberToken();
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
        Schema::dropIfExists('lab_equipment');
    }
}
