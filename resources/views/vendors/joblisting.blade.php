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

        
        /* margin: auto;
        padding: 2%; */

        width: 380px;
        /* height: 20px; */
        border-radius: 20px;
        border-width: 3px;
        border-color: #07031C;
        box-shadow: 0px 0px 8px 1px rgba(185, 185, 185, 0.75);
    }

    #card-text{
        color: #5F5E5E;
    }

    #work-at-adu #jobs180 #adupartners{
        height: 20px;
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
                    <h1 class="py-2" id="hero-header-title">Job Openings</h1>
                    <p id="hero-header-text" style="color: #E7E7E7">
                        For graduating students, we display job postings for different fields from our industry partners.
                        <br>
                        We have job postings for the following positions:                        
                    </p>
                    <hr>
                </div>
            </div>
        </div>

        @if($user && $user->role == 1)
                                                    <form action="{{ route('joblist.create') }}" method="post">
                                                    <div class="form-group">
                                                        <textarea class="form-control" name="joblist_title" id="new-joblist" rows="5" placeholder="Job Title"></textarea>
                                                        <textarea class="form-control" name="joblist_company" id="new-joblist" rows="5" placeholder="Job Company"></textarea>
                                                        <textarea class="form-control" name="joblist_description" id="new-joblist" rows="5" placeholder="Job Description"></textarea>
                                                        <textarea class="form-control" name="joblist_additionalinfo" id="new-joblist" rows="5" placeholder="Job Additional Information"></textarea>
                                                        <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                                                        <input type="radio" class="btn-check" name="btnradio" id="btnradio1" autocomplete="off" checked>
                                                        <label class="btn btn-outline-primary" for="btnradio1">Radio 1</label>

                                                        <input type="radio" class="btn-check" name="btnradio" id="btnradio2" autocomplete="off">
                                                        <label class="btn btn-outline-primary" for="btnradio2">Radio 2</label>

                                                        </div>
                                                    </div>
                                                        <button type="submit" class="btn btn-primary">Create Job Listing</button>
                                                        <input type="hidden" value="{{ Session::token() }}" name="_token">
                                                    </form>
@endif
    {{-- JOB LISTINGS --}}
        <div class="container-xxl-fluid col-lg-12 py-5 px-5 g-2" id="hero-content">
            <div class="cards text-center" style="">
                <div class="grid text-center" style="padding-left: 2.5%;">
                    <div class="row h-100 text-center row-cols-xs-1 row-cols-sm-1 row-cols-lg-3 g-2 px-5" style="margin-top: 1%; margin-bottom: 1%;">
                        <!-- CARD 1 -->

                        @foreach($joblists as $joblist)
                        <div class="col-sm-4 mb-4 mb-sm-0">
                            <div class="card h-100" id="card-joblisting">
                                <div class="card-body d-flex flex-column">
                                    <h2 class="card-title user-select-none py-0" id="card-title" style="font-size: 1.5em; font-weight: bold;">
                                    {{ $joblist->joblist_title }} <br> {{ $joblist->joblist_company }}
                                    </h2>
                                    <hr style="height: 3px; border-style:solid; background-color: #07031C; margin: 0;">
                                    <p class="card-text user-select-none" id="card-text" style="text-align: left;">
                                        <ul style="margin: auto; font-size: 18px; font-weight: bold; text-align: left;">
                                            <li>{{ $joblist->joblist_description }}</li>
                                        </ul>
                                    </p>
                                    <div id="viewdetails" style="display: flex; justify-content: center; align-items: flex-end;">
                                    <button type="submit" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#viewdetails-modal">View details</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                
                        <div class="modal fade" tabindex="-1" role="dialog" id="viewdetails-modal">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                
                                        <div class="modal-header">
                                            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            <h4 class="modal-title">Job Description</h4>
                                        </div>
                                        <div class="modal-body">
                                        <section class="row new-post">
                                            <div class="col-sm-4 mb-4 mb-sm-0">
                                                <div class="card h-100" id="card-joblisting">
                                                    <div class="card-body d-flex flex-column">
                                                        <h2 class="card-title user-select-none py-0" id="card-title" style="font-size: 1.5em; font-weight: bold;">
                                                        {{ $joblist->joblist_title }} <br> {{ $joblist->joblist_company }}
                                                        </h2>
                                                        <hr style="height: 3px; border-style:solid; background-color: #07031C; margin: 0;">
                                                        <p class="card-text user-select-none" id="card-text" style="text-align: left;">
                                                            <ul style="margin: auto; font-size: 18px; font-weight: bold; text-align: left;">
                                                                <li>{{ $joblist->joblist_description }}</li>
                                                            </ul>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                        </div>
                                        <div class="modal-footer">
                                                <button href= "/IncompletePage" class="btn btn-primary">Send in your Resume</button>
                                                <input type="hidden" value="{{ Session::token() }}" name="_token">
                                        </div>
                                    
                                </div><!-- /.modal-content -->
                            </div><!-- /.modal-dialog -->
                        </div><!-- /.modal -->
                        

                        @endforeach

                        


                    </div>
                </div>

                <br>

                <div id="viewdetails" style="display: inline-block; justify-content: center; align-items: flex-end;">
                    <a href="/IncompletePage" class="user-select-none" style="color: #3f3f3f; font-size:1.2em; font-weight: bold;">More Placement Jobs</a>
                </div>
        </div>
    </div>

    <div class="container-xxl-fluid" style="margin: auto; padding-left: 7%; padding-right: 7%">
        <hr style="height: 2px; background-color:#1b1b1b; color:#1b1b1b;">
    </div>

    <div class="container-xxl-fluid col-lg-12 py-5 px-5">
        <div class="grid justify-content-center" style="">
            <div class="row h-100 text-center row-cols-xs-1 row-cols-sm-1 row-cols-lg-3 g-0 px-5" 
                style="margin-top: 1%; margin-bottom: 1%;">
                <div class="col-sm-4 mb-sm-0">
                    <a href="/workadu">
                        <img id="work-at-adu" href="/IncompletePage" src="{{ asset('assets/images/job/ADU-work.png') }}" style="height: auto; width: 380px;">
                    </a>
                </div>
                <div class="col-sm-4 mb-sm-0">
                    <a href="https://schools.jobs180.com/ADU">
                        <img id="jobs180" href="/IncompletePage" src="{{ asset('assets/images/job/ADU-Jobs180.png') }}" style="height: auto; width: 380px;">
                    </a>
                </div>
                <div class="col-sm-4 mb-sm-0">
                    <a href="/partneredindustries">
                        <img id="adu-partners" src="{{ asset('assets/images/job/ADU-IP.png') }}" style="height: auto; width: 380px;">
                    </a>
                </div>
            </div>
        </div>
    </div>    
@endsection