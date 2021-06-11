@extends('layouts.main')
@section('container')
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8 mb-5"><br>
            <h1 class="text-center">UBAH DATA</h1><br> 
            <div class="hero rounded-3 px-5 pb-5 pt-3">
            <h4><a href="/galery" class="badge bg-secondary">Kembali</a></h4>
                <form  enctype="multipart/form-data" action="/galery/update/{{ $galery->id }}" method="post">
                    {{ csrf_field() }}
                    <div class="form-group  mt-3">
                        <label>Gambar</label>
                        <input type="file" name="gambar" class="form-control" value=" $galery->gambar">
                        <img src="{{asset('image')}}/{{ $galery->gambar }}" alt="Gambar Jenis web" style="max-width:400px; margin-top:20px;">
                    </div>
                    <div class="form-group  mt-3">
                        <label>Sumber</label>
                        <input type="text" name="informasi" class="form-control" value="{{ $galery->sumber }}">
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