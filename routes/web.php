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
    return view('gambar');
});

Route::get('/artikel/create', 'ArticleController@create'); // menampilkan halaman form
Route::post('/artikel', 'ArticleController@store'); // menyimpan data

Route::get('/artikel', 'ArticleController@index'); // menampilkan semua

Route::get('/artikel/{id}', 'ArticleController@show'); // menampilkan detail item dengan id 
Route::get('/artikel/{id}/edit', 'ArticleController@edit'); // menampilkan form untuk edit item
Route::put('/artikel/{id}', 'ArticleController@update'); // menyimpan perubahan dari form edit

Route::delete('/artikel/{id}', 'ArticleController@destroy'); // menghapus data dengan id