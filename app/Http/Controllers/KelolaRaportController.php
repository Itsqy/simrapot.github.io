<?php

namespace App\Http\Controllers;

use PDF;
use App\Models\Siswa;
// use App\Models\Rayon;
use App\Models\Rombel;
use App\Models\Semester1;
use App\Models\Semester2;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class KelolaRaportController extends Controller
{
    // View Kelola Raport
    public function kelola_raport()
    {
        $user = User::find(Auth::user()->id);
        return view('kelola_raport.kelola_raport', compact('user'));
    }

    // Tabel Rayon
    // public function tabel_rayon()
    // {
    //     $rayons = Rayon::join('users', 'users.kd_guru', '=', 'rayons.kd_guru')
    //         ->select('rayons.*', 'users.name AS pembimbing')
    //         ->orderBy('rayon', 'ASC')
    //         ->get();

    //     return view('kelola_raport.tabel_rayon_raport', compact('rayons'));
    // }

    // Sort By Tabel Rayon
    // public function sort_rayon($daerah)
    // {
    //     $rayons = Rayon::join('users', 'users.kd_guru', '=', 'rayons.kd_guru')
    //         ->where('rayons.daerah', $daerah)
    //         ->select('rayons.*', 'users.name AS pembimbing')
    //         ->orderBy('rayon', 'ASC')
    //         ->get();

    //     return view('kelola_raport.sort_rayon_raport', compact('rayons'));
    // }

    // Data Siswa
    public function data_siswa()
    {
        $user = User::find(Auth::user()->id);
        $siswas = Siswa::all();
        // $rayons = Rayon::select('rayons.*')
        // ->where('kd_rayon', $kd_rayon)
        // ->first();

        return view('kelola_raport.data_siswa', compact('siswas', 'user'));
    }

    // Detail Siswa
    public function detail_siswa($nis)
    {
        $user = User::find(Auth::user()->id);
        $siswas = Siswa::select('siswas.*')
            ->where('nis', $nis)
            ->first();
        $rombels = Rombel::select('rombels.*')
            ->where('rombel', $siswas->rombel)
            ->first();
        $semes1s = Semester1::join('mapels', 'mapels.kd_mapel', '=', 'semester1s.kd_mapel')
            ->select('semester1s.*', 'mapels.*')
            ->where('nis', $nis)
            ->get();
        $semes2s = Semester2::join('mapels', 'mapels.kd_mapel', '=', 'semester2s.kd_mapel')
            ->select('semester2s.*', 'mapels.*')
            ->where('nis', $nis)
            ->get();
        // $rayons = Rayon::select('rayons.*')
        // ->where('kd_rayon', $kd_rayon)
        // ->first();

        return view('kelola_raport.detail_siswa', compact('semes1s', 'semes2s', 'siswas', 'user', 'rombels'));
    }

    // Pratinjau Raport

    public function cetak_raport($ulangan, $nis)
    {
        $siswas = Siswa::select('siswas.*')
            ->where('nis', $nis)
            ->first();
        $semes1s = Semester1::join('mapels', 'mapels.kd_mapel', '=', 'semester1s.kd_mapel')
            ->select('semester1s.*', 'mapels.*')
            ->where('nis', $nis)
            ->get();
        $semes2s = Semester2::join('mapels', 'mapels.kd_mapel', '=', 'semester2s.kd_mapel')
            ->select('semester2s.*', 'mapels.*')
            ->where('nis', $nis)
            ->get();
        $user = User::find(Auth::user()->id);
        $rombels = Rombel::select('rombels.*')
            ->where('rombel', $siswas->rombel)
            ->first();
        // $rayons = Rayon::select('rayons.*')
        // ->where('kd_rayon', $kd_rayon)
        // ->first();

        return view('kelola_raport.cetak_raport', compact('siswas', 'user', 'rombels', 'ulangan', 'semes1s', 'semes2s'));
    }

    // Raport View
    public function raport_view($nis, $ulangan, $senbud, $upd, $pramuka, $sikap, $catatan)
    {
        $user = User::find(Auth::user()->id);
        $siswas = Siswa::select('siswas.*')
            ->where('nis', $nis)
            ->first();
        $semes1s = Semester1::join('mapels', 'mapels.kd_mapel', '=', 'semester1s.kd_mapel')
            ->select('semester1s.*', 'mapels.*')
            ->where('nis', $nis)
            ->get();
        $semes2s = Semester2::join('mapels', 'mapels.kd_mapel', '=', 'semester2s.kd_mapel')
            ->select('semester2s.*', 'mapels.*')
            ->where('nis', $nis)
            ->get();
        $rombels = Rombel::select('rombels.*')
            ->where('rombel', $siswas->rombel)
            ->first();
        // $rayons = Rayon::select('rayons.*')
        //     ->where('kd_rayon', $siswas->kd_rayon)
        //     ->first();

        return view('kelola_raport.raport_view', compact('siswas', 'semes1s', 'semes2s', 'rombels', 'ulangan', 'senbud', 'upd', 'pramuka', 'sikap', 'user', 'catatan'));
    }
}
