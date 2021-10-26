<!doctype html>
<html lang="en">
<head>
    @include('edomi_dashboard_layout.header')
    @stack('style')
    @livewireStyles
</head>
<!-- END: Head-->
<!-- BEGIN: Body-->
<body class="app sidebar-mini">

<!--Loader-->
<div id="global-loader">
    <img src="{{asset('FrontTheme/assets/images/loader.svg')}}" class="loader-img" alt="">
</div>
<!--Loader-->

<!--Page-->
<div class="page">
    <div class="page-main">

        <!--App-Header-->
        <div class="app-header1 header py-2 d-flex">
            @include('edomi_dashboard_layout.horizental-menu')
        </div>
        <!--/App-Header-->

        <!-- Sidebar menu-->
        <div class="app-sidebar__overlay" data-bs-toggle="sidebar"></div>
        <aside class="app-sidebar doc-sidebar">
            @include('edomi_dashboard_layout.sidebar')
        </aside>
        <!-- /Sidebar menu-->

        <!--App-Content-->
        <div class="app-content  my-3 my-md-5">
            <div class="side-app">

                <!-- Page Header-->
                <div class="page-header">
                    <h4 class="page-title"> </h4>

                </div>
                <!-- /Page Header-->
                <div class="content-overlay"></div>
                <div class="header-navbar-shadow"></div>
                <div class="content-header row">
                </div>
                <div class="content-body">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>

    <!--Footer-->
    <footer class="footer">
     @include('dashboard_layout.footer')
    </footer>
    <!--/Footer-->
</div>

<!-- Back to top -->
<a href="#top" id="back-to-top" ><i class="fa fa-long-arrow-up"></i></a>

<!-- JQuery js-->
<script src="{{asset('FrontTheme/assets/js/jquery-3.2.1.min.js')}}"></script>

<!-- Bootstrap js -->
<script src="{{asset('FrontTheme/assets/plugins/bootstrap/js/popper.min.js')}}"></script>
<script src="{{asset('FrontTheme/assets/plugins/bootstrap/js/bootstrap-rtl.js')}}"></script>

<!--JQuery Sparkline Js-->
<script src="{{asset('FrontTheme/assets/js/jquery.sparkline.min.js')}}"></script>

<!-- Circle Progress Js-->
<script src="{{asset('FrontTheme/assets/js/circle-progress.min.js')}}"></script>

<!-- Star Rating Js-->
<script src="{{asset('FrontTheme/assets/plugins/jquery-bar-rating/jquery.barrating.js')}}"></script>
<script src="{{asset('FrontTheme/assets/plugins/jquery-bar-rating/js/rating.js')}}"></script>

<!-- Fullside-menu Js-->
<script src="{{asset('FrontTheme/assets/plugins/sidemenu/sidemenu.js')}}"></script>

<!--Select2 js -->
<script src="{{asset('FrontTheme/assets/plugins/select2/select2.full.min.js')}}"></script>
<script src="{{asset('FrontTheme/assets/js/select2.js')}}"></script>

<!-- Custom scroll bar Js-->
<script src="{{asset('FrontTheme/assets/plugins/pscrollbar/pscrollbar.js')}}"></script>
<script src="{{asset('FrontTheme/assets/plugins/pscrollbar/pscroll.js')}}"></script>

<!--Counters -->
<script src="{{asset('FrontTheme/assets/plugins/counters/counterup.min.js')}}"></script>
<script src="{{asset('FrontTheme/assets/plugins/counters/waypoints.min.js')}}"></script>

<!-- Data tables -->
<script src="{{asset('FrontTheme/assets/plugins/datatable/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('FrontTheme/assets/plugins/datatable/js/dataTables.bootstrap5.min.js')}}"></script>

<!-- CHARTJS CHART -->
<script src="{{asset('FrontTheme/assets/plugins/chart/Chart.bundle.js')}}"></script>
<script src="{{asset('FrontTheme/assets/plugins/chart/utils.js')}}"></script>

<!-- Index Scripts -->
<script src="{{asset('FrontTheme/assets/plugins/echarts/echarts.js')}}"></script>
<script src="{{asset('FrontTheme/assets/js/index5.js')}}"></script>

<!-- Custom Js-->
<script src="{{asset('FrontTheme/assets/js/admin-custom.js')}}"></script>
@livewireScripts
@stack('script')
</body>
</html>
