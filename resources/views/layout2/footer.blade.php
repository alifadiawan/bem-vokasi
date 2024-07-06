<footer id="footer" class="footer position-relative">

    <div class="container footer-top">
        <div class="row gy-4 justify-content-center mb-4">

            <div class="col-lg-7 col-md-6 col-12 text-center text-lg-start">
                <img src="{{ asset('ppp/img/logo_kabinet.png') }}" alt="" class="py-5"
                    style="max-width: 20rem;">
                
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

    <div class="footer-content text-center pt-5 px-5 px-lg-0">
        Designed & Developed by Kementrian <a href="/profile/kementrian-media-kreatif">Media Kreatif dan
            Digitalisasi</a>
        <p>© <span>Copyright</span> <strong class="px-1 sitename">BEM VOKASI UNAIR 2024</strong> <span>All
                Rights
                Reserved</span>
        </p>
    </div>

</footer>
