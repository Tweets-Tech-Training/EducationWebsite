<head>
    <!-- Meta data -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content=" Edomi - Online Education & Learning Courses HTML CSS Responsive Template" name="description">
    <meta content="Spruko Technologies Private Limited" name="author">
    <meta name="keywords" content="html , html dir ,  website template, bootstrap 5  template,  bootstrap template, admin panel template , admin panel , html5 , academy training course css template, classes online training website templates, courses training html5 template design, education training rwd simple template, educational learning management jquery html, elearning bootstrap education template, professional training center bootstrap html, institute coaching mobile responsive template, marketplace html template premium, learning management system jquery html, clean online course teaching directory template, online learning course management system, online course website template css html, premium lms training web template, training course responsive website"/>

    <!-- Favicon -->
    <link rel="icon" href="{{asset('FrontTheme/assets/images/brand/favicon.ico')}}" type="image/x-icon"/>
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('FrontTheme/assets/images/brand/favicon.ico')}}" />

    <!-- Title -->
    <title> Edomi - @yield('title')</title>

    <!-- Bootstrap css -->
    <link href="{{asset('FrontTheme/assets/plugins/bootstrap/css/bootstrap.rtl.css')}}" rel="stylesheet" />

    <!-- Style css -->
    <link href="{{asset('FrontTheme/assets/css-rtl/style.css')}}" rel="stylesheet" />

    <!-- Font-awesome  css -->
    <link href="{{asset('FrontTheme/assets/css-rtl/icons.css')}}" rel="stylesheet"/>

    <!--Select2 css -->
    <link href="{{asset('FrontTheme/assets/plugins/select2/select2-rtl.css')}}" rel="stylesheet" />

    <!-- Cookie css -->
    <link href="{{asset(('FrontTheme/assets/plugins/cookie/cookie.css'))}}" rel="stylesheet">

    <!-- Owl Theme css-->
    <link href="{{asset('FrontTheme/assets/plugins/owl-carousel/owl.carousel.css')}}" rel="stylesheet" />

    <!-- Flex Datalist-->
    <link href="{{asset('FrontTheme/assets/plugins/jquery.flexdatalist/jquery.flexdatalist.css')}}" rel="stylesheet" />

    <!-- Color Skin css -->
    <link id="theme" rel="stylesheet" type="text/css" media="all" href="{{asset('FrontTheme/assets/color-skins-rtl/color.css')}}" />
   <style>
       .header-style1 .horizontalMenu>.horizontalMenu-list>li{
           padding: 1rem 0.5rem !important;
       }
       horizontalMenu ul li a.btn {
           font-size: 14px !important;
           margin: -5px 0 !important;;
       }

       .horizontalMenu{
           float: right !important;
           margin-right: 40px !important;
           font-size: 17px;
           font-weight: 600;
       }
   </style>
    @yield('css')
</head>
