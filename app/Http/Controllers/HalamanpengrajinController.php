<?php

namespace App\Http\Controllers;

use App\Models\Desa;
use Illuminate\Http\Request;
use App\Models\Pengrajin;

class HalamanpengrajinController extends Controller
{
    //
    public  function index(Request $request)
    {
        if($request->has('cari')){
            $data= Pengrajin::where('nama', 'LIKE','%'.$request->cari.'%')
            ->orWhere('alamat', 'LIKE', '%'.$request->cari.'%')
            ->orWhere('kontak', 'LIKE', '%'.$request->cari.'%')
            ->orWhere('kerajinan', 'LIKE', '%'.$request->cari.'%')
            ->paginate();
        }else{
            $data = Pengrajin::paginate();
        }
        $header = Desa::find(16);
        return view('pengrajin.index', [
            'data'=>$data,
            'header'=>$header
            ]);
    }
    public function home()
    {
        return view('layouts.defaultone');

    }
}