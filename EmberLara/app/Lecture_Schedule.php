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




    // public function batches(){
    // 	return $this->
    // } 


    public function scopeShowSchedule($query,$batchID){
    	return $query->where('batchID',$batchID);
    }
}
