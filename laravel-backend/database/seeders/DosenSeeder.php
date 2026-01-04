<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DosenSeeder extends Seeder
{
    public function run()
    {
        DB::table('dosen')->insert([
            // Informatika
            ['nidn'=>'IF001','nama_dosen'=>'Dr. Andi Informatika'],
            ['nidn'=>'IF002','nama_dosen'=>'Dr. Budi Informatika'],
            ['nidn'=>'IF003','nama_dosen'=>'Dr. Citra Informatika'],

            // Sistem Informasi
            ['nidn'=>'SI001','nama_dosen'=>'Dr. Andi Sistem Informasi'],
            ['nidn'=>'SI002','nama_dosen'=>'Dr. Budi Sistem Informasi'],
            ['nidn'=>'SI003','nama_dosen'=>'Dr. Citra Sistem Informasi'],

            // Teknik Elektro
            ['nidn'=>'TE001','nama_dosen'=>'Dr. Andi Elektro'],
            ['nidn'=>'TE002','nama_dosen'=>'Dr. Budi Elektro'],
            ['nidn'=>'TE003','nama_dosen'=>'Dr. Citra Elektro'],

            // Teknik Mesin
            ['nidn'=>'TM001','nama_dosen'=>'Dr. Andi Mesin'],
            ['nidn'=>'TM002','nama_dosen'=>'Dr. Budi Mesin'],
            ['nidn'=>'TM003','nama_dosen'=>'Dr. Citra Mesin'],

            // Teknik Sipil
            ['nidn'=>'TS001','nama_dosen'=>'Dr. Andi Sipil'],
            ['nidn'=>'TS002','nama_dosen'=>'Dr. Budi Sipil'],
            ['nidn'=>'TS003','nama_dosen'=>'Dr. Citra Sipil'],

            // Akuntansi
            ['nidn'=>'AK001','nama_dosen'=>'Dr. Andi Akuntansi'],
            ['nidn'=>'AK002','nama_dosen'=>'Dr. Budi Akuntansi'],
            ['nidn'=>'AK003','nama_dosen'=>'Dr. Citra Akuntansi'],

            // Manajemen
            ['nidn'=>'MN001','nama_dosen'=>'Dr. Andi Manajemen'],
            ['nidn'=>'MN002','nama_dosen'=>'Dr. Budi Manajemen'],
            ['nidn'=>'MN003','nama_dosen'=>'Dr. Citra Manajemen'],

            // Ekonomi Pembangunan
            ['nidn'=>'EP001','nama_dosen'=>'Dr. Andi Ekonomi'],
            ['nidn'=>'EP002','nama_dosen'=>'Dr. Budi Ekonomi'],
            ['nidn'=>'EP003','nama_dosen'=>'Dr. Citra Ekonomi'],

            // Ilmu Hukum
            ['nidn'=>'HK001','nama_dosen'=>'Dr. Andi Hukum'],
            ['nidn'=>'HK002','nama_dosen'=>'Dr. Budi Hukum'],
            ['nidn'=>'HK003','nama_dosen'=>'Dr. Citra Hukum'],

            // Ilmu Komunikasi
            ['nidn'=>'IK001','nama_dosen'=>'Dr. Andi Komunikasi'],
            ['nidn'=>'IK002','nama_dosen'=>'Dr. Budi Komunikasi'],
            ['nidn'=>'IK003','nama_dosen'=>'Dr. Citra Komunikasi'],

            // Administrasi Publik
            ['nidn'=>'AP001','nama_dosen'=>'Dr. Andi Administrasi'],
            ['nidn'=>'AP002','nama_dosen'=>'Dr. Budi Administrasi'],
            ['nidn'=>'AP003','nama_dosen'=>'Dr. Citra Administrasi'],

            // Pendidikan Bahasa Inggris
            ['nidn'=>'PB001','nama_dosen'=>'Dr. Andi Bahasa Inggris'],
            ['nidn'=>'PB002','nama_dosen'=>'Dr. Budi Bahasa Inggris'],
            ['nidn'=>'PB003','nama_dosen'=>'Dr. Citra Bahasa Inggris'],
        ]);
    }
}
