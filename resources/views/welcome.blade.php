<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ahlan wa Sahlan</title>

    <!-- Google Font -->
    <link rel="preconnect" href="{{ asset('https://fonts.googleapis.com') }}">
    <link rel="preconnect" href="{{ asset('https://fonts.gstatic.com') }}" crossorigin>
    <link href="{{ asset('https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap') }}" rel="stylesheet">

    <!-- Bootsrap CSS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">

    <style>
        body{
            padding: 0;
            margin: 0;
            height: 100vh;
            font-family: 'Nunito', 'sans-serif';
            background-image: url('{{ asset('images/BackgroundSample.jpg') }}');
            background-size: cover;
            background-position: center;
        }
        .form-label{
            font-weight: bold;
            color: #ffffff
        }
        .tag-p{
            margin-top: -9px;
            color: rgb(199, 199, 199);
        }
        .btn-light{
            width: 100%;
            background-color: #ffffff;
            border: none;
        }
        @media(max-width: 932px){
            .display-none{
                display: none !important;
            }
        }
        .akun a{
            text-decoration: none;
        }

        p{
            color: rgb(177, 177, 177)
        }
    </style>

</head>
<body>
    <div class="row m-0 h-100">
        <!-- Bagian Kiri -->
        <div class="col p-0 d-flex justify-content-center align-items-center display-none">
            <img src="{{ asset('images/MYRAPORT.png') }}" class="w-75 h-75">
        </div>

        <!-- Bagian Kanan -->   
        <div class="col p-0 d-flex justify-content-center align-items-center">
            <form class="w-75">
                <h2 class="form-label">Ahlan Wa Sahlan</h2>
                <p class="tag-p">Silahkan Login untuk bisa mengakses website My Raport</p>
                <button type="submit" class="btn btn-light"><a href="{{ route('login') }}">Log in</a></button>
                <p class="text-center mt-3 akun">Baarakallahu fiikum, moga Bermanfaat.</p>
            </form>
        </div>
    </div>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>