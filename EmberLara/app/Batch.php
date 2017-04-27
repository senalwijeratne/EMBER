<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Batch extends Model
{
    //protected $table = 'batch';

    // protected $connection = 'mysql';
    protected $primaryKey = 'batchID';
    protected $table = 'batch';
    protected $fillable = array(
        'batchCode',
        'batchStartDate',
        'batchEndDate'
    );


    public function lectureSchedules(){
    	return $this->hasMany(Lecture_Schedule::class);
    }	
}
