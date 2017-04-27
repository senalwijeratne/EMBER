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
        'batchID',
        'week',
        'lecturerUserID',
        'buildingAreaID',
        'start_date',
        'end_date'
   );

    public static function returnBatchSchedule($batchID){
    	$batid = $batchid;
    	echo 'value is -->'.$batid;

    	$result = static::where('batchid','=',$batid);
    	//$result = App\Lecture_Schedule::where('batchid','=',1)->get()
    	// App\Lecture_Schedule::returnBatchSchedule(1)->get();

    	foreach ($result as $arr) {
    		echo $arr->start_date;
    		echo'RESULT';
    	}
    }




    // public function batches(){
    // 	return $this->
    // } 


    public function scopeShowSchedule($query,$batchID){
    	return $query->where('batchID',$batchID);
    }
}