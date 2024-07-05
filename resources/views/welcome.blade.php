@extends('layout.main')
@section('content')
    {{-- logo --}}
    <div class="d-flex flex-row col-12  h-100 align-items-center">
        <div class="col-lg-6 col-sm-12">
            <p class="h5 text-secondary fw-lighter" data-aos="fade-right" data-aos-duration="1500" data-aos-delay="100">
                Hi voks, selamat datang di website resmi</p>
            <h1 class="display-huge mt-3 mb-3 lh-1" data-aos="fade-left" data-aos-duration="1500" data-aos-delay="300">BEM
                Fakultas Vokasi</h1>
            <p class="h5 text-secondary fw-lighter" data-aos="fade-right" data-aos-duration="1500" data-aos-delay="500">
                Kabinet Gelora Karya</p>
        </div>
        <div class="col-lg-6 col-sm-12">
            <div class="floating" data-aos="fade-left" data-aos-duration="2000" data-aos-delay="700">
                <img src="{{ asset('assets/img/logo_bem.png') }}" alt="logo_bem" class="img-fluid">
            </div>
        </div>
    </div>

    {{-- perkenalan --}}
    <div class="row align-items-center">
        <div class="row mb-0">
            <div class="col-12 mb-5" data-aos="fade-right">
                <p class="display-4 text-center">BADAN EKSEKUTIF MAHASISWA</p>
                <p class="display-4 text-center">Fakultas Vokasi</p>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <img src="https://placehold.co/600x400" alt="">
            </div>
            <div class="col">
                <h3 class="pt-5">BEM FV UNAIR 2024</h3>
                <p class="text-secondary">Badan Eksekutif Mahasiswa (BEM) Fakultas Vokasi merupakan wadah mahasiswa
                    Fakultas Vokasi UNAIR dalam menyalurkan minat dan pengalamannya di bidang keorganisasian.
                    Berkedudukan di Fakultas Vokasi UNAIR, BEM FV berlandaskan pancasila dan menjunjung tinggi nilai tri
                    dharma perguruan tinggi.
                    <br>

                </p>
                <p class="text-secondary">Dengan semangat dalam mewujudkan konstribusi nyata, Badan Eksekutif Mahasiswa
                    Fakultas Vokasi Universitas Airlangga telah hadir sebagai wadah inspirasi dan aspirasi mahasiswa
                    Fakultas Vokasi Universitas Airlangga untuk terus bergerak maju dan berkolaborasi.

                    Kabinet Gelora Karya
                    Semangat Membara Wujudkan Kontribusi Nyata<br>

                </p>
            </div>
        </div>
    </div>


    <div class="row h-100 align-items-center">
        <div class="col-12 my-5 ">
            <h1 class="display-4 text-center">Video Perkenalan</h1>
        </div>
        <div class="row mb-5">
            <div class="col-12 text-center">
                <div class="video-container" data-aos="fade-up" data-aos-duration="2000">
                    <iframe width="560" height="315"
                        src="https://www.youtube.com/embed/Hl8YaRuEoCE?si=3F8unmBfof-obWOl" title="YouTube video player"
                        frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
@endsection
