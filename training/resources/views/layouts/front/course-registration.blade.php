
@extends('front_layout.main-layout')
@section('title','Home Page')
@section('sliderImage')
    <div class="cover-image bg-background-1" data-bs-image-src="{{asset('FrontTheme/assets/images/banners/banner1.jpg')}}">
        <!--Section-->
        <section>
            <br>
            <div class="sptb-2 bannerimg">
                <div class="header-text mb-0">
                    <div class="container">
                        <div class="text-center text-white py-7">
                            <h1 class="fs-22"> التسجيل في الدورات  </h1>
                            <ol class="breadcrumb text-center">
                                <li class="breadcrumb-item"><a href="{{route('front.index')}}"> الصفحة الرئيسية </a></li>
                                <li class="breadcrumb-item active text-white" aria-current="page">التسجيل في الدورات </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </section><!--/Section-->
    </div>
    <!-- Shape Start -->
    <div class="relative">
        <div class="shape overflow-hidden text-white">
            <svg viewBox="0 0 2880 48" fill="none" xmsns="http://www.w3.org/2000/svg">
                <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="#f5f4f9"></path>
            </svg>
        </div>
    </div>
    <!--Shape End-->
@endsection
@section('content')

{{--    *** Start  Section Register in Course  *** --}}

<div class="sptb">
<div class="container">
    <div class="row">
<div class="col-lg-10 col-xl-10 col-md-12 mx-auto">
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
</div>
    </div>
</div>
</div>
{{--    *** End Section Register in Course  *** --}}

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
