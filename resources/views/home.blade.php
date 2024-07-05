@extends('layout2.main')
@section('content')

    <!-- Hero Section -->
    <section id="hero" class="hero section">

        <img id="background" src="{{ asset('ppp/img/bg-unair.jpg') }}" alt="">

        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-12 col-lg">
                    <p data-aos="fade-left" data-aos-duration="1500" data-aos-delay="300">Hi voks, selamat datang di website
                        resmi</p>
                    <h2 data-aos="fade-right" data-aos-duration="1500" data-aos-delay="600">BEM Fakultas Vokasi</h2>
                    <p data-aos="fade-left" data-aos-duration="1500" data-aos-delay="800">Kabinet Gelora Karya</p>
                    {{-- <a href="#about" class="btn-get-started">Get Started</a> --}}
                </div>
                <div class="col text-center">
                    <div class="image">
                        <img id="logo-bem" src="{{ asset('ppp/img/logo_bem.png') }}" alt="" data-aos="fade-left"
                            data-aos-duration="1500" data-aos-delay="1200" class="img-fluid floating">
                        <img src="{{ asset('ppp/img/vokasi-sigap.png') }}" alt="" id="small-logo"
                            data-aos="fade-right" data-aos-duration="1500" data-aos-delay="1400" class="img-fluid floating">
                    </div>
                </div>
            </div>
        </div>

    </section><!-- /Hero Section -->

    <!-- About Section -->
    <section id="about" class="about section mt-5 mb-0">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-down">
            <span class="" data-aos="fade-down" data-aos-duration="800" data-aos-delay="200">BADAN EKSEKUTIF
                MAHASISWA<br></span>
            <h2 class="" data-aos="fade-down" data-aos-duration="800" data-aos-delay="100">BADAN EKSEKUTIF
                MAHASISWA<br></h2>
        </div><!-- End Section Title -->

        <div class="container">

            <div class="row gy-4 align-items-center">

                <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100" data-aos-duration="800">
                    <img src="https://placehold.co/600x400" class="img-fluid rounded-3" alt="">
                </div>

                <div class="col-lg-6 order-2 order-lg-1 content" data-aos="fade-up" data-aos-delay="200"
                    data-aos-duration="800">
                    <h3>BEM FV UNAIR</h3>
                    <p class="fst-italic">
                        Dengan bangga kami perkenalkan wajah-wajah baru dari BEM Fakultas Vokasi 2024.

                        Tahun ini, BEM Fakultas Vokasi hadir dengan visi sebagai pelopor reformasi untuk mengembangkan
                        mahasiswa vokasi yang progresif, inovatif, dan unggul dalam berkarya. Kami berkomitmen untuk
                        menghadirkan program-program yang tidak hanya inspiratif, tetapi juga berdampak nyata bagi seluruh
                        civitas akademika.
                        <br>
                        <br>
                        Kabinet Gelora Karya
                        <br>
                        Melangkah bersama, wujudkan karya nyata!
                    </p>
                </div>

            </div>

        </div>

    </section><!-- /About Section -->


    <!-- Services Section -->
    <section id="services" class="services section">

        <h2 class="text-center my-5">Company Profile BEM</h2>
        <div class="row justify-content-center">
            <div class="col-6" data-aos="fade-up" data-aos-duration="2000">
                <iframe id="video" src="https://www.youtube.com/embed/SFxs6S3BEys?si=pxFhwMNja7XC2lL9"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
        </div>
        {{-- <div class="row mb-5">
            <div class="col-12 text-center">
                <div class="video-container" data-aos="fade-up" data-aos-duration="2000">
                </div>
            </div>
        </div> --}}
    </section>
    <!-- /Services Section -->







@section('page-css')
    <style>
        iframe {
            aspect-ratio: 16 / 9;
            height: auto;
            width: 100%;
        }

        #logo-bem {
            max-width: 30rem;
            animation: floating-variant-1 3s infinite ease-in-out;
        }

        #small-logo {
            max-width: 150px;
            position: absolute;
            right: 33rem;
            bottom: -2rem;
            animation: floating-variant-2 5s infinite ease-in-out;
        }

        @media all and (min-width: 480px) and (max-width: 768px) {
            #logo-bem {
                width: 20rem;
            }

            #small-logo {
                right: 23rem;
                bottom: -2rem;
            }
        }

        @media (max-width: 480px) {
            #logo-bem {
                width: 18rem;
            }

            #small-logo {
                width: 120px;
                right: 15rem;
                bottom: -6rem;
            }
        }


        .video-container {
            position: relative;
            padding-bottom: 56.25%;
            /* 16:9 aspect ratio */
            height: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            border-radius: 20px;
            overflow: hidden;
        }

        .video-container iframe {
            position: absolute;
            border-radius: 20px;
            width: 50%;
            height: 50%;
            top: 25%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        @media (max-width: 480px) {
            .video-container iframe {
                border-radius: 20px;
                width: 85%;
                height: 95%;
                top: 50%;
                /* left: 50%; */
            }
        }

        .floating {
            margin-left: 30px;
            margin-top: 5px;
        }

        @keyframes floating-variant-1 {
            0% {
                transform: translate(0, 0px);
            }

            50% {
                transform: translate(0, 15px);
            }

            100% {
                transform: translate(0, 0px);
            }
        }

        @keyframes floating-variant-2 {
            0% {
                transform: translate(0, 0px);
            }

            25% {
                transform: translate(0, 10px);
            }

            50% {
                transform: translate(0, -10px);
            }

            75% {
                transform: translate(0, 10px);
            }

            100% {
                transform: translate(0, 0px);
            }
        }
    </style>
@endsection

@endsection
