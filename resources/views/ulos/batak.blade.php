@extends('layouts.defaulttwo')
@section('title', 'Ulos Batak Toba')
<!--Header-->
@section('header')
<section id="bg-batak" class="d-flex align-items-center"  style="height: 300px;
    width: 100%;
    background: url(../image/{{$header->gambar}});
    background-size: cover;
    position: relative;
    padding: 0;
    filter: brightness(70%);">
  <div class="container position-relative text-center text-lg-start " data-aos="zoom-in" data-aos-delay="100">
    <div class="row">
    <div class="col-md-6 px-0">
      <h1 class="display-4 fst-italic">{!! $header->informasi !!}</h1> 
    </div>
    </div>
  </div>
</section>
@endsection

<!--Content Ulos BATAK-->
@section('content')
<section id="ulos_batak" class="gambarb">
  <div class="container">
    <div class="row">
      <div class="col">
        <h3 class="text-center">{{$about->nama}}</h3>
      </div>
      <div class="row ">
        <div class="col-md-4 col-sm-12  col-xs-12">
          <div class="">
            <img src="{{asset('image/'.$about->gambar)}} " alt="" class="rounded mx-auto d-block" />
          </div>
        </div>
        <div class="col-md-8 col-sm-12 col-xs-12 ">
          <p class="mx-auto">
            <span class="tab"></span>{{$about->informasi}}
          </p>
        </div>
      </div>
    </div>     
  </div>
</section>
@endsection

<!--Content-->
@section('jenis')
<section id="j_ulos">
  <div class="container">
    <div class="row">
      <div class="col">
        <h3 class="text-center">Jenis Jenis Ulos</h3>
      </div>
    </div>
    <div class="row row-cols-2 row-cols-md-3 text-md-center d-flex justify-content-center m-4">

    @foreach( $ulos as $uls)          
      <div class="col">
        <div class="card mb-4 shadow-sm">
          <div class="card-header">
            <h4 class="mt-2 mb-2 fw-normal">{{ $uls->nama }}</h4>
          </div>
          <div class="card figure">
            <img class="img-fluib" src="{{asset('gambar/'.$uls->gambar)}}" alt="">
          </div>
        </div>
      </div>
      @endforeach
    </div>  
  </div>
</section>
@endsection   
