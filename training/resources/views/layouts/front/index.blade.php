@extends('front_layout.main-layout')
@section('title','Home Page')
@section('css')
    <style>

    </style>
@endsection
@section('sliderImage')
   @include('front_layout.sliderImage')
@endsection
@section('content')

    {{--    *** Section Online Classes  *** --}}
{{--    <section class="sptb bg-white">--}}
{{--        <div class="container">--}}
{{--            <div class="section-title">--}}
{{--                <h2>Online Classes</h2>--}}
{{--                <p class="fs-18 lead">Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>--}}
{{--            </div>--}}
{{--            <div class="row">--}}
{{--                <div class="col-12 col-md-12 col-lg-12 col-xl-12">--}}
{{--                    <div class="row">--}}
{{--                        @forelse($categories as $category)--}}
{{--                        <div class="col-sm-12 col-lg-4 col-md-4">--}}
{{--                            <a href="javascript:void(0)" class="item-card overflow-hidden">--}}
{{--                                <div class="item-card-desc">--}}
{{--                                    <div class="card text-center overflow-hidden">--}}
{{--                                        <div class="card-img">--}}
{{--                                            <img src="{{asset('FrontTheme/assets/images/media/14.jpg')}}" alt="img" class="cover-image">--}}
{{--                                        </div>--}}
{{--                                        <div class="item-card-text item-card-text-footer">--}}
{{--                                            <h4 class="font-weight-semibold"> {{ $category->name }} </h4>--}}
{{--                                            <span class="text-white-80"><strong class="fs-18 font-weight-bold text-white">{{$category->getCourses()->count()}}</strong> Over  Courses</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </a>--}}
{{--                        </div>--}}
{{--                        @empty--}}
{{--                            <div  class=" col-10 alert alert-primary alert-dismissible fade show" role="alert">--}}
{{--                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">--}}
{{--                                    <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>--}}
{{--                                </svg>--}}
{{--                                <h5 style="display: inline-block; margin-left: 1px">لا يتم إضافة دورات بعد...</h5>--}}
{{--                            </div>--}}

{{--                        @endforelse--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}
    <!--  *** End Section Online Classes  *** -->

{{--    *** Section latest Courses  *** --}}
    <section class="sptb bg-white">
        <div class="container">
            <div class="section-title d-md-flex pb-3">
                <div>
                    <h2>
                    البرامج و الدورات
                        <hr class="mt-2 mb-2">
                    </h2>
                    <p class="fs-20 lead">
                        اختر الدورة المطلوبة
                    </p>
                </div>
                <div class="ms-auto d-inline-flex">
                    <div class="w-150 mt-3 me-4">
                        <select class="form-control select2-show-search  border-bottom-0" data-placeholder="Select Category">
                            <optgroup label="Categories">
                                <option>اختر القسم </option>
                                <option value="1">IT</option>
                                <option value="2">Language</option>
                                <option value="3">Science</option>
                                <option value="4">Health</option>
                                <option value="5">Humanities</option>
                                <option value="6">Business</option>
                                <option value="7">Maths</option>
                                <option value="8">Marketing</option>
                            </optgroup>
                        </select>
                    </div>
                    <div class="">
                        <a class="btn btn-primary mt-3" href="javascript:void(0)"><i class="fe fe-arrow-right"></i> عرض الكل </a>
                    </div>
                </div>
            </div>
            <div  class="owl-carousel owl-carousel-icons">
                {{--  *** Start Courses Section  ***  --}}
                @forelse($courses as $course)
                <div class="item" style="height: 400px; max-height: 400px">
                    <div class="card overflow-hidden mb-0" style="height:100%;">
                        {{--   **** appear when course has sale  *** --}}
{{--                        <div class="power-ribbon power-ribbon-top-left text-warning"><span class="bg-warning"><img src="{{asset('FrontTheme/assets/images/png/power.png')}}" class=""></span></div>--}}
                        <div class="item-card7-img pt-5 px-5">
                            <div class="item-card7-imgs">
                                <a href="javascript:void(0)"></a>
                                <img src="{{asset('storage/images/'.$course->image)}}" alt="img" class="cover-image br-7 border">
                            </div>
                            <div class="item-card7-overlaytext">
                                <h4 class="mb-0"> ${{$course->price}} <del class="fs-12">$1560</del></h4>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="item-card7-desc">
                                <small class="text-muted">-- Marketing</small>
                                <div class="item-card7-text mt-1">
                                    <a href="javascript:void(0)" class="text-dark"><h4 class="font-weight-semibold mb-1"> {{$course->name}}  </h4></a>
                                </div>
                                <div class="pt-2 mb-2">
                                    <a class="me-4"><i class="fe fe-calendar float-start me-1 mt-1"></i><span class=""> {{$course->lectures_num}} محاضرات </span></a>
                                    <a class="ms-4 float-end"><i class="fe fe-clock float-start me-1 mt-1"></i><span class=""> {{$course->lecture_interval}} ساعة / كل يوم </span></a>
                                </div>
                                <p class="mb-0 text-dark"> {!! $course->details !!} </p>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="d-flex">
                                <div class="d-md-flex d-block mb-0">
                                    <div class="star-ratings start-ratings-main clearfix me-3">
                                        <a class="form-control btn btn-secondary" href=""> سجل الآن </a>
                                    </div>
{{--                                    <span class="">875 reviews</span>--}}
                                </div>
                                <div class="ms-auto d-flex">
                                    <a class="form-control btn btn-primary" href=""> تفاصيل الدورة </a>
{{--                                    <a class="viewmore-btn-icon mx-1" href="javascript:void(0)"><i class="fe fe-heart"></i></a>--}}
{{--                                    <a class="viewmore-btn-icon mx-1" href="javascript:void(0)"><i class="fe fe-share-2"></i></a>--}}
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
                {{--  *** End Courses Section  ***  --}}
            </div>
        </div>
    </section>
    <!--  *** End Section latest Courses *** -->

    {{--    *** Start  Section Register in Course  *** --}}
    <section class="sptb bg-gray-lightest" style="padding-bottom: 3rem">
        <div class="container">
            <div class="section-title d-md-flex pb-3">
                <div>
                    <h2>
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
                    <div id="scrollTop" class="alert alert-success alert-dismissible fade show" role="alert" style="display: none;padding:7px;">
                        تم التسجيل بالدورة بنجاح
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="form row" >
                        <div class="form-group col-md-6">
                            <span class="fs-15 fw-bold" >  الدورة </span>
                            <select name="course_id" id="course_id" class="form-control select2-show-search  border-bottom-0" data-placeholder="Select Category">
                                <option value=" " >اختر الدورة </option>
                                @foreach($courses as $course)
                                    <option class=" p-5"  value="{{$course->id}}" > {{$course->name}}  </option>
                                @endforeach
                            </select>
                            <span class="text-danger" id="error_course_id"></span>
                        </div>
                        <div class="form-group col-md-6">
                            <span class="fs-15 fw-bold" >  الاسم </span>
                            <input type="text" class="form-control" id="name" name="name" placeholder="أدخل الاسم">
                             <span class="text-danger "id="error_name" ></span>
                        </div>
                        <div class="form-group col-md-6">
                            <span class="fs-15 fw-bold" >  الجنس  </span>
                            <select name="gender" id="gender" class="form-control select2-show-search  border-bottom-0" data-placeholder="Select gender">
                                <option value=" ">اختر الجنس </option>
                                <option class=" p-5"  value="M" > ذكر  </option>
                                <option class=" p-5"  value="F" > أنثى  </option>
                            </select>
                            <span class="text-danger" id="error_gender"></span>
                        </div>
                        <div class="form-group col-md-6">
                            <span class="fs-15 fw-bold" >  الايميل  </span>
                            <input type="text" class="form-control" id="email" name="email" placeholder="أدخل الايميل">
                            <span class="text-danger" id="error_email"></span>
                        </div>
                        <div class="form-group col-md-6">
                            <span class="fs-15 fw-bold"> رقم الجوال </span>
                            <input type="text" class="form-control" id="mobile" name="mobile" placeholder="أدخل رقم الجوال">
                            <span class="text-danger" id="error_mobile"></span>
                        </div>
                        <div class="form-group col-md-6">
                            <span class="fs-15 fw-bold" > العنوان </span>
                            <input type="text" class="form-control" name="address" id="address" placeholder=" أدخل العنوان  ">
                            <span class="text-danger" id="error_address"></span>
                        </div>
                        <div class="form-group" >
                            <button id="SubmitRegisterCourseForm" class="form-control btn btn-primary" style="margin: 0 auto; width: 35%; margin-top:25px"> سجل الآن </button>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </section>

    {{--    *** End Section Register in Course  *** --}}

{{--   ****  Start Section What Says About Us *** --}}
    <section class="sptb position-relative bg-white">
        <div class="container">
            <div class="section-title d-md-flex">
                <div>
                    <h2>  ماذا قال طلابنا عنا  </h2>
                    <p class="fs-20 fw-bold lead" > آراء بعض الطلاب الذين شاركوا معنا في الدورات </p>
                </div>
                <div class="ms-auto">
                    <div class="">
                        <a class="btn btn-primary mt-3" href="javascript:void(0)"><i class="fe fe-arrow-right"></i>   عرض كل الآراء </a>
                    </div>
                </div>
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
                            <div  class=" col-10 alert alert-primary alert-dismissible fade show" role="alert">--}}
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
                                    <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                                </svg>
                                <h5 style="display: inline-block; margin-left: 1px">لا يوجد آراء بعد...</h5>
                            </div>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </section>
{{--   ****  End Section What Says About Us *** --}}

{{--   ****  Start Section Sponsers *** --}}
    <section class="sptb bg-white">
        <div class="container">
            <div class="section-title">
                <h2> شركاؤنا </h2>
                <p class="fs-18 lead"> مجموعة من الشركات الداعمة لنا في رحلتنا </p>
            </div>
            <div id="small-categories" class="owl-carousel client-carousel">
                @forelse($partners as $partner)
                <div class="item" >
                    <div class="p-4 border br-7">
                        <a href="{{$partner->link}}">
                            <img src="{{asset('storage/images/'.$partner->image)}}" style="width: 100px; height: 95px;"
                                 alt="{{$partner->title}}"
                                 title="{{$partner->title}}"
                            >
                        </a>

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
            </div>
        </div>
    </section>
{{--   ****  End Section Sponsers *** --}}

@endsection
@section('script')
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
        $(document).ready(function (){
            $('#SubmitRegisterCourseForm').click(function(e){
                e.preventDefault();
                $("#SubmitRegisterCourseForm").html('تحميل').prepend('<span id="loadingCreate" class="spinner-border spinner-border-sm"></span>');
                var course_id = $('#course_id').val();
                var name= $('#name').val();
                var gender= $('#gender').val();
                var email= $('#email').val();
                var mobile= $('#mobile').val();
                var address= $('#address').val();
                console.log(course_id +gender);
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
                    // contentType: "multipart/form-data",// it used when data send to server
                    processData: false,
                    contentType: false,
                    cache: false,
                    data: myformData , // it send form data to server
                    enctype: 'multipart/form-data',
                    success: function(result) {
                        $("#SubmitRegisterCourseForm").html('سجل الآن');
                        $('#loadingCreate').css('display','none');
                        // $('.alert-danger').hide();
                        $('.alert-success').show();
                    },
                    error:function(xhr,status,error){
                        $("#SubmitRegisterCourseForm").html('سجل الآن');
                        $('#loadingCreate').css('display','none');
                        // $('.alert-danger').html('');
                        $.each(xhr.responseJSON.errors, function(key, value) {
                            $('#error_'+key).text(value);
                        });
                    }
                });
            });
        });
    </script>
@endsection
