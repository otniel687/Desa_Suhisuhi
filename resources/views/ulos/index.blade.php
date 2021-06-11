@extends('layouts.defaulttwo')
@section('title','Ulos')
  <!--Header-->
@section('header')
<section id="header-ulos" class=" d-flex align-items-center" style="height: 100vh;
    width: 100%;
    background: url(../css/Image/{{ $header->gambar}});
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

<!--Content-->
@section('content')
<section id="content_ulos">
    <div class="container">
        <div class="row justify_content-start">
            <div class="col-md-2">
                <h3>Ulos Batak</h3>
            </div>
            <div class="col-md-4">
                <a href="{{url('/ulos/batak')}}" class="btn btn-secondary" >Jelajahi Sekarang</a>
            </div>
        </div>
      <div class="row row-cols-2 row-cols-md-3 text-center m-3 d-flex justify-content-center">
        <div class="col">
          <div class="card mb-4 shadow-sm">
            
            <div class="card figure">
              <img class="img-fluib" src="{{asset('gambar')}}/{{ $ragi_hidup->gambar }}" alt="" />
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card mb-4 shadow-sm">
            <div class="card figure">
              <img class="img-fluib" src="{{asset('gambar')}}/{{ $mangiring->gambar }}" alt="" />
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card mb-4 shadow-sm">
            <div class="card figure">
              <img class="img-fluib" src="{{asset('gambar')}}/{{ $ragi_hotang->gambar }}" alt="" />
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
        <div class="row justify_content-start">
            <div class="col-md-2">
                <h3>Ulos Karo</h3>
            </div>
            <div class="col-md-4">
                <a href="{{asset('/ulos/karo')}}" class="btn btn-secondary" >Jelajahi Sekarang</a>
            </div>
        </div>
      <div class="row row-cols-2 row-cols-md-3 text-center d-flex justify-content-center m-3">
        <div class="col">
          <div class="card mb-4 shadow-sm">
            
            <div class="card figure">
              <img class="img-fluib" src="{{asset('gambar')}}/{{ $ariteneng->gambar }}" alt="" />
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card mb-4 shadow-sm">
            
            <div class="card figure">
              <img class="img-fluib" src="{{asset('gambar')}}/{{ $gatip->gambar }}" alt="" />
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card mb-4 shadow-sm">
            
            <div class="card figure">
              <img class="img-fluib" src="{{asset('gambar')}}/{{ $beka_buluh->gambar }}" alt="" />
            </div>
          </div>
        </div>
      </div>
    </div>
</section>
@endsection

<!--Proses-->
@section('penjelasan')
<section id="prosesb" class="gambarb">
  <div class="container">
    <div class="row">
      <div class="col">
        <h3 class="text-center">{{ $penjelasan->nama}}</h3>
      </div>
      <div class="row">
        <div class="col">
          <p>
            <span class="tab"></span>{{ $penjelasan->informasi}}
          </p>
        </div>
      </div>
        @foreach( $data as $ulos)
          <h4>{{ $ulos->judul }}</h4>
          <p >{{ $ulos->informasi}}</p>
          <img src="image/{{ $ulos->gambar }}" alt="" class="mb-4">
        @endforeach
    </div>
    <div class="row">
      <div class="col">
        <p>Sumber : {{ $penjelasan->sumber}}</p>
      </div>
    </div>
  </div>
</section>
@endsection

