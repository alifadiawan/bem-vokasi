@extends('layout2.main')
@section('content')

    <!-- Headline -->
    <div class="w-100 overflow-hidden position-relative mt-5">
        <div class="container position-relative mt-5">
            <div class="row">
                <h3 class="text-center my-5">Tentang Kementrian <span style="color: #ff6800">KEAGAMAAN</span></h3>
            </div>
            <div class="row justify-content-center">

                <div class="col-12 col-md col-lg-4">

                    {{-- logo --}}
                    <div class="card">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-6">
                                    <img src="{{ asset('ppp/img/kementrian/KEAGAMAAN.png') }}" class="img-fluid" alt=""
                                        style="max-width: 12rem;">
                                </div>
                                <div class="col-6">
                                    <div class="content">
                                        <h3 class="fw-bold m-0 p-0">KEAGAMAAN</h3>
                                        {{-- <p class="m-0 p-0">Advokasi dan Kesejahteraan Mahasiswa</p> --}}
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
                                    <div class="icons">
                                        <a href=""><i class="bi bi-instagram"></i></a>
                                        <a href=""><i class="bi bi-linkedin"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- dirjen --}}
                    <div class="d-flex gap-1">

                        {{-- <div class="card mt-3">
                            <div class="card-body">
                                <div class="d-flex flex-column align-items-center">
                                    <div class="col">
                                        <img src="{{ asset('ppp/img/kementrian/ppkg/Tyas_Annisa_Menteri.png') }}"
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
                        <div class="card mt-3">
                            <div class="card-body">
                                <div class="d-flex flex-column align-items-center">
                                    <div class="col">
                                        <img src="{{ asset('ppp/img/kementrian/ppkg/Tyas_Annisa_Menteri.png') }}"
                                            class="img-fluid" alt="" style="max-height: 8rem;">
                                    </div>
                                    <div class="col">
                                        <div class="content">
                                            <h5 class="fw-bold m-0 p-0">Za'imatul Husniyah Rahmawati</h5>
                                            <p class="m-0 p-0">Menteri PPKG</p>
                                            <p class="fw-light">D4 Fisioterapi 2022</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> --}}


                    </div>
                </div>


                <div class="col-12 col-md-8 col-lg-8">
                    <div class="card">
                        <div class="card-body px-5">
                            <div class="col-12">
                                <h2 class="fw-bold">Kementrian <br> Keagamaan</h2>
                                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Magni eius quisquam iste amet
                                    officiis officia, quae fugit beatae aliquid minima laborum exercitationem maiores
                                    aperiam,
                                    provident a libero aspernatur perspiciatis quod! Lorem ipsum dolor sit amet consectetur
                                    adipisicing elit. Officiis voluptates sint illum neque mollitia harum accusamus soluta,
                                    dignissimos doloremque pariatur vel saepe dicta aliquam blanditiis! Sint facere animi
                                    necessitatibus consectetur.
                                    lorel Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti culpa sed
                                    officiis autem, fuga harum eveniet consequatur, quia pariatur modi nisi repellat, at ea
                                    quisquam similique. Cupiditate quam autem aspernatur.
                                </p>
                            </div>
                            <hr>
                            <div class="col-12">
                                <img src="{{ asset('ppp/img/bg-unair.jpg') }}" class="img-fluid rounded-3" alt="">
                            </div>

                            
                            <h3 class="text-center fw-bold mt-5 mb-4">Dirjen KEAGAMAAN</h3>
                            

                            <div class="row justify-content-around row-cols-3">

                                <div class="col">
                                    <div class="card mt-3">
                                        <div class="card-body ">
                                            <div class="d-flex flex-column gap-2 align-items-center">
                                                <div class="col">
                                                    <img src="{{ asset('ppp/img/kementrian/KEAGAMAAN/Agnesia Citraputri Antoneta_Dirjen Aspirasi Rohani.png') }}"
                                                        class="img-fluid" alt="" style="max-height: 8rem;">
                                                </div>
                                                <div class="col">
                                                    <div class="content">
                                                        <h5 class="fw-bold m-0 p-0">Agnesia Citraputri Antoneta</h5>
                                                        <p class="m-0 p-0">DIRJEN Aspirasi Rohani</p>
                                                        <pc class="fw-light">D4 Destinasi Pariwisata 2021</pc>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card mt-3 ">
                                        <div class="card-body">
                                            <div class="d-flex flex-column gap-2 align-items-center">
                                                <div class="col">
                                                    <img src="{{ asset('ppp/img/kementrian/KEAGAMAAN/Agustina Dewinta Puteri_Dirjen Pengembangan Rohani.png') }}"
                                                        class="img-fluid" alt="" style="max-height: 8rem;">
                                                </div>
                                                <div class="col">
                                                    <div class="content">
                                                        <h5 class="fw-bold m-0 p-0">Agustina Dewinta Puteri</h5>
                                                        <p class="m-0 p-0">DIRJEN Pengembangan Rohani</p>
                                                        <pc class="fw-light">D4 Tek. Radiologi Pencitraan 2022</pc>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card mt-3 ">
                                        <div class="card-body">
                                            <div class="d-flex flex-column gap-2 align-items-center">
                                                <div class="col">
                                                    <img src="{{ asset('ppp/img/kementrian/KEAGAMAAN/Renny Mariatul Latifah_Dirjen Spiritual.png') }}"
                                                        class="img-fluid" alt="" style="max-height: 8rem;">
                                                </div>
                                                <div class="col">
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

                            </div>

                            
                            <h3 class="text-center fw-bold mt-5 mb-4">Staff</h3>
                            

                            <div class="row justify-content-around row-cols-2 my-3">

                                <div class="col">
                                    <div class="card mt-3">
                                        <div class="card-body m-0 pb-0 pt-3">
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
                                        <div class="card-body m-0 pb-0 pt-3">
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
                                        <div class="card-body m-0 pb-0 pt-3">
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
                                        <div class="card-body m-0 pb-0 pt-3">
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
                                        <div class="card-body m-0 pb-0 pt-3">
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
                                        <div class="card-body m-0 pb-0 pt-3">
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
                                        <div class="card-body m-0 pb-0 pt-3">
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
                                        <div class="card-body m-0 pb-0 pt-3">
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
                                        <div class="card-body m-0 pb-0 pt-3">
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
                                        <div class="card-body m-0 pb-0 pt-3">
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
                                        <div class="card-body m-0 pb-0 pt-3">
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
    </div>

@section('page-css')
    <style>
        .header .branding {
            background-color: rgba(var(--default-color-rgb), 0.05);
            background-color: #242424;
        }

        .card {
            border: none;
        }

        .card-body {
            border-radius: 8px;
            box-shadow: 0px 0px 15px 3px rgba(0, 0, 0, 0.1);
        }

        /* body{
                                background-color: rgb(47, 47, 47);
                            } */
    </style>
@endsection

@endsection
