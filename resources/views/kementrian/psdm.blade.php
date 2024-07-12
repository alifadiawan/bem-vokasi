@extends('layout2.main')
@section('content')

    <!-- Headline -->
    <div class="w-100 overflow-hidden position-relative mt-5">
        <div class="container position-relative mt-5">
            <div class="row">
                <h3 class="text-center my-5">Tentang Kementrian <span class="fw-bold" style="color: #ff6800">PSDM</span>
                </h3>
            </div>
            <div class="row justify-content-center">

                <div class="col-12 col-md col-lg-4">

                    {{-- logo --}}
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="col">
                                    <img src="{{ asset('ppp/img/kementrian/PSDM.png') }}" class="img-fluid" alt=""
                                        style="max-width: 12rem;">
                                </div>
                                <div class="col">
                                    <div class="content">
                                        <h1 class="fw-bold m-0 p-0">PSDM</h1>
                                        <h5 class="m-0 p-0">Pengembangan Sumber Daya Manusia</h5>
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
                                    <img src="{{ asset('ppp/img/kementrian/PSDM/Fawwaz Alodia_Menteri_.png') }}"
                                        class="img-fluid" alt="" style="max-height: 12rem;">
                                </div>
                                <div class="col">
                                    <div class="content">
                                        <h2 class="fw-bold m-0 p-0">Fawwaz Alodial</h2>
                                        <h5 class="m-0 p-0">Menteri PSDM</h5>
                                        <pc class="fw-light">D4 Tek. Laboratorim Medik 2022</pc>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-8 mt-3 mt-lg-0">
                    <div class="card mb-5">
                        <div class="card-body px-lg-5 px-3">
                            <div class="col-12 mt-3">
                                <h2 class="fw-bold">Pengembangan Sumber Daya Manusia</h2>
                                <p>Kementerian Pengembangan Sumber Daya mahasiswa bertanggung jawab atas menciptakan keharmonisan
                                    internal BEM FV dan sinergitas ORMAWA Vokasi. membentuk ruang komunikasi antar BEM, menciptakan sistem
                                    kaderisasi yang progresif, professional, transparan, dan terbuka. Mempersiapkan, dan merawat anggota BEM
                                    berlandaskan budaya maupun prinsip organisasi, membiasakan laku budaya organisasi yang positif, melakukan
                                    pendataan, penilaian, controlling melalui konseling terhadap Anggota BEM dan pemberian apresiasi kepada
                                    anggota BEM yang berpartisipasi aktif di dalam kepengurusan. Kemudian menjalin hubungan baik dengan
                                    ORMAWA melalui kegiatan kunjungan, studi banding, kaderisasi, dan kegiatan lain yang bersifat kolaboratif
                                </p>
                            </div>

                            <div class="col-12">
                                <img src="{{ asset('ppp/img/kementrian/PSDM/fotbar-psdm.jpg') }}" class="img-fluid rounded-3"
                                    alt="">
                            </div>


                            <h3 class="fw-bold mb-4 mt-5">Dirjen PSDM</h3>


                            <div class="row row-cols-1 gap-3 gap-lg-0 row-cols-lg-3">
                                <div class="col">
                                    <div class="card mt-3 h-100">
                                        <div class="card-body pb-0 pt-3">
                                            <div class="d-flex flex-lg-column align-items-center">
                                                <div class="col">
                                                    <img src="{{ asset('ppp/img/kementrian/PSDM/Daninda_Aisya_Putri_Dirjen_PAK-removebg-preview.png') }}"
                                                        class="img-fluid" alt="" style="max-height: 8rem;">
                                                </div>
                                                <div class="col">
                                                    <div class="content">
                                                        <h5 class="fw-bold m-0 p-0">Ladya Farras Zhafira</h5>
                                                        <p class="m-0 p-0">DIRJEN Pendayagunaan Aparatur Kabinet</p>
                                                        <pc class="fw-light">D4 Keselamatan & Kesehatan Kerja 2022</pc>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card mt-3 h-100">
                                        <div class="card-body pb-0 pt-3">
                                            <div class="d-flex flex-lg-column gap-2 align-items-center">
                                                <div class="col">
                                                    <img src="{{ asset('ppp/img/kementrian/PSDM/Muckamad Dafit Firdos_Dirjen Kaderisasi.png') }}"
                                                        class="img-fluid" alt="" style="max-height: 8rem;">
                                                </div>
                                                <div class="col">
                                                    <div class="content">
                                                        <h5 class="fw-bold m-0 p-0">Muckamad Dafit Firdos</h5>
                                                        <p class="m-0 p-0">DIRJEN Kaerisasi</p>
                                                        <pc class="fw-light">D4 Perbankan & Keuangan 2022</pc>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card mt-3 h-100">
                                        <div class="card-body pb-0 pt-3 ">
                                            <div class="d-flex flex-lg-column align-items-center">
                                                <div class="col">
                                                    <img src="{{ asset('ppp/img/kementrian/PSDM/Rahma Aulia Salsabila_Dirjen SINEMA.png') }}"
                                                        class="img-fluid" alt="" style="max-height: 8rem;">
                                                </div>
                                                <div class="col">
                                                    <div class="content">
                                                        <h5 class="fw-bold m-0 p-0">Rahma Aulia Salsabila</h5>
                                                        <p class="m-0 p-0">DIRJEN Sinema</p>
                                                        <pc class="fw-light">D4 Manajemen Perhotelan 2022</pc>
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
                                                    <img src="{{ asset('ppp/img/kementrian/PSDM/Abigail Cheryl Antoinette Berhitoe_Staff Kaderisasi.png
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    ') }}"
                                                        class="img-fluid" alt="" style="max-height: 8rem;">
                                                </div>
                                                <div class="col">
                                                    <div class="content">
                                                        <h5 class="fw-bold m-0 p-0">Abigail Cheryl Antoinette</h5>
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
                                                    <img src="{{ asset('ppp/img/kementrian/PSDM/Amellyzha Islamic Lovenus Rahardjo_Staff Kaderisasi.png
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    ') }}"
                                                        class="img-fluid" alt="" style="max-height: 8rem;">
                                                </div>
                                                <div class="col">
                                                    <div class="content">
                                                        <h5 class="fw-bold m-0 p-0">Amellyzha Islamic Lovenus Rahardjo</h5>
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
                                                    <img src="{{ asset('ppp/img/kementrian/PSDM/Danisa Alzura_Staff Sinema.png
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    ') }}"
                                                        class="img-fluid" alt="" style="max-height: 8rem;">
                                                </div>
                                                <div class="col">
                                                    <div class="content">
                                                        <h5 class="fw-bold m-0 p-0">Danisa Alzura</h5>
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
                                                    <img src="{{ asset('ppp/img/kementrian/PSDM/Diana Aulia Firdah _ Staff PAK.png
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    ') }}"
                                                        class="img-fluid" alt="" style="max-height: 8rem;">
                                                </div>
                                                <div class="col">
                                                    <div class="content">
                                                        <h5 class="fw-bold m-0 p-0">Diana Aulia Firdah</h5>
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
                                                    <img src="{{ asset('ppp/img/kementrian/PSDM/Pingky Septiana Risma Putri_Staff SINEMA.png
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    ') }}"
                                                        class="img-fluid" alt="" style="max-height: 8rem;">
                                                </div>
                                                <div class="col">
                                                    <div class="content">
                                                        <h5 class="fw-bold m-0 p-0">Pingky Septiana Risma Putri</h5>
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
                                                    <img src="{{ asset('ppp/img/kementrian/PSDM/Wafiq Salsabila_Staff PAK.png
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    ') }}"
                                                        class="img-fluid" alt="" style="max-height: 8rem;">
                                                </div>
                                                <div class="col">
                                                    <div class="content">
                                                        <h5 class="fw-bold m-0 p-0">Wafiq Salsabila</h5>
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
                                                    <img src="{{ asset('ppp/img/kementrian/PSDM/Muhammad Irsyad_Staff Kaderisasi.png
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    ') }}"
                                                        class="img-fluid" alt="" style="max-height: 8rem;">
                                                </div>
                                                <div class="col">
                                                    <div class="content">
                                                        <h5 class="fw-bold m-0 p-0">Muhammad Irsyad</h5>
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
                                                    <img src="{{ asset('ppp/img/kementrian/PSDM/sabrina_dwi_damayanti-removebg-preview.png
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    ') }}"
                                                        class="img-fluid" alt="" style="max-height: 8rem;">
                                                </div>
                                                <div class="col">
                                                    <div class="content">
                                                        <h5 class="fw-bold m-0 p-0">Sabrina Dwi Damayanti</h5>
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
                                                    <img src="{{ asset('ppp/img/kementrian/PSDM/Haidar Mahija Pratama_STAFF PAK.png
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    ') }}"
                                                        class="img-fluid" alt="" style="max-height: 8rem;">
                                                </div>
                                                <div class="col">
                                                    <div class="content">
                                                        <h5 class="fw-bold m-0 p-0">Haidar Mahija Pratama</h5>
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
                                                    <img src="{{ asset('ppp/img/kementrian/PSDM/Muhammad_Akmal_Aisy_Staff_Sinergitas_Mahasiswa-removebg-preview.png
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    ') }}"
                                                        class="img-fluid" alt="" style="max-height: 8rem;">
                                                </div>
                                                <div class="col">
                                                    <div class="content">
                                                        <h5 class="fw-bold m-0 p-0">Muhammad Akmal Aisy</h5>
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
                                                    <img src="{{ asset('ppp/img/kementrian/PSDM/Faradisa_Agustina_staff_sinema-removebg-preview.png
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    ') }}"
                                                        class="img-fluid" alt="" style="max-height: 8rem;">
                                                </div>
                                                <div class="col">
                                                    <div class="content">
                                                        <h5 class="fw-bold m-0 p-0">Faradisa Agustina</h5>
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
