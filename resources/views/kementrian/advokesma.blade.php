@extends('layout2.main')
@section('content')

    <!-- Headline -->
    <div class="w-100 overflow-hidden position-relative mt-5">
        <div class="container position-relative mt-5">
            <div class="row">
                <h3 class="text-center my-5">Tentang Kementrian <span style="color: #ff6800">ADVOKESMA</span></h3>
            </div>
            <div class="row justify-content-center">

                <div class="col-12 col-md-10 col-lg-4">

                    {{-- logo --}}
                    <div class="card">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-6">
                                    <img src="{{ asset('ppp/img/kementrian/ADVOKESMA.png') }}" class="img-fluid"
                                        alt="" style="max-width: 12rem;">
                                </div>
                                <div class="col-6">
                                    <div class="content">
                                        <h3 class="fw-bold m-0 p-0">ADVOKESMA</h3>
                                        <p class="m-0 p-0">Advokasi dan Kesejahteraan Mahasiswa</p>
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
                                    <img src="{{ asset('ppp/img/kementrian/advokesma/Nabil fadyah_Menteri Advokasi dan Kesejahteraan Mahasiswa.png') }}"
                                        class="img-fluid" alt="" style="max-height: 12rem;">
                                </div>
                                <div class="col">
                                    <div class="content">
                                        <h2 class="fw-bold m-0 p-0">Nabil Fadyah</h2>
                                        <h5 class="m-0 p-0">Menteri Advokesma </h5>
                                        <pc class="fw-light">D3 Manajemen Pemasaran 2022</pc>
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


                <div class="col-12 col-md-10 col-lg-8">
                    <div class="card mt-3 mt-lg-0 mb-5">
                        <div class="card-body px-lg-5 px-3">
                            <div class="col-12">
                                <h2 class="fw-bold">Advokasi Kesejahteraan Mahasiswa</h2>
                                <p>Kementerian Advokesma adalah Kementerian yang bergerak di bidang advokasi dan memberikan
                                    pelayanan guna meningkatkan kesejahteraan mahasiswa, tidak hanya itu saja Kementerian
                                    advokesma juga membantu dalam mewadahi setiap aspirasi maupun kebutuhan terkait
                                    informasi kuliah dari setiap mahasiswa.
                                </p>
                            </div>
                            <hr>
                            <div class="col-12">
                                <img src="{{ asset('ppp/img/kementrian/advokesma/fotbar-advokesma.jpg') }}" class="img-fluid rounded-3" alt="">
                            </div>


                            <h3 class="fw-bold mb-4 mt-5">Dirjen</h3>


                            <div class="row justify-content-around row-cols-1 row-cols-lg-2 gap-2 gap-lg-0">

                                <div class="col">
                                    <div class="card mt-3 h-100 w-100" >
                                        <div class="card-body pb-0 pt-3">
                                            <div class="d-flex gap-2 align-items-center">
                                                <div class="col">
                                                    <img src="{{ asset('ppp/img/kementrian/advokesma/Cinta Xaviera Fidela Putri_Dirjen.png') }}"
                                                        class="img-fluid" alt="" style="max-height: 8rem;">
                                                </div>
                                                <div class="col">
                                                    <div class="content">
                                                        <h5 class="fw-bold m-0 p-0">Cinta Xaviera Fidela Putri</h5>
                                                        <p class="m-0 p-0">DIRJEN DIRJEN KESEJAHTERAAN MAHASISWA</p>
                                                        <pc class="fw-light">D3 Akuntansi 2022</pc>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card mt-3 h-100 w-100" >
                                        <div class="card-body pb-0 pt-3">
                                            <div class="d-flex gap-2 align-items-center">
                                                <div class="col">
                                                    <img src="{{ asset('ppp/img/kementrian/advokesma/Dandi Kusuma Wijaya_Dirjen Advokasi dan Kebijakan Kampus.png') }}"
                                                        class="img-fluid" alt="" style="max-height: 8rem;">
                                                </div>
                                                <div class="col">
                                                    <div class="content">
                                                        <h5 class="fw-bold m-0 p-0">Dandi Kusuma Wijaya</h5>
                                                        <p class="m-0 p-0">DIRJEN ADVOKASI DAN KEBIJAKAN KAMPUS</p>
                                                        <pc class="fw-light">D4 TRIK 2022</pc>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>


                            <h3 class="fw-bold mb-4 mt-5">Staff</h3>


                            <div class="row justify-content-around row-cols-1 row-cols-lg-2 my-3">

                                <div class="col">
                                    <div class="card mt-3">
                                        <div class="card-body pb-0 pt-3">
                                            <div class="d-flex gap-2 align-items-center">
                                                <div class="col">
                                                    <img src="{{ asset('ppp/img/kementrian/advokesma/Siti Nur Rohmawatil Ula_Staff Kesejahteraan Mahasiswa.png') }}"
                                                        class="img-fluid" alt="" style="max-height: 8rem;">
                                                </div>
                                                <div class="col">
                                                    <div class="content">
                                                        <h5 class="fw-bold m-0 p-0">Siti Nur Rohmawatil Ula</h5>
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
                                                    <img src="{{ asset('ppp/img/kementrian/advokesma/Putri Citra Rafida_Staff Advokasi dan Kebijakan Kampus.png') }}"
                                                        class="img-fluid" alt="" style="max-height: 8rem;">
                                                </div>
                                                <div class="col">
                                                    <div class="content">
                                                        <h5 class="fw-bold m-0 p-0">Putri Citra Rafida</h5>
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
                                                    <img src="{{ asset('ppp/img/kementrian/advokesma/Naila Nurshabrina Dwi Evria_Staff Kesejahteraan Mahasiswa .png') }}"
                                                        class="img-fluid" alt="" style="max-height: 8rem;">
                                                </div>
                                                <div class="col">
                                                    <div class="content">
                                                        <h5 class="fw-bold m-0 p-0">Naila Nurshabrina Dwi Evria</h5>
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
                                                    <img src="{{ asset('ppp/img/kementrian/advokesma/Miranda Janice Fazha C.H._staff Advokasi dan Kebijakan Kampus.png') }}"
                                                        class="img-fluid" alt="" style="max-height: 8rem;">
                                                </div>
                                                <div class="col">
                                                    <div class="content">
                                                        <h5 class="fw-bold m-0 p-0">Miranda Janice Fazha C.H</h5>
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
                                                    <img src="{{ asset('ppp/img/kementrian/advokesma/Hanifah Az Zahra Hasoloan_Staff Advokasi dan Kebijakan Kampus.png') }}"
                                                        class="img-fluid" alt="" style="max-height: 8rem;">
                                                </div>
                                                <div class="col">
                                                    <div class="content">
                                                        <h5 class="fw-bold m-0 p-0">Hanifah Az Zahra Hasoloan</h5>
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
                                                    <img src="{{ asset('ppp/img/kementrian/advokesma/Ellysia Dea Calista_staff kesejahteraan mahasiswa.png') }}"
                                                        class="img-fluid" alt="" style="max-height: 8rem;">
                                                </div>
                                                <div class="col">
                                                    <div class="content">
                                                        <h5 class="fw-bold m-0 p-0">Ellysia Dea Calista</h5>
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
                                                    <img src="{{ asset('ppp/img/kementrian/advokesma/Davina Alimashafa_Staff Kesejahteraan Mahasiswa.png') }}"
                                                        class="img-fluid" alt="" style="max-height: 8rem;">
                                                </div>
                                                <div class="col">
                                                    <div class="content">
                                                        <h5 class="fw-bold m-0 p-0">Davina Alimashafa</h5>
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
                                                    <img src="{{ asset('ppp/img/kementrian/advokesma/Cynthia Nur Savitri_Staff Kesejahteraan Mahasiswa.png') }}"
                                                        class="img-fluid" alt="" style="max-height: 8rem;">
                                                </div>
                                                <div class="col">
                                                    <div class="content">
                                                        <h5 class="fw-bold m-0 p-0">Cynthia Nur Savitri</h5>
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
                                                    <img src="{{ asset('ppp/img/kementrian/advokesma/Binar Arifah Insani_Staff Kesejahteraan Mahasiswa.png') }}"
                                                        class="img-fluid" alt="" style="max-height: 8rem;">
                                                </div>
                                                <div class="col">
                                                    <div class="content">
                                                        <h5 class="fw-bold m-0 p-0">Binar Arifah Insani</h5>
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
                                                    <img src="{{ asset('ppp/img/kementrian/advokesma/Ayu Anastasya_Staff Advokasi dan Kebijakan Kampus.png') }}"
                                                        class="img-fluid" alt="" style="max-height: 8rem;">
                                                </div>
                                                <div class="col">
                                                    <div class="content">
                                                        <h5 class="fw-bold m-0 p-0">Ayu Anastasya</h5>
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
                                                    <img src="{{ asset('ppp/img/kementrian/advokesma/Atha Salsabila_Staff Advokasi dan Kebijakan Kampus.png') }}"
                                                        class="img-fluid" alt="" style="max-height: 8rem;">
                                                </div>
                                                <div class="col">
                                                    <div class="content">
                                                        <h5 class="fw-bold m-0 p-0">Atha Salsabila</h5>
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
                                                    <img src="{{ asset('ppp/img/kementrian/advokesma/Anggita Trisnandia Arifin_Staff Kesejahteraan Mahasiswa.png') }}"
                                                        class="img-fluid" alt="" style="max-height: 8rem;">
                                                </div>
                                                <div class="col">
                                                    <div class="content">
                                                        <h5 class="fw-bold m-0 p-0">Anggita Trisnandia Arifin</h5>
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
                                                    <img src="{{ asset('ppp/img/kementrian/advokesma/Armaniella Virelita Maharani_Staff Kesejahteraan Mahasiswa.png') }}"
                                                        class="img-fluid" alt="" style="max-height: 8rem;">
                                                </div>
                                                <div class="col">
                                                    <div class="content">
                                                        <h5 class="fw-bold m-0 p-0">Armaniella Virelita Maharani</h5>
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
