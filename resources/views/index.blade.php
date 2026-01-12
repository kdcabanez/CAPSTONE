<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Document</title>
        <link href="./assets/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" />
        <link href="./assets/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
        <link href="./assets/vendors/themify-icons/css/themify-icons.css" rel="stylesheet" />
        <!-- PLUGINS STYLES-->
        <link href="./assets/vendors/jvectormap/jquery-jvectormap-2.0.3.css" rel="stylesheet" />
        <link href="./assets/vendors/DataTables/datatables.min.css" rel="stylesheet" />
        <!-- THEME STYLES-->
        <link href="assets/css/main.min.css" rel="stylesheet" />
        @vite([
            // CSS FILES
            'resources/css/app.css',

            // JS FILES
            'resources/js/app.js',
            'resources/js/index.js',
            'resources/js/application.js',
            'resources/js/api/application.js',
            'resources/js/datatable.js',
            'resources/js/DisplayApplication.js',
        ])
    </head>
    <body class="fixed-navbar">
        @yield('content')


        <!-- CORE PLUGINS-->
        <script src="./assets/vendors/jquery/dist/jquery.min.js" type="text/javascript"></script>
        <script src="./assets/vendors/popper.js/dist/umd/popper.min.js" type="text/javascript"></script>
        <script src="./assets/vendors/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="./assets/vendors/metisMenu/dist/metisMenu.min.js" type="text/javascript"></script>
        <script src="./assets/vendors/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
        <!-- PAGE LEVEL PLUGINS-->
        <script src="./assets/vendors/DataTables/datatables.min.js" type="text/javascript"></script>
        <script src="./assets/vendors/chart.js/dist/Chart.min.js" type="text/javascript"></script>
        <script src="./assets/vendors/jvectormap/jquery-jvectormap-2.0.3.min.js" type="text/javascript"></script>
        <script src="./assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js" type="text/javascript"></script>
        <script src="./assets/vendors/jvectormap/jquery-jvectormap-us-aea-en.js" type="text/javascript"></script>
        <!-- CORE SCRIPTS-->
        <script src="assets/js/app.min.js" type="text/javascript"></script>
        <!-- PAGE LEVEL SCRIPTS-->
        <script src="./assets/js/scripts/dashboard_1_demo.js" type="text/javascript"></script>
    </body>
</html>
