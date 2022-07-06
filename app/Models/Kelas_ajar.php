<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelas_ajar extends Model
{
    use HasFactory;
    protected $fillable = [
        'guru', 'kd_mapel', 'kd_rombel', 'jurusan', 'tingkat'
    ];
}
