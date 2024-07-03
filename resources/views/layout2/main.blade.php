<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>BEM Vokasi Unair @php echo date('Y') @endphp</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- CSS -->
    @include('layout2.style')
    <!-- =======================================================
  * Template Name: Day
  * Template URL: https://bootstrapmade.com/day-multipurpose-html-template-for-free/
  * Updated: May 04 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="index-page">
    
    @include('layout2.topbar')
    
    
    <main class="main">
        
        @yield('content')

    </main>


    <!-- footer -->
    @include('layout2.footer')
    <!-- end footer  -->



    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center rounded-3"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Preloader -->
    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="{{ asset('ppp/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('ppp/vendor/php-email-form/validate.js') }}"></script>
    <script src="{{ asset('ppp/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('ppp/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('ppp/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('ppp/vendor/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('ppp/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>

    <!-- Main JS File -->
    <script src="{{ asset('ppp/js/main.js') }}"></script>
    <script>
        const navbar = document.getElementById('navmenu');
        const header = document.getElementById('header');
        const threshold = 300; // Adjust this value to define scroll amount for transparency

        window.addEventListener('scroll', () => {
            const scrolled = window.scrollY;
            if (scrolled > threshold) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
        });
    </script>
    <script>
        const preloader = document.querySelector('#preloader');
        const MIN_DISPLAY_TIME = 3000; // Minimum time in milliseconds (1 second)
        const startTime = new Date().getTime();

        if (preloader) {
            window.addEventListener('load', () => {
                const currentTime = new Date().getTime();
                const elapsedTime = currentTime - startTime;
                const remainingTime = MIN_DISPLAY_TIME - elapsedTime;

                setTimeout(() => {
                    preloader.remove();
                }, remainingTime > 0 ? remainingTime : 0);
            });
        }
    </script>


</body>

</html>
