<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\LoginController;

use App\Http\Controllers\FormController;
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

Route::get('/', function () {
    return view('layouts.landingpage');
});

Route::get('data', function () {
    return view('admin.index');
});

Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');

Route::get('pilihan-program', function (){
    return view('layouts.pilihanprogram');
});

Route::get('form', [FormController::class, 'create'])->name('form.create');

Route::post('form', [FormController::class, 'store'])->name('form.store');

