<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8" />
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="Icon" class="rounded-circle" href="{{asset('css/Image/logo.png')}} ">
  <link rel="stylesheet" href="{{ asset('css')}}/loginstyle.css" >
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <title>Home | Desa Suhisuhi</title>

  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" type="text/css" href="{{ asset('css')}}/bootstrap.min.css">

  <!--style CSS-->
  <link  type="text/css" rel="stylesheet" href="{{ asset('css')}}/style.css" />
  <link  type="text/css" rel="stylesheet" href="{{ asset('css')}}/button.css" />

  <!--Style Icon-->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css" />
  <link rel="stylesheet" href="{{ asset('css')}}/loginstyle.css" >
</head>
<body>
  <!--Navbar-->
  <nav class="navbar navbar-light bg-light">
    <div class="container m-3">
      <h3 class="navbar-brand " style="font-size: 40px; float: right;" >DESA SUHISUHI</h3>
    </div>
  </nav>
  <section id="hero" class="d-flex align-items-center" style="width: 100%;
    height: 100vh;
    background: url(../css/Image/{{ $dashboard->gambar }}) top center;
    background-size: cover;
    position: relative;
    padding: 0;">
    <div class="container position-relative text-center text-lg-start" data-aos="zoom-in" data-aos-delay="100">
      <div class="row">
        <div class="col-lg-8">
          {!! $dashboard->informasi !!}
        </div>
      </div>
    </div>
  </section>

  <!--Content-->
  <div class="album py-5 bg-light">
    <div class="container">
      <div class="row">
        <div class="col">
          <h2>Jelajahi Website Ini</h2>
        </div>
      </div>
      <div class="row row-cols-1 row-cols-smb-4 row-cols-md-3 g-3 d-flex justify-content-center home">

        <div class="col">
          <div class="card shadow-sm">
            <a href="{{ url('/desa') }} ">
             <svg xmlns="http://www.w3.org/2000/svg" width="85%" height="125" fill="currentColor" class="bi bi-image-alt m-3" aria-label="Placeholder: Thumbnail" viewBox="0 0 16 16" focusable="false" style="color: #cc6511;">
              <path d="M7 2.5a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0zm4.225 4.053a.5.5 0 0 0-.577.093l-3.71 4.71-2.66-2.772a.5.5 0 0 0-.63.062L.002 13v2a1 1 0 0 0 1 1h14a1 1 0 0 0 1-1v-4.5l-4.777-3.947z"/>
            </svg>
            </a>
            <h3 class="text-center mb-4">Desa</h3>
          </div>
        </div>

        <div class="col">
          <div class="card shadow-sm">
            <a href="/ulos ">
              <svg xmlns="http://www.w3.org/2000/svg" width="85%" height="125" fill="currentColor" class="bi bi-x-diamond-fill m-3" aria-label="Placeholder: Thumbnail m-3" viewBox="0 0 16 16" focusable="false" style="color: #cc6511;">
                <path d="M9.05.435c-.58-.58-1.52-.58-2.1 0L4.047 3.339 8 7.293l3.954-3.954L9.049.435zm3.61 3.611L8.708 8l3.954 3.954 2.904-2.905c.58-.58.58-1.519 0-2.098l-2.904-2.905zm-.706 8.614L8 8.708l-3.954 3.954 2.905 2.904c.58.58 1.519.58 2.098 0l2.905-2.904zm-8.614-.706L7.292 8 3.339 4.046.435 6.951c-.58.58-.58 1.519 0 2.098l2.904 2.905z"/>
              </svg>
            </a>
            <h3 class="text-center mb-4">Ulos</h3>
          </div>
        </div>
        
        <div class="col">
          <div class="d-flex justify-content-center card shadow-sm">
            <a href="{{asset('/halamanpengrajin')}} ">
              <svg xmlns="http://www.w3.org/2000/svg" width="85%" height="125" fill="currentColor" class="bi bi-person-bounding-box m-3" aria-label="Placeholder: Thumbnail" viewBox="0 0 16 16" focusable="false" style="color: #cc6511;">
                <path d="M1.5 1a.5.5 0 0 0-.5.5v3a.5.5 0 0 1-1 0v-3A1.5 1.5 0 0 1 1.5 0h3a.5.5 0 0 1 0 1h-3zM11 .5a.5.5 0 0 1 .5-.5h3A1.5 1.5 0 0 1 16 1.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 1-.5-.5zM.5 11a.5.5 0 0 1 .5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 1 0 1h-3A1.5 1.5 0 0 1 0 14.5v-3a.5.5 0 0 1 .5-.5zm15 0a.5.5 0 0 1 .5.5v3a1.5 1.5 0 0 1-1.5 1.5h-3a.5.5 0 0 1 0-1h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 1 .5-.5z"/>
                <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm8-9a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
              </svg>
            </a>
            <h3 class="text-center mb-4">Pengrajin</h3>
          </div>
        </div>

        <div class="col">
          <div class="card shadow-sm">
            <a href="{{asset('/katalog')}} ">
              <svg xmlns="http://www.w3.org/2000/svg" width="85%" height="125" fill="currentColor" class="bi bi-cart-fill m-3" aria-label="Placeholder: Thumbnail" viewBox="0 0 16 16" focusable="false" style="color: #cc6511;">
                <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
              </svg>
            </a>
            <h3 class="text-center mb-4">Katalog</h3>
          </div>
        </div>

        <div class="col">
          <div class="card shadow-sm justify-content-center">
            <a href="{{asset('/login')}} ">
              <svg xmlns="http://www.w3.org/2000/svg" width="85%" height="125" fill="currentColor" class="bi bi-box-arrow-in-right m-3" aria-label="Placeholder: Thumbnail" viewBox="0 0 16 16" focusable="false" style="color: #cc6511;">
                <path fill-rule="evenodd" d="M6 3.5a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 0-1 0v2A1.5 1.5 0 0 0 6.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-8A1.5 1.5 0 0 0 5 3.5v2a.5.5 0 0 0 1 0v-2z"/>
                <path fill-rule="evenodd" d="M11.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H1.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
              </svg>
            </a>
            <h3 class="text-center mb-4">Login</h3>
          </div>
        </div>

      </div>
    </div>
  </div>

  <!--Map-->
  @yield('map')

  <!--Footer-->
  @yield('footer')
  <script src="{{asset('js/bootstrap.bundle.min.js')}} "></script>
  </body>
</html>
