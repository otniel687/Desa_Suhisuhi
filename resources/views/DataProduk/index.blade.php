@extends('layouts.main')
@section('title', 'Data Produk Web')
@section('container')
<div class="container mb-5">
    <div class="row ">
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
                        <th scope="col">Kontak 1</th>
                        <th scope="col">Kontak 2</th>
                        <th scope="col">Gambar</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $produk)
                    <tr>
                        <th scope='row'>{{ ++$i}}</th>
                        <td>{{ $produk->nama }}</td>
                        <td>{{ $produk->harga }}</td>
                        <td>{{ $produk->kontak1 }}</td>
                        <td>{{ $produk->kontak2 }}</td>
                        <td><img width="150px"src="{{asset('image')}}/{{ $produk->gambar }}" alt="not found"></td>
                        <td>
                            <a href="/produk/ubah/{{ $produk->id }}"><i class="far fa-edit btn btn-success"></i></a>
                            <a href="/produk/hapus/{{ $produk->id }}"><i class="fas fa-trash-alt btn btn-danger"></i></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            
        </div>
    </div>
    <div class="d-flex justify-content-end">
        {{ $data->links()}}
    </div>
    <a href="/produk/create" class="btn btn-primary"> + Buat Produk Baru</a>
     <div class="row card bg-light m-5">
            <h2>NB:</h2><br>
            <p>
                1. Untuk halaman Data Produk dapat melakukan Create dan Edit Data. <br>
                2. Gambar tidak boleh lebih dari 3 MB. <br>
                3. Untuk bagian Nama, Harga, Kontak 1 tidak boleh kosong, jika data tersebut kosong maka akan terjadi EROR.
            </p>
        </div>
    </div>
</div>
@endsection
