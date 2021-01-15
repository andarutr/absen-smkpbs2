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

Route::get('/', 'AbsensiController@list_absensi');
Route::get('/list-absensi', 'AbsensiController@list_absensi');
Route::get('/{username}', 'AbsensiController@index');
Route::post('/absensi/{username}', 'AbsensiController@absensi');
Route::get('/login/admin', 'AuthController@login')->name('login');
Route::post('/admin', 'AuthController@postLogin');
Route::get('/login/guru', 'AuthGuruController@login');
Route::post('/guru', 'AuthGuruController@postLogin');

Route::middleware('auth')->group(function(){
	Route::group(['prefix' => '/guru'], function(){
		Route::get('/aktivitas', 'GuruController@aktivitas');
		Route::get('/dashboard', 'GuruController@dashboard');
		Route::get('/kelas/{kelas}/{jurusan}/{pelajaran}', 'GuruController@showAbsenPelajaran');
		Route::get('/cari/{kelas}/{jurusan}/{pelajaran}', 'GuruController@search');
		Route::get('/wali-kelas/{kelas}/{jurusan}', 'GuruController@WaliKelas');
		Route::get('/cari/{kelas}/{jurusan}', 'GuruController@searchAbsenKelas');
		Route::get('/preview/{kelas}/{jurusan}', 'GuruController@previewAbsenWalas');
		Route::get('/preview/{kelas}/{jurusan}/{pelajaran}', 'GuruController@previewAbsen');
		Route::get('/download/absen/{kelas}/{jurusan}', 'GuruController@downloadDataAbsenWalas');
		Route::get('/download/absen/{kelas}/{jurusan}/{pelajaran}', 'GuruController@downloadDataAbsen');
		Route::get('/logout', 'AuthGuruController@logout');
	});
});

Route::middleware('auth')->group(function(){
	Route::group(['prefix' => '/admin'], function(){
		Route::get('/aktivitas', 'AdminController@aktivitas');
		Route::get('/dashboard', 'AdminController@dashboard');
		Route::get('/store-data', 'AdminController@storeData');
		Route::get('/data-guru', 'AdminController@data_guru');
		Route::get('/store-data', 'AdminController@storeData');
		Route::get('/kelas/{kelas}/{jurusan}', 'AdminController@showAbsen');
		Route::get('/cari/{kelas}/{jurusan}', 'AdminController@search');
		Route::get('/preview/{kelas}/{jurusan}', 'AdminController@previewAbsen');
		Route::get('/download/absen', 'DownloadController@downloadAbsen');
		Route::get('/download/absen/x/animasi', 'DownloadController@XAnimasi');
		Route::get('/download/absen/xi/animasi', 'DownloadController@XIAnimasi');
		Route::get('/download/absen/xii/animasi', 'DownloadController@XIIAnimasi');
		Route::get('/download/absen/x/akuntansi', 'DownloadController@XAkuntansi');
		Route::get('/download/absen/xi/akuntansi', 'DownloadController@XIAkuntansi');
		Route::get('/download/absen/xii/akuntansi', 'DownloadController@XIIAkuntansi');
		Route::get('/download/absen/x/perbankan-syariah', 'DownloadController@XPerbankanSyariah');
		Route::get('/download/absen/xi/perbankan-syariah', 'DownloadController@XIPerbankanSyariah');
		Route::get('/download/absen/xii/perbankan-syariah', 'DownloadController@XIIPerbankanSyariah');
		Route::get('/download/absen/x/otkp-1', 'DownloadController@XOTKPSatu');
		Route::get('/download/absen/xi/otkp-1', 'DownloadController@XIOTKPSatu');
		Route::get('/download/absen/xii/otkp-1', 'DownloadController@XIIOTKPSatu');
		Route::get('/download/absen/x/otkp-2', 'DownloadController@XOTKPDua');
		Route::get('/download/absen/xi/otkp-2', 'DownloadController@XIOTKPDua');
		Route::get('/download/absen/xii/otkp-2', 'DownloadController@XIIOTKPDua');
		Route::get('/logout', 'AuthController@logout');
	});
});