<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AbsensiController;
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
Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::post('/login', [AuthController::class, 'store']);
Route::get('/absensi/{username}', [AbsensiController::class, 'index']);
Route::post('/absensi/{username}', [AbsensiController::class, 'absensi']);
Route::get('/logout', [AuthController::class, 'destroy']);

// Admin Role
require __DIR__.'/admin.php';
// Guru Role
require __DIR__.'/guru.php';