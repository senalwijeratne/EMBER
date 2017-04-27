<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Lecture_Schedule;

class LectureScheduleController extends Controller
{
    protected $table = 'lecture_schedule';

    public function createLecture(){

    	// Create and save the lecture

    	Lecture_Schedule::create(request([
		        'moduleID',
		        'batchID',
		        'week',
		        'lecturerUserID',
		        'buildingAreaID',
		        'start_date',
		        'end_date'
    		]));

    	// Redirect to schedule
    	return redirect('schedule');
    }
}
