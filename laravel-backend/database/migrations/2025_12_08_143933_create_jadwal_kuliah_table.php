<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('jadwal_kuliah', function (Blueprint $table) {
            $table->engine = 'InnoDB';

            $table->id();

            $table->foreignId('kelas_kuliah_id')
                  ->constrained('kelas_kuliah')
                  ->cascadeOnDelete()
                  ->cascadeOnUpdate();

            $table->enum('hari', ['SENIN','SELASA','RABU','KAMIS','JUMAT','SABTU']);
            $table->time('jam_mulai');
            $table->time('jam_selesai');
            $table->string('ruang', 50)->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('jadwal_kuliah');
    }
};
