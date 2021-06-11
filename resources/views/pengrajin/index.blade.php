@extends('layouts.defaulttwo')
@section('title', 'Pengrajin')
<!--Header-->
@section('header')
<section id="pengrajin" class="d-flex align-items-center" style="height: 100vh;
    width: 100%;
    background: url(../css/Image/{{$header->gambar}});
    background-size: cover;
    position: relative;
    padding: 0;
    filter: brightness(60%);">
  <div class="container p-4 p-md-5 mb-4 mt-5 text-white rounded" style="color: #fff;  background-size: cover;">
    <div class="col-md-8 px-0">
      <h1 class="display-4 fst-italic">{{ $header->nama}} </h1>
      <p class="lead ">
        {!! $header->informasi !!}
      </p><br>
      <br>
      <div class="join_pengerajin">
      <b>Khusus Pengrajin,<br>
      Jika ingin bergabung, hanya mengisi data yang ada pada tombol dibawah ini.</b><br>
      <a class="navbar-brand" href="/join">          
      <button class="btn btn-danger mt-3" href="/join"><i class="fas fa-hand-point-right"></i> Bergabunglah dengan kami</button></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      </div>
    </div>
  </div>
</section>
@endsection

<!--Pengerajin -->
@section('content')
<section id="galery" class="galery pengrajin">
    <div class="container-fluid">
      <div>
        <div id="info" style="float: right;">
          <form method="GET">
              <div class="info1container d-flex"><input type="search" id="cari" size="25" name="cari"class="form-control rounded-pill " style="font-family: Arial, FontAwesome;" value="{{Request::get('cari')}}" placeholder="Cari postingan pengrajin">&nbsp;&nbsp;<button id="bcari" class="btn btn-secondary rounded-circle" type="submit"><i class="fas fa-search"></i></button></div>
          </form>
        </div> 
      </div><br><br><br>
      <center>
      <div class = "row row-cols-2 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 d-flex justify-content-center mb-5">
        @foreach($data as $pr)
        <div class ="col d-flex justify-content-center mb-5" >
          <div class="card align-center" >
            <img src="{{asset('foto')}}/{{ $pr->foto }}"   class="image-produk">
            <div class="card-body ">
              <h5 class="card-title text-center ">{{$pr->nama}}</h5>
              <!-- Button trigger modal -->
              <button type="button" class="btn btn-success d-flex justify-content-center" data-bs-toggle="modal" data-bs-target="#exampleModal{{$pr->id}}">Profil</button>
              <!-- Modal -->
              <div class="modal fade" id="exampleModal{{$pr->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Tentang Pengrajin</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <table class="table table-hover" cellpadding="10">
                        <tr>
                            <td>Nama</td>
                            <td>:</td>
                            <td>{{$pr->nama}}</td>
                        </tr>
                        <tr>
                            <td>Contact Person</td>
                            <td>:</td>
                            <td>{{$pr->kontak}}</td>
                        </tr>
                        <tr>
                            <td>Lokasi</td>
                            <td>:</td>
                            <td>{{$pr->alamat}}</td>
                        </tr>
                        <tr>
                            <td>Ulos yang dapat di buat </td>
                            <td>:</td>
                            <td>{{$pr->kerajinan}}</td>
                        </tr>
                      </table>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div> 
        </div><br><br>
        @endforeach
    </div>
  </div>
</section>
@endsection


        