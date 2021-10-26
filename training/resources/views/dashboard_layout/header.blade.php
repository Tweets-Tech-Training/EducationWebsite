<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
<meta name="description" content="Vuexy admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
<meta name="keywords" content="admin template, Vuexy admin template, dashboard template, flat admin template, responsive admin template, web app">
<meta name="author" content="PIXINVENT">
<title> لوحة التحكم | موقع تويتس تك</title>
<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">

<link rel="apple-touch-icon" href="{{asset('admin-layout/app-assets/images/ico/apple-icon-120.png')}}">
<link rel="shortcut icon" type="image/x-icon" href="{{asset('admin-layout/app-assets/images/ico/favicon.ico')}}">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" integrity="sha384-tKLJeE1ALTUwtXlaGjJYM3sejfssWdAaWR2s97axw4xkiAdMzQjtOjgcyw0Y50KU" crossorigin="anonymous">
{{--<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600" rel="stylesheet">--}}
<link rel="stylesheet" type="text/css" href="{{asset('admin-layout/app-assets/css-rtl/font-rtl.css')}}">

<!-- BEGIN: Vendor CSS-->
<link rel="stylesheet" type="text/css" href="{{asset('admin-layout/app-assets/vendors/css/vendors-rtl.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('admin-layout/app-assets/vendors/css/charts/apexcharts.css')}}">
{{--<link rel="stylesheet" type="text/css" href="{{asset('admin-layout/app-assets/vendors/css/extensions/tether-theme-arrows.css')}}">--}}
{{--<link rel="stylesheet" type="text/css" href="{{asset('admin-layout/app-assets/vendors/css/extensions/tether.min.css')}}">--}}
{{--<link rel="stylesheet" type="text/css" href="{{asset('admin_layout/app-assets/vendors/css/extensions/shepherd-theme-default.css')}}">--}}
<!-- END: Vendor CSS-->

<!-- BEGIN: Theme CSS-->
<link rel="stylesheet" type="text/css" href="{{asset('admin-layout/app-assets/css-rtl/bootstrap.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('admin-layout/app-assets/css-rtl/bootstrap-extended.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('admin-layout/app-assets/css-rtl/colors.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('admin-layout/app-assets/css-rtl/components.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('admin-layout/app-assets/css-rtl/themes/dark-layout.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('admin-layout/app-assets/css-rtl/themes/semi-dark-layout.css')}}">

<!-- BEGIN: Page CSS-->
<link rel="stylesheet" type="text/css" href="{{asset('admin-layout/app-assets/css-rtl/core/menu/menu-types/vertical-menu.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('admin-layout/app-assets/css-rtl/core/colors/palette-gradient.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('admin-layout/app-assets/css-rtl/pages/dashboard-analytics.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('admin-layout/app-assets/css-rtl/pages/card-analytics.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('admin-layout/app-assets/css-rtl/plugins/tour/tour.css')}}">
<!-- END: Page CSS-->

<!-- BEGIN: Custom CSS-->
<link rel="stylesheet" type="text/css" href="{{asset('admin-layout/app-assets/css-rtl/custom-rtl.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('admin-layout/assets/css/style-rtl.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('admin-layout/app-assets/vendors/css/forms/select/select2.min.css')}}">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/chosen-js@1.8.7/chosen.min.css">

<link rel="stylesheet" href="https://res.cloudinary.com/dxfq3iotg/raw/upload/v1569006288/BBBootstrap/choices.min.css?version=7.0.0">

<link rel="stylesheet" type="text/css" href="{{asset('admin-layout/app-assets/css-rtl/plugins/file-uploaders/dropzone.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('admin-layout/app-assets/vendors/css/vendors-rtl.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('admin-layout/app-assets/vendors/css/tables/datatable/datatables.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('admin-layout/app-assets/vendors/css/tables/datatable/extensions/dataTables.checkboxes.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('admin-layout/app-assets/css-rtl/pages/data-list-view.css')}}">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css" integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" integrity="sha384-tKLJeE1ALTUwtXlaGjJYM3sejfssWdAaWR2s97axw4xkiAdMzQjtOjgcyw0Y50KU" crossorigin="anonymous">
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />


<link rel="stylesheet" type="text/css" href="{{asset('admin-layout/app-assets/vendors/css/pickers/pickadate/pickadate.css')}}">
{{--<link rel="stylesheet" type="text/css" href="{{asset('admin-layout/app-assets/vendors/css/pickers/flatpickr/flatpickr.min.css')}}">--}}
<link rel="stylesheet" type="text/css" href="{{asset('admin-layout/app-assets/css-rtl/plugins/forms/pickers/form-flat-pickr.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('admin-layout/app-assets/css-rtl/plugins/forms/pickers/form-pickadate.css')}}">
<!-- END: Custom CSS-->
<style>

    .mt-100 {
        margin-top: 100px
    }


</style>
<link rel="manifest" href="{{request()->root()}}/public/manifest.json" />
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.2/dist/alpine.min.js" defer></script>
{{--<!-- The core Firebase JS SDK is always required and must be listed first -->--}}

