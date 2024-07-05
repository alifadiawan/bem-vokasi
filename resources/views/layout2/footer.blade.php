<footer id="footer" class="footer position-relative">

    <div class="container footer-top">
        <div class="row gy-4 justify-content-center mb-4">

            <div class="col-lg-7 col-md-6 col-12">
                <div class="d-flex flex-lg-row flex-column align-items-center gap-3">
                    <img src="{{ asset('ppp/img/logo_bem.png') }}" alt="" class="img-fluid"
                        style="max-width: 10rem;">
                    <h5 class="text-center" style="max-width: 18rem;">Website Resmi BEM Vokasi Universitas Airlangga 2024</h5>
                </div>
            </div>


            <div class="col-lg-1 col-md-3 col-6 footer-links">
                <h4>Halaman</h4>
                <ul>
                    <li><a href="/" class="{{ request()->is('/') ? 'active' : '' }} ">Home</a></li>
                    <li><a href="/about" class="{{ request()->is('about') ? 'active' : '' }}">About</a></li>
                    <li><a href="/kinerja" class="{{ request()->is('kinerja') ? 'active' : '' }}">Kinerja</a></li>
                    <li><a href="/profile" class="{{ request()->is('profile*') ? 'active' : '' }}">Profile</a></li>
                    <li><a href="/blogs" class="{{ request()->is('profile*') ? 'active' : '' }}">Vokasi News</a></li>
                </ul>
            </div>

            <div class="col-lg-3 col-md-3 col-6 footer-links  ">
                <h4>Kontak</h4>
                <p>Dharmawangsa Dalam Selatan No.28 – 30, Surabaya Indonesia 60286
                </p>
                <p>Telp. : +62 – 031 – 5033869, 031 – 5053156</p>
            </div>

        </div>
    </div>

    <hr>

    <div class="container footer text-center">
        <div class="row justify-content-center align-items-center">
            <div class="col">
                Designed & Developed by Kementrian <a href="/profile/kementrian-media-kreatif">Media Kreatif dan
                    Digitalisasi</a>
                <p>© <span>Copyright</span> <strong class="px-1 sitename">BEM VOKASI UNAIR 2024</strong> <span>All
                        Rights
                        Reserved</span>
                </p>
            </div>
        </div>
        <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you've purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
        </div>
    </div>
</footer>
