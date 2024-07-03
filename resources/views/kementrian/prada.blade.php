@extends('layout2.main')
@section('content')

    <!-- Headline -->
    <div class="w-100 overflow-hidden position-relative mt-5">
        <div class="container position-relative mt-5">
            <div class="row">
                <h3 class="text-center my-5">Tentang Kementrian <span style="color: #ff6800">PRADA</span></h3>
            </div>
            <div class="row justify-content-center">

                <div class="col-12 col-md col-lg-4">

                    {{-- logo --}}
                    <div class="card">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-6">
                                    <img src="{{ asset('ppp/img/kementrian/PRADA.png') }}" class="img-fluid" alt=""
                                        style="max-width: 12rem;">
                                </div>
                                <div class="col-6">
                                    <div class="content">
                                        <h3 class="fw-bold m-0 p-0">PRADA</h3>
                                        <p class="m-0 p-0">Pemuda Olahraga dan Budaya</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- sususan kabinet --}}

                    {{-- menteri --}}
                    <div class="card mt-3 shadow-sm">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="col-auto">
                                    <img src="{{ asset('ppp/img/kementrian/PRADA/DAFFA BRANI ACHMAD MAULANA_MENTERI.png') }}"
                                        class="img-fluid rounded" alt="Daffa Brani" style="max-height: 12rem;">
                                </div>
                                <div class="col ms-3">
                                    <div class="content">
                                        <h2 class="fw-bold m-0 p-0">Daffa Brani</h2>
                                        <h5 class="m-0 p-0 text-muted">Menteri PRADA</h5>
                                        <p class="fw-light m-0">D4 Keselamatan dan Kesehatan Kerja 2022</p>
                                    </div>
                                    <div class="icons mt-3">
                                        <a href="https://www.instagram.com/your_profile" target="_blank"
                                            class="me-3 text-dark"><i class="bi bi-instagram"></i></a>
                                        <a href="https://www.linkedin.com/in/your_profile" target="_blank"
                                            class="text-dark"><i class="bi bi-linkedin"></i></a>
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
                                <h2 class="fw-bold">Kementrian <br> Pemuda Olahraga dan Budaya</h2>
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

                            
                            <h3 class="text-center fw-bold mb-4 mt-5">Dirjen PRADA</h3>
                            

                            <div class="row justify-content-around row-cols-3">

                                <div class="col">
                                    <div class="card mt-3 shadow-sm">
                                        <div class="card-body d-flex flex-column align-items-center">
                                            <div class="mb-3">
                                                <img src="{{ asset('ppp/img/kementrian/PRADA/Egis_Agitya_Revangga_Dirjen_Pemuda-removebg-preview.png') }}"
                                                    class="img-fluid rounded" alt="Egis Agitya Revangga"
                                                    style="max-height: 8rem;">
                                            </div>
                                            <div class="text-center">
                                                <h5 class="fw-bold m-0">Egis Agitya Revangga</h5>
                                                <p class="m-0 text-muted">DIRJEN Pemuda</p>
                                                <p class="fw-light m-0">D3 Akuntansi 2022</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card mt-3 shadow-sm">
                                        <div class="card-body d-flex flex-column align-items-center">
                                            <div class="mb-3">
                                                <img src="{{ asset('ppp/img/kementrian/PRADA/Lailatul_Azizah_Dirjen_Budaya-removebg-preview.png') }}"
                                                    class="img-fluid rounded" alt="" style="max-height: 8rem;">
                                                <div class="text-center">
                                                    <h5 class="fw-bold m-0 p-0">Lailatul Azizah</h5>
                                                    <p class="m-0 p-0">DIRJEN Budaya</p>
                                                    <pc class="fw-light">D4 Tek. Radiologi Pencitraan 2022</pc>
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
                                                    <img src="{{ asset('ppp/img/kementrian/PRADA/Rangga Arjuna_Dirjen Olahraga.png') }}"
                                                        class="img-fluid" alt="" style="max-height: 8rem;">
                                                </div>
                                                <div class="col">
                                                    <div class="content">
                                                        <h5 class="fw-bold m-0 p-0">Rangga Arjuna</h5>
                                                        <p class="m-0 p-0">DIRJEN Olahraga</p>
                                                        <pc class="fw-light">D4 TRIK 2022</pc>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            
                            <h3 class="text-center fw-bold pb-0 pt-3">Staff</h3>
                            

                            <div class="row justify-content-around row-cols-2 my-3">

                                <div class="col">
                                    <div class="card mt-3">
                                        <div class="card-body pb-0 pt-3">
                                            <div class="d-flex gap-2 align-items-center">
                                                <div class="col">
                                                    <img src="{{ asset('ppp/img/kementrian/PRADA/shofi layuza fitri arifta _staf olahraga.png') }}"
                                                        class="img-fluid" alt="" style="max-height: 8rem;">
                                                </div>
                                                <div class="col">
                                                    <div class="content">
                                                        <h5 class="fw-bold m-0 p-0">Shofi Layuza Fitri Arifta</h5>
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
                                                    <img src="{{ asset('ppp/img/kementrian/PRADA/Hasya Putri Talitha_Staff Budaya.png') }}"
                                                        class="img-fluid" alt="" style="max-height: 8rem;">
                                                </div>
                                                <div class="col">
                                                    <div class="content">
                                                        <h5 class="fw-bold m-0 p-0">Hasya Putri Talitha</h5>
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
                                                    <img src="{{ asset('ppp/img/kementrian/PRADA/Ananda Nur Rohmah Kurniasari_staff budaya.png') }}"
                                                        class="img-fluid" alt="" style="max-height: 8rem;">
                                                </div>
                                                <div class="col">
                                                    <div class="content">
                                                        <h5 class="fw-bold m-0 p-0">Ananda Nur Rohmah Kurniasari</h5>
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
                                                    <img src="{{ asset('ppp/img/kementrian/PRADA/Putri_Nurul_Amalia_Staff_Budaya-removebg-preview.png') }}"
                                                        class="img-fluid" alt="" style="max-height: 8rem;">
                                                </div>
                                                <div class="col">
                                                    <div class="content">
                                                        <h5 class="fw-bold m-0 p-0">Putri Nurul Amalia</h5>
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
                                                    <img src="{{ asset('ppp/img/kementrian/PRADA/Ahmad_Misbahul_Farih_Staff_budaya_-removebg-preview.png') }}"
                                                        class="img-fluid" alt="" style="max-height: 8rem;">
                                                </div>
                                                <div class="col">
                                                    <div class="content">
                                                        <h5 class="fw-bold m-0 p-0">Ahmad Misbahul Farih</h5>
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
                                                    <img src="{{ asset('ppp/img/kementrian/PRADA/Gilang Rachman Danny_STAFF OLAHRAGA.png') }}"
                                                        class="img-fluid" alt="" style="max-height: 8rem;">
                                                </div>
                                                <div class="col">
                                                    <div class="content">
                                                        <h5 class="fw-bold m-0 p-0">Gilang Rachman Danny</h5>
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
                                                    <img src="{{ asset('ppp/img/kementrian/PRADA/Ekky Regita Adelia_Staff Pemuda.png') }}"
                                                        class="img-fluid" alt="" style="max-height: 8rem;">
                                                </div>
                                                <div class="col">
                                                    <div class="content">
                                                        <h5 class="fw-bold m-0 p-0">Ekky Regita Adelia</h5>
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
                                                    <img src="{{ asset('ppp/img/kementrian/PRADA/Afifah Sukiman_Staf Pemuda.png') }}"
                                                        class="img-fluid" alt="" style="max-height: 8rem;">
                                                </div>
                                                <div class="col">
                                                    <div class="content">
                                                        <h5 class="fw-bold m-0 p-0">Afifah Sukiman</h5>
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
                                                    <img src="{{ asset('ppp/img/kementrian/PRADA/AGATHA_AURELIA_ABIGAIL__STAF_KEPEMUDAAN-removebg-preview.png') }}"
                                                        class="img-fluid" alt="" style="max-height: 8rem;">
                                                </div>
                                                <div class="col">
                                                    <div class="content">
                                                        <h5 class="fw-bold m-0 p-0">Agatha Aureli Abigail</h5>
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
                                                    <img src="{{ asset('ppp/img/kementrian/PRADA/Hendy Febrian Prananda_Staff Pemuda.png') }}"
                                                        class="img-fluid" alt="" style="max-height: 8rem;">
                                                </div>
                                                <div class="col">
                                                    <div class="content">
                                                        <h5 class="fw-bold m-0 p-0">Hendy Febrian Prananda</h5>
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
                                                    <img src="{{ asset('ppp/img/kementrian/PRADA/SESILIA FEBRIANTI_STAFF OLAHRAGA.png') }}"
                                                        class="img-fluid" alt="" style="max-height: 8rem;">
                                                </div>
                                                <div class="col">
                                                    <div class="content">
                                                        <h5 class="fw-bold m-0 p-0">SESILIA FEBRIANTI</h5>
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
                                                    <img src="{{ asset('ppp/img/kementrian/PRADA/Muhammad Nabil Athollah_Staf olahraga_Foto1.png') }}"
                                                        class="img-fluid" alt="" style="max-height: 8rem;">
                                                </div>
                                                <div class="col">
                                                    <div class="content">
                                                        <h5 class="fw-bold m-0 p-0">Muhammad Nabil Athollah</h5>
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
                                                    <img src="{{ asset('ppp/img/kementrian/PRADA/ZITA AZRA AZARINE NABILAH_STAFF OLAHRAGA.png') }}"
                                                        class="img-fluid" alt="" style="max-height: 8rem;">
                                                </div>
                                                <div class="col">
                                                    <div class="content">
                                                        <h5 class="fw-bold m-0 p-0">ZITA AZRA AZARINE NABILAH</h5>
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
                                                    <img src="{{ asset('ppp/img/kementrian/PRADA/Afifah Sukiman_Staf Pemuda.png') }}"
                                                        class="img-fluid" alt="" style="max-height: 8rem;">
                                                </div>
                                                <div class="col">
                                                    <div class="content">
                                                        <h5 class="fw-bold m-0 p-0">Afifah Sukiman</h5>
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

    </style>
@endsection

@endsection
