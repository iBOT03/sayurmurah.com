<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
    <meta name="author" content="Creative Tim">
    <title>sayurmurah.com</title>
    <!-- Favicon -->
    <link rel="icon" href="{{ asset('style/assets/img/brand/favicon.png') }}" type="image/png">

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
    <!-- Icons -->
    <link rel="stylesheet" href="{{ asset('style/assets/vendor/nucleo/css/nucleo.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('style/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css') }}"
        type="text/css">
    <!-- Page plugins -->
    <!-- Argon CSS -->
    <link rel="stylesheet" href="{{ asset('style/assets/css/argon.css?v=1.2.0') }}" type="text/css">
</head>

<body>
    <!-- Sidenav -->
    <nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
        <div class="scrollbar-inner">
            <!-- Brand -->
            <div class="sidenav-header  align-items-center">
                <a class="navbar-brand" href="javascript:void(0)">
                    <img src="{{ asset('style/assets/img/brand/logo-sayurmurah.png') }}" style="width: 200px"
                        class="navbar-brand-img" alt="...">
                    {{-- <img src="{{ assets('style/') }}assets/img/brand/blue.png" class="navbar-brand-img" alt="..."> --}}
                </a>
            </div>
            <div class="navbar-inner">
                <!-- Collapse -->
                <div class="collapse navbar-collapse" id="sidenav-collapse-main">
                    <!-- Divider -->
                    <hr class="my-3">
                    <!-- Heading -->
                    <h6 class="navbar-heading p-0 text-muted">
                        <span class="docs-normal">Home</span>
                    </h6>
                    <!-- Nav items -->
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" href="{{ asset('style/examples/dashboard.html') }}">
                                <i class="ni ni-tv-2 text-primary"></i>
                                <span class="nav-link-text">Dashboard</span>
                            </a>
                        </li>
                    </ul>
                    <!-- Divider -->
                    <hr class="my-3">
                    <!-- Heading -->
                    <h6 class="navbar-heading p-0 text-muted">
                        <span class="docs-normal">Management User</span>
                    </h6>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="admin/akun">
                                <i class="ni ni-single-02 text-green"></i>
                                <span class="nav-link-text">Kelola Akun</span>
                            </a>
                        </li>
                    </ul>
                    <!-- Divider -->
                    <hr class="my-3">
                    <!-- Heading -->
                    <h6 class="navbar-heading p-0 text-muted">
                        <span class="docs-normal">Management Data</span>
                    </h6>
                    <!-- Navigation -->
                    <ul class="navbar-nav mb-md-3">
                        <li class="nav-item">
                            <a class="nav-link"
                                href="https://demos.creative-tim.com/argon-dashboard/docs/getting-started/overview.html"
                                target="_blank">
                                <i class="ni ni-shop text-purple"></i>
                                <span class="nav-link-text">Data Pasar</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link"
                                href="https://demos.creative-tim.com/argon-dashboard/docs/foundation/colors.html"
                                target="_blank">
                                <i class="ni ni-square-pin text-red"></i>
                                <span class="nav-link-text">Data Daerah</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link"
                                href="https://demos.creative-tim.com/argon-dashboard/docs/components/alerts.html"
                                target="_blank">
                                <i class="ni ni-bag-17 text-yellow"></i>
                                <span class="nav-link-text">Data Produk</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link"
                                href="https://demos.creative-tim.com/argon-dashboard/docs/components/alerts.html"
                                target="_blank">
                                <i class="ni ni-app text-blue"></i>
                                <span class="nav-link-text">Data Kategori Produk</span>
                            </a>
                        </li>
                    </ul>
                    <!-- Divider -->
                    <hr class="my-3">
                    <!-- Heading -->
                    <h6 class="navbar-heading p-0 text-muted">
                        <span class="docs-normal">Transaction</span>
                    </h6>
                    <!-- Navigation -->
                    <ul class="navbar-nav mb-md-3">
                        <li class="nav-item">
                            <a class="nav-link"
                                href="https://demos.creative-tim.com/argon-dashboard/docs/getting-started/overview.html"
                                target="_blank">
                                <i class="ni ni-cart text-red"></i>
                                <span class="nav-link-text">Transaksi</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link"
                                href="https://demos.creative-tim.com/argon-dashboard/docs/foundation/colors.html"
                                target="_blank">
                                <i class="ni ni-book-bookmark text-dark"></i>
                                <span class="nav-link-text">Laporan</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <!-- Main content -->
    <div class="main-content" id="panel">
        <!-- Topnav -->
        <nav class="navbar navbar-top navbar-expand navbar-dark bg-primary border-bottom">
            <div class="container-fluid">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <h1>Panel Admin | sayurmurah.com</h1>
                    <!-- Navbar links -->
                    <ul class="navbar-nav align-items-center  ml-md-auto ">
                        <li class="nav-item dropdown">
                            <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                <div class="media align-items-center">
                                    <span class="avatar avatar-sm rounded-circle">
                                        <img alt="Image placeholder"
                                            src="{{ asset('style/assets/img/theme/team-4.jpg') }}">
                                    </span>
                                    <div class="media-body  ml-2  d-none d-lg-block">
                                        <span class="mb-0 text-sm  font-weight-bold">Admin</span>
                                    </div>
                                </div>
                            </a>
                            <div class="dropdown-menu  dropdown-menu-right ">
                                <div class="dropdown-header noti-title">
                                    <h6 class="text-overflow m-0">Welcome!</h6>
                                </div>
                                <a href="examples/profile.html" class="dropdown-item">
                                    <i class="ni ni-single-02"></i>
                                    <span>My profile</span>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a href="login.html" class="dropdown-item">
                                    <i class="ni ni-user-run"></i>
                                    <span>Logout</span>
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Header -->
        <!-- Header -->
        <div class="header bg-primary pb-6">
            <div class="container-fluid">
                <div class="header-body">
                    <div class="row align-items-center py-4">
                        <div class="col-lg-6 col-7">
                            <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md">
                                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                                    <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <!-- Card stats -->
                    <div class="row">
                        <div class="col-xl-3 col-md-6">
                            <div class="card card-stats">
                                <!-- Card body -->
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col">
                                            <h5 class="card-title text-uppercase text-muted mb-0">Total traffic</h5>
                                            <span class="h2 font-weight-bold mb-0">350,897</span>
                                        </div>
                                        <div class="col-auto">
                                            <div
                                                class="icon icon-shape bg-gradient-red text-white rounded-circle shadow">
                                                <i class="ni ni-active-40"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="mt-3 mb-0 text-sm">
                                        <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 3.48%</span>
                                        <span class="text-nowrap">Since last month</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card card-stats">
                                <!-- Card body -->
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col">
                                            <h5 class="card-title text-uppercase text-muted mb-0">New users</h5>
                                            <span class="h2 font-weight-bold mb-0">2,356</span>
                                        </div>
                                        <div class="col-auto">
                                            <div
                                                class="icon icon-shape bg-gradient-orange text-white rounded-circle shadow">
                                                <i class="ni ni-chart-pie-35"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="mt-3 mb-0 text-sm">
                                        <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 3.48%</span>
                                        <span class="text-nowrap">Since last month</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card card-stats">
                                <!-- Card body -->
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col">
                                            <h5 class="card-title text-uppercase text-muted mb-0">Sales</h5>
                                            <span class="h2 font-weight-bold mb-0">924</span>
                                        </div>
                                        <div class="col-auto">
                                            <div
                                                class="icon icon-shape bg-gradient-green text-white rounded-circle shadow">
                                                <i class="ni ni-money-coins"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="mt-3 mb-0 text-sm">
                                        <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 3.48%</span>
                                        <span class="text-nowrap">Since last month</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card card-stats">
                                <!-- Card body -->
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col">
                                            <h5 class="card-title text-uppercase text-muted mb-0">Performance</h5>
                                            <span class="h2 font-weight-bold mb-0">49,65%</span>
                                        </div>
                                        <div class="col-auto">
                                            <div
                                                class="icon icon-shape bg-gradient-info text-white rounded-circle shadow">
                                                <i class="ni ni-chart-bar-32"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="mt-3 mb-0 text-sm">
                                        <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 3.48%</span>
                                        <span class="text-nowrap">Since last month</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page content -->
        <div class="container-fluid mt--6">
            <div class="row">
                <div class="col-xl-12">
                    <div class="card bg-default">
                        <div class="card-header bg-transparent">
                            <div class="row align-items-center">
                                <div class="col">
                                    <h6 class="text-light text-uppercase ls-1 mb-1">Hallo Gaesss</h6>
                                    <h5 class="h3 text-white mb-0">:V</h5>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
                <!-- Footer -->
                <footer class="footer pt-0">
                    <div class="row align-items-center justify-content-lg-between">
                        <div class="col-lg-12">
                            <div class="copyright text-center text-xl-left text-muted">
                                &copy; 2021 sayurmurah.com | Design by <a href="https://www.creative-tim.com"
                                    class="font-weight-bold ml-1" target="_blank">Creative Tim</a>
                            </div>
                        </div>
                    </div>
                </footer>


            </div>
        </div>
        <!-- Argon Scripts -->
        <!-- Core -->
        <script src="{{ asset('style/assets/vendor/jquery/dist/jquery.min.js') }}"></script>
        <script src="{{ asset('style/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('style/assets/vendor/js-cookie/js.cookie.js') }}"></script>
        <script src="{{ asset('style/assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js') }}"></script>
        <script src="{{ asset('style/assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js') }}"></script>
        <!-- Optional JS -->
        <script src="{{ asset('style/assets/vendor/chart.js/dist/Chart.min.js') }}"></script>
        <script src="{{ asset('style/assets/vendor/chart.js/dist/Chart.extension.js') }}"></script>
        <!-- Argon JS -->
        <script src="{{ asset('style/assets/js/argon.js?v=1.2.0') }}"></script>
</body>

</html>
