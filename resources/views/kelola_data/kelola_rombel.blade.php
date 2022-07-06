@extends('layouts.header')
@section('title')
    Kelola Kelas
@endsection
@section('isi')
    <div class="container-fluid">
        <div class="card">
            <div class="div card-header">
                <h4>Kelola Rombel</h4>
            </div>
            <div class="row mt-4">
                <div class="col-lg-3">
                    <div class="card shadow mb-4">
                        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                            <h6 class="m-0 font-weight-bold text-primary">Seklah Menengah Atas (SMA)</h6>
                        </div>
                        <div class="card-body">
                            <p>Kelas X</p>
                            @foreach ($rpls as $rpl)
                                @if ($rpl->tingkat == 1)
                                    <a href="{{ url('/hapus_rombel/' . $rpl->id) }}"
                                        class="btn btn-circle mb-1 font-weight-bold"
                                        style="background-color: #b854f5; color: #fff;">{{ $rpl->jml_rombel }}</a>
                                @endif
                            @endforeach
                            @if (\App\Models\Rombel::select('rombels.*')->where('singkatan_jurusan', 'SMA')->where('tingkat', 1)->count() < 4)
                                <a href="{{ url('/tambah_rombel/SMA/1/X') }}" class="btn btn-circle mb-1 font-weight-bold"
                                    style="background-color: #b854f5; color: #fff;">+</a>
                            @endif
                            <hr>
                            <p>Kelas XI</p>
                            @foreach ($rpls as $rpl)
                                @if ($rpl->tingkat == 2)
                                    <a href="{{ url('/hapus_rombel/' . $rpl->id) }}"
                                        class="btn btn-circle mb-1 font-weight-bold"
                                        style="background-color: #b854f5; color: #fff;">{{ $rpl->jml_rombel }}</a>
                                @endif
                            @endforeach
                            @if (\App\Models\Rombel::select('rombels.*')->where('singkatan_jurusan', 'SMA')->where('tingkat', 2)->count() < 4)
                                <a href="{{ url('/tambah_rombel/SMA/2/XI') }}"
                                    class="btn btn-circle mb-1 font-weight-bold"
                                    style="background-color: #b854f5; color: #fff;">+</a>
                            @endif
                            <hr>
                            <p>Kelas XII</p>
                            @foreach ($rpls as $rpl)
                                @if ($rpl->tingkat == 3)
                                    <a href="{{ url('/hapus_rombel/' . $rpl->id) }}"
                                        class="btn btn-circle mb-1 font-weight-bold"
                                        style="background-color: #b854f5; color: #fff;">{{ $rpl->jml_rombel }}</a>
                                @endif
                            @endforeach
                            @if (\App\Models\Rombel::select('rombels.*')->where('singkatan_jurusan', 'SMA')->where('tingkat', 3)->count() < 4)
                                <a href="{{ url('/tambah_rombel/SMA/3/XII') }}"
                                    class="btn btn-circle mb-1 font-weight-bold"
                                    style="background-color: #b854f5; color: #fff;">+</a>
                            @endif
                        </div>
                    </div>

                </div>
                <div class="col-lg-3">

                    <div class="card shadow mb-4">
                        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                            <h6 class="m-0 font-weight-bold text-primary">Sekolah Menengah Pertama (SMP)</h6>
                        </div>
                        <div class="card-body">
                            <p>Kelas VII</p>
                            @foreach ($tkjs as $tkj)
                                @if ($tkj->tingkat == 1)
                                    <a href="{{ url('/hapus_rombel/' . $tkj->id) }}"
                                        class="btn btn-circle mb-1 font-weight-bold"
                                        style="background-color: #b854f5; color: #fff;">{{ $tkj->jml_rombel }}</a>
                                @endif
                            @endforeach
                            @if (\App\Models\Rombel::select('rombels.*')->where('singkatan_jurusan', 'SMP')->where('tingkat', 1)->count() < 4)
                                <a href="{{ url('/tambah_rombel/SMP/1/VII') }}"
                                    class="btn btn-circle mb-1 font-weight-bold"
                                    style="background-color: #b854f5; color: #fff;">+</a>
                            @endif
                            <hr>
                            <p>Kelas VIII</p>
                            @foreach ($tkjs as $tkj)
                                @if ($tkj->tingkat == 2)
                                    <a href="{{ url('/hapus_rombel/' . $tkj->id) }}"
                                        class="btn btn-circle mb-1 font-weight-bold"
                                        style="background-color: #b854f5; color: #fff;">{{ $tkj->jml_rombel }}</a>
                                @endif
                            @endforeach
                            @if (\App\Models\Rombel::select('rombels.*')->where('singkatan_jurusan', 'SMP')->where('tingkat', 2)->count() < 4)
                                <a href="{{ url('/tambah_rombel/SMP/2/VIII') }}"
                                    class="btn btn-circle mb-1 font-weight-bold"
                                    style="background-color: #b854f5; color: #fff;">+</a>
                            @endif
                            <hr>
                            <p>Kelas IX</p>
                            @foreach ($tkjs as $tkj)
                                @if ($tkj->tingkat == 3)
                                    <a href="{{ url('/hapus_rombel/' . $tkj->id) }}"
                                        class="btn btn-circle mb-1 font-weight-bold"
                                        style="background-color: #b854f5; color: #fff;">{{ $tkj->jml_rombel }}</a>
                                @endif
                            @endforeach
                            @if (\App\Models\Rombel::select('rombels.*')->where('singkatan_jurusan', 'SMP')->where('tingkat', 3)->count() < 4)
                                <a href="{{ url('/tambah_rombel/SMP/3/IX') }}"
                                    class="btn btn-circle mb-1 font-weight-bold"
                                    style="background-color: #b854f5; color: #fff;">+</a>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card shadow mb-4">
                        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                            <h6 class="m-0 font-weight-bold text-primary">Sekolah Dasar (SD)</h6>
                        </div>
                        <div class="card-body">
                            <p>Kelas I</p>
                            @foreach ($mmds as $mmd)
                                @if ($mmd->tingkat == 1)
                                    <a href="{{ url('/hapus_rombel/' . $mmd->id) }}"
                                        class="btn btn-circle mb-1 font-weight-bold"
                                        style="background-color: #b854f5; color: #fff;">{{ $mmd->jml_rombel }}</a>
                                @endif
                            @endforeach
                            @if (\App\Models\Rombel::select('rombels.*')->where('singkatan_jurusan', 'SD')->where('tingkat', 1)->count() < 4)
                                <a href="{{ url('/tambah_rombel/SD/1/I') }}" class="btn btn-circle mb-1 font-weight-bold"
                                    style="background-color: #b854f5; color: #fff;">+</a>
                            @endif
                            <hr>
                            <p>Kelas II</p>
                            @foreach ($mmds as $mmd)
                                @if ($mmd->tingkat == 2)
                                    <a href="{{ url('/hapus_rombel/' . $mmd->id) }}"
                                        class="btn btn-circle mb-1 font-weight-bold"
                                        style="background-color: #b854f5; color: #fff;">{{ $mmd->jml_rombel }}</a>
                                @endif
                            @endforeach
                            @if (\App\Models\Rombel::select('rombels.*')->where('singkatan_jurusan', 'SD')->where('tingkat', 2)->count() < 4)
                                <a href="{{ url('/tambah_rombel/SD/2/II') }}"
                                    class="btn btn-circle mb-1 font-weight-bold"
                                    style="background-color: #b854f5; color: #fff;">+</a>
                            @endif
                            <hr>
                            <p>Kelas III</p>
                            @foreach ($mmds as $mmd)
                                @if ($mmd->tingkat == 3)
                                    <a href="{{ url('/hapus_rombel/' . $mmd->id) }}"
                                        class="btn btn-circle mb-1 font-weight-bold"
                                        style="background-color: #b854f5; color: #fff;">{{ $mmd->jml_rombel }}</a>
                                @endif
                            @endforeach
                            @if (\App\Models\Rombel::select('rombels.*')->where('singkatan_jurusan', 'SD')->where('tingkat', 3)->count() < 4)
                                <a href="{{ url('/tambah_rombel/SD/3/III') }}"
                                    class="btn btn-circle mb-1 font-weight-bold"
                                    style="background-color: #b854f5; color: #fff;">+</a>
                            @endif
                            {{-- kelas 4 --}}

                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card shadow mb-4">
                        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                            <h6 class="m-0 font-weight-bold text-primary">Sekolah Dasar (SD)</h6>
                        </div>
                        <div class="card-body">
                            {{-- <hr> --}}
                            <p>Kelas IV</p>
                            @foreach ($ssd as $mmd)
                                @if ($mmd->tingkat == 1)
                                    <a href="{{ url('/hapus_rombel/' . $mmd->id) }}"
                                        class="btn btn-circle mb-1 font-weight-bold"
                                        style="background-color: #b854f5; color: #fff;">{{ $mmd->jml_rombel }}</a>
                                @endif
                            @endforeach
                            @if (\App\Models\Rombel::select('rombels.*')->where('singkatan_jurusan', 'SD')->where('tingkat', 1)->count() < 4)
                                <a href="{{ url('/tambah_rombel/SD|/1/IV') }}"
                                    class="btn btn-circle mb-1 font-weight-bold"
                                    style="background-color: #b854f5; color: #fff;">+</a>
                            @endif
                            <hr>
                            <p>Kelas V</p>
                            @foreach ($ssd as $mmd)
                                @if ($mmd->tingkat == 2)
                                    <a href="{{ url('/hapus_rombel/' . $mmd->id) }}"
                                        class="btn btn-circle mb-1 font-weight-bold"
                                        style="background-color: #b854f5; color: #fff;">{{ $mmd->jml_rombel }}</a>
                                @endif
                            @endforeach
                            @if (\App\Models\Rombel::select('rombels.*')->where('singkatan_jurusan', 'SD')->where('tingkat', 2)->count() < 4)
                                <a href="{{ url('/tambah_rombel/SD|/2/V') }}"
                                    class="btn btn-circle mb-1 font-weight-bold"
                                    style="background-color: #b854f5; color: #fff;">+</a>
                            @endif
                            <hr>
                            <p>Kelas VI</p>
                            @foreach ($ssd as $mmd)
                                @if ($mmd->tingkat == 3)
                                    <a href="{{ url('/hapus_rombel/' . $mmd->id) }}"
                                        class="btn btn-circle mb-1 font-weight-bold"
                                        style="background-color: #b854f5; color: #fff;">{{ $mmd->jml_rombel }}</a>
                                @endif
                            @endforeach
                            @if (\App\Models\Rombel::select('rombels.*')->where('singkatan_jurusan', 'SD')->where('tingkat', 3)->count() < 4)
                                <a href="{{ url('/tambah_rombel/SD|/3/VI') }}"
                                    class="btn btn-circle mb-1 font-weight-bold"
                                    style="background-color: #b854f5; color: #fff;">+</a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

<script type="text/javascript" src="{{ asset('js/jquery.js') }}"></script>
<script src="{{ asset('vendor/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('js/demo/datatables-demo.js') }}"></script>
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
