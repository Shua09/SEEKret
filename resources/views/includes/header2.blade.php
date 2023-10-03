<header>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>


    <style>
        @media screen and (min-width: 100px) {
            .navbar .container-fluid{
                flex-direction: column;

                padding: 0%;
                margin: 0%  ;
                
                
                /* width: fit-content; */
                /* overflow-x: hidden;
                overflow-y: hidden; */
            }
        }
        .navbar{
            /* height: 100px; */
            /* flex-direction: table; */
            background-color: #000000;
        }
        /* LOGO */
        .navbar-brand{
            padding: 0%;
            margin: 0%;
            width: 100%;
            background-color: #023E73;
        }
        .navbar-brand img{
            width: 250px;
            display: block;
            margin: auto;
        }
        /* HAMBURGER */
        .navbar-toggler{
            align-self: flex-start;
        }

        .navbar .navbar-nav{
            background-color: #000000;
        }

        .navbar .navbar-nav{
            /* margin-top: .5em; */
            /* background-color: black;  */
            margin: 0;
        }

        .navbar .navbar-nav .nav-item{
            /* padding: .5em 1em; */
            padding-left: 10px;
            padding-right: 10px;
            font-family: 'Yrsa';
            font-weight: 600;
            font-size: 1.1em;
        }

        /* MENU */
        .navbar .navbar-nav .nav-link{
            color: #FFFFFF;
            font-size: 1.1em;
        }

        #nav-menu .navbar-nav .nav-link:hover{
            color: #023E73;
            /* background-color: aqua; */
        }

        #nav-menu .navbar-nav .nav-link:active{
            color: #023E73;
            text-decoration: underline;
            /* background-color: aqua; */
        }


        /* CAREER DROPDOWN */
        /* The container <div> - needed to position the dropdown content */
        .dropdown {
        position: relative;
        display: inline-block;
        }

        /* .dropdown:hover{
            background-color: #d70202;
        } */

        /* Dropdown Content (Hidden by Default) */
        .dropdown-menu {
        display: none;
        position: absolute;
        min-width: 200px;
        box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
        z-index: 1;
        }

        /* Links inside the dropdown */
        .dropdown-menu a {
        color: #FFFFFF;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
        }
        .dropdown:hover .dropdown-menu {
            display: block;
            padding-left: 30%;
            background-color: #000000;
            color: #FFFFFF;
            font-family: 'Yrsa';
            font-weight: 500;
            font-size: 1em;
        }
        .dropdown:hover .dropdown-menu 
        .dropdown-item:hover {
            /* display: block;
            background-color: #000000;
            color: #FFFFFF;
            font-family: 'Yrsa';
            font-weight: 500;
            font-size: 1em;

            margin-top: 1%; */
            background-color: rgba(0, 0, 0, 0);
            color: #023E73; 
            font-weight: 500;
        }



        /* .navbarNav{
            z-index: 100;
            position: fixed;
        } */
    </style>

    <div class="container-xxl-fluid" alt="Header2">
        <nav class="navbar navbar-expand-lg navbar-dark" aria-label="Navbar" id="nav-menu">
            <div class="container-fluid">

                <a class="navbar-brand mx-auto" href="#">
                    <img class="image" src="{{ asset('assets/images/logo-black.png') }}" alt="SEEKret Help Logo">
                </a>

                {{-- <a class="navbar-brand" href="#">Expand at lg</a> --}}

                <button class="navbar-toggler" id="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation" alt="Menu Toggle">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav nav-justified ms-auto mt-1 mb-0">
                        <li class="nav-item">
                            <a class="nav-link" href="/home">HOME</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="/career" id="dropdown-career" data-bs-toggle="dropdown-career" aria-expanded="false">CAREER</a>
                            <ul class="dropdown-menu" aria-labelledby="dropdown-career">
                                <li><a class="dropdown-item" href="/counseling">CAREER COUNSELING</a></li>
                                <li><a class="dropdown-item" href="/jobplacement">JOB PLACEMENT</a></li>
                                <li><a class="dropdown-item" href="/joblisting">JOB LISTINGS</a></li>
                                <li><a class="dropdown-item" href="/partneredindustries">PARTNERED INDUSTRIES</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/counseling">COUNSELING</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/feed">FEED</a>
                            <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="{{route('account')}}" id="dropdown-career" data-bs-toggle="dropdown-career" aria-expanded="false">Account</a>
                            <ul class="dropdown-menu" aria-labelledby="dropdown-career">
                                <li><a class="dropdown-item" href="{{route('logout')}}">Logout</a></li>
                            </ul>
                        </li>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</header>