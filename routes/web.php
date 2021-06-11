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

Route::get('/', 'App\Http\Controllers\DesaController@home');
Route::get('/defaulttwo', 'App\Http\Controllers\DesaController@footer');
Route::resource('/desa', 'App\Http\Controllers\DesaController');
Route::get('/ulos', 'App\Http\Controllers\UlosController@index');
Route::get('/ulos/batak', 'App\Http\Controllers\UlosController@batak');
Route::get('/ulos/karo', 'App\Http\Controllers\UlosController@karo');
Route::get('/katalog', 'App\Http\Controllers\ProdukController@index');
Route::get('/halamanpengrajin', 'App\Http\Controllers\HalamanpengrajinController@index');
Route::get('/kritik', 'App\Http\Controllers\KritikController@tampil');
Route::post('/kritik/simpan', 'App\Http\Controllers\KritikController@store');
Route::get('/join', 'App\Http\Controllers\PengrajinController@join');
Route::post('/join/simpan', 'App\Http\Controllers\PengrajinController@store');

//login
Route::post('/login','App\Http\Controllers\login\LoginController@login')->name('login');
Route::get('/login','App\Http\Controllers\login\LoginController@index')->name('login');
Route::group(['middleware' => 'auth'], function(){
Route::post('logout', 'App\Http\Controllers\login\LoginController@logout')->name('logout');

//halaman login
Route::get('/pengrajin', 'App\Http\Controllers\PengrajinController@index');
Route::get('/pengrajin/ubah/{id}', 'App\Http\Controllers\PengrajinController@edit');
Route::post('/pengrajin/update/{id}', 'App\Http\Controllers\PengrajinController@update');
Route::get('/pengrajin/hapus/{id}', 'App\Http\Controllers\PengrajinController@destroy');

//Produk
Route::get('/jenis', 'App\Http\Controllers\JenisController@index');
Route::get('/jenis/ubah/{id}', 'App\Http\Controllers\JenisController@edit');
Route::post('/jenis/update/{id}', 'App\Http\Controllers\JenisController@update');
Route::get('/jenis/hapus/{id}', 'App\Http\Controllers\JenisController@destroy');

//pengguna
Route::get('/kritiksaran', 'App\Http\Controllers\KritikController@index');
Route::get('/kritiksaran/hapus/{id}', 'App\Http\Controllers\KritikController@destroy');
Route::post('/kritiksaran/simpan', 'App\Http\Controllers\KritikController@store');

//Data Web
Route::get('/dataweb', 'App\Http\Controllers\DataWebController@index');
Route::get('/dataweb/ubah/{id}', 'App\Http\Controllers\DataWebController@edit');
Route::post('/dataweb/update/{id}', 'App\Http\Controllers\DataWebController@update');
Route::get('/dataweb/hapus/{id}', 'App\Http\Controllers\DataWebController@destroy');

//Gallery Desa 
Route::get('/galery', 'App\Http\Controllers\GaleryController@index');
Route::get('/galery/ubah/{id}', 'App\Http\Controllers\GaleryController@edit');
Route::post('/galery/update/{id}', 'App\Http\Controllers\GaleryController@update');
Route::get('/galery/hapus/{id}', 'App\Http\Controllers\GaleryController@destroy');

//Produk 
Route::get('/produk', 'App\Http\Controllers\DataProdukController@index');
Route::get('/produk/create', 'App\Http\Controllers\DataProdukController@create');
Route::post('/produk/store', 'App\Http\Controllers\DataProdukController@store');
Route::get('/produk/ubah/{id}', 'App\Http\Controllers\DataProdukController@edit');
Route::post('/produk/update/{id}', 'App\Http\Controllers\DataProdukController@update');
Route::get('/produk/hapus/{id}', 'App\Http\Controllers\DataProdukController@destroy');
});