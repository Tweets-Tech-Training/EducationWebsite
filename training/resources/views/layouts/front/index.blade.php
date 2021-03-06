@extends('front_layout.main-layout')
@section('title','Home Page')
@section('css')
    <style>
        /*.form-control{
            border: 1px solid #9797b6;
            font-size: 13px;
        }*/
        .select2-container{
            border-color:#9797b6 ;
            border: 1px solid #9797b6;
            /*1px solid #ededf5*/
            border-radius: 7px;
            font-size: 13px;
        }
        .select2,.select2-dropdown ,.select2-dropdown--below{
            color: #494872;
            border-color: #9797b6;
        }
        .select2-search__field{
            border: 1px solid #9494ba !important;
        }


    </style>
@endsection
@section('sliderImage')
    <div class="owl-carousel bannner-owl-carousel slider slider-header ">
    @if(isset($sliders))
        @forelse($sliders as $slider)
            <div class="item cover-image" data-bs-image-src="">
                <img  alt="first slide" src="{{asset('storage/images/'.$slider->image)}}" >
            </div>
        @empty
            <div class="item cover-image" data-bs-image-src="">
                <img  alt="first slide" src="{{asset('storage/FrontTheme/assets/images/banners/banner1.jpg')}}" >
            </div>
        @endforelse
    @else
        <div class="item cover-image" data-bs-image-src="">
            <img  alt="first slide" src="{{asset('storage/FrontTheme/assets/images/banners/banner1.jpg')}}" >
        </div>
    @endif
    </div>
@endsection
@section('sliderText')
   @include('front_layout.sliderText')
@endsection
@section('content')
{{--    *** Section latest Courses  *** --}}

    <!--  *** End Section latest Courses *** -->




<!-------------       section for courses ---------------------------->

<section class="sptb">
    <div class="container">
        <div class="section-title">
            <h2>الدورات </h2>
            <p class="fs-18 lead">   اختر الدورة المطلوبة </p>
        </div>
        <div class="panel panel-primary">
            <div class="panel-body p-0">
                <div class="tab-content">
                    <div class="tab-pane active show" id="tab1">
                        <div class="row">
                            @forelse($courses as $course)
                            <div class="col-xl-4 col-md-6">
                                <div class="card overflow-hidden">
                                    <div class="ribbon ribbon-top-left text-warning"><span class="bg-warning">${{$course->price}}</span></div>
                                    <div class="item-card7-img pt-5 px-5">
                                        <div class="item-card7-imgs">
                                            <a href="javascript:void(0)"></a>
                                            <img src="{{asset('storage/images/'.$course->image)}}" alt="img" class="cover-image br-7 border">
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="item-card7-desc">
                                            <div class="item-card7-text">
                                                <a href="javascript:void(0)" class="text-dark"><h4 class="font-weight-semibold mb-1">{{$course->name}}</h4></a>
                                            </div>
                                            <div class="d-flex mb-0">
                                                <h4 class="text-muted"> {{ $course->category->name }} </h4>
                                            </div>
                                            <div class="pt-2 mb-3">
                                                <a class="me-4"><span class="font-weight-bold">عدد المحاضرات  :</span> <span class="text-muted"> {{$course->lectures_num}}</span></a>
                                                <a class="me-4 float-end"><span class="font-weight-bold">مدة المحاضرة  :</span><span class="text-muted"> {{$course->lecture_interval}}</span></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer">
{{--                                        <div class="d-flex">--}}
                                        <div class="col-12 d-flex flex-sm-row flex-column justify-content-between mt-1">
                                            <div class="d-md-flex d-block mb-0">
                                                <a href="{{route('course.register.form')}}" class="form-control btn btn-secondary fs-16 fw-600" style="color: whitesmoke"> سجل الآن </a>
                                            </div>
                                            <div class="d-md-flex d-block mb-0">
                                                <a href="{{route('front.courses.details',$course->id)}}" class="form-control btn btn-primary fs-16 fw-600" style="color: whitesmoke"> عرض التفاصيل</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            @empty
                                <div  class=" col-10 alert alert-primary alert-dismissible fade show" role="alert">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
                                        <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                                    </svg>
                                    <h5 style="display: inline-block; margin-left: 1px">لا يوجد دورات...</h5>
                                </div>
                            @endforelse

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<!---------------------      end courses section -------------->



    {{--    *** Start  Section Register in Course  *** --}}
    <section class="sptb bg-white" style="padding-bottom: 3rem ; color: #494872; font-size: 17px ">
        <div class="container">
            <div class="section-title d-md-flex pb-3" style="color: #494872">
                <div>
                    <h2 style="color: #494872">
                        التسجيل في الدورات
                        <hr class="mt-2 mb-2">
                    </h2>
                    <p class="fs-20 lead">
                        سجل معنا الآن
                    </p>
                </div>
            </div>
            <div  style="display: flex; justify-content: center; width: 100%">
                <form style="display: table-cell; vertical-align: middle; width: 70%"  >
                    @method('POST')
                    <div id="scrollTop" class="alert alert-dismissible fade show" role="alert" style="display: none;padding:7px;">
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="form row" >
                        <div class="form-group col-md-6">
                            <span class="fw-bold" >  الدورة </span>
                            <select name="course_id" id="course_id" class="form-control select2-show-search  border-bottom-0" data-placeholder="Select Category">
                                <option value=" " >اختر الدورة </option>
                                @foreach($courses as $course)
                                    <option class=" p-5"  value="{{$course->id}}" > {{$course->name}}  </option>
                                @endforeach
                            </select>
                            <span class="text-danger" id="error_course_id"></span>
                        </div>
                        <div class="form-group col-md-6">
                            <span class="fw-bold" >  الاسم </span>
                            <input type="text" class="form-control " id="name" name="name" placeholder="أدخل الاسم">
                             <span class="text-danger "id="error_name" ></span>
                        </div>
                        <div class="form-group col-md-6">
                            <span class="fw-bold" >  الجنس  </span>
                            <select name="gender" id="gender" class="form-control select2-show-search  border-bottom-0" data-placeholder="Select gender">
                                <option value=" ">اختر الجنس </option>
                                <option class=" p-5"  value="M" > ذكر  </option>
                                <option class=" p-5"  value="F" > أنثى  </option>
                            </select>
                            <span class="text-danger" id="error_gender"></span>
                        </div>
                        <div class="form-group col-md-6">
                            <span class="fw-bold" >  الايميل  </span>
                            <input type="text" class="form-control" id="email" name="email" placeholder="أدخل الايميل">
                            <span class="text-danger" id="error_email"></span>
                        </div>
                        <div class="form-group col-md-6">
                            <span class="fw-bold"> رقم الجوال </span>
                            <input type="text" class="form-control" id="mobile" name="mobile" placeholder="أدخل رقم الجوال">
                            <span class="text-danger" id="error_mobile"></span>
                        </div>
                        <div class="form-group col-md-6">
                            <span class="fs-15 fw-bold" > العنوان </span>
                            <input type="text" class="form-control" name="address" id="address" placeholder=" أدخل العنوان  ">
                            <span class="text-danger" id="error_address"></span>
                        </div>
                        <div class="form-group" >
                            <button id="SubmitRegisterCourseForm" class="form-control btn fs-16 fw-600" style="margin: 0 auto; width: 35%; margin-top:25px;background-color:#494872;color: whitesmoke"> سجل الآن </button>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </section>

    {{--    *** End Section Register in Course  *** --}}

{{--   ****  Start Section What Says About Us *** --}}
    <section  class="sptb position-relative bg-gray-lightest">
        <div class="container" >
            <div id="testimonial-division" class="section-title d-md-flex">
                <div>
                    <h2>  ماذا قال طلابنا عنا  </h2>
                    <p class="fs-20 fw-bold lead" > آراء بعض الطلاب الذين شاركوا معنا في الدورات </p>
                </div>
{{--                <div class="ms-auto">--}}
{{--                    <div class="">--}}
{{--                        <a class="btn btn-primary mt-3" href="javascript:void(0)"><i class="fe fe-arrow-right"></i>   عرض كل الآراء </a>--}}
{{--                    </div>--}}
{{--                </div>--}}
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div id="myCarousel" class="owl-carousel testimonial-owl-carousel">
                        @forelse($reviews as $review)
                            <div class="item text-center">
                            <div class="card" style="height: 400px !important; max-height: 400px !important; " >
                                <div class="card-status bg-success br-te-7 br-ts-7"></div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 d-block mx-auto">
                                            <div class="testimonia1">
                                                <p class="fs-16" >
                                                    <i class="fa fa-quote-left fa-3x d-block opacity-2">
                                                    </i>
                                                     {{$review->message}}
                                                </p>
                                                <img src="{{asset('storage/images/'.$review->image)}}" class="mx-auto d-block brround mb-3 mt-6 w-9 h-9" alt="img">
                                                <h3 class="title fs-18 font-weight-semibold">{{$review->name}}</h3>
                                                <span class="post">{{$review->job_title}}</span>
{{--                                                <div class="star-ratings start-ratings-main clearfix mt-2">--}}
{{--                                                    <div class="stars stars-example-fontawesome stars-example-fontawesome-sm">--}}
{{--                                                        <select class="example-fontawesome" name="rating" autocomplete="off">--}}
{{--                                                            <option value="1">1</option>--}}
{{--                                                            <option value="2">2</option>--}}
{{--                                                            <option value="3">3</option>--}}
{{--                                                            <option value="4" selected>4</option>--}}
{{--                                                            <option value="5">5</option>--}}
{{--                                                        </select>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @empty
                            <div  class=" col-6 alert alert-primary alert-dismissible fade show" role="alert">
{{--                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">--}}
{{--                                    <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>--}}
{{--                                </svg>--}}
                                <h5 style="display: inline-block; margin-left: 1px; color: white">لا يوجد آراء بعد...</h5>
                            </div>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </section>
{{--   ****  End Section What Says About Us *** --}}

{{--   ****  Start Section Sponsers *** --}}
{{--    <section class="sptb bg-white">--}}
{{--        <div class="container">--}}
{{--            <div class="section-title">--}}
{{--                <h2> شركاؤنا </h2>--}}
{{--                <p class="fs-18 lead"> مجموعة من الشركات الداعمة لنا في رحلتنا </p>--}}
{{--            </div>--}}
{{--            <div id="small-categories" class="owl-carousel client-carousel">--}}
{{--                @forelse($partners as $partner)--}}
{{--                <div class="item" >--}}
{{--                    <div class="p-4 border br-7">--}}
{{--                        <a href="{{$partner->link}}">--}}
{{--                            <img src="{{asset('storage/images/'.$partner->image)}}" style="width: 100px; height: 95px;"--}}
{{--                                 alt="{{$partner->title}}"--}}
{{--                                 title="{{$partner->title}}"--}}
{{--                            >--}}
{{--                        </a>--}}

{{--                    </div>--}}
{{--                </div>--}}
{{--                @empty--}}
{{--                    <div  class=" col-10 alert alert-primary alert-dismissible fade show" role="alert">--}}
{{--                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">--}}
{{--                            <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>--}}
{{--                        </svg>--}}
{{--                        <h5 style="display: inline-block; margin-left: 1px">لا يوجد داعمين بعد...</h5>--}}
{{--                    </div>--}}
{{--                @endforelse--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}
{{--   ****  End Section Sponsers *** --}}


{{--   ****  Start Section Sponsers *** --}}
<section class="sptb bg-white">
    <div class="container">
        <div class="section-title">
            <h2>الشركاء </h2>
{{--            <p class="fs-18 lead">Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>--}}
        </div>
        <div id="small-categories" class="owl-carousel client-carousel owl-rtl owl-loaded owl-drag">
            <div class="owl-stage-outer">
                <div class="owl-stage" style="transform: translate3d(1682px, 0px, 0px); transition: all 0.25s ease 0s; width: 4084px;">
                    @forelse($partners as $partner)
                    <div class="owl-item cloned" style="width: 215.2px; margin-left: 25px;">
                        <div class="item">
                            <div class="client-img">
                                <img src="{{asset('storage/images/'.$partner->image)}}"   alt="{{$partner->title}}"
                                     title="{{$partner->title}}">
                            </div>
                        </div>
                    </div>
                    @empty
                        <div  class=" col-10 alert alert-primary alert-dismissible fade show" role="alert">--}}
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
                                <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                            </svg>
                            <h5 style="display: inline-block; margin-left: 1px">لا يوجد داعمين بعد...</h5>
                        </div>
                    @endforelse
                </div></div><div class="owl-nav disabled"><button type="button" role="presentation" class="owl-prev"><span aria-label="Previous">‹</span></button><button type="button" role="presentation" class="owl-next"><span aria-label="Next">›</span></button></div><div class="owl-dots disabled"></div></div>
    </div>
</section>
{{--   ****  End Section Sponsers *** --}}
@endsection
@section('script')
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
        $(document).ready(function (){
            $('.select2-selection__placeholder').hide();
            $('#SubmitRegisterCourseForm').click(function(e){
                e.preventDefault();
                clearErrorMessage();
                $("#SubmitRegisterCourseForm").html('تحميل').append('&nbsp;<span id="loadingCreate" class="spinner-border spinner-border-sm"></span>');
                var course_id = $('#course_id').val();
                var name= $('#name').val();
                var gender= $('#gender').val();
                var email= $('#email').val();
                var mobile= $('#mobile').val();
                var address= $('#address').val();
                var myformData  = new FormData();
                myformData.append("course_id", course_id);
                myformData.append("name", name);
                myformData.append("gender", gender);
                myformData.append("email", email);
                myformData.append("mobile", mobile);
                myformData.append("address", address);
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    url: "{{ route('course.register') }}",
                    method: 'POST',
                    dataType: 'json',
                    processData: false,
                    contentType: false,
                    cache: false,
                    data: myformData , // it send form data to server
                    enctype: 'multipart/form-data',
                    success: function(result) {
                        console.log(result);
                        $("#SubmitRegisterCourseForm").html('سجل الآن');
                        $('#loadingCreate').css('display','none');
                        if(result.success){
                            $('.alert').addClass('alert-success').removeClass('alert-warning').html(result.success).show();
                        }
                        else if(result.warning){
                            $('.alert').addClass('alert-warning').removeClass('alert-success').html(result.warning).show();
                        }
                        setTimeout(function(){
                            $('.alert').hide();
                            // window.location.reload();
                        }, 2500);
                    },
                    error:function(xhr,status,error){
                        $("#SubmitRegisterCourseForm").html('سجل الآن');
                        $('#loadingCreate').css('display','none');
                        $.each(xhr.responseJSON.errors, function(key, value) {
                            $('#error_'+key).text(value);
                        });
                    }
                });
            });
            function clearErrorMessage(){
                var spanID = ['course_id','name','gender', 'email','mobile','address'];
                $.each(spanID, function(key, value) {
                    $('#error_'+value).text(" ");
                });

            }
        });
        // ______________Owl-carousel-icons
        var owl = $('.owl-carousel-icons');
        owl.owlCarousel({
            margin: 0,
            padding:15,
            loop:( $('.owl-carousel .items').length > 3 ),
            nav: true,
            rtl: true,
            autoplay: true,
            dots: false,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 2
                },
                1300: {
                    items: 3
                }
            }
        })

    </script>
@endsection
