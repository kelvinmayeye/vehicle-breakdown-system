<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon.png">
    <title>Brakedown system</title>
    <!-- Custom CSS -->
    <link href="{{asset(url('backend/assets/extra-libs/c3/c3.min.css'))}}" rel="stylesheet">
    <link href="{{asset(url('backend/assets/libs/chartist/dist/chartist.min.css'))}}" rel="stylesheet">
    <link href="{{asset(url('backend/assets/extra-libs/jvector/jquery-jvectormap-2.0.2.css'))}}" rel="stylesheet" />
    <!-- Custom CSS -->
    <link href="{{asset(url('backend/dist/css/style.min.css'))}}" rel="stylesheet">
    
</head>

<body>
    
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    
    <div id="main-wrapper" data-theme="light" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed" data-boxed-layout="full">
        
        @include('backend.layouts.topbar')

        @include('backend.layouts.sidebar')


        <div class="page-wrapper">
            @include('backend.partials.notification')
            @yield('content')



            <footer class="footer text-center text-muted">
                All Rights Reserved by Freedash. Designed and Developed by <a
                    href="#">Karim</a>.
            </footer>
            
        </div>
        
    </div>
    <script src="{{asset(url('backend/assets/libs/jquery/dist/jquery.min.js'))}}"></script>
    <script src="{{asset(url('backend/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js'))}}"></script>
    <!-- apps -->
    <!-- apps -->
    <script src="{{asset(url('backend/dist/js/app-style-switcher.js'))}}"></script>
    <script src="{{asset(url('backend/dist/js/feather.min.js'))}}"></script>
    <script src="{{asset(url('backend/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js'))}}"></script>
    <script src="{{asset(url('backend/dist/js/sidebarmenu.js'))}}"></script>
    <!--Custom JavaScript -->
    <script src="{{asset(url('backend/dist/js/custom.min.js'))}}"></script>
    <!--This page JavaScript -->
    <script src="{{asset(url('backend/assets/extra-libs/c3/d3.min.js'))}}"></script>
    <script src="{{asset(url('backend/assets/extra-libs/c3/c3.min.js'))}}"></script>
    <script src="{{asset(url('backend/assets/libs/chartist/dist/chartist.min.js'))}}"></script>
    <script src="{{asset(url('backend/assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js'))}}"></script>
    <script src="{{asset(url('backend/assets/extra-libs/jvector/jquery-jvectormap-2.0.2.min.js'))}}"></script>
    <script src="{{asset(url('backend/assets/extra-libs/jvector/jquery-jvectormap-world-mill-en.js'))}}"></script>
    <script src="{{asset(url('backend/dist/js/pages/dashboards/dashboard1.min.js'))}}"></script>
</body>

</html>