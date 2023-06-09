<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaketFoto extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'gambar',
        'nama_fotografer',
        'no_fotografer',
        'nama_paket',
        'harga_paket',
        'ket_paket'
    ];
}
