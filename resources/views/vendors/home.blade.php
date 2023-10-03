@extends('layouts.master')
@section('content')
    @include('includes.message-block')
    <style>
        html,
        body {
            height: 100%;
            margin: 0;
            /* padding: 0; */
            overflow-x: hidden;
            /* overflow-y: hidden; */
        }

        * {
            margin: 0;
            /* padding: 0; */
        }

        /* CAROUSEL */
        .carousel {
            width: 100%;
            height: auto;
        }

        .carousel-inner>.item>.img {
            width: 100%;
        }

        .carousel .carousel-indicators button {
            width: 15px;
            height: 15px;
            border-radius: 100%;
            background-color: black;
        }

        .carousel-indicators [data-bs-target] {
            border-radius: 50%;
            width: 15px;
            height: 15px;
        }

        #carousel-control-next,
        #carousel-control-prev {
            width: 50px;
            height: 50px;
            margin: auto;
            border-radius: 100%;
            background-color: black;
        }

        /* HERO */
        #highlight {
            font-family: Yrsa;
        }

        #btn-seemore {
            margin-bottom: 1%;
            width: 250px;
            border-radius: 30px;
            border-width: 3px;
            /* font-style: italic; */
            font-weight: 600;
            font-size: 1.5em;
        }
    </style>
    <!-- CAROUSEL -->
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('assets/images/home/banner01.png') }}" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('assets/images/home/banner02.png') }}" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('assets/images/home/banner03.png') }}" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    @if ($user && $user->role == 1)
        <button type="submit" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#banner-modal">Create
            Banner</button>
    @endif


    <form action="{{ route('banner.create') }}" method="post" enctype="multipart/form-data">
        <div class="modal fade" tabindex="-1" role="dialog" id="banner-modal">
            <div class="modal-dialog">
                <div class="modal-content">

                    <div class="modal-header">
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title">Create Banner</h4>
                    </div>
                    <div class="modal-body">
                        <section class="row new-post">
                            <div class="col-md-6 col-md-offset-3">
                                <header>
                                    <h3>What do you have to say?</h3>
                                </header>
                                <div class="form-group">
                                    <textarea class="form-control" name="banner_hash" rows="5" placeholder="Banner Hash"></textarea>
                                    <textarea class="form-control" name="banner_body" rows="5" placeholder="Banner Body"></textarea>
                                    <input class="form-control-file" type="file" name="banner_image" id="banner_image">
                                </div>
                            </div>
                        </section>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Create Banner</button>
                        <input type="hidden" value="{{ Session::token() }}" name="_token">
                    </div>

                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
    </form>

    @include('includes.highlights')

    <!-- modal post nalabas sa taas pag nag edit-->
@endsection
