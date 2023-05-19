<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Bootstrap core CSS -->
    <link href="https://getbootstrap.com/docs/4.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Styles -->
    <style>
      .navbar_style{
        color:#2B6363;
      }
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }
      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      /* GLOBAL STYLES
      -------------------------------------------------- */
      /* Padding below the footer and lighter body text */
      body {
        padding-top: 3rem;
        padding-bottom: 3rem;
        color: #fff;
      }
      .body2 {
        padding-top: 3rem;
        padding-bottom: 3rem;
        color: #0000;
      }

      /* CUSTOMIZE THE CAROUSEL
      -------------------------------------------------- */
      /* Carousel base class */
      .carousel {
        margin-bottom: 4rem;
      }
      /* Since positioning the image, we need to help out the caption */
      .carousel-caption {
        bottom: 3rem;
        z-index: 10;
      }
      /* Declare heights because of positioning of img element */
      .carousel-item {
        height: 32rem;
      }
      .carousel-item > img {
        position: absolute;
        top: 0;
        left: 0;
        min-width: 100%;
        height: 32rem;
      }

      /* MARKETING CONTENT
      -------------------------------------------------- */
      /* Center align the text within the three columns below the carousel */
      .marketing .col-lg-4 {
        margin-bottom: 1.5rem;
        text-align: center;
      }
      .marketing h2 {
        font-weight: 400;
      }
      .marketing .col-lg-4 p {
        margin-right: .75rem;
        margin-left: .75rem;
      }

      /* Featurettes
      ------------------------- */
      .featurette-divider {
        margin: 5rem 0; /* Space out the Bootstrap <hr> more */
      }
      /* Thin out the marketing headings */
      .featurette-heading {
        font-weight: 300;
        line-height: 1;
        letter-spacing: -.05rem;
      }

      /* RESPONSIVE CSS
      -------------------------------------------------- */
      @media (min-width: 40em) {
        /* Bump up size of carousel content */
        .carousel-caption p {
          margin-bottom: 1.25rem;
          font-size: 1.25rem;
          line-height: 1.4;
        }
        .featurette-heading {
          font-size: 50px;
        }
      }

      @media (min-width: 62em) {
        .featurette-heading {
          margin-top: 7rem;
        }
      }
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
      .content {
          min-height: 100%;
          /* tambahkan padding-bottom untuk memberi ruang pada footer */
          padding-bottom: 50px; /* ganti angka sesuai kebutuhan */
      }
      footer {
          position: fixed;
          left: 0;
          bottom: 0;
          width: 100%;
          /* tambahkan padding dan gaya lain sesuai kebutuhan */
          padding: 0px;
          background-color: #8BACAA;
          text-align: center;
      }
      footer p {
          margin-top: 0;
          margin-bottom: 0;
      }
    </style>
  </head>

  <body style="background-color: #234741;">
    <header>
      <nav class="navbar navbar-expand-md navbar-dark fixed-top" style="background-color: #2B6363">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse ml-auto" id="navbarCollapse">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <a class="navbar-brand" href="{{ url('/') }}">
                <div class="d-flex align-items-center">
                  <img src="img/logowondeful.png" style="height: 50%; width: 7%;">
                  <span class="ml-2">Wonderful Aceh</span>
                </div>
              </a>
            </li>
          </ul>
        </div>      
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
                <a class="nav-link" href="/category">Kategori</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Daftar
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="{{ route('holiday.create') }}">Tempat Wisata</a>
              <a class="dropdown-item" href="{{ route('tour_guide.create') }}">Tour Guide</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/thisorthat">This or That</a>
          </li>
          <form class="form-inline mt-2 mt-md-0"  action="/search" method="GET">
            <input class="form-control mr-sm-2" type="text" placeholder="Cari" aria-label="Cari" name="query">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit" n>Cari</button>
          </form>
          <!-- Authentication Links -->
          @if (Route::has('login'))
            @guest
              <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
              </li>
              @if (Route::has('register'))
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                </li>
              @endif
              @else
                <li class="nav-item dropdown" style="margin-right:10px;">
                  <div style="position: relative; " class="nav-link dropdown-toggle" role="button"
                      data-bs-toggle="dropdown" aria-expanded="false">
                      <i class="fas fa-user-circle fa-2x me-2 text-white" style="list-style: none;"></i>
                      <span class="text-white" style="position: relative;bottom: px;"></span>
                  </div>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="AboutUs">AboutUs</a>
                    <a class="dropdown-item" href="{{ route('logout') }}"
                      onclick="event.preventDefault();
                      document.getElementById('logout-form').submit();">
                        Logout
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                      @csrf
                    </form>
                  </div>
                </li>
            @endguest
          @endif
        </ul>
      </nav>
    </header>

    <main role="main">
        <div class="container mt-5">
            <div class="row">
                <!-- Buttons -->
                @yield('buttons')
            </div>
        </div>
        <div class="container mt-1">
            <div class="row">
                <!-- Content -->
                @yield('content')
            </div>
        </div>
    </main>

    <!-- FOOTER -->
    <footer class="text-center pt- " style="color: white;">
      <p> Copyright 2023 &copy; WonderfulAceh</p>
    </footer>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="https://getbootstrap.com/docs/4.3/assets/js/vendor/jquery-slim.min.js"><\/script>')</script><script src="https://getbootstrap.com/docs/4.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script>
    <script src="{{ asset('js/app.js') }}" defer></script>
  </body>
</html>