@extends('layouts.master')
@section('title')
    account
@endsection

@section('content')
    <style>
        html,
        body {
            height: 100%;
            width: 100%;
            margin: 0;
            padding: 0%;
            overflow-x: hidden;
            background-color: #E7E7E7;
        }

        /* CSS styling for the profile */
        .profile {
            background: #BDCDD6;
            /* max-width: 800px; */
            width: 100%;
            margin: 0;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .profile img {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            object-fit: cover;
            margin-bottom: 10px;
        }

        .profile h2 {
            margin: 0;
        }

        .profile h4 {
            margin: 5px 0;
        }

        .profile p {
            margin: 10px 0;
        }

        .profile form {
            margin: 5px;
            flex-grow: 1;
        }

        .profile label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }

        .profile input[type="text"],
        .profile input[type="email"] {
            width: 100%;
            padding: 5px;
            margin-bottom: 10px;
        }

        .profile textarea {
            width: 100%;
            padding: 5px;
            margin-bottom: 10px;
        }

        .profile button {
            width: fit-content;
            height: fit-content;
            padding: 5px;
            float: right;
            /* background-color: #3E4B67; */
            background-color: #07031c;
            color: #FFFFFF;
            border-radius: 5px;
            box-shadow: 1px 2px 4px 3px rgba(169, 169, 169, 0.75);
            font-weight: bold;
            color: #FFFFFF;
        }

        /* Two-column layout */
        .columns {
            display: flex;
            justify-content: space-between;
            column-gap: 53px;
        }

        .user-info {
            flex: 1;
        }

        .edit-form {
            flex: 1;
            background-color: #E7E7E7;
            padding: 2px;
            border-radius: 10px;
        }
    </style>
    <section class="row new-post justify-content-center">
        <div class="container-fluid justify-content-center" style="background-color:#BDCDD6; display:flex;">
            <div class="row profile px-5">
                <div class="col-5 user-info">
                    <header>
                        <h3>Your Account</h3>
                    </header>
                   

                    <img src="{{ asset('storage/public/' . $user->image) }}" alt="Profile Image">


                    <h2>{{ $user->firstname }} {{ $user->lastname }}</h2>
                    <h4>Username: {{ $user->username }}</h4>
                    <p>Email: {{ $user->email }}</p>
                    <p>Student number: {{ $user->studentnum }}</p>
                    <p>Bio: {{ $user->bio }}</p>
                </div>
                <div class="col-7 edit-form px-3 py-3">
                @include('account.updatepassword')
                </div>

                <div class="col-7 edit-form px-3 py-3">
                 @include('account.updateaccount')  
                </div>
            </div>
        </div>
    </section>
@endsection
