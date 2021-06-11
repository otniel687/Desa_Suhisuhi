@extends('layouts.main')
@section('container')
<div class="container">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8 mb-5"><br>
            <h1 class="text-center">UBAH DATA</h1>
            <div class="hero rounded-3 px-5 pb-5 pt-3">
                <h4><a href="/pengrajin" class="badge bg-secondary">Kembali</a></h4>
                <form  enctype="multipart/form-data" action="/pengrajin/update/{{ $pengrajin->id }}" method="post">
                    {{ csrf_field() }}
                    <div class="form-group mt-3">
                        <label>Nama</label>
                        <input type="text" name="nama" class="form-control" value="{{ $pengrajin->nama }}">
                    </div>
                    <div class="form-group mt-3">
                        <label>Alamat</label>
                        <input type="text" name="alamat" class="form-control" value="{{ $pengrajin->alamat }}">
                    </div>
                    <div class="form-group mt-3">
                        <label>Kontak</label>
                        <input type="text" name="kontak" class="form-control" value="{{ $pengrajin->kontak }}">
                    </div>
                    <div class="form-group mt-3">
                        <label>Kerajinan</label>
                        <input type="text" name="kerajinan" class="form-control" value="{{ $pengrajin->kerajinan }}">
                    </div>
                    <div class="form-group mt-3">
                        <label>Foto</label>
                        <input type="file" name="foto" class="form-control" value=" $pengrajin->foto">
                        <img src="{{asset('foto')}}/{{ $pengrajin->foto }}" alt="Foto Pengrajin" style="max-width:100px; margin-top:20px;">
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