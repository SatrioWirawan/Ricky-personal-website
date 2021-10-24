@extends('layout.dashboard')

@section('content')
<div class="card m-2">
    <div class="m-2">
        <h2>Story</h2>
        <hr>
        <div class="story-container">
            <h3>{{$post->title}}</h3>
            <textarea style="width: 100%; border: none; resize: none; height: 600px">{{$post->story}}</textarea>
        </div>
    </div> 
</div>
@endsection
@push('script')
<script src="{{asset('/')}}Assets/js/story.js"></script>
@endpush