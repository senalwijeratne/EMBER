<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'firstName' => 'required|string|max:255',
            'middleName' => 'required|string|max:255',
            'lastName' => 'required|string|max:255',
            'dateOfBirth' => 'required|date|max:255',
            'initials' => 'required|string|max:255',
            'addressLine1' => 'required|string|max:255',
            'addressLine2' => 'required|string|max:255',
            'addressLine3' => 'required|string|max:255',
            'dateOfBirth' => 'required|date|max:255',
            'mobileNo' => 'required|numeric|digits:10',
            'homeNo' => 'required|numeric|digits:10',
            'authLevel' => 'required|numeric|digits:1|between:1,3',
            'passportID' => 'required|numeric|digits:9',
            'NIC' => 'required|numeric|digits:9',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
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
            'batchID'=> $data['batchID'],
            'password' => bcrypt($data['password']),
            'passwordConfirmation' => bcrypt($data['password_confirmation']),

        ]);
    }
}
