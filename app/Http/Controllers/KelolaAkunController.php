<?php

namespace App\Http\Controllers;

use App\Imports\UserImport;
use App\Models\User;
use App\Models\Mapel;
use App\Models\Rombel;
use App\Models\Kelas_ajar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Maatwebsite\Excel\Facades\Excel;

class KelolaAkunController extends Controller
{
    // View Kelola Akun
    public function kelola_akun()
    {
        $i = 1;
        $kd_mapel = Mapel::all();
        $user1 = User::all();
        $user = User::find(Auth::user()->id);
        $mapel = Mapel::all();
        $max = User::max('kd_guru');
        $max4 = $max[1] . $max[2] . $max[3] . $max[4];
        $max4++;
        if ($max4 <= 9) {
            $max4 = "G000" . $max4;
        } elseif ($max4 <= 99) {
            $max4 = "G00" . $max4;
        } elseif ($max4 <= 999) {
            $max4 = "G0" . $max4;
        } elseif ($max4 <= 99) {
            $max4 = "G" . $max4;
        }

        return view('kelola_akun.kelola_akun', compact('mapel', 'user', 'user1', 'max', 'max4', 'kd_mapel', 'i'));
    }

    // Membuat Akun Baru
    public function simpan_akun(Request $request)
    {
        $username_detect = User::where('username', '=', $request->username)->count();
        if ($username_detect == 1) {
            echo "gagal";
        } else {
            User::create([
                'kd_guru' => $request['kd_guru'],
                'avatar' => 'user.png',
                'name' => $request['name'],
                'role' => $request['role'],
                'kd_mapel' => $request['mapel'],
                'username' => $request['username'],
                'password' => Hash::make($request['password']),
                'remember_token' => Str::random(40),
            ]);
            Session::flash('save', 'Akun berhasil disimpan');
            echo "sukses";
        }
    }

    // Menghapus Akun
    public function hapus_akun($kd_guru)
    {
        User::where('kd_guru', '=', $kd_guru)
            ->delete();
        Kelas_ajar::where('kd_guru', '=', $kd_guru)
            ->delete();

        echo "sukses";
        Session::flash('delete', 'Akun berhasil dihapus');
    }

    // Lihat Akun
    public function detail_akun($id)
    {
        $user = User::leftJoin('mapels', 'users.kd_mapel', '=', 'mapels.kd_mapel')
            ->where('users.id', '=', $id)
            ->select('users.*', 'mapels.mapel')
            ->first();
        $rombel = Rombel::all();
        $rombel_ajar = Rombel::join('kelas_ajars', 'rombels.kd_rombel', '=', 'kelas_ajars.kd_rombel')
            ->where('kelas_ajars.kd_guru', $user->kd_guru)
            ->select('rombels.*')
            ->orderBy('rombel', 'asc')
            ->get();
        $tingkat1 = Kelas_ajar::join('rombels', 'rombels.kd_rombel', '=', 'kelas_ajars.kd_rombel')
            ->select('kelas_ajars.*', 'rombels.rombel')
            ->where('kelas_ajars.kd_guru', $user->kd_guru)
            ->where('rombels.tingkat', 1)
            ->orderBy('rombel', 'asc')
            ->get();
        $tingkat2 = Kelas_ajar::join('rombels', 'rombels.kd_rombel', '=', 'kelas_ajars.kd_rombel')
            ->select('kelas_ajars.*', 'rombels.rombel')
            ->where('kelas_ajars.kd_guru', $user->kd_guru)
            ->where('rombels.tingkat', 2)
            ->orderBy('rombel', 'asc')
            ->get();
        $tingkat3 = Kelas_ajar::join('rombels', 'rombels.kd_rombel', '=', 'kelas_ajars.kd_rombel')
            ->select('kelas_ajars.*', 'rombels.rombel')
            ->where('kelas_ajars.kd_guru', $user->kd_guru)
            ->where('rombels.tingkat', 3)
            ->orderBy('rombel', 'asc')
            ->get();
        // sd kelas 4,5,6
        $tingkat4 = Kelas_ajar::join('rombels', 'rombels.kd_rombel', '=', 'kelas_ajars.kd_rombel')
            ->select('kelas_ajars.*', 'rombels.rombel')
            ->where('kelas_ajars.kd_guru', $user->kd_guru)
            ->where('rombels.tingkat', 4)
            ->orderBy('rombel', 'asc')
            ->get();
        $tingkat5 = Kelas_ajar::join('rombels', 'rombels.kd_rombel', '=', 'kelas_ajars.kd_rombel')
            ->select('kelas_ajars.*', 'rombels.rombel')
            ->where('kelas_ajars.kd_guru', $user->kd_guru)
            ->where('rombels.tingkat', 5)
            ->orderBy('rombel', 'asc')
            ->get();
        $tingkat6 = Kelas_ajar::join('rombels', 'rombels.kd_rombel', '=', 'kelas_ajars.kd_rombel')
            ->select('kelas_ajars.*', 'rombels.rombel')
            ->where('kelas_ajars.kd_guru', $user->kd_guru)
            ->where('rombels.tingkat', 6)
            ->orderBy('rombel', 'asc')
            ->get();

        // $rpls = Rombel::select('rombels.*')
        //     ->where('singkatan_jurusan', '=', 'SMA')
        //     ->orderBy('rombel', 'ASC')
        //     ->get();
        // $tkjs = Rombel::select('rombels.*')
        //     ->where('singkatan_jurusan', '=', 'SMP')
        //     ->orderBy('rombel', 'ASC')
        //     ->get();
        // $mmds = Rombel::select('rombels.*')
        //     ->where('singkatan_jurusan', '=', 'SD')
        //     ->orderBy('rombel', 'ASC')
        //     ->get();
        // $ssd = Rombel::select('rombels.*')
        //     ->where('singkatan_jurusan', '=', 'SD')
        //     // ->where('tingkat', '=', 'SD')
        //     ->orderBy('rombel', 'ASC')
        //     ->get();

        return response()->json([
            'user' => $user,
            'tingkat1' => $tingkat1,
            'tingkat2' => $tingkat2,
            'tingkat3' => $tingkat3,
            'tingkat4' => $tingkat4,
            'tingkat5' => $tingkat5,
            'tingkat6' => $tingkat6,
            // 'ssd' => $ssd,
            // 'mmds' => $mmds,
            // 'tkjs' => $tkjs,
            // 'rpls' => $rpls,

            'rombel' => $rombel,
            'rombel_ajar' => $rombel_ajar
        ]);
    }

    // Update Akun (KELOLA AKUN)
    public function update_akun(Request $request, $id, $kd_guru)
    {
        Kelas_ajar::where('kd_guru', '=', $kd_guru)
            ->update(['kd_mapel' => $request->mapelupdate]);
        $username_detect = User::where('username', '=', $request->usernameupdate)
            ->count();
        $user = User::leftJoin('mapels', 'users.kd_mapel', '=', 'mapels.kd_mapel')
            ->where('users.id', '=', $id)
            ->select('users.*', 'mapels.mapel')
            ->first();
        $image = $request->avatarupdate;
        if ($request->usernameupdate == $user->username || $username_detect == 0) {
            if ($image != '') {
                $user->update([
                    'name' => $request->nameupdate,
                    'username' => $request->usernameupdate,
                    'role' => $request->roleupdate,
                    'kd_mapel' => $request->mapelupdate,
                    'avatar' => $request->avatarupdate,
                ]);
                if ($request->hasFile('avatarupdate')) {
                    $request->file('avatarupdate')->move('picture/', $request->file('avatarupdate')->getClientOriginalName());
                    $user->avatar = $request->file('avatarupdate')->getClientOriginalName();
                    $user->save();
                }
                $user = User::leftJoin('mapels', 'users.kd_mapel', '=', 'mapels.kd_mapel')
                    ->where('users.id', '=', $id)
                    ->select('users.*', 'mapels.mapel')
                    ->first();
            } else {
                $user->update([
                    'name' => $request->nameupdate,
                    'username' => $request->usernameupdate,
                    'role' => $request->roleupdate,
                    'kd_mapel' => $request->mapelupdate,
                ]);
                $user = User::leftJoin('mapels', 'users.kd_mapel', '=', 'mapels.kd_mapel')
                    ->where('users.id', '=', $id)
                    ->select('users.*', 'mapels.mapel')
                    ->first();
            }

            return response()->json([
                'user' => $user,
                'status' => 'sukses'
            ]);
        } else {

            return response()->json([
                'user' => $user,
                'status' => 'gagal'
            ]);
        }
    }

    // Update Akun (PROFILE)
    public function update_profile(Request $request, $id)
    {
        $username_detect = User::where('username', '=', $request->usernameupdate)
            ->count();
        $user = User::find($id);
        $image = $request->avatarupdate;
        if ($request->usernameupdate == $user->username || $username_detect == 0) {
            if ($image != '') {
                $user->update([
                    'name' => $request->nameupdate,
                    'username' => $request->usernameupdate,
                    'avatar' => $request->avatarupdate,
                ]);
                if ($request->hasFile('avatarupdate')) {
                    $request->file('avatarupdate')->move('picture/', $request->file('avatarupdate')->getClientOriginalName());
                    $user->avatar = $request->file('avatarupdate')->getClientOriginalName();
                    $user->save();
                }
            } else {
                $user->update([
                    'name' => $request->nameupdate,
                    'username' => $request->usernameupdate,
                ]);
            }

            Session::flash('updated', 'Akun berhasil diubah');
            // return response()->json(['user' => $user, 'sukses' => 'sukses']);
            return back();
        } else {
            Session::flash('failed', 'Username telah digunakan');
            //return response()->json(['user' => $user, 'gagal' => 'gagal']);
            return back();
        }
    }

    // Ubah Password
    public function changepass(Request $request, $id)
    {
        $user = User::find($id);
        if (Hash::check($request->old_password, $user->password)) {
            User::where('id', '=', $id)
                ->update(['password' => Hash::make($request->new_password)]);
            echo "sukses";

            Session::flash('pass_change', 'Password berhasil diubah');
        } else {
            echo "gagal";
        }
    }

    // import user
    public function import_user(Request $request)
    {
        // validasi
        $this->validate($request, [
            'file' => 'required|mimes:csv,xls,xlsx'
        ]);

        // menangkap file excel
        $file = $request->file('file');

        // membuat nama file unik
        $nama_file = rand() . $file->getClientOriginalName();

        // upload ke folder file_siswa di dalam folder public
        $file->move('file_siswa', $nama_file);

        // import data
        Excel::import(new UserImport, public_path('/file_siswa/' . $nama_file));

        // notifikasi dengan session
        Session::flash('sukses', 'Data Siswa Berhasil Diimport!');

        // alihkan halaman kembali
        return redirect('/siswa');
    }

    // memanggil kode mapel
    public function get_mapel()
    {
        $kd_mapel = Mapel::all();

        return view('kelola_akun.kelola_akun', ['kd_mapel' => $kd_mapel]);
    }
}
