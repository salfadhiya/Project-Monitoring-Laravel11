<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Tasklist extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_workers',
        'id_struktur',
        'id_delivery',
        'kapasitas',
    ];
}
