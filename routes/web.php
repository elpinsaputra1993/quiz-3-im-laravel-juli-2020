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
    return view('home');
});

Route::get('/proyek/create', 'proyekController@create'); // menampilkan halaman form
Route::post('/proyek', 'proyekController@store'); // menyimpan data
Route::get('/proyek', 'proyekController@index'); // menampilkan semua
Route::get('/proyek/{id}', 'proyekController@show'); // menampilkan detail item dengan id 
Route::get('/proyek/{id}/edit', 'proyekController@edit'); // menampilkan form untuk edit item
Route::put('/proyek/{id}', 'proyekController@update'); // menyimpan perubahan dari form edit
Route::delete('/proyek/{id}', 'proyekController@destroy'); // menghapus data dengan id