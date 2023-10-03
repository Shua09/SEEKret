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

            background-color: #FFFFFF;
        }

        #hero{
            font-family: Yrsa;
        }
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
            text-align: justify
        }

        #btn-workadu{
            margin-bottom: 1%; 
            width: 300px;
            border-radius: 30px; 
            border-width: 3px;
            /* font-style: italic; */
            font-weight: 600;
            font-size: 1.2em;
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
    </style>

    {{-- HERO 01 --}}
    <div class="container col-xxl-12 py-5" id="hero">
        <div class="row flex-lg-row justified-content-center g-2">
            <div class="col-lg-4">
                <h1 class="py-5" id="hero-title">Career and <br> Job Placement</h1>
            </div>

            <div class="col-lg-1"></div>

            <div class="col-lg-6">
                <p id="hero-text">
                    The Career and Job Placement Program is a major program that seeks to mentor and open opportunities for students to achieve success in their chosen career or vocation.
                </p>
                <p id="hero-text">
                    An integrated career development program is in place for the students so they can have a clear sense of what they really want to pursue. 
                </p>
                <p id="hero-text">
                    The proper implementation of the program results in the individual's full self-awareness, proper decision-making as to what course to take in college, and what career to pursue after graduation.  
                </p>
            </div>
        </div>
    </div>

    {{-- HERO 02 --}}
    <div class="container-fluid" style="background-color: black; color: white;"> <!--black container-->
        <div class="container col-xxl-12 px-1 py-5" id="hero">
            <div class="row flex-lg-row-reverse justified-content-center g-2">
                <div class="col-lg-4">
                    <h1 class="py-5" id="hero-title" style="text-align: center; padding-right: 5%;">Work at Adu</h1>
                </div>

                <div class="col-lg-1"></div>

                <div class="col-lg-6">
                    <p id="hero-text">
                        Applicants who submit all complete documents required will be prioritized.                        
                    </p>
                    <p id="hero-text">
                        E-mail your applications to recruitment@adamson.edu.ph or send your application letter, comprehensive résumé, photocopy of transcript of records (undergraduate, graduate, and postgraduate) to:
                    </p>
                    <p id="hero-text">
                        Human Resource Management and Development Office
                        Adamson University 900 San Marcelino St., Ermita, Manila 1000                      
                    </p>
                    <p id="hero-text">
                        Telephone number: 8524-2011 local 233                        
                    </p>
                    <br>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                        <a href="/workadu" class="btn btn-outline-light btn-lg px-4 me-md-2 mt-auto user-select-none" id="btn-workadu">
                            View More
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- HERO 03 --}}
    <div class="container col-xxl-12 px-1 py-5" id="hero">
        <div class="row flex-lg-row justified-content-center g-2">
            <div class="col-lg-4">
                <h1 class="py-5" id="hero-title">Placement</h1>
            </div>

            <div class="col-lg-1"></div>

            <div class="col-lg-6">
                <p id="hero-text">
                    For graduating students, we offer job postings for different fields from our industry partners.
                <p>
                <p id="hero-text">
                    Book a Counseling to know about the current job openings 
                    for OJT and Internship:
                <p>
                <br>           
                <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                    <!-- <button type="button" class="btn btn-primary btn-lg px-4 me-md-2">Primary</button> -->
                    <a href="/incompletepage" class="btn btn-outline-dark btn-lg px-4 me-md-2 mt-auto user-select-none" id="btn-schedule">
                        Schedule a Consultation
                    </a>
                    <a href="listing" class="btn btn-outline-dark btn-lg px-4 me-md-2 mt-auto user-select-none" id="btn-viewlisting">
                        View Listings
                    </a>
                </div>
            </div>
        </div>
    </div>

@endsection