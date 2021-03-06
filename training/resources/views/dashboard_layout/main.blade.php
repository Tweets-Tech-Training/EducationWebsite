<!DOCTYPE html>
<html class="loading" lang="ar" data-textdirection="ltr">
<!-- BEGIN: Head-->
<head>
    @include('dashboard_layout.header')
    <style>
        .upload-btn-wrapper{
            position: relative;
            height: 200px;
            width: 200px;
            margin-bottom: 20px;
            padding: 5px;
        }
        .upload-btn-wrapper .upload-btn{
            position: relative;
            background-color: #f7f7f7;
            width: 100%;
            height: 100%;
            border-radius: 17px;
            margin: 0px;
            padding: 0px;
            border: none;
            font-size: 60px;
            color: #7367F0;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .upload-btn-wrapper .upload-btn img{
            max-width: 100%;
            max-height: 100%;
        }
        .upload-btn-wrapper .profile-img-input{
            position: absolute;
            right: 0;
            top: 0;
            opacity: 0;
            width: 100%;
            height: 100%;
            border-radius: 50%;
            cursor: pointer;
        }
        .upload-hover{
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            display: none;
            justify-content: center;
            align-items: center;
        }
        .upload-btn-wrapper:hover{
            border: 2px solid #e3e3e3;
        }
        .social a{
            width: 20px;
            height: 30px;
            display: inline-flex;
            justify-content: center;
            align-items: center;
            margin: 5px;
        }

    </style>
    @stack('style')
    @livewireStyles
</head>
<!-- END: Head--><meta name="csrf-token" content="{{ csrf_token() }}">
<!-- BEGIN: Body-->
<body class="vertical-layout vertical-menu-modern 2-columns  navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="2-columns">
<!-- BEGIN: Header - horizontal-header -->
@include('dashboard_layout.horizontal-menu')
<!-- END: Header  - horizontal-header -->
<!-- BEGIN: Main Menu- sidebar-->
<div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
    @include('dashboard_layout.sidebar')
</div>
<!-- BEGIN: Content-->
<div id="app">
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                @yield('content')
            </div>
        </div>
    </div>
    <!-- END: Content-->
    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>
    <!-- BEGIN: Footer-->
    <footer class="footer footer-static footer-light">
        @include('dashboard_layout.footer')
    </footer>
    <!-- END: Footer-->
</div>
<!-- BEGIN: Vendor JS-->
<script src="{{asset('admin-layout/app-assets/vendors/js/vendors.min.js')}}"></script>
<!-- BEGIN Vendor JS-->
<!-- BEGIN: Page Vendor JS-->
<script src="{{asset('admin-layout/app-assets/vendors/js/charts/apexcharts.min.js')}}"></script>
{{--<script src="{{asset('admin-layout/app-assets/vendors/js/extensions/tether.min.js')}}"></script>--}}
{{--<script src="{{asset('admin-layout/app-assets/vendors/js/extensions/shepherd.min.js')}}"></script>--}}
<!-- END: Page Vendor JS-->

<!-- BEGIN: Theme JS-->
<script src="{{asset('admin-layout/app-assets/js/core/app-menu.js')}}"></script>
<script src="{{asset('admin-layout/app-assets/js/core/app.js')}}"></script>
<script src="{{asset('admin-layout/app-assets/js/scripts/components.js')}}"></script>
<!-- END: Theme JS-->

<!-- BEGIN: Page JS-->
<script src="{{asset('admin-layout/app-assets/js/scripts/pages/dashboard-analytics.js')}}"></script>
<script src="https://res.cloudinary.com/dxfq3iotg/raw/upload/v1569006273/BBBootstrap/choices.min.js?version=7.0.0"></script>
{{--<script src="{{asset('js/firebase.js')}}"></script>--}}
<script src="{{asset('admin-layout/app-assets/vendors/js/tables/datatable/datatables.min.js')}}"></script>
<script src="{{asset('admin-layout/app-assets/vendors/js/tables/datatable/datatables.buttons.min.js')}}"></script>
<script src="{{asset('admin-layout/app-assets/vendors/js/tables/datatable/datatables.bootstrap4.min.js')}}"></script>
<script src="{{asset('admin-layout/app-assets/vendors/js/tables/datatable/buttons.bootstrap.min.js')}}"></script>
<script src="{{asset('admin-layout/app-assets/vendors/js/tables/datatable/dataTables.select.min.js')}}"></script>
<script src="{{asset('admin-layout/app-assets/vendors/js/tables/datatable/datatables.checkboxes.min.js')}}"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="{{asset('admin-layout/app-assets/vendors/js/pickers/pickadate/picker.js')}}"></script>
<script src="{{asset('admin-layout/app-assets/vendors/js/pickers/pickadate/picker.date.js')}}"></script>

<script src="{{asset('admin-layout/app-assets/vendors/js/pickers/pickadate/picker.time.js')}}"></script>

<script src="{{asset('admin-layout/app-assets/vendors/js/pickers/pickadate/legacy.js')}}"></script>
<script src="{{asset('admin-layout/app-assets/vendors/js/pickers/flatpickr/flatpickr.min.js')}}"></script>
<script src="{{asset('admin-layout/app-assets/js/scripts/forms/pickers/form-pickers.js')}}"></script>
{{--<script src="{{asset('admin-layout/app-assets/vendors/js/pickers/pickadate/picker.time.js')}}"></script>--}}
<!-- BEGIN: Page JS-->
<!-- END: Page JS-->
@livewireScripts

<script>
    $(document).ready(function(){
        var multipleCancelButton = new Choices('#choices-multiple-remove-button', {
            removeItemButton: true,
            maxItemCount:10,
            searchResultLimit:5,
            renderChoiceLimit:5
        });


    });
</script>
<script>
    window.livewire.on('modalHide', (data) => {
        $(data).modal('hide');
    });
    window.livewire.on('modalShow', (data) => {
        $(data).modal('show');
    });

    window.addEventListener('swal:modal', event => {
        swal({
            title: event.detail.message,
            text: event.detail.text,
            icon: event.detail.type,
            showConfirmButton: event.detail.showConfirmButton,
            timer: event.detail.timer ,
        }).then(function() {
            if(event.detail.url) {
                window.location = event.detail.url
            }
        });
    });

    window.addEventListener('swal:confirm', event => {
        swal({
            title: event.detail.message,
            text: event.detail.text,
            icon: event.detail.type,
            buttons: true,
            dangerMode: true,
        })
            .then((willDelete) => {
                if (willDelete) {
                    window.livewire.emit('remove');
                }
            });
    });
    window.addEventListener('swal2:modal', event => {
        Swal.fire({
            icon: 'error',
            text: event.detail.message,
            confirmButtonText: '??????????',
            // footer: '<a href="">Why do I have this issue?</a>'
        })
    });
</script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/4.2.0/core/main.min.js"></script>

{{--<script src="{{asset('admin-layout/app-assets/js/scripts/pages/app-calendar-events.js')}}"></script>--}}
{{--<script src="{{asset('admin-layout/app-assets/js/scripts/pages/app-calendar.js')}}"></script>--}}
@stack('script')
</body>
<!-- END: Body-->

</html>
