<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <!-- Site Metas -->
    <title>GoodWEB Solutions</title>

    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon"
          href="{{ asset('theme-1/images/favicon.ico') }}"
          type="image/x-icon">

    <link rel="apple-touch-icon"
          href="{{ asset('theme-1/images/apple-touch-icon.png') }}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet"
          href="{{ asset('theme-1/css/bootstrap.min.css') }}">

    <!-- Site CSS -->
    <link rel="stylesheet"
          href="{{ asset('theme-1/style.css') }}">

    <!-- Responsive CSS -->
    <link rel="stylesheet"
          href="{{ asset('theme-1/css/responsive.css') }}">

    <!-- Custom CSS -->
    <link rel="stylesheet"
          href="{{ asset('theme-1/css/custom.css') }}">

    <!-- Modernizer / Modernizr -->
    <script src="{{ asset('theme-1/js/modernizer.js') }}"></script>

    <!-- Font Awesome -->
<link rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">

<!-- Icon-display -->
 <link rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.3.0/css/all.min.css"
      integrity="sha512-ApSLB1Pd3/bZN8fWB/RG9YhN/7bd9Hkf3AGaE2mPfebjrxagjuBtx2GcgdqIlJkUzwylBo61r9Xa9NmgBI0swA=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer">
</head>

<body>


<!-- LOADER -->
<!-- <div id="preloader">

    <div class="loader">

        <div class="loader__bar"></div>
        <div class="loader__bar"></div>
        <div class="loader__bar"></div>
        <div class="loader__bar"></div>
        <div class="loader__bar"></div>

        <div class="loader__ball"></div>

    </div>

</div> -->
<!-- END LOADER -->


@include('layout.header')


@yield('content')


@include('layout.footer')


<!-- ALL JS FILES -->
<script src="{{ asset('theme-1/js/all.js') }}"></script>

<!-- ALL PLUGINS -->
<script src="{{ asset('theme-1/js/custom.js') }}"></script>
<script src="{{ asset('theme-1/js/portfolio.js') }}"></script>
<script src="{{ asset('theme-1/js/hoverdir.js') }}"></script>


</body>
</html>