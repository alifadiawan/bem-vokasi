@extends('layout2.main')
@section('content')

    <!-- Headline -->
    <div class="w-100 overflow-hidden position-relative mt-5">
        <div class="container position-relative mt-5">
            <div class="row">
                <h3 class="text-center my-5">Tentang Kementrian <span style="color: #ff6800">ILPRES</span></h3>
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
                                        <h1 class="fw-bold m-0 p-0">ILPRES</h1>
                                        <h5 class="m-0 p-0">Keilmuan dan Prestasi</h5>
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
                                    <img src="{{ asset('ppp/img/kementrian/ILPRES/Irma Dwi Praminiarti_Menteri.png') }}"
                                        class="img-fluid" alt="" style="max-height: 12rem;">
                                </div>
                                <div class="col">
                                    <div class="content">
                                        <h2 class="fw-bold m-0 p-0">Irma Dwi</h2>
                                        <h5 class="m-0 p-0">Menteri ILPRES </h5>
                                        <pc class="fw-light">D4 Manajemen Perkantoran Digital 2022</pc>
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
                                <h2 class="fw-bold">Kementrian <br> Keilmuan dan Prestasi</h2>
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
                            <h3 class="text-center fw-bold">Dirjen ILPRES</h3>
                            <hr>

                            <div class="row justify-content-around row-cols-3">

                                <div class="col">
                                    <div class="card mt-3">
                                        <div class="card-body ">
                                            <div class="d-flex flex-column gap-2 align-items-center">
                                                <div class="col">
                                                    <img src="{{ asset('ppp/img/kementrian/ILPRES/Maulida_Maya_Dwi_Rahmawati_Dirjen_Inovasi-removebg-preview.png') }}"
                                                        class="img-fluid" alt="" style="max-height: 8rem;">
                                                </div>
                                                <div class="col">
                                                    <div class="content">
                                                        <h5 class="fw-bold m-0 p-0">Maulidya Maya Dwi Rahmawati</h5>
                                                        <p class="m-0 p-0">DIRJEN Inovasi</p>
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
                                                    <img src="{{ asset('ppp/img/kementrian/ILPRES/Novaura Laila Ramadhani_Dirjen Keilmuan_D3 Perpajakan.png') }}"
                                                        class="img-fluid" alt="" style="max-height: 8rem;">
                                                </div>
                                                <div class="col">
                                                    <div class="content">
                                                        <h5 class="fw-bold m-0 p-0">Novaura Laila Ramadhani</h5>
                                                        <p class="m-0 p-0">DIRJEN Keilmuan dan Prestasi</p>
                                                        <pc class="fw-light">D3 Perpajakan 2022</pc>
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
                                                    <img src="{{ asset('ppp/img/kementrian/ILPRES/shofia gonim_dirjen riset.png') }}"
                                                        class="img-fluid" alt="" style="max-height: 8rem;">
                                                </div>
                                                <div class="col">
                                                    <div class="content">
                                                        <h5 class="fw-bold m-0 p-0">Shofia Gonim</h5>
                                                        <p class="m-0 p-0">DIRJEN Riset</p>
                                                        <pc class="fw-light">D4 Tek. Radiologi Pencitraan 2022</pc>
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
                                        <div class="card-body ">
                                            <div class="d-flex gap-2 align-items-center">
                                                <div class="col">
                                                    <img src="{{ asset('ppp/img/kementrian/ILPRES/Via Layli_Staff Inovasi.png') }}"
                                                        class="img-fluid" alt="" style="max-height: 8rem;">
                                                </div>
                                                <div class="col">
                                                    <div class="content">
                                                        <h5 class="fw-bold m-0 p-0">Via Layli</h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card mt-3">
                                        <div class="card-body ">
                                            <div class="d-flex gap-2 align-items-center">
                                                <div class="col">
                                                    <img src="{{ asset('ppp/img/kementrian/ILPRES/Abdillah Muharrarul_Staff Inovasi.png') }}"
                                                        class="img-fluid" alt="" style="max-height: 8rem;">
                                                </div>
                                                <div class="col">
                                                    <div class="content">
                                                        <h5 class="fw-bold m-0 p-0">Abdillah Muharrarul</h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card mt-3">
                                        <div class="card-body ">
                                            <div class="d-flex gap-2 align-items-center">
                                                <div class="col">
                                                    <img src="{{ asset('ppp/img/kementrian/ILPRES/Evania Salma Rahmatika_Staff inovasi.png') }}"
                                                        class="img-fluid" alt="" style="max-height: 8rem;">
                                                </div>
                                                <div class="col">
                                                    <div class="content">
                                                        <h5 class="fw-bold m-0 p-0">Evania Salma Rahmatika</h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card mt-3">
                                        <div class="card-body ">
                                            <div class="d-flex gap-2 align-items-center">
                                                <div class="col">
                                                    <img src="{{ asset('ppp/img/kementrian/ILPRES/Arshelina_Renata_Adiswara_staff_keilmuan-removebg-preview.png') }}"
                                                        class="img-fluid" alt="" style="max-height: 8rem;">
                                                </div>
                                                <div class="col">
                                                    <div class="content">
                                                        <h5 class="fw-bold m-0 p-0">Arshelina Tiara</h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card mt-3">
                                        <div class="card-body ">
                                            <div class="d-flex gap-2 align-items-center">
                                                <div class="col">
                                                    <img src="{{ asset('ppp/img/kementrian/ILPRES/Adellia_Sisca_Shafira_Staff_Keilmuan-removebg-preview.png') }}"
                                                        class="img-fluid" alt="" style="max-height: 8rem;">
                                                </div>
                                                <div class="col">
                                                    <div class="content">
                                                        <h5 class="fw-bold m-0 p-0">Adelia Sisca Shafira</h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card mt-3">
                                        <div class="card-body ">
                                            <div class="d-flex gap-2 align-items-center">
                                                <div class="col">
                                                    <img src="{{ asset('ppp/img/kementrian/ILPRES/Eviolina Tiara Anggraini_Staff Keilmuan_.png') }}"
                                                        class="img-fluid" alt="" style="max-height: 8rem;">
                                                </div>
                                                <div class="col">
                                                    <div class="content">
                                                        <h5 class="fw-bold m-0 p-0">Evolina Tiara</h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card mt-3">
                                        <div class="card-body ">
                                            <div class="d-flex gap-2 align-items-center">
                                                <div class="col">
                                                    <img src="{{ asset('ppp/img/kementrian/ILPRES/Nisrina_Marsa_Salzabil_Staff_Riset-removebg-preview.png') }}"
                                                        class="img-fluid" alt="" style="max-height: 8rem;">
                                                </div>
                                                <div class="col">
                                                    <div class="content">
                                                        <h5 class="fw-bold m-0 p-0">Nisrina Marsa Salzabil</h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card mt-3">
                                        <div class="card-body ">
                                            <div class="d-flex gap-2 align-items-center">
                                                <div class="col">
                                                    <img src="{{ asset('ppp/img/kementrian/ILPRES/NAUFAL EMERY_STAFF Inovasi.png') }}"
                                                        class="img-fluid" alt="" style="max-height: 8rem;">
                                                </div>
                                                <div class="col">
                                                    <div class="content">
                                                        <h5 class="fw-bold m-0 p-0">Naufal Emery</h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card mt-3">
                                        <div class="card-body ">
                                            <div class="d-flex gap-2 align-items-center">
                                                <div class="col">
                                                    <img src="{{ asset('ppp/img/kementrian/ILPRES/Chelsea Putri Arifiana_Staff Riset.png') }}"
                                                        class="img-fluid" alt="" style="max-height: 8rem;">
                                                </div>
                                                <div class="col">
                                                    <div class="content">
                                                        <h5 class="fw-bold m-0 p-0">Chelsea Putri Arfiana</h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card mt-3">
                                        <div class="card-body ">
                                            <div class="d-flex gap-2 align-items-center">
                                                <div class="col">
                                                    <img src="{{ asset('ppp/img/kementrian/ILPRES/Dinar Putri Ramadhani_Staff Riset.png') }}"
                                                        class="img-fluid" alt="" style="max-height: 8rem;">
                                                </div>
                                                <div class="col">
                                                    <div class="content">
                                                        <h5 class="fw-bold m-0 p-0">Dinar Putri Ramadhani</h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card mt-3">
                                        <div class="card-body ">
                                            <div class="d-flex gap-2 align-items-center">
                                                <div class="col">
                                                    <img src="{{ asset('ppp/img/kementrian/ILPRES/Azarine Aurelliahandy Azzahra_Staff Riset.png') }}"
                                                        class="img-fluid" alt="" style="max-height: 8rem;">
                                                </div>
                                                <div class="col">
                                                    <div class="content">
                                                        <h5 class="fw-bold m-0 p-0">Azarine Aurelliahandya</h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card mt-3">
                                        <div class="card-body ">
                                            <div class="d-flex gap-2 align-items-center">
                                                <div class="col">
                                                    <img src="{{ asset('ppp/img/kementrian/ILPRES/Mas Ayu Alyaa_Staff Keilmuan.png') }}"
                                                        class="img-fluid" alt="" style="max-height: 8rem;">
                                                </div>
                                                <div class="col">
                                                    <div class="content">
                                                        <h5 class="fw-bold m-0 p-0">Mas Ayu Alya</h5>
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
