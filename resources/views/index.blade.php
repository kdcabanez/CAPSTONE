<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link href="./assets/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" />
        <link href="./assets/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
        <link href="./assets/vendors/themify-icons/css/themify-icons.css" rel="stylesheet" />
        <!-- PLUGINS STYLES-->
        <link href="./assets/vendors/jvectormap/jquery-jvectormap-2.0.3.css" rel="stylesheet" />
        <!-- THEME STYLES-->
        <link href="assets/css/main.min.css" rel="stylesheet" />
    </head>
    <body class="fixed-navbar">
        <div class="page-wrapper">
            @include('components.header')
            @include('components.sidebar')
            <div class="content-wrapper">
                @yield('content')
            </div>



        <!-- CORE PLUGINS-->
        <script src="./assets/vendors/jquery/dist/jquery.min.js" type="text/javascript"></script>
        <script src="./assets/vendors/popper.js/dist/umd/popper.min.js" type="text/javascript"></script>
        <script src="./assets/vendors/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="./assets/vendors/metisMenu/dist/metisMenu.min.js" type="text/javascript"></script>
        <script src="./assets/vendors/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
        <!-- PAGE LEVEL PLUGINS-->
        <script src="./assets/vendors/chart.js/dist/Chart.min.js" type="text/javascript"></script>
        <script src="./assets/vendors/jvectormap/jquery-jvectormap-2.0.3.min.js" type="text/javascript"></script>
        <script src="./assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js" type="text/javascript"></script>
        <script src="./assets/vendors/jvectormap/jquery-jvectormap-us-aea-en.js" type="text/javascript"></script>
        <!-- CORE SCRIPTS-->
        <script src="assets/js/app.min.js" type="text/javascript"></script>
        <!-- PAGE LEVEL SCRIPTS-->
        <script src="./assets/js/scripts/dashboard_1_demo.js" type="text/javascript"></script>

        {{-- CUSTOM JS FILES --}}
        <script src="./assets/js/custom_scripts/index.js"></script>
    </body>
</html>
