<?php

namespace App\Http\Controllers;

use App\Models\Desa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DesaController extends Controller
{
    
    public function home()
    {
        $dashboard = Desa::find(12);
        $footer = Desa::find(13);
        $web = Desa::find(14);
        $logo = Desa::find(15);
        
        return view('layouts.defaultone',[
            'dashboard'=>$dashboard,
            'footer'=>$footer,
            'web'=>$web,
            'logo'=>$logo,
        ]);
    }

    public function index()
    {
        $desa = Desa::orderBy('id', 'asc')->limit(4)->get();
        $galery = DB::table('galery')
        ->join('picture', 'galery.id_gambar', '=', 'picture.id')
        ->select('galery.*','picture.gambar')
        ->paginate();
        $header = Desa::find(20);
        return view('about.desa',[
            'desa'=>$desa,
            'galery'=>$galery,
            'header'=>$header,
        ], compact('desa'));
    }
}
