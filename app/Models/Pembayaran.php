<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{
    protected $table = 'pembayaran';

    protected $fillable = [
        'no_pembayaran',
        'tanggal',
        'tipe',
        'sumber',
        'sumber_id',
        'sumber_type',
        'pelanggan_id',
        'pemasok_id',
        'jumlah',
        'metode',
        'no_referensi',
        'keterangan',
        'jurnal_id'
    ];
}