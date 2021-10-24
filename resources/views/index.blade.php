<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@700&display=swap" rel="stylesheet"/>
    <link rel="stylesheet" href="Assets/css/index.css" />
    <title>OEI RICKY - Personal Website</title>
    <link rel="apple-touch-icon" sizes="180x180" href="Assets/img/apple-touch-icon.png"/>
    <link rel="icon" type="image/png" sizes="32x32" href="Assets/img/favicon-32x32.png"/>
    <link rel="icon" type="image/png" sizes="16x16" href="Assets/img/favicon-16x16.png"/>
    <link rel="manifest" href="Assets/img/site.webmanifest" />
  </head>
  <body>
    <header>
      <div id="bg-image">
        <div class="bg"></div>
        <nav class="navbar navbar-expand-xl navbar-light">
          <div class="container-fluid">
            <a class="navbar-brand" href="index.html">
              <h1 class="fw-bold">OEI RICKY</h1>
            </a>
            <button
              class="navbar-toggler"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#navbarSupportedContent"
              aria-controls="navbarSupportedContent"
              aria-expanded="false"
              aria-label="Toggle navigation"
            >
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav">
                <a class="nav-item" href="/gallery">
                    <button class="cybr-btn">Gallery<span aria-hidden></span>
                    <span aria-hidden class="nav-link cybr-btn__glitch">Gallery</span>
                    </button>
                </a>
                <a class="nav-item" href="/video">
                    <button class="cybr-btn">Video<span aria-hidden></span>
                    <span aria-hidden class="nav-link cybr-btn__glitch">Video</span>
                    </button>
                </a>
                <a class="nav-item" href="/story">
                    <button class="cybr-btn">Story<span aria-hidden></span>
                    <span aria-hidden class="nav-link cybr-btn__glitch">Story</span>
                    </button>
                </a>
                <a class="nav-item" href="/contact">
                    <button class="cybr-btn">Contact<span aria-hidden></span>
                    <span aria-hidden class="nav-link cybr-btn__glitch">Contact</span>
                    </button>
                </a>
              </ul>
            </div>
          </div>
        </nav>
      </div>
      <!-- <img src="Assets/img/Photo.JPG" class="card-img" id="bg-image" alt="Bg-img" style="width: 90%;"> -->
      <!-- <div>
            <img src="Assets/img/razor-bottom-black-12f7b143.svg" alt="" class="razor-bottom-blk">
        </div> -->
      <div>
        <h1 class="big-name">
          O<span class="ei">ei</span> <br />
          Ricky
        </h1>
        <!-- <h4 id="welcome-sm">
          Welcome <br />
          to <br />
          My Website
        </h4> -->
      </div>
      <a class="text-box" href="#about-me"
        >Who Am I?
        <svg
          xmlns="http://www.w3.org/2000/svg"
          width="30"
          height="16"
          fill="currentColor"
          class="bi bi-arrow-right"
          viewBox="0 0 16 16"
          style="margin-left: 20px"
        >
          <path
            fill-rule="evenodd"
            d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"
          />
        </svg>
      </a>
    </header>
    <main>
      <div id="intro" class="">
        <h3 class="intro-content gradient-warm">Halo semuanya!</h3>
      </div>
      <div class="about-container">
        <div id="Profile" class="profile-container row">
          <div id="about" class="col-sm-6">
            <img class="mypic" src="{{asset('/')}}Assets/img/Rick.png" alt="My Pic" />
          </div>
          <div id="about-me" class="col-sm-6">
            <p>
              Saya Oei, Ricky Wijaya Pratikto panggil saja Ricky, sekarang saya
              berumur (21) asal Semarang Jawa Tengah. Saya sedang menyelesaikan
              kuliah film and animation di Universitas Multimedia Nusantara.
              Saya suka dengan film, berita politik, bisnis dan bermain
              komputer. Buat kalian yang ingin mengenal lebih jauh tentang saya
              bisa dilihat di website personal ini.
            </p>
          </div>
        </div>
      </div>
      <div id="Photo-container">
        <div>
          <h3 id="page-title">Gallery</h3>
        </div>
        <!-- photo container -->
        <div id="image-container">
          <div class="row container">
            <!--copy from here to add more photo-->
            <div class="col-lg col-md mb-4 photocard">
              <img class="photo" src="{{asset('/')}}Assets/img/Photo-1.jpg" alt="" />
            </div>
            <div class="col-lg col-md mb-4 photocard">
              <img class="photo" src="{{asset('/')}}Assets/img/Photo-2.JPG" alt="" />
            </div>
            <div class="col-lg col-md mb-4 photocard">
              <img class="photo" src="{{asset('/')}}Assets/img/Photo-3.JPG" alt="" />
            </div>
          </div>
        </div>
        <div id="myModal-photo" class="modal-photo">
          <span class="close">&times;</span>
          <img class="modal-content-photo" id="img01">
          <div id="caption"></div>
        </div>
        <!-- end of photo container -->
      </div>
      <div id="Video-container">
        <div class="vid-title">
          <h3 id="video-page-title">Video Gallery</h3>
          <!-- <hr id="hr-1"> -->
        </div>

        <div id="vid-container" class="row">
          <div class="col-lg-4 col-md-12 mb-4">
            <!--Modal: Name-->
            <div
              class="modal fade"
              id="modal1"
              tabindex="-1"
              role="dialog"
              aria-labelledby="myModalLabel"
              aria-hidden="true"
            >
              <div class="modal-dialog modal-lg" role="document">
                <!--Content-->
                <div class="modal-content">
                  <!--Body-->
                  <div class="modal-body mb-0 p-0">
                    <div
                      class="
                        embed-responsive embed-responsive-16by9
                        z-depth-1-half
                      "
                    >
                      <iframe
                        class="embed-responsive-item"
                        width="1280"
                        height="720"
                        src="https://www.youtube.com/embed/XlC9fVrizHI"
                        title="YouTube video player"
                        frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen
                      ></iframe>
                    </div>
                  </div>

                  <!--Footer-->
                  <div class="modal-body justify-content-center">
                    <h4 class="fw-bold">Terjebak</h4>
                    <hr id="hr-2" />
                    <p>Produser : Oei Ricky</p>
                    <p>Durasi: 1+ menit</p>
                    <p>
                      Menceritakan seorang perempuan yang sedang di toilet namun
                      ketika akan keluar dia terjebak di dalamnya.
                    </p>
                    <h5>​Tersedia di:</h5>
                    ​
                    <p>
                      Youtube :
                      <a href="https://youtu.be/XlC9fVrizHI"
                        >https://youtu.be/XlC9fVrizHI</a
                      >
                    </p>
                    <p>
                      Facebook:
                      <a href="https://fb.watch/20exiLKSId/"
                        >https://fb.watch/20exiLKSId/</a
                      >
                    </p>
                  </div>
                </div>
                <!--/.Content-->
              </div>
            </div>
            <!--Modal: Name-->

            <a
              ><img
                class="img-fluid z-depth-1 vid-thumbnail"
                src="Assets/img/Terjebak.png"
                alt="video"
                data-toggle="modal"
                data-target="#modal1"
            /></a>
            <hr id="hr-2" />
            <h4 class="fw-bold">Terjebak</h4>
            <h5>(2019)</h5>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-lg-4 col-md-6 mb-4">
            <!--Modal: Name-->
            <div
              class="modal fade"
              id="modal6"
              tabindex="-1"
              role="dialog"
              aria-labelledby="myModalLabel"
              aria-hidden="true"
            >
              <div class="modal-dialog modal-lg" role="document">
                <!--Content-->
                <div class="modal-content">
                  <!--Body-->
                  <div class="modal-body mb-0 p-0">
                    <div
                      class="
                        embed-responsive embed-responsive-16by9
                        z-depth-1-half
                      "
                    >
                      <iframe
                        class="embed-responsive-item"
                        width="1280"
                        height="720"
                        src="https://www.youtube.com/embed/wRQXq6jbPto"
                        title="YouTube video player"
                        frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen
                      ></iframe>
                    </div>
                  </div>

                  <!--Footer-->
                  <div class="modal-body justify-content-center">
                    <h4 class="fw-bold">Segitiga Bermuda</h4>
                    <hr id="hr-2" />
                    <p>Produser : Oei Ricky</p>
                    <p>Durasi: +-5 menit</p>
                    <p>
                      Menceritakan Seorang satpam yang ingin mencuri pakaian
                      dalam wanita tetapi dihalang oleh ninja yang ingin membela
                      kebenaran.
                    </p>
                    <h5>​Tersedia di:</h5>
                    ​
                    <p>
                      Youtube :
                      <a href="https://youtu.be/wRQXq6jbPto"
                        >https://youtu.be/wRQXq6jbPto</a
                      >
                    </p>
                    <p>
                      Facebook:
                      <a href="https://fb.watch/20bjcvFUuJ/"
                        >https://fb.watch/20bjcvFUuJ/</a
                      >
                    </p>
                  </div>
                </div>
                <!--/.Content-->
              </div>
            </div>
            <!--Modal: Name-->

            <a
              ><img
                class="img-fluid z-depth-1 vid-thumbnail"
                src="Assets/img/Segitiga Bermuda.png"
                alt="video"
                data-toggle="modal"
                data-target="#modal6"
            /></a>
            <hr id="hr-2" />
            <h4 class="fw-bold">Segitiga Bermuda</h4>
            <h5>(2019)</h5>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-lg-4 col-md-6 mb-4">
            <!--Modal: Name-->
            <div
              class="modal fade"
              id="modal4"
              tabindex="-1"
              role="dialog"
              aria-labelledby="myModalLabel"
              aria-hidden="true"
            >
              <div class="modal-dialog modal-lg" role="document">
                <!--Content-->
                <div class="modal-content">
                  <!--Body-->
                  <div class="modal-body mb-0 p-0">
                    <div
                      class="
                        embed-responsive embed-responsive-16by9
                        z-depth-1-half
                      "
                    >
                      <iframe
                        class="embed-responsive-item"
                        width="1280"
                        height="720"
                        src="https://www.youtube.com/embed/XAASSVsXS7E"
                        title="YouTube video player"
                        frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen
                      ></iframe>
                    </div>
                  </div>

                  <!--Footer-->
                  <div class="modal-body justify-content-center">
                    <h4 class="fw-bold">CORVID : Galeri seni dan desain UMN</h4>
                    <hr id="hr-2" />
                    <p>Produser : Oei Ricky</p>
                    <p>Durasi: -+2 menit</p>
                    <p>Corporate video Tim Galeri Seni dan Desain</p>
                    <h5>​Tersedia di:</h5>
                    ​
                    <p>
                      Youtube :
                      <a href="https://youtu.be/XAASSVsXS7E"
                        >https://youtu.be/XAASSVsXS7E</a
                      >
                    </p>
                  </div>
                </div>
                <!--/.Content-->
              </div>
            </div>
            <!--Modal: Name-->

            <a
              ><img
                class="img-fluid z-depth-1 vid-thumbnail"
                src="Assets/img/Galeri Seni dan Desain.png"
                alt="video"
                data-toggle="modal"
                data-target="#modal4"
            /></a>
            <hr id="hr-2" />
            <h4 class="fw-bold">
              CORVID : Galeri seni <br />
              dan desain UMN
            </h4>
            <h5>(2020)</h5>
          </div>
          <!-- Grid column -->
        </div>
        <!-- Grid row -->
      </div>
    </main>
    <footer>
      <div id="Contact">
        <h2 id="contact-page-title">Contact Me</h2>
        <!-- <div class="row">
                <a href="https://www.linkedin.com/in/ricky-wijaya-pratikto-oei-2aa028146/" class="fa fa-linkedin">Ricky Wijaya</a>
            </div>
            <div class="row">
                <a href="https://www.instagram.com/oei_ricky/" class="fa fa-instagram">Oei_ricky</a>
            </div>
            <div class="row">
                <a href="https://www.facebook.com/oei.ricky/" class="fa fa-facebook-square">Oei ricky</a>
            </div>
            <div class="row">
                <a href="https://www.youtube.com/channel/UChesu_T5YDYl1pGfVvRumXA" class="fa fa-youtube-play">WP Studio</a>
            </div> -->
        <!-- <a class="text-box-contact" href="mailto:oei.ricky12345@gmail.com">Email me
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16" style="margin-left: 20px;">
                    <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
                </svg>
            </a> -->
        <hr />
        <div id="SNS" class="sns-container">
          <h5 class="fw-bold">Social Media</h5>
          <a
            href="mailto:Oei.ricky12345@gmail.com"
            class="fa fa-fw fa-envelope"
          ></a>
          <a
            href="https://www.linkedin.com/in/ricky-wijaya-pratikto-oei-2aa028146/"
            class="fa fa-linkedin"
          ></a>
          <a
            href="https://www.instagram.com/oei_ricky/"
            class="fa fa-instagram"
          ></a>
          <a
            href="https://www.facebook.com/oei.ricky/"
            class="fa fa-facebook-square"
          ></a>
          <a
            href="https://www.youtube.com/channel/UChesu_T5YDYl1pGfVvRumXA"
            class="fa fa-youtube-play"
          ></a>
        </div>
        <div id="copyright" class="row-1">
          <p class="copyright">Oei Ricky &#169; 2021</p>
          <p class="copyright">
            powered by:
            <a class="copyright" href="mailto:satriowirawanh@gmail.com">Luckycubs</a>
          </p>
        </div>
      </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
      integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
      crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns"
      crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"
      integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG"
      crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js"
      integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc"
      crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="{{asset('/')}}Assets/js/gallery.js"></script>
    <script src="{{asset('/')}}Assets/js/video.js"></script>
    <script src="{{asset('/')}}Assets/js/index.js"></script>
  </body>
</html>
