<?php

namespace App\Http\Controllers;

use App\Models\Pengrajin;
use App\Models\Desa;
use Illuminate\Http\Request;

class PengrajinController extends Controller
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
            $data= Pengrajin::where('nama', 'LIKE','%'.$request->cari.'%')
            ->orWhere('alamat', 'LIKE', '%'.$request->cari.'%')
            ->orWhere('kontak', 'LIKE', '%'.$request->cari.'%')
            ->orWhere('kerajinan', 'LIKE', '%'.$request->cari.'%')
            ->paginate();
        }else{
            $data = Pengrajin::paginate();
        }
        return view('DataPengrajin.index', ['data'=>$data]);
    }

    public function join()
    {
         $header = Desa::find(19);
        return view('Join',[
            'header'=>$header
        ]);
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
        $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'kontak' => 'required',
            'kerajinan' => 'required',
            'foto' => 'required',
        ]);

        if ($request->file('foto')==NULL) {
            Pengrajin::create([
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'kontak' => $request->kontak,
            'kerajinan' => $request->kerajinan,
            'foto'=> $request->foto
        ]);

    } else {
        $nama = $request->nama;
        $alamat = $request->alamat;
        $kontak = $request->kontak;
        $kerajinan = $request->kerajinan;
        $foto = $request->file('foto');
        $NamaFoto = time().'.'.$foto->extension();
        $foto->move(public_path('foto'),$NamaFoto);

        $pengrajin = new Pengrajin();
        $pengrajin->nama = $nama;
        $pengrajin->alamat = $alamat;
        $pengrajin->kontak = $kontak;
        $pengrajin->kerajinan = $kerajinan;
        $pengrajin->foto = $NamaFoto;
        $pengrajin->save();
    }
        return redirect('/join')->with('success', 'Data Berhasil Ditambahkan!');
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
        $pengrajin = Pengrajin::find($id);
        return view('DataPengrajin.ubah', ['pengrajin' => $pengrajin]);
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
        if ($request->file('foto')==NULL) {
            $pengrajin = Pengrajin::find($id);
            $pengrajin->nama = $request->nama;
            $pengrajin->alamat = $request->alamat;
            $pengrajin->kontak = $request->kontak;
            $pengrajin->kerajinan = $request->kerajinan;
            $foto = $request->foto;

            $pengrajin->save();
            return redirect('/pengrajin')->with('success', 'Data Berhasil Diubah!');

        } else {
            $foto = $request->file('foto');
            $Namafoto = time().'.'.$foto->extension();
            $foto->move(public_path('foto'), $Namafoto);
    
            $nama = $request->nama;
            $alamat = $request->alamat;
            $kontak = $request->kontak;
            $kerajinan = $request->kerajinan;
    
            $pengrajin = Pengrajin::find($id);
            $pengrajin->nama = $request->nama;
            $pengrajin->alamat = $request->alamat;
            $pengrajin->kontak = $request->kontak;
            $pengrajin->kerajinan = $request->kerajinan;
            $pengrajin->foto = $Namafoto;
    
            $pengrajin->save();
            return redirect('/pengrajin')->with('success', 'Data Berhasil Diubah!');
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
        $pengrajin = Pengrajin::find($id);
        $pengrajin->delete();
        return redirect('/pengrajin')->with('success', 'Data Telah Dihapus!');
    }
}
