<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TagihanSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('tagihan')->insert([
            [
                'id' => 1,
                'mahasiswa_id' => '20221101',
                'jenis_pembayaran_id' => 1,
                'semester_akademik_id' => 1,
                'nominal' => 3000000,
                'status' => 'BELUM_LUNAS',
            ],
            [
                'id' => 2,
                'mahasiswa_id' => '20231202',
                'jenis_pembayaran_id' => 1,
                'semester_akademik_id' => 3,
                'nominal' => 3000000,
                'status' => 'LUNAS',
            ],
            [
                'id' => 3,
                'mahasiswa_id' => '20241303',
                'jenis_pembayaran_id' => 2,
                'semester_akademik_id' => 5,
                'nominal' => 5000000,
                'status' => 'LUNAS',
            ],
        ]);
    }
}
