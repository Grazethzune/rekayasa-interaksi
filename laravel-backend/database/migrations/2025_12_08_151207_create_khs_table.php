<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('khs', function (Blueprint $table) {
            $table->id();

            $table->foreignId('mahasiswa_id')
                  ->constrained('mahasiswa')
                  ->restrictOnDelete()
                  ->cascadeOnUpdate();

            $table->foreignId('semester_akademik_id')
                  ->constrained('semester_akademik')
                  ->restrictOnDelete()
                  ->cascadeOnUpdate();

            $table->decimal('ip_semester', 4, 2)->nullable();
            $table->decimal('ipk', 4, 2)->nullable();
            $table->unsignedInteger('total_sks')->nullable();
            $table->unsignedInteger('total_sks_kumulatif')->nullable();
            $table->timestamps();

            $table->unique(['mahasiswa_id','semester_akademik_id'], 'uniq_khs_mhs_sem');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('khs');
    }
};
