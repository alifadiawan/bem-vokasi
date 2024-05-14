@extends('layout2.main')
@section('content')
    <!-- Headline -->
    <div class="w-100 overflow-hidden position-relative mt-5">
        <div class="container position-relative mt-5">
            <div class="row">
                <div class=" rounded-5">
                    <div class="card border-0 mb-1" id="headline">
                        <div class="row p-0 m-0">
                            <div class="col p-0">
                                <div class="card card-news p-0">
                                    <div class="card-body">
                                        <img src="https://placehold.co/1000x500" class="rounded-3 w-100 h-100">
                                        {{-- <img src="{{ asset('assets/result.png') }}" class="img-fluid rounded-5" width="1000"
                                        height="500"> --}}
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5 col-md-12 col-sm-12">
                                <div class="d-flex flex-column h-100 mt-5">
                                    <div class="col">
                                        <h1>Ayo Bergerak Bersama Lanjutkan Merdeka Belajar!</h1>
                                    </div>
                                    <div class="col">
                                        <div class="card card-news">
                                            <span class="fw-lighter">Dalam rangka memperingati Hari Pendidikan Nasional
                                                (Hardiknas) setiap tanggal 2 Mei,
                                                Universitas
                                                Airlangga (UNAIR) ikut serta hadir menyemarakkan pada Jumat (3/5/2024) di
                                                Indonesia
                                                Arena,
                                                Kompleks
                                                Gelora Bung Karno, Senayan. Tahun ini, Kementerian Pendidikan, Kebudayaan,
                                                Riset, dan
                                                ....
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col mt-5 mb-5">
                                        <a href="/vokasi-news/detail" class="link-fancy link-fancy-light">Read more</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="w-100 overflow-hidden position-relative pt-5">
        <div class="container py-vh-4 position-relative mt-5">
            <div class="row">

                <div class="col">
                    <a href="/vokasi-news/detail" class="card-link">
                        <div class="card card-news mb-5" data-aos="zoom-in-up" id="card-id">
                            <img src="https://placehold.co/100x50" class="card-img mb-2" alt="">
                            <h5>Field Trip FIB Kenalkan Peneleh sebagai Aset Budaya Surabaya</h5>
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a href="/vokasi-news/detail" class="card-link">
                        <div class="card card-news mb-5" data-aos="zoom-in-up" id="card-id">
                            <img src="https://placehold.co/100x50" class="card-img mb-2 rounded-3 no-bottom-radius"
                                alt="">
                            <h5>Pembelajaran Berbasis Simulasi Interdisipliner untuk Perawat</h5>
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a href="/vokasi-news/detail" class="card-link">
                        <div class="card card-news mb-5" data-aos="zoom-in-up" id="card-id">
                            <img src="https://placehold.co/100x50" class="card-img mb-2" alt="">
                            <h5>Kuliah Tamu FIB Ungkap Pengenalan Sejarah melalui Simbol</h5>
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a href="/vokasi-news/detail" class="card-link">
                        <div class="card card-news mb-5" data-aos="zoom-in-up" id="card-id">
                            <img src="https://placehold.co/100x50" class="card-img mb-2" alt="">
                            <h5>Peran Pancasila dalam Legitimasi Kebijakan Publik Indonesia</h5>
                        </div>
                    </a>
                </div>

            </div>

            <div class="row">

                <div class="col">
                    <a href="/vokasi-news/detail" class="card-link">
                        <div class="card card-news mb-5" data-aos="zoom-in-up" id="card-id">
                            <img src="https://placehold.co/100x50" class="card-img mb-2" alt="">
                            <h5>Field Trip FIB Kenalkan Peneleh sebagai Aset Budaya Surabaya</h5>
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a href="/vokasi-news/detail" class="card-link">
                        <div class="card card-news mb-5" data-aos="zoom-in-up" id="card-id">
                            <img src="https://placehold.co/100x50" class="card-img mb-2 rounded-3 no-bottom-radius"
                                alt="">
                            <h5>Pembelajaran Berbasis Simulasi Interdisipliner untuk Perawat</h5>
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a href="/vokasi-news/detail" class="card-link">
                        <div class="card card-news mb-5" data-aos="zoom-in-up" id="card-id">
                            <img src="https://placehold.co/100x50" class="card-img mb-2" alt="">
                            <h5>Kuliah Tamu FIB Ungkap Pengenalan Sejarah melalui Simbol</h5>
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a href="/vokasi-news/detail" class="card-link">
                        <div class="card card-news mb-5" data-aos="zoom-in-up" id="card-id">
                            <img src="https://placehold.co/100x50" class="card-img mb-2" alt="">
                            <h5>Peran Pancasila dalam Legitimasi Kebijakan Publik Indonesia</h5>
                        </div>
                    </a>
                </div>


            </div>
        </div>
    </div>

@section('page-css')
    <style>
        #headline:hover {
            box-shadow: 0 0 11px rgba(33, 33, 33, .2);
        }

        .card-news {
            border: none;
        }

        .header .branding {
            background-color: rgba(var(--default-color-rgb), 0.05);
            background-color: #242424;
        }
    </style>
@endsection
@endsection
