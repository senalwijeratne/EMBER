<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

/**
* 
*/
class MovieController extends Controller
{
	//to power movie page
	function index()
	{
		//calling an index thats in a file
		 return view('test');	
	}

}