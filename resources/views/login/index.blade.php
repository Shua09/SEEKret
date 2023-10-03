@extends('layouts.master')
@section('content')
@include('includes.message-block')
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <title>Welcome page</title>

    <style>
        html,
        body{
            height: 100%;
            margin: 0;
            /* overflow-y: hidden; */
            overflow-x: hidden;
        }

        *{
            margin: 0;
        }

        /* LEFT CONTAINER */
        col, #LeftContainer{
            background-color: beige;
            height: 100vh;
            text-align: center;

            margin: auto;
            /* padding: 5%; */

            padding-top: 4%;
            padding-left: 5%;
            padding-right: 5%;
            padding-bottom: 5%;
        }
        /* IMAGE */
        #slogan{
            /* height: 90px;  */
            /* width: auto; */
        }

        /* RIGHT CONTAINER */
        col, #RightContainer{
            background-color: black;
            height: 100vh;
            text-align: center;
            padding: 5%;
        }
        /* LOGIN FORM */
        #login-form{
            /* text-align: center; */
            background-color: #E7E7E7;
            font-family: 'Segoe UI';

            height: fit-content;
            width: fit-content;

            /* padding-left: 15%;
            padding-right: 10%;  */
            padding-top: 5.5%;
            padding-left: 10%;
            padding-right: 10%;
            padding-bottom: 10%;
        }
        /* LOGO */
        .logo{
            /* align-items: center; */
            padding-top: 0%;
        }
        /* TEXTBOXES */
        input{
            width: 200px;
            height: 40px;
            background-color: #E7E7E7;
            border-radius: 2px;
            border-color: #000000;
            font-style: italic;
            /* float: left; */
            padding-left: 2%;

        }
        /* FORGOT PASSWORD */
        #forgotpass{
            float: left;
            color:#606060;
            font-style: italic;
            font-size: 0.9em;
            font-weight: 700;
            /* margin-left: 15px; */
        }
        /* LOGIN BUTTON */
        #btnlogin{
            float: right;
            background-color: #FBFFB1;
            color: #5e5e5e;
            font-size: medium;
            font-weight: 700;
            border-radius: 5px;
            width: 150px;
            height: 35px;
        }
        /* SIGN-UP LINK */
        #signup{
            /* float: left;  */
            color:#5c5c5c;
            /* font-style: italic;  */
            font-size: 0.9em;
            font-weight: 700;
            margin-right: 15px;
            /* text-shadow: 2px 3px 3px rgba(102, 102, 102, 0.3);*/
        }
        /* GUEST BUTTON */
        #btnguest{
            background-color: #243763;
            color: white;
            font-weight: 600;
            font-size: larger;
            border-radius: 5px;
            height: 40px;
            /* padding: 10px; */
        }
        /* LINE DIVIDER */
        hr{
            height: 3px;
            background-color: #242424;
            border: none;
        }
    </style>

</head>
<body>
<div class="container-xxl-fluid">
        <div class="row">
            <div class="col-sm-6" id="LeftContainer">
                <div class="row">
                    <img class="slogan" id="slogan" src="{{ asset('assets/images/slogan.png') }}"></img>
                </div>
            </div>

            <div class="col-sm-6" id="RightContainer">
                <div id="login-form" class="container-fluid">
                <!-- need to change vendors/feed so it can go to the homepage just forback end purposes-->
                    <form method="POST" action="{{ route('signin') }}">
                    @csrf
                        <div class="row" style="padding-left: 5px; padding-right: 5px; margin: auto;">
                            <img class="logo" src="{{ asset('assets/images/logo-black.png') }}" style="height: 90px; width: auto; "></img>
                        </div>
                        <hr>
                        <br>
                        <div class="row" style="padding: 10px;">
                            <input type="text" name="username" id="username" placeholder="Username" required autofocus>
                        </div>
                        <div class="row" style="padding: 10px;">
                            <input type="password" name="password" id="password" placeholder="Password" required>
                        </div>
                        <!-- <br> -->
                        <div class="row">
                            <div class="col">
                                <a class="forgotpass" id="forgotpass" href="#">
                                    Forgot Password?
                                </a>
                            </div>
                            <div class="col"></div>
                            <div class="col"></div>

                        </div>
                        <br>
                        <div class="row">
                            <div class="col"></div>
                            <div class="col"></div>
                            <div class="col">
                            <button type="submit" class="btncenter" name="Login">
                                Login
                            </button>
                            </div>
                        </div>
                    </form>
                        <div class="row">
                            <div class="col"></div>
                            <div class="col"></div>
                            <div class="col">
                                <a class="signup" id="signup" href="{{ route('register') }}">
                                    Sign Up Now
                                </a>
                            </div>
                        </div>
                        <br>
                        <hr>
                        <div class="row" style="padding: 10px;">
                        <form method="GET" action="{{ route('home') }}">
                            <button type="submit" class="btncenter" name="guest">
                                GUEST
                            </button>
                        </form>    
                        </div>
                        <input type="hidden" name="_token" value="{{ Session::token() }}">
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
@endsection