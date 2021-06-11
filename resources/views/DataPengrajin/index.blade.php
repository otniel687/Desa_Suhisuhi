@extends('layouts.main')
@section('title', 'Data Pengrajin')
@section('container')
<div class="container">
    <div class="row">
        <div class="col">
            <h1 class="mt-3">Data Pengrajin Desa Suhi-Suhi</h1>
            <div id="info">
                <form method="GET">
                    <div class="info1container d-flex"><input type="search" id="cari" size="25" name="cari"class="form-control rounded-pill " style="font-family: Arial, FontAwesome;" value="{{Request::get('cari')}}" placeholder="Cari data">&nbsp;&nbsp;<button id="bcari" class="btn btn-outline-light rounded-circle" type="submit"><i class="fas fa-search"></i></button></div>
                </form>
            </div> 
            <table class="table table-bordered table-striped" style="text-align:center">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Harga</th>
                        <th scope="col">Kontak1</th>
                        <th scope="col">Kontak2</th>
                        <th scope="col">Gambar</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $produk)
                    <tr>
                        <th scope='row'>{{ $produk->id }}</th>
                        <td>{{ $produk->nama }}</td>
                        <td>{{ $produk->alamat }}</td>
                        <td>{{ $produk->kontak }}</td>
                        <td>{{ $produk->kerajinan }}</td>
                        <td><img width="80px"src="{{asset('foto')}}/{{ $produk->foto }}" alt="not found"></td>
                        <td>
                            <a href="/pengrajin/ubah/{{ $produk->id }}"><i class="far fa-edit btn btn-success"></i></a>
                            <a href="/pengrajin/hapus/{{ $produk->id }}"><i class="fas fa-trash-alt btn btn-danger"></i></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
