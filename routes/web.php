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


// Auth::routes();
Auth::routes(['register' => false]);
Route::get('/', 'UserController@index')->name('user.home');
Route::get('/berita', 'UserController@berita')->name('user.berita');
Route::get('/hukum', 'UserController@hukum')->name('user.hukum');
Route::get('/kunjung', 'UserController@kunjung')->name('user.kunjung');
Route::get('/kontak', 'UserController@kontak')->name('user.kontak');
Route::get('/pertanian', 'UserController@pertanian')->name('user.pertanian');
Route::get('/apb', 'UserController@apb')->name('user.apb');
Route::get('/rkp', 'UserController@rkp')->name('user.rkp');
Route::get('/rpjm', 'UserController@rpjm')->name('user.rpjm');
Route::get('/kesehatan', 'UserController@kesehatan')->name('user.kesehatan');
Route::get('/penduduk', 'UserController@penduduk')->name('user.penduduk');
Route::get('/wisata', 'UserController@wisata')->name('user.wisata');
Route::get('/produk', 'UserController@produk')->name('user.produk');
Route::get('/bum', 'UserController@bum')->name('user.bum');
Route::get('/berita/{berita}', 'UserController@beritaShow')->name('user.berita.show');
Route::get('/produk/{produk}', 'UserController@produkShow')->name('user.produk.show');
Route::get('/wisata/{wisata}', 'UserController@wisataShow')->name('user.wisata.show');
Route::post('/kontak', 'UserController@kontakStore')->name('user.kontak.store');
Route::get('/home', 'HomeController@index')->name('home');
Route::group(['prefix' => 'admin','middleware' => ['auth']], function () {
    Route::resource('berita', 'Admin\BeritaController');
    Route::resource('bum', 'Admin\BumController');
    Route::resource('hukum', 'Admin\HukumController');
    Route::resource('kesehatan', 'Admin\KesehatanController');
    Route::resource('kunjung', 'Admin\KunjungController');
    Route::resource('pertanian', 'Admin\PertanianController');
    Route::resource('produk', 'Admin\ProdukController');
    Route::resource('wisata', 'Admin\WisataController');
    Route::resource('rpjm', 'Admin\RpjmController');
    Route::resource('rkp', 'Admin\RkpController');
    Route::resource('apb', 'Admin\ApbController');
    Route::get('/profile', 'HomeController@profile')->name('profile');
    Route::get('/penduduk/pekerjaan', 'Admin\PendudukController@pekerjaan')->name('penduduk.pekerjaan');
    Route::get('/penduduk/umur', 'Admin\PendudukController@umur')->name('penduduk.umur');
    Route::get('/penduduk/pendidikan', 'Admin\PendudukController@pendidikan')->name('penduduk.pendidikan');
    Route::get('/penduduk/agama', 'Admin\PendudukController@agama')->name('penduduk.agama');
    Route::get('/penduduk/perkawinan', 'Admin\PendudukController@perkawinan')->name('penduduk.perkawinan');
    Route::get('/penduduk/dusun', 'Admin\PendudukController@dusun')->name('penduduk.dusun');
    Route::post('/penduduk', 'Admin\PendudukController@store')->name('penduduk.store');
    Route::delete('/penduduk/{penduduk}', 'Admin\PendudukController@destroy')->name('penduduk.destroy');
    Route::post('pertanianTani', 'Admin\PertanianController@storeTani')->name('pertanian.store.tani');
    Route::post('/home', 'HomeController@updateProfile')->name('profile.update');
});

Route::get('/logout', 'Auth\LoginController@logout')->name('logout');
