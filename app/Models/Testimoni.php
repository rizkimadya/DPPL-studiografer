<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimoni extends Model
{
    use HasFactory;

    protected $fillable = [
        "nama_user ",
        "fotografer_tujuan ",
        "range ",
        "isi_testimoni ",
    ];
}
