<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lecture_Schedule extends Model
{	

	
    // protected $connection = 'mysql';
    protected $primaryKey = 'Lecture_ScheduleID';
    protected $table = 'lecture__schedules';
    protected $fillable = array(
        'scheduleID',
        'moduleID',
        'moduleName',
        'batchID',
        'week',
        'lecturerUserID',
        'buildingAreaID',
        'lectureHallName',
        'start_date',
        'end_date'
   );

    

    public static function returnBatchSchedule($batchID){

        // check if 0
        // if 0 then -> show all 
    	
    	$result = static::all();
    	//$result = App\Lecture_Schedule::where('batchid','=',1)->get()
    	// App\Lecture_Schedule::returnBatchSchedule(1)->get();
            
    	echo '[';
    	foreach ($result as $arr) {
    		
    		if($arr->batchID == $batchID){
    			$startDate = $arr->start_date;
    			$endDate = $arr->end_date;
    			$formattedStartDate = date('Y-m-d\TH:i:s',strtotime($startDate));
    			$formattedEndDate = date('Y-m-d\TH:i:s',strtotime($endDate));
                $hallName = $arr->lectureHallName;
    			$title = $arr->moduleName;

    			 //    {
			     //      id: 999,
			     //      title: 'Repeating Event',
			     //      start: '2017-04-09T16:00:00'
    			// 				'Y-m-d\TH:i:s'
			     //    }
    			echo '{';					
				     //echo 'id': 999,
				       echo   'title:\''.$title.' in '.$hallName. '\',';
				       echo   'start:\''.$formattedStartDate.'\',';
				       echo   'end:\''.$formattedEndDate.'\'';       
    			echo '},';
    	    } else if ($batchID == 0){

                $startDate = $arr->start_date;
                $endDate = $arr->end_date;
                $formattedStartDate = date('Y-m-d\TH:i:s',strtotime($startDate));
                $formattedEndDate = date('Y-m-d\TH:i:s',strtotime($endDate));
                $hallName = $arr->lectureHallName;
                $title = $arr->moduleName;
                 //    {
                 //      id: 999,
                 //      title: 'Repeating Event',
                 //      start: '2017-04-09T16:00:00'
                //              'Y-m-d\TH:i:s'
                 //    }
                echo '{';                   
                     //echo 'id': 999,
                       echo   'title:\''.$title.' in '.$hallName. '\',';
                       echo   'start:\''.$formattedStartDate.'\',';
                       echo   'end:\''.$formattedEndDate.'\'';       
                echo '},';

            }
    	
    	}
    	echo ']';
    }




    // public function batches(){
    // 	return $this->
    // } 


    public function scopeShowSchedule($query,$batchID){
    	return $query->where('batchID',$batchID);
    }
}