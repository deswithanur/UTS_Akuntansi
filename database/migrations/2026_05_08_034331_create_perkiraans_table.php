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
       Schema::create('perkiraans', function (Blueprint $table) {

            $table->id();

            $table->string('kode',20)->unique();

            $table->string('nama',100);

            $table->enum('tipe',[
                'aset',
                'kewajiban',
                'modal',
                'pendapatan',
                'beban'
            ]);

            $table->enum('posisi_normal',[
                'debit',
                'kredit'
            ]);

            $table->foreignId('parent_id')
                ->nullable()
                ->constrained('perkiraans')
                ->onDelete('cascade');

            $table->integer('level')->default(1);

            $table->boolean('is_detail')->default(true);

            $table->boolean('is_active')->default(true);

            $table->decimal('saldo_awal',15,2)->default(0);

            $table->text('keterangan')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('perkiraans');
    }
};
