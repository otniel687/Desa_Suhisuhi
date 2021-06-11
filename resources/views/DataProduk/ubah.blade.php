@extends('layouts.main')
@section('title', 'Data Produk Web')
@section('container')
<div class="container">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8 mb-5"><br>
            <h1 class="text-center">UBAH DATA</h1>
            <div class="hero rounded-3 px-5 pb-5 pt-3">
                <h4><a href="/produk" class="badge bg-secondary">Kembali</a></h4>
                <form  enctype="multipart/form-data" action="/produk/update/{{ $produk->id }}" method="post">
                    {{ csrf_field() }}
                    <div class="form-group mt-3">
                        <label>Nama</label>
                        <input type="text" name="nama" class="form-control" value="{{ $produk->nama }}">
                    </div>
                    <div class="form-group mt-3">
                        <label>Harga</label>
                        <input type="text" name="harga" class="form-control" value="{{ $produk->harga }}">
                    </div>
                    <div class="form-group mt-3">
                        <label>Kontak 1</label>
                        <input type="text" name="kontak1" class="form-control" value="{{ $produk->kontak1 }}">
                    </div>
                    <div class="form-group mt-3">
                        <label>Kontak 2</label>
                        <input type="text" name="kontak2" class="form-control" value="{{ $produk->kontak2 }}">
                    </div>
                    <div class="form-group mt-3">
                        <label>Gambar</label>
                        <input type="file" name="gambar" class="form-control" value=" $produk->gambar">
                        <img src="{{asset('image')}}/{{ $produk->gambar }}" alt="gambar produk" style="max-width:100px; margin-top:20px;">
                    </div>
                    <div class="form-group">
                    <br><br>
                        <button style="float: right;" type="submit" class="btn btn-primary px-5">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection