@extends('layout.layout')
@section('content')
<head>
    <link rel="stylesheet" href="{{asset('/')}}Assets/css/contact.css">
    <title>OEI RICKY - Contact</title>
</head>
<body>
    <main>
        <!-- story content -->
        <div id="content-container">
            <div>
                <h3 id="page-title">Contact Me</h3>
                <hr id="hr-1">
            </div>
            <div id="email">
                <form action="mailto:oei.ricky12345@gmail.com" method="POST">
                    <div class="row form-floating">
                        <h6 class="text-start">Name</h6>
                        <div class="col">
                            <input class="form-control" type="text" placeholder="First Name" aria-label="first-name" aria-required="true">
                        </div>
                        <div class="col">
                            <input class="form-control" type="text" placeholder="Last Name" aria-label="last-name" aria-required="true">
                        </div>
                    </div>
                    <div class="row form-floating">
                        <h6 class="text-start">Email Address</h6>
                        <div class="col">
                            <input class="form-control" type="text" placeholder="Email Address" aria-label="email-address" aria-required="true">
                        </div>
                    </div>
                    <div class="row form-floating">
                        <h6 class="text-start">Subject</h6>
                        <div class="col">
                            <input class="form-control" type="text" placeholder="Subject" aria-label="subject" aria-required="true">
                        </div>
                    </div>
                    <div class="row form-floating">
                        <h6 class="text-start">Message</h6>
                        <div class="col">
                            <textarea class="form-control" placeholder="Message" id="Message-content" aria-required="true"></textarea>
                        </div>
                    </div>
                    <div class="row form-floating">
                        <button id="submit-btn" type="submit" class="btn btn-secondary">submit</button>
                    </div>
                </form>
            </div>
        </div>
        <!-- story content end -->
    </main>
@endsection
@push('script')
@endpush 
</body>
</html>