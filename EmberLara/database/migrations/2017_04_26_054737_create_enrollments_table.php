<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEnrollmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enrollment', function (Blueprint $table) {
            $table->increments('enrollmentID')->unsigned();
            $table->integer('courseID');
            // $table->foreign('courseID')->references('courseID')->on('course');
            $table->integer('batchID');
            // $table->foreign('batchID')->references('batchID')->on('batch');
            $table->integer('graduationStatus');
            $table->integer('yearOfCollege');
            $table->integer('studentID');
            // $table->foreign('studentID')->references('studentID')->on('student');

            // LAB GROUP 
            $table->integer('labGroupID');
            // $table->foreign('labGroupID')->references('labGroupID')->on('lab_Group');
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
        Schema::dropIfExists('enrollments');
    }
}
