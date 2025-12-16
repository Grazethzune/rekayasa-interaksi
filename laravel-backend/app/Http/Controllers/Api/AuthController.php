<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Mahasiswa;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            'nim' => ['required'],
            'pin_login' => ['nullable'],
        ]);

        $mahasiswa = Mahasiswa::where('nim', $request->nim)->first();

        if (!$mahasiswa) {
            return response()->json(['message' => 'NIM tidak ditemukan!'], 401);
        }

        if ($mahasiswa->pin_login !== null) {
            if (!$request->filled('pin_login') || !Hash::check($request->pin_login, $mahasiswa->pin_login)) {
                return response()->json(['message' => 'PIC salah!'], 401);
            }
        }

        $token = $mahasiswa->createToken('token-mahasiswa')->plainTextToken;

        return response()->json([
            'message' => 'Login berhasil',
            'token' => $token,
            'mahasiswa' => $mahasiswa,
        ], 200);
    }

    public function profile(Request $request)
    {
        return response()->json([
            'mahasiswa' => $request->user()
        ], 200);
    }

    public function logout(Request $request)
    {
        $request->user()->currentAccessToken()->delete();

        return response()->json([
            'message' => 'Logout berhasil'
        ], 200);
    }
}
