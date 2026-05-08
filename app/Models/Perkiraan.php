<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perkiraan extends Model
{
    use HasFactory;

    protected $table = 'perkiraan';

    protected $fillable = [
        'kode', 'nama', 'tipe', 'posisi_normal', 'parent_id',
        'level', 'is_detail', 'is_active', 'saldo_awal', 'keterangan'
    ];

    // Relasi parent-child
    public function parent()
    {
        return $this->belongsTo(Perkiraan::class, 'parent_id');
    }

    public function children()
    {
        return $this->hasMany(Perkiraan::class, 'parent_id');
    }
}