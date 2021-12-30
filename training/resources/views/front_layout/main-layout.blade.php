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
                                        <a class="social-icon text-dark" href="{{ $setting->facebook }}"><i class="fe fe-facebook"></i></a>
                                    </li>
                                    <li>
                                        <a class="social-icon text-dark" href="{{ $setting->twitter }}"><i class="fe fe-twitter"></i></a>
                                    </li>
                                    <li>
                                        <a class="social-icon text-dark"href="{{ $setting->linkedin }}"><i class="fe fe-linkedin"></i></a>
                                    </li>
                                    <li>
                                        <a class="social-icon text-dark" href="{{ $setting->instagram }}"><i class="fe fe-instagram"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-sm-8 col-12">
                        <div class="top-bar-end">
                            <ul class="custom">
                                @if(!Auth::guard('student')->check())
                                <li>
                                    <a href="{{route('student-login')}}" class="text-dark"><i class="fe fe-log-in ms-1"></i> <span>تسجيل الدخول</span></a>
                                </li>
                                @endif
                                @if(Auth::guard('student')->check())
                                <li class="dropdown">
                                    <a href="javascript:void(0)" class="text-dark" data-bs-toggle="dropdown" aria-expanded="false"><i class="fe fe-home me-1"></i><span> لوحة التحكم <i class="fe fe-chevron-down  ms-1"></i></span></a>
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
        @yield('sliderText')
    </section>
    <!--/Section-->
</div>
@yield('content')
<!--Section-->
{{--<section class="cover-image sptb bg-background-1" data-bs-image-src="{{asset('FrontTheme/assets/images/banners/slider.jpg')}}">--}}
@include('front_layout.mailSystem')
<!--/Section-->

<div class="position-relative">
    <div class="shape overflow-hidden bottom-footer-shape">
        <svg viewBox="0 0 2880 48" fill="none" xmsns="http://www.w3.org/2000/svg">
            <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
        </svg>
    </div>
</div>
@include('front_layout.footer')
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
</script>
</body>
</html>
