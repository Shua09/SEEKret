@extends('layouts.master')
@section('content')
@include('includes.message-block')

<style>
    html, body {
        padding: 0%;
        margin: 0%;
        overflow-x: hidden;

        font-family: Yrsa;
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

    /* JOB PLACEMENT CARDS */
    #card-joblisting{
        background-color: #BDCDD6; 
        border-radius: 15px;

        
        /* margin: auto;
        padding: 2%; */

        /* width: 380px; */
        /* height: 20px; */
        border: solid 3px; 
        border-color: #07031C;
        box-shadow: 0px 0px 8px 1px rgba(185, 185, 185, 0.75);
    }

    /* #card-text{
            color: #5F5E5E;
    } */

    /* #work-at-adu #jobs180 #adupartners{
            height: 20px;
    } */

    hr{
            height: 2px;
            border-style: solid;
            /* border-color: #FFFFFF; */
            background-color: #FFFFFF;

    }
    img{
        width: 15%;
        aspect-ratio:3/2;
        object-fit:contain;
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
                                             
                    </p>
                    <hr>
                </div>
            </div>
        </div>
        
<nav class="navbar navbar-expand-lg py-1 px-5" style="background-color: #E7E7E7; box-shadow: 0 0px 10px 2px #637194; align-content:flex-end;">
  <div class="container-fluid">
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav mx-2">
        <li class="nav-item">
        @if($user && $user->role == 1)
        <a href="{{ route('listings.create') }}"class="nav-link" >Post Job</a>
        @endif  
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Tags
          </a>
          <ul class="dropdown-menu">
          @foreach($tags as $tag)
                                <li><a href="{{ route('listings.listing', ['tag' => $tag->slug]) }}">{{ $tag->name }}</a></li>
                            @endforeach
          </ul>
        </li>
      </ul>
      <form class="d-flex"  action="{{ route('listings.listing') }}" method="get">
      <input class="form-control me-2" type="text" id="s" name="s" value="{{ request()->get('s') }}" placeholder="Search" aria-label="Search"
        style="border-radius: 30px; border:solid 1px; border-color:#07031C;">
      <button class="btn mx-2" type="submit" style="background-color: #07031c; color: #FFFFFF;">Search</button>
    </form>
    </div>
  </div>
</nav>


<section class="container px-5 py-12 mx-auto">

       
                    
        <div class="mb-12"> 
            
      
            <h2 class="text-2xl font-medium text-gray-900 title-font px-4">All jobs ({{ $listings->count() }})</h2>
        </div>
        <hr>
        {{-- old container 2 --}}
        <div class="container-xxl-fluid col-lg-12" id="hero-content">
            <div class="cards text-center" style="">
                <div class="grid" style="">
                    <div class="row h-100 g-5" style="margin-top: 1%; margin-bottom: 1%;">


            @foreach($listings as $listing)
                <!-- CARD -->
                <div class="col-sm-3 col-md-2 col-lg-4 mb-1 mb-sm-0">
                            <div id="card-joblisting" class="my-3 px-2 py-3">
                                <a href="{{ route('listings.show', $listing->slug) }}" class="py-5 px-4 flex flex-wrap md:flex-nowrap">
                                    <div class="md:w-16 md:mb-0 mb-6 mr-4 flex-shrink-0 flex flex-col">
                                        <img src="/storage/{{ $listing->logo }}" alt="{{ $listing->company }}" class="w-16 h-16 rounded-full object-cover mb-3"
                                            style="width:80%; height:80%; border: solid 0.5px;border-radius: 15px; border-color:#07031C;">
                                    </div>
                                    <div class="md:w-1/2 mr-8 flex flex-col items-start justify-center">
                                        <h2 class="text-xl font-bold text-gray-900 title-font mb-1">{{ $listing->title }}</h2>
                                        <p class="leading-relaxed text-gray-900">
                                        {{ $listing->company }} &mdash; <span class="text-gray-600">{{ $listing->location }}</span>
                                        </p>
                                    </div>
                                    <div class="md:flex-grow mr-8 flex items-center justify-start">
                                    @foreach($listing->tags as $tag)
                                            <span class="inline-block ml-2 tracking-wide text-xs font-medium title-font py-0.5 px-1.5 border border-indigo-500 uppercase">
                                            {{ $tag->name }}
                                            </span>
                                    @endforeach
                                    </div>
                                    <span class="md:flex-grow flex items-center justify-end">
                                        <span>{{ $listing->created_at->diffForHumans() }}</span>
                                    </span>
                                </a>
                            </div>
                        </div>
            @endforeach
                    </div>
                </div>
            </div>
        </div>




        <div id="morejobs" class="text-center" style="display: block;">
                    <a href="/IncompletePage" class="user-select-none" style="color: #3f3f3f; font-size:1.2em; font-weight: bold;">More Placement Jobs</a>
                </div>
        </div>
    </div>

    {{-- OTHER WORKS --}}
    <div class="container-xxl-fluid" style="margin: auto; padding-left: 7%; padding-right: 7%">
        <hr style="height: 2px; background-color:#1b1b1b; color:#1b1b1b;">
    </div>

    <div class="container-xxl-fluid col-lg-12 py-3">
        <div class="grid justify-content-center" style="">
            <div class="row h-100 text-center row-cols-xs-1 row-cols-sm-1 row-cols-lg-3 g-5 px-5"
                style="margin-top: 1%; margin-bottom: 1%;">
                <div class="col-sm-1 col-lg-4 mb-sm-0">
                    <a href="/workadu">
                        <img id="work-at-adu" href="/IncompletePage" src="{{ asset('assets/images/job/ADU-work.png') }}" style="height: auto; width: 380px;">
                    </a>
                </div>
                <div class="col-sm-1 col-lg-4 mb-sm-0">
                    <a href="https://schools.jobs180.com/ADU">
                        <img id="jobs180" href="/IncompletePage" src="{{ asset('assets/images/job/ADU-Jobs180.png') }}" style="height: auto; width: 380px;">
                    </a>
                </div>
                <div class="col-sm-1 col-lg-4 mb-sm-0">
                    <a href="/partneredindustries">
                        <img id="adu-partners" src="{{ asset('assets/images/job/ADU-IP.png') }}" style="height: auto; width: 380px;">
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection