@extends('layouts.master')
@section('title')
CAREER
@endsection
@section('content')


<style>
        html, body{
            height: 100%;
            margin: 0;
            overflow-x: hidden;
            /* overflow-y: hidden; */

            background-color: #E7E7E7;
        }
            
        /* CAREER SERVICES */
        #CShero{
            font-family: Yrsa;
        }
        #CSheader{
            font-size: 50px;
            font-weight: bold;
        }
        .cards{
            margin-top: 0.5%; 
            margin-left: 2%; 
            margin-right: 2%; 
            margin-bottom: 2%; 
        }
        .cards .card{
            margin-left: 7%;
            margin-right: 7%;
            padding: 2%;

            width: 340px;
            height: 350px;
            background-color: #BDCDD6;
            border-radius: 20px;
            border-width: 3px;
            border-color: #07031C;
            box-shadow: 0px 0px 15px 3px rgba(185, 185, 185, 0.75);
        }
        .card-title{
            font-weight: bold;
            font-size: 2.3em;
        }
        .card .card-body .card-img-top{
            height: 90px;
            width: auto;
        }
            /* #JPimage{
                height: 75px;
                width: 85px;
            }
            #PIimage{
                height: 75px;
                width: auto;
            } */
        .card-body{
            border-radius: 20px;
            border-width: 3px;
            background-color: #BDCDD6;
            color: #07031C;
        }
        .card .card-body .btn{
            width: 230px;
            height: 50px;
            padding: 0;

            border-radius: 30px; 
            border-width: 3px;
            font-weight: medium; 
            font-size: 1.7em;
            font-weight: bold;
        }
    </style>


<section id="Guidance Info">
            {{-- GUIDANCE INFO --}}
            <div class="container-fluid-xxl " id="guidancehero" style="background-color: #07031C; color: white;">
                <div class="row g-lg-6 py-3 text-center">
                    <div class="col-lg-6" style="padding-left: 4%">
                        
                        <div class="row">
                            <h2 id="GIheader">The Guidance Team</h2>
                        </div>
                        <br>
                        <div class="row justify-content-around">
                            {{-- VISION --}}
                            <div class="col-sm-6" id="visionsection">
                                <h5 class="text-body-primary mb-2" id="vision">Vision</h5>
                                    <p id="visioncontent">
                                        The Center for Guidance Services of Adamson University envisions to be a caring, nurturing and affirming group of persons striving for wholeness, excellence and empowerment of students especially the socially disadvantaged, together with the administrators, faculty, employees and other stakeholders to create a community of disciples for the in-breaking of God's Kingdom in our society.
                                    </p>
                            </div>
                            {{-- MISSION --}}
                            <div class="col-sm-6" id="missionsection">
                                <h5 class="text-body-primary mb-2" id="vision">Mission</h5>
                                    <p id="missioncontent">
                                        The vision shall be achieved through the full and unified implementation of the three main guidance programs namely: Counseling and Group Process, Career and Placement, and Testing and Inventory with its sub programs on Group Process for Special Groups, Resource Mobilization and Development, Guidance Development and Research, and Guidance and Counseling Outreach.                                </p>
                            </div>
                        </div>
                    </div>
                
                    <div class="col-sm-10 col-lg-6">
                        <img class="d-block mx-lg-auto img-fluid px-1" id="guidanceteam" src="{{ asset('assets/images/guidance/guidanceteam.png') }}" alt="Guidance Team" height="450" width="auto" loading="lazy">
                    </div>
                </div>
            </div>
        </section>   
        
        <section id="Career Services">
            <div class="container-fluid-xxl " id="CShero" style="color: #07031C;">
                <div class="row g-lg-6 py-3 text-center">
                    <div class="row">
                        <h2 id="CSheader">Career Services</h2>
                    </div>
                </div>

                {{-- CARDS --}}
                <div class="cards container-xxl-fluid text-center">
                    <div class="grid text-center">                    
                        <div class="row h-100 row-cols-sm-1 row-cols-md-3 g-3 px-5">
                            {{-- CARD 1 --}}
                            <div class="col-3">
                                <div class="card h-100" >
                                    <div class="card-body">
                                        <img class="card-img-top mb-3" id="CCimage" src="{{ asset('assets/images/guidance/counseling.png') }}" alt="Career Counseling Image">
                                        <h2 class="card-title">Career<br>Counseling</h2>
                                        {{-- <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p> --}}
                                        <br>
                                        <a href="careercounseling" class="btn btn-outline-dark btn-lg px-2 me-md-1 mt-auto user-select-none" id="btn-schedule">
                                            Schedule
                                        </a>
                                    </div>
                                </div>
                            </div>
                            {{-- CARD 2 --}}
                            <div class="col-3">
                                <div class="card h-100" >
                                    <div class="card-body">
                                        <img class="card-img-top mb-3" id="JPimage" src="{{ asset('assets/images/guidance/briefcase.png') }}" alt="Job Placement Image">
                                        <h2 class="card-title">Job<br>Placement</h2>
                                        {{-- <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p> --}}
                                        <br>
                                        <a href="jobplacement" class="btn btn-outline-dark btn-lg px-2 me-md-1 mt-auto user-select-none" id="btn-learnmore">
                                            Learn More
                                        </a>
                                    </div>
                                </div>
                            </div>
                            {{-- CARD 3 --}}
                            <div class="col-3">
                                <div class="card h-100" >
                                    <div class="card-body">
                                        <img class="card-img-top mb-3" id="PIimage" src="{{ asset('assets/images/guidance/partner.png') }}" height="60" alt="Partnered Industries Image">
                                        <h2 class="card-title">Partnered<br>Industries</h2>
                                        {{-- <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p> --}}
                                        <br>
                                        <a href="partneredindustries" class="btn btn-outline-dark btn-lg px-2 me-md-1 mt-auto user-select-none" id="btn-explore">
                                            Explore
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </section>
@endsection