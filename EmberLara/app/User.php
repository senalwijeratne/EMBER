<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    public static function returnLecturers(){

        // check if 0
        // if 0 then -> show all 
        
        $result = static::all();
        //$result = App\Lecture_Schedule::where('batchid','=',1)->get()
        // App\Lecturer::returnLecturers()->get();
            
        
        foreach ($result as $arr) {
            
            if($arr->authLevel == 2){
                
                $firstName = $arr->firstName;
                $middleName = $arr->middleName;
                $lastName = $arr->lastName;

                 // <li class="mdl-list__item">
        //          <span class="mdl-list__item-primary-content">
        //          <i class="material-icons mdl-list__item-icon">person</i>
        //                  Bryan Cranston
        //          </span>
                //  </li>
                echo '<ul class="demo-list-icon mdl-list">';
                echo    '<li class="mdl-list__item">';
                echo    '<span class="mdl-list__item-primary-content">';
                echo    '<i class="material-icons mdl-list__item-icon">person</i>';
                echo         $firstName.' '.$middleName.' '.$lastName;
                echo    '</span>';
                echo    '</li>';
                echo '</ul>'; 
            } 
        
        }
        
    }

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
