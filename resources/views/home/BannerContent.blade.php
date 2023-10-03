@extends('layouts.master')
@section('content')
<img src="/storage/public/{{ $banner->banner_image }}" alt="{{ $banner->banner_hash }}" class="max-w-full mb-4">
    <h2 class="text-2xl font-medium text-gray-900 title-font">
        {{ $banner->banner_hash }}
    </h2>
    <h3>
        {{ $banner->banner_body }}
    </h3>
    
@endsection
