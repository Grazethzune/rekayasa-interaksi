<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProgramStudiSeeder extends Seeder
{
    public function run()
    {
        DB::table('program_studi')->insert([
            ['kode_prodi'=>'IF','nama_prodi'=>'Informatika','jenjang'=>'S1','fakultas'=>'Teknik'],
            ['kode_prodi'=>'SI','nama_prodi'=>'Sistem Informasi','jenjang'=>'S1','fakultas'=>'Teknik'],
            ['kode_prodi'=>'TE','nama_prodi'=>'Teknik Elektro','jenjang'=>'S1','fakultas'=>'Teknik'],
            ['kode_prodi'=>'TM','nama_prodi'=>'Teknik Mesin','jenjang'=>'S1','fakultas'=>'Teknik'],
            ['kode_prodi'=>'TS','nama_prodi'=>'Teknik Sipil','jenjang'=>'S1','fakultas'=>'Teknik'],
            ['kode_prodi'=>'AK','nama_prodi'=>'Akuntansi','jenjang'=>'S1','fakultas'=>'Ekonomi dan Bisnis'],
            ['kode_prodi'=>'MN','nama_prodi'=>'Manajemen','jenjang'=>'S1','fakultas'=>'Ekonomi dan Bisnis'],
            ['kode_prodi'=>'EP','nama_prodi'=>'Ekonomi Pembangunan','jenjang'=>'S1','fakultas'=>'Ekonomi dan Bisnis'],
            ['kode_prodi'=>'HK','nama_prodi'=>'Ilmu Hukum','jenjang'=>'S1','fakultas'=>'Hukum'],
            ['kode_prodi'=>'IK','nama_prodi'=>'Ilmu Komunikasi','jenjang'=>'S1','fakultas'=>'Ilmu Sosial dan Ilmu Politik'],
            ['kode_prodi'=>'AP','nama_prodi'=>'Administrasi Publik','jenjang'=>'S1','fakultas'=>'Ilmu Sosial dan Ilmu Politik'],
            ['kode_prodi'=>'PB','nama_prodi'=>'Pendidikan Bahasa Inggris','jenjang'=>'S1','fakultas'=>'Keguruan dan Ilmu Pendidikan'],
        ]);
    }
}
