@extends('layouts.main')
@section('container')
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8 mb-5"><br>
            <h1 class="text-center">UBAH DATA</h1><br> 
            <div class="hero rounded-3 px-5 pb-5 pt-3">
            <h4><a href="/dataweb" class="badge bg-secondary">Kembali</a></h4>
                <form  enctype="multipart/form-data" action="/dataweb/update/{{ $web->id }}" method="post">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label>ID</label>
                        <input type="text" name="id" class="form-control" value="{{ $web->id }}">
                    </div>
                    <div class="form-group  mt-3">
                        <label>Nama</label>
                        <input type="text" name="nama" class="form-control" value="{{ $web->nama }}">
                    </div>
                    <div class="form-group  mt-3">
                        <label>Informasi</label>
                        <textarea class="form-control @error('keluhan') is-invalid @enderror" name="informasi" rows="5" >{{ old('keluhan', $web->informasi) }}</textarea>
                    </div>
                    <div class="form-group  mt-3">
                        <label>Gambar</label>
                        <input type="file" name="gambar" class="form-control" value=" $web->gambar">
                        <img src="{{asset('image')}}/{{ $web->gambar }}" alt="Gambar Jenis web" style="max-width:100px; margin-top:20px;">
                    </div>
                    <div class="form-group  mt-3">
                        <label>Sumber</label>
                        <input type="text" name="sumber" class="form-control" value="{{ $web->sumber }}">
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