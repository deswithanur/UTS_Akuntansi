<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('perkiraan', function (Blueprint $table) {
            $table->id(); // id bigint auto increment
            $table->string('kode', 20)->unique(); // kode varchar(20)
            $table->string('nama', 100); // nama
            $table->enum('tipe', ['Pendapatan', 'Beban', 'Aset', 'Kewajiban', 'Modal']); // tipe akun
            $table->enum('posisi_normal', ['Debit', 'Kredit']); // posisi normal
            $table->foreignId('parent_id')->nullable()->constrained('perkiraan')->nullOnDelete(); // parent_id
            $table->integer('level')->default(1); // level
            $table->boolean('is_detail')->default(false); // is_detail
            $table->boolean('is_active')->default(true); // aktif
            $table->decimal('saldo_awal', 15, 2)->default(0); // saldo_awal
            $table->text('keterangan')->nullable(); // keterangan
            $table->timestamps(); // created_at, updated_at
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('perkiraan');
    }
};