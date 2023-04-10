<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AbsensiController;
use App\Http\Controllers\AuthGuruController;
use App\Http\Controllers\DownloadController;

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

Route::get('/', [AbsensiController::class, 'list_absensi']);
Route::get('/list-absensi', [AbsensiController::class, 'list_absensi']);
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::get('/login/admin', [AuthController::class, 'login'])->name('login');
Route::post('/admin', [AuthController::class, 'postLogin']);
Route::get('/login/guru', [AuthGuruController::class, 'login']);
Route::post('/guru', [AuthGuruController::class, 'postLogin']);
Route::get('/{username}', [AbsensiController::class, 'index']);
Route::post('/absensi/{username}', [AbsensiController::class, 'absensi']);

Route::middleware('auth')->group(function(){
	Route::group(['prefix' => '/guru'], function(){
		Route::get('/aktivitas', [GuruController::class, 'aktivitas']);
		Route::get('/dashboard', [GuruController::class, 'dashboard']);
		Route::get('/kelas/{kelas}/{jurusan}/{pelajaran}', [GuruController::class, 'showAbsenPelajaran']);
		Route::get('/cari/{kelas}/{jurusan}/{pelajaran}', [GuruController::class, 'search']);
		Route::get('/wali-kelas/{kelas}/{jurusan}', [GuruController::class, 'WaliKelas']);
		Route::get('/cari/{kelas}/{jurusan}', [GuruController::class, 'searchAbsenKelas']);
		Route::get('/preview/{kelas}/{jurusan}', [GuruController::class, 'previewAbsenWalas']);
		Route::get('/preview/{kelas}/{jurusan}/{pelajaran}', [GuruController::class, 'previewAbsen']);
		Route::get('/download/absen/{kelas}/{jurusan}', [GuruController::class, 'downloadDataAbsenWalas']);
		Route::get('/download/absen/{kelas}/{jurusan}/{pelajaran}', [GuruController::class, 'downloadDataAbsen']);
		Route::get('/logout', [AuthGuruController::class, 'logout']);
	});
});

Route::middleware('auth')->group(function(){
	Route::group(['prefix' => '/admin'], function(){
		Route::get('/aktivitas', [AdminController::class, 'aktivitas']);
		Route::get('/dashboard', [AdminController::class, 'dashboard']);
		Route::get('/store-data', [AdminController::class, 'storeData']);
		Route::get('/data-guru', [AdminController::class, 'data_guru']);
		Route::get('/store-data', [AdminController::class, 'storeData']);
		Route::get('/kelas/{kelas}/{jurusan}', [AdminController::class, 'showAbsen']);
		Route::get('/cari/{kelas}/{jurusan}', [AdminController::class, 'search']);
		Route::get('/preview/{kelas}/{jurusan}', [AdminController::class, 'previewAbsen']);
		Route::get('/download/absen', [DownloadController::class, 'downloadAbsen']);
		Route::get('/download/absen/x/animasi', [DownloadController::class, 'XAnimasi']);
		Route::get('/download/absen/xi/animasi', [DownloadController::class, 'XIAnimasi']);
		Route::get('/download/absen/xii/animasi', [DownloadController::class, 'XIIAnimasi']);
		Route::get('/download/absen/x/akuntansi', [DownloadController::class, 'XAkuntansi']);
		Route::get('/download/absen/xi/akuntansi', [DownloadController::class, 'XIAkuntansi']);
		Route::get('/download/absen/xii/akuntansi', [DownloadController::class, 'XIIAkuntansi']);
		Route::get('/download/absen/x/perbankan-syariah', [DownloadController::class, 'XPerbankanSyariah']);
		Route::get('/download/absen/xi/perbankan-syariah', [DownloadController::class, 'XIPerbankanSyariah']);
		Route::get('/download/absen/xii/perbankan-syariah', [DownloadController::class, 'XIIPerbankanSyariah']);
		Route::get('/download/absen/x/otkp-1', [DownloadController::class, 'XOTKPSatu']);
		Route::get('/download/absen/xi/otkp-1', [DownloadController::class, 'XIOTKPSatu']);
		Route::get('/download/absen/xii/otkp-1', [DownloadController::class, 'XIIOTKPSatu']);
		Route::get('/download/absen/x/otkp-2', [DownloadController::class, 'XOTKPDua']);
		Route::get('/download/absen/xi/otkp-2', [DownloadController::class, 'XIOTKPDua']);
		Route::get('/download/absen/xii/otkp-2', [DownloadController::class, 'XIIOTKPDua']);
		Route::get('/logout', [AuthController::class, 'logout']);
	});
});