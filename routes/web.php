<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::get('/about', function(){
    return 'ini halaman about';
});

// Route::get('/program', function () {
//     return view('program');
// });

Route::view('/program', 'program', ['program1' => 'day care', 
'program2' => 'grha wredha mulya']);

Route::redirect('/here', '/there',);


//memanggil user berdasarkan id/memanggil detail/route memanggil berdasarkan parameter
Route::get('/user/{id}', function ($id) {
    return 'User '.$id;
});

//file detail.blade.php di dalam folder product
Route::get('/product/{id}', function ($id) {
    return view('product.detail', ['id' => $id]);
});

//prefixs route
Route::prefix('administrator')->group(function () {
    Route::get('/profil-admin', function(){
        return 'profil admin';
    });
    
    Route::get('/contact-admin', function(){
        return 'contact admin';
    });
});