<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    // function insert (request $req )
    // {
    // 	$name = $req->input("name");
    // 	$pass =	$req->input("pass");
    // 	$des  = $req->input("des");

    // 	$data = array('name'=>$name,'pass'=>$pass,'des'=>$des);

    // 	DB::table('')->insert($data);
    // }
    // function insert(req $req)
    // {
    //       $firstname = $req->input('fname');
    //       $middlename  = $req->input('mname');
    //       $lastname = $req->input('lname');
    //       $initials = $req->input('initials');
    //       $address1 = $req->input('add1');
    //       $address2 = $req->input('add2');
    //       $address3 = $req->input('add3');
    //       $email = $req->input('email');
    //       $dob = $req->input('dob');
    //       $mobileNo = $req->input('mNo');
    //       $homeNo = $req->input('hNo');
    //       $password = $req->input('pw');
    //       $passwordconfirm=$req->input('password_confirmation');
    //       $nic = $req->input('nic');

    //       $data =array('firstname'=>$firstname,
    //       				'middlename'=>$middlename,
    //       				'lastname'=>$lastname,
    //       				'initials'=>$initials, 
    //       				'addressLine1'=>$address1,
    //       				'addressLine2'=>$address2,
    //       				'addressLine3'=>$address3 ,
    //       				'email'=>$email,
    //       				'dateOfBirth'=>$dob,
		  //             	'mobileNo'=>$mobileNo,
		  //             	'homeNo'=>$homeNo,
		  //             	'passwordID'=>$password,
		  //             	'password_confirmation'=>$passwordconfirm,
		  //             	'nic'=>$nic);

    //       DB::table('RegisterTable')->insert($data);
    //   }
}


 