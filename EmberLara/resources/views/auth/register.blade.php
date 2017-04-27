@extends('layouts.app')

@section('content')

<div class="container" style="text-align:center;">
    <!-- <div class="row"> -->
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default card">
              <div class="panel-heading"><strong>Register</strong></div>
              <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}
                        <!-- Enter First Name -->
                        <div class="form-group{{ $errors->has('firstName') ? ' has-error' : '' }}  mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <label for="firstName" class="col-md-4 mdl-textfield__label">First Name:</label>

                                <input id="firstName" class="mdl-textfield__input" type="text" name="firstName" value="{{ old('firstName') }}"  >

                                @if ($errors->has('firstName'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('firstName') }}</strong>
                                    </span>
                                @endif
                        </div>
                        <br/>

                        <!-- Enter middle Name -->
                        <div class="form-group{{ $errors->has('middleName') ? ' has-error' : '' }}  mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <label class="col-md-4 mdl-textfield__label" for="middleName">Middle Name:</label>

                                <input id="middleName" class="mdl-textfield__input" type="text" name="middleName" value="{{ old('middleName') }}"  >

                                @if ($errors->has('middleName'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('middleName') }}</strong>
                                    </span>
                                @endif
                        </div>
                        <br/>

                        <!-- Enter Last Name -->
                        <div class="form-group{{ $errors->has('lastName') ? ' has-error' : '' }}  mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <label for="lastName" class="col-md-4 mdl-textfield__label">Last Name:</label>

                                <input id="lastName" class="mdl-textfield__input" type="text" name="lastName" value="{{ old('lastName') }}"  >

                                @if ($errors->has('lastName'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('lastName') }}</strong>
                                    </span>
                                @endif
                        </div>
                        <br/>

                        <!-- Enter Initials-->
                        <div class="form-group{{ $errors->has('initials') ? ' has-error' : '' }}  mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <label for="initials" class="col-md-4 mdl-textfield__label">Initials:</label>

                                <input id="initials" class="mdl-textfield__input" type="text" name="initials" value="{{ old('initials') }}"  >

                                @if ($errors->has('initials'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('initials') }}</strong>
                                    </span>
                                @endif
                        </div>
                        <br/>

                        <!-- Enter addressLine1-->
                        <div class="form-group{{ $errors->has('addressLine1') ? ' has-error' : '' }}  mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <label for="addressLine1" class="col-md-4 mdl-textfield__label">Address Line 1:</label>

                                <input id="addressLine1" class="mdl-textfield__input" type="text" name="addressLine1" value="{{ old('addressLine1') }}"  >

                                @if ($errors->has('addressLine1'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('addressLine1') }}</strong>
                                    </span>
                                @endif
                        </div>
                        <br/>

                        <!-- Enter addressLine2-->
                        <div class="form-group{{ $errors->has('addressLine2') ? ' has-error' : '' }}  mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <label for="addressLine2" class="col-md-4 mdl-textfield__label">Address Line 2:</label>

                                <input id="addressLine2" class="mdl-textfield__input" type="text" name="addressLine2" value="{{ old('addressLine2') }}"  >

                                @if ($errors->has('addressLine2'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('addressLine2') }}</strong>
                                    </span>
                                @endif
                        </div>
                        <br/>

                        <!-- Enter addressLine3-->
                        <div class="form-group{{ $errors->has('addressLine3') ? ' has-error' : '' }}  mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <label for="addressLine3" class="col-md-4 mdl-textfield__label">Address Line 3:</label>

                                <input id="addressLine3" class="mdl-textfield__input" type="text" name="addressLine3" value="{{ old('addressLine3') }}"  >

                                @if ($errors->has('addressLine3'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('addressLine3') }}</strong>
                                    </span>
                                @endif
                        </div>
                        <br/>

                        <!-- Enter dateOfBirth-->
                        <div class="form-group{{ $errors->has('dateOfBirth') ? ' has-error' : '' }}  mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <label for="dateOfBirth" class="col-md-4 mdl-textfield__label"></label>

                                <input id="dateOfBirth" class="mdl-textfield__input" type="date" name="dateOfBirth" value="{{ old('dateOfBirth') }}"  >

                                @if ($errors->has('dateOfBirth'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('dateOfBirth') }}</strong>
                                    </span>
                                @endif
                        </div>
                        <br/>

                        <!-- Enter mobileNo-->
                        <div class="form-group{{ $errors->has('mobileNo') ? ' has-error' : '' }}  mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <label for="mobileNo" class="col-md-4 mdl-textfield__label">Mobile No:</label>

                                <input id="mobileNo" class="mdl-textfield__input" type="text" name="mobileNo" value="{{ old('mobileNo') }}"  >

                                @if ($errors->has('mobileNo'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('mobileNo') }}</strong>
                                    </span>
                                @endif
                        </div>
                        <br/>

                        <!-- Enter homeNo-->
                        <div class="form-group{{ $errors->has('homeNo') ? ' has-error' : '' }}  mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <label for="homeNo" class="col-md-4 mdl-textfield__label">Home No:</label>

                                <input id="homeNo" class="mdl-textfield__input" type="text" name="homeNo" value="{{ old('homeNo') }}"  >

                                @if ($errors->has('homeNo'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('homeNo') }}</strong>
                                    </span>
                                @endif
                        </div>
                        <br/>

                        <!-- Enter authLevel-->
                        <div class="form-group{{ $errors->has('authLevel') ? ' has-error' : '' }}  mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <label for="authLevel" class="col-md-4 mdl-textfield__label">Auth Level: (1:Admin|2:Lecturer|3:Student)</label>

                                <input id="authLevel" class="mdl-textfield__input" type="text" name="authLevel" value="{{ old('authLevel') }}"  >

                                @if ($errors->has('authLevel'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('authLevel') }}</strong>
                                    </span>
                                @endif
                        </div>
                        <br/>

                        <!-- Enter passportID-->
                        <div class="form-group{{ $errors->has('passportID') ? ' has-error' : '' }}  mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <label for="passportID" class="col-md-4 mdl-textfield__label">Passport ID:(First 9 Digits)</label>

                                <input id="passportID" class="mdl-textfield__input" type="text" name="passportID" value="{{ old('passportID') }}"  >

                                @if ($errors->has('passportID'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('passportID') }}</strong>
                                    </span>
                                @endif
                        </div>
                        <br/>

                        <!-- Enter NIC-->
                        <div class="form-group{{ $errors->has('NIC') ? ' has-error' : '' }}  mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <label for="NIC" class="col-md-4 mdl-textfield__label">NIC:(First 9 Digits)</label>

                                <input id="NIC" class="mdl-textfield__input" type="text" name="NIC" value="{{ old('NIC') }}"  >

                                @if ($errors->has('NIC'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('NIC') }}</strong>
                                    </span>
                                @endif
                        </div>
                        <br/>

                        <!-- Enter email -->
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}  mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <label for="email" class="col-md-4 mdl-textfield__label">Email Address:</label>

                                <input id="email" type="email" class="mdl-textfield__input" name="email" value="{{ old('email') }}" >

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                        </div>
                        <br/>

                        <!-- Enter password -->
                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}  mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <label for="password" class="col-md-4 mdl-textfield__label">Password:</label>

                                <input id="password" type="password" class="mdl-textfield__input" name="password" >

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                        </div>
                        <br/>

                        <!-- Password confirm -->
                        <div class="form-group  mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <label for="password-confirm" class="col-md-4 mdl-textfield__label">Confirm Password:</label>

                                <input id="password-confirm" type="password" class="mdl-textfield__input" name="password_confirmation" >
                        </div>
                        <br/>

                        <!-- Submit Button -->
                        <!-- <div class="form-group"> -->
                            <!-- <div class="col-md-6 col-md-offset-4"> -->
                                <button type="submit" class="btn mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">
                                    Register
                                </button>
                            <!-- </div> -->
                        <!-- </div> -->
                    </form>
              </div>
            </div>
        </div>
    <!-- </div> -->
</div>

@endsection
