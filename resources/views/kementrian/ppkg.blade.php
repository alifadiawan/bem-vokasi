@extends('layout2.main')
@section('content')

    <!-- Headline -->
    <div class="w-100 overflow-hidden position-relative mt-5">
        <div class="container position-relative mt-5">
            <div class="row">
                <h3 class="text-center my-5">Tentang Kementrian <span class="fw-bold" style="color: #ff6800">PPKG</span></h3>
            </div>
            <div class="row justify-content-center">
                <div class="col-12 col-md-10 col-lg-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="col">
                                    <img src="{{ asset('ppp/img/kementrian/PPKG.png') }}" class="img-fluid" alt=""
                                        style="max-width: 12rem;">
                                </div>
                                <div class="col">
                                    <div class="content">
                                        <h1 class="fw-bold m-0 p-0">PPKG</h1>
                                        <h5 class="m-0 p-0">Pemberdayaan Perempuan dan Kesetaraan Gender</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- menteri --}}
                    <div class="card mt-3">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="col">
                                    <img src="{{ asset('ppp/img/kementrian/ppkg/Tyas_Annisa_Menteri.png') }}"
                                        class="img-fluid" alt="" style="max-height: 12rem;">
                                </div>
                                <div class="col">
                                    <div class="content">
                                        <h2 class="fw-bold m-0 p-0">Tyas Annisa</h2>
                                        <h5 class="m-0 p-0">Menteri PPKG</h5>
                                        <pc class="fw-light">D4 Fisioterapi 2022</pc>
                                    </div>
                                    {{-- <div class="icons">
                                        <a href=""><i class="bi bi-instagram"></i></a>
                                        <a href=""><i class="bi bi-linkedin"></i></a>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-12 col-md-10 col-lg-8">
                    <div class="card mt-3 mt-lg-0">
                        <div class="card-body px-lg-5 px-3">
                            <div class="col-12">
                                <h2 class="fw-bold">Pemberdayaan Perempuan dan Kesetaraan Gender</h2>
                                <p>Kementerian Pemberdayaan Perempuan dan Kesetraan Gender bertanggung
                                    jawab atas perlindungan, peningkatan kesadaran dan kewaspadaan terhadap
                                    kekerasan seksual. dan juga mengasah kemampuan berpikir kritis dalam
                                    pengawalan kesetaraan gender Kemudian mengemas literatur atau kajian dalam
                                    bentuk campaign melalui berbagai media yang strategis.
                                </p>
                            </div>

                            <hr>
                            <div class="col-12">
                                <img src="{{ asset('ppp/img/kementrian/ppkg/fotbar-ppkg.png') }}"
                                    class="img-fluid rounded-3" alt="">
                            </div>

                            <h3 class="fw-bold mb-0 mt-5">Dirjen</h3>

                            {{-- Dirjen --}}
                            <div class="row justify-content-around row-cols-1 row-cols-lg-3 gap-3 gap-lg-0">
                                <div class="col">
                                    <div class="card mt-3 h-100 w-100">
                                        <div class="card-body">
                                            <div class="d-flex flex-lg-column align-items-center">
                                                <div class="col">
                                                    <img src="{{ asset('ppp/img/kementrian/ppkg/Muhammad_Amirul.png') }}"
                                                        class="img-fluid" alt="" style="max-height: 8rem;">
                                                </div>
                                                <div class="col">
                                                    <div class="content">
                                                        <h5 class="fw-bold m-0 p-0">Muhammad Amirul Habib</h5>
                                                        <p class="m-0 p-0">DIRJEN Kesetaraan</p>
                                                        <pc class="fw-light">D4 Fisioterapi 2022</pc>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card mt-3 h-100 w-100">
                                        <div class="card-body pb-0 pt-3">
                                            <div class="d-flex flex-lg-column gap-2 align-items-center">
                                                <div class="col">
                                                    <img src="{{ asset('ppp/img/kementrian/ppkg/Zaimatul_Husniyah_R__Dirjen_Media_Informasi___edukasi-removebg-preview.png') }}"
                                                        class="img-fluid" alt="" style="max-height: 8rem;">
                                                </div>
                                                <div class="col">
                                                    <div class="content">
                                                        <h5 class="fw-bold m-0 p-0">ZAimatul Husniyah R</h5>
                                                        <p class="m-0 p-0">DIRJEN Media Informasi & Edukai</p>
                                                        <pc class="fw-light">D4 Pengobatan Tradisional 2022</pc>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card mt-3 h-100 w-100">
                                        <div class="card-body pb-0 pt-3">
                                            <div class="d-flex flex-lg-column gap-2 align-items-center">
                                                <div class="col">
                                                    <img src="{{ asset('ppp/img/kementrian/ppkg/M._Fajar_dirjen_pemberdayaan_-removebg-preview.png') }}"
                                                        class="img-fluid" alt="" style="max-height: 8rem;">
                                                </div>
                                                <div class="col">
                                                    <div class="content">
                                                        <h5 class="fw-bold m-0 p-0">Muhammad Fajar Firmansyah</h5>
                                                        <p class="m-0 p-0">DIRJEN Pemberdayaan</p>
                                                        <pc class="fw-light">D4 Tek. Radiologi Pencitraan 2022</pc>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <h3 class="fw-bold mb-0 mt-5">Staff</h3>

                            {{-- staff --}}
                            <div class="row justify-content-around row-cols-1 row-cols-lg-2">
                                <div class="col">
                                    <div class="card mt-3">
                                        <div class="card-body pb-0 pt-3">
                                            <div class="d-flex align-items-center">
                                                <div class="col">
                                                    <img src="{{ asset('ppp/img/kementrian/ppkg/Zanita Ardelia Athira_Staff Kesetaraan Gender.png') }}"
                                                        class="img-fluid" alt="" style="max-height: 8rem;">
                                                </div>
                                                <div class="col">
                                                    <div class="content">
                                                        <h5 class="fw-bold m-0 p-0">Zanita Ardelia Athira</h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card mt-3">
                                        <div class="card-body pb-0 pt-3">
                                            <div class="d-flex align-items-center">
                                                <div class="col">
                                                    <img src="{{ asset('ppp/img/kementrian/ppkg/sheryn_adelia_rahmah_staff_pemberdayaan-removebg-preview.png') }}"
                                                        class="img-fluid" alt="" style="max-height: 8rem;">
                                                </div>
                                                <div class="col">
                                                    <div class="content">
                                                        <h5 class="fw-bold m-0 p-0">Heryn Adelia Rahmah</h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card mt-3">
                                        <div class="card-body pb-0 pt-3">
                                            <div class="d-flex align-items-center">
                                                <div class="col">
                                                    <img src="{{ asset('ppp/img/kementrian/ppkg/Nayla_lisda_amalia__Staff_media_informasi_dan_edukasi-removebg-preview.png') }}"
                                                        class="img-fluid" alt="" style="max-height: 8rem;">
                                                </div>
                                                <div class="col">
                                                    <div class="content">
                                                        <h5 class="fw-bold m-0 p-0">Nayla lisda amalia</h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card mt-3">
                                        <div class="card-body pb-0 pt-3">
                                            <div class="d-flex align-items-center">
                                                <div class="col">
                                                    <img src="{{ asset('ppp/img/kementrian/ppkg/Kiki Nur Cahyani_Staff media informasi & edukasi.png') }}"
                                                        class="img-fluid" alt="" style="max-height: 8rem;">
                                                </div>
                                                <div class="col">
                                                    <div class="content">
                                                        <h5 class="fw-bold m-0 p-0">Zanita Ardelia Athira</h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card mt-3">
                                        <div class="card-body pb-0 pt-3">
                                            <div class="d-flex align-items-center">
                                                <div class="col">
                                                    <img src="{{ asset('ppp/img/kementrian/ppkg/Adinda Brilliant Putri Orlis_Staff Kesetaraan Gender.png') }}"
                                                        class="img-fluid" alt="" style="max-height: 8rem;">
                                                </div>
                                                <div class="col">
                                                    <div class="content">
                                                        <h5 class="fw-bold m-0 p-0">Dinda Brilliant Putri Orlis</h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card mt-3">
                                        <div class="card-body pb-0 pt-3">
                                            <div class="d-flex align-items-center">
                                                <div class="col">
                                                    <img src="{{ asset('ppp/img/kementrian/ppkg/Anggita Dwi Yuniati_Staff pemberdayaan).png') }}"
                                                        class="img-fluid" alt="" style="max-height: 8rem;">
                                                </div>
                                                <div class="col">
                                                    <div class="content">
                                                        <h5 class="fw-bold m-0 p-0">Anggita Dwi Yuniati</h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card mt-3">
                                        <div class="card-body pb-0 pt-3">
                                            <div class="d-flex align-items-center">
                                                <div class="col">
                                                    <img src="{{ asset('ppp/img/kementrian/ppkg/imroatussolikhah__staff_Pemberdayaan_-removebg-preview.png') }}"
                                                        class="img-fluid" alt="" style="max-height: 8rem;">
                                                </div>
                                                <div class="col">
                                                    <div class="content">
                                                        <h5 class="fw-bold m-0 p-0">Imroatus Solikhah</h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card mt-3">
                                        <div class="card-body pb-0 pt-3">
                                            <div class="d-flex align-items-center">
                                                <div class="col">
                                                    <img src="{{ asset('ppp/img/kementrian/ppkg/Aisyah R.R_Staff_.png') }}"
                                                        class="img-fluid" alt="" style="max-height: 8rem;">
                                                </div>
                                                <div class="col">
                                                    <div class="content">
                                                        <h5 class="fw-bold m-0 p-0">Aisyah R.R</h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card mt-3">
                                        <div class="card-body pb-0 pt-3">
                                            <div class="d-flex align-items-center">
                                                <div class="col">
                                                    <img src="{{ asset('ppp/img/kementrian/ppkg/Anugrah_Pebria_Rahmawati_Staff_media_informasi_dan_edukasi_-removebg-preview.png') }}"
                                                        class="img-fluid" alt="" style="max-height: 8rem;">
                                                </div>
                                                <div class="col">
                                                    <div class="content">
                                                        <h5 class="fw-bold m-0 p-0">Anugrah Pebria Rahmawati</h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card mt-3">
                                        <div class="card-body pb-0 pt-3">
                                            <div class="d-flex align-items-center">
                                                <div class="col">
                                                    <img src="{{ asset('ppp/img/kementrian/ppkg/Ayu Laksmi Dewanti K_Staff Kesetaraan.png') }}"
                                                        class="img-fluid" alt="" style="max-height: 8rem;">
                                                </div>
                                                <div class="col">
                                                    <div class="content">
                                                        <h5 class="fw-bold m-0 p-0">Ayu Laksmi Dewanti</h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card mt-3">
                                        <div class="card-body pb-0 pt-3">
                                            <div class="d-flex align-items-center">
                                                <div class="col">
                                                    <img src="{{ asset('ppp/img/kementrian/ppkg/Ainur Risa_staff pemberdayaan ppkg.png') }}"
                                                        class="img-fluid" alt="" style="max-height: 8rem;">
                                                </div>
                                                <div class="col">
                                                    <div class="content">
                                                        <h5 class="fw-bold m-0 p-0">Ainur Risa</h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@section('page-css')
    <style>
        .header .branding {
            background-color: rgba(var(--default-color-rgb), 0.05);
            background-color: #242424;
        }
    </style>
@endsection

@endsection
