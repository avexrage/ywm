<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\LoginController;

use App\Http\Controllers\FormController;

use App\Http\Controllers\RegisterController;

use App\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//HOME
Route::get('/', [HomeController::class, 'landingPage'])->name('home');

Route::get('/data', function () {
    return view('admin.index');
});

//LOGIN
Route::get('/sesi', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/sesi/login', [LoginController::class, 'actionlogin'])->name('actionlogin');


//REGISTER
Route::get('register', [RegisterController::class, 'register'])->name('register');
Route::post('register/action', [RegisterController::class, 'actionregister'])->name('actionregister');
Route::get('pilihan-program', function (){
    return view('layouts.pilihanprogram');
});

//FORM
Route::get('form', [FormController::class, 'create'])->name('form.create');
Route::post('form', [FormController::class, 'store'])->name('form.store');

