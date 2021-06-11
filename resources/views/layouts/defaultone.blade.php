@extends('welcome')
@section('map')
<section id="map" class="map" style="background-color: #bfbfbf;">
  <div class="container">
    <div class="row">
      <div class="col">
        <h2 >Peta Desa</h2>
      </div>
    </div>
  </div>
  <iframe
    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2942.982948299537!2d98.69525011206085!3d2.6501723650326356!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3031c56ea9402a2b%3A0x14c6e0940d6f41b2!2sKampung%20Inggris%20Hutaraja%20Unika!5e0!3m2!1sid!2sid!4v1616225985467!5m2!1sid!2sid"
    width="100%"
    height="350"
    style="border: 0"
    allowfullscreen=""
    loading="lazy"
  ></iframe>
</section>
@endsection
@section('footer')
<section id="footer" class="bg-dark text-light ">
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
@endsection