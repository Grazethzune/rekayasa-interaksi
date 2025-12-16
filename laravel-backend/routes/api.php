<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\JadwalController;
use App\Http\Controllers\Api\MahasiswaController;
use App\Http\Controllers\Api\SuratController;
use App\Http\Controllers\Api\AuthController;

Route::apiResource('jadwal', JadwalController::class)->except(['index', 'destroy']);
Route::put('presensi', [JadwalController::class, 'presensi']);

Route::apiResource('mahasiswa', MahasiswaController::class)->except(['show']);

Route::post('login', [AuthController::class, 'login']);

Route::middleware('auth:sanctum')->group(function () {
    Route::get('profile', [AuthController::class, 'profile']);
    Route::post('logout', [AuthController::class, 'logout']);
});

Route::get('jenis-surat', [SuratController::class, 'indexJenisSurat']);
Route::post('jenis-surat', [SuratController::class, 'storeJenisSurat']);
Route::get('jenis-surat/{id}', [SuratController::class, 'showJenisSurat']);
Route::put('jenis-surat/{id}', [SuratController::class, 'updateJenisSurat']);
Route::delete('jenis-surat/{id}', [SuratController::class, 'destroyJenisSurat']);

Route::get('pengajuan-surat', [SuratController::class, 'indexPengajuanSurat']);
Route::post('pengajuan-surat', [SuratController::class, 'storePengajuanSurat']);
Route::get('pengajuan-surat/{id}', [SuratController::class, 'showPengajuanSurat']);
Route::put('pengajuan-surat/{id}', [SuratController::class, 'updatePengajuanSurat']);
Route::delete('pengajuan-surat/{id}', [SuratController::class, 'destroyPengajuanSurat']);
Route::patch('pengajuan-surat/approve', [SuratController::class, 'approve']);
Route::patch('pengajuan-surat/reject', [SuratController::class, 'reject']);
