    <header id="header" class="header fixed-top">

        <div class="branding d-flex align-items-center">

            <div class="container position-relative d-flex align-items-center justify-content-between">
                <a href="index.html" class="logo d-flex align-items-center">
                    <!-- Uncomment the line below if you also wish to use an image logo -->
                    <img src="{{ asset('assets/img/logo_bem.png') }}" alt="">
                    <h1 class="sitename">BEM VOKASI</h1>
                </a>

                <nav id="navmenu" class="navmenu">
                    <ul>
                        <li><a href="/" class="{{ (request()->is('/')) ? 'active' : '' }} ">Home</a></li>
                        <li><a href="/about" class="{{ (request()->is('about')) ? 'active' : '' }}">About</a></li>
                        <li><a href="/kinerja" class="{{ (request()->is('kinerja')) ? 'active' : '' }}">Kinerja</a></li>
                        <li><a href="/profile" class="{{ (request()->is('profile')) ? 'active' : '' }}">Profile</a></li>
                        {{-- <li class="dropdown"><a href="profile"><span>Profile</span> <i
                            class="bi bi-chevron-down toggle-dropdown"></i></a>
                            <ul>
                                <li><a href="kementrian-sekben">Kementrian Sekben</a></li>
                                <li><a href="kementrian-pembedayaan-perempuan">Kementrian Pemberdayaan Perempuan</a></li>
                                <li><a href="kementrian-media-kreatif">Kementrian Medraf</a></li>
                                <li><a href="kementrian-advokesma">Kementrian Advokesma</a></li>
                                <li><a href="kementrian-ilpres">Kementrian Ilpres</a></li>
                                <li><a href="kementrian-sosial-politik">Kementrian Sospol</a></li>
                                <li><a href="kementrian-luar-negeri">Kementrian Luar Negeri</a></li>
                                <li><a href="kementrian-dalam-negeri">Kementrian Dalam Negeri</a></li>
                                <li><a href="kementrian-pengmaspar">Kementrian Pengmaspar</a></li>
                                <li><a href="kementrian-ekonomi-kreatif">Kementrian Ekraf</a></li>
                                <li><a href="keagamaan-prada">Kementrian Prada</a></li>
                                <li><a href="kementrian-keagamaan">Kementrian Keagamaan</a></li>
                            </ul>
                        </li>    --}}
                        <li><a href="vokasi-news" class="{{ (request()->is('vokasi-news')) ? 'active' : '' }}">News</a></li>
                        </li>
                    </ul>
                    <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
                </nav>
            </div>

        </div>

    </header>