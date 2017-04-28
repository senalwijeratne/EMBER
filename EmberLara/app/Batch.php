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

    //  {{ App\Batch::}}
    public static function returnBatches(){

        //$batchid = Auth::user->batch
        $result = static::all();
        //$result = App\Lecture_Schedule::where('batchid','=',1)->get()
        // App\Lecture_Schedule::returnBatchSchedule(1)->get();
        
        foreach ($result as $arr) {
            //<option value='1'>PLYBatch4</option>
            
                $batchID = $arr->batchID;
                $batchCode = $arr->batchCode;
                 
                echo '<option value=\''.$batchID.'\'>';                    
                    echo   $batchCode;
                echo   '</option>';       
        
        
        }
       
    }
}
