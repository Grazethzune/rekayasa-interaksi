<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class MahasiswaSeeder extends Seeder
{
    public function run()
    {
        DB::table('mahasiswa')->insert([

            // ================= INFORMATIKA (1) =================
            ['nim'=>'20221101','pin_login'=>Hash::make('1234'),'nama_lengkap'=>'Andi Informatika','email_umm'=>'andiinformatika@webmail.umm.ac.id','angkatan'=>2022,'program_studi_id'=>1],
            ['nim'=>'20231102','pin_login'=>Hash::make('1234'),'nama_lengkap'=>'Budi Informatika','email_umm'=>'budiinformatika@webmail.umm.ac.id','angkatan'=>2023,'program_studi_id'=>1],
            ['nim'=>'20241103','pin_login'=>Hash::make('1234'),'nama_lengkap'=>'Citra Informatika','email_umm'=>'citrainformatika@webmail.umm.ac.id','angkatan'=>2024,'program_studi_id'=>1],
            ['nim'=>'20221104','pin_login'=>Hash::make('1234'),'nama_lengkap'=>'Dewi Informatika','email_umm'=>'dewiinformatika@webmail.umm.ac.id','angkatan'=>2022,'program_studi_id'=>1],
            ['nim'=>'20231105','pin_login'=>Hash::make('1234'),'nama_lengkap'=>'Eko Informatika','email_umm'=>'ekoinformatika@webmail.umm.ac.id','angkatan'=>2023,'program_studi_id'=>1],

            // ================= SISTEM INFORMASI (2) =================
            ['nim'=>'20221201','pin_login'=>Hash::make('1234'),'nama_lengkap'=>'Andi SI','email_umm'=>'andisi@webmail.umm.ac.id','angkatan'=>2022,'program_studi_id'=>2],
            ['nim'=>'20231202','pin_login'=>Hash::make('1234'),'nama_lengkap'=>'Budi SI','email_umm'=>'budisi@webmail.umm.ac.id','angkatan'=>2023,'program_studi_id'=>2],
            ['nim'=>'20241203','pin_login'=>Hash::make('1234'),'nama_lengkap'=>'Citra SI','email_umm'=>'citrasi@webmail.umm.ac.id','angkatan'=>2024,'program_studi_id'=>2],
            ['nim'=>'20221204','pin_login'=>Hash::make('1234'),'nama_lengkap'=>'Dewi SI','email_umm'=>'dewisi@webmail.umm.ac.id','angkatan'=>2022,'program_studi_id'=>2],
            ['nim'=>'20231205','pin_login'=>Hash::make('1234'),'nama_lengkap'=>'Eko SI','email_umm'=>'ekosi@webmail.umm.ac.id','angkatan'=>2023,'program_studi_id'=>2],

            // ================= TEKNIK ELEKTRO (3) =================
            ['nim'=>'20221301','pin_login'=>Hash::make('1234'),'nama_lengkap'=>'Andi Elektro','email_umm'=>'andielektro@webmail.umm.ac.id','angkatan'=>2022,'program_studi_id'=>3],
            ['nim'=>'20231302','pin_login'=>Hash::make('1234'),'nama_lengkap'=>'Budi Elektro','email_umm'=>'budielektro@webmail.umm.ac.id','angkatan'=>2023,'program_studi_id'=>3],
            ['nim'=>'20241303','pin_login'=>Hash::make('1234'),'nama_lengkap'=>'Citra Elektro','email_umm'=>'citraelektro@webmail.umm.ac.id','angkatan'=>2024,'program_studi_id'=>3],
            ['nim'=>'20221304','pin_login'=>Hash::make('1234'),'nama_lengkap'=>'Dewi Elektro','email_umm'=>'dewieletro@webmail.umm.ac.id','angkatan'=>2022,'program_studi_id'=>3],
            ['nim'=>'20231305','pin_login'=>Hash::make('1234'),'nama_lengkap'=>'Eko Elektro','email_umm'=>'ekoelektro@webmail.umm.ac.id','angkatan'=>2023,'program_studi_id'=>3],

            // ================= TEKNIK MESIN (4) =================
            ['nim'=>'20221401','pin_login'=>Hash::make('1234'),'nama_lengkap'=>'Andi Mesin','email_umm'=>'andimesin@webmail.umm.ac.id','angkatan'=>2022,'program_studi_id'=>4],
            ['nim'=>'20231402','pin_login'=>Hash::make('1234'),'nama_lengkap'=>'Budi Mesin','email_umm'=>'budimesin@webmail.umm.ac.id','angkatan'=>2023,'program_studi_id'=>4],
            ['nim'=>'20241403','pin_login'=>Hash::make('1234'),'nama_lengkap'=>'Citra Mesin','email_umm'=>'citramasin@webmail.umm.ac.id','angkatan'=>2024,'program_studi_id'=>4],
            ['nim'=>'20221404','pin_login'=>Hash::make('1234'),'nama_lengkap'=>'Dewi Mesin','email_umm'=>'dewimesin@webmail.umm.ac.id','angkatan'=>2022,'program_studi_id'=>4],
            ['nim'=>'20231405','pin_login'=>Hash::make('1234'),'nama_lengkap'=>'Eko Mesin','email_umm'=>'ekomesin@webmail.umm.ac.id','angkatan'=>2023,'program_studi_id'=>4],

            // ================= TEKNIK SIPIL (5) =================
            ['nim'=>'20221501','pin_login'=>Hash::make('1234'),'nama_lengkap'=>'Andi Sipil','email_umm'=>'andisipil@webmail.umm.ac.id','angkatan'=>2022,'program_studi_id'=>5],
            ['nim'=>'20231502','pin_login'=>Hash::make('1234'),'nama_lengkap'=>'Budi Sipil','email_umm'=>'budisipil@webmail.umm.ac.id','angkatan'=>2023,'program_studi_id'=>5],
            ['nim'=>'20241503','pin_login'=>Hash::make('1234'),'nama_lengkap'=>'Citra Sipil','email_umm'=>'citrasipil@webmail.umm.ac.id','angkatan'=>2024,'program_studi_id'=>5],
            ['nim'=>'20221504','pin_login'=>Hash::make('1234'),'nama_lengkap'=>'Dewi Sipil','email_umm'=>'dewisipil@webmail.umm.ac.id','angkatan'=>2022,'program_studi_id'=>5],
            ['nim'=>'20231505','pin_login'=>Hash::make('1234'),'nama_lengkap'=>'Eko Sipil','email_umm'=>'ekosipil@webmail.umm.ac.id','angkatan'=>2023,'program_studi_id'=>5],

            // ================= AKUNTANSI (6) =================
            ['nim'=>'20221601','pin_login'=>Hash::make('1234'),'nama_lengkap'=>'Andi Akuntansi','email_umm'=>'andiakuntansi@webmail.umm.ac.id','angkatan'=>2022,'program_studi_id'=>6],
            ['nim'=>'20231602','pin_login'=>Hash::make('1234'),'nama_lengkap'=>'Budi Akuntansi','email_umm'=>'budiakuntansi@webmail.umm.ac.id','angkatan'=>2023,'program_studi_id'=>6],
            ['nim'=>'20241603','pin_login'=>Hash::make('1234'),'nama_lengkap'=>'Citra Akuntansi','email_umm'=>'citraakuntansi@webmail.umm.ac.id','angkatan'=>2024,'program_studi_id'=>6],
            ['nim'=>'20221604','pin_login'=>Hash::make('1234'),'nama_lengkap'=>'Dewi Akuntansi','email_umm'=>'dewiakuntansi@webmail.umm.ac.id','angkatan'=>2022,'program_studi_id'=>6],
            ['nim'=>'20231605','pin_login'=>Hash::make('1234'),'nama_lengkap'=>'Eko Akuntansi','email_umm'=>'ekoakuntansi@webmail.umm.ac.id','angkatan'=>2023,'program_studi_id'=>6],

            // ================= MANAJEMEN (7) =================
            ['nim'=>'20221701','pin_login'=>Hash::make('1234'),'nama_lengkap'=>'Andi Manajemen','email_umm'=>'andimanajemen@webmail.umm.ac.id','angkatan'=>2022,'program_studi_id'=>7],
            ['nim'=>'20231702','pin_login'=>Hash::make('1234'),'nama_lengkap'=>'Budi Manajemen','email_umm'=>'budimanajemen@webmail.umm.ac.id','angkatan'=>2023,'program_studi_id'=>7],
            ['nim'=>'20241703','pin_login'=>Hash::make('1234'),'nama_lengkap'=>'Citra Manajemen','email_umm'=>'citramanajemen@webmail.umm.ac.id','angkatan'=>2024,'program_studi_id'=>7],
            ['nim'=>'20221704','pin_login'=>Hash::make('1234'),'nama_lengkap'=>'Dewi Manajemen','email_umm'=>'dewimanajemen@webmail.umm.ac.id','angkatan'=>2022,'program_studi_id'=>7],
            ['nim'=>'20231705','pin_login'=>Hash::make('1234'),'nama_lengkap'=>'Eko Manajemen','email_umm'=>'ekomanajemen@webmail.umm.ac.id','angkatan'=>2023,'program_studi_id'=>7],

            // ================= EKONOMI PEMBANGUNAN (8) =================
            ['nim'=>'20221801','pin_login'=>Hash::make('1234'),'nama_lengkap'=>'Andi Ekonomi','email_umm'=>'andiekonomi@webmail.umm.ac.id','angkatan'=>2022,'program_studi_id'=>8],
            ['nim'=>'20231802','pin_login'=>Hash::make('1234'),'nama_lengkap'=>'Budi Ekonomi','email_umm'=>'budiekonomi@webmail.umm.ac.id','angkatan'=>2023,'program_studi_id'=>8],
            ['nim'=>'20241803','pin_login'=>Hash::make('1234'),'nama_lengkap'=>'Citra Ekonomi','email_umm'=>'citraekonomi@webmail.umm.ac.id','angkatan'=>2024,'program_studi_id'=>8],
            ['nim'=>'20221804','pin_login'=>Hash::make('1234'),'nama_lengkap'=>'Dewi Ekonomi','email_umm'=>'dewiekonomi@webmail.umm.ac.id','angkatan'=>2022,'program_studi_id'=>8],
            ['nim'=>'20231805','pin_login'=>Hash::make('1234'),'nama_lengkap'=>'Eko Ekonomi','email_umm'=>'ekoekonomi@webmail.umm.ac.id','angkatan'=>2023,'program_studi_id'=>8],

            // ================= ILMU HUKUM (9) =================
            ['nim'=>'20221901','pin_login'=>Hash::make('1234'),'nama_lengkap'=>'Andi Hukum','email_umm'=>'andihukum@webmail.umm.ac.id','angkatan'=>2022,'program_studi_id'=>9],
            ['nim'=>'20231902','pin_login'=>Hash::make('1234'),'nama_lengkap'=>'Budi Hukum','email_umm'=>'budihukum@webmail.umm.ac.id','angkatan'=>2023,'program_studi_id'=>9],
            ['nim'=>'20241903','pin_login'=>Hash::make('1234'),'nama_lengkap'=>'Citra Hukum','email_umm'=>'citrahukum@webmail.umm.ac.id','angkatan'=>2024,'program_studi_id'=>9],
            ['nim'=>'20221904','pin_login'=>Hash::make('1234'),'nama_lengkap'=>'Dewi Hukum','email_umm'=>'dewihukum@webmail.umm.ac.id','angkatan'=>2022,'program_studi_id'=>9],
            ['nim'=>'20231905','pin_login'=>Hash::make('1234'),'nama_lengkap'=>'Eko Hukum','email_umm'=>'ekohukum@webmail.umm.ac.id','angkatan'=>2023,'program_studi_id'=>9],

            // ================= ILMU KOMUNIKASI (10) =================
            ['nim'=>'20221001','pin_login'=>Hash::make('1234'),'nama_lengkap'=>'Andi Komunikasi','email_umm'=>'andikomunikasi@webmail.umm.ac.id','angkatan'=>2022,'program_studi_id'=>10],
            ['nim'=>'20231002','pin_login'=>Hash::make('1234'),'nama_lengkap'=>'Budi Komunikasi','email_umm'=>'budikomunikasi@webmail.umm.ac.id','angkatan'=>2023,'program_studi_id'=>10],
            ['nim'=>'20241003','pin_login'=>Hash::make('1234'),'nama_lengkap'=>'Citra Komunikasi','email_umm'=>'citrakomunikasi@webmail.umm.ac.id','angkatan'=>2024,'program_studi_id'=>10],
            ['nim'=>'20221004','pin_login'=>Hash::make('1234'),'nama_lengkap'=>'Dewi Komunikasi','email_umm'=>'dewikomunikasi@webmail.umm.ac.id','angkatan'=>2022,'program_studi_id'=>10],
            ['nim'=>'20231005','pin_login'=>Hash::make('1234'),'nama_lengkap'=>'Eko Komunikasi','email_umm'=>'ekokomunikasi@webmail.umm.ac.id','angkatan'=>2023,'program_studi_id'=>10],

            // ================= ADMINISTRASI PUBLIK (11) =================
            ['nim'=>'20221111','pin_login'=>Hash::make('1234'),'nama_lengkap'=>'Andi Administrasi','email_umm'=>'andiadministrasi@webmail.umm.ac.id','angkatan'=>2022,'program_studi_id'=>11],
            ['nim'=>'20231112','pin_login'=>Hash::make('1234'),'nama_lengkap'=>'Budi Administrasi','email_umm'=>'budiadministrasi@webmail.umm.ac.id','angkatan'=>2023,'program_studi_id'=>11],
            ['nim'=>'20241113','pin_login'=>Hash::make('1234'),'nama_lengkap'=>'Citra Administrasi','email_umm'=>'citraadministrasi@webmail.umm.ac.id','angkatan'=>2024,'program_studi_id'=>11],
            ['nim'=>'20221114','pin_login'=>Hash::make('1234'),'nama_lengkap'=>'Dewi Administrasi','email_umm'=>'dewiadministrasi@webmail.umm.ac.id','angkatan'=>2022,'program_studi_id'=>11],
            ['nim'=>'20231115','pin_login'=>Hash::make('1234'),'nama_lengkap'=>'Eko Administrasi','email_umm'=>'ekoadministrasi@webmail.umm.ac.id','angkatan'=>2023,'program_studi_id'=>11],

            // ================= PENDIDIKAN BAHASA INGGRIS (12) =================
            ['nim'=>'20221211','pin_login'=>Hash::make('1234'),'nama_lengkap'=>'Andi PBI','email_umm'=>'andipbi@webmail.umm.ac.id','angkatan'=>2022,'program_studi_id'=>12],
            ['nim'=>'20231212','pin_login'=>Hash::make('1234'),'nama_lengkap'=>'Budi PBI','email_umm'=>'budipbi@webmail.umm.ac.id','angkatan'=>2023,'program_studi_id'=>12],
            ['nim'=>'20241213','pin_login'=>Hash::make('1234'),'nama_lengkap'=>'Citra PBI','email_umm'=>'citrapbi@webmail.umm.ac.id','angkatan'=>2024,'program_studi_id'=>12],
            ['nim'=>'20221214','pin_login'=>Hash::make('1234'),'nama_lengkap'=>'Dewi PBI','email_umm'=>'dewipbi@webmail.umm.ac.id','angkatan'=>2022,'program_studi_id'=>12],
            ['nim'=>'20231215','pin_login'=>Hash::make('1234'),'nama_lengkap'=>'Eko PBI','email_umm'=>'ekopbi@webmail.umm.ac.id','angkatan'=>2023,'program_studi_id'=>12],

        ]);
    }
}
