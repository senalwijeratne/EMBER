<!doctype html>
<head>
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

        body {background-color: rgb(255, 140, 102);z-index:1;overflow-y:hidden;overflow-x:hidden;}
    </style>
</head>

<body> 


<div class="flex-center position-ref full-height">
           
                <div class="top-right links">
                   
                        <a href="{{ url('/home') }}">Home</a>
                    
                        <a href="{{ url('/login') }}">Login</a>
                        <a href="{{ url('/register') }}">Register</a>
                   
                </div>
         

            <div class="content">
                <div class="title m-b-md">
                    Ember
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Documentation</a>
                    <a href="{{ url('/test') }}">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <!-- <a href="https://github.com/laravel/laravel">GitHub</a> -->
                </div>
            </div>
        </div>
    
    <ul class="bubbles">
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
    </ul>

</body>