<!--Horizontal-main -->
<div class="horizontal-main header-style1  bg-dark-transparent clearfix p-0 pt-4">
    <div class="horizontal-mainwrapper container clearfix">
        <div class="desktoplogo">
            <a href="{{route('front.index')}}">
                <img src="{{asset('storage/images/'.$setting->logo)}}" alt="img">
                <img src="{{asset('storage/images/'.$setting->logo)}}" class="header-brand-img header-white" alt="logo">
            </a>
        </div>
        <div class="desktoplogo-1">
            <a href="index.html"><img src="{{asset('/FrontTheme/assets/images/brand/logo.png')}}" alt="img"></a>
        </div>

        <nav class="horizontalMenu" >
            <ul class="horizontalMenu-list"  >
                <li aria-haspopup="true" class="ml-5"><a href="{{route('front.index')}}">الصفحة الرئيسية</a> </li>
                <li aria-haspopup="true" class="ml-5"><a href="{{route('front.trainer.index')}}"> المدربون </a> </li>
                <li aria-haspopup="true" class="ml-5"><a href="{{route('front.courses.index')}}"> الدورات التدريبية </a> </li>
                <li aria-haspopup="true"><a id="testimonial" href="{{route('front.testimonial.index')}}"> ماذا قالوا عنا </a></li>
                <li aria-haspopup="true" class="ml-5"><a href="{{route('front.contact-us.index')}}"> اتصل بنا </a></li>
                <li aria-haspopup="true" class="p-0 mt-1">
                    <span><a class="btn btn-secondary" href="{{route('course.register.form')}}" style="margin-top: -5px !important;"> التسجيل الآن </a></span>
                </li>
            </ul>
        </nav>
    </div>
</div>

<!--/Horizontal-main -->
