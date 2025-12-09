<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('khs_detail', function (Blueprint $table) {
            $table->engine = 'InnoDB';

            $table->id();

            $table->foreignId('khs_id')
                  ->constrained('khs')
                  ->cascadeOnDelete()
                  ->cascadeOnUpdate();

            $table->foreignId('kelas_kuliah_id')
                  ->constrained('kelas_kuliah')
                  ->restrictOnDelete()
                  ->cascadeOnUpdate();

            $table->decimal('nilai_angka', 5, 2)->nullable();
            $table->char('nilai_huruf', 2)->nullable();
            $table->decimal('bobot', 3, 2)->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('khs_detail');
    }
};
