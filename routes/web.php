<?php

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

// Route example 2
//Route::get('blog', function (){
//    return view('blog');
//});

Route::get('hallo', function(){
   return "Hallo, selamat datang di laravel";
});

Route::get('/', function () {
    return view('welcome');
});

// Route example 5
Route::get('dosen', 'DosenController@index');

// Route example 6
Route::get('/formulir', 'PegawaiController@formulir');
Route::post('/formulir/proses', 'PegawaiController@proses');

#Route::get('/pegawai/{nama}', 'PegawaiController@index');

//Route blog 8
Route::get('/blog', 'BlogController@home');
Route::get('/blog/tentang', 'BlogController@tentang');
Route::get('/blog/kontak', 'BlogController@kontak');

//Route CRUD
Route::get('/pegawai', 'PegawaiController@index');


