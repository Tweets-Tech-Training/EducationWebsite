@extends('front_layout.main-layout')
@section('title','Home Page')
@section('css')
    <style>
        .horizontal-main{
            border-bottom: 1px solid #ededf5 !important;
            border-color: rgba(255, 255, 255, 0.1) !important;
        }
        .breadcrumb{
            font-size: 16px;
        }
        .courseName{
            padding: 1.480rem .75rem;
        }
        .select2-selection {
            height: 50px !important;
        }
        .select2-selection__arrow{
            top: 12px !important;
        }
        .select2-selection__rendered {
            padding-right: 10px;
            padding-top: 5px;
        }
        .search{
            padding: 5px;
            font-size: 18px;
        }
        .form-group{
            margin-right: 0px !important;
            margin-left: -15px;
        }
        .form > div:first-child{
            margin-right: 10px !important;
        }
    </style>
@endsection
@section('sliderImage')
    <div class="cover-image bg-background-1" data-bs-image-src="{{asset('FrontTheme/assets/images/banners/banner1.jpg')}}">
        <!--Section-->
        <section>
            <div class="sptb-2 bannerimg">
                <div class="header-text mb-0">
                    <div class="container">
                        <div class="text-center text-white py-7">
                            <h1 class="fs-22"> البرامج  و الدورات  </h1>
                            <ol class="breadcrumb text-center">
                                <li class="breadcrumb-item"><a href="{{route('front.index')}}"> الصفحة الرئيسية </a></li>
                                <li class="breadcrumb-item active text-white" aria-current="page"> الدورات التدريبية </li>
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
    <section class="sptb bg-gray-lightest">
        <div class="container">
            <div class="section-title d-md-flex pb-3">
                <div>
                    <h2>
                        من دوراتنا
                        <hr class="mt-2 mb-2">
                    </h2>
                    <p class="fs-18 lead">
                        اختر الدورة المطلوبة
                    </p>
                </div>
                <div class="ms-auto d-inline-flex">
                    {{--                    <div class="w-150 mt-3 me-4">--}}
                    {{--                        <select class="form-control select2 select2-show-search  border-bottom-0" data-placeholder="Select-category">--}}
                    {{--                                <option value="  "> اختر القسم </option>--}}
                    {{--                                @foreach($categories as $category)--}}
                    {{--                                    <option value="{{$category->id}}">{{$category->name}}</option>--}}
                    {{--                                @endforeach--}}
                    {{--                        </select>--}}
                    {{--                    </div>--}}

                </div>
            </div>
            <div class="form row pb-7">
                <div class="form-group  col-md-4 mb-0 select-div">
                    <select name="category_id" id="category_id" class="form-control select2-show-search  border-bottom-0 select-height" data-placeholder="Select Category">
                        <option value=" " >اختر التصنيف </option>
                        @if($categories->count())
                            @foreach($categories as $category)
                                <option class=" p-5"  value="{{$category->id}}" > {{$category->name}}  </option>
                            @endforeach
                        @endif
                    </select>
                </div>
                <div class="form-group  col-md-3 mb-0">
                    <input type="text" class="form-control courseName" id="courseName" placeholder="اسم الدورة" data-min-length="1" list="courses" name="courseName">
                </div>
                <div class=" col-md-2 mb-0 ">
                    <a href="javascript:void(0)" id="submitCourseSearch" class="btn  btn-block btn-primary search"> بحث </a>
                </div>
            </div>

            <div class="row">
                {{--  *** Start Courses Section  ***  --}}
                @forelse($courses as $course)
                    <div class="col-md-4">
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
    </section>
@endsection
@section('script')
    <script>
        $(document).ready(function (){
            $('.select2-selection__placeholder').hide();
            $('#submitCourseSearch').click(function(e){
                e.preventDefault();
                // clearErrorMessage();
                $("#submitCourseSearch").html('تحميل').append('&nbsp;<span id="loadingCreate" class="spinner-border spinner-border-sm"></span>');
                var category_id = $('#category_id').val();
                var courseName= $('#courseName').val();
                var myformData  = new FormData();
                myformData.append("category_id", category_id);
                myformData.append("courseName", courseName);
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    url: "{{ route('front.courses.index') }}",
                    method: 'POST',
                    dataType: 'json',
                    processData: false,
                    contentType: false,
                    cache: false,
                    data: myformData , // it send form data to server
                    enctype: 'multipart/form-data',
                    success: function(result) {
                        console.log(result);
                        $("#submitCourseSearch").html('سجل الآن');
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
                        $("#submitCourseSearch").html('سجل الآن');
                        $('#loadingCreate').css('display','none');
                        // $.each(xhr.responseJSON.errors, function(key, value) {
                        //     $('#error_'+key).text(value);
                        // });
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
    </script>
@endsection
