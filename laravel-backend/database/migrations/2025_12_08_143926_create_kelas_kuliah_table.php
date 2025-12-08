<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('kelas_kuliah', function (Blueprint $table) {
            $table->id();
            $table->foreignId('mata_kuliah_id')
                  ->constrained('mata_kuliah')
                  ->restrictOnDelete()
                  ->cascadeOnUpdate();

            $table->foreignId('semester_akademik_id')
                  ->constrained('semester_akademik')
                  ->restrictOnDelete()
                  ->cascadeOnUpdate();

            $table->string('kode_kelas', 10);
            $table->unsignedInteger('kapasitas_max')->nullable();

            $table->foreignId('dosen_id')
                  ->nullable()
                  ->constrained('dosen')
                  ->nullOnDelete()
                  ->cascadeOnUpdate();

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('kelas_kuliah');
    }
};
