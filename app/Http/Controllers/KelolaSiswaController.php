<?php

namespace App\Http\Controllers;

use App\Imports\SiswasImport;
use App\Models\Rayon;
use App\Models\Siswa;
use App\Models\Rombel;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Maatwebsite\Excel\Facades\Excel;

class KelolaSiswaController extends Controller
{
    // View Kelola Siswa
    public function kelola_siswa()
    {
        $user = User::find(Auth::user()->id);
        $siswas = Siswa::select('siswas.*')
            ->orderBy('nis', 'ASC')
            ->get();
        // $rayons = Rayon::select('rayons.*')
        // ->orderBy('rayon', 'ASC')
        // ->get();
        $rombels = Rombel::select('rombels.*')
            ->orderBy('rombel', 'ASC')
            ->get();;

        return view('kelola_data.kelola_siswa', compact('siswas', 'user',  'rombels'));
    }

    // Tambah Siswa
    public function tambah_siswa(Request $request)
    {
        $siswas = new Siswa;
        $siswas->nis = $request->nis;
        $siswas->nama = $request->nama;
        $siswas->jk = $request->jk;
        $siswas->rombel = $request->rombel;

        $siswas->save();

        Session::flash('save', 'Data siswa berhasil disimpan');

        return redirect('/kelola_siswa');
    }

    // Edit Siswa
    public function edit_siswa($id)
    {
        $data_siswa = Siswa::where('siswas.id', $id)
            // ->leftJoin('rombels', 'rombels.rombel', '=', 'siswas.rombel')
            // ->select('siswas.*', 'rombels.rombel as rombel')
            ->first();

        // $data_siswa = Siswa::find($id)->first();

        return response()->json(['data_siswa' => $data_siswa]);
    }

    // Update Siswa
    public function update_siswa(Request $request, $id)
    {
        $siswas = Siswa::find($id);
        $siswas->nis = $request->nis;
        $siswas->nama = $request->nama;
        $siswas->jk = $request->jk;
        $siswas->rombel = $request->rombel;
        $siswas->save();



        Session::flash('update', 'Data siswa berhasil diubah');

        echo "sukses";
    }

    // Hapus Siswa
    public function hapus_siswa($id)
    {
        Siswa::destroy($id);

        Session::flash('delete', 'Data siswa berhasil dihapus');

        echo "sukses";
    }

    // Import Siswa
    public function import_siswa()
    {
        Excel::import(new SiswasImport, request()->file('file'));

        Session::flash('import', 'Data siswa berhasil diimport');
        return back();
    }
    // Search siswa
    public function search_siswa(Request $request)
    {
        $search = $request->cari;
        $siswas = Siswa::select('siswas.*')
            ->where('nis', 'like', '%' . $search . '%')
            ->orWhere('nama', 'like', '%' . $search . '%')
            ->orWhere('jk', 'like', '%' . $search . '%')
            ->orWhere('rombel', 'like', '%' . $search . '%')
            ->orderBy('nis', 'ASC')
            ->paginate(5);
        $user = User::find(Auth::user()->id);
        $rombels = Rombel::select('rombels.*')
            ->orderBy('rombel', 'ASC')
            ->get();

        return view('kelola_data.kelola_siswa', compact('siswas', 'user', 'rombels'));




        // $jenjang = jenjang::all();
        // $kelas = kelas::where('kelas', 'like', "%" . $keyword . "%")->paginate(5);


    }
}
