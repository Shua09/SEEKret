@extends('layouts.master')
@section('title')
chat
@endsection

@section('content')
<style>
    .name-image{
        width:35px;
        height:35px;
        color: #ffffff;
        border-radius:50%;
        font-weight:bold;
        padding:5px;
        display:inline-block;
    }
</style>

    
        <section class="row chat-row">
            <div class="col-md-3">
                <div class="users">
                    <h5>Users</h5>
                    <ul class="List-group List-chat-item">
                    @if($users->count())
                     @foreach($users as $user)
                        <li class="chat-user-List">
                            <a href="">
                                <div class="chat-image">
                                    <div class="name-image bg-primary">
                            
                                    </div>
                                </div>
                            {{$user->username}}
                            </a>
                        </li>
                    @endforeach
                    @endif
                    </ul>
                </div>
            </div>
        </section>
   
@endsection
