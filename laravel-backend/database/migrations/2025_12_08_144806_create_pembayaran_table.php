<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('pembayaran', function (Blueprint $table) {
            $table->id();

            $table->foreignId('tagihan_id')
                  ->constrained('tagihan')
                  ->cascadeOnDelete()
                  ->cascadeOnUpdate();

            $table->dateTime('tgl_bayar');
            $table->decimal('nominal_bayar', 15, 2);
            $table->string('metode_bayar', 50)->nullable();
            $table->string('ref_bank', 100)->nullable();
            $table->enum('status', ['BERHASIL','GAGAL','PENDING'])->default('BERHASIL');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('pembayaran');
    }
};
