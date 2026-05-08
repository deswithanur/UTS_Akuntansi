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
        Schema::create('jurnal_umums', function (Blueprint $table) {

            $table->id();

            $table->string('no_jurnal',20)->unique();

            $table->date('tanggal');

            $table->text('deskripsi')->nullable();

            $table->enum('tipe',[
                'umum',
                'penyesuaian',
                'penutup'
            ]);

            $table->enum('status',[
                'draft',
                'posted'
            ])->default('draft');

            $table->foreignId('created_by')
                ->constrained('users')
                ->onDelete('cascade');

            $table->timestamp('posted_at')->nullable();

            $table->text('keterangan')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jurnal_umums');
    }
};
