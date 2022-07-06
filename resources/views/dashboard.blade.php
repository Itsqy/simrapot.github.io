@extends('layouts/header')

@section('title')
    Dashboard
@endsection
@section('isi')
    <div class="container-fluid">

        <div class="row">
            <div class="col-sm-12  mb-4">
                <div class="card">
                    <div class="card-header">
                        <div class="media">
                            <div class="media-body">
                                <h4 class="mt-1" style="color: #3e3d3e; font-weight: bold;">Dashboard</h4>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-3 col-md-6 mb-4">
                                <div class="card border-left-primary shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total
                                                    Mapel
                                                </div>
                                                <div class="h5 mb-0 font-weight-bold text-gray-800 num">
                                                    {{ $mapel->count() }}
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-object-group fa-2x text-gray-300"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6 mb-4">
                                <div class="card border-left-primary shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total
                                                    Guru
                                                </div>
                                                <div class="h5 mb-0 font-weight-bold text-gray-800 num">
                                                    {{ $guru->count() }}</div>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-chalkboard-teacher fa-2x text-gray-300"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6 mb-4">
                                <div class="card border-left-primary shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total
                                                    Siswa
                                                </div>
                                                <div class="h5 mb-0 font-weight-bold text-gray-800 num">
                                                    {{ $siswa->count() }}
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-user-graduate fa-2x text-gray-300"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6 mb-4">
                                <div class="card border-left-primary shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total
                                                    Rombel
                                                </div>
                                                <div class="h5 mb-0 font-weight-bold text-gray-800 num">
                                                    {{ $rombel->count() }}
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <i class="far fa-object-group fa-2x text-gray-300"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 mb-4">
                                <div class="row">
                                    <div class="col-lg-12 mb-4">
                                        <div class="card bg-primary text-white shadow">
                                            <div class="card-body">
                                                <div class="list-inline"><i class="far fa-clock list-inline-item"></i>
                                                    <p class="list-inline-item" style="font-weight: bold;">Waktu Saat Ini
                                                    </p>
                                                </div>
                                                <h2 class="text-center" id="myclock"></h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="col-lg-6 mb-4">
                                <div class="card shadow mb-4">
                                    <div class="card-body">
                                        <div class="text-center mb-2">
                                            <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 20rem;"
                                                src="{{ asset('icon/undraw_dashboard_nklg.svg') }}" alt="">
                                        </div>
                                        <p class="text-center">Ahlan wa Sahlan di Web Raport yang sederhana moga berguna.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog"
                                aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-xl" role="document">
                                    <div class="modal-content">
                                        <!-- <div class="modal-header">
                                                                                                                            <h5 class="modal-title" id="exampleModalCenterTitle">Modal title</h5>
                                                                                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                                                              <span aria-hidden="true">&times;</span>
                                                                                                                            </button>
                                                                                                                          </div> -->

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body">

            </div>
        </div>
    </div>
@endsection
@section('script')
    <script type="text/javascript" src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('js/jquery.easypiechart.js') }}"></script>
    <script src="{{ asset('js/jquery.counterup.js') }}"></script>
    <script src="{{ asset('js/jquery.waypoints.js') }}"></script>
    <script type="text/javascript">
        $('.num').counterUp({
            delay: 10,
            time: 1000
        });

        $(function() {
            $('.chart').easyPieChart({

            });
        });

        var clock = 0;
        var interval_msec = 1000;
        $(function() {
            clock = setTimeout("UpdateClock()", interval_msec);
        });

        function UpdateClock() {
            clearTimeout(clock);
            var asiaTime = new Date().toLocaleString("en-US", {
                timeZone: "Asia/Jakarta"
            });
            var dt_now = new Date(asiaTime);
            var weekday = new Array(7);
            weekday[0] = "Minggu";
            weekday[1] = "Senin";
            weekday[2] = "Selasa";
            weekday[3] = "Rabu";
            weekday[4] = "Kamis";
            weekday[5] = "Jumat";
            weekday[6] = "Sabtu";
            var day = weekday[dt_now.getDay()];
            var hh = dt_now.getHours();
            var mm = dt_now.getMinutes();
            var ss = dt_now.getSeconds();
            if (hh < 10) {
                hh = "0" + hh;
            }
            if (mm < 10) {
                mm = "0" + mm;
            }
            if (ss < 10) {
                ss = "0" + ss;
            }
            $("#myclock").html(day + ", " + hh + ":" + mm + ":" + ss);
            clock = setTimeout("UpdateClock()", interval_msec);
        }
    </script>
@endsection
