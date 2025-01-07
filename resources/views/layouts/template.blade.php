<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{$title}}</title>
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
    @yield('tambahanCSS')
    <!-- IonIcons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css')}}">
</head>
<style>
    .main-sidebar {
        background: linear-gradient(45deg,rgb(78, 200, 127), #8f94fb); /* Gradien warna */
        color: white;
    }
    .main-sidebar .brand-link {
        background-color: rgba(255, 255, 255, 0.1); /* Semi-transparan */
        color: white;
        text-align: center;
    }
    .main-sidebar .brand-link:hover {
        background-color: rgba(255, 255, 255, 0.2); /* Hover effect */
    }
    .main-sidebar .nav-sidebar .nav-link {
        color: white;
    }
    .main-sidebar .nav-sidebar .nav-link.active {
        background-color: rgba(255, 255, 255, 0.2); /* Active state */
        color: #fff;
        border-left: 4px solid #ffcc00; /* Highlight active menu */
    }
    .main-sidebar .nav-sidebar .nav-link:hover {
        background-color: rgba(255, 255, 255, 0.1); /* Hover effect */
        color: #ffcc00; /* Highlight text */
    }
    .main-sidebar .nav-icon {
        color: white; /* Ikon warna putih */
    }
</style>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
            </ul>
            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>
                <li class="nav-item dropdown">
   <a class="nav-link" data-toggle="dropdown" href="#">
     
   </a>
   
</li>
            </ul>
        </nav>
        <!-- /.navbar -->
        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link text-center">
        <img src="{{ asset('dist/img/emt.jpeg') }}" alt="AdminLTE Logo" 
            class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-bold">Laporan Harian</span>
    </a>
    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block font-weight-bold">Eka Mas Tunggal</a>
              
            </div>
        </div>
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="/" class="nav-link {{ ($title==='Dashboard') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-home"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('proyek.index') }}" class="nav-link {{ ($title==='Proyek') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-project-diagram"></i>
                        <p>Proyek</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link {{ ($title==='Lampiran') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-paperclip"></i>
                        <p>Lampiran</p>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</aside>


        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-12">
                            <h1 class="m-0">@yield('judulh1')</h1>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        @yield('konten')
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- /.content -->
        </div>
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
    </div>
    <!-- ./wrapper -->


    <!-- REQUIRED SCRIPTS -->


    <!-- jQuery -->
    <script src="{{ asset('plugins/jquery/jquery.min.js')}}"></script>
    <!-- Bootstrap -->
    <script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    @yield('tambahanJS')

    <!-- AdminLTE -->
    <script src="{{ asset('dist/js/adminlte.js')}}"></script>

    <!-- OPTIONAL SCRIPTS -->
    <script src="{{ asset('plugins/chart.js/Chart.min.js')}}"></script>

    @yield('tambahScript')
</body>

</html>