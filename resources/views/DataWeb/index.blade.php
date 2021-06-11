@extends('layouts.main')
@section('title', 'Data Web')
@section('container')
<div class="container">
    <div class="row">
        <div class="col">
            <h1 class="mt-3">Data Website UMKM Ulos Desa Suhi Suhi</h1>
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
                        <th scope="col">Informasi</th>
                        <th scope="col">Foto</th>
                        <th scope="col">Sumber</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $web)
                    <tr>
                        <th scope='row'>{{ ++$i  }}</th>
                        <td>{{ $web->nama }}</td>
                        <td>{{ $web->informasi }}</td>
                        <td><img width="80px"src="{{asset('image')}}/{{ $web->gambar }}" alt="Not Found"></td>
                        <td>{{ $web->sumber }}</td>
                        <td>
                            <a href="/dataweb/ubah/{{ $web->id }}"><i class="far fa-edit btn btn-success mb-2"></i></a>
                            <a href="/dataweb/hapus/{{ $web->id }}"><i class="fas fa-trash-alt btn btn-danger mt-2"></i></a>
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
    <div class="row card bg-light m-5">
            <h2>NB:</h2><br>
            <p>
                1. Untuk halaman Data Web hanya bisa melakukan Edit Data. <br>
                2. Untuk halaman Informasi Tentang Desa (No. 1 - 4) div class="read-more" dan selanjutnya harus tetap menggunakan class tersebut agar tampilan nya tidak rusak serta di akhiri dengan Akhir. <br>
                3. Untuk bagian Nama dan Informasi tidak boleh kosong, jika data tersebut kosong maka akan terjadi EROR. <br>
                4. Gambar tidak boleh lebih dari 3 MB. 
            </p>
        </div>
    </div>
</div>
@endsection
