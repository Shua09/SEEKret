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
    {{-- POST 1 --}}
    <div id="post" class="row justify-content-center mt-4 mb-4" style="">
        {{-- HEADER --}}
        <div id="post-header" class="row d-flex justify-content-center text-center my-auto mb-2" style="">
            {{-- USER --}}
            <div class="col-3 d-flex my-auto" style="align-self:flex-start;">
                @if ($post->user)
                    <img src="{{ asset('storage/public/' . $post->user->image) }}" alt="Profile Image"
                        style="align-self:flex-start; object-fit:cover; border-radius:50%; width:40px; height:40px; border:2px solid #000000;">
                    <h6 class="my-auto mx-2" style="font-weight:bold; font-size:1.3em;">
                        {{ $post->user->username }}
                    </h6>
                @else
                    <p>User not found</p>
                @endif
            </div>

            {{-- TIMESTAMP --}}
            <div class="col-lg-8 col-xs-0 d-flex justify-content-center" style="align-self:flex-end; text-align:center;">
                <h6 class="mx-auto"
                    style="vertical-align:text-bottom; font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; font-size:0.8em; font-weight:bold; color:#07031C;">
                    Posted: {{ $post->created_at->diffForHumans() }}</h6>
            </div>

            {{-- PRIVACY SETTING || POST OPTIONS? --}}
            <div class="col-1 d-flex justify-content-center mx-auto my-auto" style="align-items:center; user-select:none;">

                {{-- SPACE IN BETWEEN --}}
                &nbsp;&nbsp;

                {{-- OPTION || MENU --}}
                <div class="dropdown" data-bs-trigger="click">
                    <button class="btn dropdown-toggle" type="button" id="optionMenu" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        <svg xmlns="http://www.w3.org/2000/svg" style="transform:scale(1.5); margin:3%;" width="16"
                            height="16" fill="#07031C" class="bi bi-three-dots" viewBox="0 0 16 16">
                            <path
                                d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z" />
                        </svg>
                    </button>
                    @if (Auth::user() == $post->user)
                        <ul class="dropdown-menu" aria-labelledby="optionMenu">
                            <li><a class="dropdown-item" href="#" class="edit" data-bs-toggle="modal"
                                    data-bs-target="#edit-modal">Edit</a>
                            </li>
                            <li><a class="dropdown-item"
                                    href="{{ route('post.delete', ['post_id' => $post->id]) }}">Delete</a>
                            </li>
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
                    <img src="{{ asset('storage/public/' . $post->post_image) }}" class="image-responsive"
                        style="width: 100%;">
                @endif
            </div>
        </div>

        {{-- FOOTER --}}
        <div id="post-footer" class="py-1" style="">
            <hr class="my-1" style="border-top: 2px solid #07031C;">
            <div class="row d-flex justify-content-center text-center">
                {{-- UPVOTE || DOWNVOTE --}}
                <div class="col-3 d-flex justify-content-center mx-auto my-auto px-5" style="align-self:flex-start;">
                    {{-- UPVOTE --}}
                    <div id="upvote" class="mx-auto my-auto" data-bs-toggle="tooltip" data-bs-placement="top"
                        title="UPVOTE">
                        <a href="{{ route('post.vote', ['post_id' => $post->id]) }}">
                            <svg xmlns="http://www.w3.org/2000/svg" style="transform:scale(2.0);" width="16"
                                height="16" fill="#3E4B67" class="bi bi-arrow-up-circle-fill" viewBox="0 0 16 16">
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
                    <div id="downvote" class="mx-auto my-auto" data-bs-toggle="tooltip" data-bs-placement="top"
                        title="DOWNVOTE">
                        <a href="{{ route('post.downvote', ['post_id' => $post->id]) }}">
                            <svg xmlns="http://www.w3.org/2000/svg" style="transform:scale(2.0);" width="16"
                                height="16" fill="#3E4B67" class="bi bi-arrow-down-circle-fill" viewBox="0 0 16 16">
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

            </div>
        </div>
    </div>

    {{-- COMMENT SECTION --}}
    <div id="comment-section" class="row justify-content-center">
        <div class="col-8">
            <h3>Add a Comment</h3>
            <form action="{{ route('comment.create', ['post_id' => $post->id]) }}" method="POST">
                @csrf
                <textarea id="comment-input" name="comment" rows="3" placeholder="Type your comment here" required></textarea>
                <button type="submit" class="btn btn-primary">Submit Comment</button>
            </form>
        </div>
    </div>

    {{-- @foreach ($post->comments as $comment)
    <div class="comment">
        <strong>{{ $comment->user->username }}:</strong>
            {{ $comment->comment }}
    </div>
    @endforeach --}}


    <form action="" method="post">
        <div class="modal fade" tabindex="-1" role="dialog" id="edit-modal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
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
    <script>
        $(document).ready(function() {
            // Trigger the edit-modal when the page loads
            $('#edit-modal').modal('show');
        });
    </script>
@endsection
