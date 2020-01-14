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
Route::get('/mapel', 'MatapelajaranController@index');
Route::post('/mapel', 'MatapelajaranController@create');
Route::get('/mapel', 'MatapelajaranController@read');
Route::put('/mapel/update/{id}', 'MatapelajaranController@update');
Route::delete('/mapel/{id}', 'MatapelajaranController@destroy');

Route::get('/tampil','SiswaController@hubung');
Route::post('/tampil','SiswaController@hubungDatabase');
Route::get('/tampilkan', 'SiswaController@read_web');
Route::get('/tampilkan/edit/{id_nis_siswa}','SiswaController@edit');
Route::put('/tampilkan/update/{id_nis_siswa}', 'SiswaController@update');
Route::delete('/tampilkan/{id_nis_siswa}','SiswaController@destroy');
