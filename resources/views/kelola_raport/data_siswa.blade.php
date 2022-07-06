@extends('layouts/header')
@section('title')
    Kelola Akun
@endsection
@section('css')
    <link href="{{ asset('vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
    <style type="text/css">
        .backkelola {
            color: grey;
            text-decoration: none;
        }

        .backkelola:hover {
            color: #7a00e2;
            text-decoration: none;
        }

    </style>
@endsection

@section('isi')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb shadow" style="background-color: #fff;">
                        <li class="breadcrumb-item"><a href="{{ url('/data_siswa') }}" class="backkelola">Kelola
                                Raport</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Aja</li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h4 class="m-0 font-weight-bold ">Daftar Siswa</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" width="100%" cellspacing="0">
                                <thead class="text-center">
                                    <tr>
                                        <th>No</th>
                                        <th>NIS</th>
                                        <th>Nama</th>
                                        <th>JK</th>
                                        <th>Rombel</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($siswas as $siswa)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $siswa->nis }}</td>
                                            <td>{{ $siswa->nama }}</td>
                                            <td>{{ $siswa->jk }}</td>
                                            <td>{{ $siswa->rombel }}</td>
                                            <td class="text-center">
                                                <a href="{{ url('data_siswa/' . $siswa->nis) }}"
                                                    class="btn detailakun btn-icon-split"
                                                    style="background-color: #b854f5; color: #fff;">
                                                    <span class="icon text-white-50">
                                                        <i class="fas fa-print"></i>
                                                    </span>
                                                    <span class="text">Cetak Raport</span>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script type="text/javascript" src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('vendor/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('js/demo/datatables-demo.js') }}"></script>
@endsection
