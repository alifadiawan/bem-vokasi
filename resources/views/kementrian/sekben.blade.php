@extends('layout2.main')
@section('content')

    <!-- Headline -->
    <div class="w-100 overflow-hidden position-relative mt-5">
        <div class="container position-relative mt-5">
            <div class="row">
                <h2 class="fw-bold text-center my-5">Tentang Kementrian Sekben</h2>
            </div>
            <div class="row justify-content-center">
                <div class="col text-center">
                    <img src="{{ asset('ppp/img/kementrian/L-sekben.png') }}" class="img-fluid" alt="" style="max-width: 12rem;">
                    <p class="fw-bold">Sekretaris dan Bendahara Kabinet</p>
                </div>
                <div class="col-12 col-lg-8">
                    <div class="card">
                        <div class="card-body">
                            <div class="col-12">
                                <h3 class="fw-bold">Kementerian Sekretaris dan Bendahara Kabinet</h3>
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

        /* body{
            background-color: rgb(47, 47, 47); 
        } */
    </style>
@endsection

@endsection
