<?php

namespace App\Http\Controllers;


use App\Models\Kelas_ajar;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class KelolaProfileController extends Controller
{
    // View Profile
    public function profile()
    {
        $user = User::find(Auth::user()->id);
        $guru = Auth::user()->kd_guru;
        $kelas_ajar = Kelas_ajar::select('kelas_ajars.*')
            ->where('kd_guru', $guru)
            ->get();





        return view('profile', compact('kelas_ajar', 'user'));
    }
}
