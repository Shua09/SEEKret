@foreach ($banners as $banner)
    @if ($banner->alter == 0)
        <article class="post" data-postid="{{ $banner->id }}">

            <div class="container col-xxl-8 px-4 py-5" id="highlight">

                <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
                    <div class="col-10 col-sm-8 col-lg-6">
                        <!-- Display the image using the asset function -->
                        <img src="{{ asset('storage/public/' . $banner->banner_image) }}"
                            class="d-block mx-lg-auto img-fluid" alt="Highlight Picture" width="700" height="500"
                            loading="lazy">
                    </div>
                    <div class="col-lg-6">
                        <h1 class="display-5 fw-bold lh-1 mb-3">#{{ $banner->banner_hash }}</h1>
                        <br>
                        <p class="col-lg-10 fs-4">{{ $banner->banner_body }}</p>
                        <br>
                        <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                            <!-- <button type="button" class="btn btn-primary btn-lg px-4 me-md-2">Primary</button> -->
                            <a href="{{ route('home.BannerContent', ['banner' => $banner->id]) }}"
                                class="btn btn-outline-dark btn-lg px-4 me-md-2 mt-auto user-select-none"
                                id="btn-seemore">
                                See More
                            </a>
                        </div>

                    </div>
                </div>
                @if (Auth::user() == $banner->user)
                    <!---->
                    <!--EDITBUTTON-->
                    <a href="#" class="edit" data-bs-toggle="modal" data-bs-target="#edit-modal">Edit</a> |
                    <!--DELETEBUTTON-->
                    <a href="{{ route('banner.delete', ['banner_id' => $banner->id]) }}">Delete</a>
                @endif
            </div>

        </article>
    @endif
    @if ($banner->alter == 1)
        <article class="post" data-postid="{{ $banner->id }}">
            <div class="container-fluid" style="background-color: black; color: white;">
                <div class="container col-xl-10 col-xxl-8 px-4 py-5" id="highlight" style="background-color: black;">
                    <div class="row align-items-center g-lg-5 py-5">
                        <div class="col-10 col-sm-8 col-lg-6">
                            <img src="{{ asset('storage/public/' . $banner->banner_image) }}"
                                class="d-block mx-lg-auto img-fluid" alt="Highlight Picture" width="700"
                                height="500" loading="lazy">
                        </div>
                        <div class="col-lg-6">
                            <h1 class="display-4 fw-bold lh-1 mb-3">#{{ $banner->banner_hash }}</h1>
                            <br>
                            <p class="col-lg-10 fs-4">{{ $banner->banner_body }}</p>
                            <br>
                            <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                                <!-- <button type="button" class="btn btn-primary btn-lg px-4 me-md-2">Primary</button> -->
                                <a href="{{ route('home.BannerContent', ['banner' => $banner->id]) }}"
                                    class="btn btn-outline-light btn-lg px-4 me-md-2 mt-auto user-select-none"
                                    id="btn-seemore">
                                    See More
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                @if (Auth::user() == $banner->user)
                    <!---->
                    <!--EDITBUTTON-->
                    <a href="#" class="edit" data-bs-toggle="modal" data-bs-target="#edit-modal">Edit</a> |
                    <!--DELETEBUTTON-->
                    <a href="{{ route('banner.delete', ['banner_id' => $banner->id]) }}">Delete</a>
                @endif
            </div>
        </article>
    @endif
@endforeach
