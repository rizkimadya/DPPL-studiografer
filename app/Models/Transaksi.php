<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;

    protected $fillable = [
        'email_user',
        'no_telp_user',
        'fotografer',
        'no_fotografer',
        'nama_paket',
        'harga',
        'tanggal',
        'jam',
        'status',
    ];
}
