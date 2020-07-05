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

Route::get('/articles/create', 'ArticleController@create'); // menampilkan halaman form
Route::post('/articles', 'ArticleController@store'); // menyimpan data
Route::get('/articles', 'ArticleController@index'); // menampilkan semua
Route::get('/articles/{id}', 'ArticleController@show'); // menampilkan detail Article dengan id 
Route::get('/articles/{id}/edit', 'ArticleController@edit'); // menampilkan form untuk edit Article
Route::put('/articles/{id}', 'ArticleController@update'); // menyimpan perubahan dari form edit
Route::delete('/articles/{id}', 'ArticleController@destroy'); // menghapus data dengan id
