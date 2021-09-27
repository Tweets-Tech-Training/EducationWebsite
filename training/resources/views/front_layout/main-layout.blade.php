<!doctype html>
<html lang="en">
@include('front_layout.header')
<body>
<!--Loader-->
<div id="global-loader">
    <img src="{{asset('FrontTheme/assets/images/loader.svg')}}" class="loader-img" alt="img">
</div><!--/Loader-->

<!--Section-->
<div class="banner1 relative banner-top">
    <!-- Carousel -->
    <div class="owl-carousel bannner-owl-carousel slider slider-header ">
        <div class="item cover-image" data-bs-image-src="">
            <img  alt="first slide" src="{{asset('FrontTheme/assets/images/banners/slide-1.jpg')}}" >
        </div>
        <div class="item">
            <img  alt="first slide" src="{{asset('FrontTheme/assets/images/banners/silde-2.jpg')}}" >
        </div>
        <div class="item">
            <img  alt="first slide" src="{{asset('FrontTheme/assets/images/banners/slide-3.jpg')}}" >
        </div>
    </div>
    <!--Topbar-->
    <div class="header-main">
        @include('front_layout.top-bar')
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
        @yield('sliderImage')
{{--        <div class="slider-images">--}}
{{--            <div class="container-fuild">--}}
{{--                <div class="header-text slide-header-text mt-0 mb-0">--}}
{{--                    <div class="col-xl-7 col-lg-8 col-md-8 d-block mx-auto">--}}
{{--                        <div class="search-background bg-transparent input-field">--}}
{{--                            <div class="text-center text-white mb-7">--}}
{{--                                <h1 class="mb-1 font-weight-semibold fs-50">Build Your Future Classes</h1>--}}
{{--                                <p class="d-none d-md-block fs-18 text-white-80">many variations of passages of Lorem Ipsum available, but the majority have suffered alteration <br> in some form, by injected humour, or randomised words</p>--}}
{{--                            </div>--}}
{{--                            <div class="form row g-0">--}}
{{--                                <div class="form-group col-xl-9 col-lg-9 col-md-12 mb-0">--}}
{{--                                    <input type="text" class="form-control input-xl br-te-md-0 br-be-md-0" placeholder="Search Courses...." data-min-length="1" list="courses" name="courses">--}}
{{--                                </div>--}}
{{--                                <div class="col-xl-3 col-lg-3 col-md-12 mb-0">--}}
{{--                                    <a href="javascript:void(0)" class="btn btn-xl btn-block btn-primary br-ts-md-0 br-bs-md-0">Search Here</a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="recent-classes text-center mt-5">--}}
{{--                                <a class="recent-course" href="">--}}
{{--                                    <i class="fe fe-book-open"></i>--}}
{{--                                    <small>Language</small>--}}
{{--                                </a>--}}
{{--                                <a class="recent-course" href="">--}}
{{--                                    <i class="fe fe-airplay"></i>--}}
{{--                                    <small>IT Course</small>--}}
{{--                                </a>--}}
{{--                                <a class="recent-course" href="">--}}
{{--                                    <i class="fe fe-database"></i>--}}
{{--                                    <small>Data Science</small>--}}
{{--                                </a>--}}
{{--                                <a class="recent-course" href="">--}}
{{--                                    <i class="fe fe-heart"></i>--}}
{{--                                    <small>Health</small>--}}
{{--                                </a>--}}
{{--                                <a class="recent-course" href="">--}}
{{--                                    <i class="fe fe-briefcase"></i>--}}
{{--                                    <small>Business</small>--}}
{{--                                </a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div><!-- /header-text -->--}}
{{--            </div>--}}
{{--        </div>--}}
    </section>
    <!--/Section-->

</div>

@yield('content')
<!--Section-->
<section class="cover-image sptb bg-background-1" data-bs-image-src="{{asset('FrontTheme/assets/images/banners/banner5.jpg')}}">
    <div class="content-text mb-0">
        <div class="content-text mb-0">
            <div class="container">
                <div class="text-white">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="mt-0">
                                <h1 class="mb-2 font-weight-semibold">Subscribe</h1>
                                <p class="fs-18 mb-0">Many desktop publishing packages and web page editors.</p>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="mt-4">
                                <div class="input-group sub-input mt-1">
                                    <input type="text" class="form-control input-lg  br-ts-7  br-bs-7" placeholder="Enter your Email">
                                    <div class="input-group-text ">
                                        <button type="button" class="btn btn-secondary btn-lg br-te-7  br-be-7">
                                            Subscribe
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
</body>
</html>
