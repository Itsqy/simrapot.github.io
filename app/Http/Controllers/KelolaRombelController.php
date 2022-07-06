<?php

namespace App\Http\Controllers;


use App\Models\Rombel;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class KelolaRombelController extends Controller
{
    // View Kelola Rombel
    public function kelola_rombel()
    {
        $user = User::find(Auth::user()->id);

        $rpls = Rombel::select('rombels.*')
            ->where('singkatan_jurusan', '=', 'SMA')
            ->orderBy('rombel', 'ASC')
            ->get();
        $tkjs = Rombel::select('rombels.*')
            ->where('singkatan_jurusan', '=', 'SMP')
            ->orderBy('rombel', 'ASC')
            ->get();
        $mmds = Rombel::select('rombels.*')
            ->where('singkatan_jurusan', '=', 'SD')
            ->orderBy('rombel', 'ASC')
            ->get();
        $ssd = Rombel::select('rombels.*')
            ->where('singkatan_jurusan', '=', 'SD|')
            // ->where('tingkat', '=', 'SD')
            ->orderBy('rombel', 'ASC')
            ->get();
        return view('kelola_data.kelola_rombel', compact('user', 'rpls', 'tkjs', 'mmds', 'ssd'));
    }

    // Tambah Rombel
    public function tambah_rombel($s_jur, $tingkat, $tingkat_r)
    {

        $max = Rombel::max('kd_rombel');
        $max4 = $max[2] . $max[3] . $max[4];
        $max4++;
        if ($max4 <= 9) {
            $max4 = "RM00" . $max4;
        } elseif ($max4 <= 99) {
            $max4 = "RM0" . $max4;
        } elseif ($max4 <= 999) {
            $max4 = "RM" . $max4;
        }

        $check_1 = Rombel::select('rombels.jml_rombel')
            ->where('singkatan_jurusan', $s_jur)
            ->where('tingkat', $tingkat)
            ->where('jml_rombel', 1)
            ->first();
        $check_2 = Rombel::select('rombels.jml_rombel')
            ->where('singkatan_jurusan', $s_jur)
            ->where('tingkat', $tingkat)
            ->where('jml_rombel', 2)
            ->first();
        $check_3 = Rombel::select('rombels.jml_rombel')
            ->where('singkatan_jurusan', $s_jur)
            ->where('tingkat', $tingkat)
            ->where('jml_rombel', 3)
            ->first();
        $check_4 = Rombel::select('rombels.jml_rombel')
            ->where('singkatan_jurusan', $s_jur)
            ->where('tingkat', $tingkat)
            ->where('jml_rombel', 4)
            ->first();
        $rombel = new Rombel;
        $rombel->kd_rombel = $max4;

        if ($check_1 == null)
            $jml_rombel = 1;
        elseif ($check_2 == null)
            $jml_rombel = 2;
        elseif ($check_3 == null)
            $jml_rombel = 3;
        elseif ($check_4 == null)
            $jml_rombel = 4;

        $rombel->jml_rombel = $jml_rombel;
        if ($s_jur == 'SMA') {
            $rombel->rombel = "SMA " . $tingkat_r . '-' . $jml_rombel;
            $rombel->jml_rombel = $jml_rombel;
            $rombel->jurusan = "Sekolah Menengah Atas";
        } elseif ($s_jur == 'SMP') {
            $rombel->rombel = "SMP " . $tingkat_r . '-' . $jml_rombel;
            $rombel->jurusan = "Sekolah Menengah Pertama";
        } elseif ($s_jur == 'SD') {
            $rombel->rombel = "SD " . $tingkat_r . '-' . $jml_rombel;
            $rombel->jurusan = "Sekolah Dasar";
        } elseif ($s_jur == 'SD|') {
            $rombel->rombel = "SD " . $tingkat_r . '-' . $jml_rombel;
            $rombel->jurusan = "Sekolah Dasar";
        }
        $rombel->singkatan_jurusan = $s_jur;
        $rombel->tingkat = $tingkat;
        $rombel->save();


        // elseif($s_jur == 'TBG')
        // {
        // 	$rombel->rombel = "TBG " . $tingkat_r . '-' . $jml_rombel;
        // 	$rombel->jurusan = "Tataboga";
        // }
        // elseif($s_jur == 'BDP')
        // {
        // 	$rombel->rombel = "BDP " . $tingkat_r . '-' . $jml_rombel;
        // 	$rombel->jurusan = "Bisnis Daring Pemasaran";
        // }
        // elseif($s_jur == 'HTL')
        // {
        // 	$rombel->rombel = "HTL " . $tingkat_r . '-' . $jml_rombel;
        // 	$rombel->jurusan = "Perhotelan";
        // }
        // elseif($s_jur == 'OTKP')
        // {
        // 	$rombel->rombel = "OTKP " . $tingkat_r . '-' . $jml_rombel;
        // 	$rombel->jurusan = "Otomatisasi dan Tata Kelola Perkantoran";
        // }


        Session::flash('save', 'Rombel berhasil disimpan');

        return redirect('/kelola_rombel');
    }

    // Hapus Rombel
    public function hapus_rombel($id)
    {
        Rombel::destroy($id);
        Session::flash('delete', 'Rombel berhasil dihapus');

        return redirect('/kelola_rombel');
    }
}
