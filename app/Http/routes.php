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
Route::get('/', function(){
	return view('master');
});

// Route::get('pengguna','PenggunController@awal');
// Route::get('pengguna/tambah','PenggunController@tambah');
// Route::get('ruangan','RuanganController@awal');
// Route::get('ruangan/tambah','RuanganController@tambah');

// Route::get('matakuliah','MatakuliahController@awal');
// Route::get('matakuliah/tambah','MatakuliahController@tambah');


// Route::get('dosen','DosenController@awal');
// Route::get('dosen/tambah','DosenController@tambah');



// Route::get('mahasiswa','MahasiswaController@awal');
// Route::get('mahasiswa/tambah','MahasiswaController@tambah');

// Route::get('dosen_matakuliah','Dosen_MatakuliahController@awal');
// Route::get('dosen_matakuliah/tambah','Dosen_MatakuliahController@tambah');

// Route::get('jadwal_matakuliah','Jadwal_MatakuliahController@awal');
// Route::get('jadwal_matakuliah/tambah','Jadwal_MatakuliahController@tambah');



//table dosen 
Route::get('dosen','DosenController@awal');
Route::get('dosen/tambah','DosenController@tambah');
Route::post('dosen/simpan','DosenController@simpan');
Route::get('dosen/edit/{dosen}','DosenController@edit');
Route::post('dosen/edit/{dosen}','DosenController@update');
Route::get('dosen/hapus/{dosen}','DosenController@hapus');
Route::get('dosen/{dosen}','DosenController@lihat');


//table Dosen_matakuliah
Route::get('dosenmatakuliah','Dosen_MatakuliahController@awal');
Route::get('dosenmatakuliah/tambah','Dosen_MatakuliahController@tambah');
Route::post('dosenmatakuliah/simpan','Dosen_MatakuliahController@simpan');
Route::get('dosenmatakuliah/edit/{dosen_matakuliah}','Dosen_MatakuliahController@edit');
Route::post('dosenmatakuliah/edit/{dosen_matakuliah}','Dosen_MatakuliahController@update');
Route::get('dosenmatakuliah/hapus/{dosen_matakuliah}','Dosen_MatakuliahController@hapus');
Route::get('dosenmatakuliah/lihat/{dosen_matakuliah}','Dosen_MatakuliahController@lihat');


//table jadwal_matakuliah
Route::get('jadwal_matakuliah','Jadwal_Matakuliahcontroller@awal');
Route::get('jadwal_matakuliah/tambah','Jadwal_Matakuliahcontroller@tambah');
Route::get('jadwal_matakuliah/lihat/{jadwal_matakuliah}','Jadwal_Matakuliahcontroller@lihat');
Route::post('jadwal_matakuliah/simpan','Jadwal_Matakuliahcontroller@simpan');
Route::get('jadwal_matakuliah/edit/{jadwal_matakuliah}','Jadwal_Matakuliahcontroller@edit');
Route::post('jadwal_matakuliah/edit/{jadwal_matakuliah}','Jadwal_Matakuliahcontroller@update');
Route::get('jadwal_matakuliah/hapus/{jadwal_matakuliah}','Jadwal_Matakuliahcontroller@hapus');

//table mahasiswa
Route::get('mahasiswa','MahasiswaController@awal');
Route::get('mahasiswa/tambah','MahasiswaController@tambah');
Route::post('mahasiswa/simpan','MahasiswaController@simpan');
Route::get('mahasiswa/edit/{mahasiswa}','MahasiswaController@edit');
Route::post('mahasiswa/edit/{mahasiswa}','MahasiswaController@update');
Route::get('mahasiswa/lihat/{mahasiswa}','MahasiswaController@lihat');
Route::get('mahasiswa/hapus/{mahasiswa}','MahasiswaController@hapus');

//table matakuliah
Route::get('matakuliah','MatakuliahController@awal');
Route::get('matakuliah/tambah','MatakuliahController@tambah');
Route::post('matakuliah/simpan','MatakuliahController@simpan');
Route::get('matakuliah/edit/{matakuliah}','MatakuliahController@edit');
Route::post('matakuliah/edit/{matakuliah}','MatakuliahController@update');
Route::get('matakuliah/hapus/{matakuliah}','MatakuliahController@hapus');
Route::get('matakuliah/lihat/{matakuliah}','MatakuliahController@lihat');

//table pengguna
Route::get('pengguna','PenggunController@awal');
Route::get('pengguna/tambah','PenggunController@tambah');
Route::post('pengguna/simpan','PenggunController@simpan');
Route::get('pengguna/edit/{pengguna}','PenggunController@edit');
Route::post('pengguna/update/{pengguna}','PenggunController@update');
Route::get('pengguna/hapus/{pengguna}','PenggunController@hapus');
Route::get('pengguna/lihat/{pengguna}','PenggunController@lihat');

//table Ruangan
Route::get('ruangan','RuanganController@awal');
Route::get('ruangan/tambah','RuanganController@tambah');
Route::post('ruangan/simpan','RuanganController@simpan');
Route::get('ruangan/edit/{ruangan}','RuanganController@edit');
Route::post('ruangan/edit/{ruangan}','RuanganController@update');
Route::get('ruangan/hapus/{ruangan}','RuanganController@hapus');
Route::get('ruangan/lihat/{ruangan}','RuanganController@lihat');












//Route::get('pengguna/{pengguna}', function ($pengguna) {
//    return ("hello sri $pengguna");
//});
//route::get('/public', function(){
//	return ("hallo sri");

//});

