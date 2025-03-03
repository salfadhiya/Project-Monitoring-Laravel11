<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Workers extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_struktur',
        'jabatan',
        'nama',
    ];

    public function strukturOrganisasi()
    {
        return $this->belongsTo(StrukturOrganisasi::class, 'id_struktur', 'id');
    }


}
