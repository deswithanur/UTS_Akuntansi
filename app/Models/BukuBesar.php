<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BukuBesar extends Model
{
    use HasFactory;

    protected $table = 'buku_besar';

    protected $fillable = [
        'perkiraan_id',
        'tanggal',
        'no_ref',
        'deskripsi',
        'debit',
        'kredit',
        'saldo',
        'jurnal_detail_id',
        'posisi',
    ];

    // Relasi ke perkiraan
    public function perkiraan()
    {
        return $this->belongsTo(Perkiraan::class);
    }

    // Relasi ke jurnal detail
    public function jurnalDetail()
    {
        return $this->belongsTo(JurnalDetail::class, 'jurnal_detail_id');
    }
}