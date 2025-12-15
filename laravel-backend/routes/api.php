<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\JadwalController;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\SuratController;
use App\Http\Controllers\Api\MahasiswaController;

// JADWAL (dirapikan)
Route::apiResource('/jadwal', JadwalController::class)->except(['index', 'destroy']);
Route::get('/stream/jadwal', [JadwalController::class, 'stream']);

// USER
Route::apiResource('/user', UserController::class)->except(['show']);
Route::post('/login', [UserController::class, 'login']);
Route::post('/register', [UserController::class, 'store']);

// =========================
// SURAT
// =========================

// jenis surat
Route::get('/jenis-surat', [SuratController::class, 'indexJenisSurat']);
Route::post('/jenis-surat', [SuratController::class, 'storeJenisSurat']);
Route::get('/jenis-surat/{id}', [SuratController::class, 'showJenisSurat']);
Route::put('/jenis-surat/{id}', [SuratController::class, 'updateJenisSurat']);
Route::delete('/jenis-surat/{id}', [SuratController::class, 'destroyJenisSurat']);

// pengajuan surat
Route::get('/pengajuan-surat', [SuratController::class, 'indexPengajuanSurat']);
Route::post('/pengajuan-surat', [SuratController::class, 'storePengajuanSurat']);
Route::get('/pengajuan-surat/{id}', [SuratController::class, 'showPengajuanSurat']);
Route::put('/pengajuan-surat/{id}', [SuratController::class, 'updatePengajuanSurat']);
Route::delete('/pengajuan-surat/{id}', [SuratController::class, 'destroyPengajuanSurat']);

Route::patch('/pengajuan-surat/{id}/approve', [SuratController::class, 'approve']);
Route::patch('/pengajuan-surat/{id}/reject', [SuratController::class, 'reject']);

// MAHASISWA
Route::get('/mahasiswa/{id}', [MahasiswaController::class, 'show']);
