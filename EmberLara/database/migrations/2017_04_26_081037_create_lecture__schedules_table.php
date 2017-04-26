<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLectureSchedulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lecture__schedules', function (Blueprint $table) {
            $table->increments('Lecture_ScheduleID')->unsigned();
            $table->integer('scheduleID');
            // $table->foreign('scheduleID')->references('scheduleID')->on('schedule');
            $table->integer('moduleID');
            // $table->foreign('moduleID')->references('moduleID')->on('module');
            $table->integer('batchID');
            // $table->foreign('batchID')->references('batchID')->on('batch');
            $table->integer('week');
            $table->integer('lecturerUserID');
            // $table->foreign('lecturerUserID')->references('lecturerUserID')->on('lecturerUser');
            $table->integer('buildingAreaID');
            // $table->foreign('buildingAreaID')->references('buildingAreaID')->on('building_Area');
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
        Schema::dropIfExists('lecture__schedules');
    }
}
