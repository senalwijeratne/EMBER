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

                        <div class="form-group{{ $errors->has('firstname') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">First Name</label>

                            <div class="col-md-6">
                                <input id="firstname" type="text" class="form-control" name="firstname" value="{{ old('firstname') }}" required autofocus>

                                @if ($errors->has('firstname'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('firstname') }}</strong>
                                    </span
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('secondname') ? ' has-error' : '' }}">
                            <label for="secondname" class="col-md-4 control-label">Middle Name</label>

                            <div class="col-md-6">
                                <input id="secondname" type="text" class="form-control" name="secondname" value="{{ old('secondname') }}" required autofocus>

                                @if ($errors->has('secondname'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('secondname') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('lastname') ? ' has-error' : '' }}">
                            <label for="lastname" class="col-md-4 control-label">Last Name</label>

                            <div class="col-md-6">
                                <input id="lastname" type="text" class="form-control" name="lastname" value="{{ old('lastname') }}" required autofocus>

                                @if ($errors->has('lastname'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('lastname') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('initials') ? ' has-error' : '' }}">
                            <label for="initials" class="col-md-4 control-label">Initials</label>

                            <div class="col-md-6">
                                <input id="initials" type="text" class="form-control" name="initials" value="{{ old('finitials') }}" required autofocus>

                                @if ($errors->has('initials'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('initials') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('addressline1') ? ' has-error' : '' }}">
                            <label for="addressline1" class="col-md-4 control-label">Address Line 3</label>

                            <div class="col-md-6">
                                <input id="addressline1" type="text" class="form-control" name="add1" value="{{ old('addressline1') }}" required autofocus>

                                @if ($errors->has('addressline1'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('addressline1') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('addressline2') ? ' has-error' : '' }}">
                            <label for="addressline2" class="col-md-4 control-label">Address Line 2</label>

                            <div class="col-md-6">
                                <input id="addressline2" type="text" class="form-control" name="add2" value="{{ old('addressline2') }}" required autofocus>

                                @if ($errors->has('firstname'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('addressline2') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('addressline3') ? ' has-error' : '' }}">
                            <label for="addressline3" class="col-md-4 control-label">Address Line 3</label>

                            <div class="col-md-6">
                                <input id="addressline3" type="text" class="form-control" name="add3" value="{{ old('addline3') }}" required autofocus>

                                @if ($errors->has('addressline3'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('addressline3') }}</strong>
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

                        <div class="form-group{{ $errors->has('dob') ? ' has-error' : '' }}">
                            <label for="dob" class="col-md-4 control-label">Date Of Birth</label>

                            <div class="col-md-6">
                                <input id="dob" type="text" class="form-control" name="dob" value="{{ old('dob') }}" required autofocus>

                                @if ($errors->has('dob'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('dob') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('mobileNo') ? ' has-error' : '' }}">
                            <label for="mobileNo" class="col-md-4 control-label">Mobile No</label>

                            <div class="col-md-6">
                                <input id="mobileNo" type="text" class="form-control" name="mobileNo" value="{{ old('mobileNo') }}" required autofocus>

                                @if ($errors->has('mobileNo'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('mobileNo') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('homeNo') ? ' has-error' : '' }}">
                            <label for="homeNo" class="col-md-4 control-label">Home No</label>

                            <div class="col-md-6">
                                <input id="homeNo" type="text" class="form-control" name="homeNo" value="{{ old('homeNo') }}" required autofocus>

                                @if ($errors->has('homeNo'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('homeNo') }}</strong>
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

                        <div class="form-group{{ $errors->has('nic') ? ' has-error' : '' }}">
                            <label for="nic" class="col-md-4 control-label">NIC</label>

                            <div class="col-md-6">
                                <input id="nic" type="text" class="form-control" name="nic" value="{{ old('nic') }}" required autofocus>

                                @if ($errors->has('nic'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('nic') }}</strong>
                                    </span>
                                @endif
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