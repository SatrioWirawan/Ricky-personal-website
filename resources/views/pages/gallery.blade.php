@extends('layout.layout')
@section('content')
<head>
    <link rel="stylesheet" href="{{asset('/')}}Assets/css/gallery.css">
    <title>OEI RICKY - Gallery</title>
</head>
<body>
    <main>
        <div id="content-container">
            <div>
                <h3 id="page-title">Gallery</h3>
                <hr id="hr-1">
            </div>
            <!-- photo container -->
            <div id="image-container">
                <div class="row container"> <!--copy from here to add more photo-->
                    <div class="col photocard">
                        <img class="photo" src="{{asset('/')}}Assets/img/Photo-1.jpg" alt="">
                    </div>
                    <div class="col photocard">
                    <img class="photo" src="{{asset('/')}}Assets/img/Photo-2.JPG" alt="">
                    </div>
                    <div class="col photocard">
                        <img class="photo" src="{{asset('/')}}Assets/img/Photo-3.JPG" alt="">
                    </div>
                </div> <!--to here to add more photo -->

            </div>
            <div id="myModal-photo" class="modal-photo">
                <span class="close">&times;</span>
                <img class="modal-content-photo" id="img01"/>
                <div id="caption"></div>
            </div>
            <!-- end of photo container -->
        </div>
    </main>
@endsection
@push('script')
<script src="{{asset('/')}}Assets/js/gallery.js"></script>
@endpush