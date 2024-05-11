<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class UserController extends Controller
{
    public function index()
    {
        return view ('login');
    }

    public function loginproses(Request $request)
    {
       $request->validate([
        'email' => 'required',
        'password' => 'required',
       ]);

       $data = [
        'email' =>    $request->email,
        'password' => $request->password
       ];

       if(Auth::attempt($data)){
        return redirect('/beranda');
       }else{
        return redirect()->route('login')->with('gagaaal', 'saaalaah');
       }
    }

    public function register()
    {
        return view('register');
    }

    public function insertuser(Request $request){
        User::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'alamat' => $request->alamat,
            'notelpon' => $request->notelpon,
            'nosim' => $request->nosim,
            'password' => $request->password,
        ]);
        return redirect('/beranda');
     }
     

     

}
