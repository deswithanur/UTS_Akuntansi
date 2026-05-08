<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
    protected $table = 'pelanggan';

    protected $fillable = [
        'kode',
        'nama',
        'email',
        'telepon',
        'alamat',
        'npwp',
        'limit_piutang',
        'jatuh_tempo',
        'is_active',
        'keterangan'
    ];
}