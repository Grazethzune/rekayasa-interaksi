<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

use App\Models\Mahasiswa;
use App\Http\Resources\MahasiswaResource;
use Illuminate\Support\Facades\Hash;
class MahasiswaController extends Controller
{

public function store(Request $request)
{
$validator = Validator::make($request->all(), [
    'nim' => [
        'required',
        'regex:/^[0-9]+$/',
        'min:15',
        'max:15',
    ],
    'nama_lengkap' => [
        'required',
        'min:3',
        'max:25',
        'regex:/^[A-Za-z\s]+$/'
    ],
    'email_UMM' => [
        'nullable',
        'max:100',
        'email'
    ],
    'email_pribadi' => [
        'nullable',
        'max:100',
        'email'
    ],
    'no_ktp'  => [
        'nullable',
        'regex:/^[0-9]+$/',
    ],
    'no_hp'  => [
        'nullable',
        'regex:/^[0-9]+$/',
        'min:10',
        'max:15'
    ],
    'alamat' => [
        'nullable',
    ],
    'angkatan'  => [
        'nullable'
    ],
    'program_studi_id'  => [
        'required'
    ],
    'status_mhs' => [
        'required',
    ],
    'pin_login' => [
        'required',
        'min:8',
        'regex:/^[0-9]+$/'
    ],
]);

if ($validator->fails()) {
return response()->json($validator->errors(), 422);
}

if (Mahasiswa::where('nim', $request->nim)->exists()) {
return response()->json([
'success' => false,
'message' => 'NIM sudah terdaftar!',
], 409);
}


$post = Mahasiswa::create([
'nim' => $request->nim,
'nama_lengkap' => $request->nama_lengkap,
'email_UMM' => $request->email_UMM,
'email_pribadi' => $request->email_pribadi,
'no_ktp' => $request->no_ktp,
'no_hp' => $request->no_hp,
'alamat' => $request->alamat,
'program_studi_id' => $request->program_studi_id,
'angkatan' => $request->angkatan,
'status_mhs' => $request->status_mhs,
'pin_login' => $request->pin_login,
]);

return new MahasiswaResource(true, 'Akun Berhasil Ditambahkan!', $post);
}

public function update(Request $request, $NIM)
{
   $validator = Validator::make($request->all(), [
    'nama_lengkap' => [
        'nullable',
        'min:3',
        'max:25',
        'regex:/^[A-Za-z\s]+$/'
    ],
    'email_UMM' => [
        'nullable',
        'max:100',
        'email'
    ],
    'email_pribadi' => [
        'nullable',
        'max:100',
        'email'
    ],
    'no_ktp'  => [
        'nullable',
        'regex:/^[0-9]+$/',
    ],
    'no_hp'  => [
        'nullable',
        'regex:/^[0-9]+$/',
        'min:10',
        'max:15'
    ],
    'alamat' => [
        'nullable',
    ],
    'angkatan'  => [
        'nullable'
    ],
    'program_studi_id'  => [
        'nullable'
    ],
    'status_mhs' => [
        'nullable',
    ],
    'pin_login' => [
        'nullable',
        'min:8',
        'regex:/^[0-9]+$/'
    ],
]);

    if ($validator->fails()) {
        return response()->json($validator->errors(), 422);
    }

    $user =Mahasiswa::find($NIM);

    if (!$user) {
        return response()->json([
            'success' => false,
            'message' => 'User tidak ditemukan'
        ], 404);
    }

    $user->update([
        'nama_lengkap' => $request->nama_lengkap,
        'email_UMM' => $request->email_UMM,
        'email_pribadi' => $request->email_pribadi,
        'no_ktp' => $request->no_ktp,
        'no_hp' => $request->no_hp,
        'alamat' => $request->alamat,
        'program_studi_id' => $request->program_studi_id,
        'angkatan' => $request->angkatan,
        'status_mhs' => $request->status_mhs,
        'pin_login' => bcrypt($request->pin_login),
    ]);

    return new MahasiswaResource(true, 'Akun Berhasil Diubah!', $user);
}

public function updateProfile(Request $request)
{
    $user = $request->user();

    if (!$user) {
        return response()->json([
            'success' => false,
            'message' => 'Unauthorized'
        ], 401);
    }

    $validator = Validator::make($request->all(), [
        'email_pribadi' => ['nullable', 'email', 'max:100'],
        'no_hp' => ['nullable', 'regex:/^[0-9]+$/', 'min:8', 'max:15'],
        'no_ktp' => ['nullable', 'regex:/^[0-9]+$/'],
        'alamat' => ['nullable'],
        'pin_login' => ['nullable', 'digits_between:8,20'],
    ]);

    if ($validator->fails()) {
        return response()->json($validator->errors(), 422);
    }

    $user->email_pribadi = $request->email_pribadi;
    $user->no_hp = $request->no_hp;
    $user->no_ktp = $request->no_ktp;
    $user->alamat = $request->alamat;

    if ($request->filled('pin_login')) {
        $user->pin_login = Hash::make($request->pin_login);
    }

    $user->save();

    return response()->json([
        'success' => true,
        'message' => 'Profil berhasil diperbarui',
        'user' => $user->load('programStudi')
    ]);
}
}
