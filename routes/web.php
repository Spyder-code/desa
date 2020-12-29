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


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::group(['prefix' => 'admin','middleware' => ['auth']], function () {
    Route::resource('berita', 'Admin\BeritaController');
    Route::resource('bum', 'Admin\BumController');
    Route::resource('hukum', 'Admin\HukumController');
    Route::resource('kesehatan', 'Admin\KesehatanController');
    Route::resource('kunjung', 'Admin\KunjungController');
    Route::resource('pembangunan', 'Admin\PembangunanController');
    Route::resource('penduduk', 'Admin\PendudukController');
    Route::resource('pertanian', 'Admin\PertanianController');
    Route::resource('produk', 'Admin\ProdukController');
    Route::resource('wisata', 'Admin\WisataController');
    Route::resource('rpjm', 'Admin\RpjmController');
    Route::resource('rkp', 'Admin\RkpController');
    Route::resource('apb', 'Admin\ApbController');
    Route::get('/profile', 'HomeController@profile')->name('profile');
    Route::post('pertanianTani', 'Admin\PertanianController@storeTani')->name('pertanian.store.tani');
    Route::post('/home', 'HomeController@updateProfile')->name('profile.update');
});
