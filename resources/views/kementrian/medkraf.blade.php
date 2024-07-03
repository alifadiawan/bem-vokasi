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

                <div class="col">

                    {{-- logo --}}
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="col">
                                    <img src="{{ asset('ppp/img/kementrian/PPKG.png') }}" class="img-fluid" alt=""
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

                <div class="col-12 col-lg-8">
                    <div class="card">
                        <div class="card-body px-5">
                            <div class="col-12">
                                <h2 class="fw-bold">Kementrian <br> Media kreatif dan Digitalisasi</h2>
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

                            <hr>
                            <h3 class="text-center fw-bold">Dirjen MEDKRAF</h3>
                            <hr>

                            <div class="row row-cols-2">
                                <div class="col">
                                    <div class="card mt-3">
                                        <div class="card-body">
                                            <div class="d-flex align-items-center">
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
                                    <div class="card mt-3">
                                        <div class="card-body">
                                            <div class="d-flex align-items-center">
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

                                <hr>
                                <h3 class="text-center fw-bold">Staff</h3>
                                <hr>

                                <div class="col">
                                    <div class="card mt-3">
                                        <div class="card-body">
                                            <div class="d-flex align-items-center">
                                                <div class="col">
                                                    <img src="{{ asset('ppp/img/kementrian/MEDKRAF/SYIFANI_AULIA.jpg
                                                                                                                                                                                                                                                                                                                        ') }}"
                                                        class="img-fluid" alt="" style="max-height: 8rem;">
                                                </div>
                                                <div class="col">
                                                    <div class="content">
                                                        <h5 class="fw-bold m-0 p-0">Syifani Aulia</h5>
                                                        <p class="m-0 p-0">DIRJEN Kesetaraan</p>
                                                        <pc class="fw-light">D4 Fisioterapi 2022</pc>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card mt-3">
                                        <div class="card-body">
                                            <div class="d-flex align-items-center">
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
                                    <div class="card mt-3">
                                        <div class="card-body">
                                            <div class="d-flex align-items-center">
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
                                    <div class="card mt-3">
                                        <div class="card-body">
                                            <div class="d-flex align-items-center">
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
                                    <div class="card mt-3">
                                        <div class="card-body">
                                            <div class="d-flex align-items-center">
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
