@extends('layout.dashboard')

@section('content')

<div class="card m-2">
    <div class="m-2">
        <h2>Edit</h2>
    <form action="/admin/story-management" method="PUT">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="title">Title - {{$post->title}}</label>
            <input type="text" class="form-control" name="title" id="title" placeholder="Title" value="{{$post->title}}">
            @error('title')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>
        
        <div class="form-group">
            <label for="story">Story</label>
            <textarea type="text" class="form-control" name="story" id="story" placeholder="story" style="width: 100%; height: 400px">{{$post->story}}</textarea>
            @error('story')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Edit</button>
    </form>
    </div> 
</div>
@endsection
@push('script')
<script src="{{asset('/')}}Assets/js/story.js"></script>
@endpush