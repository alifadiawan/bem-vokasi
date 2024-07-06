@extends('layout2.main')
@section('content')

    <section class="hero section">

        <img id="background" src="{{ asset('ppp/img/bg.png') }}" alt="">

        <div class="container px-lg-0 px-5">
            <div class="d-flex flex-column justify-content-center">
                <h1 class="text-center">Kinerja BEM Fakultas Vokasi </h1>

                <div id="my-pdf" class="mt-3"></div>

            </div>
        </div>
    </section>

@section('page-css')
    <style>
        .header .branding {
            background-color: rgba(var(--default-color-rgb), 0.05);
            background-color: #242424;
        }

        #my-pdf{
            height: 1000px;
        }
    </style>
@endsection

@section('page-script')
    <script src="https://unpkg.com/pdfobject"></script>
    <script>
        let customMessage = "Browser ini tidak mendukung untuk menampilkan PDF, Silahkan buka menggunakan Komputer atau Laptop atau download <br> <a href='[url]'>kinerja_bem_fakultas_vokasi_2024.pdf</a>"

        PDFObject.embed("ppp/img/kinerja.pdf", "#my-pdf", { fallbackLink : customMessage });
    </script>
@endsection

@endsection
