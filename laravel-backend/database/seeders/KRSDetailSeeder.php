<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KRSDetailSeeder extends Seeder
{
    public function run()
    {
        $usedKelasPerProdiSemester = [];
        $krsList = DB::table('krs')->get();

        foreach ($krsList as $krs) {
            $mahasiswa = DB::table('mahasiswa')
                ->where('nim', $krs->mahasiswa_id)
                ->first();

            if (! $mahasiswa) {
                continue;
            }

            $allowedSemester = $this->getAllowedSemester($mahasiswa->nim);

            if ($krs->semester_akademik_id > $allowedSemester) {
                continue;
            }

            $key = "{$mahasiswa->program_studi_id}_{$krs->semester_akademik_id}";

            $kelasList = DB::table('kelas_kuliah')
                ->join('mata_kuliah', 'kelas_kuliah.mata_kuliah_id', '=', 'mata_kuliah.kode_mk')
                ->where('mata_kuliah.program_studi_id', $mahasiswa->program_studi_id)
                ->where('mata_kuliah.semester_saran', $krs->semester_akademik_id)
                ->where('kelas_kuliah.semester_akademik_id', $krs->semester_akademik_id)
                ->when(! empty($usedKelasPerProdiSemester[$key]), function ($query) use ($usedKelasPerProdiSemester, $key) {
                    $query->whereNotIn('kelas_kuliah.id', $usedKelasPerProdiSemester[$key]);
                })
                ->limit(5)
                ->get();

            foreach ($kelasList as $kelas) {
                DB::table('krs_detail')->insert([
                    'krs_id' => $krs->id,
                    'kelas_kuliah_id' => $kelas->id,
                ]);

                $usedKelasPerProdiSemester[$key][] = $kelas->id;
            }
        }
    }

    private function getAllowedSemester(string $nim): int
    {
        $tahunMasuk = (int) substr($nim, 0, 4);
        $currentYear = (int) date('Y');
        $progressYears = max(0, $currentYear - $tahunMasuk);
        $semesterMax = min(5, ($progressYears + 1) * 2);
        return max(1, $semesterMax);
    }
}
