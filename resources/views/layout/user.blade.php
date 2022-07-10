<html lang="en" class="" style="height: auto;">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&amp;display=fallback">

    <link rel="stylesheet" href="{{asset('public/assets/AdminLTE/plugins/fontawesome-free/css/all.min.css')}}">

    <link rel="stylesheet" href="{{asset('public/assets/AdminLTE/dist/css/adminlte.min.css?v=3.2.0')}}">
</head>
<body class="sidebar-mini control-sidebar-slide-open layout-fixed layout-navbar-fixed layout-footer-fixed" style="height: auto;">

    <div class="wrapper">
        <nav class="main-header navbar navbar-expand navbar-white navbar-light border-bottom-0 text-sm">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
            </ul>
        </nav>
        <aside class="main-sidebar sidebar-dark-primary elevation-4">

            <a href="../../index3.html" class="brand-link text-sm">
                <img src="../../dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">AdminLTE 3</span>
            </a>

            <div class="sidebar" style="overflow-y: auto;">

                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="../../dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block">Alexander Pierce</a>
                    </div>
                </div>



                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <li class="nav-header">Menu</li>
                        <!-- <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Dashboard
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview" style="display: none;">
                                <li class="nav-item">
                                    <a href="../../index.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Dashboard v1</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="../../index2.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Dashboard v2</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="../../index3.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Dashboard v3</p>
                                    </a>
                                </li>
                            </ul>
                        </li> -->
                        <li class="nav-item">
                            <a href="{{ route('beranda') }}" class="nav-link">
                                <i class="nav-icon fas fa-th"></i>
                                <p>
                                    Beranda
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('ucapanAdmin') }}" class="nav-link">
                                <i class="nav-icon fas fa-th"></i>
                                <p>
                                    Ucapan
                                </p>
                            </a>
                        </li>
                    </ul>
                </nav>

            </div>

        </aside>

        <div class="content-wrapper" style="min-height: 601.01px;">
            @yield('content')
        </div>

        <footer class="main-footer text-sm">
            <div class="float-right d-none d-sm-block">
                <b>Version</b> 3.2.0
            </div>
            <strong>Copyright © 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
        </footer>



    </div>


    <script src="{{asset('public/assets/AdminLTE/plugins/jquery/jquery.min.js')}}"></script>

    <script src="{{asset('public/assets/AdminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <script src="{{asset('public/assets/AdminLTE/dist/js/adminlte.min.js?v=3.2.0')}}"></script>


</body>
</html>
