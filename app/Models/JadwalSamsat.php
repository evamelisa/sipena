<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JadwalSamsat extends Model
{
    protected $table = 'jadwal_samsat';
    
    protected $fillable = [
        'nama_layanan',
        'lokasi',
        'hari',
        'jam_mulai',
        'jam_selesai',
        'status'
    ];
}