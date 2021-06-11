<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="Icon" class="rounded-circle" href="{{asset('../css/Image')}}/logo.png ">  
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,700,900"> 

  <!-- Icon -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
  {{-- <link href="https://fonts.googleapis.com/css2?family=Original+Surfer&display=swap" rel="stylesheet"> --}}
  <link rel="stylesheet" href="{{ asset('css')}}/loginstyle.css" >
  <link rel="stylesheet" href="{{ asset('css')}}/bootstrap.min.css ">
  <link rel="stylesheet" href="{{asset('css')}}/jquery-ui.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/mediaelement@4.2.7/build/mediaelementplayer.min.css">
  <link rel="stylesheet" href="{{asset('css')}}/style.css ">
  <link rel="stylesheet" href="{{asset('css')}}/button.css ">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&family=Satisfy&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
  <title>Kritik Saran</title>
</head>
<body>
   <header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        <img src="{{asset('../css/image')}}/logo.png " class="rounded-circle" style="width: 100px;" alt="">
        <h3 class="navbar-brand" href="#"><strong> DESA SUHISUHI</strong></h3>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link " aria-current="page" href="{{url('/')}} ">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('/desa')}}">Desa</a>
            </li>
            </li>
              <li class="nav-item">
              <a class="nav-link" href="{{asset('/ulos')}}">Ulos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('/katalog')}} ">Katalog</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('/halamanpengrajin')}} ">Pengrajin</a>
            </li>
          </ul>
        </div>
      </div><br>
    </nav>
  </header>
    
  <section id="sopi" class="d-flex align-items-center" style="width: 100%;
    height: 30vh;
    background: url('../image/{{ $header->gambar}} ') top center;
    background-size: cover;
    position: relative;
    padding: 0;">
    <div class="container position-relative text-center text-lg-start" data-aos="zoom-in" data-aos-delay="100">
      <div class="row">
        <div class="col-lg-8" style="font-family: 'Dancing Script', cursive;">
          <font size="7"><center>Kritik dan Saran</center></font>
        </div>
      </div>
    </div>
  </section><br>
    <div class="container">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Concert+One&display=swap" rel="stylesheet">
    <style>
      label, button{
        font-family: 'Concert One', cursive;
      }
    </style>
        <div class="row">
            <div class="col">
              <div class="container card rounded" class="hero rounded-3 px-5 pb-5 pt-5">
                  <br>
                  <form enctype="multipart/form-data" action="/kritik/simpan" method="post">
                    @csrf
                      <div class="form-group mt-3">
                          <label>Nama</label>
                          <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror" value="{{ old('nama') }}" autocomplete="off" placeholder="Tuliskan Nama Anda">
                          @error('nama')
                              <div class="invalid-feedback">{{  $message }}</div>
                          @enderror
                      </div>
                      <div class="form-group mt-3">
                          <label>Kritik</label>
                          <textarea type="text" name="kritik" class="form-control  @error('kritik') is-invalid @enderror" value="{{ old('kritik') }}" autocomplete="off" placeholder="Tuliskan kritik anda terhadap website"></textarea>
                          @error('kritik')
                              <div class="invalid-feedback">{{  $message }}</div>
                          @enderror

                      </div>
                      <div class="form-group mt-3">
                          <label>Saran</label>
                          <textarea type="text" name="saran" class="form-control @error('saran') is-invalid @enderror" value="{{ old('saran') }}" autocomplete="off" placeholder="Tuliskan saran anda yang dapat membantu dalam pengembangan situs web"></textarea>
                          @error('saran')
                              <div class="invalid-feedback">{{  $message }}</div>
                          @enderror
                      </div>
                      <br>
                      <div class="form-group mt-3">
                      <button type="submit" style="float: right;" class="btn btn-primary" style='font-size:16px'><i class='far fa-paper-plane'></i> Simpan</button>
                      </div>
                  </form>
                  <br>
              </div>
            </div>
        </div>
    </div><br>
   <footer class="bg-dark text-light d-flex justify-content-center"><br>          
       <center>
            <div class="mt-4">
                <div class="flex-c-m flex-w p-b-18">
                    <a href="/" class="m-all-1">
                        <img alt="Logo Desa Suhi-Suhi" width="60" src="{{asset('../image/logo.png')}} ">
                    </a>
                </div>
                <br>
                <font size='2'>
                <p class="stext-107 cl6 txt-center">
                    Copyright &copy; 2021 | Website UMKM Desa Suhi-Suhi
                </p>
                </font>
            </div>
       </center>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <script>
        //message with toastr
        @if(session()-> has('success'))
        
            toastr.success('{{ session('success') }}', 'BERHASIL!'); 

        @elseif(session()-> has('error'))

            toastr.error('{{ session('error') }}', 'GAGAL!'); 
            
        @endif
    </script>
  </body>
</html>