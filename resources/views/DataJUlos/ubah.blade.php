@extends('layouts.main')
@section('container')
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8 mb-5"><br>
            <h1 class="text-center">UBAH DATA</h1><br> 
            <div class="hero rounded-3 px-5 pb-5 pt-3">
            <h4><a href="/jenis" class="badge bg-secondary">Kembali</a></h4>
                <form  enctype="multipart/form-data" action="/jenis/update/{{ $ulos->id }}" method="post">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label>ID</label>
                        <input type="text" name="id_jenis" class="form-control" value="{{ $ulos->id_jenis }}">
                    </div>
                    <div class="form-group  mt-3">
                        <label>Nama</label>
                        <input type="text" name="nama" class="form-control" value="{{ $ulos->nama }}">
                    </div>
                    <div class="form-group  mt-3">
                        <label>Deskripsi</label>
                        <input type="text" name="deskripsi" class="form-control" value="{{ $ulos->deskripsi }}">
                    </div>
                    <div class="form-group  mt-3">
                        <label>Harga</label>
                        <input type="text" name="harga" class="form-control" value="{{ $ulos->harga }}">
                    </div>
                    <div class="form-group  mt-3">
                        <label>Gambar</label>
                        <input type="file" name="gambar" class="form-control" value=" $ulos->gambar">
                        <img src="{{asset('gambar')}}/{{ $ulos->gambar }}" alt="Gambar Jenis Ulos" style="max-width:100px; margin-top:20px;">
                    </div>
                    <div class="form-group">
                    <br><br>
                        <button style="float: right;" type="submit" class="btn btn-primary px-4">Ubah</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection