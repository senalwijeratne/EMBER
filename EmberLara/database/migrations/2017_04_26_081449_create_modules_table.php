<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateModulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('modules', function (Blueprint $table) {
            $table->increments('moduleID')->unsigned();
            $table->integer('courseID');
            // $table->foreign('courseID')->references('courseID')->on('course');
            $table->string('moduleCode');
            $table->string('moduleName');
            $table->string('moduleDescription');
            $table->integer('labComponent');
            $table->integer('numberOfLabs');

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
        Schema::dropIfExists('modules');
    }
}
