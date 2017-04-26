<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('passwordConfirmation');
            $table->string('firstName');
            $table->string('middleName');
            $table->string('lastName');
            $table->string('initials');
            $table->string('addressLine1');
            $table->string('addressLine2');
            $table->string('addressLine3');
            $table->date('dateofBirth');
            $table->string('mobileNo');
            $table->string('homeNo');
            $table->string('authLevel');
            $table->string('passportID');
            $table->string('NIC');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
