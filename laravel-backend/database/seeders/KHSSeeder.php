<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KHSSeeder extends Seeder
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

            $ipk = 0;
            $totalSemester = 0;

            foreach ($semesterIds as $semesterId) {
                $ipSemester = rand(280, 400) / 100;

                $totalSemester++;
                $ipk = (($ipk * ($totalSemester - 1)) + $ipSemester) / $totalSemester;

                DB::table('khs')->insert([
                    'mahasiswa_id' => $mhs->nim,
                    'semester_akademik_id' => $semesterId,
                    'ip_semester' => round($ipSemester, 2),
                    'ipk' => round($ipk, 2),
                ]);
            }
        }
    }
}
