<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nilai_kkm extends Model
{
    use HasFactory;
    protected $fillable = [
    	'kd_rombel', 'kd_mapel', 'kkm'
    ];
}
