<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


Route::get('/', function () {
    return view('master');
});

Route::get('/awal', function () {
    return view('awal.awal');
});

Route::get('pengguna', 'penggunaController@awal');
Route::get('pengguna/tambah', 'penggunaController@tambah');
Route::get('pengguna/{pengguna}','penggunaController@lihat');
Route::post('pengguna/simpan','penggunaController@simpan');
Route::get('pengguna/edit/{pengguna}','penggunaController@edit');
Route::post('pengguna/edit/{pengguna}','penggunaController@update');
Route::get('pengguna/hapus/{pengguna}','penggunaController@hapus');

Route::get('admin', 'adminController@awal');
Route::get('admin/tambah', 'adminController@tambah');
Route::get('admin/{admin}','adminController@lihat');
Route::post('admin/simpan','adminController@simpan');
Route::get('admin/edit/{admin}','adminController@edit');
Route::post('admin/edit/{admin}','adminController@update');
Route::get('admin/hapus/{admin}','adminController@hapus');

Route::get('petugas', 'petugasController@awal');
Route::get('petugas/tambah', 'petugasController@tambah');
Route::get('petugas/{petugas}','petugasController@lihat');
Route::post('petugas/simpan','petugasController@simpan');
Route::get('petugas/edit/{petugas}','petugasController@edit');
Route::post('petugas/edit/{petugas}','petugasController@update');
Route::get('petugas/hapus/{petugas}','petugasController@hapus');

Route::get('pelanggan', 'pelangganController@awal');
Route::get('pelanggan/tambah', 'pelangganController@tambah');
Route::get('pelanggan/{pelanggan}','pelangganController@lihat');
Route::post('pelanggan/simpan','pelangganController@simpan');
Route::get('pelanggan/edit/{pelanggan}','pelangganController@edit');
Route::post('pelanggan/edit/{pelanggan}','pelangganController@update');
Route::get('pelanggan/hapus/{pelanggan}','pelangganController@hapus');

Route::get('petani', 'petaniController@awal');
Route::get('petani/tambah', 'petaniController@tambah');
Route::get('petani/{petani}','petaniController@lihat');
Route::post('petani/simpan','petaniController@simpan');
Route::get('petani/edit/{petani}','petaniController@edit');
Route::post('petani/edit/{petani}','petaniController@update');
Route::get('petani/hapus/{petani}','petaniController@hapus');

Route::get('lahan', 'lahanController@awal');
Route::get('lahan/tambah', 'lahanController@tambah');
Route::get('lahan/{lahan}','lahanController@lihat');
Route::post('lahan/simpan','lahanController@simpan');
Route::get('lahan/edit/{lahan}','lahanController@edit');
Route::post('lahan/edit/{lahan}','lahanController@update');
Route::get('lahan/hapus/{lahan}','lahanController@hapus');

Route::get('membeli', 'membeliController@awal');
Route::get('membeli/tambah', 'membeliController@tambah');
Route::get('membeli/{membeli}','membeliController@lihat');
Route::post('membeli/simpan','membeliController@simpan');
Route::get('membeli/edit/{membeli}','membeliController@edit');
Route::post('membeli/edit/{membeli}','membeliController@update');
Route::get('membeli/hapus/{membeli}','membeliController@hapus');

Route::get('pelangganmembeli', 'pelangganmembeliController@awal');
Route::get('pelangganmembeli/tambah', 'pelangganmembeliController@tambah');
Route::get('pelangganmembeli/{membeli}','pelangganmembeliController@lihat');
Route::post('pelangganmembeli/simpan','pelangganmembeliController@simpan');


Route::get('distributor', 'distributorController@awal');
Route::get('distributor/tambah', 'distributorController@tambah');
Route::get('distributor/{distributor}','distributorController@lihat');
Route::post('distributor/simpan','distributorController@simpan');
Route::get('distributor/edit/{distributor}','distributorController@edit');
Route::post('distributor/edit/{distributor}','distributorController@update');
Route::get('distributor/hapus/{distributor}','distributorController@hapus');

Route::get('hasil_tani', 'hasil_taniController@awal');
Route::get('hasil_tani/tambah', 'hasil_taniController@tambah');
Route::get('hasil_tani/{hasil_tani}','hasil_taniController@lihat');
Route::post('hasil_tani/simpan','hasil_taniController@simpan');
Route::get('hasil_tani/edit/{hasil_tani}','hasil_taniController@edit');
Route::post('hasil_tani/edit/{hasil_tani}','hasil_taniController@update');
Route::get('hasil_tani/hapus/{hasil_tani}','hasil_taniController@hapus');
Route::auth();

Route::get('/home', 'HomeController@index');


