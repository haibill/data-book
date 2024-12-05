<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Writer extends Model
{
    use HasFactory;

    // Kolom yang dapat diisi menggunakan metode create()
    protected $fillable = [
        'name',
        'birth_date',
        'nationality',
        'biography',
    ];
}
