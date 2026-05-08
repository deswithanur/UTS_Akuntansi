<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pemasok extends Model
{
    protected $table = 'pemasok';

    protected $fillable = [
        'kode',
        'nama',
        'email',
        'telepon',
        'alamat',
        'npwp',
        'bank',
        'no_rekening',
        'is_active',
        'keterangan'
    ];
}