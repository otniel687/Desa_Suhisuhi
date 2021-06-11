@extends('layouts.main')
@section('title', 'Data Web')
@section('container')
<div class="container">
    <div class="row">
        <div class="col">
            <h1 class="mt-3 mb-5">Data Gambar Galery Tentang Desa Suhi Suhi</h1>
            <table class="table table-bordered table-striped" style="text-align:center">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Foto</th>
                        <th scope="col">Sumber</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $galery)
                    <tr>
                        <th scope='row'>{{ ++$i  }}</th>
                        <td><img width="200px"src="{{asset('image')}}/{{ $galery->gambar }}" alt="Not Found"></td>
                        <td>{{ $galery->sumber }}</td>
                        <td>
                            <a href="/galery/ubah/{{ $galery->id }}"><i class="far fa-edit btn btn-success d-align-center" style="width: 150px"></i></a>
                            <a href="/galery/hapus/{{ $galery->id }}"><i class="fas fa-trash-alt btn btn-danger" style="width: 150px"></i></a>
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
                1. Untuk halaman Galeri hanya bisa melakukan Edit Data. <br>
                2. Gambar tidak boleh lebih dari 3 MB. 
            </p>
        </div>
    </div>
</div>
@endsection
