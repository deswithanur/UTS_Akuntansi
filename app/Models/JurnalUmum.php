<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JurnalUmum extends Model
{
    protected $table = 'jurnal_umum';

    protected $fillable = [
        'no_jurnal',
        'tanggal',
        'deskripsi',
        'tipe',
        'status',
        'created_by',
        'posted_at',
        'keterangan'
    ];
}