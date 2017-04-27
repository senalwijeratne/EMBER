@extends('layouts.app')

@section('content')
<div class="container" style="text-align:center;">
    <!-- <div class="row"> -->
        <div class="col-md-8 col-md-offset-2">
            <div class="panel-default card">
                <div class="panel-heading"><strong>Login</strong></div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <!-- Enter Email -->
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }} mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <label for="email" class="col-md-4 mdl-textfield__label">E-Mail Address</label>
                            <!-- <div class="col-md-6"> -->
                                <input id="email" type="email" class="mdl-textfield__input" name="email" value="{{ old('email') }}">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            <!-- </div> -->
                        </div>
                        <br/>

                        <!-- Enter Password -->
                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }} mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <label for="password" class="col-md-4 mdl-textfield__label">Password</label>
                            <!-- <div class="col-md-6"> -->
                                <input id="password" type="password" class="mdl-textfield__input" name="password">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            <!-- </div> -->
                        </div>

                        <div class="form-group" style="text-align:justify;">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="pass-remem-checkbox">
                                        <input id="pass-remem-checkbox" type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }} class="mdl-checkbox__input">
                                        <span class="mdl-checkbox__label">Remember Me</span>
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <!-- <div class="col-md-8 col-md-offset-4"> -->
                                <button type="submit" class="btn mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">
                                    Login
                                </button>
                                <br/>
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                  <small>
                                    Forgot Your Password?
                                  </small>
                                </a>
                            <!-- </div> -->
                        </div>
                    </form>
                </div>
            </div>
        </div>
    <!-- </div> -->
</div>

@endsection
