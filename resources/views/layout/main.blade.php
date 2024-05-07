<!doctype html>
<html class="h-100" lang="en">

<head>
    @include('layout.style')
</head>

<body class="bg-black text-white mt-0" data-bs-spy="scroll" data-bs-target="#navScroll">

    @include('layout.topbar')

    <!-- content -->
    <main>
        @yield('content')
    </main>

    <!--footer -->
    @include('layout.footer')


    <!-- javascript -->
    @include('layout.script')

</body>

</html>
