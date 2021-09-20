<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>sayurmurah.com</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('template/assets/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('template/assets/img/apple-touch-icon.png" rel="apple-touch-icon') }}">



    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Montserrat:300,400,500,700"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('template/assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('template/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('template/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('template/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('template/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('template/assets/css/style.css') }}" rel="stylesheet">
</head>

<body>
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center">
        <div class="container d-flex justify-content-between">

            <div class="logo">
                <!-- Uncomment below if you prefer to use an text logo -->
                <!-- <h1><a href="index.html">NewBiz</a></h1> -->
                <a href="">
                    <img src="{{ asset('template/assets/img/logo.png') }}" alt="" class="img">
                </a>
            </div>

            <nav id="navbar" class="navbar">
                <ul>
                    {{-- form search --}}
                    <form class="form-inline" style="margin-right: 550px; border:#317C1E ">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Pencarian" aria-label="cari"
                                aria-describedby="basic-addon1">
                            <div class="input-group-prepend" style="color: #317C1E">
                                <div class="btn btn-outline-success"> <img
                                        src="{{ asset('template/assets/img/search.svg') }}" alt=""></div>
                                {{-- <span class="input-group-text" id="basic-addon1"> <img src="{{ asset('template/assets/img/search.svg') }}" style="color:#317C1E" alt="cari"></span> --}}
                            </div>
                        </div>
                    </form>
                    {{-- navbar --}}
                    <div class="btn"><i class="bi bi-cart"
                            style="color: #317C1E; font-size:x-larges;"></i></div>
                    <div class="btn"><i class="bi bi-bell"
                            style="color: #317C1E; font-size:x-larges;"></i></div>
                    <a href="registrasi">
                        <button type="button" class="btn btn-outline-success">Daftar</button>
                    </a>
                    <a href="admin">
                        <button type="button" class="btn btn-success">Masuk</button>
                    </a>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->
        </div>
    </header><!-- #header -->