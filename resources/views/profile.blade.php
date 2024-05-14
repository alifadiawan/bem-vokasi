@extends('layout2.main')
@section('content')
    
 <!-- Hero Section -->
 <section id="hero" class="hero section">

    <img id="background" src="{{ asset('sailor/img/bg-unair.jpg') }}" alt="" data-aos="fade-down"
        data-aos-duration="1000">

    <div class="container">
        <div class="row text-center justify-content-center align-items-center">
            <div class="col-lg-12">
                <h2>Struktur Organisasi</h2>
            </div>
        </div>
        <div class="row text-center justify-content-center align-items-center floating">
            <div class="col">
                <img src="{{ asset('assets/img/logo_bem.png') }}" alt="" data-aos="fade-left"
                data-aos-duration="1500" data-aos-delay="1200" class="img-fluid floating" style="height: 15rem">
                <h4>Ketua</h4>
            </div>
            <div class="col">
                <img src="{{ asset('assets/img/logo_bem.png') }}" alt="" data-aos="fade-left"
                    data-aos-duration="1500" data-aos-delay="1200" class="img-fluid floating" style="height: 15rem">
                <h4>Wakil Ketua</h4>
            </div>
        </div>
    </div>

</section><!-- /Hero Section -->

@endsection