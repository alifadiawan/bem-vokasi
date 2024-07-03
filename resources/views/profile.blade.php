@extends('layout2.main')
@section('content')

    <!-- headline -->
    <section id="hero" class="hero section">

        <img id="background" src="{{ asset('ppp/img/profile-bg.webp') }}" alt="" data-aos="fade-down"
            data-aos-duration="1000">
        <img id="background" src="{{ asset('ppp/img/profile-bg.webp') }}" alt="" data-aos="fade-down"
            data-aos-duration="1000">

        <div class="container">
            <div class="row text-center justify-content-center align-items-center">
                <div class="col-lg-12 my-5" data-aos="fade-down" data-aos-duration="1000">
                    <h2 class="">Struktur Organisasi</h2>
                </div>
            </div>
            <div class="row text-center justify-content-center align-items-center">
                <div class="col-12 col-lg-6" data-aos="fade-left" data-aos-duration="1500" data-aos-delay="1200">
                    <h3 class="mt-2 fw-bold">Presiden</h3>
                    <img src="{{ asset('ppp/img/presbem.png') }}" alt="" class="img-fluid" style="height: 17rem">
                    <h5 class="mt-2">Karisma Windu Prabowo</h5>
                </div>
                <div class="col-12 col-lg-6" data-aos="fade-right" data-aos-duration="1500" data-aos-delay="1500">
                    <h3 class="mt-2 fw-bold">Wakil Presiden</h3>
                    <img src="{{ asset('ppp/img/wapres.png') }}" alt="" class="img-fluid" style="height: 17rem">
                    <h5 class="mt-2">Muhammad Hisyam Kamuna</h5>
                </div>
            </div>
        </div>

    </section>
    <!-- headline -->


    <!-- About Section -->
    <section id="about" class="about">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-down">
            <span class="" data-aos="fade-down" data-aos-duration="800" data-aos-delay="200">KEMENTRIAN<br></span>
            <h2 class="" data-aos="fade-down" data-aos-duration="800" data-aos-delay="100">KEMENTRIAN<br></h2>
        </div><!-- End Section Title -->

        <div class="container">

            <div class="row gy-4 justify-content-around text-center align-items-center">

                <div class="pb-5 col-12 col-lg-4" data-aos="zoom-in-up" id="card-id">
                    <a href="/profile/kementrian-sekben">
                        <img src="{{ asset('ppp/img/kementrian/SEKBEN.png') }}" alt="" data-aos="fade-left"
                            data-aos-duration="1500" class="img-fluid" style="max-width: 350px;">
                    </a>
                </div>
                <div class="pb-5 col-12 col-lg-4" data-aos="zoom-in-up" id="card-id">
                    <a href="/profile/kementrian-pembedayaan-perempuan">
                        <img src="{{ asset('ppp/img/kementrian/PPKG.png') }}" alt="" data-aos="fade-left"
                            data-aos-duration="1500" class="img-fluid" style="max-width: 350px;">
                    </a>
                </div>
                <div class="pb-5 col-12 col-lg-4" data-aos="zoom-in-up" id="card-id">
                    <a href="/profile/kementrian-media-kreatif">
                        <img src="{{ asset('ppp/img/kementrian/MEDKRAF.png') }}" alt="" data-aos="fade-left"
                            data-aos-duration="1500" class="img-fluid" style="max-width: 350px;">
                    </a>
                </div>
                <div class="pb-5 col-12 col-lg-4" data-aos="zoom-in-up" id="card-id">
                    <a href="/profile/kementrian-advokesma">
                        <img src="{{ asset('ppp/img/kementrian/ADVOKESMA.png') }}" alt="" data-aos="fade-left"
                            data-aos-duration="1500" class="img-fluid" style="max-width: 350px;">
                    </a>
                </div>
                <div class="pb-5 col-12 col-lg-4" data-aos="zoom-in-up" id="card-id">
                    <a href="/profile/kementrian-ilpres">
                        <img src="{{ asset('ppp/img/kementrian/ILPRES.png') }}" alt="" data-aos="fade-left"
                            data-aos-duration="1500" class="img-fluid" style="max-width: 350px;">
                    </a>
                </div>
                <div class="pb-5 col-12 col-lg-4" data-aos="zoom-in-up" id="card-id">
                    <a href="/profile/kementrian-sosial-politik">
                        <img src="{{ asset('ppp/img/kementrian/SOSPOL.png') }}" alt="" data-aos="fade-left"
                            data-aos-duration="1500" class="img-fluid" style="max-width: 350px;">
                    </a>
                </div>
                <div class="pb-5 col-12 col-lg-4" data-aos="zoom-in-up" id="card-id">
                    <a href="/profile/kementrian-luar-negeri">
                        <img src="{{ asset('ppp/img/kementrian/HUBLU.png') }}" alt="luar-negeri" data-aos="fade-left"
                            data-aos-duration="1500" class="img-fluid" style="max-width: 350px;">

                    </a>
                </div>

                <div class="pb-5 col-12 col-lg-4" data-aos="zoom-in-up" id="card-id">
                    <a href="/profile/kementrian-pengmaspar">
                        <img src="{{ asset('ppp/img/kementrian/PENGMAS.png') }}" alt="" data-aos="fade-left"
                            data-aos-duration="1500" class="img-fluid" style="max-width: 350px">
                    </a>
                </div>
                <div class="pb-5 col-12 col-lg-4"data-aos="zoom-in-up" id="card-id">
                    <a href="/profile/kementrian-ekonomi-kreatif">
                        <img src="{{ asset('ppp/img/kementrian/EKRAF.png') }}" alt="" data-aos="fade-left"
                            data-aos-duration="1500" class="img-fluid" style="max-width: 350px;">
                    </a>
                </div>
                <div class="pb-5 col-12 col-lg-4" data-aos="zoom-in-up" id="card-id">
                    <a href="/profile/kementrian-prada">
                        <img src="{{ asset('ppp/img/kementrian/PRADA.png') }}" alt="" data-aos="fade-left"
                            data-aos-duration="1500" class="img-fluid" style="max-width: 350px;">
                    </a>
                </div>
                <div class="pb-5 col-12 col-lg-4" data-aos="zoom-in-up" id="card-id">
                    <a href="/profile/kementrian-keagamaan">
                        <img src="{{ asset('ppp/img/kementrian/KEAGAMAAN.png') }}" alt="" data-aos="fade-left"
                            data-aos-duration="1500" class="img-fluid" style="max-width: 350px;">
                    </a>
                </div>



            </div>


        </div>

    </section><!-- /About Section -->


@section('page-css')
    <style>
        #card-id {
            transition: transform 0.3s ease-in-out;
        }

        #card-id:hover {
            transform: translateY(-10px);
        }
    </style>
@endsection

@endsection
