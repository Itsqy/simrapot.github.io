<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Semester2 extends Model
{
    use HasFactory;
    protected $fillable = [
        'kd_rombel', 'kd_mapel', 'nis', 'uh_5p', 'uh_5k', 'uh_6p', 'uh_6k', 'uts_2p', 'uts_2k', 'uh_7p', 'uh_7k', 'uh_8p', 'uh_8k', 'ukk_p', 'ukk_k'
    ];
}
