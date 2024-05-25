@extends('layout2.main')
@section('content')
    <!-- Hero Section -->
    <section id="hero" class="hero section">

        <img id="background" src="{{ asset('ppp/img/bg-unair.jpg') }}" alt="" data-aos="fade-in">

        <div class="container" data-aos="fade-up" data-aos-delay="100">
            <div class="row justify-content-center align-items-center floating">
                <div class="col">
                    <p style="font-size: 18px">Tentang</p>
                    <h2 class="">Kabinet Gelora Karya</h2>
                    <p class="fw-bold" style="text-wrap: balance;">Badan Eksekutif Mahasiswa Fakultas Vokasi Universitas
                        Airlangga</p>
                    {{-- <a href="#about" class="btn-get-started">Get Started</a> --}}
                    <div class="row my-5 align-items-center">
                        <div class="col-lg-2 col-6">
                            <h5 class="fw-bold">Anggota</h5>
                            <p>100+</p>
                        </div>
                        <div class="col-lg-3 col-6">
                            <h5 class="fw-bold">Program Kerja</h5>
                            <p>12+</p>
                        </div>
                        <div class="col-lg-5 col-12 mt-5 mt-lg-0">
                            <h5 class="fw-bold">Badan Kepengurusan</h5>
                            <p>9</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg text-end">
                    <img src="{{ asset('ppp/img/logo_bem.png') }}" alt="" class="img-fluid">
                </div>
            </div>

        </div>

    </section><!-- /Hero Section -->


    <!-- perkenalan logo Section -->
    <section id="about" class="about section" style="background-color: rgb(236, 236, 236)">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <span class="">Filosofi Logo<br></span>
            <h2 class="">Filosofi Logo<br></h2>
        </div><!-- End Section Title -->

        <div class="container">

            <div class="row gap-3 gy-4 align-items-center">

                <div class="col-12 col-lg order-1 order-lg-1" data-aos="fade-up" data-aos-delay="100">
                    <img src="{{ asset('ppp/img/logo_bem.png') }}" class="img-fluid" alt="logo_bem">
                </div>

                <div class="col-12 col-lg order-2 order-lg-2 content" data-aos="fade-up" data-aos-delay="200">
                    <h3>BEM FV UNAIR</h3>
                    <p class="fst-italic">
                        BEM FV UB merupakan Badan Eksekutif Fakultas Vokasi Unversitas Brawijaya yang ingin memberikan
                        kebermanfaatan sebagai episentrum karya kolaborasi, yaitu karya progresif, dedikatif, aspiratif, dan
                        partisipatif.
                    </p>
                    <h3>BEM FV UNAIR</h3>
                    <p class="fst-italic">
                        BEM FV UB merupakan Badan Eksekutif Fakultas Vokasi Unversitas Brawijaya yang ingin memberikan
                        kebermanfaatan sebagai episentrum karya kolaborasi, yaitu karya progresif, dedikatif, aspiratif, dan
                        partisipatif.
                    </p>
                    <h3>BEM FV UNAIR</h3>
                    <p class="fst-italic">
                        BEM FV UB merupakan Badan Eksekutif Fakultas Vokasi Unversitas Brawijaya yang ingin memberikan
                        kebermanfaatan sebagai episentrum karya kolaborasi, yaitu karya progresif, dedikatif, aspiratif, dan
                        partisipatif.
                    </p>
                </div>

            </div>

        </div>

    </section><!-- /perkenalan logo Section -->


    <section id="services" class="services section">
        <div class="container">
            <div class="row">

                <div class="col-lg-3">
                    <div class="card p-2">
                        <div class="card-body">
                            <h2 id="card-popup" class="text-center my-5">Visi</h2>
                            <p>
                                BEM Vokasi Universitas Airlangga sebagai poros
                                pergerakan dan pengembangan mahasiswa dalam
                                mendorong kolaborasi nyata yang inovatif guna
                                ewujudkan Fakultas Vokasi yang unggul dalam berkarya
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="card">
                        <div class="card-body">
                            <h2 id="card-popup" class="text-center my-5">Misi</h2>
                            <ul>
                                <li><strong>Pengembangan Organisasi</strong> <br> Membangun semangat dan ciptakan
                                    keharmonisan
                                    internal BEM bernafaskan integritas dan
                                    profesionalitas</li>
                                <li><strong>Transparancy Organisasi</strong> <br> Menggencarkan legalitas informasi dalam
                                    mengembangkan reputasi Fakultas Vokasi Universitas
                                    Airlangga secara strategis melalui sistem informasi
                                    digital</li>
                                <li><strong>SINERGITAS ORMAWA</strong> <br> Menjalin sinergitas dengan Himpunan Mahasiswa,
                                    dan
                                    Organisasi Kemahasiswaan lainnya di dalam lingkungan
                                    UNAIR dalam upaya menciptakan iklim kolaboratif</li>
                                <li><strong>AKTUALISASI POTENSI</strong> <br> Menyalurkan wadah berekspresi kepada Mahasiswa
                                    Fakultas Vokasi Universitas Airlangga guna meningkatkar
                                    kemampuan individu serta mengasah minat dan bakat
                                    dalam meraih prestasi</li>
                                <li><strong>AKTIF DAN BERDAMPAK</strong> <br> Berdedikasi tinggi dalam membangun mahasiswa
                                    dan
                                    masyarakat melalui program kerja berbasis kebutuhan
                                    mahasiswa, urgensi dan Tri Dharma Perguruan Tinggi.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </section><!-- /Services Section -->


@section('page-css')
    <style>

        #card-popup {
            background-color: rgb(255, 8, 0);
            color: white;
            position: absolute;
            width: 150px;
            padding-left: 4px;
            padding-right: 4px;
            border-radius: 10px;
            margin: 0px;
            top: -70px;
            left: 50%;
            transform: translateX(-50%);
        }
    </style>
@endsection

@endsection
