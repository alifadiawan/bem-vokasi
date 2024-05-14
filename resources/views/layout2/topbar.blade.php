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
                        <li><a href="/" class="{{ (request()->is('/')) ? 'active' : '' }}">Home</a></li>
                        <li><a href="/about" class="{{ (request()->is('about')) ? 'active' : '' }}">About</a></li>
                        <li><a href="/kinerja" class="{{ (request()->is('kinerja')) ? 'active' : '' }}">Kinerja</a></li>
                        <li><a href="/profile" class="{{ (request()->is('profile')) ? 'active' : '' }}">Profile</a></li>
                        <li><a href="vokasi-news" class="{{ (request()->is('vokasi-news')) ? 'active' : '' }}">News</a></li>
                        {{-- <li class="dropdown"><a href="#"><span>Dropdown</span> <i
                                    class="bi bi-chevron-down toggle-dropdown"></i></a>
                            <ul>
                                <li><a href="#">Dropdown 1</a></li>
                                <li class="dropdown"><a href="#"><span>Deep Dropdown</span> <i
                                            class="bi bi-chevron-down toggle-dropdown"></i></a>
                                    <ul>
                                        <li><a href="#">Deep Dropdown 1</a></li>
                                        <li><a href="#">Deep Dropdown 2</a></li>
                                        <li><a href="#">Deep Dropdown 3</a></li>
                                        <li><a href="#">Deep Dropdown 4</a></li>
                                        <li><a href="#">Deep Dropdown 5</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Dropdown 2</a></li>
                                <li><a href="#">Dropdown 3</a></li>
                                <li><a href="#">Dropdown 4</a></li>
                            </ul>
                        </li> --}}
                    </ul>
                    <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
                </nav>
            </div>

        </div>

    </header>