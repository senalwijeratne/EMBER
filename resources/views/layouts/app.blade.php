<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
  <head>


        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>EMBER</title>

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <!-- Scripts -->
        <script>
            window.Laravel = {!! json_encode([
                'csrfToken' => csrf_token(),
            ]) !!};
        </script>

      <link rel="shortcut icon" href="{{asset('img/ember.png')}}">



      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en">
      <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
      <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.deep_orange-orange.min.css">
      <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
      <link rel="stylesheet" href="{{asset('css/style.css')}}" />

      <style type="text/css">
        html, body {
                  background-color: #fff;
                  color: #636b6f;
                  font-family: 'Raleway', sans-serif;
                  font-weight: 100;
                  height: 100vh;
                  margin: 0;
              }

              .full-height {
                  height: 100vh;
              }

              .flex-center {
                  align-items: center;
                  display: flex;
                  justify-content: center;
                  z-index: 2
              }

              .position-ref {
                  position: relative;
              }

              .top-right {
                  position: absolute;
                  right: 10px;
                  top: 18px;
              }

              .content {
                  text-align: center;
                  color: #ffffff;
              }

              .title {
                  font-size: 84px;
              }

              .links > a {
                  color: #ffffff;
                  padding: 0 25px;
                  font-size: 12px;
                  font-weight: 600;
                  letter-spacing: .1rem;
                  text-decoration: none;
                  text-transform: uppercase;
              }

              .m-b-md {
                  margin-bottom: 30px;
              }


                      .bubbles {
                  position: absolute;
                  top: 0;
                  left: 0;
                  width:100%;
                  height:100%;
                  z-index: 0;
                  -webkit-transform: translateZ(0);
                  transform: translateZ(0);
              }

              .bubbles li {
                  position: absolute;
                  list-style: none;
                  display: block;
                  background-color: rgba(255, 255, 255, 0.15);
                  bottom: -100px;
                  -webkit-animation: square 20s infinite;
                  animation: square 20s infinite;
                  -webkit-transition-timing-function: linear;
                  transition-timing-function: linear;
              }

              .bubbles li:nth-child(1) {
                  width: 40px;
                  height: 40px;
                  left: 20%;
              }
              .bubbles li:nth-child(2) {
                  width: 60px;
                  height: 60px;
                  left: 40%;
                  -webkit-animation-delay: 2s;
                  animation-delay: 2s;
                  -webkit-animation-duration: 17s;
                  animation-duration: 17s;
              }

              .bubbles li:nth-child(3) {
                  width: 10px;
                  height: 10px;
                  left: 60%;
                  -webkit-animation-delay: 4s;
                  animation-delay: 4s;
                  -webkit-animation-duration: 13s;
                  animation-duration: 13s;
              }

              .bubbles li:nth-child(4) {
                  width: 80px;
                  height: 80px;
                  left: 80%;
                  -webkit-animation-delay: 1s;
                  animation-delay: 1s;
                  -webkit-animation-duration: 22s;
                  animation-duration: 22s;
              }

              .bubbles li:nth-child(5) {
                  width: 50px;
                  height: 50px;
                  left: 50%;
                  -webkit-animation-delay: 7s;
                  animation-delay: 7s;
                  -webkit-animation-duration: 12s;
                  animation-duration: 12s;
              }

          @-webkit-keyframes square {
              0% {
                  -webkit-transform: translateY(0);
                  transform: translateY(0);
              }
              100% {
                  -webkit-transform: translateY(-1080px) rotate(630deg);
                  transform: translateY(-1080px) rotate(630deg);
              }
          }

          @keyframes square {
              0% {
                  -webkit-transform: translateY(0);
                  transform: translateY(0);
              }
              100% {
                  -webkit-transform: translateY(-1080px) rotate(630deg);
                  transform: translateY(-1080px) rotate(630deg);
              }
          }

          body {background-color: rgb(96, 125, 139);z-index:1;overflow-y:hidden;overflow-x:hidden;}
      </style>

  </head>
<body>

  <ul class="bubbles">
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
  </ul>

    <div id="app" class="demo-layout mdl-layout mdl-js-layout mdl-layout--fixed-drawer mdl-layout--fixed-header">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        EMBER
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>

    @yield('content')

    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
