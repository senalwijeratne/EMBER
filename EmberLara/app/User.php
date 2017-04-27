<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
         
        'firstName',
        'middleName',
        'lastName',
        'initials',
        'addressLine1',
        'addressLine2',
        'addressLine3',
        'dateOfBirth',
        'mobileNo',
        'homeNo',
        'authLevel',
        'passportID',
        'NIC',
        'email', 
        'password',
        'batchID',
        'passwordConfirmation',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
