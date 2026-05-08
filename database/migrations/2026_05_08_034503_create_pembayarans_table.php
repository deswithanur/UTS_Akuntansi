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
        Schema::create('pembayarans', function (Blueprint $table) {

            $table->id();

            $table->string('no_pembayaran',20)->unique();

            $table->date('tanggal');

            $table->enum('tipe',[
                'masuk',
                'keluar'
            ]);

            $table->enum('sumber',[
                'penjualan',
                'pembelian',
                'lainnya'
            ]);

            $table->unsignedBigInteger('sumber_id')->nullable();

            $table->string('sumber_type',50)->nullable();

            $table->foreignId('pelanggan_id')
                ->nullable()
                ->constrained('pelanggans')
                ->onDelete('cascade');

            $table->foreignId('pemasok_id')
                ->nullable()
                ->constrained('pemasoks')
                ->onDelete('cascade');

            $table->decimal('jumlah',15,2);

            $table->enum('metode',[
                'cash',
                'transfer',
                'giro'
            ]);

            $table->string('no_referensi',50)->nullable();

            $table->text('keterangan')->nullable();

            $table->foreignId('jurnal_id')
                ->nullable()
                ->constrained('jurnal_umums')
                ->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pembayarans');
    }
};
