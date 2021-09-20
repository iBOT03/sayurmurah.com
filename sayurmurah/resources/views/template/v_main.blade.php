@extends('template.v_header')
    {{-- carousel --}}
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            {{-- <li data-target="#carouselExampleIndicators" data-slide-to="2"></li> --}}
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="{{ asset('template/assets/img/diskon.png') }}" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="{{ asset('template/assets/img/brand.png') }}" alt="Second slide">
            </div>
            {{-- <div class="carousel-item">
                <img class="d-block w-100" src="{{ asset('template/assets/img/diskon.png') }}" alt="Third slide">
            </div> --}}
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            {{-- <span class="sr-only">Previous</span> --}}
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            {{-- <span class="sr-only">Next</span> --}}
        </a>
    </div>

    <main id="main">
        <!-- ======= Produk Section  ======= -->
        <section id="about">
            <div class="container" data-aos="fade-up">
                <header class="section-header">
                    <h3>Pilih Daerah Pengantaran</h3>
                    <p>Masukan daerah pengantaran kamu </p>
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Pencarian" aria-label="cari"
                            style="margin-bottom: 30px" aria-describedby="basic-addon1">
                        <div class="input-group-prepend" style="color: #317C1E;">
                            <div class="btn btn-outline-success"> <img
                                    src="{{ asset('template/assets/img/search.svg') }}" alt=""></div>
                            {{-- <span class="input-group-text" id="basic-addon1"> <img src="{{ asset('template/assets/img/search.svg') }}" style="color:#317C1E" alt="cari"></span> --}}
                        </div>
                    </div>
                </header>

                {{-- card produk --}}

                <div class="row about-container">
                    <div class="row">  
                        @yield('produk')                      
                    </div>
                </div>
            </div>

        </section><!-- End Produk Section -->

        <!-- ======= Diskon Produk Section ======= -->
        <section id="abaout" class="section-bg">
            <div class="container" data-aos="fade-up">

                <header class="section-header">
                    <h3>Kejar Promo Diskon</h3>
                    <p>Ayo buruan beli sebelum promonya habis</p>
                </header>

                <div class="row about-container">
                    <div class="row">
                        @yield('disproduk')
                    </div>
                </div>
            </div>
        </section><!-- End Services Section -->

        <!-- ======= Why Us Section ======= -->
        <section id="why-us">
            <div class="container" data-aos="fade-up">
                <header class="section-header">
                    <h3>Produk Terlaris</h3>
                    <p>Pilih produk terlaris akhir-akhir ini</p>
                </header>

                <div class="row row-eq-height justify-content-center">
                    @yield('terlaris')
                </div>
            </div>
        </section><!-- End Why Us Section -->
    </main><!-- End #main -->
@extends('template.v_footer')