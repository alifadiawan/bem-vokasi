@extends('layout2.main')
@section('content')

    <!-- Hero Section -->
    <section id="hero" class="hero section">

        <img id="background" src="{{ asset('ppp/img/bg-unair.jpg') }}" alt="" data-aos="fade-down"
            data-aos-duration="1000">

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
                            data-aos="fade-right" data-aos-duration="1500" data-aos-delay="1500" class="img-fluid floating">
                    </div>
                </div>
            </div>
        </div>

    </section><!-- /Hero Section -->

    <!-- About Section -->
    <section id="about" class="about section">

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
                        Dengan semangat dalam mewujudkan konstribusi nyata, Badan Eksekutif Mahasiswa Fakultas Vokasi
                        Universitas Airlangga telah hadir sebagai wadah inspirasi dan aspirasi mahasiswa Fakultas Vokasi
                        Universitas Airlangga untuk terus bergerak maju dan berkolaborasi.

                        Kabinet Cakrabinaya
                        Semangat Membara Wujudkan Kontribusi Nyata
                    </p>
                    <p class="fst-italic">
                        Menjadi lebih dari sekedar pilar sentral bagi rumah mahasiswa Fakultas Vokasi UB, dalam
                        mengembangkan sumber daya yang proaktif, membangun poros pengembangan bagi mahasiswa yang inklusif,
                        memberikan pelayanan optimal melalui eskalasi advokasi, serta membangun ruang pasrtisipasi dan
                        aktif.</p>
                    {{-- <ul>
                    <li><i class="bi bi-check-circle"></i> <span>Ullamco laboris nisi ut aliquip ex ea commodo
                            consequat.</span></li>
                    <li><i class="bi bi-check-circle"></i> <span>Duis aute irure dolor in reprehenderit in
                            voluptate velit.</span></li>
                    <li><i class="bi bi-check-circle"></i> <span>Ullamco laboris nisi ut aliquip ex ea commodo
                            consequat. Duis aute irure dolor in reprehenderit in voluptate trideta
                            storacalaperda mastiro dolore eu fugiat nulla pariatur.</span></li>
                </ul> --}}
                    {{-- <a href="#" class="read-more"><span>Read More</span><i
                        class="bi bi-arrow-right"></i></a> --}}
                </div>

            </div>

        </div>

    </section><!-- /About Section -->


    <!-- Services Section -->
    <section id="services" class="services section">

        <h2 class="text-center my-5">Company Profile BEM</h2>
        <div class="row mb-5">
            <div class="col-12 text-center">
                <div class="video-container" data-aos="fade-up" data-aos-duration="2000">
                    <iframe id="video" src="https://www.youtube.com/embed/Hl8YaRuEoCE?si=3F8unmBfof-obWOl"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </section><!-- /Services Section -->







@section('page-css')
    <style>
        #logo-bem {
            max-width: 30rem;
        }

        #small-logo {
            max-width: 150px;
            position: absolute;
            right: 33rem;
            bottom: -2rem;
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
            animation-name: floating;
            animation-duration: 3s;
            animation-iteration-count: infinite;
            animation-timing-function: ease-in-out;
            margin-left: 30px;
            margin-top: 5px;
        }

        @keyframes floating {
            0% {
                transform: translate(0, 0px);
            }

            50% {
                transform: translate(0, 15px);
            }

            100% {
                transform: translate(0, -0px);
            }
        }
    </style>
@endsection

@endsection
