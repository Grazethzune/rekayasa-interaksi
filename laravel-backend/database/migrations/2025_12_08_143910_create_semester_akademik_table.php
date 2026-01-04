<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        // Schema::create('semester_akademik', function (Blueprint $table) {
        //     $table->id();
        //     $table->string('kode_semester', 10)->unique();
        //     $table->string('nama_semester', 50);
        //     $table->date('tgl_mulai')->nullable();
        //     $table->date('tgl_selesai')->nullable();
        //     $table->enum('status', ['AKTIF','NON-AKTIF'])->default('AKTIF');
        //     $table->timestamps();
        // });

        Schema::create('semester_akademik', function (Blueprint $table) {
          $table->id();
          $table->string('kode_semester', 10)->unique();
          $table->string('nama_semester', 50);
          $table->date('tgl_mulai')->nullable();
          $table->date('tgl_selesai')->nullable();
          // Tambahkan kolom jadwal KRS
          $table->dateTime('krs_mulai')->nullable();
          $table->dateTime('krs_selesai')->nullable();
          $table->enum('status', ['AKTIF','NON-AKTIF'])->default('AKTIF');
          $table->timestamps();
      });
    }


    public function down(): void
    {
        Schema::dropIfExists('semester_akademik');
    }
};
