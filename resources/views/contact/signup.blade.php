@extends('layouts.master')
@section('content')


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <title>Registration Page</title>

<!-- STYLE -->
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
            /* padding: 5%; */

            padding-top: 4%;
            padding-left: 5%;
            padding-right: 5%;
            padding-bottom: 3%;
        }
    /* REGISTRATION FORM */
        #reg-form{
            /* text-align: center; */
            background-color: #E7E7E7;
            font-family: 'Segoe UI';

            height: fit-content;
            width: fit-content;

            /* padding-left: 15%;
            padding-right: 10%;  */
            padding-top: 3%;
            padding-left: 10%;
            padding-right: 10%;
            padding-bottom: 5%;
        }
    /* LOGO REGISTER */
        .logo-reg{
            /* align-items: center; */
            padding-top: 0%;
        }

    /* TEXTBOXES */
        input{
            height: 35px;
            background-color: #E7E7E7;
            border-radius: 2px;
            border-color: #474747;
            font-style: italic;
            /* float: left; */
            padding-left: 2%;

        }
        #studentnum, #username,
        #firstname, #lastname,
        #password, #email,
        #password-confirm{
            margin: auto;
            width: 300px;
        }
    /* LOGIN BUTTON */
        .btnright{
            float: right;
            background-color: #FBFFB1;
            color: #5e5e5e;
            font-size: medium;
            font-weight: 700;
            border-radius: 5px;
            width: 150px;
            height: 35px;
        }
    /* LOGIN LINK */
        #login-text{
            float: left;
            color:#606060;
            /* font-style: italic;  */
            font-size: 0.8em;
            font-weight: 700;
            margin-left: 65px;

        }
        #login{
            float: right;
            color:#155f94;
            /* font-style: italic;  */
            font-size: 0.9em;
            font-weight: 800;
            margin-right: 80px;
        }
    /* REGISTER BUTTON */
        .btncenter{
            background-color: #243763;
            color: white;
            font-weight: 600;
            font-size: larger;
            border-radius: 5px;
            height: 40px;
        }
    /* LINE DIVIDER */
        hr{
            height: 3px;
            background-color: #242424;
            border: none;
        }

        #note{
            background-color: #93BFCF;
            color: #00384c;
            font-family: 'Segoe UI';
            font-style: oblique;
            font-weight: 400;

            height: 45px;
            width: fit-content;

            margin-top: 5%;

            padding-top: 2%;
            padding-left: 5%;
            padding-right: 5%;
            padding-bottom: 2%;
        }

        /* .column {
            float: left;
            width: 50%;
        }

        .row:after {
            content: "";
            display: table;
            clear: both;
        } */
    </style>

</head>
</body>
<div class="container-xxl-fluid">
        <div class="row">
        <!-- LEFT CONTAINER -->
            <div class="col-sm-6" id="LeftContainer">
                <div class="row">
                    <img class="slogan" id="slogan" src="{{ asset('assets/images/slogan.png') }}"></img>
                </div>
            </div>
        <!-- RIGHT CONTAINER -->
            <div class="col-sm-6" id="RightContainer">
                
                    <div id="reg-form" class="container-fluid"> 
                            <!-- LOGO -->
                            <div class="row" style="padding-left: 5px; padding-right: 5px; margin: auto; padding-top: 0%;">
                                <img class="logo" src="{{ asset('assets/images/logo-reg.png') }}" style="height: auto; width: 350px; "></img>
                            </div>
                            <hr>
                            <!-- error message nalabas pag may maling input -->
                @if(count($errors)>0)   
                    <div class="row">
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <!-- REGISTRATION FORM -->
                <form method="POST" action="{{ route('signup') }}">
                    @csrf
                        <!-- STUDENT NUMBER -->
                        <div class="row" style="padding: 10px;">
                            <input type="text" name="studentnum" id="studentnum" pattern="[0-9]{9}" minlength="9" maxlength="9" placeholder="Student Number" required autofocus>
                        </div>
                        <!-- USERNAME -->
                        <div class="row" style="padding: 10px;">
                            <input type="text" name="username" id="username" placeholder="Username" required>
                        </div>
                        <!-- EMAIL -->
                        <div class="row" style="padding: 10px;">
                            <input type="email" name="email" id="email" pattern="[a-zA-Z0-9._%+-]+@adamson\.edu\.ph$" placeholder="Email" required>
                        </div>
                        <!-- FIRST NAME -->
                        <div class="row" style="padding: 10px;">
                            <input type="text" name="firstname" id="firstname" placeholder="First Name"  required>
                        </div>
                        <!-- LAST NAME -->
                        <div class="row" style="padding: 10px;">
                            <input type="text" name="lastname" id="lastname" placeholder="Last Name"  required>
                        </div>
                        <!-- PASSWORD -->
                        <div class="row" style="padding: 10px;">
                            <input type="password" name="password" id="password" placeholder="Password" required>
                        </div>
                        <!--CONFIRMPASSWORD-->
                        <div class="row" style="padding: 10px;">
                            <input type="password" name="password_confirmation" id="password-confirm" placeholder="Confirm Password" required autocomplete="new-password">
                        </div>
                        <hr>
                        <!-- REGISTER BUTTON -->
                        <div class="row" style="padding: 10px;">
                        <button type="submit" class="btncenter" name="Register">
                                Signup
                            </button>
                        </div>
            </form>
                        <!-- LOGIN LINK -->
                        <div class="row">
                            <div class="col">
                                <b class="login-text" id="login-text">Already Have an Account?</b>
                                <a class="login" id="login" href="/">
                                    LOGIN
                                </a>
                            </div>
                        </div>
                        <input type="hidden" name="_token" value="{{ Session::token() }}">
            <!--</form>-->
                </div>

                <!-- NOTE -->
                <div id="note" class="container-fluid">
                    <div class="row">
                        Fun Fact: Your name and student number won't be shown on your profile *wink*
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    </body>
@endsection