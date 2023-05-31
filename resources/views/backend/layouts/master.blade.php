<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Vehicle Breakdown | Home</title>

    <!-- Bootstrap -->
    <link href="cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <link href="{{ asset('backend/vendors/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{ asset('backend/vendors/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{ asset('backend/vendors/nprogress/nprogress.css') }}" rel="stylesheet">
    <!-- iCheck -->
    <link href="{{ asset('backend/vendors/iCheck/skins/flat/green.css') }}" rel="stylesheet">
    <!-- Datatables -->

    <link href="{{ asset('backend/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css') }}"
        rel="stylesheet">
    <link href="{{ asset('backend/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css') }}" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{{ asset('backend/build/css/custom.min.css') }}" rel="stylesheet">
    
        {{-- @include('partials.graphs.dashboard_graphscript') --}}
    
</head>

<body class="nav-md">
    <div class="container body">
        <div class="main_container">
            <!-- top navigation -->
            @include('backend.layouts.topnav')
            <!-- /top navigation -->

            <!-- page content -->
            <div class="right_col" role="main">
                <div class="">

                    <div class="clearfix"></div>
                    @include('backend.partials.notification')
                    @yield('content')

                    <!-- jQuery -->
                    <script src="{{ asset('backend/vendors/jquery/dist/jquery.min.js') }}"></script>
                    <!-- Bootstrap -->
                    <script src="{{ asset('backend/vendors/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
                    <!-- FastClick -->
                    <script src="{{ asset('backend/vendors/fastclick/lib/fastclick.js') }}"></script>
                    <!-- NProgress -->
                    <script src="{{ asset('backend/vendors/nprogress/nprogress.js') }}"></script>
                    <!-- iCheck -->
                    <script src="{{ asset('backend/vendors/iCheck/icheck.min.js') }}"></script>
                    <!-- Datatables -->
                    <script src="{{ asset('backend/vendors/datatables.net/js/jquery.dataTables.min.js') }}"></script>
                    <script src="{{ asset('backend/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>
                    <script src="{{ asset('backend/vendors/datatables.net-buttons/js/dataTables.buttons.min.js') }}"></script>
                    <script src="{{ asset('backend/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js') }}"></script>
                    <script src="{{ asset('backend/vendors/datatables.net-buttons/js/buttons.flash.min.js') }}"></script>
                    <script src="{{ asset('backend/vendors/datatables.net-buttons/js/buttons.html5.min.js') }}"></script>
                    <script src="{{ asset('backend/vendors/datatables.net-buttons/js/buttons.print.min.js') }}"></script>
                    <script src="{{ asset('backend/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js') }}"></script>
                    <script src="{{ asset('backend/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js') }}"></script>
                    <script src="{{ asset('backend/vendors/datatables.net-responsive/js/dataTables.responsive.min.js') }}"></script>
                    <script src="{{ asset('backend/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js') }}"></script>
                    <script src="{{ asset('backend/vendors/datatables.net-scroller/js/dataTables.scroller.min.js') }}"></script>
                    <script src="{{ asset('backend/vendors/jszip/dist/jszip.min.js') }}"></script>

                    {{-- morris.js --}}
                    <script src="{{ asset('backend/vendors/raphael/raphael.min.js') }}"></script>
                    <script src="{{ asset('backend/vendors/morris.js/morris.min.js') }}"></script>

                    {{-- ECharts --}}
                    <script src="{{ asset('backend/vendors/echarts/dist/echarts.min.js') }}"></script>
                    <script src="{{ asset('backend/vendors/echarts/map/js/world.js') }}"></script>

                    {{-- Colmn Charts --}}
                    <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>

                    {{-- Custom Theme Scripts --}}
                    <script src="{{ asset('backend/build/js/custom.min.js') }}"></script>
</body>

</html>
