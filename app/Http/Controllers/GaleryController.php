<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Galery;

class GaleryController extends Controller
{
    
    public function index(Request $request)
    {
        $data = Galery::simplePaginate(10);

        return view('GaleryDesa.index', ['data'=>$data])->with('i',(request()->input('page',1) - 1) * 10);
    }

    public function create($id)
    {
        // $galery = Galery::find($id);
        // return view('GaleryDesa.create', ['galery' => $galery]);
    }

    public function store(Request $request)
    {
    //      $request->validate([
    //         'gambar' => 'required',
    //     ]);

    //     if ($request->file('gambar')==NULL) {
    //         Galery::create([
    //         'gambar'=> $request->gambar
    //     ]);

    // } else {
    //     $gambar = $request->file('gambar');
    //     $Namagambar = time().'.'.$gambar->extension();
    //     $gambar->move(public_path('gambar'),$Namagambar);

    //     $galery = new Galery();
    //     $galery->gambar = $Namagambar;
    //     $galery->save();
    // }
    //     return view('GaleryDesa.index')->with('success', 'Data Berhasil Ditambahkan!');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $galery = Galery::find($id);
        return view('GaleryDesa.ubah', ['galery' => $galery]);
    }

    public function update(Request $request, $id)
    {
        if ($request->file('gambar')==NULL) {
            $web = Galery::find($id);
            $gambar = $request->gambar;

            $web->save();
            return redirect('/galery')->with('success', 'Data Berhasil Diubah!');

        } else {
            $gambar = $request->file('gambar');
            $Namagambar = time().'.'.$gambar->extension();
            $gambar->move(public_path('image'), $Namagambar);
    
            $web = Galery::find($id);
            $web->gambar = $Namagambar;
            $web->save();
            
            return redirect('/galery')->with('success', 'Data Berhasil Diubah!');
        }
    }

    public function destroy($id)
    {
        $web = Galery::find($id);
        $web->delete();
        return redirect('/galery')->with('success', 'Data Telah Dihapus!');
    }
}
