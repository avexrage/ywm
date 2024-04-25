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
    $request->validate([
        'identifier' => [
            'required', 
            'regex:/^([a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+|0[1-9][0-9]{7,13})$/'
        ],[
            'identifier.required' => 'Email atau Nomor HP harus diisi!',
            'identifier.regex' => 'Masukkan format Email yang valid atau Nomor HP Indonesia tanpa tanda +'
        ]
    ]);

    $identifier = $request->input('identifier');
    $user = null;

    // Cek apakah input adalah email atau nomor HP dan mencari user berdasarkan itu
    if (filter_var($identifier, FILTER_VALIDATE_EMAIL)) {
        $user = User::where('email', $identifier)->first();
    } else {
        $user = User::where('no_hp', $identifier)->first();
    }

    if ($user) {
        // Manually login the user without password
        Auth::login($user); // Login the user
        return redirect()->intended('/'); // Redirect to intended page or default to 'home'
    } else {
        Session::flash('error', 'Akun tidak ditemukan dengan data yang dimasukkan');
        return redirect('login');
    }
}


    public function actionlogout()
    {
        Auth::logout();
        return redirect('/');
    }

}
