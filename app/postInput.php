<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class postInput extends Model
{	

	
    // protected $connection = 'mysql';
    protected $primaryKey = 'id';
    protected $table = 'posts';
    protected $fillable = array(
        'title',
        'content',
        
    );




    // public function batches(){
    // 	return $this->
    // } 


    // public function scopeShowSchedule($query,$batchID){
    // 	return $query->where('batchID',$batchID);
    // }
}
