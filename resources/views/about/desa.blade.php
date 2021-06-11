@extends('layouts.defaulttwo')
@section('title', 'Tentang Desa')
@section('header')
<section id="header-ulos" class=" d-flex align-items-center" style="height: 100vh;
    width: 100%;
    background: url(/Image/{{ $header->gambar}});
    background-size: cover;
    position: relative;
    padding: 0;
    filter: brightness(65%);">
  <div class="container p-4 p-md-5 mb-4 text-white rounded" style="color: #fff;  background-size: cover;">
    <div class="col-md-6 px-0">
      <h1 class="display-4 fst-italic">{{ $header->nama }}</h1>
      <p class="lead my-3">{{ $header->informasi }} </p>
    </div>
  </div>
</section>
@endsection

@section('content')
<!--Content-->
<section id="content">
  <div class="container-fluid">
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 text-center ">
      @foreach ($desa as $tentang) 
      <div class="col" data-aos="flip-right">
        <div class="card mb-4 shadow-sm">
          <div class="card-header">
            <h4 class="mt-2 mb-2 fw-normal text-center">{{$tentang->nama}}</h4>
          </div>
          <div class="card figure">
            <img class="img-fluib" src="{{ url('image') }}/{{ $tentang->gambar}}" />
          </div>
          <div class="card-body content ">
            {!! $tentang->informasi !!}
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</section>
<!--Akhir Content-->

<!--Galery-->
<section id="galery">
  <div class="container">
    <div class="row text-center">
      <div class="col">
        <h3>Galery Desa Suhisuhi</h3>
      </div>
    </div>
    <div class="row row-cols-2 row-cols-sm-2 row-cols-md-3 row-cols-lg-3 d-flex justify-content-center m-3">
      @foreach ($galery as $foto)
      <div class="col mb-3">
        <div class="card item">
          <a href="{{ url('image') }}/{{ $foto->gambar}}" class="fancybox" data-fancybox="gallery1">
            <img src="{{ url('image') }}/{{ $foto->gambar}}" class="card-img-top rounded mx-auto d-block" >
          </a>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</section>
<!--Akhir Galery-->
@endsection

@section('script')
<script src="js/jquery-3.5.1.min.js"></script>
<script type="text/javascript">
    
$(document).ready(function () {
  var readMoreHTML = $(".read-more").html();
  var lessText = readMoreHTML.substr(0, 100);
  if (readMoreHTML.length > 100) {
    $(".read-more").html(lessText).append("<a href='' class='read-more-link'> Show More</a>");
  } else {
    $("read-more").html(readMoreHTML);
  }
  $("body").on("click", ".read-more-link", function (event) {
    event.preventDefault();
    $(this).parent(".read-more").html(readMoreHTML).append("<a href='' class='show-less-link'> Show Less</a>");
  });
  $("body").on("click", ".show-less-link", function () {
    event.preventDefault();
    $(this).parent(".read-more").html(readMoreHTML.substr(0, 100)).append("<a href='' class='read-more-link'> Show More</a>");
  });
});
$(document).ready(function () {
  var readMoriHTML = $(".read-mori").html();
  var lessText = readMoriHTML.substr(0, 100);
  if (readMoriHTML.length > 100) {
    $(".read-mori").html(lessText).append("<a href='' class='read-mori-link'> Show More</a>");
  } else {
    $("read-mori").html(readMoriHTML);
  }
  $("body").on("click", ".read-mori-link", function (event) {
    event.preventDefault();
    $(this).parent(".read-mori").html(readMoriHTML).append("<a href='' class='show-less-link'> Show Less</a>");
  });
  $("body").on("click", ".show-less-link", function () {
    event.preventDefault();
    $(this).parent(".read-mori").html(readMoriHTML.substr(0, 100)).append("<a href='' class='read-mori-link'> Show More</a>");
  });
});
$(document).ready(function () {
  var readMoroHTML = $(".read-moro").html();
  var lessText = readMoroHTML.substr(0, 100);
  if (readMoroHTML.length > 100) {
    $(".read-moro").html(lessText).append("<a href='' class='read-moro-link'> Show More</a>");
  } else {
    $("read-moro").html(readMoroHTML);
  }
  $("body").on("click", ".read-moro-link", function (event) {
    event.preventDefault();
    $(this).parent(".read-moro").html(readMoroHTML).append("<a href='' class='show-less-link'> Show Less</a>");
  });
  $("body").on("click", ".show-less-link", function () {
    event.preventDefault();
    $(this).parent(".read-moro").html(readMoroHTML.substr(0, 100)).append("<a href='' class='read-moro-link'> Show More</a>");
  });
});
$(document).ready(function () {
  var readMoruHTML = $(".read-moru").html();
  var lessText = readMoruHTML.substr(0, 100);
  if (readMoruHTML.length > 100) {
    $(".read-moru").html(lessText).append("<a href='' class='read-moru-link'> Show More</a>");
  } else {
    $("read-moru").html(readMoruHTML);
  }
  $("body").on("click", ".read-moru-link", function (event) {
    event.preventDefault();
    $(this).parent(".read-moru").html(readMoruHTML).append("<a href='' class='show-less-link'> Show Less</a>");
  });
  $("body").on("click", ".show-less-link", function () {
    event.preventDefault();
    $(this).parent(".read-moru").html(readMoruHTML.substr(0, 100)).append("<a href='' class='read-moru-link'> Show More</a>");
  });
});
</script>
@endsection
