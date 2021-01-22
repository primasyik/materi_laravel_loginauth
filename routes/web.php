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

use App\Http\Controllers\BerandaController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('Pengguna.login');
})->name('login');

Route::post("/postlogin", "LoginController@postlogin")->name("postlogin");
Route::get("/logout", "LoginController@logout")->name("logout");

Route::group(['middleware' => ['auth:user', 'ceklevel:admin']], function () {
    Route::get('halaman-satu', 'BerandaController@halamansatu')->name('halaman-satu');
});

Route::group(['middleware' => ['auth:user,pengguna', 'ceklevel:admin,user,mhs']], function () {
    Route::get("/beranda", "BerandaController@index")->name('beranda');
    Route::get('halaman-dua', 'PegawaiController@index')->name('halaman-dua');
    Route::get('/exportpegawai', 'PegawaiController@pegawaiexport')->name('exportpegawai');
    Route::post('/importpegawai', 'PegawaiController@pegawaiimportexcel')->name('importpegawai');
});

Route::group(['middleware' => ['auth:pengguna', 'ceklevel:mhs']], function () {
    Route::get('halaman-tiga', 'BerandaController@halamantiga')->name('halaman-tiga');
});
