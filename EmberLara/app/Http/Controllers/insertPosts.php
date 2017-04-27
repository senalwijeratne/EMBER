<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{

    protected function create(array $data)
    {
        return User::create([
            'firstName' => $data['firstName'],
            'middleName' => $data['middleName'],
            'lastName' => $data['lastName'],
            'initials' => $data['initials'],
            'addressLine1' => $data['addressLine1'],
            'addressLine2' => $data['addressLine2'],
            'addressLine3' => $data['addressLine3'],
            'dateOfBirth' => $data['dateOfBirth'],
            'mobileNo' => $data['mobileNo'],
            'homeNo' => $data['homeNo'],
            'mobileNo' => $data['mobileNo'],
            'authLevel' => $data['authLevel'],
            'passportID' => $data['passportID'],
            'NIC' => $data['NIC'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'passwordConfirmation' => bcrypt($data['password_confirmation']),

        ]);
    }
}
