<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('/')}}Assets/css/main.css">
    <title></title>
    <link rel="apple-touch-icon" sizes="180x180" href="Assets/img/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="Assets/img/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="Assets/img/favicon-16x16.png">
    <link rel="manifest" href="Assets/img/site.webmanifest">
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-xl navbar-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="/">
                    <h1 class="fw-bold">OEI RICKY</h1>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="/gallery">Gallery</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/video">Video</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/story">Story</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fw-bold contact" href="/contact">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <!-- story content -->
        <div id="content-container">
            @yield('content')
        <!-- story content end -->
    </main>
    <footer>
        <!-- SNS section -->
        <div id="SNS" class="sns-container">
            <h5 class="fw-bold">Social Media</h5>
            <a href="mailto:Oei.ricky12345@gmail.com" class="fa fa-fw fa-envelope"></a>
            <a href="https://www.linkedin.com/in/ricky-wijaya-pratikto-oei-2aa028146/" class="fa fa-linkedin"></a>
            <a href="https://www.instagram.com/oei_ricky/" class="fa fa-instagram"></a>
            <a href="https://www.facebook.com/oei.ricky/" class="fa fa-facebook-square"></a>
            <a href="https://www.youtube.com/channel/UChesu_T5YDYl1pGfVvRumXA" class="fa fa-youtube-play"></a>
        </div>
        <!-- end of SNS section -->
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    @stack('script')

</body>
</html>