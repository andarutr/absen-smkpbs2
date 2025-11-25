<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DownloadController;

Route::middleware('auth')->group(function(){
	Route::group(['prefix' => '/admin'], function(){
		Route::get('/', [AdminController::class, 'dashboard']);
		Route::get('/dashboard', [AdminController::class, 'dashboard']);
		Route::get('/aktivitas', [AdminController::class, 'aktivitas']);
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