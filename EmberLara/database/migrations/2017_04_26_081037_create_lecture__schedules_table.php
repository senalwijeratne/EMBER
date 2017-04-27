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
            $table->integer('moduleID');
            $table->integer('batchID');
            $table->integer('week');
            $table->integer('lecturerUserID');
            $table->integer('buildingAreaID');
            $table->datetime('start_date');
            $table->datetime('end_date');
            $table->timestamps();
            // $table->foreign('scheduleID')->references('scheduleID')->on('schedule');
            // $table->foreign('moduleID')->references('moduleID')->on('module');
            // $table->foreign('batchID')->references('batchID')->on('batch');
            // $table->foreign('lecturerUserID')->references('lecturerUserID')->on('lecturerUser');
            // $table->foreign('buildingAreaID')->references('buildingAreaID')->on('building_Area');

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
