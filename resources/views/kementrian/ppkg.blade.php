@extends('layout2.main')
@section('content')
    <!-- Headline -->
    <div class="w-100 overflow-hidden position-relative mt-5">
        <div class="container position-relative mt-5">
            <div class="row">
                <h3 class="text-center my-5">Tentang Kementrian <span class="fw-bold" style="color: #ff6800">PPKG</span>
                </h3>
            </div>
            <div class="row justify-content-center">

                <div class="col">

                    {{-- logo --}}
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex  align-items-center">
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

                    {{-- sususan kabinet --}}

                    {{-- menteri --}}
                    <div class="card mt-3">
                        <div class="card-body">
                            <div class="d-flex  align-items-center">
                                <div class="col">
                                    <img src="{{ asset('ppp/img/kementrian/PPKG/Tyas_Annisa_Menteri.png') }}"
                                        class="img-fluid" alt="" style="max-height: 12rem;">
                                </div>
                                <div class="col">
                                    <div class="content">
                                        <h2 class="fw-bold m-0 p-0">Tyas Annisa Menteri</h2>
                                        <h5 class="m-0 p-0">Menteri PPKG</h5>
                                        <pc class="fw-light">D4 Fisioterapi 2022</pc>
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
                    <div class="d-flex  gap-1">

                        {{-- <div class="card mt-3">
                        <div class="card-body">
                            <div class="d-flex  flex-column align-items-center">
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
                            <div class="d-flex  flex-column align-items-center">
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

                <div class="col-12 col-lg-8">
                    <div class="card">
                        <div class="card-body px-5">
                            <div class="col-12">
                                <h2 class="fw-bold">Kementrian <br> Pemberdayaan Perempuan dan Kesetaraan Gender</h2>
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

                            <div class="col-12">
                                <img src="{{ asset('ppp/img/bg-unair.jpg') }}" class="img-fluid rounded-3" alt="">
                            </div>

                            
                            <h3 class="text-center fw-bold mt-5 mb-4">Dirjen PPKG</h3>
                            

                            <div class="row justify-content-around row-cols-3">
                                <div class="col">
                                    <div class="card mt-3 h-100">
                                        <div class="card-body">
                                            <div class="d-flex flex-column gap-3 h-100 align-items-center justify-content-center">
                                                <div class="col">
                                                    <img src="{{ asset('ppp/img/kementrian/PPKG/Muhammad_Amirul.png') }}"
                                                        class="img-fluid" alt="" style="max-height: 8rem;">
                                                </div>
                                                <div class="col">
                                                    <div class="content">
                                                        <h5 class="fw-bold m-0 p-0">Muhammad Amirul Habibi</h5>
                                                        <p class="m-0 p-0">DIRJEN Kesetaraan</p>
                                                        <pc class="fw-light">D4 Pengobatan Tradisional 2022</pc>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card mt-3 h-100">
                                        <div class="card-body">
                                            <div class="d-flex flex-column gap-3 h-100 align-items-center">
                                                <div class="col">
                                                    <img src="{{ asset('ppp/img/kementrian/PPKG/Zaimatul_Husniyah_R__Dirjen_Media_Informasi___edukasi-removebg-preview.png') }}"
                                                        class="img-fluid" alt="" style="max-height: 8rem;">
                                                </div>
                                                <div class="col">
                                                    <div class="content">
                                                        <h5 class="fw-bold m-0 p-0">Zaimatul Husniyah R</h5>
                                                        <p class="m-0 p-0">DIRJEN Informasi & Edukasi</p>
                                                        <pc class="fw-light">D4 Pengobatan Tradisional 2022</pc>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card mt-3 h-100">
                                        <div class="card-body">
                                            <div class="d-flex flex-column gap-3 h-100 align-items-center">
                                                <div class="col">
                                                    <img src="{{ asset('ppp/img/kementrian/PPKG/M._Fajar_dirjen_pemberdayaan_-removebg-preview.png') }}"
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


                            
                            <h3 class="text-center fw-bold mt-5 mb-4">Staff</h3>
                            


                            <div class="row justify-content-around row-cols-2 my-3">
                                <div class="col">
                                    <div class="card mt-3">
                                        <div class="card-body m-0 pb-0 pt-3">
                                            <div class="d-flex  align-items-center">
                                                <div class="col">
                                                    <img src="{{ asset('ppp/img/kementrian/ppkg/Zanita Ardelia Athira_Staff Kesetaraan Gender.png') }}" class="img-fluid"
                                                        alt="" style="max-height: 8rem;">
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
                                        <div class="card-body m-0 pb-0 pt-3">
                                            <div class="d-flex  align-items-center">
                                                <div class="col">
                                                    <img src="{{ asset('ppp/img/kementrian/ppkg/sheryn_adelia_rahmah_staff_pemberdayaan-removebg-preview.png') }}" class="img-fluid"
                                                        alt="" style="max-height: 8rem;">
                                                </div>
                                                <div class="col">
                                                    <div class="content">
                                                        <h5 class="fw-bold m-0 p-0">Sheryn Adelia Rahmah</h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card mt-3">
                                        <div class="card-body m-0 pb-0 pt-3">
                                            <div class="d-flex  align-items-center">
                                                <div class="col">
                                                    <img src="{{ asset('ppp/img/kementrian/ppkg/Nayla_lisda_amalia__Staff_media_informasi_dan_edukasi-removebg-preview.png') }}" class="img-fluid"
                                                        alt="" style="max-height: 8rem;">
                                                </div>
                                                <div class="col">
                                                    <div class="content">
                                                        <h5 class="fw-bold m-0 p-0">Nayla lisda Amalia</h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card mt-3">
                                        <div class="card-body m-0 pb-0 pt-3">
                                            <div class="d-flex  align-items-center">
                                                <div class="col">
                                                    <img src="{{ asset('ppp/img/kementrian/ppkg/Zanita Ardelia Athira_Staff Kesetaraan Gender.png') }}" class="img-fluid"
                                                        alt="" style="max-height: 8rem;">
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
                                        <div class="card-body m-0 pb-0 pt-3">
                                            <div class="d-flex  align-items-center">
                                                <div class="col">
                                                    <img src="{{ asset('ppp/img/kementrian/ppkg/Kiki Nur Cahyani_Staff media informasi & edukasi.png') }}" class="img-fluid"
                                                        alt="" style="max-height: 8rem;">
                                                </div>
                                                <div class="col">
                                                    <div class="content">
                                                        <h5 class="fw-bold m-0 p-0">Kiki Nur Cahyani</h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card mt-3">
                                        <div class="card-body m-0 pb-0 pt-3">
                                            <div class="d-flex  align-items-center">
                                                <div class="col">
                                                    <img src="{{ asset('ppp/img/kementrian/ppkg/Adinda Brilliant Putri Orlis_Staff Kesetaraan Gender.png') }}" class="img-fluid"
                                                        alt="" style="max-height: 8rem;">
                                                </div>
                                                <div class="col">
                                                    <div class="content">
                                                        <h5 class="fw-bold m-0 p-0">Adinda Brilliant Putri Orlis</h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card mt-3">
                                        <div class="card-body m-0 pb-0 pt-3">
                                            <div class="d-flex  align-items-center">
                                                <div class="col">
                                                    <img src="{{ asset('ppp/img/kementrian/ppkg/Anggita Dwi Yuniati_Staff pemberdayaan).png') }}" class="img-fluid"
                                                        alt="" style="max-height: 8rem;">
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
                                        <div class="card-body m-0 pb-0 pt-3">
                                            <div class="d-flex  align-items-center">
                                                <div class="col">
                                                    <img src="{{ asset('ppp/img/kementrian/ppkg/imroatussolikhah__staff_Pemberdayaan_-removebg-preview.png') }}" class="img-fluid"
                                                        alt="" style="max-height: 8rem;">
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
                                        <div class="card-body m-0 pb-0 pt-3">
                                            <div class="d-flex  align-items-center">
                                                <div class="col">
                                                    <img src="{{ asset('ppp/img/kementrian/ppkg/Aisyah R.R_Staff_.png') }}" class="img-fluid"
                                                        alt="" style="max-height: 8rem;">
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
                                        <div class="card-body m-0 pb-0 pt-3">
                                            <div class="d-flex  align-items-center">
                                                <div class="col">
                                                    <img src="{{ asset('ppp/img/kementrian/ppkg/Anugrah_Pebria_Rahmawati_Staff_media_informasi_dan_edukasi_-removebg-preview.png') }}" class="img-fluid"
                                                        alt="" style="max-height: 8rem;">
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
                                        <div class="card-body m-0 pb-0 pt-3">
                                            <div class="d-flex  align-items-center">
                                                <div class="col">
                                                    <img src="{{ asset('ppp/img/kementrian/ppkg/Ayu Laksmi Dewanti K_Staff Kesetaraan.png') }}" class="img-fluid"
                                                        alt="" style="max-height: 8rem;">
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
                                        <div class="card-body m-0 pb-0 pt-3">
                                            <div class="d-flex  align-items-center">
                                                <div class="col">
                                                    <img src="{{ asset('ppp/img/kementrian/ppkg/Ainur Risa_staff pemberdayaan ppkg.png') }}" class="img-fluid"
                                                        alt="" style="max-height: 8rem;">
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
