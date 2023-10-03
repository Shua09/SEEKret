@extends('layouts.master')

@section('Title')
    SEEKret Help
@endsection

@section('content')
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script>
        $(document).ready(function() {
            var maxLength = 300;
            $(".show-read-more").each(function() {
                var myStr = $(this).text();
                if ($.trim(myStr).length > maxLength) {
                    var newStr = myStr.substring(0, maxLength);
                    var removedStr = myStr.substring(maxLength, $.trim(myStr).length);
                    $(this).empty().html(newStr);
                    $(this).append(' <a href="javascript:void(0);" class="read-more">read more...</a>');
                    $(this).append('<span class="more-text">' + removedStr + '</span>');
                }
            });
            $(".read-more").click(function() {
                $(this).siblings(".more-text").contents().unwrap();
                $(this).remove();
            });
        });
    </script>

    {{-- STYLE --}}
    <style>
        html,
        body {
            margin: 0;
            padding: 0;
            overflow-x: hidden;

            background-color: #E7E7E7;
            color: #000000;
            font-family: Yrsa;
        }

        /* CREATE POST */
        #create-post {
            width: ;
            height: 260px;
            min-height: 200px;
            max-height: 550px;
            background-color: #BDCDD6;
            border: 1px solid #5F5E5E;
            box-shadow: 0px 0px 10px 1px rgba(0, 0, 0, 0.75);
        }

        /* POSTS */
        #post {
            width: ;
            height: fit-content;
            min-height: 200px;
            max-height: 550px;
            background-color: #BDCDD6;
            border: 1px solid #5F5E5E;
            box-shadow: 0px 0px 10px 1px rgba(0, 0, 0, 0.75);
        }

        #post-header {
            vertical-align: top;
            width: ;
            height: 55px;
            background-color: #6096B4;
            user-select: none;
        }

        #post-content {}

        .show-read-more .more-text {
            display: none;
        }

        .read-more {
            font-family: Yrsa;
            font-weight: bold;
            color: #004ca8;
        }

        #post-footer {
            vertical-align: bottom;
            width: ;
            height: 60px;
            background-color: rgba(7, 3, 28, 0.027);
            user-select: none;
        }

        #upvote:hover,
        #downvote:hover {
            transform: scale(1.1);
        }

        #addcomment {
            float: right;
            width: fit-content;
            height: fit-content;
            background-color: #3E4B67;
            box-shadow: 0px 0px 3px 1px rgba(56, 56, 56, 0.75);
            font-weight: bold;
            color: #FFFFFF;
        }

        #addcomment:hover {
            transform: scale(1.05);
        }

        #submitpost {
            float: center;
            /* width: fit-content;
                                height: fit-content; */
            background-color: #3E4B67;
            box-shadow: 0px 0px 3px 1px rgba(56, 56, 56, 0.75);
            font-weight: bold;
            color: #FFFFFF;
        }

        #submitpost:hover {
            transform: scale(1.05);
        }

        hr {
            border: none;
            height: 2px;
            border-style: solid;
            border-bottom: 3px solid #000000;
            color: #000000;
        }

        img {
            width: 15%;
            aspect-ratio: 8/2;
            object-fit: contain
        }

        textarea {
            height: 70px;
        }
    </style>

    <div class="container-fluid justify-content-center">
        <div class="row justify-content-center px-2 py-2">

            {{-- LEFT SECTION --}}
            <div class="col-3 px-4 py-3" style="width:420px; height:fit-content; margin:1%">
                {{-- PROFILE CONTAINER --}}
                <div class="row mb-5" style="width:auto; height:230px; background-color: #FFEBB4; border: 2px solid #5F5E5E;">
                    {{-- PROFILE --}}
                    <div id="user-profile" class="row d-flex">
                        <div class="col-6 d-flex my-auto" style="align-self:flex-start;">
                            <img src="{{ asset('storage/public/' . $user->image) }}" alt="Profile Image"
                                style="align-self:flex-start; object-fit:cover; border-radius:50%; width:65px; height:65px; border:3px solid #000000;">
                            <h5 class="my-auto mx-2" style="font-weight:bold; ">{{ $user->username }}</h5>
                        </div>
                        <div class="col-3" style="align-self:flex-center;"></div>
                        {{-- EDIT --}}
                        <div id="edit-profile" class="col-3 d-flex mx-auto my-2"
                            style="vertical-align:top; align-self:flex-end;">
                            <a href="{{ route('account') }}">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    style="vertical-align:top; align-self:center; transform:scale(1.1);" width="16"
                                    height="16" fill="#5F5E5E" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                    <path
                                        d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                    <path fill-rule="evenodd"
                                        d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                                </svg>
                            </a>
                        </div>
                    </div>

                    <hr class="mx-auto" style="height:5px; width:95%; border-style:solid; color:#000000; margin:0%;">

                    {{-- BIO --}}
                    <div id="user-bio" class="row d-flex justify-content-center" style="">
                        <div class="col-8 d-flex justify-content-center text-center my-1" style="">
                            <p
                                style="vertical-align:top; align-self:center; color:#5F5E5E; font-weight: 600; font-size: 1.1em;">
                                {{ $user->bio }}
                            </p>
                        </div>
                    </div>
                </div>

                @foreach ($banners as $banner)
                    {{-- ANNOUNCEMENT / HIGHLIGHTS CONTAINER --}}
                    <a href="{{ route('home.BannerContent', ['banner' => $banner->id]) }}">
                        <div class="row justify-content-center mx-auto my-auto px-3 py-3"
                            style="width:auto; height:300px; max-height:350px; background-color: #6096B4; border: 2px solid #5F5E5E;">
                            <div class="d-flex justify-content-center" style="background-color: #FFFFFF;">
                                <img src="/storage/public/{{ $banner->banner_image }}" alt="{{ $banner->banner_hash }}"
                                    style="width: 100%; height: 100%; object-stretch: cover;">
                            </div>
                        </div>
                    </a>
                    &nbsp;&nbsp;
                @endforeach


            </div>

            {{-- <div class="col-1"></div> --}}

            {{-- RIGHT SECTION --}}
            <div class="col-8 px-4 py-3" style="width: ; height: fit-content; margin:1%;">

                {{-- CREATE POST --}}
                <div id="create-post" class="row justify-content-center mb-4"
                    style="width: ; height:260px; background-color:#BDCDD6; border: 1px solid #5F5E5E; background-color:rgba(7, 3, 28, 0.027);">
                    <!--Add Post-->

                    {{-- HEADER --}}
                    <div id="create-post-header" class="row d-flex justify-content-center text-center mx-auto mb-2"
                        style="width: ; height:55px; background-color:#6096B4;">
                        {{-- USER --}}
                        <div class="col-3 d-flex my-auto" style="align:left">

                        </div>

                        <form action="{{ route('post.create') }}" method="post" enctype="multipart/form-data">
                            {{-- PRIVACY SETTING || POST OPTIONS? --}}

                            <div class="form-check form-switch form-check-reverse">
                                <input class="form-check-input" type="checkbox" id="private_post" name="private_post">
                                <label class="form-check-label" for="private_post">Private</label>
                            </div>
                    </div>


                    {{-- CONTENT --}}
                    <div id="post-content" class="justify-content-center mx-auto my-1 px-3 py-1"
                        style="vertical-align:middle; width: 90%; height:fit-content;">
                        <div id="content" class="" style="min-height: 80px;">
                            <textarea class="form-control" name="body" id="new-post" rows="5" placeholder="Speak up your mind"></textarea>
                            <input class="form-control-file" type="file" name="post_image" id="post_image">
                        </div>
                    </div>

                    {{-- FOOTER --}}
                    <div class="row d-flex py-2 px-3">
                        <hr class="my-1" style="border-top: 2px solid #07031C;">

                        <div class="d-grid my-auto mx-auto px-5" style="align-self:center;">
                            <button id="submitpost" type="submit" class="d-grid gap-2 py-1" style="">
                                CREATE POST</button>

                            <input type="hidden" value="{{ Session::token() }}" name="_token">
                        </div>
                    </div>
                </div>
                </form>
                <!--Add Post-->
                <hr class="" style="border-top: 3px solid #07031C;">
                @php
                    // Sort the posts by vote_count in descending order
                    $posts = $posts->sortByDesc('vote_count');
                @endphp

                @foreach ($posts as $post)
                    {{-- Check if the post is private and belongs to the logged-in user --}}
                    @if ($post->private == 1 && $post->user_id == Auth::id())
                        {{-- Display the private post for the user --}}

                        {{-- POST 1 --}}
                        <div id="post" class="row justify-content-center mt-4 mb-4" style="">
                            {{-- HEADER --}}
                            <div id="post-header" class="row d-flex justify-content-center text-center my-auto mb-2"
                                style="">
                                {{-- USER --}}
                                <div class="col-3 d-flex my-auto" style="align-self:flex-start;">
                                    <img src="{{ asset('storage/public/' . $post->user->image) }}" alt="Profile Image"
                                        style="align-self:flex-start; object-fit:cover; border-radius:50%; width:40px; height:40px; border:2px solid #000000;">
                                    <h6 class="my-auto mx-2" style="font-weight:bold; font-size:1.3em;">
                                        {{ $post->user->username }}</h6>
                                </div>

                                {{-- TIMESTAMP --}}
                                <div class="col-lg-8 col-xs-0 d-flex justify-content-center"
                                    style="align-self:flex-end; text-align:center;">
                                    <h6 class="mx-auto"
                                        style="vertical-align:text-bottom; font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; font-size:0.8em; font-weight:bold; color:#07031C;">
                                        Private Post</h6>
                                    <h6 class="mx-auto"
                                        style="vertical-align:text-bottom; font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; font-size:0.8em; font-weight:bold; color:#07031C;">
                                        Posted: {{ $post->created_at->diffForHumans() }}</h6>
                                </div>

                                {{-- PRIVACY SETTING || POST OPTIONS? --}}
                                <div class="col-1 d-flex justify-content-center mx-auto my-auto"
                                    style="align-items:center; user-select:none;">



                                    {{-- SPACE IN BETWEEN --}}
                                    &nbsp;&nbsp;

                                    {{-- OPTION || MENU --}}
                                    @if (Auth::user() == $post->user)
                                        <div class="dropdown" data-bs-trigger="click">
                                            <button class="btn dropdown-toggle" type="button" id="optionMenu"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    style="transform:scale(1.5); margin:3%;" width="16"
                                                    height="16" fill="#07031C" class="bi bi-three-dots"
                                                    viewBox="0 0 16 16">
                                                    <path
                                                        d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z" />
                                                </svg>
                                            </button>

                                            <ul class="dropdown-menu" aria-labelledby="optionMenu">
                                                <li><a class="dropdown-item" href="#" class="edit"
                                                        data-bs-toggle="modal" data-bs-target="#edit-modal">Edit</a>
                                                </li>
                                                <li><a class="dropdown-item"
                                                        href="{{ route('post.delete', ['post_id' => $post->id]) }}">Delete</a>
                                                </li>
                                            </ul>

                                        </div>
                                    @endif
                                </div>
                            </div>

                            {{-- CONTENT --}}
                            <div id="post-content" class="justify-content-center text-center mx-auto my-auto px-4 py-2"
                                style="vertical-align:middle; width: 90%; height:fit-content;">
                                <div id="content" class="">
                                    <p class="show-read-more"
                                        style="line-height: 25px; font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; font-size:1.2em; text-align:justify;">
                                        {{ $post->body }}
                                    </p>

                                    @if ($post->type == 1)
                                        <img src="{{ asset('storage/public/' . $post->post_image) }}"
                                            class="image-responsive" style="width: 100%;">
                                    @endif
                                </div>
                            </div>

                            {{-- FOOTER --}}
                            <div id="post-footer" class="py-1" style="">
                                <hr class="my-1" style="border-top: 2px solid #07031C;">
                                <div class="row d-flex justify-content-center text-center">

                                    {{-- SPACE  --}}
                                    <div class="col-lg-5 justify-content-center col-sm-0" style="">
                                    </div>


                                </div>
                            </div>
                        </div>
                        <form action="" method="post">
                            <div class="modal fade" tabindex="-1" role="dialog" id="edit-modal">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-bs-dismiss="modal"
                                                aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            <h4 class="modal-title">Edit Post</h4>
                                        </div>
                                        <div class="modal-body">
                                            <form>
                                                <div class="form-group">
                                                    <label for="post-body">Edit the Post</label>
                                                    <textarea class="form-control" name="post-body" id="post-body" rows="5">{{ $post->body }}</textarea>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-primary" id="modal-save">Save
                                                changes</button>
                                        </div>
                                    </div><!-- /.modal-content -->
                                </div><!-- /.modal-dialog -->
                            </div><!-- /.modal -->

                        </form>


                        {{-- Your code to display the post goes here --}}
                    @elseif($post->private == 0)
                        {{-- POST 1 --}}
                        <div id="post" class="row justify-content-center mt-4 mb-4" style="">
                            {{-- HEADER --}}
                            <div id="post-header" class="row d-flex justify-content-center text-center my-auto mb-2"
                                style="">
                                {{-- USER --}}
                                <div class="col-3 d-flex my-auto" style="align-self:flex-start;">
                                    <img src="{{ asset('storage/public/' . $post->user->image) }}" alt="Profile Image"
                                        style="align-self:flex-start; object-fit:cover; border-radius:50%; width:40px; height:40px; border:2px solid #000000;">
                                    <h6 class="my-auto mx-2" style="font-weight:bold; font-size:1.3em;">
                                        {{ $post->user->username }}</h6>
                                </div>

                                {{-- TIMESTAMP --}}
                                <div class="col-lg-8 col-xs-0 d-flex justify-content-center"
                                    style="align-self:flex-end; text-align:center;">
                                    <h6 class="mx-auto"
                                        style="vertical-align:text-bottom; font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; font-size:0.8em; font-weight:bold; color:#07031C;">
                                        Posted: {{ $post->created_at->diffForHumans() }}</h6>
                                </div>

                                {{-- PRIVACY SETTING || POST OPTIONS? --}}
                                <div class="col-1 d-flex justify-content-center mx-auto my-auto"
                                    style="align-items:center; user-select:none;">

                                    {{-- SPACE IN BETWEEN --}}
                                    &nbsp;&nbsp;

                                    {{-- OPTION || MENU --}}
                                    <div class="dropdown" data-bs-trigger="click">
                                        <button class="btn dropdown-toggle" type="button" id="optionMenu"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                style="transform:scale(1.5); margin:3%;" width="16" height="16"
                                                fill="#07031C" class="bi bi-three-dots" viewBox="0 0 16 16">
                                                <path
                                                    d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z" />
                                            </svg>
                                        </button>
                                        @if (Auth::user() == $post->user)
                                        <ul class="dropdown-menu" aria-labelledby="optionMenu">
                                            <li><a class="dropdown-item edit" href="{{ route('post.edit', ['post_id' => $post->id ]) }}">Edit</a></li>
                                            <li><a class="dropdown-item" href="{{ route('post.delete', ['post_id' => $post->id]) }}">Delete</a></li>
                                        </ul>                                        
                                        @endif
                                    </div>
                                </div>
                            </div>

                            {{-- CONTENT --}}
                            <div id="post-content" class="justify-content-center text-center mx-auto my-auto px-4 py-2"
                                style="vertical-align:middle; width: 90%; height:fit-content;">
                                <div id="content" class="">
                                    <p class="show-read-more"
                                        style="line-height: 25px; font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; font-size:1.2em; text-align:justify;">
                                        {{ $post->body }}
                                    </p>

                                    @if ($post->type == 1)
                                        <img src="{{ asset('storage/public/' . $post->post_image) }}"
                                            class="image-responsive" style="width: 100%;">
                                    @endif
                                </div>
                            </div>

                            {{-- FOOTER --}}
                            <div id="post-footer" class="py-1" style="">
                                <hr class="my-1" style="border-top: 2px solid #07031C;">
                                <div class="row d-flex justify-content-center text-center">
                                    {{-- UPVOTE || DOWNVOTE --}}
                                    <div class="col-3 d-flex justify-content-center mx-auto my-auto px-5"
                                        style="align-self:flex-start;">
                                        {{-- UPVOTE --}}
                                        <div id="upvote" class="mx-auto my-auto" data-bs-toggle="tooltip"
                                            data-bs-placement="top" title="UPVOTE">
                                            <a href="{{ route('post.vote', ['post_id' => $post->id]) }}">
                                                <svg xmlns="http://www.w3.org/2000/svg" style="transform:scale(2.0);"
                                                    width="16" height="16" fill="#3E4B67"
                                                    class="bi bi-arrow-up-circle-fill" viewBox="0 0 16 16">
                                                    <path
                                                        d="M16 8A8 8 0 1 0 0 8a8 8 0 0 0 16 0zm-7.5 3.5a.5.5 0 0 1-1 0V5.707L5.354 7.854a.5.5 0 1 1-.708-.708l3-3a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 5.707V11.5z" />
                                                </svg>
                                            </a>
                                            <br>
                                            {{-- <h6 style="margin:0.3%; font-size: 0.9em; color:#07031C;">upvote</h6> --}}
                                        </div>

                                        {{-- VOTE COUNT --}}
                                        <div id="vote-count" class="mx-auto my-auto" style="">
                                            <h5 class="my-auto" style="font-size:1.6em; font-weight:500; color:#07031C;">
                                                ({{ $post->vote_count }})
                                            </h5>
                                        </div>

                                        {{-- DOWNVOTE --}}
                                        <div id="downvote" class="mx-auto my-auto" data-bs-toggle="tooltip"
                                            data-bs-placement="top" title="DOWNVOTE">
                                            <a href="{{ route('post.downvote', ['post_id' => $post->id]) }}">
                                                <svg xmlns="http://www.w3.org/2000/svg" style="transform:scale(2.0);"
                                                    width="16" height="16" fill="#3E4B67"
                                                    class="bi bi-arrow-down-circle-fill" viewBox="0 0 16 16">
                                                    <path
                                                        d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v5.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V4.5z" />
                                                </svg>
                                            </a>
                                            <br>
                                            {{-- <h6 style="margin:0.3%; font-size: 0.9em; color:#07031C;">downvote</h6> --}}
                                        </div>
                                    </div>
                                    {{-- SPACE  --}}
                                    <div class="col-lg-5 justify-content-center col-sm-0" style="">
                                    </div>
                                    {{-- COMMENT --}}
                                    {{-- <div class="col-4 justify-content-center mx-auto my-auto px-5"
                                        style="align-self:flex-end;">
                                        <button id="addcomment" type="button" class="btn"
                                            href="{{ route('feed.postcontent', ['post' => $post->id]) }}">
                                            ADD COMMENT
                                        </button>
                                    </div> --}}
                                    <div class="col-4 justify-content-center mx-auto my-auto px-5"
                                        style="align-self:flex-end;">
                                        <a href="{{ route('feed.postcontent', ['post' => $post->id]) }}"
                                            class="btn">ADD COMMENT</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <form action="" method="post">
                            <div class="modal fade" tabindex="-1" role="dialog" id="edit-modal">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-bs-dismiss="modal"
                                                aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            <h4 class="modal-title">Edit Post</h4>
                                        </div>
                                        <div class="modal-body">
                                            <form>
                                                <div class="form-group">
                                                    <label for="post-body">Edit the Post</label>
                                                    <textarea class="form-control" name="post-body" id="post-body" rows="5">{{ $post->body }}</textarea>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-primary" id="modal-save">Save
                                                changes</button>
                                        </div>
                                    </div><!-- /.modal-content -->
                                </div><!-- /.modal-dialog -->
                            </div><!-- /.modal -->
                        </form>
                    @endif
                @endforeach

            </div>

        </div>
    @endsection
