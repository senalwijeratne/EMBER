<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\postInput;

class postInputController extends Controller
{
    protected $table = 'posts';

    public function inputPost(){

    	// Create and save the lecture

    	postInput::create(request([
		        'title',
		        'content',
    		]));

    	// Redirect to schedule
    	return redirect('index');
    }
}