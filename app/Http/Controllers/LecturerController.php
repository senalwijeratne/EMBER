<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\lecturer;
class LecturerController extends Controller
{
    protected $table = 'lecturers';

    public function inputLec(){

    	// Create and save the lecture

    	lecturer::create(request([
		        
    		]));

    	// Redirect to schedule
    	return redirect('index');

}
