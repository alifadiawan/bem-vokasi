@extends('layout2.main')
@section('content')
    <!-- Hero Section -->
    <section id="hero" class="hero section">

        <img id="background" src="{{ asset('ppp/img/bg-unair.jpg') }}" alt="" data-aos="fade-in">

        <div class="container" data-aos="fade-up" data-aos-delay="100">
            <div class="row justify-content-center align-items-center floating">
                <div class="col">
                    <p>Tentang</p>
                    <h2 class="">Kabinet Gelora Karya</h2>
                    <p style="text-wrap: balance;">Badan Eksekutif Mahasiswa Fakultas Vokasi Universitas Airlangga</p>
                    {{-- <a href="#about" class="btn-get-started">Get Started</a> --}}
                    <div class="row my-5 align-items-center">
                        <div class="col">
                            <h5>Anggota</h5>
                            <p>100</p>
                        </div>
                        <div class="col">
                            <h5>Program Kerja</h5>
                            <p>12</p>
                        </div>
                        <div class="col">
                            <h5>Badan Kepengurusan</h5>
                            <p>9</p>
                        </div>
                    </div>
                </div>
                <div class="col text-end">
                    <img src="{{ asset('assets/img/logo_bem.png') }}" alt="" class="img-fluid">
                </div>
            </div>

        </div>

    </section><!-- /Hero Section -->


    <!-- About Section -->
    <section id="about" class="about section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <span class="">BADAN EKSEKUTIF MAHASISWA<br></span>
            <h2 class="">BADAN EKSEKUTIF MAHASISWA<br></h2>
        </div><!-- End Section Title -->

        <div class="container">

            <div class="row gy-4 align-items-center">

                <div class="col-lg-6 order-1 order-lg-1" data-aos="fade-up" data-aos-delay="100">
                    <img src="https://placehold.co/600x400" class="img-fluid" alt="">
                </div>

                <div class="col-lg-6 order-2 order-lg-2 content" data-aos="fade-up" data-aos-delay="200">
                    <h3>BEM FV UNAIR</h3>
                    <p class="fst-italic">
                        BEM FV UB merupakan Badan Eksekutif Fakultas Vokasi Unversitas Brawijaya yang ingin memberikan
                        kebermanfaatan sebagai episentrum karya kolaborasi, yaitu karya progresif, dedikatif, aspiratif, dan
                        partisipatif.
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


    <section id="services" class="services section">
        <div class="container">
            <div class="row">

            <div class="col-lg-3">
                <h2 class="text-center my-5">Visi</h2>
                <p>
                    BEM Vokasi Universitas Airlangga sebagai poros
                    pergerakan dan pengembangan mahasiswa dalam
                    mendorong kolaborasi nyata yang inovatif guna
                    ewujudkan Fakultas Vokasi yang unggul dalam berkarya
                </p>
            </div>
            <div class="col-lg-9">
                <h2 class="text-center my-5">Misi</h2>
                <ul>
                    <li><strong>Pengembangan Organisasi</strong> <br> Membangun semangat dan ciptakan keharmonisan
                        internal BEM bernafaskan integritas dan
                        profesionalitas</li>
                    <li><strong>Transparancy Organisasi</strong> <br> Menggencarkan legalitas informasi dalam
                        mengembangkan reputasi Fakultas Vokasi Universitas
                        Airlangga secara strategis melalui sistem informasi
                        digital</li>
                    <li><strong>SINERGITAS ORMAWA</strong> <br> Menjalin sinergitas dengan Himpunan Mahasiswa, dan
                        Organisasi Kemahasiswaan lainnya di dalam lingkungan
                        UNAIR dalam upaya menciptakan iklim kolaboratif</li>
                    <li><strong>AKTUALISASI POTENSI</strong> <br> Menyalurkan wadah berekspresi kepada Mahasiswa
                        Fakultas Vokasi Universitas Airlangga guna meningkatkar
                        kemampuan individu serta mengasah minat dan bakat
                        dalam meraih prestasi</li>
                    <li><strong>AKTIF DAN BERDAMPAK</strong> <br> Berdedikasi tinggi dalam membangun mahasiswa dan
                        masyarakat melalui program kerja berbasis kebutuhan
                        mahasiswa, urgensi dan Tri Dharma Perguruan Tinggi.</li>
                </ul>
            </div>
        </div>

        </div>

    </section><!-- /Services Section -->
@endsection
