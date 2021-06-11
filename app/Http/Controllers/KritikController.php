<?php

namespace App\Http\Controllers;

use App\Models\Pengguna;
use App\Models\Desa;
use Illuminate\Http\Request;

class KritikController extends Controller
{
    public function tampil()
    {
        $header = Desa::find(19);
        return view('KritikSaran',[
            'header'=>$header
        ]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Pengguna::simplePaginate(5);
        
        return view('DataPengguna.index', [
            'data'=>$data,
            ])->with('i',(request()->input('page',1) - 1) * 10);
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
            'kritik' => 'required|max:255',
            'saran' => 'required|max:255',
        ]);

        Pengguna::create([
            'nama' => $request->nama,
            'kritik' => $request->kritik,
            'saran' => $request->saran
        ]);

        return redirect('/kritik')->with('success', 'Kritik dan Saran Anda Berhasil Di Masukkan!');
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
        $kritik = Pengguna::find($id);
        $kritik->delete();
        return redirect('/kritiksaran')->with('success', 'Data Telah Dihapus!');
    }
}
