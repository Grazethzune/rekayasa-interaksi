<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('krs_detail', function (Blueprint $table) {
            $table->id();

            $table->foreignId('krs_id')
                  ->constrained('krs')
                  ->cascadeOnDelete()
                  ->cascadeOnUpdate();

            $table->foreignId('kelas_kuliah_id')
                  ->constrained('kelas_kuliah')
                  ->restrictOnDelete()
                  ->cascadeOnUpdate();

            $table->timestamps();

            $table->unique(['krs_id', 'kelas_kuliah_id'], 'uniq_krs_kelas');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('krs_detail');
    }
};
