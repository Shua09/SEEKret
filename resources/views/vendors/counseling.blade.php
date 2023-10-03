@extends('layouts.master')
@section('title')
COUNSELING
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
        }

        /* COUNSELING SERVICES */
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
            margin: auto;
            padding: 2%;

            width: 340px;
            height: 80px;
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
                height: px;
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

        /* SCHEDULE */
        #csched{
            font-family: Yrsa;
        }
        #Sheader{
            font-size: 45px;
            font-weight: bold;
        }
        #btn-schedulenow{
            width: 275px;
            height: 55px;
            padding: 2%;

            border-radius: 30px;
            border-width: 3px;
            font-weight: medium;
            font-size: 1.4em;
            font-weight: bold;
        }
            #btn-schedulenow:hover{
                background-color: #FFFFFF;
                color: #07031C;
                box-shadow: 0px 0px 8px 2px #000000bf;
                transform: scale(1.02);
            }
        #Sright{
            /* float: inline-end; */
            /* align-self: flex-end; */
            align-content: center;
            float: right;
        }
        #counseling{
            height: 80px;
            width: auto;
            align-self: center;
        }

        /* SEMI-ELLIPSE */
        #semi-ellipse{
            margin-top: 3%;
            padding-top: 2%;
            padding-bottom: 1%;
            background-color: #BDCDD6;
            display: flex;
            align-items: flex-end;

            height: 7%;
            width: 100%;

            border-top-left-radius: 50%;
            border-top-right-radius: 50%;
        }
        #osa-text{
            font-weight: bold;
            /* font-size: large; */
            color:#07031C;
            line-height: 20px;
            align-items: center;
        }
        #osa-link{
            color: #0035a8;
            /* line-height: 10px; */
        }
        /* #osa-text #osa-link{
            line-height: 4px;
        } */
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
        
        <section id="Counseling Services">
            <div class="container-fluid-xxl " id="CShero" style="color: #07031C;">
                <div class="row g-lg-6 py-3 text-center">
                    <div class="row">
                        <h2 id="CSheader">What We Do</h2>
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
                                        <h2 class="card-title">Counseling</h2>
                                        <br>
                                        <table id="CScontent" style="text-align: left; line-height: 20px;">
                                            <tr>
                                                <th> <h5>TYPES:</h5> </th>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <ul style="font-size: 1.2em; padding-left: 50px;">
                                                        <li>Personal Counseling</li> 
                                                        <li>Academic Counseling</li>
                                                        <li>Career Counseling</li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th> <h5>MODES:</h5> </th>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <ul style="font-size: 1.2em; padding-left: 50px;">
                                                        <li>Online Counseling</li> 
                                                        <li>Face-to-Face Counseling</li>
                                                    </ul>
                                                </td>
                                            </tr>
                                        </table>                                   
                                    </div>
                                </div>
                            </div>
                            {{-- CARD 2 --}}
                            <div class="col-3">
                                <div class="card h-100" >
                                    <div class="card-body">
                                        <img class="card-img-top mb-3" id="JPimage" src="{{ asset('assets/images/guidance/briefcase.png') }}" alt="Job Placement Image">
                                        <h2 class="card-title">Career Help</h2>
                                        <h5 class="card-text py-5" style="text-align:justify;">
                                            Aid for the Students, in terms of
                                            Career Counseling, Help with Job Placement, 
                                            and Knowing the Industry Partners of Adamson University. 
                                        </h5>
                                    </div>
                                </div>
                            </div>
                            {{-- CARD 3 --}}
                            <div class="col-3">
                                <div class="card h-100" >
                                    <div class="card-body">
                                        <img class="card-img-top mb-3" id="PIimage" src="{{ asset('assets/images/guidance/partner.png') }}" height="60" alt="Partnered Industries Image">
                                        <h2 class="card-title">Programs &<br>Services</h2>
                                        <h5 class="card-text py-5" style="text-align:justify;">
                                            Programs and Seminars to 
                                            brief students and interact with them.
                                        </h5>                                
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </section>

        <section id="CSched">
        {{-- GUIDANCE INFO --}}
        <div class="container-xxl-fluid" id="csched" style="background-color: #07031C; color: white;">
            <div class="row g-lg-7" style="padding-top: 3%">
                <div class="col-7 col-sm- mx-auto" style="padding-left: 4%">
                    <div class="row">
                        <h3 id="Sheader">Want a Counseling Session?</h3>
                    </div>
                    <br>
                    <a href="/incompletepage" class="btn btn-light btn-lg px-2 py-2 me-md-1 mt-auto user-select-none" id="btn-schedulenow">
                        SCHEDULE NOW
                    </a>
                </div>
                
                <div class="col-lg-2"></div>
                
                {{-- SIDE SECTION --}}
                <div class="col-sm-3 col-lg-3 text-center mx-auto" id="Sright">
                    <img class="img-fluid" id="counseling" src="{{ asset('assets/images/guidance/counseling-gray.png') }}" alt="Counseling Icon" loading="lazy">
                    <h6>Do you want to talk to someone?</h6>
                    <h6>Are you facing any challenges?</h6>
                    <h6 style="color: #75a2ba">Why aren't we talking about it?</h6>
                </div>

                {{-- SEMI-ELLIPSE --}}
                <div class="row text-center" id="semi-ellipse">
                    <h5 id="osa-text">If you want to report something or someone — do not use this site</h5>
                    <h5 id="osa-text">
                        Direct it to 
                        <a id="osa-link" href="#">OSA</a> 
                    </h5>
                </div>
                
            </div>
        </div>
    </section>   
@endsection