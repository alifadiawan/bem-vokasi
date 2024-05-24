@extends('layout2.main')
@section('content')

    <!-- headline -->
    <section id="hero" class="hero section">

        <img id="background" src="{{ asset('ppp/img/profile-bg.webp') }}" alt="" data-aos="fade-down"
            data-aos-duration="1000">

        <div class="container">
            <div class="row text-center justify-content-center align-items-center">
                <div class="col-lg-12">
                    <h2 class="">Struktur Organisasi</h2>
                </div>
            </div>
            <div class="row text-center justify-content-center align-items-center">
                <div class="col-12 col-lg-6">
                    <img src="{{ asset('ppp/img/logo_bem.png') }}" alt="" data-aos="fade-left"
                        data-aos-duration="1500" data-aos-delay="1200" class="img-fluid" style="height: 17rem">
                    <h4>Ketua</h4>
                </div>
                <div class="col-12 col-lg-6">
                    <img src="{{ asset('ppp/img/logo_bem.png') }}" alt="" data-aos="fade-left"
                        data-aos-duration="1500" data-aos-delay="1200" class="img-fluid" style="height: 17rem">
                    <h4>Wakil Ketua</h4>
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
                        <img src="{{ asset('ppp/img/kementrian/L-sekben.png') }}" alt="" data-aos="fade-left"
                            data-aos-duration="1500" class="img-fluid" style="height: 15rem">
                        {{-- <P>KEMENTRIAN SEKBEN</P> --}}
                    </a>
                </div>
                <div class="pb-5 col-12 col-lg-4" data-aos="zoom-in-up" id="card-id">
                    <a href="/kementrian-pembedayaan-perempuan">
                        <img src="{{ asset('ppp/img/kementrian/L-pp.png') }}" alt="" data-aos="fade-left"
                            data-aos-duration="1500" class="img-fluid" style="height: 15rem">
                        {{-- <P>KEMENTRIAN PEMBERDAYAAN PEREMPUAN</P> --}}
                    </a>
                </div>
                <div class="pb-5 col-12 col-lg-4" data-aos="zoom-in-up" id="card-id">
                    <a href="/kementrian-media-kreatif">
                        <img src="{{ asset('ppp/img/kementrian/L-medkraf.png') }}" alt="" data-aos="fade-left"
                            data-aos-duration="1500" class="img-fluid" style="height: 15rem">
                        {{-- <P>KEMENTRIAN MEDIKRAF</P> --}}
                    </a>
                </div>
                <div class="pb-5 col-12 col-lg-4" data-aos="zoom-in-up" id="card-id">
                    <a href="/kementrian-advokesma">
                        <img src="{{ asset('ppp/img/kementrian/L-advo.png') }}" alt="" data-aos="fade-left"
                            data-aos-duration="1500" class="img-fluid" style="height: 15rem">
                        {{-- <P>KEMENTRIAN ADVOKESMA</P> --}}
                    </a>
                </div>
                <div class="pb-5 col-12 col-lg-4" data-aos="zoom-in-up" id="card-id">
                    <a href="/kementrian-ilpres">
                        <img src="{{ asset('ppp/img/kementrian/L-ilpres.png') }}" alt="" data-aos="fade-left"
                            data-aos-duration="1500" class="img-fluid" style="height: 15rem">
                        {{-- <P>KEMENTRIAN ILPRES</P> --}}
                    </a>
                </div>
                <div class="pb-5 col-12 col-lg-4" data-aos="zoom-in-up" id="card-id">
                    <a href="/kementrian-sosial-politik">
                        <img src="{{ asset('ppp/img/kementrian/L-sospol.png') }}" alt="" data-aos="fade-left"
                            data-aos-duration="1500" class="img-fluid" style="height: 15rem">
                        {{-- <P>KEMENTRIAN SOSPOL</P> --}}
                    </a>
                </div>
                <div class="pb-5 col-12 col-lg-4" data-aos="zoom-in-up" id="card-id">
                    <a href="/kementrian-luar-negeri">
                        <img src="{{ asset('ppp/img/kementrian/L-lugri.png') }}" alt="" data-aos="fade-left"
                            data-aos-duration="1500" class="img-fluid" style="height: 15rem">
                        {{-- <P>KEMENTRIAN LUAR NEGERI</P> --}}
                    </a>
                </div>
                <div class="pb-5 col-12 col-lg-4" data-aos="zoom-in-up" id="card-id">
                    <a href="/kementrian-sosial-politik">
                        <img src="{{ asset('ppp/img/kementrian/L-dagri.png') }}" alt="" data-aos="fade-left"
                            data-aos-duration="1500" class="img-fluid" style="height: 15rem">
                        {{-- <P>KEMENTRIAN DALAM NEGERI</P> --}}
                    </a>
                </div>
                <div class="pb-5 col-12 col-lg-4" data-aos="zoom-in-up" id="card-id">
                    <a href="/kementrian-pengmaspar">
                        <img src="{{ asset('ppp/img/kementrian/L-pengmas.png') }}" alt="" data-aos="fade-left"
                            data-aos-duration="1500" class="img-fluid" style="height: 15rem">
                        {{-- <P>KEMENTRIAN PENGMASPAR</P> --}}
                    </a>
                </div>
                <div class="pb-5 col-12 col-lg-4" id="card-id">
                    <a href="/kementrian-ekonomi-kreatif">
                        <img src="{{ asset('ppp/img/kementrian/L-ekraf.png') }}" alt="" data-aos="fade-left"
                            data-aos-duration="1500" class="img-fluid" style="height: 15rem">
                        {{-- <P>KEMENTRIAN EKRAF</P> --}}
                    </a>
                </div>
                <div class="pb-5 col-12 col-lg-4" id="card-id">
                    <a href="">
                        <img src="{{ asset('ppp/img/kementrian/L-prada.png') }}" alt="" data-aos="fade-left"
                            data-aos-duration="1500" class="img-fluid" style="height: 15rem">
                        {{-- <P>KEMENTRIAN PRADA</P> --}}
                    </a>
                </div>
                <div class="pb-5 col-12 col-lg-4" id="card-id">
                    <a href="">
                        <img src="{{ asset('ppp/img/kementrian/L-keagamaan.png') }}" alt="" data-aos="fade-left"
                            data-aos-duration="1500" class="img-fluid" style="height: 15rem">
                        {{-- <P>KEMENTRIAN KEAGAMAAN</P> --}}
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
