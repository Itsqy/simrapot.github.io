@extends('layouts.header')
@section('title')
    Profile
@endsection
@section('css')
    <style type="text/css">
        .file-upload {
            background-color: #ffffff;
            width: 100%;
            margin: 0 auto;
            padding: 0px;
        }

        .file-upload-btn {
            width: 100%;
            margin: 0;
            color: #fff;
            background: #7a00e2;
            border: none;
            padding: 10px;
            border-radius: 4px;
            border-bottom: 4px solid #15824B;
            transition: all .2s ease;
            outline: none;
            text-transform: uppercase;
            font-weight: 700;
        }

        .file-upload-btn:hover {
            background: #1AA059;
            color: #ffffff;
            transition: all .2s ease;
            cursor: pointer;
        }

        .file-upload-btn:active {
            border: 0;
            transition: all .2s ease;
        }

        .file-upload-content {
            display: none;
            text-align: center;
        }

        .file-upload-input {
            position: absolute;
            margin: 0;
            padding: 0;
            width: 100%;
            height: 100%;
            outline: none;
            opacity: 0;
            cursor: pointer;
        }

        .image-upload-wrap {
            border: 4px dashed #7a00e2;
            position: relative;
        }

        .image-dropping,
        .image-upload-wrap:hover {
            background-color: #7a00e2;
            border: 4px dashed #ffffff;
        }

        .image-upload-wrap:hover .drag-text p {
            color: #fff;
        }

        .image-title-wrap {
            padding: 0 15px 15px 15px;
            color: #222;
        }

        .drag-text {
            text-align: center;
        }

        .drag-text p {
            font-weight: bold;
            text-transform: uppercase;
            color: #999;
            padding: 60px 0;
        }

        .file-upload-image {
            max-height: auto;
            max-width: 100%;
            margin: auto;
            padding: 20px;
        }

        .remove-image {
            font-size: 13px;
            margin: 0;
            color: #fff;
            background: #7a00e2;
            border: none;
            padding: 10px;
            border-radius: 4px;
            transition: all .2s ease;
            outline: none;
            text-transform: uppercase;
            font-weight: 700;
        }

        .remove-image:hover {
            background: #7a00e2;
            color: #ffffff;
            transition: all .2s ease;
            cursor: pointer;
        }

        .remove-image:active {
            border: 0;
            transition: all .2s ease;
        }

        .cancel-btn {
            color: #7a00e2;
        }

        .cancel-btn:hover {
            color: #fff;
            background-color: #7a00e2;
            border: none;
        }

        #fotouser {
            object-fit: cover;
            width: 8rem;
            height: 8rem;
        }

    </style>
@endsection
@section('isi')
    <div class="container-fluid">
        <div class="row mb-4">
            <div class=" col-md-12 ">
                <div class="media">
                    <div class="card-header">
                        <div class="media-body">
                            <h4 class="mt-1" style="color: #3e3d3e; font-weight: bold;">Profile</h4>
                            Kelola data pribadi
                        </div>
                        <div class="row">
                            <div class="col-lg-4 mb-4">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12">
                                        <div class="card shadow mb-4">
                                            <div class="card-header py-3">
                                                <h6 class="m-0 font-weight-bold text-primary">Info</h6>
                                            </div>
                                            <div class="card-body">
                                                <div class="text-center mt-3">
                                                    <img src="{{ auth()->user()->getAvatar() }}"
                                                        class="img-fluid rounded-circle mb-3 info-avatar" id="fotouser">
                                                </div>
                                                <div class="text-center">
                                                    <h5 class="mb-1 text-gray-800 info-name" style="font-weight: bold;">
                                                        {{ auth()->user()->name }}</h5>
                                                    <h6 class="mb-4 text-gray-800">- {{ auth()->user()->role }} -</h6>
                                                    <p class="info-username">Username : {{ auth()->user()->username }}
                                                    </p>
                                                    <p class="mb-4" style="margin-top: -12px;">
                                                        @if (auth()->user()->kd_mapel != '-')
                                                            Mapel : {{ auth()->user()->kd_mapel }}
                                                        @endif
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12">
                                        <div class="card shadow mb-4">
                                            <div class="card-body">
                                                <div class="row no-gutters align-items-center">
                                                    <div class="col mr-2">
                                                        <div
                                                            class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                            Kelas
                                                            Ajar
                                                        </div>
                                                        @if ($kelas_ajar->count() == 0)
                                                            <div class="h6 mb-0 font-weight-bold text-gray-800">
                                                                Tidak Mengajar
                                                            </div>
                                                        @else
                                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                                {{ $kelas_ajar->count() }}
                                                            </div>
                                                        @endif
                                                    </div>
                                                    <div class="col-auto">
                                                        <i class="fas fa-chalkboard-teacher fa-2x text-gray-300"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-8 mb-4">
                                <div class="card shadow mb-4">
                                    <div
                                        class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                        <h6 class="m-0 font-weight-bold text-primary">Detail</h6>
                                        <div class="dropdown no-arrow">
                                            <a class="dropdown-bs-toggle" href="#" role="button" id="dropdownMenuLink"
                                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                                                aria-labelledby="dropdownMenuLink">
                                                <a class="dropdown-item ubah-data-btn" href="#">Ubah
                                                    Data</a>
                                                <a class="dropdown-item ubah-password-btn" href="#">Ubah
                                                    Password</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <form class="border p-4" id="ubah-data" method="POST"
                                            action="{{ url('/update_profile/' . auth()->user()->id . '/' . auth()->user()->kd_guru) }}"
                                            enctype="multipart/form-data">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12" id="same_username">

                                                </div>
                                            </div>
                                            @csrf
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12 mb-4">
                                                    <div class="file-upload">
                                                        <div class="image-upload-wrap">
                                                            <input class="file-upload-input" name="avatarupdate" type='file'
                                                                onchange="readURL(this);" accept="image/*" />
                                                            <div class="drag-text">
                                                                <p>Seret dan letakkan gambar atau pilih gambar</p>
                                                            </div>
                                                        </div>
                                                        <div class="file-upload-content">
                                                            <img class="file-upload-image" src="#" alt="your image" />
                                                            <div class="image-title-wrap">
                                                                <button type="button" onclick="removeUpload()"
                                                                    class="remove-image">Hapus</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <input type="text" name="" id="idEdit" value="{{ auth()->user()->id }}"
                                                    hidden="">
                                                <input type="text" name="" id="kdGuru"
                                                    value="{{ auth()->user()->kd_guru }}" hidden="">
                                            </div>
                                            <div class="form-group">
                                                <label for="Username">Username</label>
                                                <input type="text" class="form-control" name="usernameupdate"
                                                    id="username_text" placeholder="Ubah Username" required=""
                                                    value="{{ auth()->user()->username }}">
                                            </div>
                                            <div class="form-group mb-4">
                                                <label for="Nama">Nama</label>
                                                <input type="text" class="form-control" name="nameupdate" id="nama_text"
                                                    placeholder="Ubah Nama" required=""
                                                    value="{{ auth()->user()->name }}">
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-2 col-md-4 col-sm-6 col-xs-12 mb-3">
                                                    <button type="submit" class="btn btn-block mr-2"
                                                        style="color: #fff; background-color: #7a00e2; border-radius: 3px;">Ubah</button>
                                                </div>
                                                <div class="col-lg-2 col-md-4 col-sm-6 col-xs-12">
                                                    <button type="button" class="btn btn-block cancel-btn"
                                                        style="border-radius: 3px; border: 1px solid #7a00e2;">Cancel</button>
                                                </div>
                                                <div class="col-lg-10 col-md-8 col-sm-4"></div>
                                            </div>
                                        </form>
                                        <form class="border p-4" id="ubah-password" method="POST" hidden="">
                                            @csrf
                                            <div class="text-center mb-4">
                                                <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 20rem;"
                                                    src="{{ asset('icon/undraw_security_o890.svg') }}" alt="">
                                                <h5 class="text-gray-800">Ubah Password Anda</h5>
                                            </div>
                                            <div class="text-center" id="old_pass_false2">
                                            </div>
                                            <div class="form-group">
                                                <input type="password" class="form-control" name="old_password"
                                                    id="old_password2" placeholder="Password Lama" required="">
                                            </div>
                                            <div class="form-group">
                                                <input type="password" class="form-control" name="new_password"
                                                    id="new_password2" placeholder="Password Baru" required="">
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-2 col-md-4 col-sm-6 col-xs-12 mb-3">
                                                    <button type="submit" class="btn btn-block mr-2"
                                                        style="color: #fff; background-color: #7a00e2; border-radius: 3px;">Ubah</button>
                                                </div>
                                                <div class="col-lg-2 col-md-4 col-sm-6 col-xs-12">
                                                    <button type="button" class="btn btn-block cancel-btn"
                                                        style="border-radius: 3px; border: 1px solid #7a00e2;">Cancel</button>
                                                </div>
                                                <div class="col-lg-10 col-md-8 col-sm-4"></div>
                                            </div>
                                        </form>
                                    </div>
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
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script type="text/javascript">
        @if ($message = Session::get('updated'))
            Swal.fire({
            icon: 'success',
            text: '{{ $message }}',
            showConfirmButton: false,
            timer: 1500
            })
        @endif

        @if ($message = Session::get('failed'))
            Swal.fire({
            icon: 'error',
            text: '{{ $message }}',
            showConfirmButton: false,
            timer: 1500
            })
        @endif

        @if ($message = Session::get('pass_change'))
            Swal.fire({
            icon: 'success',
            text: '{{ $message }}',
            showConfirmButton: false,
            timer: 1500
            })
        @endif

        $('#ubah-password').submit(function(e) {
            e.preventDefault();
            var request = new FormData(this);
            $.ajax({
                url: "{{ url('/changepass') }}/" + "{{ auth()->user()->id }}",
                method: "POST",
                data: request,
                contentType: false,
                cache: false,
                processData: false,
                success: function(data) {
                    var warningAlert =
                        '<div class="alert" role="alert" style="background-color: #d7b2f6; color: #7a00e2;">Password lama tidak sesuai</div>';
                    if (data == "sukses") {
                        window.location.replace("{{ url('/profile') }}");
                    } else if (data == "gagal") {
                        $('#old_pass_false2').html(warningAlert);
                        $('#old_password2').val('');
                        $('#new_password2').val('');
                    }
                }
            });
        });

        // $('#ubah-data').submit(function(e){
        //   e.preventDefault();
        //   var kd_guru = $('#kdGuru').val();
        //   var id = $('#idEdit').val();
        //   var request = new FormData(this);
        //   $.ajax({
        //     url: "{{ url('/update_profile') }}/" + id + "/" + kd_guru,
        //     method: "POST",
        //     data: request,
        //     contentType: false,
        //     cache: false,
        //     processData: false,
        //     success:function(response){
        //       if(response.sukses == "sukses"){
        //         window.location.replace("{{ url('/profile') }}");
        //       }else{
        //         $('#same_username').html('<div class="alert text-center" role="alert" style="background-color: #d7b2f6; color: #7a00e2;">Username telah digunakan</div>');
        //       }
        //     }
        //   });
        // });

        $('.cancel-btn').on('click', function() {
            $('#old_pass_false2').html('');
            $('.remove-image').click();
            $('#nama_text').val('{{ auth()->user()->name }}');
            $('#username_text').val('{{ auth()->user()->username }}');
            $('#old_password2').val('');
            $('#new_password2').val('');
        });

        $('.ubah-data-btn').on('click', function() {
            $('#ubah-data').prop('hidden', false);
            $('#ubah-password').prop('hidden', true);
            $('#old_pass_false2').html('');
        });

        $('.ubah-password-btn').on('click', function() {
            $('#ubah-data').prop('hidden', true);
            $('#ubah-password').prop('hidden', false);
        });

        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('.image-upload-wrap').hide();
                    $('.file-upload-image').attr('src', e.target.result);
                    $('.file-upload-content').show();
                    $('.image-title').html(input.files[0].name);
                };
                reader.readAsDataURL(input.files[0]);
            } else {
                removeUpload();
            }
        }

        function removeUpload() {
            $('.file-upload-input').replaceWith($('.file-upload-input').clone());
            $('.file-upload-content').hide();
            $('.image-upload-wrap').show();
        }
        $('.image-upload-wrap').bind('dragover', function() {
            $('.image-upload-wrap').addClass('image-dropping');
        });
        $('.image-upload-wrap').bind('dragleave', function() {
            $('.image-upload-wrap').removeClass('image-dropping');
        });
    </script>
@endsection
