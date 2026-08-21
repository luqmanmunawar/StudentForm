<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>@yield('title', 'Dashboard')</title>

    <!-- Font Awesome -->
    <link
        href="{{ asset('theme-2/vendor/fontawesome-free/css/all.min.css') }}"
        rel="stylesheet"
        type="text/css">

    <!-- Google Font -->
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- SB Admin CSS -->
    <link
        href="{{ asset('theme-2/css/sb-admin-2.min.css') }}"
        rel="stylesheet">

</head>


<body id="page-top">


    <!-- PAGE WRAPPER -->
    <div id="wrapper">


        <!-- SIDEBAR -->
        @include('layouts.backend.sidebar')


        <!-- CONTENT WRAPPER -->
        <div id="content-wrapper" class="d-flex flex-column">


            <!-- MAIN CONTENT -->
            <div id="content">


                <!-- HEADER / TOPBAR -->
                @include('layouts.backend.header')


                <!-- PAGE CONTENT -->
                @yield('content')


            </div>
            <!-- END MAIN CONTENT -->


            <!-- FOOTER -->
            @include('layouts.backend.footer')


        </div>
        <!-- END CONTENT WRAPPER -->


    </div>
    <!-- END PAGE WRAPPER -->


    <!-- Scroll to Top Button -->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>


    <!-- jQuery -->
    <script src="{{ asset('theme-2/vendor/jquery/jquery.min.js') }}"></script>

    <!-- Bootstrap -->
    <script src="{{ asset('theme-2/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- jQuery Easing -->
    <script src="{{ asset('theme-2/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- SB Admin -->
    <script src="{{ asset('theme-2/js/sb-admin-2.min.js') }}"></script>

    <!-- Chart -->
    <script src="{{ asset('theme-2/vendor/chart.js/Chart.min.js') }}"></script>

    <script src="{{ asset('theme-2/js/demo/chart-area-demo.js') }}"></script>

    <script src="{{ asset('theme-2/js/demo/chart-pie-demo.js') }}"></script>


</body>

</html>