<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KRSSeeder extends Seeder
{
    public function run()
    {
        $mahasiswa = DB::table('mahasiswa')->get();

        foreach ($mahasiswa as $mhs) {

            $tahunMasuk = substr($mhs->nim, 0, 4);

            if ($tahunMasuk == '2022') {
                $semesterIds = [1, 2, 3, 4, 5];
            } elseif ($tahunMasuk == '2023') {
                $semesterIds = [3, 4, 5];
            } else {
                $semesterIds = [5];
            }

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
