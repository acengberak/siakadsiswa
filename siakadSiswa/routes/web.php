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


Route::get('/mapel', 'MatapelajaranController@index');
Route::post('/mapel', 'MatapelajaranController@create');
Route::get('/mapel', 'MatapelajaranController@read');
Route::put('/mapel/update/{id}', 'MatapelajaranController@update');
Route::delete('/mapel/{id}', 'MatapelajaranController@destroy');

Route::get('/daftar', 'KelasController@index');
Route::post('/daftar', 'KelasController@store');
Route::get('/daftar-kelas', 'KelasController@show');
Route::get('/daftar-kelas/edit/{id}', 'KelasController@edit');
Route::put('/daftar-kelas/update/{id}', 'KelasController@update');
Route::get('/daftar-kelas/delete/{id}', 'KelasController@destroy');
