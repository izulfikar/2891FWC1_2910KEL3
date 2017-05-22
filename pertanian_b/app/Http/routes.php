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


// Route::get('/', function () {
//     return view('master');
// });

Route::get('/awal', function () {
    return view('awal.awal');
});

Route::get('/login','SesiController@form');
Route::post('/login','SesiController@validasi');
Route::get('/logout','SesiController@logout');
Route::get('/','SesiController@index');

// Route::group(['middleware'=>'AutentifikasiUser'], function()
// {

	Route::group(['middleware' =>'admin'], function()
{

Route::get('admin1/pengguna1', 'penggunaController@awal');
Route::get('admin1/pengguna1/tambah', 'penggunaController@tambah');
Route::get('admin1/pengguna1/{pengguna}','penggunaController@lihat');
Route::post('admin1/pengguna1/simpan','penggunaController@simpan');
Route::get('admin1/pengguna1/edit/{pengguna}','penggunaController@edit');
Route::post('admin1/pengguna1/edit/{pengguna}','penggunaController@update');
Route::get('admin1/pengguna1/hapus/{pengguna}','penggunaController@hapus');

Route::get('admin1/admin1', 'adminController@awal');
Route::get('admin1/admin1/tambah', 'adminController@tambah');
Route::get('admin1/admin1/{admin}','adminController@lihat');
Route::post('admin1/admin1/simpan','adminController@simpan');
// Route::get('admin1/admin1/edit/{admin}','adminController@edit');
// Route::post('admin1/admin1/edit/{admin}','adminController@update');
// Route::get('admin1/admin1/hapus/{admin}','adminController@hapus');

Route::get('admin1/petugas1', 'petugasController@awal');
Route::get('admin1/petugas1/tambah', 'petugasController@tambah');
Route::get('admin1/petugas1/{petugas}','petugasController@lihat');
Route::post('admin1/petugas1/simpan','petugasController@simpan');
Route::get('admin1/petugas1/edit/{petugas}','petugasController@edit');
Route::post('admin1/petugas1/edit/{petugas}','petugasController@update');
Route::get('admin1/petugas1/hapus/{petugas}','petugasController@hapus');

Route::get('admin1/pelanggan1', 'pelangganController@awal');
Route::get('admin1/pelanggan1/tambah', 'pelangganController@tambah');
Route::get('admin1/pelanggan1/{pelanggan}','pelangganController@lihat');
Route::post('admin1/pelanggan1/simpan','pelangganController@simpan');
Route::get('admin1/pelanggan1/edit/{pelanggan}','pelangganController@edit');
Route::post('admin1/pelanggan1/edit/{pelanggan}','pelangganController@update');
Route::get('admin1/pelanggan1/hapus/{pelanggan}','pelangganController@hapus');

Route::get('petani1', 'petaniController@awal');
Route::get('petani1/tambah', 'petaniController@tambah');
Route::get('petani1/{petani}','petaniController@lihat');
Route::post('petani1/simpan','petaniController@simpan');
Route::get('petani1/edit/{petani}','petaniController@edit');
Route::post('petani1/edit/{petani}','petaniController@update');
Route::get('petani1/hapus/{petani}','petaniController@hapus');

Route::get('admin1/lahan1', 'lahanController@awal');
Route::get('admin1/lahan1/tambah', 'lahanController@tambah');
Route::get('admin1/lahan1/{lahan}','lahanController@lihat');
Route::post('admin1/lahan1/simpan','lahanController@simpan');
Route::get('admin1/lahan1/edit/{lahan}','lahanController@edit');
Route::post('admin1/lahan1/edit/{lahan}','lahanController@update');
Route::get('admin1/lahan1/hapus/{lahan}','lahanController@hapus');

Route::get('admin1/membeli1', 'membeliController@awal');
Route::get('admin1/membeli1/tambah', 'membeliController@tambah');
Route::get('admin1/membeli1/{membeli}','membeliController@lihat');
Route::post('admin1/membeli1/simpan','membeliController@simpan');
Route::get('admin1/membeli1/edit/{membeli}','membeliController@edit');
Route::post('admin1/membeli1/edit/{membeli}','membeliController@update');
Route::get('admin1/membeli1/hapus/{membeli}','membeliController@hapus');

Route::get('admin1/distributor1', 'distributorController@awal');
Route::get('admin1/distributor1/tambah', 'distributorController@tambah');
Route::get('admin1/distributor1/{distributor}','distributorController@lihat');
Route::post('admin1/distributor1/simpan','distributorController@simpan');
Route::get('admin1/distributor1/edit/{distributor}','distributorController@edit');
Route::post('admin1/distributor1/edit/{distributor}','distributorController@update');
Route::get('admin1/distributor1/hapus/{distributor}','distributorController@hapus');

Route::get('admin1/hasil_tani1', 'hasil_taniController@awal');
Route::get('admin1/hasil_tani1/tambah', 'hasil_taniController@tambah');
Route::get('admin1/hasil_tani1/{hasil_tani}','hasil_taniController@lihat');
Route::post('admin1/hasil_tani1/simpan','hasil_taniController@simpan');
Route::get('admin1/hasil_tani1/edit/{hasil_tani}','hasil_taniController@edit');
Route::post('admin1/hasil_tani1/edit/{hasil_tani}','hasil_taniController@update');
Route::get('admin1/hasil_tani1/hapus/{hasil_tani}','hasil_taniController@hapus');
});

	Route::group(['middleware' =>'petugas'], function()

{
Route::get('petugas1/distributor2', 'distributorController@awal');
Route::get('petugas1/distributor2/tambah', 'distributorController@tambah');
Route::get('petugas1/distributor2/{distributor}','distributorController@lihat');
Route::post('petugas1/distributor2/simpan','distributorController@simpan');
Route::get('petugas1/distributor2/edit/{distributor}','distributorController@edit');
Route::post('petugas1/distributor2/edit/{distributor}','distributorController@update');
Route::get('petugas1/distributor2/hapus/{distributor}','distributorController@hapus');

Route::get('petugas1/hasil_tani2', 'hasil_taniController@awal');
Route::get('petugas1/hasil_tani2/tambah', 'hasil_taniController@tambah');
Route::get('petugas1/hasil_tani2/{hasil_tani}','hasil_taniController@lihat');
Route::post('petugas1/hasil_tani2/simpan','hasil_taniController@simpan');
Route::get('petugas1/hasil_tani2/edit/{hasil_tani}','hasil_taniController@edit');
Route::post('petugas1/hasil_tani2/edit/{hasil_tani}','hasil_taniController@update');
Route::get('petugas1/hasil_tani2/hapus/{hasil_tani}','hasil_taniController@hapus');

Route::get('petugas1/petani2', 'petaniController@awal');
Route::get('petugas1/petani2/tambah', 'petaniController@tambah');
Route::get('petugas1/petani2/{petani}','petaniController@lihat');
Route::post('petugas1/petani2/simpan','petaniController@simpan');
Route::get('petugas1/petani2/edit/{petani}','petaniController@edit');
Route::post('petugas1/petani2/edit/{petani}','petaniController@update');
Route::get('petugas1/petani2/hapus/{petani}','petaniController@hapus');

Route::get('petugas1/lahan2', 'lahanController@awal');
Route::get('petugas1/lahan2/tambah', 'lahanController@tambah');
Route::get('petugas1/lahan2/{lahan}','lahanController@lihat');
Route::post('petugas1/lahan2/simpan','lahanController@simpan');
Route::get('petugas1/lahan2/edit/{lahan}','lahanController@edit');
Route::post('petugas1/lahan2/edit/{lahan}','lahanController@update');
Route::get('petugas1/lahan2/hapus/{lahan}','lahanController@hapus');

Route::get('/pengguna', function () {
    return view('index');
});

});

	Route::group(['middleware' =>'pelanggan'], function()

{
Route::get('pelanggan1/membeli3', 'membeliController@awal');
Route::get('pelanggan1/membeli3/tambah', 'membeliController@tambah');
Route::get('pelanggan1/membeli3/{membeli}','membeliController@lihat');
Route::post('pelanggan1/membeli3/simpan','membeliController@simpan');
Route::get('pelanggan1/membeli3/edit/{membeli}','membeliController@edit');
Route::post('pelanggan1/membeli3/edit/{membeli}','membeliController@update');
Route::get('pelanggan1/membeli3/hapus/{membeli}','membeliController@hapus');
});

// Route::auth();

Route::get('/', function () {
    return view('master');
});


	Route::get('/pala', function () {
    return view('pala.homepetugas');
});


Route::get('/bala', function () {
    return view('bala.homepelanggan');
});
