@extends('layouts/header')

@section('isi')
    <div class="container-fluid">
        <div class="card">

            <div class="div card-header">

                <h4>Kelola Rayon</h4>
            </div>
            <div class="row mt-4">
                <div class="col-lg-4">
                    <div class="card shadow mb-4">
                        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                            <h6 class="m-0 font-weight-bold text-primary">CIAWI (CIA)</h6>
                        </div>
                        <div class="card-body">
                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <ul class="list-group">
                                        @foreach ($cias as $cia)
                                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                                <b>{{ $cia->jml_rayon }} | </b>{{ $cia->name }}
                                                <a href="{{ url('/hapus_rayon/' . $cia->id) }}">
                                                    <span class="badge badge-primary badge-pill">X</span>
                                                </a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                            @if (\App\Models\Rayon::select('rayons.*')->where('daerah', 'Ciawi')->count() < 7)
                                <form action="{{ url('/tambah_rayon/Cia/Ciawi') }}" method="POST">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-10">
                                            <select class="form-control" name="kd_guru" required="">
                                                <option value="">-- Pilih Pembimbing --</option>
                                                @foreach ($users as $user)
                                                    @if ($user->role != 'Kurikulum')
                                                        <option value="{{ $user->kd_guru }}">{{ $user->name }}</option>
                                                    @endif
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-md-2">
                                            <button type="submit" class="btn btn-circle mb-1 font-weight-bold"
                                                style="background-color: #b854f5; color: #fff;">+</button>
                                        </div>
                                    </div>
                                </form>
                            @endif
                        </div>
                    </div>
                    <div class="card shadow mb-4">
                        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                            <h6 class="m-0 font-weight-bold text-primary">CISARUA (CIS)</h6>
                        </div>
                        <div class="card-body">
                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <ul class="list-group">
                                        @foreach ($ciss as $cis)
                                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                                <b>{{ $cis->jml_rayon }} | </b>{{ $cis->name }}
                                                <a href="{{ url('/hapus_rayon/' . $cis->id) }}">
                                                    <span class="badge badge-primary badge-pill">X</span>
                                                </a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                            @if (\App\Models\Rayon::select('rayons.*')->where('daerah', 'Cisarua')->count() < 7)
                                <form action="{{ url('/tambah_rayon/Cis/Cisarua') }}" method="POST">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-10">
                                            <select class="form-control" name="kd_guru" required="">
                                                <option value="">-- Pilih Pembimbing --</option>
                                                @foreach ($users as $user)
                                                    @if ($user->role != 'Kurikulum')
                                                        <option value="{{ $user->kd_guru }}">{{ $user->name }}
                                                        </option>
                                                    @endif
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-md-2">
                                            <button type="submit" class="btn btn-circle mb-1 font-weight-bold"
                                                style="background-color: #b854f5; color: #fff;">+</button>
                                        </div>
                                    </div>
                                </form>
                            @endif
                        </div>
                    </div>
                    <div class="card shadow mb-4">
                        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                            <h6 class="m-0 font-weight-bold text-primary">CICURUG (CIC)</h6>
                        </div>
                        <div class="card-body">
                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <ul class="list-group">
                                        @foreach ($cics as $cic)
                                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                                <b>{{ $cic->jml_rayon }} | </b>{{ $cic->name }}
                                                <a href="{{ url('/hapus_rayon/' . $cic->id) }}">
                                                    <span class="badge badge-primary badge-pill">X</span>
                                                </a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                            @if (\App\Models\Rayon::select('rayons.*')->where('daerah', 'Cicurug')->count() < 7)
                                <form action="{{ url('/tambah_rayon/Cic/Cicurug') }}" method="POST">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-10">
                                            <select class="form-control" name="kd_guru" required="">
                                                <option value="">-- Pilih Pembimbing --</option>
                                                @foreach ($users as $user)
                                                    @if ($user->role != 'Kurikulum')
                                                        <option value="{{ $user->kd_guru }}">{{ $user->name }}
                                                        </option>
                                                    @endif
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-md-2">
                                            <button type="submit" class="btn btn-circle mb-1 font-weight-bold"
                                                style="background-color: #b854f5; color: #fff;">+</button>
                                        </div>
                                    </div>
                                </form>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card shadow mb-4">
                        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                            <h6 class="m-0 font-weight-bold text-primary">CIBEDUG (CIB)</h6>
                        </div>
                        <div class="card-body">
                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <ul class="list-group">
                                        @foreach ($cibs as $cib)
                                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                                <b>{{ $cib->jml_rayon }} | </b>{{ $cib->name }}
                                                <a href="{{ url('/hapus_rayon/' . $cib->id) }}">
                                                    <span class="badge badge-primary badge-pill">X</span>
                                                </a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                            @if (\App\Models\Rayon::select('rayons.*')->where('daerah', 'Cibedug')->count() < 7)
                                <form action="{{ url('/tambah_rayon/Cib/Cibedug') }}" method="POST">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-10">
                                            <select class="form-control" name="kd_guru" required="">
                                                <option value="">-- Pilih Pembimbing --</option>
                                                @foreach ($users as $user)
                                                    @if ($user->role != 'Kurikulum')
                                                        <option value="{{ $user->kd_guru }}">{{ $user->name }}
                                                        </option>
                                                    @endif
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-md-2">
                                            <button type="submit" class="btn btn-circle mb-1 font-weight-bold"
                                                style="background-color: #b854f5; color: #fff;">+</button>
                                        </div>
                                    </div>
                                </form>
                            @endif
                        </div>
                    </div>
                    <div class="card shadow mb-4">
                        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                            <h6 class="m-0 font-weight-bold text-primary">TAJUR (TAJ)</h6>
                        </div>
                        <div class="card-body">
                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <ul class="list-group">
                                        @foreach ($tajs as $taj)
                                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                                <b>{{ $taj->jml_rayon }} | </b>{{ $taj->name }}
                                                <a href="{{ url('/hapus_rayon/' . $taj->id) }}">
                                                    <span class="badge badge-primary badge-pill">X</span>
                                                </a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                            @if (\App\Models\Rayon::select('rayons.*')->where('daerah', 'Tajur')->count() < 7)
                                <form action="{{ url('/tambah_rayon/Taj/Tajur') }}" method="POST">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-10">
                                            <select class="form-control" name="kd_guru" required="">
                                                <option value="">-- Pilih Pembimbing --</option>
                                                @foreach ($users as $user)
                                                    @if ($user->role != 'Kurikulum')
                                                        <option value="{{ $user->kd_guru }}">{{ $user->name }}
                                                        </option>
                                                    @endif
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-md-2">
                                            <button type="submit" class="btn btn-circle mb-1 font-weight-bold"
                                                style="background-color: #b854f5; color: #fff;">+</button>
                                        </div>
                                    </div>
                                </form>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card shadow mb-4">
                        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                            <h6 class="m-0 font-weight-bold text-primary">SUKASARI (SUK)</h6>
                        </div>
                        <div class="card-body">
                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <ul class="list-group">
                                        @foreach ($suks as $suk)
                                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                                <b>{{ $suk->jml_rayon }} | </b>{{ $suk->name }}
                                                <a href="{{ url('/hapus_rayon/' . $suk->id) }}">
                                                    <span class="badge badge-primary badge-pill">X</span>
                                                </a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                            @if (\App\Models\Rayon::select('rayons.*')->where('daerah', 'Sukasari')->count() < 7)
                                <form action="{{ url('/tambah_rayon/Suk/Sukasari') }}" method="POST">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-10">
                                            <select class="form-control" name="kd_guru" required="">
                                                <option value="">-- Pilih Pembimbing --</option>
                                                @foreach ($users as $user)
                                                    @if ($user->role != 'Kurikulum')
                                                        <option value="{{ $user->kd_guru }}">{{ $user->name }}
                                                        </option>
                                                    @endif
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-md-2">
                                            <button type="submit" class="btn btn-circle mb-1 font-weight-bold"
                                                style="background-color: #b854f5; color: #fff;">+</button>
                                        </div>
                                    </div>
                                </form>
                            @endif
                        </div>
                    </div>
                    <div class="card shadow mb-4">
                        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                            <h6 class="m-0 font-weight-bold text-primary">WIKRAMA (WIK)</h6>
                        </div>
                        <div class="card-body">
                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <ul class="list-group">
                                        @foreach ($wiks as $wik)
                                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                                <b>{{ $wik->jml_rayon }} | </b>{{ $wik->name }}
                                                <a href="{{ url('/hapus_rayon/' . $wik->id) }}">
                                                    <span class="badge badge-primary badge-pill">X</span>
                                                </a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                            @if (\App\Models\Rayon::select('rayons.*')->where('daerah', 'Wikrama')->count() < 7)
                                <form action="{{ url('/tambah_rayon/Wik/Wikrama') }}" method="POST">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-10">
                                            <select class="form-control" name="kd_guru" required="">
                                                <option value="">-- Pilih Pembimbing --</option>
                                                @foreach ($users as $user)
                                                    @if ($user->role != 'Kurikulum')
                                                        <option value="{{ $user->kd_guru }}">{{ $user->name }}
                                                        </option>
                                                    @endif
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-md-2">
                                            <button type="submit" class="btn btn-circle mb-1 font-weight-bold"
                                                style="background-color: #b854f5; color: #fff;">+</button>
                                        </div>
                                    </div>
                                </form>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script type="text/javascript">
        @if ($message = Session::get('save'))
            Swal.fire({
            icon: 'success',
            text: '{{ $message }}',
            showConfirmButton: false,
            timer: 1500
            })
        @endif

        @if ($message = Session::get('delete'))
            Swal.fire({
            icon: 'success',
            text: '{{ $message }}',
            showConfirmButton: false,
            timer: 1500
            })
        @endif
    </script>
@endsection
