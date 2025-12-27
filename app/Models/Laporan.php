<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Laporan extends Model
{
    protected $table = 'laporan';

    protected $fillable = [
        'klasifikasi',
        'email',
        'judul',
        'isi',
        'layanan',
        'tanggal',
        'status',
        'catatan_admin'
    ];

    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
        'tanggal' => 'date',
    ];
}