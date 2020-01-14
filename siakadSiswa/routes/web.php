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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('redirect/{driver}', 'Auth\LoginController@redirectToProvider')->name('login.provider');
Route::get('{driver}/callback', 'Auth\LoginController@handleProviderCallback')->name('login.callback');

// adit
Route::get('/mapel', 'MatapelajaranController@index');
Route::post('/mapel', 'MatapelajaranController@create');
Route::get('/mapel', 'MatapelajaranController@read');
Route::put('/mapel/update/{id}', 'MatapelajaranController@update');
Route::delete('/mapel/{id}', 'MatapelajaranController@destroy');


// hasan
Route::get('/daftar', 'KelasController@index');
Route::post('/daftar', 'KelasController@store');
Route::get('/daftar-kelas', 'KelasController@show');
Route::get('/daftar-kelas/edit/{id}', 'KelasController@edit');
Route::put('/daftar-kelas/update/{id}', 'KelasController@update');
Route::get('/daftar-kelas/delete/{id}', 'KelasController@destroy');


// taufik
Route::get('/tampil', 'SiswaController@hubung');
Route::post('/tampil', 'SiswaController@hubungDatabase');
Route::get('/tampilkan', 'SiswaController@read_web');
Route::get('/tampilkan/edit/{id_nis_siswa}', 'SiswaController@edit');
Route::put('/tampilkan/update/{id_nis_siswa}', 'SiswaController@update');
Route::delete('/tampilkan/{id_nis_siswa}', 'SiswaController@destroy');
