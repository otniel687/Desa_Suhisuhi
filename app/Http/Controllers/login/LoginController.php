<?php

namespace App\Http\Controllers\login;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Desa;
use App\Models\User;
use illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){
        $web = Desa::find(17);
        $logo = Desa::find(14);
        return view('login',[
            'web'=>$web,
            'logo'=>$logo,
        ]);
    }

    public function login(Request $request){
        if (Auth::attempt(['username'=>$request->username,'password'=>$request->password])) {
            return redirect('/pengrajin');
        }
           return redirect('/login')->with('message','Username atau Password yang anda masukkan Salah');
    }

    public function logout(Request $request){
        Auth::logout();
        return redirect('/');
    }
}
