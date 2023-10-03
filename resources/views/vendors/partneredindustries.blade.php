@extends('layouts.master')

@section('Title')
    SEEKret Help
@endsection

@section('content')
{{-- <link rel="stylesheet" href="{{ asset('assets/css/career.css') }}"> --}}
    <style>
        html,
        body{
            height: 100%;
            margin: 0;
            overflow-x: hidden;
            /* overflow-y: hidden; */

            background-color: #E7E7E7;
        }

        #hero-header, #hero-content{
            font-family: Yrsa;
        }

        /* HERO HEADER */
        #hero-header-title{
            text-align: center;
            font-size: 2.5em;
            font-weight: bold;
        }
        #hero-header-text{
            text-align: 
        }

        /* HERO CONTENT */
        #hero-title{
            padding-left: 1%;
            padding: 1%;
            text-align:right; 
            /* align-self:center; */
            /* margin: auto;  */

            font-size: 3em;
            font-weight: bold;
        }
        #hero-text{
            font-size: 1.3em;
            line-height: 30px;
            text-align: justify;
        }

        #btn-schedule, #btn-viewlisting{
            margin-bottom: 1%; 
            width: 300px;
            border-radius: 30px; 
            border-width: 3px;
            /* font-style: italic; */
            font-weight: 600;
            font-size: 1.2em;
        }

        /* JOB PLACEMENT CARDS */
        #card-joblisting{
            background-color: #BDCDD6; 
            border-radius: 15px;

        }

        hr{
            height: 2px;
            border-style: solid;
            /* border-color: #FFFFFF; */
            background-color: #FFFFFF;

        }
    </style>

    {{-- HERO HEADER --}}
        <div class="container-fluid"  style="background-color: #07031C; color: #FFFFFF;"> <!--top container-->
            <div class="container col-xxl-12 px-5 text-center" id="hero-header">
                <div class="row flex-lg-row justified-content-center">
                    <h1 class="py-2" id="hero-header-title">Industry Partners of Adamson University</h1>
                    <p id="hero-header-text" style="color: #E7E7E7">
                        The University has maintained strong partnership with 200+ industry partners which support our Vision and Mission of providing quality Vincentian Education 
                        <br>
                        by consistently participating in on-the-job training and employment/ placement of our students and graduates. 
                        <br>
                        For partnership concerns, please contact the Placement Office at 524-2011 local 232 or 207 or e-mail placement@adamson.edu.ph.                       
                    </p>
                    <hr>
                </div>
            </div>
        </div>

    {{-- INDUSTRY PARTNERS --}}
        @include('includes.industrylist')

@endsection