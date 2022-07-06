<!--
=========================================================
* Material Dashboard 2 PRO - v3.0.2
=========================================================

* Product Page:  https://www.creative-tim.com/product/material-dashboard-pro
* Copyright 2021 Creative Tim (https://www.creative-tim.com)
* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('assets/img/apple-icon.png') }}">
    <link rel="icon" type="image/png" href="{{ asset('assets/img/favicon.png') }}">
    <title>
        @yield('title')
    </title>
    <!-- Extra details for Live View on GitHub Pages -->
    <!-- Canonical SEO -->
    {{-- <link rel="canonical" href="https://www.creative-tim.com/product/material-dashboard-pro" /> --}}
    <!--  Social tags      -->
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css"
        href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
    <!-- Nucleo Icons -->
    <link href="{{ asset('assets/css/nucleo-icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/nucleo-svg.css') }}" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
    <!-- CSS Files -->
    <link id="pagestyle" href="{{ asset('assets/css/material-dashboard.min.css?v=3.0.2') }}" rel="stylesheet" />
    <!-- Anti-flicker snippet (recommended)  -->
    @yield('css')
    <!-- BOOSTRAP 5
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->


    <style>
        .async-hide {
            opacity: 0 !important
        }

        * .activity-feed {
            padding: 15px;
            list-style: none;
        }

        * .activity-feed .feed-item {
            position: relative;
            padding-bottom: 20px;
            padding-left: 30px;
            border-left: 2px solid #e4e8eb;
        }

        * .activity-feed .feed-item:last-child {
            border-color: transparent;
        }

        * .activity-feed .feed-item::after {
            content: "";
            display: block;
            position: absolute;
            top: 0;
            left: -7px;
            width: 12px;
            height: 12px;
            border-radius: 50%;
            background: #177dff;
        }

        * .feed-item-default::after {
            background: #1a2035 !important;
        }

        * .feed-item-primary::after {
            background: #1572e8 !important;
        }

        * .feed-item-secondary::after {
            background: #6861ce !important;
        }

        * .feed-item-success::after {
            background: #31ce36 !important;
        }

        * .feed-item-danger::after {
            background: #f25961 !important;
        }

        * .feed-item-info::after {
            background: #48abf7 !important;
        }

        * .feed-item-warning::after {
            background: #ffad46 !important;
        }

        * .activity-feed .feed-item .date {
            display: block;
            position: relative;
            top: -5px;
            color: #8c96a3;
            text-transform: uppercase;
            font-size: 13px;
        }

        * .activity-feed .feed-item .text {
            position: relative;
            top: -3px;
        }

    </style>

    <script>
        (function(a, s, y, n, c, h, i, d, e) {
            s.className += ' ' + y;
            h.start = 1 * new Date;
            h.end = i = function() {
                s.className = s.className.replace(RegExp(' ?' + y), '')
            };
            (a[n] = a[n] || []).hide = h;
            setTimeout(function() {
                i();
                h.end = null
            }, c);
            h.timeout = c;
        })(window, document.documentElement, 'async-hide', 'dataLayer', 4000, {
            'GTM-K9BGS8K': true
        });
    </script>
    <!-- Analytics-Optimize Snippet -->
    <script>
        (function(i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function() {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');
        ga('create', 'UA-46172202-22', 'auto', {
            allowLinker: true
        });
        ga('set', 'anonymizeIp', true);
        ga('require', 'GTM-K9BGS8K');
        ga('require', 'displayfeatures');
        ga('require', 'linker');
        ga('linker:autoLink', ["2checkout.com", "avangate.com"]);
    </script>
    <!-- end Analytics-Optimize Snippet -->
    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-NKDMSK6');
    </script>
    <!-- End Google Tag Manager -->
</head>

<body class="g-sidenav-show  bg-gray-200">
    <!-- Extra details for Live View on GitHub Pages -->
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NKDMSK6" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <!-- ===== SIDEBAR ===== -->
    @include('includes.sidebar')
    <!-- ===== END SIDEBAR ===== -->

    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">

        <!-- ===== Navbar ===== -->
        @include('includes.navbar')
        <!-- ===== End Navbar ===== -->

        <div class="container-fluid py-4">
            <div class="row">
                <div class="col-lg-12 ">

                    @yield('isi')

                </div>

                <!-- ===== FOOTER ===== -->
                @include('includes.footer')
                <!-- ===== END FOOTER ===== -->

                {{-- sweetallert --}}

                @include('sweetalert::alert')


            </div>
    </main>



    <!--   Core JS Files   -->
    <script src="{{ asset('assets/js/core/popper.min.js') }}"></script>
    <script src="{{ asset('js/sweetalert.js') }}"></script>
    {{-- jan di pak , ini bikin dropdown g jalan --}}
    {{-- <script src="{{ asset('assets/js/core/bootstrap.min.js') }}"></script> --}}
    <script src="{{ asset('assets/js/plugins/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/smooth-scrollbar.min.js') }}"></script>
    <!-- Kanban scripts -->
    {{-- <script src="{{ asset('assets/js/plugins/dragula/dragula.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/jkanban/jkanban.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/chartjs.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/world.js') }}"></script> --}}
    @yield('script')
    <script>

    </script>
    <script>
        var win = navigator.platform.indexOf('Win') > -1;
        if (win && document.querySelector('#sidenav-scrollbar')) {
            var options = {
                damping: '0.5'
            }
            Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
        }
    </script>
    <!-- Github buttons -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="{{ asset('assets/js/material-dashboard.min.js?v=3.0.2') }}"></script>

    <!-- JS BOOSTRAP 5 -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script> -->
    {{-- sweetallert --}}
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>

</html>
