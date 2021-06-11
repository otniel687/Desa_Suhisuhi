<?php

namespace App\Http\Controllers;

use App\Models\Jenis;
use Illuminate\Http\Request;

class JenisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        if($request->has('cari')){
            $data= Jenis::where('nama', 'LIKE','%'.$request->cari.'%')
            ->orWhere('deskripsi', 'LIKE', '%'.$request->cari.'%')
            ->orWhere('harga', 'LIKE', '%'.$request->cari.'%')
            ->paginate();
        }else{
            $data = Jenis::paginate();
        }
        return view('DataJUlos.index', ['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $ulos = Jenis::find($id);
        return view('DataJUlos.ubah', ['ulos' => $ulos]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        if ($request->file('gambar')==NULL) {
            $ulos = Jenis::find($id);
            $ulos->id_jenis = $request->id_jenis;
            $ulos->nama = $request->nama;
            $ulos->deskripsi = $request->deskripsi;
            $ulos->harga = $request->harga;
            $gambar = $request->gambar;

            $ulos->save();
            return redirect('/jenis')->with('success', 'Data Berhasil Diubah!');

        } else {
            $gambar = $request->file('gambar');
            $NamaGambar = time().'.'.$gambar->extension();
            $gambar->move(public_path('gambar'), $NamaGambar);
    
            $id_jenis = $request->id_jenis;
            $nama = $request->nama;
            $deskripsi = $request->deskripsi;
            $harga = $request->harga;
    
            $ulos = Jenis::find($id);
            $ulos->id_jenis = $request->id_jenis;
            $ulos->nama = $request->nama;
            $ulos->deskripsi = $request->deskripsi;
            $ulos->harga = $request->harga;
            $ulos->gambar = $NamaGambar;
    
            $ulos->save();
            return redirect('/jenis')->with('success', 'Data Berhasil Diubah!');
    }
}

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $ulos = Jenis::find($id);
        $ulos->delete();
        return redirect('/jenis')->with('success', 'Data Telah Dihapus!');
    }
}
