@extends('layouts.defaulttwo')
@section('title', 'Katalog')
  <!--Carousel-->
@section('header')
<article class="" id="carousel">
  <div>
    <div class="bd-example ">
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
          <ol class="carousel-indicators">
            <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"></li>
            <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"></li>
            <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="image/UlosLarge.jpg" alt="Los Angeles" width="100%" height="" />
              <div class="carousel-caption d-none d-md-block">
                <h1>P R O D U K</h1>
                <p>Ulos Desa Lumban Suhi-Suhi</p>
              </div>
            </div>

            <div class="carousel-item">
              <img src="image/UlosDesign.jpeg" alt="Los Angeles" width="100%" height="" />
            </div>

            <div class="carousel-item">
              <img src="image/uloscarausel.jpg" alt="Los Angeles" width="100%" height="" />
            </div>

          </div>
          <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </a>
        </div>
    </div>
  </div>
</article>
@endsection

<!--Katalog-->
@section('content')
<section class="produk">
  <div class="row text-center m-5">
    <div class="col">
      {!! $header->informasi !!}
    </div>
  </div>
  <div class="album py-5 bg-light">
    <div class="container-fluid">
      <div class="row row-cols-2 row-cols-sm-2 row-cols-md-3 row-cols-lg-5 d-flex justify-content-center">
      @foreach($produk as $produk)
        <div class="col mb-4">
          <div class="card shadow-sm ">
            <div class="wrapper">
              <div class="gallery">
                <div class="image">
                    <span><img src="{{ url('image') }}/{{ $produk->gambar }}" class="bd-placeholder-img img-produk"  ></span>
                  <li class="text-center mt-2">{{ $produk->nama }}</li>
                </div>
              </div>
            </div>
            <div class="card-body d-flex justify-content-center">                  
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group "> 
                  <button type="button" class="btnMore "  data-bs-toggle="modal" data-bs-target="#produk0{{ $produk->id }}">Beli</button>                      <!-- Modal -->
                  <div class="modal fade" id="produk0{{ $produk->id }}" tabindex="-1" aria-labelledby="produk0Label" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="produk0Label"></h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body row">
                          <div class="col-md-5 img">
                            <img width="100%" src="{{asset('image')}}/{{ $produk->gambar }}" alt="not found">
                          </div>
                          <div class="col-md-7">
                            <p><ul>
                            <h5><b> <li>{{ $produk->nama }}</li></b> </h5>
                            <hr size="6" />
                            </ul></p>
                            <p><ul> Jika anda berminat dengan ulos ini, anda dapat menghubungi No. Dibawah ini :</ul></p>
                            <p><ul>
                              <li>{{ $produk->kontak1 }}</li>
                              <li>{{ $produk->kontak2 }}</li>
                            </ul></p>
                            <p><ul>
                            <hr />
                              <li>Dengan kisaran harga:</li>
                              <li>{{ $produk-> harga }}</li>
                            </ul></p>
                          </div>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        @endforeach
      </div>
      <div class="preview-box">
        <div class="details">
          @foreach ($ulos as $ulos)
          <span class="title">
            
            <p class="current-img"></p>
            <p class="total-img"></p>
            
          </span>
          @endforeach
          <span class="icon fas fa-times"></span>
        </div>
        <div class="image-box">
          <img src="" alt="" />
        </div>
      </div>
    <div class="shadow"></div>
  </div>
</div>
</section>
@endsection