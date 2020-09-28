<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AbsensiController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AuthGuruController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\AdminController;

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
Route::get('/list-absensi', [AbsensiController::class, 'list_absensi']);
Route::get('/{username}', [AbsensiController::class, 'index']);
Route::post('/absensi/{username}', [AbsensiController::class, 'absensi']);
Route::get('/login/admin', [AuthController::class, 'login'])->name('login');
Route::post('/admin', [AuthController::class, 'postLogin']);
Route::get('/login/guru', [AuthGuruController::class, 'login']);
Route::post('/guru', [AuthGuruController::class, 'postLogin']);

Route::middleware('auth')->group(function(){
	Route::group(['prefix' => '/guru'], function(){
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
		Route::get('/dashboard', [AdminController::class, 'dashboard']);
		Route::get('/data-guru', [AdminController::class, 'data_guru']);
		Route::get('/store-data', [AdminController::class, 'storeData']);
		Route::get('/kelas/{kelas}/{jurusan}', [AdminController::class, 'showAbsen']);
		Route::get('/cari/{kelas}/{jurusan}', [AdminController::class, 'search']);
		Route::get('/preview/{kelas}/{jurusan}', [AdminController::class, 'previewAbsen']);
		Route::get('/download/absen', [AdminController::class, 'downloadAbsen']);
		Route::get('/download/absen/{kelas}/{jurusan}', [AdminController::class, 'downloadDataAbsen']);
		Route::get('/logout', [AuthController::class, 'logout']);
	});
});
