@extends('layout.layout')
@section('content')
<head>
    <link rel="stylesheet" href="{{asset('/')}}Assets/css/story.css">
    <title>OEI RICKY - Story</title>
</head>
<body>
    <main>
        <!-- story content -->
        <div id="content-container">
            <div>
                <h2 id="page-title">My Story</h2>
                <hr id="hr-1">
            </div>
            @foreach ($post as $key=>$value)
            <div class="story-container">
                <h2>{{$value->title}}</h2>
                <hr id="hr-2">
                <textarea>{{$value->story}}</textarea>
            </div>
            <hr id="hr-3">
            @endforeach 
        </div>
        <!-- story content end -->
    </main>
@endsection
@push('script')
<script src="{{asset('/')}}Assets/js/story.js"></script>
@endpush