@extends('layouts.header')
@section('title')
    Kelola Raport
@endsection
@section('isi')
    <div class="container-fluid">
        <div class="row">
            <div class=" col-md-12 col-sm-12">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <div class="media">
                            <div class="media-body">
                                <h4 class="mt-1" style="color: #3e3d3e; font-weight: bold;">Kelola Raport</h4>
                            </div>
                        </div>
                        {{-- <h6 class="m-0 font-weight-bold text-primary">Daftar Rayon</h6> --}}
                        {{-- <div class="input-group mb-2 mr-sm-2" style="color: #3e3d3e">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="fas fa-filter"></i>
                                </div>
                            </div>
                            <select class="form-control" id="pilih_daerah">
                                <option value="">-- Pilih Daerah --</option>
                                <option value="Cisarua">Cisarua</option>
                                <option value="Cibedug">Cibedug</option>
                                <option value="Cicurug">Cicurug</option>
                                <option value="Ciawi">Ciawi</option>
                                <option value="Tajur">Tajur</option>
                                <option value="Sukasari">Sukasari</option>
                                <option value="Wikrama">Wikrama</option>
                            </select>
                        </div> --}}
                        <div class="table-responsive mt-5">
                            <table class="table table-bordered" width="100%" cellspacing="0">
                                <thead class="text-center">
                                    <tr>
                                        <th>No</th>
                                        <th>Rayon</th>
                                        <th>Daerah</th>
                                        <th>Pembimbing</th>
                                        <th>Jumlah Siswa</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody id="daftarRayon">

                                </tbody>
                            </table>
                        </div>
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
    <script type="text/javascript">
        function tampilRayon() {
            $.ajax({
                url: "{{ url('/tabel_rayon_raport') }}",
                success: function(data) {
                    $('#daftarRayon').html(data);
                }
            });
        }

        tampilRayon();

        $(document).ready(function() {
            $('#pilih_daerah').change(function() {
                if ($(this).val() == '') {
                    tampilRayon();
                } else {
                    var daerah = $(this).val();
                    $.ajax({
                        method: "GET",
                        url: "{{ url('/sort_rayon_raport') }}/" + daerah,
                        success: function(data) {
                            $('#daftarRayon').html(data);
                        }
                    })
                }
            });
        });
    </script>
@endsection
