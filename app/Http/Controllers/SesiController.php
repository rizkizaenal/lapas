<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SesiController extends Controller
{
    function index()
    {
        return view('login');
    }
    function login(Request $request){
        $request->validate([
            'email'=>'required',
            'password'=>'required'
        ],[
            'email.required'=>'Email wajid di isi',
            'password.required'=>'password wajid di isi'
        ]);

        $infologin =[
            'email'=>$request->email,
            'password'=>$request->password,
        ];

        if(Auth::attempt($infologin)){
           if (Auth::user()->role == 'superadmin') {
                 return redirect('admin/superadmin');
           }elseif (Auth::user()->role == 'admin') {
                 return redirect('admin/admin');
           }elseif (Auth::user()->role == 'user') {
            return redirect('admin/user');
      }
        }else{
            return redirect('')->withErrors('Username dan Password yang dimasukan tdk sesuai')->withInput();
        }
    }
    function logout(){
        Auth::logout();
        return redirect('');
    }
}
