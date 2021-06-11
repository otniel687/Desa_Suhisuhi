@extends('layouts.main')
@section('title', 'Kritik dan saran')
@section('container')
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1 class="mt-3">Kritik dan Saran</h1>
            <div id="info">
                <form method="GET">
                    <div class="info1container d-flex"><input type="search" id="cari" size="25" name="cari"class="form-control rounded-pill " style="font-family: Arial, FontAwesome;" value="{{Request::get('cari')}}" placeholder="Cari data">&nbsp;&nbsp;<button id="bcari" class="btn btn-outline-light rounded-circle" type="submit"><i class="fas fa-search"></i></button></div>
                </form>
            </div> 
            <table class="table table-bordered table-striped" style="text-align:center">
                <thead>
                    <tr>
                        <th scope="col">Nama</th>
                        <th scope="col">Kritik</th>
                        <th scope="col">Saran</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $ulos)
                    <tr>
                        <td scope='row'>{{ $ulos->nama }}</td>
                        <td>{{ $ulos->kritik  }}</td>
                        <td>{{ $ulos->saran }}</td>
                        <td>
                            <a href="/kritiksaran/hapus/{{ $ulos->id }}"><i class="fas fa-trash-alt btn btn-danger"></i></a>
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
</div>
@endsection
