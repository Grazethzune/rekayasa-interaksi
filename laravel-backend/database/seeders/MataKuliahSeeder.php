<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MataKuliahSeeder extends Seeder
{
    public function run()
    {
        DB::table('mata_kuliah')->insert([

            // Informatika (1)
            ['kode_mk'=>'IF101','nama_mk'=>'Algoritma dan Pemrograman','sks'=>3,'program_studi_id'=>1],
            ['kode_mk'=>'IF102','nama_mk'=>'Struktur Data','sks'=>3,'program_studi_id'=>1],
            ['kode_mk'=>'IF103','nama_mk'=>'Basis Data','sks'=>3,'program_studi_id'=>1],
            ['kode_mk'=>'IF104','nama_mk'=>'Pemrograman Web','sks'=>3,'program_studi_id'=>1],
            ['kode_mk'=>'IF105','nama_mk'=>'Sistem Operasi','sks'=>3,'program_studi_id'=>1],

            // Sistem Informasi (2)
            ['kode_mk'=>'SI101','nama_mk'=>'Pengantar Sistem Informasi','sks'=>3,'program_studi_id'=>2],
            ['kode_mk'=>'SI102','nama_mk'=>'Analisis dan Perancangan SI','sks'=>3,'program_studi_id'=>2],
            ['kode_mk'=>'SI103','nama_mk'=>'Manajemen Proyek TI','sks'=>3,'program_studi_id'=>2],
            ['kode_mk'=>'SI104','nama_mk'=>'Enterprise Resource Planning','sks'=>3,'program_studi_id'=>2],
            ['kode_mk'=>'SI105','nama_mk'=>'Sistem Pendukung Keputusan','sks'=>3,'program_studi_id'=>2],

            // Teknik Elektro (3)
            ['kode_mk'=>'TE101','nama_mk'=>'Rangkaian Listrik','sks'=>3,'program_studi_id'=>3],
            ['kode_mk'=>'TE102','nama_mk'=>'Elektronika Analog','sks'=>3,'program_studi_id'=>3],
            ['kode_mk'=>'TE103','nama_mk'=>'Sistem Digital','sks'=>3,'program_studi_id'=>3],
            ['kode_mk'=>'TE104','nama_mk'=>'Mikrokontroler','sks'=>3,'program_studi_id'=>3],
            ['kode_mk'=>'TE105','nama_mk'=>'Sistem Tenaga Listrik','sks'=>3,'program_studi_id'=>3],

            // Teknik Mesin (4)
            ['kode_mk'=>'TM101','nama_mk'=>'Gambar Teknik','sks'=>3,'program_studi_id'=>4],
            ['kode_mk'=>'TM102','nama_mk'=>'Termodinamika','sks'=>3,'program_studi_id'=>4],
            ['kode_mk'=>'TM103','nama_mk'=>'Mekanika Teknik','sks'=>3,'program_studi_id'=>4],
            ['kode_mk'=>'TM104','nama_mk'=>'Elemen Mesin','sks'=>3,'program_studi_id'=>4],
            ['kode_mk'=>'TM105','nama_mk'=>'Proses Manufaktur','sks'=>3,'program_studi_id'=>4],

            // Teknik Sipil (5)
            ['kode_mk'=>'TS101','nama_mk'=>'Statika','sks'=>3,'program_studi_id'=>5],
            ['kode_mk'=>'TS102','nama_mk'=>'Struktur Beton','sks'=>3,'program_studi_id'=>5],
            ['kode_mk'=>'TS103','nama_mk'=>'Mekanika Tanah','sks'=>3,'program_studi_id'=>5],
            ['kode_mk'=>'TS104','nama_mk'=>'Manajemen Konstruksi','sks'=>3,'program_studi_id'=>5],
            ['kode_mk'=>'TS105','nama_mk'=>'Hidrologi','sks'=>3,'program_studi_id'=>5],

            // Akuntansi (6)
            ['kode_mk'=>'AK101','nama_mk'=>'Pengantar Akuntansi','sks'=>3,'program_studi_id'=>6],
            ['kode_mk'=>'AK102','nama_mk'=>'Akuntansi Keuangan','sks'=>3,'program_studi_id'=>6],
            ['kode_mk'=>'AK103','nama_mk'=>'Akuntansi Biaya','sks'=>3,'program_studi_id'=>6],
            ['kode_mk'=>'AK104','nama_mk'=>'Perpajakan','sks'=>3,'program_studi_id'=>6],
            ['kode_mk'=>'AK105','nama_mk'=>'Audit','sks'=>3,'program_studi_id'=>6],

            // Manajemen (7)
            ['kode_mk'=>'MN101','nama_mk'=>'Pengantar Manajemen','sks'=>3,'program_studi_id'=>7],
            ['kode_mk'=>'MN102','nama_mk'=>'Manajemen Pemasaran','sks'=>3,'program_studi_id'=>7],
            ['kode_mk'=>'MN103','nama_mk'=>'Manajemen SDM','sks'=>3,'program_studi_id'=>7],
            ['kode_mk'=>'MN104','nama_mk'=>'Manajemen Keuangan','sks'=>3,'program_studi_id'=>7],
            ['kode_mk'=>'MN105','nama_mk'=>'Kewirausahaan','sks'=>3,'program_studi_id'=>7],

            // Ekonomi Pembangunan (8)
            ['kode_mk'=>'EP101','nama_mk'=>'Pengantar Ekonomi','sks'=>3,'program_studi_id'=>8],
            ['kode_mk'=>'EP102','nama_mk'=>'Ekonomi Makro','sks'=>3,'program_studi_id'=>8],
            ['kode_mk'=>'EP103','nama_mk'=>'Ekonomi Mikro','sks'=>3,'program_studi_id'=>8],
            ['kode_mk'=>'EP104','nama_mk'=>'Ekonomi Regional','sks'=>3,'program_studi_id'=>8],
            ['kode_mk'=>'EP105','nama_mk'=>'Statistika Ekonomi','sks'=>3,'program_studi_id'=>8],

            // Ilmu Hukum (9)
            ['kode_mk'=>'HK101','nama_mk'=>'Pengantar Ilmu Hukum','sks'=>3,'program_studi_id'=>9],
            ['kode_mk'=>'HK102','nama_mk'=>'Hukum Perdata','sks'=>3,'program_studi_id'=>9],
            ['kode_mk'=>'HK103','nama_mk'=>'Hukum Pidana','sks'=>3,'program_studi_id'=>9],
            ['kode_mk'=>'HK104','nama_mk'=>'Hukum Tata Negara','sks'=>3,'program_studi_id'=>9],
            ['kode_mk'=>'HK105','nama_mk'=>'Hukum Internasional','sks'=>3,'program_studi_id'=>9],

            // Ilmu Komunikasi (10)
            ['kode_mk'=>'IK101','nama_mk'=>'Pengantar Ilmu Komunikasi','sks'=>3,'program_studi_id'=>10],
            ['kode_mk'=>'IK102','nama_mk'=>'Komunikasi Massa','sks'=>3,'program_studi_id'=>10],
            ['kode_mk'=>'IK103','nama_mk'=>'Public Relations','sks'=>3,'program_studi_id'=>10],
            ['kode_mk'=>'IK104','nama_mk'=>'Jurnalistik','sks'=>3,'program_studi_id'=>10],
            ['kode_mk'=>'IK105','nama_mk'=>'Komunikasi Digital','sks'=>3,'program_studi_id'=>10],

            // Administrasi Publik (11)
            ['kode_mk'=>'AP101','nama_mk'=>'Administrasi Publik','sks'=>3,'program_studi_id'=>11],
            ['kode_mk'=>'AP102','nama_mk'=>'Manajemen Publik','sks'=>3,'program_studi_id'=>11],
            ['kode_mk'=>'AP103','nama_mk'=>'Kebijakan Publik','sks'=>3,'program_studi_id'=>11],
            ['kode_mk'=>'AP104','nama_mk'=>'Pelayanan Publik','sks'=>3,'program_studi_id'=>11],
            ['kode_mk'=>'AP105','nama_mk'=>'Administrasi Keuangan Negara','sks'=>3,'program_studi_id'=>11],

            // Pendidikan Bahasa Inggris (12)
            ['kode_mk'=>'PB101','nama_mk'=>'Grammar','sks'=>3,'program_studi_id'=>12],
            ['kode_mk'=>'PB102','nama_mk'=>'Speaking','sks'=>3,'program_studi_id'=>12],
            ['kode_mk'=>'PB103','nama_mk'=>'Listening','sks'=>3,'program_studi_id'=>12],
            ['kode_mk'=>'PB104','nama_mk'=>'Reading','sks'=>3,'program_studi_id'=>12],
            ['kode_mk'=>'PB105','nama_mk'=>'Teaching Methodology','sks'=>3,'program_studi_id'=>12],

        ]);
    }
}
