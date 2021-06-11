<?php

namespace App\Http\Controllers;

use App\Models\Desa;
use App\Models\Jenis;
use Illuminate\Http\Request;
use App\Models\Ulos;
use Illuminate\Support\Facades\DB;

class UlosController extends Controller
{
     public function index()
    {
        $penjelasan = Desa::find(5);
        $header = Desa::find(6);
        $ragi_hidup = Jenis::find(1);
        $mangiring = Jenis::find(3);
        $ragi_hotang = Jenis::find(5);
        $ariteneng = Jenis::find(11);
        $gatip = Jenis::find(13);
        $beka_buluh = Jenis::find(9);
        $data = Ulos::all();
        return view('ulos.index', [
            'data' => $data,
            'header' => $header,
            'penjelasan' => $penjelasan, 
            'ragi_hidup' => $ragi_hidup, 
            'mangiring' => $mangiring, 
            'ragi_hotang' => $ragi_hotang,
            'ariteneng' => $ariteneng, 
            'gatip' => $gatip, 
            'beka_buluh' => $beka_buluh
            ]);
    }
    public function batak()
    {
        $ulos = DB::table('jenis_ulos')
        ->select('jenis_ulos.*')
        ->limit(8)
        ->orderBy('created_at','asc')
        ->paginate(8);
        $header = Desa::find(7);
        $about = Desa::find(8);
        return view('ulos.batak', [
            'ulos' => $ulos,
            'header' => $header,
            'about' => $about,
            ]);
    }
    public function karo()
    {   
        $ulos = DB::table('jenis_ulos')
        ->select('jenis_ulos.*')
        ->offset(8)->limit(6)->get();
        $header = Desa::find(9);
        $about = Desa::find(10);
        $about2 = Desa::find(11);
        return view('ulos.karo', [
            'ulos' => $ulos,
            'header' => $header,
            'about' => $about,
            'about2' => $about2,
            ]);
    }
}
