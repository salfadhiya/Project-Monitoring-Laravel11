<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class StrukturOrganisasi extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama',
    ];

    public function workers()
    {
        return $this->hasMany(Workers::class, 'id_struktur', 'id');
    }

    public function proyek()
    {
        return $this->hasMany(Proyek::class, 'id_struktur', 'id');
    }


}
