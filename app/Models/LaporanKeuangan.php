<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LaporanKeuangan extends Model
{
    protected $table = 'laporan_keuangan';

    protected $fillable = [
        'tipe',
        'periode_bulan',
        'periode_tahun',
        'data',
        'generated_at',
        'generated_by'
    ];
}