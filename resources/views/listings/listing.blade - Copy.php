@extends('layouts.master')
@section('content')
@include('includes.message-block')





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
        
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Tags
          </a>
          <ul class="dropdown-menu">
          
                                <li><a href="#">Tags</a></li>
                                <li><a href="#">Tags</a></li>
                                <li><a href="#">Tags</a></li>
                          
          </ul>
        </li>
      </ul>
      <form class="d-flex"  action="#" method="get">
      <input class="form-control me-2" type="text" id="s" name="s" placeholder="Search" aria-label="Search">
      <button class="btn" type="submit">Search</button>
    </form>
    </div>
  </div>
</nav>







<section class="container px-5 py-12 mx-auto">

       
                    
        <div class="mb-12"> 
            
  
            <h2 class="text-2xl font-medium text-gray-900 title-font px-4">All jobs (999)</h2>
        </div>
        <hr>
        <div class="-my-6">
           
            
                <a
                    href="#"
                    class="py-6 px-4 flex flex-wrap md:flex-nowrap border-b border-gray-100 {{ $listing->is_highlighted ? 'bg-yellow-100 hover:bg-yellow-200' : 'bg-white hover:bg-gray-100' }}"
                >
                    <div class="md:w-16 md:mb-0 mb-6 mr-4 flex-shrink-0 flex flex-col">
                        <img src="/storage/image.jpg" alt="logo" class="w-16 h-16 rounded-full object-cover">
                    </div>
                    <div class="md:w-1/2 mr-8 flex flex-col items-start justify-center">
                        <h2 class="text-xl font-bold text-gray-900 title-font mb-1">TITLE</h2>
                        <p class="leading-relaxed text-gray-900">
                            COMPANY &mdash; <span class="text-gray-600">LOCATION</span>
                        </p>
                    </div>
                    <div class="md:flex-grow mr-8 flex items-center justify-start">
                        
                           <span class="inline-block ml-2 tracking-wide text-xs font-medium title-font py-0.5 px-1.5 border border-indigo-500 uppercase {{ $tag->slug === request()->get('tag') ? 'bg-indigo-500 text-white' : 'bg-white text-indigo-500' }}">
                               TAGS
                           </span>
                        
                    </div>
                    <span class="md:flex-grow flex items-center justify-end">
                        <span>Listing created at: time/date</span>
                    </span>
                </a>
                <hr>
           
        </div>
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
    </section>

@endsection