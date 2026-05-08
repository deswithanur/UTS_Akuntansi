<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FakturPenjualan extends Model
{
    protected $table = 'faktur_penjualan';

    protected $fillable = [
        'no_faktur',
        'tanggal',
        'pelanggan_id',
        'subtotal',
        'diskon',
        'ppn',
        'total',
        'status',
        'status_bayar',
        'jatuh_tempo',
        'keterangan',
        'jurnal_id'
    ];
}