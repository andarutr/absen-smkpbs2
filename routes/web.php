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

Route::get('/', function()
{
	return redirect('https://smkpbs2-jkt.sch.id');
});
Route::get('/list-absensi', 'AbsensiController@list_absensi');
Route::get('/{username}', 'AbsensiController@index');
Route::post('/absensi/{username}', 'AbsensiController@absensi');
Route::get('/login/admin', 'AuthController@login')->name('login');
Route::post('/admin', 'AuthController@postLogin');
Route::get('/login/guru', 'AuthGuruController@login');
Route::post('/guru', 'AuthGuruController@postLogin');

Route::middleware('auth')->group(function(){
	Route::group(['prefix' => '/guru'], function(){
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
		Route::get('/dashboard', 'AdminController@dashboard');
		Route::get('/data-guru', 'AdminController@data_guru');
		Route::get('/store-data', 'AdminController@storeData');
		Route::get('/kelas/{kelas}/{jurusan}', 'AdminController@showAbsen');
		Route::get('/cari/{kelas}/{jurusan}', 'AdminController@search');
		Route::get('/preview/{kelas}/{jurusan}', 'AdminController@previewAbsen');
		Route::get('/download/absen', 'AdminController@downloadAbsen');
		Route::get('/download/absen/{kelas}/{jurusan}', 'AdminController@downloadDataAbsen');
		Route::get('/logout', 'AuthController@logout');
	});
});