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

    @include('layout2.script')

</body>

</html>
