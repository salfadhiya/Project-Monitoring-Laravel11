<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Proyek extends Model
{
    protected $table = 'proyeks'; // Sesuaikan dengan nama tabel

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
        'hpp' => 'float',
        'lababruto' => 'float',
    ];

    public function struktur_organisasi()
    {
        return $this->belongsTo(StrukturOrganisasi::class, 'id_struktur', 'id');
    }

    public function delivery()
    {
        return $this->hasMany(delivery::class, 'id_proyek', 'id');
    }


}
