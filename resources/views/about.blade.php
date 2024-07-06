@extends('layout2.main')
@section('content')
    <!-- Hero Section -->
    <section id="hero" class="hero section px-3 px-lg-0">

        <img id="background" src="{{ asset('ppp/img/bg-unair.jpg') }}" alt="" data-aos="fade-in">

        <div class="container" data-aos="fade-up" data-aos-delay="100">
            <div class="row justify-content-center align-items-center floating">
                <div class="col">
                    <p style="font-size: 18px">Tentang</p>
                    <h2 class="">Kabinet Gelora Karya</h2>
                    <p class="fw-bold" style="text-wrap: balance;">Badan Eksekutif Mahasiswa Fakultas Vokasi Universitas
                        Airlangga</p>
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
                    <img id="logo-hover" src="{{ asset('ppp/img/logo_bem.png') }}" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </section>


    <!-- perkenalan logo Section -->
    <section id="about" class="about section px-3 px-lg-0" style="background-color: rgb(236, 236, 236)">

        <div class="container section-title" data-aos="fade-up">
            <span class="">Filosofi Logo<br></span>
            <h2 class="">Filosofi Logo<br></h2>
        </div>

        <div class="container">

            <div class="row gap-3 gy-4 align-items-center">

                <div class="col-12 col-lg order-1 order-lg-1 content" data-aos="fade-up" data-aos-delay="500">
                    <h3>GARIS LENGKUNG</h3>
                    <p class="fst-italic">
                        Garis lengkung melambangkan persatuan,
                        harmonisasi organisasi dan kedinamisan dalam
                        berorganisasi untuk mewadahi Mahasiswa Vokasi
                        dalam menggapai karya-karya dan prestasi serta
                        aktif dalam berorganisasi
                    </p>
                    <h3>WARNA MERAH</h3>
                    <p class="fst-italic">
                        Warna merah bermakna melambangkan keberanian
                        dan hasrat yang tinggi untuk menjadi penggerak
                        membawa perubahan
                    </p>
                    <h3>WARNA ORANGE</h3>
                    <p class="fst-italic">
                        Warna orange bermakna melambangkan
                        pengetahuan, optimisme, dan kejayaan untuk
                        mewujudkan suatu inovasi yang membawa sebuah
                        prestasi
                    </p>
                </div>

                <div class="col-12 col-lg order-1 order-lg-1" data-aos="fade-up" data-aos-delay="100">
                    <img src="{{ asset('ppp/img/logo_bem.png') }}" class="img-fluid" alt="logo_bem">
                </div>

                <div class="col-12 col-lg order-2 order-lg-2 content" data-aos="fade-up" data-aos-delay="500">

                    <h3>NAGA</h3>
                    <p class="fst-italic">
                        Naga melambangkan kekuatan, keberanian, dan
                        keberuntungan dalam manifestasi kreativitas
                        Mahasiswa Fakultas Vokasi dalam berkarya
                    </p>
                    <h3>SAYAP KANAN</h3>
                    <p class="fst-italic">
                        Tiga helai Sayap di Sisi kanan merupakan Tri Dharma
                        Perguruan Tinggi yaitu Pendidikan, Penelitian, dan
                        Pengabdian kepada masyarakat
                    </p>
                    <h3>SAYAP KIRI</h3>
                    <p class="fst-italic">
                        Tiga helai Sayap di Sisi kiri melambangkan 3
                        departemen Fakultas Vokasi universitas Airlangga
                        yaitu Departemen Bisnis, Departemen Teknik, dan
                        Departemen Kesehatan
                    </p>
                </div>

            </div>

        </div>

    </section>


    <section id="services" class="services section px-3 px-lg-0">
        <div class="container">
            <div class="row gap-5 gap-lg-0">
                <div class="container section-title" data-aos="fade-up">
                    <span class="">Visi & Misi<br></span>
                    <h2 class="">Visi & Misi<br></h2>
                </div>
                <div class="col-lg-3">
                    <div class="card p-2">
                        <div class="card-body">
                            <h2 id="card-popup" class="text-center my-5">Visi</h2>
                            <p>
                                BEM Fakultas Vokasi hadir dengan visi sebagai pelopor reformasi untuk
                                mengembangkan mahasiswa vokasi yang progresif, inovatif, dan unggul dalam berkarya. Kami
                                berkomitmen untuk menghadirkan program-program yang tidak hanya inspiratif, tetapi juga
                                berdampak nyata bagi seluruh civitas akademika.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="card">
                        <div class="card-body">
                            <h2 id="card-popup" class="text-center my-5">Misi</h2>
                            <ul>
                                <li><strong>HARMONISASI ORGANISASI</strong> <br> Menciptakan iklim organisasi yang harmonis
                                    serta
                                    berdampak aktif bagi BEM Fakultas Vokasi UNAIR</li>
                                <li><strong>Transparancy Organisasi</strong> <br> Menggencarkan legalitas informasi dalam
                                    mengembangkan reputasi Fakultas Vokasi Universitas
                                    Airlangga secara strategis melalui sistem informasi
                                    digital</li>
                                <li><strong>SINERGITAS MAHASISWA</strong> <br> Menjalin Sinergitas dengan Himpunan Mahasiswa
                                    dan Lembaga kemahasiswaan di dalam lingkungan
                                    Fakultas Vokasi UNAIR</li>
                                <li><strong>AKTUALISASI KARYA</strong> <br> Memberi wadah berekspresi kepada Mahasiswa
                                    Fakultas Vokasi guna membangun kapabilitas diri
                                    dan mengasah minat bakat dalam menggapai prestasi</li>
                                <li><strong>PERLUASAN INFORMASI</strong> <br> BMemperkuat reputasi profesional dan
                                    legimitasi
                                    informasi strategis melalui sistem informasi digital</li>
                                <li><strong>PROAKTIF DAN PROGRESIF</strong> <br> Berdedikasi tinggi dalam memfasilitasi
                                    mahasiswa
                                    dan masyarakat dengan menciptakan program kerja
                                    sesui kebutuhan dan Tri Dharma Perguruan Tinggi</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </section><!-- /Services Section -->


@section('page-css')
    <style>
        #logo-hover:hover {}

        #card-popup {
            background-color: #ff6800;
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
