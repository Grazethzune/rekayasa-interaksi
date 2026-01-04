<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KelasKuliahSeeder extends Seeder
{
    public function run()
    {
        DB::table('kelas_kuliah')->insert([

            // ===================== INFORMATIKA =====================
            ['id'=>'IF101-A','mata_kuliah_id'=>'IF101','semester_akademik_id'=>1,'kode_kelas'=>'A','dosen_id'=>'IF001','hari'=>'SENIN','jam_mulai'=>'08:00','jam_selesai'=>'10:00'],
            ['id'=>'IF101-B','mata_kuliah_id'=>'IF101','semester_akademik_id'=>1,'kode_kelas'=>'B','dosen_id'=>'IF002','hari'=>'RABU','jam_mulai'=>'10:00','jam_selesai'=>'12:00'],
            ['id'=>'IF102-A','mata_kuliah_id'=>'IF102','semester_akademik_id'=>2,'kode_kelas'=>'A','dosen_id'=>'IF003','hari'=>'SELASA','jam_mulai'=>'08:00','jam_selesai'=>'10:00'],
            ['id'=>'IF103-A','mata_kuliah_id'=>'IF103','semester_akademik_id'=>3,'kode_kelas'=>'A','dosen_id'=>'IF001','hari'=>'KAMIS','jam_mulai'=>'10:00','jam_selesai'=>'12:00'],
            ['id'=>'IF104-A','mata_kuliah_id'=>'IF104','semester_akademik_id'=>4,'kode_kelas'=>'A','dosen_id'=>'IF002','hari'=>'JUMAT','jam_mulai'=>'08:00','jam_selesai'=>'10:00'],
            ['id'=>'IF105-A','mata_kuliah_id'=>'IF105','semester_akademik_id'=>5,'kode_kelas'=>'A','dosen_id'=>'IF003','hari'=>'SENIN','jam_mulai'=>'13:00','jam_selesai'=>'15:00'],

            // ===================== SISTEM INFORMASI =====================
            ['id'=>'SI101-A','mata_kuliah_id'=>'SI101','semester_akademik_id'=>1,'kode_kelas'=>'A','dosen_id'=>'SI001','hari'=>'SELASA','jam_mulai'=>'10:00','jam_selesai'=>'12:00'],
            ['id'=>'SI101-B','mata_kuliah_id'=>'SI101','semester_akademik_id'=>1,'kode_kelas'=>'B','dosen_id'=>'SI002','hari'=>'KAMIS','jam_mulai'=>'13:00','jam_selesai'=>'15:00'],
            ['id'=>'SI102-A','mata_kuliah_id'=>'SI102','semester_akademik_id'=>2,'kode_kelas'=>'A','dosen_id'=>'SI003','hari'=>'RABU','jam_mulai'=>'08:00','jam_selesai'=>'10:00'],
            ['id'=>'SI103-A','mata_kuliah_id'=>'SI103','semester_akademik_id'=>3,'kode_kelas'=>'A','dosen_id'=>'SI001','hari'=>'JUMAT','jam_mulai'=>'10:00','jam_selesai'=>'12:00'],
            ['id'=>'SI104-A','mata_kuliah_id'=>'SI104','semester_akademik_id'=>4,'kode_kelas'=>'A','dosen_id'=>'SI002','hari'=>'SENIN','jam_mulai'=>'08:00','jam_selesai'=>'10:00'],
            ['id'=>'SI105-A','mata_kuliah_id'=>'SI105','semester_akademik_id'=>5,'kode_kelas'=>'A','dosen_id'=>'SI003','hari'=>'KAMIS','jam_mulai'=>'10:00','jam_selesai'=>'12:00'],

            // ===================== TEKNIK ELEKTRO =====================
            ['id'=>'TE101-A','mata_kuliah_id'=>'TE101','semester_akademik_id'=>1,'kode_kelas'=>'A','dosen_id'=>'TE001','hari'=>'SENIN','jam_mulai'=>'08:00','jam_selesai'=>'10:00'],
            ['id'=>'TE101-B','mata_kuliah_id'=>'TE101','semester_akademik_id'=>1,'kode_kelas'=>'B','dosen_id'=>'TE002','hari'=>'RABU','jam_mulai'=>'13:00','jam_selesai'=>'15:00'],
            ['id'=>'TE102-A','mata_kuliah_id'=>'TE102','semester_akademik_id'=>2,'kode_kelas'=>'A','dosen_id'=>'TE003','hari'=>'SELASA','jam_mulai'=>'10:00','jam_selesai'=>'12:00'],
            ['id'=>'TE103-A','mata_kuliah_id'=>'TE103','semester_akademik_id'=>3,'kode_kelas'=>'A','dosen_id'=>'TE001','hari'=>'KAMIS','jam_mulai'=>'08:00','jam_selesai'=>'10:00'],
            ['id'=>'TE104-A','mata_kuliah_id'=>'TE104','semester_akademik_id'=>4,'kode_kelas'=>'A','dosen_id'=>'TE002','hari'=>'JUMAT','jam_mulai'=>'13:00','jam_selesai'=>'15:00'],
            ['id'=>'TE105-A','mata_kuliah_id'=>'TE105','semester_akademik_id'=>5,'kode_kelas'=>'A','dosen_id'=>'TE003','hari'=>'RABU','jam_mulai'=>'10:00','jam_selesai'=>'12:00'],

            // ===================== TEKNIK MESIN =====================
            ['id'=>'TM101-A','mata_kuliah_id'=>'TM101','semester_akademik_id'=>1,'kode_kelas'=>'A','dosen_id'=>'TM001','hari'=>'SENIN','jam_mulai'=>'08:00','jam_selesai'=>'10:00'],
            ['id'=>'TM101-B','mata_kuliah_id'=>'TM101','semester_akademik_id'=>1,'kode_kelas'=>'B','dosen_id'=>'TM002','hari'=>'RABU','jam_mulai'=>'10:00','jam_selesai'=>'12:00'],
            ['id'=>'TM102-A','mata_kuliah_id'=>'TM102','semester_akademik_id'=>2,'kode_kelas'=>'A','dosen_id'=>'TM003','hari'=>'SELASA','jam_mulai'=>'13:00','jam_selesai'=>'15:00'],
            ['id'=>'TM103-A','mata_kuliah_id'=>'TM103','semester_akademik_id'=>3,'kode_kelas'=>'A','dosen_id'=>'TM001','hari'=>'KAMIS','jam_mulai'=>'08:00','jam_selesai'=>'10:00'],
            ['id'=>'TM104-A','mata_kuliah_id'=>'TM104','semester_akademik_id'=>4,'kode_kelas'=>'A','dosen_id'=>'TM002','hari'=>'JUMAT','jam_mulai'=>'10:00','jam_selesai'=>'12:00'],
            ['id'=>'TM105-A','mata_kuliah_id'=>'TM105','semester_akademik_id'=>5,'kode_kelas'=>'A','dosen_id'=>'TM003','hari'=>'RABU','jam_mulai'=>'13:00','jam_selesai'=>'15:00'],

            // ===================== TEKNIK SIPIL =====================
            ['id'=>'TS101-A','mata_kuliah_id'=>'TS101','semester_akademik_id'=>1,'kode_kelas'=>'A','dosen_id'=>'TS001','hari'=>'SENIN','jam_mulai'=>'10:00','jam_selesai'=>'12:00'],
            ['id'=>'TS101-B','mata_kuliah_id'=>'TS101','semester_akademik_id'=>1,'kode_kelas'=>'B','dosen_id'=>'TS002','hari'=>'KAMIS','jam_mulai'=>'13:00','jam_selesai'=>'15:00'],
            ['id'=>'TS102-A','mata_kuliah_id'=>'TS102','semester_akademik_id'=>2,'kode_kelas'=>'A','dosen_id'=>'TS003','hari'=>'SELASA','jam_mulai'=>'08:00','jam_selesai'=>'10:00'],
            ['id'=>'TS103-A','mata_kuliah_id'=>'TS103','semester_akademik_id'=>3,'kode_kelas'=>'A','dosen_id'=>'TS001','hari'=>'RABU','jam_mulai'=>'10:00','jam_selesai'=>'12:00'],
            ['id'=>'TS104-A','mata_kuliah_id'=>'TS104','semester_akademik_id'=>4,'kode_kelas'=>'A','dosen_id'=>'TS002','hari'=>'JUMAT','jam_mulai'=>'08:00','jam_selesai'=>'10:00'],
            ['id'=>'TS105-A','mata_kuliah_id'=>'TS105','semester_akademik_id'=>5,'kode_kelas'=>'A','dosen_id'=>'TS003','hari'=>'KAMIS','jam_mulai'=>'10:00','jam_selesai'=>'12:00'],

            // ===================== AKUNTANSI =====================
            ['id'=>'AK101-A','mata_kuliah_id'=>'AK101','semester_akademik_id'=>1,'kode_kelas'=>'A','dosen_id'=>'AK001','hari'=>'SENIN','jam_mulai'=>'13:00','jam_selesai'=>'15:00'],
            ['id'=>'AK101-B','mata_kuliah_id'=>'AK101','semester_akademik_id'=>1,'kode_kelas'=>'B','dosen_id'=>'AK002','hari'=>'RABU','jam_mulai'=>'08:00','jam_selesai'=>'10:00'],
            ['id'=>'AK102-A','mata_kuliah_id'=>'AK102','semester_akademik_id'=>2,'kode_kelas'=>'A','dosen_id'=>'AK003','hari'=>'SELASA','jam_mulai'=>'10:00','jam_selesai'=>'12:00'],
            ['id'=>'AK103-A','mata_kuliah_id'=>'AK103','semester_akademik_id'=>3,'kode_kelas'=>'A','dosen_id'=>'AK001','hari'=>'KAMIS','jam_mulai'=>'08:00','jam_selesai'=>'10:00'],
            ['id'=>'AK104-A','mata_kuliah_id'=>'AK104','semester_akademik_id'=>4,'kode_kelas'=>'A','dosen_id'=>'AK002','hari'=>'JUMAT','jam_mulai'=>'13:00','jam_selesai'=>'15:00'],
            ['id'=>'AK105-A','mata_kuliah_id'=>'AK105','semester_akademik_id'=>5,'kode_kelas'=>'A','dosen_id'=>'AK003','hari'=>'RABU','jam_mulai'=>'10:00','jam_selesai'=>'12:00'],

            // ===================== MANAJEMEN =====================
            ['id'=>'MN101-A','mata_kuliah_id'=>'MN101','semester_akademik_id'=>1,'kode_kelas'=>'A','dosen_id'=>'MN001','hari'=>'SENIN','jam_mulai'=>'08:00','jam_selesai'=>'10:00'],
            ['id'=>'MN101-B','mata_kuliah_id'=>'MN101','semester_akademik_id'=>1,'kode_kelas'=>'B','dosen_id'=>'MN002','hari'=>'KAMIS','jam_mulai'=>'10:00','jam_selesai'=>'12:00'],
            ['id'=>'MN102-A','mata_kuliah_id'=>'MN102','semester_akademik_id'=>2,'kode_kelas'=>'A','dosen_id'=>'MN003','hari'=>'SELASA','jam_mulai'=>'13:00','jam_selesai'=>'15:00'],
            ['id'=>'MN103-A','mata_kuliah_id'=>'MN103','semester_akademik_id'=>3,'kode_kelas'=>'A','dosen_id'=>'MN001','hari'=>'RABU','jam_mulai'=>'08:00','jam_selesai'=>'10:00'],
            ['id'=>'MN104-A','mata_kuliah_id'=>'MN104','semester_akademik_id'=>4,'kode_kelas'=>'A','dosen_id'=>'MN002','hari'=>'JUMAT','jam_mulai'=>'10:00','jam_selesai'=>'12:00'],
            ['id'=>'MN105-A','mata_kuliah_id'=>'MN105','semester_akademik_id'=>5,'kode_kelas'=>'A','dosen_id'=>'MN003','hari'=>'KAMIS','jam_mulai'=>'13:00','jam_selesai'=>'15:00'],

            // ===================== EKONOMI PEMBANGUNAN =====================
            ['id'=>'EP101-A','mata_kuliah_id'=>'EP101','semester_akademik_id'=>1,'kode_kelas'=>'A','dosen_id'=>'EP001','hari'=>'SENIN','jam_mulai'=>'10:00','jam_selesai'=>'12:00'],
            ['id'=>'EP102-A','mata_kuliah_id'=>'EP102','semester_akademik_id'=>2,'kode_kelas'=>'A','dosen_id'=>'EP002','hari'=>'SELASA','jam_mulai'=>'08:00','jam_selesai'=>'10:00'],
            ['id'=>'EP103-A','mata_kuliah_id'=>'EP103','semester_akademik_id'=>3,'kode_kelas'=>'A','dosen_id'=>'EP003','hari'=>'RABU','jam_mulai'=>'13:00','jam_selesai'=>'15:00'],
            ['id'=>'EP104-A','mata_kuliah_id'=>'EP104','semester_akademik_id'=>4,'kode_kelas'=>'A','dosen_id'=>'EP001','hari'=>'KAMIS','jam_mulai'=>'10:00','jam_selesai'=>'12:00'],
            ['id'=>'EP105-A','mata_kuliah_id'=>'EP105','semester_akademik_id'=>5,'kode_kelas'=>'A','dosen_id'=>'EP002','hari'=>'JUMAT','jam_mulai'=>'08:00','jam_selesai'=>'10:00'],

            // ===================== ILMU HUKUM =====================
            ['id'=>'HK101-A','mata_kuliah_id'=>'HK101','semester_akademik_id'=>1,'kode_kelas'=>'A','dosen_id'=>'HK001','hari'=>'SENIN','jam_mulai'=>'13:00','jam_selesai'=>'15:00'],
            ['id'=>'HK102-A','mata_kuliah_id'=>'HK102','semester_akademik_id'=>2,'kode_kelas'=>'A','dosen_id'=>'HK002','hari'=>'SELASA','jam_mulai'=>'10:00','jam_selesai'=>'12:00'],
            ['id'=>'HK103-A','mata_kuliah_id'=>'HK103','semester_akademik_id'=>3,'kode_kelas'=>'A','dosen_id'=>'HK003','hari'=>'RABU','jam_mulai'=>'08:00','jam_selesai'=>'10:00'],
            ['id'=>'HK104-A','mata_kuliah_id'=>'HK104','semester_akademik_id'=>4,'kode_kelas'=>'A','dosen_id'=>'HK001','hari'=>'KAMIS','jam_mulai'=>'13:00','jam_selesai'=>'15:00'],
            ['id'=>'HK105-A','mata_kuliah_id'=>'HK105','semester_akademik_id'=>5,'kode_kelas'=>'A','dosen_id'=>'HK002','hari'=>'JUMAT','jam_mulai'=>'10:00','jam_selesai'=>'12:00'],

            // ===================== ILMU KOMUNIKASI =====================
            ['id'=>'IK101-A','mata_kuliah_id'=>'IK101','semester_akademik_id'=>1,'kode_kelas'=>'A','dosen_id'=>'IK001','hari'=>'SENIN','jam_mulai'=>'08:00','jam_selesai'=>'10:00'],
            ['id'=>'IK102-A','mata_kuliah_id'=>'IK102','semester_akademik_id'=>2,'kode_kelas'=>'A','dosen_id'=>'IK002','hari'=>'SELASA','jam_mulai'=>'13:00','jam_selesai'=>'15:00'],
            ['id'=>'IK103-A','mata_kuliah_id'=>'IK103','semester_akademik_id'=>3,'kode_kelas'=>'A','dosen_id'=>'IK003','hari'=>'RABU','jam_mulai'=>'10:00','jam_selesai'=>'12:00'],
            ['id'=>'IK104-A','mata_kuliah_id'=>'IK104','semester_akademik_id'=>4,'kode_kelas'=>'A','dosen_id'=>'IK001','hari'=>'KAMIS','jam_mulai'=>'08:00','jam_selesai'=>'10:00'],
            ['id'=>'IK105-A','mata_kuliah_id'=>'IK105','semester_akademik_id'=>5,'kode_kelas'=>'A','dosen_id'=>'IK002','hari'=>'JUMAT','jam_mulai'=>'13:00','jam_selesai'=>'15:00'],

            // ===================== ADMINISTRASI PUBLIK =====================
            ['id'=>'AP101-A','mata_kuliah_id'=>'AP101','semester_akademik_id'=>1,'kode_kelas'=>'A','dosen_id'=>'AP001','hari'=>'SENIN','jam_mulai'=>'10:00','jam_selesai'=>'12:00'],
            ['id'=>'AP102-A','mata_kuliah_id'=>'AP102','semester_akademik_id'=>2,'kode_kelas'=>'A','dosen_id'=>'AP002','hari'=>'SELASA','jam_mulai'=>'08:00','jam_selesai'=>'10:00'],
            ['id'=>'AP103-A','mata_kuliah_id'=>'AP103','semester_akademik_id'=>3,'kode_kelas'=>'A','dosen_id'=>'AP003','hari'=>'RABU','jam_mulai'=>'13:00','jam_selesai'=>'15:00'],
            ['id'=>'AP104-A','mata_kuliah_id'=>'AP104','semester_akademik_id'=>4,'kode_kelas'=>'A','dosen_id'=>'AP001','hari'=>'KAMIS','jam_mulai'=>'10:00','jam_selesai'=>'12:00'],
            ['id'=>'AP105-A','mata_kuliah_id'=>'AP105','semester_akademik_id'=>5,'kode_kelas'=>'A','dosen_id'=>'AP002','hari'=>'JUMAT','jam_mulai'=>'08:00','jam_selesai'=>'10:00'],

            // ===================== PENDIDIKAN BAHASA INGGRIS =====================
            ['id'=>'PB101-A','mata_kuliah_id'=>'PB101','semester_akademik_id'=>1,'kode_kelas'=>'A','dosen_id'=>'PB001','hari'=>'SENIN','jam_mulai'=>'13:00','jam_selesai'=>'15:00'],
            ['id'=>'PB102-A','mata_kuliah_id'=>'PB102','semester_akademik_id'=>2,'kode_kelas'=>'A','dosen_id'=>'PB002','hari'=>'SELASA','jam_mulai'=>'10:00','jam_selesai'=>'12:00'],
            ['id'=>'PB103-A','mata_kuliah_id'=>'PB103','semester_akademik_id'=>3,'kode_kelas'=>'A','dosen_id'=>'PB003','hari'=>'RABU','jam_mulai'=>'08:00','jam_selesai'=>'10:00'],
            ['id'=>'PB104-A','mata_kuliah_id'=>'PB104','semester_akademik_id'=>4,'kode_kelas'=>'A','dosen_id'=>'PB001','hari'=>'KAMIS','jam_mulai'=>'13:00','jam_selesai'=>'15:00'],
            ['id'=>'PB105-A','mata_kuliah_id'=>'PB105','semester_akademik_id'=>5,'kode_kelas'=>'A','dosen_id'=>'PB002','hari'=>'JUMAT','jam_mulai'=>'10:00','jam_selesai'=>'12:00'],
        ]);
    }
}
