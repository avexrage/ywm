<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SesiController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\HomeController;
use App\Http\Middleware\IsLogin;

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

//ADMIN
Route::get('/admin', function () {
    return view('admin.index');
});

//LOGIN
Route::get('/sesi', [SesiController::class, 'showLoginForm'])->name('login');
Route::post('/sesi/login', [SesiController::class, 'actionLogin'])->name('actionlogin');
Route::get('/sesi/logout', [SesiController::class, 'actionLogout'])->name('actionlogout');


//REGISTER
Route::get('/sesi/register', [SesiController::class, 'showRegisterForm'])->name('register');
Route::post('/sesi/register/form', [SesiController::class, 'actionRegister'])->name('actionregister');

//HOME
Route::get('/', [HomeController::class, 'landingPage'])->name('home');

//PENDAFTARAN
Route::get('/pilihan-program', function (){
    return view('layouts.pilihanprogram');
});

//FORM
Route::get('/form', [FormController::class, 'create'])->name('form.create')->middleware('IsLogin');
Route::post('/form', [FormController::class, 'store'])->name('form.store');

