<!--Horizontal-main -->
<div class="horizontal-main header-style1  bg-dark-transparent clearfix p-0 pt-4">
    <div class="horizontal-mainwrapper container clearfix">
        <div class="desktoplogo">
            <a href="{{route('front.index')}}">
                <img src="{{asset('FrontTheme/assets/images/brand/logo1.png')}}" alt="img">
                <img src="{{asset('FrontTheme/assets/images/brand/logo.png')}}" class="header-brand-img header-white" alt="logo">
            </a>
        </div>

        <nav class="horizontalMenu" >
            <ul class="horizontalMenu-list"  >
                <li aria-haspopup="true" class="ml-5"><a href="{{route('front.index')}}">الصفحة الرئيسية</a> </li>
                <li aria-haspopup="true" class="ml-5"><a href="{{route('front.trainer.index')}}"> المدربون </a> </li>
                <li aria-haspopup="true" class="ml-5"><a href="{{route('front.courses.index')}}"> الدورات التدريبية </a> </li>
                <li aria-haspopup="true"><a id="testimonial" href="#"> ماذا قالوا عنا </a></li>
                <li aria-haspopup="true" class="ml-5"><a href="{{route('front.contact-us.index')}}"> اتصل بنا </a></li>
                <li aria-haspopup="true" class="p-0 mt-1">
                    <span><a class="btn btn-secondary" href="course-posts.html" style="margin-top: -5px !important;"> التسجيل الآن </a></span>
                </li>
            </ul>
        </nav>
    </div>
</div>

<!--/Horizontal-main -->
