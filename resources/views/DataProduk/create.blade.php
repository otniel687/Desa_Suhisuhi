@extends('layouts.main')
@section('title', 'Data Produk Web')
@section('container')
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<div class="container">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8 mb-5"><br>
            <h1 class="text-center">UBAH DATA</h1>
            <div class="hero rounded-3 px-5 pb-5 pt-3">
                <h4><a href="/produk" class="badge bg-secondary">Kembali</a></h4>
                <form  enctype="multipart/form-data" action="/produk/store" method="post">
                    {{ csrf_field() }}
                    <div class="form-group mt-3">
                        <label>Nama</label>
                        <input type="text" name="nama" class="form-control" placeholder="Masukkan Nama Jenis Ulos">
                    </div>
                    <div class="form-group mt-3">
                        <label>Harga</label>
                        <input type="text" name="harga" class="form-control" placeholder="Masukkan Kisaran Harga">
                    </div>
                    <div class="form-group mt-3">
                        <label>Kontak 1</label>
                        <input type="text" name="kontak1" class="form-control" placeholder="Masukkan Kontak Pengerajin">
                    </div>
                    <div class="form-group mt-3">
                        <label>Kontak 2</label>
                        <input type="text" name="kontak2" class="form-control" placeholder="Masukkan Kontak Pengerajin">
                    </div>
                    <div class="form-group mt-3">
                        <label>Gambar</label>
                        <input type="file" name="gambar" class="form-control" placeholder=" $produk->gambar">
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
