<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="Icon" class="rounded-circle" href="{{asset('../css/Image/logo.png')}} ">
  <title> @yield('title') | Desa Suhi Suhi</title>
  <!-- Bootstrap core CSS -->
  <link href="{{asset('css')}}/bootstrap.min.css " rel="stylesheet" />
  <!--style CSS-->
  <link rel="stylesheet" href="{{asset('css')}}/style.css" />
  <link rel="stylesheet" href="{{ asset('css')}}/button.css" >
  <!--Style Icon-->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css" />
    <!--Fancy Box-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.css">
  <!--Lightbox-->    
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
</head>
<body>
  <!--Navbar-->
  <header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        <img src="{{asset('../css/Image')}}/logo.png " class="rounded-circle" style="width: 100px;" alt="">
        <h3 class="navbar-brand" href="#"><strong> DESA SUHI SUHI</strong></h3>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link " aria-current="page" href="{{asset('/')}} ">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{asset('/desa')}}">Desa</a>
            </li>
            </li>
              <li class="nav-item">
              <a class="nav-link" href="{{asset('/ulos')}}">Ulos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{asset('/katalog')}} ">Katalog</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{asset('/halamanpengrajin')}} ">Pengerajin</a>
            </li>
            <li class="nav-item">
              <a class="nav-item btn btn-info tombol" href="{{asset('/login')}}">Login Admin</a>
            </li>
          </ul>
        </div>
      </div><br>
    </nav>
  </header>

  <!--Header-->
  @yield('header')

  <!--Content -->
  @yield('content')

  <!--Penjelasan-->
  @yield('penjelasan')

  <!--Jenis-->
  @yield('jenis')

  <!--Video -->
  @yield('video')

 <!--Footer-->
  <section id="footer" class="bg-dark text-light">
    <div class="container">
    <div class="row footer-jarak mt-5" >
      <div class="col-md-5 " style="color: cornflowerblue; size:'7';">
        <font size='7'><p>Website UMKM Ulos Desa Lumban Suhi Suhi Toruan</p></font>
      </div>
      <link rel="preconnect" href="https://fonts.gstatic.com"><link href="https://fonts.googleapis.com/css2?family=Caveat&family=Righteous&display=swap" rel="stylesheet">
      <div class="col-md-4 " style="">
        <div class="referens">
        <h2 style="color:darkcyan">Link Terkait</h2><br>
          <h5><a href="https://samosirkab.go.id/">Pemkab Samosir</a></h5><br>
          <h5><a href="https://www.indonesia.travel/id/id/home">Wonderful Indonesia</a></h5><br>
          <h5><a href="https://www.kemenparekraf.go.id/">kemenparekraf RI</a></h5><br>
          <h5><a href="https://www.del.ac.id/">IT Del</a></h5>
            </div>
      </div>
      <div class="col-md-3">
        <a href="{{asset('/kritik')}} " class="btn btn-warning" style="width: 190px">Kritik Dan Saran</a><br>
        
        <br>
        <a class="social mt-5" href="https://web.facebook.com/search/top?q=desa%20lumban%20suhi-suhi" target="_blank"><i class="bi bi-facebook m-3"></i></a>
        <a class="social mt-5" href="https://www.instagram.com/explore/locations/279052206/lumban-suhi-suhi-kabsamosir/?hl=id" target="_blank"><i class="bi bi-instagram"></i></i></a>
        <a class="social mt-5" href="https://api.whatsapp.com/send?phone=6282273896001" target="_blank"><i class="bi bi-whatsapp m-3"></i></a>
        <a class="social mt-5" href="https://www.youtube.com/watch?v=VLNjo2LQ2XY" target="_blank"><i class="bi bi-youtube"></i></a>
      </div>
      </div>
    </div>
     <footer class="bg-dark text-light d-flex justify-content-center"><br>          
       <center>
            <div class="mt-4">
                <div class="flex-c-m flex-w p-b-18">
                    <a href="/" class="m-all-1">
                        <img alt="Logo Desa Suhi-Suhi" width="60" src="{{asset('image')}}/logo.png ">
                    </a>
                </div>
                <br>
                <font size='2'>
                <p class="stext-107 cl6 txt-center">
                    Copyright &copy; 2021| Website UMKM Desa Suhi Suhi 
                </p>
                </font>
            </div>
       </center>
    </footer>
  </section>
  @yield('script')
  <script src="{{asset('js')}}/bootstrap.bundle.min.js "></script>
  <script src="{{asset('js')}}/script.js "></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>
  <script src="{{asset('js')}}/KatalogScript.js "></script>
  </body>
</html>
