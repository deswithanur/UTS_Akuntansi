<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FakturPembelian extends Model
{
    protected $table = 'faktur_pembelian';

    protected $fillable = [
        'no_faktur',
        'tanggal',
        'pemasok_id',
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