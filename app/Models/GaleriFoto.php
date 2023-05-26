<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GaleriFoto extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_fotografer',
        'nama_fotografer',
        'gambar',
        'publis',
    ];
}
