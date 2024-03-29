<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>MY RAPORT</title>
  <link rel="shortcut icon" href="{{ asset('icon/icon-1.png') }}">
  <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link href="{{ asset('css/sb-admin-2.min.css') }}" rel="stylesheet">
  <style type="text/css">
    body{
      background-image: url('{{ asset('images/BackgroundSample.jpg') }}');
      background-size: cover;
      background-position: center;
    }
    .top-margin{
      margin-top: 70px;
    }
    .first-account{
      background-position: center;
      background-image: url('{{ asset('icon/undraw_welcome_3gvl.svg')  }}');
      background-size: 300px;
      background-repeat: no-repeat;
    }
    .card-login{
      background-position: center;
      background-image: url('{{ asset('images/myraport1.png')  }}');
      background-size: cover;
    }
  </style>
</head>
<body class="">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-xl-10 col-lg-12 col-md-9 top-margin">
        @if($check_user != 0)
        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <div class="row ">
              <div class="col-lg-6 d-none d-lg-block card-login"></div>
              <div class="col-lg-6">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Ahlan wa Sahlan !</h1>
                  </div>
                  @if ($message = Session::get('gagal'))
                  <div class="text-center">
                    <div class="alert" role="alert" style="background-color: #d7b2f6; color: #7a00e2;">
                      {{ $message }}
                    </div>
                  </div>
                  @endif  
                  <form class="user" method="POST" action="{{ url('/verif_login') }}">
                    @csrf
                    <div class="form-group">
                      <input type="text" name="username" class="form-control form-control-user" id="exampleInputUsername" placeholder="Username" required="">
                    </div>
                    <div class="form-group">
                      <input type="password" name="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password" required="">
                    </div>
                    <div class="form-group">
                      <div class="custom-control custom-checkbox small">
                        <input type="checkbox" class="custom-control-input" id="customCheck">
                        <label class="custom-control-label" for="customCheck">Ingat Saya</label>
                      </div>
                    </div>
                    <button class="btn btn-user btn-block" style="background-color: #9800e1; color: white;" type="submit">Masuk</button>
                  </form>
                  <hr>
                  <div class="text-center">
                    <a class="small" href="#" style="color: #4e00e1;">Lupa Password?</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        @else
        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <div class="row ">
              <div class="col-lg-6 text-center first-account"></div>
              <div class="col-lg-6">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Akun Awal</h1>
                  </div>
                  <form class="user" method="POST" action="{{ url('/first_account') }}">
                    @csrf
                    <div class="form-group">
                      <input type="text" name="nama" class="form-control" placeholder="Masukkan Nama" autocomplete="off" required="">
                    </div>
                    <div class="form-group">
                      <input type="text" name="username" class="form-control" placeholder="Masukkan Username" autocomplete="off" required="">
                    </div>
                    <div class="form-group">
                      <input type="password" name="password" class="form-control" id="" placeholder="Masukkan Password" required="">
                    </div>
                    <button class="btn btn-block" style="background-color: #9800e1; color: white; font-size: 14px;" type="submit">Buat Akun</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
        @endif
      </div>
    </div>
  </div>
  <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('vendor/jquery-easing/jquery.easing.min.js') }}"></script>
  <script src="{{ asset('js/sb-admin-2.min.js') }}"></script>
  <script src="{{ asset('js/sweetalert.js') }}"></script>
  <script type="text/javascript">
    @if ($message = Session::get('save'))
    Swal.fire({
      icon: 'success',
      text: '{{ $message }}',
      showConfirmButton: false,
      timer: 1500
    })
    @endif

    $(document).ready(function(){
      $(document).on( 'focus', ':input', function(){
          $( this ).attr( 'autocomplete', 'off' );
      });
    });
  </script>
</body>
</html>
