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
       Schema::create('pembayaran', function (Blueprint $table) {
            $table->id();
            $table->string('no_pembayaran', 20)->unique();
            $table->date('tanggal');
            $table->enum('tipe', ['penjualan','pembelian']);
            $table->enum('sumber', ['pelanggan','pemasok']);
            $table->unsignedBigInteger('sumber_id');
            $table->string('sumber_type', 50)->nullable();
            $table->foreignId('pelanggan_id')->nullable()->constrained('pelanggan');
            $table->foreignId('pemasok_id')->nullable()->constrained('pemasok');
            $table->decimal('jumlah', 15, 2)->default(0);
            $table->enum('metode', ['cash','transfer','cek','giro']);
            $table->string('no_referensi', 50)->nullable();
            $table->text('keterangan')->nullable();
            $table->foreignId('jurnal_id')->constrained('jurnal_umum');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pembayaran');
    }
};
