@extends('layout2.main')
@section('content')

    <!-- Headline -->
    <div class="w-100 overflow-hidden position-relative mt-5">
        <div class="container position-relative mt-5">
            <div class="row">
                <h3 class="text-center my-5">Tentang Kementrian <span class="fw-bold" style="color: #ff6800">MEDKRAF</span>
                </h3>
            </div>
            <div class="row justify-content-center">

                <div class="col-12 col-md col-lg-4">

                    {{-- logo --}}
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="col">
                                    <img src="{{ asset('ppp/img/kementrian/MEDKRAF.png') }}" class="img-fluid" alt=""
                                        style="max-width: 12rem;">
                                </div>
                                <div class="col">
                                    <div class="content">
                                        <h1 class="fw-bold m-0 p-0">MEDKRAF</h1>
                                        <h5 class="m-0 p-0">Media Kreatif dan Digitalisasi</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- sususan kabinet --}}

                    {{-- menteri --}}
                    <div class="card mt-3">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="col">
                                    <img src="{{ asset('ppp/img/kementrian/medkraf/andi_akhsanul.png') }}" class="img-fluid"
                                        alt="" style="max-height: 12rem;">
                                </div>
                                <div class="col">
                                    <div class="content">
                                        <h2 class="fw-bold m-0 p-0">Andi Akhsanul</h2>
                                        <h5 class="m-0 p-0">Menteri MEDKRAF</h5>
                                        <pc class="fw-light">D4 Teknik Infomatika 2022</pc>
                                    </div>
                                    <div class="icons">
                                        <a href=""><i class="bi bi-instagram"></i></a>
                                        <a href=""><i class="bi bi-linkedin"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-8">
                    <div class="card">
                        <div class="card-body px-lg-5 px-3">
                            <div class="col-12 mt-3">
                                <h2 class="fw-bold">Media kreatif dan Digitalisasi</h2>
                                <p>Kementrian Medkraf merupakan kementrian yang bertugas untuk menyampaikan informasi
                                    mengenai
                                    berbagai kegiatan yang ada di BEM Fakultas Vokasi Unair dan sebagai jembatan komunikasi
                                    antara BEM dengan masyarakat luas melalui media resmi serta membangun citra positif
                                    melalui desain dan dokumentasi.
                                </p>
                            </div>

                            <div class="col-12">
                                <img src="{{ asset('ppp/img/kementrian/medkraf/fotbar.png') }}" class="img-fluid rounded-3"
                                    alt="">
                            </div>


                            <h3 class="fw-bold mb-4 mt-5">Dirjen MEDKRAF</h3>


                            <div class="row row-cols-3">
                                <div class="col">
                                    <div class="card mt-3 h-100">
                                        <div class="card-body pb-0 pt-3">
                                            <div class="d-flex flex-column align-items-center">
                                                <div class="col">
                                                    <img src="{{ asset('ppp/img/kementrian/MEDKRAF/Ladyyy.png') }}"
                                                        class="img-fluid" alt="" style="max-height: 8rem;">
                                                </div>
                                                <div class="col">
                                                    <div class="content">
                                                        <h5 class="fw-bold m-0 p-0">Ladya Farras Zhafira</h5>
                                                        <p class="m-0 p-0">DIRJEN Produksi Media Kreatif</p>
                                                        <pc class="fw-light">D4 Tek. Laboratorium Medik 2022</pc>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card mt-3 h-100">
                                        <div class="card-body pb-0 pt-3">
                                            <div class="d-flex flex-column gap-2 align-items-center">
                                                <div class="col">
                                                    <img src="{{ asset('ppp/img/kementrian/MEDKRAF/Shofie_Cilia.png') }}"
                                                        class="img-fluid" alt="" style="max-height: 8rem;">
                                                </div>
                                                <div class="col">
                                                    <div class="content">
                                                        <h5 class="fw-bold m-0 p-0">Shofie Cilia Hermawan</h5>
                                                        <p class="m-0 p-0">DIRJEN Pengembangan</p>
                                                        <pc class="fw-light">D4 Teknik Informatika 2022</pc>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card mt-3 h-100">
                                        <div class="card-body pb-0 pt-3 ">
                                            <div class="d-flex flex-column align-items-center">
                                                <div class="col">
                                                    <img src="{{ asset('ppp/img/kementrian/MEDKRAF/SYIFANI_AULIA-removebg-preview.png') }}"
                                                        class="img-fluid" alt="" style="max-height: 8rem;">
                                                </div>
                                                <div class="col">
                                                    <div class="content">
                                                        <h5 class="fw-bold m-0 p-0">SYIFANI AULIA</h5>
                                                        <p class="m-0 p-0">DIRJEN Perancangan dan Strategi Informasi</p>
                                                        <pc class="fw-light">D3 Akuntansi 2022</pc>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </div>


                            <h3 class="fw-bold mb-4 mt-5">Staff</h3>


                            <div class="row row-cols-1 row-cols-lg-2 justify-content-around">
                                <div class="col">
                                    <div class="card mt-3">
                                        <div class="card-body pb-0 pt-3">
                                            <div class="d-flex gap-2 align-items-center">
                                                <div class="col">
                                                    <img src="{{ asset('ppp/img/kementrian/MEDKRAF/BINTANG ADI CHANDRA_STAFF Perancangan dan Strategi Informasi.png
                                                                                                                                                                                                                                                                                                                                                                                                                                ') }}"
                                                        class="img-fluid" alt="" style="max-height: 8rem;">
                                                </div>
                                                <div class="col">
                                                    <div class="content">
                                                        <h5 class="fw-bold m-0 p-0">BINTANG ADI CHANDRA</h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card mt-3">
                                        <div class="card-body pb-0 pt-3">
                                            <div class="d-flex gap-2 align-items-center">
                                                <div class="col">
                                                    <img src="{{ asset('ppp/img/kementrian/MEDKRAF/.png
                                                                                                                                                                                                                                                                                                                                                                                                                                ') }}"
                                                        class="img-fluid" alt="" style="max-height: 8rem;">
                                                </div>
                                                <div class="col">
                                                    <div class="content">
                                                        <h5 class="fw-bold m-0 p-0">Wafi Husna Salsabila</h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card mt-3">
                                        <div class="card-body pb-0 pt-3">
                                            <div class="d-flex gap-2 align-items-center">
                                                <div class="col">
                                                    <img src="{{ asset('ppp/img/kementrian/MEDKRAF/M. DICKY CHANDRA WAHYU SAPUTRA_STAFF Perancangan _dan Strategi Informasi.png
                                                                                                                                                                                                                                                                                                                                                                                                                                ') }}"
                                                        class="img-fluid" alt="" style="max-height: 8rem;">
                                                </div>
                                                <div class="col">
                                                    <div class="content">
                                                        <h5 class="fw-bold m-0 p-0">M. DICKY CHANDRA WAHYU SAPUTRA</h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card mt-3">
                                        <div class="card-body pb-0 pt-3">
                                            <div class="d-flex gap-2 align-items-center">
                                                <div class="col">
                                                    <img src="{{ asset('ppp/img/kementrian/MEDKRAF/HASLINDA NOOR LAILATUL JANAH_Staff Perancangan _dan Strategi Informasi.png
                                                                                                                                                                                                                                                                                                                                                                                                                                ') }}"
                                                        class="img-fluid" alt="" style="max-height: 8rem;">
                                                </div>
                                                <div class="col">
                                                    <div class="content">
                                                        <h5 class="fw-bold m-0 p-0">HASLINDA NOOR LAILATUL JANAH</h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card mt-3">
                                        <div class="card-body pb-0 pt-3">
                                            <div class="d-flex gap-2 align-items-center">
                                                <div class="col">
                                                    <img src="{{ asset('ppp/img/kementrian/MEDKRAF/MUHAMMAD IRFAN FAZLI_STAFF PRODUKSI.png
                                                                                                                                                                                                                                                                                                                                                                                                                                ') }}"
                                                        class="img-fluid" alt="" style="max-height: 8rem;">
                                                </div>
                                                <div class="col">
                                                    <div class="content">
                                                        <h5 class="fw-bold m-0 p-0">MUHAMMAD IRFAN FAZLI</h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card mt-3">
                                        <div class="card-body pb-0 pt-3">
                                            <div class="d-flex gap-2 align-items-center">
                                                <div class="col">
                                                    <img src="{{ asset('ppp/img/kementrian/MEDKRAF/Faza Ulul Ilma_Staf produksi.png
                                                                                                                                                                                                                                                                                                                                                                                                                                ') }}"
                                                        class="img-fluid" alt="" style="max-height: 8rem;">
                                                </div>
                                                <div class="col">
                                                    <div class="content">
                                                        <h5 class="fw-bold m-0 p-0">Faza Ulul Ilma</h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card mt-3">
                                        <div class="card-body pb-0 pt-3">
                                            <div class="d-flex gap-2 align-items-center">
                                                <div class="col">
                                                    <img src="{{ asset('ppp/img/kementrian/MEDKRAF/Achmad Yulianto Saputra_Staff Produksi.png
                                                                                                                                                                                                                                                                                                                                                                                                                                ') }}"
                                                        class="img-fluid" alt="" style="max-height: 8rem;">
                                                </div>
                                                <div class="col">
                                                    <div class="content">
                                                        <h5 class="fw-bold m-0 p-0">Achmad Yulianto Saputra</h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card mt-3">
                                        <div class="card-body pb-0 pt-3">
                                            <div class="d-flex gap-2 align-items-center">
                                                <div class="col">
                                                    <img src="{{ asset('ppp/img/kementrian/MEDKRAF/DWI PUTRI AMELIA_STAFF perancangan dan strategy informasi.png
                                                                                                                                                                                                                                                                                                                                                                                                                                ') }}"
                                                        class="img-fluid" alt="" style="max-height: 8rem;">
                                                </div>
                                                <div class="col">
                                                    <div class="content">
                                                        <h5 class="fw-bold m-0 p-0">DWI PUTRI AMELIA</h5>
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
