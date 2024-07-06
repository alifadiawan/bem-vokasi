<!-- Preloader -->
<div id="preloader"></div>

<!-- Vendor JS Files -->
<script src="{{ asset('ppp/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('ppp/vendor/aos/aos.js') }}"></script>

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

@yield('page-script')