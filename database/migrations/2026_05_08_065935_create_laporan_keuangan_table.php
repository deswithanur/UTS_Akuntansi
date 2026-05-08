<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('laporan_keuangan', function (Blueprint $table) {
            $table->id();
            $table->enum('tipe', ['neraca','laba_rugi']); // adjust as needed
            $table->integer('periode_bulan');
            $table->integer('periode_tahun');
            $table->json('data');
            $table->dateTime('generated_at');
            $table->foreignId('generated_by')->constrained('users');
            $table->timestamps();
        });;
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('laporan_keuangan');
    }
};
