<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KRSSeeder extends Seeder
{
    public function run()
    {
        $mahasiswa = DB::table('mahasiswa')->get();
        $currentYear = (int) date('Y');

        foreach ($mahasiswa as $mhs) {
            $tahunMasuk = (int) substr($mhs->nim, 0, 4);
            $progressYears = max(0, $currentYear - $tahunMasuk);
            $semesterMax = min(5, ($progressYears + 1) * 2);
            $semesterMax = max(1, $semesterMax);
            $semesterIds = range(1, $semesterMax);

            foreach ($semesterIds as $semesterId) {
                DB::table('krs')->insert([
                    'mahasiswa_id' => $mhs->nim,
                    'semester_akademik_id' => $semesterId,
                    'tgl_pengisian' => now(),
                    'status' => 'DISETUJUI',
                ]);
            }
        }
    }
}
