@extends('layout2.main')
@section('content')

    <!-- Headline -->
    <div class="w-100 overflow-hidden position-relative mt-5">
        <div class="container position-relative mt-5">
            <div class="row">
                <h3 class="text-center my-5">Tentang Kementrian <span style="color: #ff6800">SEKBEN</span></h3>
            </div>
            <div class="row justify-content-center">

                <div class="col-12 col-md col-lg-4">

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
                                        <h1 class="fw-bold m-0 p-0">SEKBEN</h1>
                                        <h5 class="m-0 p-0">Sekertaris dan Bendahara Kabinet</h5>
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
                                    <img src="{{ asset('ppp/img/kementrian/SEKBEN/Eva_Feliana Maelani_Menteri.png') }}"
                                        class="img-fluid" alt="" style="max-height: 12rem;">
                                </div>
                                <div class="col">
                                    <div class="content">
                                        <h2 class="fw-bold m-0 p-0">Eva Feliana</h2>
                                        <h5 class="m-0 p-0">Menteri SEKBEN Kabinet</h5>
                                        <pc class="fw-light">D4 Tek. Laboratorium Medik 2022</pc>
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
                                <h2 class="fw-bold">Kementrian <br> Sekertaris dan Bendahara Kabinet</h2>
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

                            <hr>
                            <h3 class="text-center fw-bold">Dirjen SEKBEN</h3>
                            <hr>

                            <div class="row justify-content-around row-cols-3">

                                <div class="col">
                                    <div class="card mt-3">
                                        <div class="card-body ">
                                            <div class="d-flex flex-column gap-2 align-items-center">
                                                <div class="col">
                                                    <img src="{{ asset('ppp/img/kementrian/SEKBEN/Roro_Dinda_Salsabilla Permatasari_Dirjen_Kesekretariatan_.png') }}"
                                                        class="img-fluid" alt="" style="max-height: 8rem;">
                                                </div>
                                                <div class="col">
                                                    <div class="content">
                                                        <h5 class="fw-bold m-0 p-0">Roro Dinda Salsabilla Permatasari</h5>
                                                        <p class="m-0 p-0">DIRJEN Kesekretariantan</p>
                                                        <pc class="fw-light">D4 Manajemen Perkantoran Digital 2022</pc>
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
                                                    <img src="{{ asset('ppp/img/kementrian/SEKBEN/shintya_putri_ dirjen kebendaharaan_.png') }}"
                                                        class="img-fluid" alt="" style="max-height: 8rem;">
                                                </div>
                                                <div class="col">
                                                    <div class="content">
                                                        <h5 class="fw-bold m-0 p-0">Shintya Putri</h5>
                                                        <p class="m-0 p-0">DIRJEN Kebendaharaan</p>
                                                        <pc class="fw-light">D4 Perbankan dan Keuangan 2022</pc>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <hr>
                            <h3 class="text-center fw-bold">Staff</h3>
                            <hr>

                            <div class="row justify-content-around row-cols-2 my-3">

                                <div class="col">
                                    <div class="card mt-3">
                                        <div class="card-body m-0 pb-0 pt-3">
                                            <div class="d-flex gap-2 align-items-center">
                                                <div class="col">
                                                    <img src="{{ asset('ppp/img/kementrian/SEKBEN/Azizatul_Nazwa Salsabilla_Staff Sekre.png') }}"
                                                        class="img-fluid" alt="" style="max-height: 8rem;">
                                                </div>
                                                <div class="col">
                                                    <div class="content">
                                                        <h5 class="fw-bold m-0 p-0">Azizatul Nazwa Salsabilla</h5>
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
                                                    <img src="{{ asset('ppp/img/kementrian/SEKBEN/Fiza_Aqila_Staff Bendahara_.png') }}"
                                                        class="img-fluid" alt="" style="max-height: 8rem;">
                                                </div>
                                                <div class="col">
                                                    <div class="content">
                                                        <h5 class="fw-bold m-0 p-0">Fiza Aqila</h5>
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
                                                    <img src="{{ asset('ppp/img/kementrian/SEKBEN/Nadya_Tikasari Putri_Staff Bendahara.png') }}"
                                                        class="img-fluid" alt="" style="max-height: 8rem;">
                                                </div>
                                                <div class="col">
                                                    <div class="content">
                                                        <h5 class="fw-bold m-0 p-0">Nadya Tikasari Putri</h5>
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
                                                    <img src="{{ asset('ppp/img/kementrian/SEKBEN/Ravena_Ananda_Staff Sekretaris.png') }}"
                                                        class="img-fluid" alt="" style="max-height: 8rem;">
                                                </div>
                                                <div class="col">
                                                    <div class="content">
                                                        <h5 class="fw-bold m-0 p-0">Ravena Ananda</h5>
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
                                                    <img src="{{ asset('ppp/img/kementrian/SEKBEN/Shivani_Agustina_Staff Bendahara.png') }}"
                                                        class="img-fluid" alt="" style="max-height: 8rem;">
                                                </div>
                                                <div class="col">
                                                    <div class="content">
                                                        <h5 class="fw-bold m-0 p-0">Shivani Agustina</h5>
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
                                                    <img src="{{ asset('ppp/img/kementrian/SEKBEN/Yuro_Arumandji_staff sekretaris.png') }}"
                                                        class="img-fluid" alt="" style="max-height: 8rem;">
                                                </div>
                                                <div class="col">
                                                    <div class="content">
                                                        <h5 class="fw-bold m-0 p-0">Yuro Arumandji</h5>
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
                                                    <img src="{{ asset('ppp/img/kementrian/SEKBEN/Hilda_Isnaeni__Staff_Sekretaris.png') }}"
                                                        class="img-fluid" alt="" style="max-height: 8rem;">
                                                </div>
                                                <div class="col">
                                                    <div class="content">
                                                        <h5 class="fw-bold m-0 p-0">Hilda Isnaeni</h5>
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
                                                    <img src="{{ asset('ppp/img/kementrian/SEKBEN/Qurrata_A_yunin_Staff_Bendahara.png') }}"
                                                        class="img-fluid" alt="" style="max-height: 8rem;">
                                                </div>
                                                <div class="col">
                                                    <div class="content">
                                                        <h5 class="fw-bold m-0 p-0">Qurrata A yunin</h5>
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
