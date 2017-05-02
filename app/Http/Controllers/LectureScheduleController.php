<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Lecture_Schedule;

class LectureScheduleController extends Controller
{
    protected $table = 'lecture_schedule';

    public function batch(){
        return $this->belongsTo(Batch::class);
    }

    public function createLecture(){

    	// Create and save the lecture

    	Lecture_Schedule::create(request([
		        'moduleID',
                'moduleName',
                'batchID',
                'week',
		        'lecturerUserID',
		        'buildingAreaID',
                'lectureHallName',
		        'start_date',
		        'end_date'
    		]));

        // $table->increments('Lecture_ScheduleID')->unsigned();
        //     $table->integer('moduleID');
        //     $table->string('moduleName');
        //     $table->integer('batchID');
        //     $table->integer('week');
        //     $table->integer('lecturerUserID');
        //     $table->integer('buildingAreaID');
        //     $table->string('lectureHallName');
        //     $table->datetime('start_date');
        //     $table->datetime('end_date');
        //     $table->timestamps();

    	// Redirect to schedule
    	return redirect('schedule');
    }
}
