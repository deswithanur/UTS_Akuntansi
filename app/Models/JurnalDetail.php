<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JurnalDetail extends Model
{
    protected $table = 'jurnal_detail';

    protected $fillable = [
        'jurnal_id',
        'perkiraan_id',
        'deskripsi',
        'debit',
        'kredit'
    ];
}