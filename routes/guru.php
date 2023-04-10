<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuruController;

Route::middleware('auth')->group(function(){
	Route::group(['prefix' => '/guru'], function(){
		Route::get('/dashboard', [GuruController::class, 'dashboard']);
		Route::get('/aktivitas', [GuruController::class, 'aktivitas']);
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
