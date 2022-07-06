<?php

namespace App\Http\Controllers;


use App\Models\Siswa;
use App\Models\Mapel;
use App\Models\Rombel;
use App\Models\Semester1;
use App\Models\Semester2;
use App\Models\Nilai_kkm;
use App\Models\Kelas_ajar;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Session;

class KelolaNilaiController extends Controller
{
    // Menampilkan Kelas Ajar
    public function dashboard_nilai()
    {
        $user = User::find(Auth::user()->id);
        $kd_guru = Auth::user()->kd_guru;
        $kd_mapel = Auth::user()->kd_mapel;
        $daftar_kelas = Rombel::join('kelas_ajars', 'kelas_ajars.kd_rombel', '=', 'rombels.kd_rombel')
            ->select('kelas_ajars.kd_rombel', 'rombels.rombel')
            ->where('kelas_ajars.kd_guru', '=', $kd_guru)
            ->orderBy('rombel')
            ->get();
        $kelas_ajar = Kelas_ajar::select('kelas_ajars.*')
            ->where('kd_guru', $kd_guru)
            ->get();
        $mapel = Mapel::select('mapels.mapel')
            ->where('kd_mapel', $kd_mapel)
            ->first();

        return view('kelola_nilai.dashboard_nilai', compact('daftar_kelas', 'kelas_ajar', 'mapel', 'user'));
    }

    // Menampilkan Data Siswa Berdasarkan Rombel
    public function detail_nilai($kd_rombel)
    {
        $user = User::find(Auth::user()->id);
        $kode = Crypt::decrypt($kd_rombel);
        $kkms = Nilai_kkm::select('nilai_kkms.kkm')
            ->where('nilai_kkms.kd_rombel', $kode)
            ->first();
        $rombels = Rombel::select('rombels.*')
            ->where('kd_rombel', $kode)
            ->first();
        $daftar_siswa = Siswa::join('rombels', 'rombels.rombel', '=', 'siswas.rombel')
            ->select('siswas.*', 'rombels.kd_rombel')
            ->where('rombels.kd_rombel', '=', $kode)
            ->orderBy('nama')
            ->get();

        return view('kelola_nilai.detail_nilai', compact('daftar_siswa', 'rombels', 'kkms', 'user'));
    }

    // Tambah / Edit Nilai
    public function edit_nilai($semes, $field, $kd_mapel, $nis, $value, $kd_rombel)
    {
        if ($semes == 'semes_satu') {
            $cek_semes1 = Semester1::select('semester1s.*')
                ->where('nis', $nis)
                ->where('kd_mapel', $kd_mapel)
                ->count();
            if ($cek_semes1 == null) {
                $nilai = new Semester1;
                $nilai->kd_rombel = $kd_rombel;
                $nilai->kd_mapel = $kd_mapel;
                $nilai->nis = $nis;
                $nilai->$field = $value;
                $nilai->save();
                echo "sukses";
            } else {
                $nilai = Semester1::where('nis', $nis)
                    ->where('kd_rombel', $kd_rombel)
                    ->where('kd_mapel', $kd_mapel)
                    ->first();
                $nilai->$field = $value;
                $nilai->save();
                echo "sukses";
            }
        } elseif ($semes == 'semes_dua') {
            $cek_semes2 = Semester2::select('semester2s.*')
                ->where('nis', $nis)
                ->where('kd_mapel', $kd_mapel)
                ->count();
            if ($cek_semes2 == null) {
                $nilai = new Semester2;
                $nilai->kd_rombel = $kd_rombel;
                $nilai->kd_mapel = $kd_mapel;
                $nilai->nis = $nis;
                $nilai->$field = $value;
                $nilai->save();
                echo "sukses";
            } else {
                $nilai = Semester2::where('nis', $nis)
                    ->where('kd_rombel', $kd_rombel)
                    ->where('kd_mapel', $kd_mapel)
                    ->first();
                $nilai->$field = $value;
                $nilai->save();
                echo "sukses";
            }
        }
    }

    // Tambah KKM
    public function tambah_kkm(Request $request, $kd_rombel)
    {
        $kkms = new Nilai_kkm;
        $kkms->kd_rombel = $kd_rombel;
        $kkms->kd_mapel = auth()->user()->kd_mapel;
        $kkms->kkm = $request->nilai_kkm;
        $kkms->save();

        Session::flash('kkm_ubah', 'KKM Berhasil ditentukan');
        return back();
    }

    // Edit KKM
    public function edit_kkm(Request $request, $kd_rombel)
    {
        $kkms = Nilai_kkm::select('nilai_kkms.*')
            ->where('kd_mapel', auth()->user()->kd_mapel)
            ->where('kd_rombel', $kd_rombel)
            ->first();
        if (empty($request->nilai_kkm)) {
            $kkms->kkm = $request->nilai_kkm;
            $kkms = 70;
        } else {
            $kkms->kkm = $request->nilai_kkm;
            $kkms->save();
        }



        Session::flash('kkm_ubah', 'KKM Berhasil ditentukan');
        return back();
    }
}
