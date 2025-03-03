<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Proyek extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_struktur',
        'nama',
        'posisi',
        'nomor',
        'durasi',
        'ttdkntrk',
        'mulai_ek',
        'berakhir_pb',
        'berakhir_k',
        'nilai_kb',
        'nilai_kn',
        'hpp',
        'lababruto',
        'jenisanggaran',
        'cust',
        'enduser',
        'masa_warranty'
    ];

    protected $casts = [
        'ttdkntrk' => 'date',
        'mulai_ek' => 'date',
        'berakhir_pb' => 'date',
        'berakhir_k' => 'date',
    ];
}
