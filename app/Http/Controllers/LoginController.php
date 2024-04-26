<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\User;


class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function showLoginForm()
    {
        return view('sesi.login');
    }

    public function login()
    {
        return view('Berhasil');
    }

    public function actionlogin(Request $request)
    {
        Session::flash('email', $request->email);
        
        $request->validate([
            'email' => 'required',
            'password' => 'required'
            ],[
                'email.required' => 'Email wajib diisi!',
                'password.required' => 'Password wajib diisi!'
            ]);
        $infoLogin =[
            'email' => $request->email,
            'password' => $request->password
        ];

        if(Auth::attempt($infoLogin)){
            //otentikasi sukses
            return redirect('/')->with('succes', 'Selamat Anda Berhasil Login');
        }else{
            //otentikasi gagal
            return redirect('sesi')->withErrors(['Password yang dimasukkan tidak valid']);
        }
    }

    public function actionlogout()
    {
        Auth::logout();
        return redirect('/');
    }

}
