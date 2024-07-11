@extends('layout2.main')
@section('content')

    <!-- Headline -->
    <div class="w-100 overflow-hidden position-relative mt-5">
        <div class="container position-relative mt-5">
            <div class="row">
                <h3 class="text-center my-5">Tentang Kementrian <span class="fw-bold" style="color: #ff6800">KEAGAMAAN</span></h3>
            </div>
            <div class="row justify-content-center">

                <div class="col-12 col-md col-lg-4">

                    {{-- logo --}}
                    <div class="card">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-6">
                                    <img src="{{ asset('ppp/img/kementrian/KEAGAMAAN.png') }}" class="img-fluid"
                                        alt="" style="max-width: 12rem;">
                                </div>
                                <div class="col-6">
                                    <div class="content">
                                        <h3 class="fw-bold m-0 p-0">KEAGAMAAN</h3>
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
                                    <img src="{{ asset('ppp/img/kementrian/KEAGAMAAN/DINNISA NURSYAHFITRI_MENTERI KEAGAMAAN.png') }}"
                                        class="img-fluid" alt="" style="max-height: 12rem;">
                                </div>
                                <div class="col">
                                    <div class="content">
                                        <h2 class="fw-bold m-0 p-0">DINNISA NURSYAHFITRI</h2>
                                        <h5 class="m-0 p-0">Menteri KEAGAMAAN </h5>
                                        <pc class="fw-light">D4 Tek. Radiologi Pencitraan 2022</pc>
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


                <div class="col-12 col-md-8 col-lg-8">
                    <div class="card mt-3 mt-lg-0">
                        <div class="card-body px-lg-5 px-3">
                            <div class="col-12">
                                <h2 class="fw-bold">Keagamaan</h2>
                                <p>Kementerian Keagamaan bertanggung jawab atas menyediakan fasilitas kegiatan
                                    keagamaan bagi mahasiswa Fakultas Vokasi, meningkatkan kesadaran dalam beramal
                                    kebaikan bagi mahasiswa Fakultas Vokasi, dan menjaga kerukunan antar umat
                                    beragama mahasiswa Fakultas Vokasi.
                                </p>
                            </div>
                            <hr>
                            <div class="col-12">
                                <img src="{{ asset('ppp/img/kementrian/KEAGAMAAN/fotbar-keagamaan.jpg') }}" class="img-fluid rounded-3" alt="">
                            </div>


                            <h3 class="fw-bold mb-1 mt-5">Dirjen</h3>


                            <div class="row justify-content-around row-cols-1 row-cols-lg-3">
                                <div class="col">
                                    <div class="card mt-3 h-100">
                                        <div class="card-body">
                                            <div class="d-flex flex-lg-column gap-2 gap-lg-0 align-items-center">
                                                <img src="{{ asset('ppp/img/kementrian/KEAGAMAAN/Agnesia Citraputri Antoneta_Dirjen Aspirasi Rohani.png') }}"
                                                    class=" img-fluid" alt="" style="max-height: 8rem;">
                                                <div class="content">
                                                    <h5 class="fw-bold m-0 p-0">Agnesia Citraputri Antoneta</h5>
                                                    <p class="m-0 p-0">DIRJEN Aspirasi Rohani</p>
                                                    <pc class="fw-light">D4 Destinasi Pariwisata 2021</pc>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card mt-3 h-100">
                                        <div class="card-body">
                                            <div class="d-flex flex-lg-column gap-2 gap-lg-0 align-items-center">
                                                <img src="{{ asset('ppp/img/kementrian/KEAGAMAAN/Agustina Dewinta Puteri_Dirjen Pengembangan Rohani.png') }}"
                                                    class="img-fluid" alt="" style="max-height: 8rem;">
                                                <div class="content">
                                                    <h5 class="fw-bold m-0 p-0">Agustina Dewinta Puteri</h5>
                                                    <p class="m-0 p-0">DIRJEN Pengembangan Rohani</p>
                                                    <pc class="fw-light">D4 Tek. Radiologi Pencitraan 2022</pc>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card mt-3 h-100">
                                        <div class="card-body">
                                            <div class="d-flex flex-lg-column gap-2 gap-lg-0 align-items-center">
                                                <img src="{{ asset('ppp/img/kementrian/KEAGAMAAN/Renny Mariatul Latifah_Dirjen Spiritual.png') }}"
                                                    class="img-fluid" alt="" style="max-height: 8rem;">
                                                <div class="content">
                                                    <h5 class="fw-bold m-0 p-0">Renny Mariatul Latifah</h5>
                                                    <p class="m-0 p-0">DIRJEN Spiritual</p>
                                                    <pc class="fw-light">D3 Manajemen Pemasaran 2023</pc>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <h3 class="fw-bold mb-1 mt-5">Staff</h3>

                            <div class="row justify-content-around row-cols-1 row-cols-lg-2 my-3">

                                <div class="col">
                                    <div class="card mt-3">
                                        <div class="card-body pb-0 pt-3">
                                            <div class="d-flex gap-2 align-items-center">
                                                <div class="col">
                                                    <img src="{{ asset('ppp/img/kementrian/KEAGAMAAN/Athifa_Ibtisama_Fawwazah_Staff_Pengembangan_Rohani-removebg-preview.png') }}"
                                                        class="img-fluid" alt="" style="max-height: 8rem;">
                                                </div>
                                                <div class="col">
                                                    <div class="content">
                                                        <h5 class="fw-bold m-0 p-0">Athifa Ibtisama Fawwazah</h5>
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
                                                    <img src="{{ asset('ppp/img/kementrian/KEAGAMAAN/Muhammad Catra Hanif _Azmi_staff pengembangan rohani.png') }}"
                                                        class="img-fluid" alt="" style="max-height: 8rem;">
                                                </div>
                                                <div class="col">
                                                    <div class="content">
                                                        <h5 class="fw-bold m-0 p-0">Muhammad Catra Hanif Azmi</h5>
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
                                                    <img src="{{ asset('ppp/img/kementrian/KEAGAMAAN/Indah Tasya Kurina_Staff Aspirasi Rohani.png') }}"
                                                        class="img-fluid" alt="" style="max-height: 8rem;">
                                                </div>
                                                <div class="col">
                                                    <div class="content">
                                                        <h5 class="fw-bold m-0 p-0">Indah Tasya Kurina</h5>
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
                                                    <img src="{{ asset('ppp/img/kementrian/KEAGAMAAN/Levina Kirana Armilda_ Staff Pengembangan Rohani.png') }}"
                                                        class="img-fluid" alt="" style="max-height: 8rem;">
                                                </div>
                                                <div class="col">
                                                    <div class="content">
                                                        <h5 class="fw-bold m-0 p-0">Levina Kirana Armilda</h5>
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
                                                    <img src="{{ asset('ppp/img/kementrian/KEAGAMAAN/Intan Eka Kusuma Wardani_Staff Spiritual.png') }}"
                                                        class="img-fluid" alt="" style="max-height: 8rem;">
                                                </div>
                                                <div class="col">
                                                    <div class="content">
                                                        <h5 class="fw-bold m-0 p-0">Intan Eka Kusuma Wardani</h5>
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
                                                    <img src="{{ asset('ppp/img/kementrian/KEAGAMAAN/HIQNI_SABILATUZZAIDAH_STAFF_Pengembangan_rohani-removebg-preview.png') }}"
                                                        class="img-fluid" alt="" style="max-height: 8rem;">
                                                </div>
                                                <div class="col">
                                                    <div class="content">
                                                        <h5 class="fw-bold m-0 p-0">HIQNI SABILATUZZAIDAH</h5>
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
                                                    <img src="{{ asset('ppp/img/kementrian/KEAGAMAAN/ELSA_WIDYANTARI_AZIZAH_Staff_Spritual_-removebg-preview.png') }}"
                                                        class="img-fluid" alt="" style="max-height: 8rem;">
                                                </div>
                                                <div class="col">
                                                    <div class="content">
                                                        <h5 class="fw-bold m-0 p-0">ELSA WIDYANTARI AZIZAH</h5>
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
                                                    <img src="{{ asset('ppp/img/kementrian/KEAGAMAAN/THEORA SERVANKA_STAFF ASPIRASI ROHANI.png') }}"
                                                        class="img-fluid" alt="" style="max-height: 8rem;">
                                                </div>
                                                <div class="col">
                                                    <div class="content">
                                                        <h5 class="fw-bold m-0 p-0">HEORA SERVANKA</h5>
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
                                                    <img src="{{ asset('ppp/img/kementrian/KEAGAMAAN/AYU ALIFIA ANGGRAINI_STAFF SPIRITUAL_.png') }}"
                                                        class="img-fluid" alt="" style="max-height: 8rem;">
                                                </div>
                                                <div class="col">
                                                    <div class="content">
                                                        <h5 class="fw-bold m-0 p-0">AYU ALIFIA ANGGRAINI</h5>
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
                                                    <img src="{{ asset('ppp/img/kementrian/KEAGAMAAN/NAJWA A_SAL AURORA_STAFF SPIRITUAL .png') }}"
                                                        class="img-fluid" alt="" style="max-height: 8rem;">
                                                </div>
                                                <div class="col">
                                                    <div class="content">
                                                        <h5 class="fw-bold m-0 p-0">/NAJWA A SAL AURORA</h5>
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
                                                    <img src="{{ asset('ppp/img/kementrian/KEAGAMAAN/Septi Anggia Asifa Putri_Staff Aspirasi Rohani.png') }}"
                                                        class="img-fluid" alt="" style="max-height: 8rem;">
                                                </div>
                                                <div class="col">
                                                    <div class="content">
                                                        <h5 class="fw-bold m-0 p-0">Septi Anggia Asifa Putri</h5>
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
