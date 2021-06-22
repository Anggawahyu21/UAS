<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
    <link href="https://afeld.github.io/emoji-css/emoji.css" rel="stylesheet"> <!--Totally optional :) -->
    <link rel="icon" type="image/png" href="{{ asset('img/logo1.png') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset ('css/bootstrap.min.css') }}">
    <title>Home | SMA Kertha Wisata Singaraja</title>

</head>
<body>
  {{-- navbar --}}
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top" id="mainNav">
      <div class="container" style="font-family: Montserrat;">
          <a class="navbar-brand" href="#">SMA KERTHA WISATA SINGARAJA</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item active">
                <a class="nav-link js-scroll" href="#">HOME<span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link js-scroll" href="#">ABOUT</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  MEDIA
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="#">EVENT</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">NEWS</a>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link js-scroll" href="#">HUBUNGI KAMI</a>
              </li>
              <li class="nav-item ml-4">
                <a class="nav-link js-scroll" href="{{ route('login') }}"><i class="fas fa-user pl-1 pr-1 md:pr-2"></i> LOGIN</a>
              </li>
            </ul>
          </div>
        </nav>
      {{-- end navbar --}}


      {{-- jumbotron --}}

      {{-- <div class="jumbotron">
        <div class="container">
          <h1 class="display-4">SELAMAT DATANG</h1>
            <hr class="my-4">
            <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
            <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
        </div>
      </div> --}}
      {{-- End jumbotron --}}

      {{-- slider --}}
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="{{ asset('img/1.jpeg') }}" alt="First slide">
            <div class="carousel-caption d-none d-md-block">
              <h1 class="display-4">SELAMAT DATANG</h1>
              <hr class="my-4">
              <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="{{ asset('img/2.jpeg') }}" alt="Second slide">
            <div class="carousel-caption d-none d-md-block">
              <h1 class="display-4">Visi & Misi</h1>
              <hr class="my-4">
              <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
      {{-- end slider --}}

      <br>
      <section class="features-icons bg-light text-center">
      <div class="container">
          <div class="row">
              <div class="col-lg-4">
                  <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
                      <div class="features-icons-icon d-flex"><i class="bi-window m-auto text-primary"></i></div>
                      <h3>IMPROVEMENT <i class="fas fa-wrench pl-1 pr-1 md:pr-2"></i></h3>
                      <p class="lead mb-0">This theme will look great on any device, no matter the size!</p>
                  </div>
              </div>
              <div class="col-lg-4">
                  <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
                      <div class="features-icons-icon d-flex"><i class="bi-layers m-auto text-primary"></i></div>
                      <h3>IMPROVEMENT <i class="fas fa-wrench pl-1 pr-1 md:pr-2"></i></h3>
                      <p class="lead mb-0">Featuring the latest build of the new Bootstrap 5 framework!</p>
                  </div>
              </div>
              <div class="col-lg-4">
                  <div class="features-icons-item mx-auto mb-0 mb-lg-3">
                      <div class="features-icons-icon d-flex"><i class="bi-terminal m-auto text-primary"></i></div>
                      <h3>IMPROVEMENT <i class="fas fa-wrench pl-1 pr-1 md:pr-2"></i></h3>
                      <p class="lead mb-0">Ready to use with your own content, or customize the source files!</p>
                  </div>
              </div>
          </div>
      </div>
  </section><br>
  <!-- Image Showcases-->
  <section class="showcase">
      <div class="container-fluid p-0">
          <div class="row g-0">
              <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-color: rgb(8, 147, 197)"></div>
              <div class="col-lg-6 order-lg-1 my-auto showcase-text">
                  <h2>NEWS <i class="fas fa-newspaper pl-1 pr-1 md:pr-2"></i></h2>
                  <p class="lead mb-0">When you use a theme created by Start Bootstrap, you know that the theme will look great on any device, whether it's a phone, tablet, or desktop the page will behave responsively!</p>
              </div>
          </div>
          <div class="row g-0">
              <div class="col-lg-6 text-white showcase-img" style="background-color: rgb(205, 225, 29)"></div>
              <div class="col-lg-6 my-auto showcase-text">
                <h2>NEWS <i class="fas fa-newspaper pl-1 pr-1 md:pr-2"></i></h2>
                  <p class="lead mb-0">Newly improved, and full of great utility classes, Bootstrap 5 is leading the way in mobile responsive web development! All of the themes on Start Bootstrap are now using Bootstrap 5!</p>
              </div>
          </div>
          <div class="row g-0">
              <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-color: rgb(16, 167, 16)"></div>
              <div class="col-lg-6 order-lg-1 my-auto showcase-text">
                <h2>NEWS <i class="fas fa-newspaper pl-1 pr-1 md:pr-2"></i></h2>
                  <p class="lead mb-0">Landing Page is just HTML and CSS with a splash of SCSS for users who demand some deeper customization options. Out of the box, just add your content and images, and your new landing page will be ready to go!</p>
              </div>
          </div>
      </div>
  </section><br>


      <!-- Services -->
      
      {{-- script --}}
      <script src="{{ asset ('js/jquery-3.5.1.min.js') }}"></script>
      <script src="{{ asset ('js/bootstrap.min.js') }}"></script>
      <script src="{{ asset ('js/script.js') }}"></script>
</body>
</html>