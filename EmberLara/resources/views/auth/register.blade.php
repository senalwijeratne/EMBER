@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}
                        <!-- Enter First Name -->
                        <div class="form-group{{ $errors->has('firstName') ? ' has-error' : '' }}">
                            <label for="firstName" class="col-md-4 control-label">firstName</label>

                            <div class="col-md-6">
                                <input id="firstName" type="text" class="form-control" name="firstName" value="{{ old('firstName') }}" required autofocus>

                                @if ($errors->has('firstName'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('firstName') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <!-- Enter middle Name -->
                        <div class="form-group{{ $errors->has('middleName') ? ' has-error' : '' }}">
                            <label for="middleName" class="col-md-4 control-label">middleName</label>

                            <div class="col-md-6">
                                <input id="middleName" type="text" class="form-control" name="middleName" value="{{ old('middleName') }}" required >

                                @if ($errors->has('middleName'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('middleName') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <!-- Enter Last Name -->
                        <div class="form-group{{ $errors->has('lastName') ? ' has-error' : '' }}">
                            <label for="lastName" class="col-md-4 control-label">lastName</label>

                            <div class="col-md-6">
                                <input id="lastName" type="text" class="form-control" name="lastName" value="{{ old('lastName') }}" required >

                                @if ($errors->has('lastName'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('lastName') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <!-- Enter Initials-->
                        <div class="form-group{{ $errors->has('initials') ? ' has-error' : '' }}">
                            <label for="initials" class="col-md-4 control-label">initials</label>

                            <div class="col-md-6">
                                <input id="initials" type="text" class="form-control" name="initials" value="{{ old('initials') }}" required >

                                @if ($errors->has('initials'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('initials') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <!-- Enter addressLine1-->
                        <div class="form-group{{ $errors->has('addressLine1') ? ' has-error' : '' }}">
                            <label for="addressLine1" class="col-md-4 control-label">addressLine1</label>

                            <div class="col-md-6">
                                <input id="addressLine1" type="text" class="form-control" name="addressLine1" value="{{ old('addressLine1') }}" required >

                                @if ($errors->has('addressLine1'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('addressLine1') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <!-- Enter addressLine2-->
                        <div class="form-group{{ $errors->has('addressLine2') ? ' has-error' : '' }}">
                            <label for="addressLine2" class="col-md-4 control-label">addressLine2</label>

                            <div class="col-md-6">
                                <input id="addressLine2" type="text" class="form-control" name="addressLine2" value="{{ old('addressLine2') }}" required >

                                @if ($errors->has('addressLine2'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('addressLine2') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <!-- Enter addressLine3-->
                        <div class="form-group{{ $errors->has('addressLine3') ? ' has-error' : '' }}">
                            <label for="addressLine3" class="col-md-4 control-label">addressLine3</label>

                            <div class="col-md-6">
                                <input id="addressLine3" type="text" class="form-control" name="addressLine3" value="{{ old('addressLine3') }}" required >

                                @if ($errors->has('addressLine3'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('addressLine3') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <!-- Enter dateOfBirth-->
                        <div class="form-group{{ $errors->has('dateOfBirth') ? ' has-error' : '' }}">
                            <label for="dateOfBirth" class="col-md-4 control-label">dateOfBirth</label>

                            <div class="col-md-6">
                                <input id="dateOfBirth" type="text" class="form-control" name="dateOfBirth" value="{{ old('dateOfBirth') }}" required >

                                @if ($errors->has('dateOfBirth'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('dateOfBirth') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <!-- Enter mobileNo-->
                        <div class="form-group{{ $errors->has('mobileNo') ? ' has-error' : '' }}">
                            <label for="mobileNo" class="col-md-4 control-label">mobileNo</label>

                            <div class="col-md-6">
                                <input id="mobileNo" type="text" class="form-control" name="mobileNo" value="{{ old('mobileNo') }}" required >

                                @if ($errors->has('mobileNo'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('mobileNo') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <!-- Enter homeNo-->
                        <div class="form-group{{ $errors->has('homeNo') ? ' has-error' : '' }}">
                            <label for="homeNo" class="col-md-4 control-label">homeNo</label>

                            <div class="col-md-6">
                                <input id="homeNo" type="text" class="form-control" name="homeNo" value="{{ old('homeNo') }}" required >

                                @if ($errors->has('homeNo'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('homeNo') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <!-- Enter authLevel-->
                        <div class="form-group{{ $errors->has('authLevel') ? ' has-error' : '' }}">
                            <label for="authLevel" class="col-md-4 control-label">authLevel</label>

                            <div class="col-md-6">
                                <input id="authLevel" type="text" class="form-control" name="authLevel" value="{{ old('authLevel') }}" required >

                                @if ($errors->has('authLevel'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('authLevel') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <!-- Enter passportID-->
                        <div class="form-group{{ $errors->has('passportID') ? ' has-error' : '' }}">
                            <label for="passportID" class="col-md-4 control-label">passportID</label>

                            <div class="col-md-6">
                                <input id="passportID" type="text" class="form-control" name="passportID" value="{{ old('passportID') }}" required >

                                @if ($errors->has('passportID'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('passportID') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <!-- Enter NIC-->
                        <div class="form-group{{ $errors->has('NIC') ? ' has-error' : '' }}">
                            <label for="NIC" class="col-md-4 control-label">NIC</label>

                            <div class="col-md-6">
                                <input id="NIC" type="text" class="form-control" name="NIC" value="{{ old('NIC') }}" required >

                                @if ($errors->has('NIC'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('NIC') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        

                        

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
