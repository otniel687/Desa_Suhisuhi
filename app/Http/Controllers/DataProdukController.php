<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class DataProdukController extends Controller
{
    public function index(Request $request)
    {
        if($request->has('cari')){
            $data= Produk::where('nama', 'LIKE','%'.$request->cari.'%')
            ->orWhere('harga', 'LIKE', '%'.$request->cari.'%')
            ->orWhere('kontak1', 'LIKE', '%'.$request->cari.'%')
            ->orWhere('kontak2', 'LIKE', '%'.$request->cari.'%')
            ->paginate();
        }else{
            $data = Produk::simplePaginate(10);
        }
        return view('DataProduk.index', ['data'=>$data])->with('i',(request()->input('page',1) - 1) * 10);
    }

    public function create()
    {
        return view('DataProduk.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'harga' => 'required',
            'kontak1' => 'required',
        ]);

        if ($request->file('gambar')==NULL) {
            Produk::create([
            'nama' => $request->nama,
            'harga' => $request->harga,
            'kontak1' => $request->kontak1,
            'kontak2' => $request->kontak2,
            'gambar'=> $request->gambar
        ]);

    } else {
        $nama = $request->nama;
        $harga = $request->harga;
        $kontak1 = $request->kontak1;
        $kontak2 = $request->kontak2;
        $gambar = $request->file('gambar');
        $Namagambar = time().'.'.$gambar->extension();
        $gambar->move(public_path('image'),$Namagambar);

        $produk = new Produk();
        $produk->nama = $nama;
        $produk->harga = $harga;
        $produk->kontak1 = $kontak1;
        $produk->kontak2 = $kontak2;
        $produk->gambar = $Namagambar;
        $produk->save();
    }
        return redirect('/produk')->with('success', 'Data Berhasil Ditambahkan!');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $produk = Produk::find($id);
        return view('DataProduk.ubah', ['produk' => $produk]);
    }

    public function update(Request $request, $id)
    {
        if ($request->file('gambar')==NULL) {
            $produk = Produk::find($id);
            $produk->nama = $request->nama;
            $produk->harga = $request->harga;
            $produk->kontak1 = $request->kontak1;
            $produk->kontak2 = $request->kontak2;
            $gambar = $request->gambar;

            $produk->save();
            return redirect('/produk')->with('success', 'Data Berhasil Diubah!');

        } else {
            $gambar = $request->file('gambar');
            $Namagambar = time().'.'.$gambar->extension();
            $gambar->move(public_path('image'), $Namagambar);
    
            $nama = $request->nama;
            $harga = $request->harga;
            $kontak1 = $request->kontak1;
            $kontak2 = $request->kontak2;
    
            $produk = Produk::find($id);
            $produk->nama = $request->nama;
            $produk->harga = $request->harga;
            $produk->kontak1 = $request->kontak1;
            $produk->kontak2 = $request->kontak2;
            $produk->gambar = $Namagambar;
    
            $produk->save();
            return redirect('/produk')->with('success', 'Data Berhasil Diubah!');
        }
    }

    public function destroy($id)
    {
        $produk = Produk::find($id);
        $produk->delete();
        return redirect('/produk')->with('success', 'Data Telah Dihapus!');
    }
}
