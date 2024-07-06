<link href="{{ asset('ppp/img/logo_bem.png') }}" rel="icon">
<link href="{{ asset('ppp/img/logo_bem.png') }}" rel="apple-touch-icon">

<!-- Fonts -->
<link href="https://fonts.googleapis.com" rel="preconnect">
<link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
<link
    href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet">

<!-- Vendor CSS Files -->
<link href="{{ asset('ppp/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
<link href="{{ asset('ppp/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
<link href="{{ asset('ppp/vendor/aos/aos.css') }}" rel="stylesheet">

<!-- Main CSS File -->
<link href="{{ asset('ppp/css/main.css') }}" rel="stylesheet">
<style>
    .profile-card-1 {
        background-color: #FFF;
        border-radius: 10px;
        box-shadow: 0px 0px 25px rgba(0, 0, 0, 0.1);
        background-image: url(../img/profile-bg-1.jpg);
        background-position: center;
        padding-top: 100px;
        overflow: hidden;
        position: relative;
        margin: 10px auto;
        cursor: pointer;
        max-width: 300px;
    }

    .profile-card-1 .profile-content {
        position: relative;
        background-color: #FFF;
        padding: 70px 20px 20px 20px;
        text-align: center;
    }

    .profile-card-1 .profile-img {
        position: absolute;
        height: 100px;
        left: 0px;
        right: 0px;
        z-index: 10;
        top: -50px;
        transition: all 0.25s linear;
        transform-style: preserve-3d;
    }

    .profile-card-1 .profile-img img {
        height: 100px;
        margin: auto;
        border-radius: 50%;
        border: 5px solid #FFF;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
    }

    .profile-card-1 .profile-name {
        font-size: 18px;
        font-weight: bold;
        color: #021830;
    }

    .profile-card-1 .profile-address {
        color: #777;
        font-size: 12px;
        margin: 0px 0px 15px 0px;
    }

    .profile-card-1 .profile-description {
        font-size: 13px;
        padding: 5px 10px;
        color: #777;
    }

    .profile-card-1 .profile-icons .fa {
        margin: 5px;
        color: #777;
    }

    .profile-card-1:hover {
        box-shadow: 0px 0px 50px rgba(0, 0, 0, 0.1);
    }

    .profile-card-1:hover .profile-img {
        transform: rotateY(180deg);
    }
</style>

@yield('page-css')
