<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    function insert (request $req )
    {
    	$name = $req->input("name");
    	$pass =	$req->input("pass");
    	$des  = $req->input("des");

    	$data = array('name'=>$name,'pass'=>$pass,'des'=>$des);

    	DB::table('')->insert($data);
    }
}
