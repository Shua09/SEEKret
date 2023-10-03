@extends('layouts.master')
@section('content')
<section class="text-gray-600 body-font overflow-hidden">
        <div class="w-full md:w-1/2 py-24 mx-auto">
            <div class="mb-4">
                <h2 class="text-2xl font-medium text-gray-900 title-font">
                    Create a new Job listing 
                </h2>
            </div>
            @if($errors->any())
                <div class="mb-4 p-4 bg-red-200 text-red-800">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form
                action="{{ route('listings.store') }}"
                id="payment_form"
                method="post"
                enctype="multipart/form-data"
                class="bg-gray-100 p-4">
                <div class="mb-4 mx-2">
                    <label for="title" value="Job Title" >Job Title</label>
                    <input id="title"
                        class="block mt-1 w-full"
                        type="text"
                        name="title"
                        required >
                       </input>
                </div>
                <div class="mb-4 mx-2">
                    <label for="company" value="Company Name" >Company Name</label>
                    <input id="company"
                        class="block mt-1 w-full"
                        type="text"
                        name="company"
                        required >
                       </input>
                </div>
                <div class="mb-4 mx-2">
                    <label for="logo" value="Company Logo"> Company Logo</label>
                    <input id="logo"
                        class="block mt-1 w-full"
                        type="file"
                        name="logo" >
                       </input>
                </div>
                <div class="mb-4 mx-2">
                    <label for="location" value="Location (e.g. Remote, United States)" >Location (e.g. Remote, United States)</label>
                    <input id="location"
                        class="block mt-1 w-full"
                        type="text"
                        name="location"
                        required >
                       </input>
                </div>
                <div class="mb-4 mx-2">
                    <label for="apply_link" value="Link To Apply" >Link To Apply</label>
                    <input id="apply_link"
                        class="block mt-1 w-full"
                        type="text"
                        name="apply_link"
                        required>
                        </input>
                </div>
                <div class="mb-4 mx-2">
                    <label for="tags" value="Tags (separate by comma)" >Tags (separate by comma)</label>
                    <input id="tags"
                        class="block mt-1 w-full"
                        type="text"
                        name="tags" >
                       </input>
                </div>
                <div class="mb-4 mx-2">
                    <label for="content" value="Listing Content (Markdown is okay)"> Listing Content (Markdown is okay)</label>
                    <textarea
                        id="content"
                        rows="8"
                        class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full"
                        name="content"
                    ></textarea>
                </div>
                <div class="mb-4 mx-2">
                    <label for="is_highlighted" class="inline-flex items-center font-medium text-sm text-gray-700">
                        <input
                            type="checkbox"
                            id="is_highlighted"
                            name="is_highlighted"
                            value="Yes"
                            class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-offset-0 focus:ring-indigo-200 focus:ring-opacity-50">
                        <span class="ml-2">Highlight this post</span>
                    </label>
                </div>
                <div class="mb-6 mx-2">
                    <div id="card-element"></div>
                </div>
                <div class="mb-2 mx-2">
                    @csrf
                    <button type="submit" id="form_submit" class="block w-full items-center bg-indigo-500 text-white border-0 py-2 focus:outline-none hover:bg-indigo-600 rounded text-base mt-4 md:mt-0">Continue</button>
                </div>
            </form>
        </div>
    </section>
   
@endsection
