<?php

namespace App\Http\Controllers;

use App\Models\Desa;
use Illuminate\Http\Request;

class DataWebController extends Controller
{
    public function index(Request $request)
    {
        if($request->has('cari')){
            $data= Desa::where('nama', 'LIKE','%'.$request->cari.'%')
            ->orWhere('informasi', 'LIKE', '%'.$request->cari.'%')
            ->paginate();
        }else{
            $data = Desa::simplePaginate(10);
        }

        return view('DataWeb.index', ['data'=>$data])->with('i',(request()->input('page',1) - 1) * 10);
    }

    public function create($id)
    {
        $web = Desa::find($id);
        return view('DataWeb.create', ['web' => $web]);
    }

    public function store(Request $request)
    {
         $request->validate([
            'nama' => 'required',
            'informasi' => 'required',
            'gambar' => 'required',
        ]);

        if ($request->file('gambar')==NULL) {
            Desa::create([
            'nama' => $request->nama,
            'informasi' => $request->informasi,
            'gambar'=> $request->gambar
        ]);

    } else {
        $nama = $request->nama;
        $informasi = $request->informasi;
        $gambar = $request->file('gambar');
        $Namagambar = time().'.'.$gambar->extension();
        $gambar->move(public_path('gambar'),$Namagambar);

        $web = new Desa();
        $web->nama = $nama;
        $web->informasi = $informasi;
        $web->gambar = $Namagambar;
        $web->save();
    }
        return view('DataWeb.index')->with('success', 'Data Berhasil Ditambahkan!');
    }

    public function show($id)
    {
        
    }

    public function edit($id)
    {
        $web = Desa::find($id);
        return view('DataWeb.ubah', ['web' => $web]);
    }

    public function update(Request $request,$id)
    {
        if ($request->file('gambar')==NULL) {
            $web = Desa::find($id);
            $web->nama = $request->nama;
            $web->informasi = $request->informasi;
            $gambar = $request->gambar;
            $web->sumber = $request->sumber;

            $web->save();
            return redirect('/dataweb')->with('success', 'Data Berhasil Diubah!');

        } else {
            $gambar = $request->file('gambar');
            $Namagambar = time().'.'.$gambar->extension();
            $gambar->move(public_path('gambar'), $Namagambar);
    
            $nama = $request->nama;
            $informasi = $request->informasi;
            $sumber = $request->sumber;
    
            $web = Desa::find($id);
            $web->nama = $request->nama;
            $web->informasi = $request->informasi;
            $web->gambar = $Namagambar;
            $web->sumber = $request->sumber;
            $web->save();
            
            return redirect('/dataweb')->with('success', 'Data Berhasil Diubah!');
        }
    }

    public function destroy($id)
    {
        $web = Desa::find($id);
        $web->delete();
        return redirect('/dataweb')->with('success', 'Data Telah Dihapus!');
    }
}
