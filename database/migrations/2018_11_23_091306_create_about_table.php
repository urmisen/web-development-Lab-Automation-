<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAboutTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('about', function (Blueprint $table) {
        $table->increments('id');
        $table->string('developer_name');
        $table->string('superviser_name');
        $table->string('department');
        $table->string('designation');
        $table->string('roll');
        $table->string('section');
        $table->string('institute');
        $table->string('sup_photo');
        $table->string('dev_photo');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('about');
    }
}
