<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Delivery extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_proyek',
        'nama',
    ];

    public function proyek()
    {
        return $this->belongsTo(proyek::class, 'id_proyek', 'id');
    }
}
