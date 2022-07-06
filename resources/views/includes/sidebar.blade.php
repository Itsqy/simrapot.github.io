<aside
    class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark"
    id="sidenav-main">
    <div class="sidenav-header">
        <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
            aria-hidden="true" id="iconSidenav"></i>
        <a class="navbar-brand m-0" href="#">
            <img src="../../assets/img/logo-ct.png" class="navbar-brand-img h-100" alt="main_logo">
            <span class="ms-1 font-weight-bold text-white">Web Sekolah</span>
        </a>
    </div>
    <hr class="horizontal light mt-0 mb-2">
    <div class="collapse navbar-collapse  w-auto h-auto" id="sidenav-collapse-main">
        <ul class="navbar-nav">
            <li class="nav-item mb-2 mt-0">
                <div class="container d-flex justify-content-center">
                    <a data-bs-toggle="collapse" href="#ProfileNav" class="nav-link text-white "
                        aria-controls="ProfileNav" role="button" aria-expanded="true">
                        @if (empty(
    auth()->user()->getAvatar()
))
                            <img src="https://ui-avatars.com/api/?name={{ $user->name }}" alt="..."
                                class="img-thumbnail w-75 ">
                        @else
                            <img src="{{ auth()->user()->getAvatar() }}" alt="" class="img-thumbnail w-75">
                        @endif
                    </a>
                </div>

                <div class="collapse" id="ProfileNav">
                    <ul class="nav ">
                        <li class="nav-item">
                            <a class="nav-link text-white" href="{{ url('/profile') }}">
                                <span class="sidenav-mini-icon"> MP </span>
                                <span class="sidenav-normal  ms-3  ps-1"> My Profile </span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white " href="{{ url('/logout') }}"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                <span class="sidenav-mini-icon"> L </span>
                                <span class="sidenav-normal  ms-3  ps-1"> Logout </span>
                            </a>
                            <form id="logout-form" action="{{ url('/logout') }}" class="d-none">
                                @csrf

                            </form>
                        </li>
                    </ul>
                </div>
            </li>
            <hr class="horizontal light mt-0">
            @if (Auth::user()->role == 'Kurikulum')
                <!-- ===== ADMIN ===== -->


                <!-- ===== LIST MENU SIDEBAR ADMIN ===== -->
                {{-- ADMIN --}}
                <ul class="nav ">
                    <li class="nav-item ">
                        <a class="nav-link text-white " href="{{ url('/dashboard') }}">
                            <span class="sidenav-mini-icon"> A </span>
                            <span class="sidenav-normal  ms-2  ps-1"> Admin </span>
                        </a>
                    </li>
                    {{-- END ADMIN --}}
                    {{-- PROFILE --}}
                    {{-- <li class="nav-item ">
                        <a class="nav-link text-white " href="{{ url('/profile') }}">
                            <span class="sidenav-mini-icon"> S </span>
                            <span class="sidenav-normal  ms-2  ps-1">Profile </span>
                        </a>
                    </li> --}}
                    {{-- END KELOLA PROFILE --}}
                    <!-- ===== KELOLA AKUN ====-->
                    <li class="nav-item ">
                        <a class="nav-link text-white " href="{{ url('/kelola_akun') }}">
                            <span class="sidenav-mini-icon"> A </span>
                            <span class="sidenav-normal  ms-2  ps-1"> Kelola Akun</span>
                        </a>
                    </li>
                    <!-- ===== END KELOLA AKUN ===== -->
                    <!-- ===== KELOLA RAPORT ====-->
                    <li class="nav-item ">
                        <a class="nav-link text-white " href="/data_siswa">
                            <span class="sidenav-mini-icon"> R </span>
                            <span class="sidenav-normal  ms-2  ps-1"> Kelola rapot</span>
                        </a>
                    </li>
                    <!-- ===== END KELOLA RAPORT ===== -->
                </ul>
                <!-- ===== END LIST MENU SIDE BAR ADMIN ===== -->
                </li>
                <ul class="nav ">

                    <!-- ======= ROMBEL ===== -->
                    <li class="nav-item ">
                        <a class="nav-link text-white " href="/kelola_rombel">
                            <span class="sidenav-mini-icon"> K </span>
                            <span class="sidenav-normal  ms-2  ps-1"> Kelola Kelas </span>
                        </a>
                    </li>
                    <!-- ===== END ROMBEL ===== -->


                    <!-- ===== SISWA-->
                    <li class="nav-item ">
                        <a class="nav-link text-white " href="/kelola_siswa">
                            <span class="sidenav-mini-icon"> S </span>
                            <span class="sidenav-normal  ms-2  ps-1"> Kelola Siswa </span>
                        </a>
                    </li>
                    <!-- ===== END SISWA===== -->
                </ul>
                <!-- ===== END LIST SIDE BAR ADMIN ===== -->
                </li>
                <!-- ===== END SISWA ===== -->
                <!-- ===== END ADMIN ===== -->
            @else
                {{-- GURU --}}
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{ url('/dashboard') }}">
                        <span class="sidenav-mini-icon"> S </span>
                        <span>Dashboard</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{ url('/profile') }}">
                        <span class="sidenav-mini-icon"> S </span>
                        <span>Profile</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link text-white" href="{{ url('/kelola_nilai') }}">
                        <span class="sidenav-mini-icon"> S </span>
                        <span>Kelola Nilai</span></a>
                </li>
                {{-- END GURU --}}
            @endif
        </ul>
    </div>
</aside>
