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

        @foreach($sliders as $slider)
            <div class="item cover-image" data-bs-image-src="">
                <img  alt="first slide" src="{{asset('storage/images/'.$slider->image)}}" >
            </div>
        @endforeach

{{--        <div class="item">--}}
{{--            <img  alt="first slide" src="{{asset('FrontTheme/assets/images/banners/slider2.jpg')}}" >--}}
{{--        </div>--}}
{{--        <div class="item">--}}
{{--            <img  alt="first slide" src="{{asset('FrontTheme/assets/images/banners/slider3.jpg')}}" >--}}
{{--        </div>--}}
    </div>
    <!--Topbar-->
    <div class="header-main">
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
        @yield('sliderImage')
    </section>
    <!--/Section-->

</div>

@yield('content')
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
</body>
</html>
