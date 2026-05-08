<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SaldoAkun extends Model
{
    protected $table = 'saldo_akun';

    protected $fillable = [
        'perkiraan_id',
        'tahun',
        'bulan',
        'saldo_awal',
        'debit',
        'kredit',
        'saldo_akhir'
    ];
}