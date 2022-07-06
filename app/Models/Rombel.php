<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rombel extends Model
{
    use HasFactory;
    protected $fillable = [
        'kd_rombel', 'rombel', 'jml_rombel', 'jurusan', 'singkat_jurusan', 'tingkat'
    ];
}
