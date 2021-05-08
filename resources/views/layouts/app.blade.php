{{-- <!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body>
        <div id="app">
            <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
                <div class="container">

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <!-- Left Side Of Navbar -->
                        <ul class="navbar-nav mr-auto">

                        </ul>

                        <!-- Right Side Of Navbar -->
                        <ul class="navbar-nav ml-auto">
                            <!-- Authentication Links -->
                            @guest
                            @if (Route::has('login'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login')}}</a>
                            </li>
                            @endif

                            @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                            @endif
                            @else
                            <li class="nav-item dropdown">

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                            @endguest
                        </ul>
                    </div>
                </div>
            </nav>

            <main class="py-4">
                @yield('content')
            </main>
        </div>
    </body>
</html> --}}
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Happy Snaps | Dashboard</title>
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- Scripts -->

        <!-- Google Font: Source Sans Pro -->
        <link rel="stylesheet"
            href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="/assets/css/all.min.css">
        <!-- Ionicons -->
        <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
        <!-- Tempusdominus Bootstrap 4 -->
        <link rel="stylesheet" href="/assets/css/tempusdominus-bootstrap-4.min.css">
        <!-- iCheck -->
        <link rel="stylesheet" href="/assets/css/icheck-bootstrap.min.css">
        <!-- JQVMap -->
        <link rel="stylesheet" href="/assets/css/jqvmap.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="/assets/css/adminlte.min.css">
        <!-- overlayScrollbars -->
        <link rel="stylesheet" href="/assets/css/OverlayScrollbars.min.css">
        <!-- Daterange picker -->
        <link rel="stylesheet" href="/assets/css/daterangepicker.css">
        <!-- summernote -->
        <link rel="stylesheet" href="/assets/css/summernote-bs4.min.css">
        <link rel="stylesheet" href="/assets/vendor/bootstrap/css/responsive.bootstrap4.min.css">
        <link rel="stylesheet" href="/assets/vendor/bootstrap/css/buttons.bootstrap4.min.css">
    </head>
    <body class="hold-transition sidebar-mini layout-fixed">

            <aside class="main-sidebar sidebar-dark-primary elevation-4">
                <!-- Brand Logo -->
                <a href="/admin" class="brand-link">
                    <img src="/assets/img/logo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
                        style="opacity: .8">
                    <span class="brand-text font-weight-light">Happy Snaps</span>
                </a>

                <!-- Sidebar -->
                <div class="sidebar">
                    <!-- Sidebar user panel (optional) -->
                    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                        <div class="image">
                            <img src="/assets/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
                        </div>
                        <div class="info">
                            <a href="#" class="d-block">{{Auth::user()->name}}</a>
                        </div>
                    </div>


                    <!-- Sidebar Menu -->
                    <nav class="mt-2">
                        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                            <!-- Add icons to the links using the .nav-icon class
                                   with font-awesome or any other icon font library -->

                            <li class="nav-item active">
                                <a href="/admin" class="nav-link active">
                                    <i class="nav-icon fas fa-tachometer-alt"></i>
                                    <p>
                                        Dashboard
                                        <i class="right"></i>
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/orders" class="nav-link">
                                    <i class="nav-icon far fa-edit" aria-hidden="true"></i>
                                    <p>
                                        Orders
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/menu" class="nav-link">
                                    <i class="nav-icon fa fa-bars" aria-hidden="true"></i>
                                    <p>
                                        Menu
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/customerMenu" class="nav-link">
                                    <i class="nav-icon fa fa-list-alt" aria-hidden="true"></i>
                                    <p>
                                        Customer Menu
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/#" class="nav-link">
                                    <i class="nav-icon fa fa-user" aria-hidden="true"></i>
                                    <p>
                                        Add User
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <div class="nav-link" aria-labelledby="navbarDropdown">
                                    <a href="{{ route('logout') }}"
                                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        <i class="nav-icon fas fa-sign-out-alt" aria-hidden="true"></i>
                                        <p>
                                            Logout
                                        </p>
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        </ul>
                    </nav>
                    <!-- /.sidebar-menu -->
                </div>
                <!-- /.sidebar -->
            </aside>
            @yield('content')

        <!-- jQuery -->
            <script src="/assets/vendor/jquery/jquery.min.js"></script>
        <!-- jQuery UI 1.11.4 -->
        <script src="/assets/vendor/jquery-ui/jquery-ui.min.js"></script>
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>
            $.widget.bridge('uibutton', $.ui.button)
        </script>
        <!-- Bootstrap 4 -->
        <script src="/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- ChartJS -->
        <script src="/assets/vendor/chart/Chart.min.js"></script>
        <!-- Sparkline -->
        <script src="/assets/vendor/sparklines/sparkline.js"></script>
        <!-- JQVMap -->
        <script src="/assets/vendor/jquery-vmap/jquery.vmap.min.js"></script>
        <script src="/assets/vendor/jquery-vmap/jquery.vmap.usa.js"></script>
        <!-- jQuery Knob Chart -->
        <script src="/assets/vendor/knob/jquery.knob.min.js"></script>
        <!-- daterangepicker -->
        <script src="/assets/vendor/moment/moment.min.js"></script>
        <script src="/assets/vendor/daterangepicker/daterangepicker.js"></script>
        <!-- Tempusdominus Bootstrap 4 -->
        <script src="/assets/vendor/tempusdominus/tempusdominus-bootstrap-4.min.js"></script>
        <!-- Summernote -->
        <script src="/assets/vendor/summernote/summernote-bs4.min.js"></script>
        <!-- overlayScrollbars -->
        <script src="/assets/vendor/overlayScrollbars/jquery.overlayScrollbars.min.js"></script>
        <!-- AdminLTE App -->
        <script src="/assets/vendor/adminlte/adminlte.js"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="/assets/vendor/demo/demo.js"></script>
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src="/assets/vendor/dashboard/dashboard.js"></script>
    </body>
</html>
