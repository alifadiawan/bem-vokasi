@extends('layout2.main')
@section('content')

    <!-- headline -->
    <section id="hero" class="hero section">

        <img id="background" src="{{ asset('ppp/img/profile-bg.webp') }}" alt="" data-aos="fade-down"
            data-aos-duration="1000">

        <div class="container">
            <div class="row text-center justify-content-center align-items-center">
                <div class="col-lg-12 my-5">
                    <h2 class="">Struktur Organisasi</h2>
                </div>
            </div>
            <div class="row text-center justify-content-center align-items-center">
                <div class="col-12 col-lg-6">
                    <img src="{{ asset('ppp/img/logo_bem.png') }}" alt="" data-aos="fade-left"
                        data-aos-duration="1500" data-aos-delay="1200" class="img-fluid" style="height: 17rem">
                    <h4>Presiden</h4>
                </div>
                <div class="col-12 col-lg-6">
                    <img src="{{ asset('ppp/img/logo_bem.png') }}" alt="" data-aos="fade-left"
                        data-aos-duration="1500" data-aos-delay="1200" class="img-fluid" style="height: 17rem">
                    <h4>Wakil Presiden</h4>
                </div>
            </div>
        </div>

    </section>
    <!-- headline -->


    <!-- About Section -->
    <section id="about" class="about section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-down">
            <span class="" data-aos="fade-down" data-aos-duration="800" data-aos-delay="200">KEMENTRIAN<br></span>
            <h2 class="" data-aos="fade-down" data-aos-duration="800" data-aos-delay="100">KEMENTRIAN<br></h2>
        </div><!-- End Section Title -->

        <div class="container">

            <div class="row gy-4 text-center align-items-center">

                <div class="pb-5 col-12 col-lg-4" data-aos="zoom-in-up" id="card-id">
                    <a href="/kementrian-sekben">
                        <img src="{{ asset('ppp/img/kementrian/SEKBEN.png') }}" alt="" data-aos="fade-left"
                            data-aos-duration="1500" class="img-fluid" >
                        {{-- <P class="my-3" data-aos="fade-left" data-aos-duration="1500">KEMENTRIAN SEKBEN</P> --}}
                    </a>
                </div>
                <div class="pb-5 col-12 col-lg-4" data-aos="zoom-in-up" id="card-id">
                    <a href="/kementrian-pembedayaan-perempuan">
                        <img src="{{ asset('ppp/img/kementrian/PPKG.png') }}" alt="" data-aos="fade-left"
                            data-aos-duration="1500" class="img-fluid" >
                        {{-- <p data-aos="fade-left" data-aos-duration="1500">KEMENTRIAN PEMBERDAYAAN PEREMPUAN</p> --}}
                    </a>
                </div>
                <div class="pb-5 col-12 col-lg-4" data-aos="zoom-in-up" id="card-id">
                    <a href="/kementrian-media-kreatif">
                        <img src="{{ asset('ppp/img/kementrian/MEDKRAF.png') }}" alt="" data-aos="fade-left"
                            data-aos-duration="1500" class="img-fluid" >
                        {{-- <P data-aos="fade-left" data-aos-duration="1500">KEMENTRIAN MEDIKRAF</P> --}}
                    </a>
                </div>
                <div class="pb-5 col-12 col-lg-4" data-aos="zoom-in-up" id="card-id">
                    <a href="/kementrian-advokesma">
                        <img src="{{ asset('ppp/img/kementrian/ADVOKESMA.png') }}" alt="" data-aos="fade-left"
                            data-aos-duration="1500" class="img-fluid" >
                        {{-- <P data-aos="fade-left" data-aos-duration="1500">KEMENTRIAN ADVOKESMA</P> --}}
                    </a>
                </div>
                <div class="pb-5 col-12 col-lg-4" data-aos="zoom-in-up" id="card-id">
                    <a href="/kementrian-ilpres">
                        <img src="{{ asset('ppp/img/kementrian/ILPRES.png') }}" alt="" data-aos="fade-left"
                            data-aos-duration="1500" class="img-fluid" >
                        {{-- <P data-aos="fade-left" data-aos-duration="1500">KEMENTRIAN ILPRES</P> --}}
                    </a>
                </div>
                <div class="pb-5 col-12 col-lg-4" data-aos="zoom-in-up" id="card-id">
                    <a href="/kementrian-sosial-politik">
                        <img src="{{ asset('ppp/img/kementrian/SOSPOL.png') }}" alt="" data-aos="fade-left"
                            data-aos-duration="1500" class="img-fluid" >
                        {{-- <P data-aos="fade-left" data-aos-duration="1500">KEMENTRIAN SOSPOL</P> --}}
                    </a>
                </div>
                <div class="pb-5 col-12 col-lg-4" data-aos="zoom-in-up" id="card-id">
                    <a href="/kementrian-luar-negeri">
                        <img src="{{ asset('ppp/img/kementrian/PENGMAS.png') }}" alt="" data-aos="fade-left"
                            data-aos-duration="1500" class="img-fluid" >
                        <p>KEMENTRIAN LUAR NEGERI</p>
                    </a>
                </div>
                <div class="pb-5 col-12 col-lg-4" data-aos="zoom-in-up" id="card-id">
                    <a href="/kementrian-sosial-politik">
                        <img src="{{ asset('ppp/img/kementrian/PENGMAS.png') }}" alt="" data-aos="fade-left"
                            data-aos-duration="1500" class="img-fluid" >
                        <p>KEMENTRIAN DALAM NEGERI</p>
                    </a>
                </div>
                <div class="pb-5 col-12 col-lg-4" data-aos="zoom-in-up" id="card-id">
                    <a href="/kementrian-pengmaspar">
                        <img src="{{ asset('ppp/img/kementrian/PENGMAS.png') }}" alt="" data-aos="fade-left"
                            data-aos-duration="1500" class="img-fluid">
                        {{-- <P data-aos="fade-left" data-aos-duration="1500">KEMENTRIAN PENGMASPAR</P> --}}
                    </a>
                </div>
                <div class="pb-5 col-12 col-lg-4"data-aos="zoom-in-up" id="card-id">
                    <a href="/kementrian-ekonomi-kreatif">
                        <img src="{{ asset('ppp/img/kementrian/EKRAF.png') }}" alt="" data-aos="fade-left"
                            data-aos-duration="1500" class="img-fluid" >
                        {{-- <P data-aos="fade-left" data-aos-duration="1500">KEMENTRIAN EKRAF</P> --}}
                    </a>
                </div>
                <div class="pb-5 col-12 col-lg-4" data-aos="zoom-in-up" id="card-id">
                    <a href="">
                        <img src="{{ asset('ppp/img/kementrian/PRADA.png') }}" alt="" data-aos="fade-left"
                            data-aos-duration="1500" class="img-fluid" >
                        {{-- <P data-aos="fade-left" data-aos-duration="1500">KEMENTRIAN PRADA</P> --}}
                    </a>
                </div>
                <div class="pb-5 col-12 col-lg-4" data-aos="zoom-in-up" id="card-id">
                    <a href="">
                        <img src="{{ asset('ppp/img/kementrian/KEAGAMAAN.png') }}" alt="" data-aos="fade-left"
                            data-aos-duration="1500" class="img-fluid">
                        {{-- <P data-aos="fade-left" data-aos-duration="1500">KEMENTRIAN KEAGAMAAN</P> --}}
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
