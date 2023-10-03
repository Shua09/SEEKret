@extends('layouts.master')

@section('Title')
    SEEKret Help
@endsection

@section('content')

<style>
        html,
        body{
            height: 100%;
            margin: 0;
            overflow-x: hidden;
            /* overflow-y: hidden; */

            background-color: #E7E7E7;
            font-family: Yrsa;
        }

        #hero-header, #hero-content{
            font-family: Yrsa;
            /* text-align: center; */
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


        h2{
            font-weight: bold;
            margin-bottom: 1%;
        }

        img{
            width: 500px;
            height: auto;
            margin: 1%;
        }
    </style>

    {{-- HERO HEADER --}}
    <div class="container-fluid"  style="background-color: #07031C; color: #FFFFFF;"> <!--top container-->
        <div class="container col-xxl-12 px-5 text-center" id="hero-header">
            <div class="row flex-lg-row justified-content-center">
                <h1 class="py-2" id="hero-header-title">Work at Adamson University</h1>
                <p id="hero-header-text" style="color: #E7E7E7">
                    Job Vacancies currently available at Adamson University
                    <br> <br> E-mail your applications to recruitment@adamson.edu.ph or send your application letter, comprehensive résumé, photocopy of transcript of records 
                    <br> (undergraduate, graduate, and postgraduate) to:
                    <br> Human Resource Management and Development Office Adamson University 900 San Marcelino St., Ermita, Manila 1000
                    <br> Telephone number: 8524-2011 local 233                
                </p>
                <hr>
            </div>
        </div>
    </div>

    <div class="container-xxl-fluid text-center px-5 py-5">
        <div class="container-fluid px-5">
            <h2>Senior High School Teachers</h2>
            <img src="{{ asset('assets/images/job/ADU-Work-shs2022.jpg') }}" alt="SHS Job Vacancies Image 1"> 
            <img src="{{ asset('assets/images/job/ADU-Work-shs22022.jpg') }}" alt="SHS Job Vacancies Image 2">
            {{-- <hr style="margin-top: 2%; margin-bottom:2%;"> --}} <br><br>
            <h2>College Faculty Members</h2>
            <img src="{{ asset('assets/images/job/ADU-Work-college2022.jpg') }}" alt="College Job Vacancies Image">
        </div>
    </div>

@endsection