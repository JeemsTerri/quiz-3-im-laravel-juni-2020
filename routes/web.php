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

Route::get('/artikel/create', 'ArticleController@create')->name('article.create'); // menampilkan halaman form
Route::post('/artikel', 'ArticleController@store')->name('article.store'); // menyimpan data

Route::get('/artikel', 'ArticleController@index')->name('article'); // menampilkan semua

Route::get('/artikel/{article}', 'ArticleController@show')->name('article.show'); // menampilkan detail item dengan id 
Route::get('/artikel/{article}/edit', 'ArticleController@edit')->name('article.edit'); // menampilkan form untuk edit item
Route::put('/artikel/{article}', 'ArticleController@update')->name('article.update'); // menyimpan perubahan dari form edit

Route::delete('/artikel/{article}', 'ArticleController@destroy')->name('article.delete'); // menghapus data dengan id