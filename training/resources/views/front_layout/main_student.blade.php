<!doctype html>
<html lang="en">
@include('front_layout.header')
@livewireStyles
<body>
<!--Loader-->
<div id="global-loader">
    <img src="{{asset('FrontTheme/assets/images/loader.svg')}}" class="loader-img" alt="img">
</div><!--/Loader-->

<!--Section-->
<div class="banner1 relative banner-top">
    <!-- Carousel -->
    <!--  Start Slider Image Section-->
@yield('sliderImage')
<!-- Carousel / -->
    <!--  End Slider Image Section-->
    <!--Topbar-->
    <div class="header-main">
        <div class="top-bar top-bar-light">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 col-lg-8 col-sm-4 col-12">
                        <div class="top-bar-start d-flex">
                            <div class="clearfix">

                                <ul class="socials">
                                    <li>
                                        <a class="social-icon text-dark" href="javascript:void(0)"><i class="fe fe-facebook"></i></a>
                                    </li>
                                    <li>
                                        <a class="social-icon text-dark" href="javascript:void(0)"><i class="fe fe-twitter"></i></a>
                                    </li>
                                    <li>
                                        <a class="social-icon text-dark" href="javascript:void(0)"><i class="fe fe-linkedin"></i></a>
                                    </li>
                                    <li>
                                        <a class="social-icon text-dark" href="javascript:void(0)"><i class="fe fe-instagram"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-sm-8 col-12">
                        <div class="top-bar-end">
                            <ul class="custom">
                                @guest
                                <li>
                                    <a href="{{route('student-login')}}" class="text-dark"><i class="fe fe-log-in ms-1"></i> <span>تسجيل الدخول</span></a>
                                </li>
                                    @endguest
                                @if(Auth::guard('student')->check())
                                    <li class="dropdown">
                                    <a href="javascript:void(0)" class="text-dark" data-bs-toggle="dropdown" aria-expanded="false"><i class="fe fe-home me-1"></i><span> My Dashboard<i class="fe fe-chevron-down  ms-1"></i></span></a>
                                    <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow" style="">
                                        <a href="{{route('student-profile')}}" class="dropdown-item">
                                            <i class="dropdown-icon icon icon-user"></i> الصفحة الشخصية
                                        </a>
                                        <form method="POST" action="{{ route('logout') }}">
                                            @csrf
                                            <a class="side-menu__item" href="{{ route('logout') }}"
                                               onclick="event.preventDefault();
               this.closest('form').submit();">
                                                <i class="side-menu__icon fe fe-power"></i><span class="side-menu__label">تسجيل خروج </span></a>
                                        </form>
                                    </div>
                                </li>
                                @endif




</ul>
</div>
</div>
</div>
</div>
</div>
{{--        ********** IMPORTANT  *****  --}}
{{--        @include('front_layout.top-bar')--}}
<!--/Topbar-->

<!-- Mobile Header -->
@include('front_layout.mobile-header')
<!-- /Mobile Header -->

<!--Horizontal-main -->
@include('front_layout.horizontal-menu')
<!--  /Horizontal-main -->
</div>

{{--    *** Section Slider Images  *** --}}
<!--Section-->
<section>
@include('front_layout.sliderImage')
</section>
<!--/Section-->
</div>
<section class="sptb my-dash-1">
<div class="container">
<div class="row">
    @if(Route::currentRouteName() != 'student-login')
            <div class="col-xl-3 col-lg-12 col-md-12">
            <div class="card is-expanded">
            <div class="card-header">
            <h3 class="card-title">لوحة التحكم </h3>
            </div>
            <div class="card-body text-center item-user border-bottom-0 active">
            <div class="profile-pic">
            <div class="profile-pic-img">
            <span class="bg-success dots" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="online" aria-label="online"></span>
            {{--                                @if (Auth::user()->image)--}}
            {{--                                    <span><img class="round"  alt="avatar" height="40" width="40"></span>--}}

            {{--                                @else--}}
            {{--                                    <span><img class="round" src="{{asset('admin-layout/app-assets/images/portrait/small/avatar-s-11.jpg')}}" alt="avatar" height="40" width="40"></span>--}}

            {{--                                @endif--}}
            <img src="{{asset('storage/images/'.Auth::user()->image)}}" class="brround" alt="user">
            </div>
            <a href="{{route('student-profile')}}" class="text-dark">
            <h4 class="mt-3 mb-0 font-weight-semibold">{{Auth::guard('student')->user()->name}}</h4>
            </a>
            <p class="mb-0 mt-1 text-muted">UI/UX Designer</p>
            <div class="wideget-user-info my-dash-1">
            <div class="wideget-user-icons mt-2">
               <a href="javascript:void(0)" class="mt-0"><i class="fa fa-facebook"></i></a>
               <a href="javascript:void(0)" class=""><i class="fa fa-twitter"></i></a>
               <a href="javascript:void(0)" class=""><i class="fa fa-google"></i></a>
               <a href="javascript:void(0)" class=""><i class="fa fa-dribbble"></i></a>
               <a href="javascript:void(0)" class=""><i class="fa fa-share"></i></a>
            </div>
            </div>
            </div>
            </div>
            <aside class="app-sidebar doc-sidebar my-dash open">
            <div class="app-sidebar__user clearfix is-expanded">
            <ul class="side-menu open">
            <li class="is-expanded">
               <a class="side-menu__item  " href="{{route('student-profile')}}"><i class="side-menu__icon fe fe-edit"></i><span class="side-menu__label">الصفحة الشخصية </span></a>
            </li>
            <li>
               <a class="side-menu__item" href="{{route('student-courses')}}"><i class="side-menu__icon fe fe-layers"></i><span class="side-menu__label">الدورات </span></a>
            </li>

{{--                                <li class="slide">--}}
{{--                                    <a class="side-menu__item slide-show" href="javascript:void(0)"><i class="side-menu__icon fe fe-folder"></i><span class="side-menu__label">Managed Courses</span><i class="angle fa fa-angle-left"></i></a>--}}
{{--                                    <ul class="slide-menu">--}}
{{--                                        <li><a class="slide-item" href="manged.html"><i class="fa fa-angle-left me-2"></i> Managed Courses</a></li>--}}
{{--                                        <li class="sub-slide">--}}
{{--                                            <a class="side-menu__item border-top-0 slide-item sub-slide-show" href="javascript:void(0)"><span class="side-menu__label"><i class="fa fa-angle-left me-2"></i> Managed </span> <i class="sub-angle fa fa-angle-left"></i></a>--}}
{{--                                            <ul class="child-sub-menu ">--}}
{{--                                                <li><a class="slide-item" href="javascript:void(0)"><i class="fa fa-angle-left me-2"></i> Managed Courses 01</a></li>--}}
{{--                                                <li><a class="slide-item" href="javascript:void(0)"><i class="fa fa-angle-left me-2"></i> Managed Courses 02</a></li>--}}
{{--                                            </ul>--}}
{{--                                        </li>--}}
{{--                                    </ul>--}}
{{--                                </li>--}}
<li>
   <a class="side-menu__item" href="payments.html"><i class="side-menu__icon fe fe-credit-card"></i><span class="side-menu__label">عرض القيد المالي </span></a>
</li>
<li>
   <form method="POST" action="{{ route('logout') }}">
       @csrf
       <a class="side-menu__item" href="{{ route('logout') }}"
          onclick="event.preventDefault();
               this.closest('form').submit();">
           <i class="side-menu__icon fe fe-power"></i><span class="side-menu__label">تسجيل خروج </span></a>
   </form>
</li>
</ul>
</div>
</aside>
</div>
{{--                <div class="card my-select">--}}
{{--                    <div class="card-header">--}}
{{--                        <h3 class="card-title">Search Classes</h3>--}}
{{--                    </div>--}}
{{--                    <div class="card-body">--}}
{{--                        <div class="form-group">--}}
{{--                            <input type="text" class="form-control" id="text" placeholder="What are you looking for?">--}}
{{--                        </div>--}}
{{--                        <div class="form-group">--}}
{{--                            <select name="country" id="select-countries" class="form-control form-select select2-show-search select2-hidden-accessible" data-select2-id="select-countries" tabindex="-1" aria-hidden="true">--}}
{{--                                <option value="1" selected="" data-select2-id="8">All Categories</option>--}}
{{--                            </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="26" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-select-countries-container"><span class="select2-selection__rendered" id="select2-select-countries-container" role="textbox" aria-readonly="true" title="All Categories">All Categories</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>--}}
{{--                        </div>--}}
{{--                        <div class="">--}}
{{--                            <a href="javascript:void(0)" class="btn  btn-primary">Search</a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}

</div>
<div class="col-xl-9 col-lg-12 col-md-12">
@endif
@yield('content')

</div>
</div>
</div>
</section>


<!--Section-->
{{--<section class="cover-image sptb bg-background-1" data-bs-image-src="{{asset('FrontTheme/assets/images/banners/slider.jpg')}}">--}}
<section class="cover-image sptb bg-background-1" data-bs-image-src="{{asset('FrontTheme/assets/images/banners/banner5.jpg')}}">
<div class="content-text mb-0">
<div class="content-text mb-0">
<div class="container">
<div class="text-white">
<div class="row">
<div class="col-lg-6">
<div class="mt-0">
<h1 class="mb-2 font-weight-semibold"> اشترك بالقائمة البريدية </h1>
<p class="fs-18 mb-0"> اشترك معنا ليصلك كل ما هو جديد ... </p>
</div>
</div>
<div class="col-lg-6">
<div class="mt-4">
<div class="input-group sub-input mt-1">
  <input type="text" class="form-control input-lg  br-ts-7  br-bs-7" placeholder="أدخل إيميلك">
  <div class="input-group-text ">
      <button type="button" class="btn btn-secondary btn-lg br-te-7  br-be-7">
          اشترك
      </button>
  </div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<!--/Section-->

<div class="position-relative">
<div class="shape overflow-hidden bottom-footer-shape">
<svg viewBox="0 0 2880 48" fill="none" xmsns="http://www.w3.org/2000/svg">
<path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
</svg>
</div>
</div>
@include('front_layout.footer')
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
@livewireScripts
@stack('script')
<script>
window.addEventListener('swal:modal', event => {
swal({
title: event.detail.message,
text: event.detail.text,
icon: event.detail.type,
showConfirmButton: true,
confirmButtonColor: '#DD6B55',

confirmButtonText: 'موافق',

}).then(function() {
if(event.detail.url){
window.location = event.detail.url;
}

});
});

//
// $('document').ready(function(){
//     $('.side-menu__item').click(function(){
//         $('.side-menu__item').addClass('active');
//     });
// });
$('document').ready(function(){
    $('.side-menu__item').click(function(){
        $('.side-menu__item').toggleClass('active');
    });
});
</script>
</body>
</html>
