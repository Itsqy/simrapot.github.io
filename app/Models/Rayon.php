<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rayon extends Model
{
    use HasFactory;
    protected $fillable = [
        'kd_rayon', 'rayon', 'singkatan_rayon', 'daerah', 'jml_rayon', 'kd_guru'
    ];
}
