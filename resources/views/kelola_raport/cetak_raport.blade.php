@extends('layouts/header')
@section('css')
    <link href="{{ asset('vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
    <style type="text/css">
        .near-margin p {
            margin: 0.2px;
        }

        .black-color {
            color: #000;
        }

        .header-raport p {
            font-size: 12px;
            color: #000;
            margin: -0.5px;
        }

        .font-btn:hover {
            color: #7a00e2;
        }

        .btn-cetak:hover {
            text-decoration: none;
        }

        .backkelola {
            color: grey;
            text-decoration: none;
        }

        .backkelola:hover {
            color: #7a00e2;
            text-decoration: none;
        }

        .bl {
            color: #000;
        }

    </style>
    <link href="{{ asset('css/smart_wizard.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/smart_wizard_theme_dots.css') }}" rel="stylesheet" type="text/css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    </link>
@endsection

@section('isi')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb shadow" style="background-color: #fff;">
                        <li class="breadcrumb-item"><a href="{{ url('/data_siswa') }}" class="backkelola">Kelola
                                Raport</a></li>
                        <li class="breadcrumb-item"><a href="{{ url('/data_siswa' . '/' . $siswas->nis) }}"
                                class="backkelola">{{ $siswas->nama }}</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Cetak Raport</li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class="row mb-4">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h4 class="m-0 font-weight-bold text-primary  mb-5">
                            @if ($ulangan == 'UTS1')
                                CETAK UTS GANJIL
                            @elseif($ulangan == 'UAS')
                                CETAK UAS GANJIL
                            @elseif($ulangan == 'UTS2')
                                CETAK UTS GENAP
                            @elseif($ulangan == 'UKK')
                                CETAK UKK GENAP
                            @endif
                        </h4>
                    </div>
                    <div class="card-body">
                        <div id="stepwizard">
                            <ul>
                                <li><a href="#step1">Nilai UPD<br><small>Lengkapi nilai UPD siswa</small></a></li>
                                <li><a href="#step2">Cetak Raport<br><small>Mencetak raport siswa</small></a></li>
                            </ul>
                            <div>

                                {{-- STEP 1 --}}
                                <div id="step1" class="mb-4">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 p-5 text-center">
                                            <h4 class="font-weight-bold">Lengkapi Nilai UPD, Senbud, dan Sikap</h4>
                                        </div>
                                    </div>
                                    <form>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label for="nama_senbud"
                                                    class="col-sm-6 col-form-label text-left pl-5">SENBUD</label>
                                                <div class="col-sm-6">
                                                    <input type="number" max="100" required class="form-control"
                                                        id="nilai_senbud" placeholder="Nilai Senbud">
                                                </div>
                                                <label for="nilai_upd"
                                                    class="col-sm-6 col-form-label text-left pl-5">UPD</label>
                                                <div class="col-sm-6">
                                                    <select class="custom-select" id="nilai_upd">
                                                        <option value="">-- Keterangan --</option>
                                                        <option value="A">Sangat Baik</option>
                                                        <option value="B">Baik</option>
                                                        <option value="C">Cukup</option>
                                                        <option value="D">Kurang</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <label for="nilai_pramuka" class="col-sm-3">PRAMUKA</label>
                                                <div class="col-sm-">
                                                    <select class="custom-select" id="nilai_pramuka">
                                                        <option value="">-- Keterangan --</option>
                                                        <option value="A">Sangat Baik</option>
                                                        <option value="B">Baik</option>
                                                        <option value="C">Cukup</option>
                                                        <option value="D">Kurang</option>
                                                    </select>
                                                </div>
                                                <label for="nilai_sikap"
                                                    class="col-sm-3 col-form-label text-left pl-5">SIKAP</label>
                                                <div class="col-sm-3">
                                                    <select class="custom-select" id="nilai_sikap">
                                                        <option value="">-- Keterangan --</option>
                                                        <option value="A">Sangat Baik</option>
                                                        <option value="B">Baik</option>
                                                        <option value="C">Cukup</option>
                                                        <option value="D">Kurang</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <label for="catatan_siswa" class="col-sm-3">CATATAN</label>
                                                <div class="col-sm-">
                                                    <input type="text" required class="form-control" id="catatan_siswa"
                                                        placeholder="CA Senbud">

                                                </div>

                                            </div>
                                        </div>
                                    </form>
                                </div>
                                {{-- END STEP 1 --}}

                                {{-- STEP 2 --}}
                                <div id="step2">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 pr-2 pl-2 pt-5 pb-5">
                                            <div class="card shadow">
                                                <div
                                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                                    <h6 class="m-0 font-weight-bold text-primary">Pratinjau Raport</h6>
                                                    {{-- <div class="dropdown no-arrow">
                                                        <a class="dropdown-toggle" href="#" role="button"
                                                            id="dropdownMenuLink" data-bs-toggle="dropdown"
                                                            aria-haspopup="true" aria-expanded="false">
                                                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                                                            aria-labelledby="dropdownMenuLink">
                                                            <a class="dropdown-item cetak_raport_btn" href="#">Cetak
                                                                Raport</a>
                                                        </div>
                                                    </div> --}}
                                                </div>
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-lg-2">
                                                            <img src="{{ asset('icon/idn.png') }}" class="w-50">
                                                        </div>
                                                        <div class="col-lg-10 text-right header-raport">
                                                            <p class="font-weight-bold">YAYASAN IDN</p>
                                                            <p class="font-weight-bold">SMK IDN BOARDING SCHOOL</p>
                                                            <p>Jl. Raya Dayeuh, Sukanegara, Kec. Jonggol, Bogor, Jawa Barat
                                                                16830 Jonggol, West Java 16830</p>
                                                            <p>Website : idn.sch.id, e-mail : No. Telp : SMK-Jonggol
                                                                wa.me/6282210102004</p>
                                                        </div>
                                                    </div>
                                                    <hr style="border: 1.5px solid #000;">
                                                    <div class="row">
                                                        <div
                                                            class="col-lg-12 col-md-12 col-sm-12 text-center black-color font-weight-bold">
                                                            <p>LAPORAN PENCAPAIAN KOMPETENSI PESETA DIDIK</p>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-4 black-color near-margin">
                                                            <p>NIS</p>
                                                            <p>Nama</p>
                                                            <p>Kompetensi Keahlian</p>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-4 black-color near-margin">
                                                            <p>: {{ $siswas->nis }} </p>
                                                            <p>: {{ $siswas->nama }}</p>
                                                            <p>: {{ $rombels->jurusan }}</p>
                                                        </div>
                                                        <div class="col-lg-2 col-md-2 col-sm-2 black-color near-margin">
                                                            <p>Tahun Pelajaran</p>
                                                            <p>Semester</p>
                                                            <p>Kelas</p>
                                                        </div>
                                                        <div class="col-lg-2 col-md-2 col-sm-2 black-color near-margin">
                                                            <p id="tahun-ajar">:
                                                            </p>
                                                            <p>:
                                                                @if ($ulangan == 'UTS1' || $ulangan == 'UAS')
                                                                    1
                                                                @elseif($ulangan == 'UTS2' || $ulangan == 'UKK')
                                                                    2
                                                                @endif
                                                            </p>
                                                            <p>:
                                                                @if ($rombels->tingkat == 1)
                                                                    X
                                                                @elseif($rombels->tingkat == 2)
                                                                    XI
                                                                @elseif($rombels->tingkat == 3)
                                                                    XII
                                                                @endif
                                                            </p>
                                                        </div>
                                                        <div class="col-lg-12 col-md-12 col-sm-12 text-left mt-4">
                                                            <p class="font-weight-bold black-color">A. Nilai Akademik</p>
                                                        </div>
                                                        <div class="col-lg-12 col-md-12 col-sm-12 pl-5">
                                                            <table class="table table-bordered black-color table-nilai">
                                                                <thead>
                                                                    <tr class="text-center">
                                                                        <th colspan="2" scope="col">Mata Pelajaran</th>
                                                                        <th scope="col">Pengetahuan</th>
                                                                        <th scope="col">Keterampilan</th>
                                                                        <th scope="col">Nilai Akhir</th>
                                                                        <th scope="col">Predikat</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    @foreach ($semes1s as $semes1)
                                                                        @if ($ulangan == 'UTS1')
                                                                            <tr>
                                                                                <th scope="row">{{ $loop->iteration }}
                                                                                </th>
                                                                                <td>{{ $semes1->mapel }}</td>
                                                                                <td>{{ $semes1->uts_1p }}</td>
                                                                                <td>{{ $semes1->uts_1k }}</td>
                                                                                <td class="nilai_akhir">
                                                                                    {{ ($semes1->uts_1p * 1 + $semes1->uh_1p * 3 + $semes1->uh_2p * 3) / 7 }}
                                                                                </td>
                                                                                <td class="predikat"></td>
                                                                            </tr>
                                                                        @elseif($ulangan == 'UAS')
                                                                            <tr>
                                                                                <th scope="row">{{ $loop->iteration }}
                                                                                </th>
                                                                                <td>{{ $semes1->mapel }}</td>
                                                                                <td>{{ $semes1->uas_p }}</td>
                                                                                <td>{{ $semes1->uas_k }}</td>
                                                                                <td class="nilai_akhir">
                                                                                    {{ ($semes1->uts_1p * 1 + $semes1->uh_3p * 3 + $semes1->uh_4p * 3 + $semes1->uas_p * 1) / 8 }}
                                                                                </td>
                                                                                <td class="predikat"></td>
                                                                            </tr>
                                                                        @elseif($ulangan == 'UTS2')
                                                                            <tr>
                                                                                <th scope="row">{{ $loop->iteration }}
                                                                                </th>
                                                                                <td>{{ $semes1->mapel }}</td>
                                                                                <td>{{ $semes1->uts_2p }}</td>
                                                                                <td>{{ $semes1->uts_2k }}</td>
                                                                                <td class="nilai_akhir">
                                                                                    {{ ($semes1->uts_2p * 1 + $semes1->uh_5p * 3 + $semes1->uh_6p * 3 + $semes1->uas_p * 1) / 8 }}
                                                                                </td>
                                                                                <td class="predikat"></td>
                                                                            </tr>
                                                                        @elseif($ulangan == 'UKK')
                                                                            <tr>
                                                                                <th scope="row">{{ $loop->iteration }}
                                                                                </th>
                                                                                <td>{{ $semes1->mapel }}</td>
                                                                                <td>{{ $semes1->ukk_p }}</td>
                                                                                <td>{{ $semes1->ukk_k }}</td>
                                                                                <td class="nilai_akhir">
                                                                                    {{ ($semes1->uts_2p * 1 + $semes1->uh_7p * 3 + $semes1->uh_8p * 3 + $semes1->ukk_p * 1) / 8 }}
                                                                                </td>
                                                                                <td class="predikat"></td>
                                                                            </tr>
                                                                        @endif
                                                                    @endforeach
                                                                    <tr>
                                                                        <th scope="row" id="number_senbud"></th>
                                                                        <td>Seni Budaya</td>
                                                                        <td class="senbud-nilai"></td>
                                                                        <td class="senbud-nilai"></td>
                                                                        <td class="senbud-nilai"></td>
                                                                        <td class="predikat"></td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                        <div class="col-lg-12 col-md-12 col-sm-12 text-left mt-4">
                                                            <p class="font-weight-bold black-color">B. Catatan Akademik</p>
                                                        </div>
                                                        <div class="col-lg-12 col-md-12 col-sm-12 pl-5">
                                                            <table class="table table-bordered black-color">
                                                                <tr>
                                                                    <td id="siswa-catatan" class="text-center"></td>
                                                                </tr>
                                                            </table>
                                                        </div>
                                                        <div class="col-lg-12 col-md-12 col-sm-12 text-left mt-4">
                                                            <p class="font-weight-bold black-color">C. Nilai
                                                                Ekstrakulikuler</p>
                                                        </div>
                                                        <div class="col-lg-6 col-md-6 col-sm-6 pl-5">
                                                            <table class="table table-bordered black-color">
                                                                <tr>
                                                                    <td class="font-weight-bold text-center">
                                                                        Ekstrakulikuler</td>
                                                                    <td class="font-weight-bold text-center">Keterangan
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>UPD</td>
                                                                    <td id="upd-nilai" class="text-center"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>PRAMUKA</td>
                                                                    <td id="pramuka-nilai" class="text-center"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>SIKAP</td>
                                                                    <td id="sikap-nilai" class="text-center"></td>
                                                                </tr>
                                                            </table>
                                                        </div>
                                                        <div class="col-lg-6 col-md-6 col-sm-6"></div>
                                                        <div class="col-lg-12 col-md-12 col-sm-12 mt-4">
                                                            <div class="row">
                                                                <div
                                                                    class="col-lg-4 col-md-4 col-md-4 black-color text-center">
                                                                    Kepala Sekolah
                                                                </div>
                                                                <div
                                                                    class="col-lg-4 col-md-4 col-md-4 black-color text-center">
                                                                    Pembimbing Rayon
                                                                </div>
                                                                <div
                                                                    class="col-lg-4 col-md-4 col-md-4 black-color text-center">
                                                                    Orang Tua
                                                                </div>
                                                            </div>
                                                            <div class="row mt-5">
                                                                <div
                                                                    class="col-lg-4 col-md-4 col-md-4 black-color text-center">
                                                                    <hr style="border: 1px solid #000; width: 150px;">
                                                                </div>
                                                                <div
                                                                    class="col-lg-4 col-md-4 col-md-4 black-color text-center">
                                                                    <hr style="border: 1px solid #000; width: 150px;">
                                                                </div>
                                                                <div
                                                                    class="col-lg-4 col-md-4 col-md-4 black-color text-center">
                                                                    <hr style="border: 1px solid #000; width: 150px;">
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="d-flex justify-content-end mt-5">
                                                            <a href="" class="ms-auto btn btn-primary cetak_raport_btn">
                                                                Cetak
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{-- END STEP 2 --}}


                            </div>
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
    <script src="{{ asset('js/jquery.smartWizard.min.js') }}"></script>
    <script type="text/javascript">
        $(document).on('click', '.cetak_raport_btn', function(e) {

            e.preventDefault();
            var senbud = $('#nilai_senbud').val();
            var upd = $('#nilai_upd').val();
            var catatan = $('#catatan_siswa').val();
            var pramuka = $('#nilai_pramuka').val();
            var sikap = $('#nilai_sikap').val();

            if (senbud == '' || upd == '' || pramuka == '' || sikap == '' || catatan == '') {
                Swal.fire({
                    icon: 'error',
                    text: 'Mohon lengkapi nilai yang kosong',
                    showConfirmButton: false,
                    timer: 1500
                });
                $('.sw-btn-prev').click();
            } else {
                var win = window.open("{{ url('/kelola_raport/raport_view') }}/" + "{{ $siswas->nis }}" +
                    "/" +
                    "{{ $ulangan }}" + "/" + senbud + "/" + upd + "/" + pramuka + "/" + sikap + "/" +
                    catatan);
                win.focus();
            }
        });

        $(document).on('keyup', '#nilai_senbud', function() {
            $('.senbud-nilai').text($(this).val());
            $('.senbud-nilai').filter(function() {
                var nilai_akhir = $(this).text();
                $(this).text(parseInt(nilai_akhir));
                if ($(this).text() < 70) {
                    $(this).next('.predikat').text('D').focus();
                } else if ($(this).text() < 79) {
                    $(this).next('.predikat').text('C').focus();
                } else if ($(this).text() < 89) {
                    $(this).next('.predikat').text('B').focus();
                } else if ($(this).text() < 100) {
                    $(this).next('.predikat').text('A').focus();
                }
            });



        });

        $(document).ready(function() {
            var year = "{{ date('Y') }}";
            var year_1 = parseInt(year, 10) + 1;
            var tahun_ajar = ": " + year + " - " + year_1;
            $('#tahun-ajar').html(tahun_ajar);

            $('.nilai_akhir').filter(function() {
                var nilai_akhir = $(this).text();
                $(this).text(parseInt(nilai_akhir));
                if ($(this).text() < 70) {
                    $(this).next('.predikat').text('D').focus();
                } else if ($(this).text() < 79) {
                    $(this).next('.predikat').text('C').focus();
                } else if ($(this).text() < 89) {
                    $(this).next('.predikat').text('B').focus();
                } else if ($(this).text() < 100) {
                    $(this).next('.predikat').text('A').focus();
                }
            });


            $('#number_senbud').text($('.table-nilai tr').length - 1);

            $('#nilai_upd').change(function() {
                if ($(this).val() == 'A') {
                    $('#upd-nilai').text('Sangat Baik');
                } else if ($(this).val() == 'B') {
                    $('#upd-nilai').text('Baik');
                } else if ($(this).val() == 'C') {
                    $('#upd-nilai').text('Cukup');
                } else if ($(this).val() == 'D') {
                    $('#upd-nilai').text('Kurang');
                } else {
                    $('#upd-nilai').text('');
                }
            });

            $('#catatan_siswa').change(function() {
                if ($(this).val() == null) {
                    $('#siswa-catatan').$(this).text('-');
                } else {
                    $('#siswa-catatan').text($(this).val());
                }
            })

            // $('#catatan').change(function() {
            //     if ($(this).val() == 'A') {
            //         $('#catat').text('Sangat Baik');
            //     } else if ($(this).val() == 'B') {
            //         $('#catat').text('Baik');
            //     } else if ($(this).val() == 'C') {
            //         $('#catat').text('Cukup');
            //     } else if ($(this).val() == 'D') {
            //         $('#catat').text('Kurang');
            //     } else {
            //         $('#catat').text('');
            //     }
            // });


            // $('#catatan').text(function() {
            //     var catatan = $(this).text();
            //     if (catatan == 'null') {
            //         $(this).text('-');
            //     }
            // });



            $('#nilai_pramuka').change(function() {
                if ($(this).val() == 'A') {
                    $('#pramuka-nilai').text('Sangat Baik');
                } else if ($(this).val() == 'B') {
                    $('#pramuka-nilai').text('Baik');
                } else if ($(this).val() == 'C') {
                    $('#pramuka-nilai').text('Cukup');
                } else if ($(this).val() == 'D') {
                    $('#pramuka-nilai').text('Kurang');
                } else {
                    $('#pramuka-nilai').text('');
                }
            });

            $('#nilai_sikap').change(function() {
                if ($(this).val() == 'A') {
                    $('#sikap-nilai').text('Sangat Baik');
                } else if ($(this).val() == 'B') {
                    $('#sikap-nilai').text('Baik');
                } else if ($(this).val() == 'C') {
                    $('#sikap-nilai').text('Cukup');
                } else if ($(this).val() == 'D') {
                    $('#sikap-nilai').text('Kurang');
                } else {
                    $('#sikap-nilai').text('');
                }
            });

        });

        $('#stepwizard').smartWizard({
            theme: 'dots',
            transitionEffect: 'fade',
            transitionSpeed: '400'
        });
    </script>
@endsection
