@extends('layout.dashboard')

@section('content')
<div class="card">
    <div class="m-4">
        <h2>Add Story</h2>
            <form action="/admin/story-management" method="POST">
                @csrf
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" name="title" id="title" placeholder="Title">
                    @error('title')
                        <div class="alert alert-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                
                <div class="form-group">
                    <label for="story">Story</label>
                    <textarea type="text" class="form-control" name="story" id="story" placeholder="story" style="width: 100%; height: 400px"></textarea>
                    @error('story')
                        <div class="alert alert-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Add</button>
            </form>
    </div>
</div>
@endsection

@push('script')
<script src="{{asset('/')}}Assets/js/story.js"></script>
@endpush