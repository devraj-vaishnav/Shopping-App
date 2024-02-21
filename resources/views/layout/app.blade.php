<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title')</title>
    <link href="{{asset('web/assets/img/favicon.png')}}" rel="icon">
    <link href="{{asset('assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">
  
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  
    <!-- Vendor CSS Files -->
    <link href="{{asset('web/assets/vendor/animate.css/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('web/assets/vendor/aos/aos.css')}}" rel="stylesheet">
    <link href="{{asset('web/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('web/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{asset('web/assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
    <link href="{{asset('web/assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
    <link href="{{asset('web/assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

    <link href="{{asset('web/assets/css/style.css')}}" rel="stylesheet">
  

    @stack('header_script')
</head>

<body>
    @include('layout.navbar')
    <div class="contant">
        @yield('contant')
    </div>
    @include('layout.footer')
    @stack('footer_script')
</body>
<script src="{{asset('web/assets/vendor/purecounter/purecounter_vanilla.js')}}"></script>
<script src="{{asset('web/assets/vendor/aos/aos.js')}}"></script>
<script src="{{asset('web/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('web/assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
<script src="{{asset('web/assets/vendor/php-email-form/validate.js')}}"></script>

<!-- Template Main JS File -->
<script src="{{asset('web/assets/js/main.js')}}"></script>
</html>