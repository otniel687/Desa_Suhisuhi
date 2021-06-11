<!doctype html>
<html lang="en">
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
  <link rel="stylesheet" href="{{ asset('css')}}/button.css" >
  <link rel="stylesheet" href="{{ asset('css')}}/bootstrap.min.css ">
  <link rel="stylesheet" href="{{asset('css')}}/jquery-ui.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/mediaelement@4.2.7/build/mediaelementplayer.min.css">
  <link rel="stylesheet" href="{{asset('css')}}/style.css ">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&family=Satisfy&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
  <title>Join Pengrajin</title>
</head>
<body>
  <!--Navbar-->
  <header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        <img src="{{asset('../css/Image')}}/logo.png" class="rounded-circle" style="width: 100px;" alt="">
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
    background: url('../image/{{$header->gambar}} ') top center;
    background-size: cover;
    position: relative;
    padding: 0;">
    <div class="container position-relative text-center text-lg-start" data-aos="zoom-in" data-aos-delay="100">
      <div class="row">
        <div class="col-lg-8 text-center" style="font-family: 'Dancing Script', cursive;">
          <font  size="7">Bergabunglah Dengan Kami</font>
        </div>
      </div>
    </div>
  </section><br>
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Concert+One&display=swap" rel="stylesheet">
  <div class="container">
  <div class="row join-us d-flex justify-content-center">
    <div class="col-md-9">
      <div class="card hero rounded ">
          <form enctype="multipart/form-data" action="/join/simpan" method="post">
            @csrf
              <div class="form-group">
                  <label>Nama Lengkap</label>
                  <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror" value="{{ old('nama') }}" autocomplete="off" placeholder="Tuliskan nama anda">
              </div>
              @error('nama')
                      <div class="invalid-feedback">{{  $message }}</div>
                  @enderror

              <div class="form-group mt-3">
                  <label>Alamat</label>
                  <input type="text" name="alamat" class="form-control @error('alamat') is-invalid @enderror" value="{{ old('alamat') }}" autocomplete="off" placeholder="Tuliskan alamat anda"></input>
              </div>
              @error('alamat')
                      <div class="invalid-feedback">{{  $message }}</div>
                  @enderror

              <div class="form-group mt-3">
                  <label>Kontak</label>
                  <input type="text" name="kontak" class="form-control @error('kontak') is-invalid @enderror" value="{{ old('kontak') }}" autocomplete="off" placeholder="Tuliskan kontak yang dapat dihubungi"></input>
              </div>
              @error('kontak')
                      <div class="invalid-feedback">{{  $message }}</div>
                  @enderror

              <div class="form-group mt-3">
                  <label>Foto</label>
                  <input type="file" name="foto" class="form-control @error('foto') is-invalid @enderror" value="{{ old('foto') }}">
              </div>
              @error('foto')
                      <div class="invalid-feedback">{{  $message }}</div>
                  @enderror

              <div class="form-group mt-2">
              <label>Kerajinan yang dapat dibuatkan</label>
              <select name="kerajinan" class="form-control @error('kerajinan') is-invalid @enderror" value="{{ old('kerajinan') }}" autocomplete="off">
                  <option value="">Pilih Keterampilan</option>
                  <option value="Ulos Batak Toba">Ulos Batak Toba</option>
                  <option value="Ulos Batak Karo">Ulos Batak Karo</option>
                  <option value="Ulos Batak Toba dan Karo (pewarna sintesis)">Ulos Batak Toba dan Karo (pewarna sintesis)</option>
                  <option value="Ulos Batak Toba dan Karo (pewarna alami)">Ulos Batak Toba dan Karo (pewarna alami)</option>
              </select>
              </div>
              @error('kerajinan')
                      <div class="invalid-feedback">{{  $message }}</div>
                  @enderror

              <br>
              <div class="form-group mt-3">
              <button type="submit" style="float: right;" class="btn btn-primary" style='font-size:16px'><i class='far fa-paper-plane'></i> Simpan</button>
              </div>
          </form>
          <br>
      </div>
    </div>
    <div class="col-md-3 d-flex justify-content-center">
      <div>
        <label><h4>Hubungi Kami</h4></label><br>
        <div class="form-group mt-3">
            <label><i class="fab fa-whatsapp"></i> Whatsapp</label>
            <input type="text" name="kritik" class="form-control" value="" autocomplete="off" placeholder="+62822-7389-6001" disabled>
        </div>
        <div class="form-group mt-3">
            <label><i class="fas fa-envelope-open-text"></i> Email</label>
            <input type="text" name="kritik" class="form-control" value="" autocomplete="off" placeholder="raja.sondang@gmail.com" disabled>
        </div>
        <div class="form-group mt-3">
            <label><i class="fas fa-sms"></i> SMS</label>
            <input type="text" name="kritik" class="form-control" value="" autocomplete="off" placeholder="+62822-7389-6001" disabled>
        </div>
        <div class="form-group mt-3">
            <label><i class="fas fa-phone-alt"></i> Telepon</label>
            <input type="text" name="kritik" class="form-control" value="" autocomplete="off" placeholder="+62822-7389-6001" disabled>
        </div>
      </div>
    </div>
  </div>
  </div>
  <br>
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
  <script src="{{asset('js/bootstrap.bundle.min.js')}} "></script>
  <script src="{{asset('js/script.js')}} "></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>
  <script src="{{asset('js/KatalogScript.js')}} "></script>
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