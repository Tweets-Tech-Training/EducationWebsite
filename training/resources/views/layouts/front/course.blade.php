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
        #error-message{
            margin-right: 23px;
            width: 850px;
            padding-right: 10px;
        }
        .bi-exclamation-triangle-fill{
            margin-left: 0px !important;
        }
    </style>
@endsection
@section('sliderImage')
    <div class="cover-image bg-background-1" data-bs-image-src="{{asset('FrontTheme/assets/images/banners/banner1.jpg')}}">
        <!--Section-->
        <section>
            <br>
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
            <div class="sptb">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-4 col-lg-4 col-md-12">
{{--                            <div class="card">--}}
{{--                                <div class="card-body">--}}
{{--                                    <div class="input-group">--}}
{{--                                        <input type="text" class="form-control br-ts-7  br-bs-7" placeholder="Search">--}}
{{--                                        <div class="input-group-text ">--}}
{{--                                            <button type="button" class="btn btn-primary br-te-7 br-be-7"> Search </button>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">التصنيفات </h3>
                                </div>
                                <div class="card-body">
                                    <div class="list-catergory">
                                        <div class="item-list">
                                            <ul class="list-group mb-0">
{{--                                                <li class="list-group-item pt-0">--}}
{{--                                                    <a href="javascript:void(0)" class="text-dark fs-14 font-weight-semibold">--}}
{{--                                                        <i class="fa fa-code bg-primary-light text-primary"></i> IT Services--}}
{{--                                                        <span class="badgetext badge badge-pill mb-0 mt-1 text-muted font-weight-semibold">14 </span>--}}
{{--                                                    </a>--}}
{{--                                                </li>--}}

                                                @foreach($categories as $category )
                                                <li class="list-group-item">
                                                    <a href="javascript:void(0)" class="text-dark fs-14 font-weight-semibold">
                                                        <i class="fa fa-{{$category->icon}} bg-{{$category->color}}-light text-{{$category->iconColor}}"></i>
                                                        {{$category->name}}
                                                        <span class="badgetext badge badge-pill mb-0 mt-1 text-muted font-weight-semibold">{{ $category->publishedCategory()->count()}} </span>
                                                    </a>
                                                </li>
                                                @endforeach

                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="resultAfterSearch" class="col-xl-8 col-lg-8 col-md-12">
                            <!--Coursed lists-->
                            <div class="row">
                                @forelse($courses as $course)
                                <div class="col-xl-12 col-lg-12 col-md-12">
                                    <div class="card overflow-hidden">
                                        <div class="ribbon ribbon-top-left"><span class="bg-danger">${{$course->price}}</span></div>
                                        <div class="row g-0 blog-list">
                                            <div class="col-xl-4 col-lg-12 col-md-12">
                                                <div class="item7-card-img br-be-0 br-te-0">
                                                    <a href="javascript:void(0)"></a>
                                                    <img src="{{asset('storage/images/'.$course->image)}}" alt="img" class="cover-image">
                                                    <div class="item7-card-text">
{{--                                                        <a class="item-card-badge bg-primary text-white" data-bs-toggle="tooltip" data-bs-original-title="Business"><i class="fa fa-briefcase"></i> </a>--}}
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-8 col-lg-12 col-md-12">
                                                <div class="card-body pb-4 pt-4">
                                                    <div class="mb-3">
                                                        <div class="col-12 d-flex flex-sm-row flex-column justify-content-between mt-1">
                                                            <div class="item-card7-text">
                                                            <a href="blog-details.html" class=""><h3 class="font-weight-semibold fs-16 mb-3"> اسم الدورة  :{{$course->name}}</h3></a>
                                                            </div>
                                                                <div class="d-flex mb-0">
                                                                    <h4 class="text-muted">  التصنيف : {{ $course->category->name }} </h4>
                                                                </div>
                                                         </div>
                                                        <div class="row">
                                                        <a class="col-md-6">
                                                            <i class="fa fa-clock-o me-1"></i><span class="font-weight-bold"> تاريخ  البداية   :</span> <span class="text-muted"> {{$course->start_date}}</span>
                                                        </a>
                                                        <a class="col-md-6"><i class="fa fa-clock-o" style="margin-left: 10px"></i><span class="font-weight-bold">تاريخ النهاية  :</span> <span class="text-muted"> {{$course->end_date}}</span></a>
                                                        </div>
                                                        <div class="row">

                                                                <a class="col-md-6"><i class="  mt-1  fa fa-hourglass" style="margin-left: 10px"></i><span class="font-weight-bold">عدد المحاضرات  :</span> <span class="text-muted"> {{$course->lectures_num}}</span></a>
                                                                <a class="col-md-6"><i class="  mt-1  fa fa-map-marker" style="margin-left: 10px"></i><span class="font-weight-bold">مكان الدورة    :</span> <span class="text-muted"> {{$course->place}}</span></a>


                                                        </div>
                                                    </div>
{{--                                                    <div class="card-footer">--}}
                                                      <div class="d-flex align-items-center pt-2 mt-auto">
                                                        <img src="{{$course->trainer->image?asset('storage/images/'.$course->trainer->image):''}}" class="avatar brround avatar-md me-3" >
                                                        <div>
                                                            <a href="" class="text-default font-weight-bold"> المدرب :{{$course->trainer?$course->trainer->name:''}}</a>
                                                        </div>
                                                        <div class="ms-auto text-muted">
                                                                <div class="d-md-flex d-block mb-0">
                                                                    <a href="{{route('front.courses.details',$course->id)}}" class="form-control btn btn-primary fs-16 fw-600" style="color: whitesmoke"> عرض التفاصيل</a>
                                                                </div>
                                                        </div>
                                                      </div>
{{--                                                    </div>--}}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @empty
                                    <div  id="error-message" class="alert alert-primary alert-dismissible fade show" role="alert" style="margin-right: 23px ; width: 850px; padding-right: 12px;" >
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
                                            <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                                        </svg>
                                        <h4 style="text-align: right;margin-bottom: 0px ; display: inline-block; margin-left: 1px; color: white">لا يوجد دورات ...</h4>
                                    </div>
                                @endforelse
                            </div>
                            <div class="center-block text-center">
                                {{$courses->links()}}
                            </div>
                            <!--/Coursed lists-->
                        </div>
                    </div>
                </div>
            </div>



{{--            <div id="resultAfterSearch" class="row">--}}
{{--                --}}{{--  *** Start Courses Section  ***  --}}
{{--                @forelse($courses as $course)--}}
{{--                    <div class="col-xl-4 col-md-6">--}}
{{--                        <div class="card overflow-hidden">--}}
{{--                            <div class="ribbon ribbon-top-left text-warning"><span class="bg-warning">${{$course->price}}</span></div>--}}
{{--                            <div class="item-card7-img pt-5 px-5">--}}
{{--                                <div class="item-card7-imgs">--}}
{{--                                    <a href="javascript:void(0)"></a>--}}
{{--                                    <img src="{{asset('storage/images/'.$course->image)}}" alt="img" class="cover-image br-7 border">--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="card-body">--}}
{{--                                <div class="item-card7-desc">--}}
{{--                                    <div class="item-card7-text">--}}
{{--                                        <a href="javascript:void(0)" class="text-dark"><h4 class="font-weight-semibold mb-1">{{$course->name}}</h4></a>--}}
{{--                                    </div>--}}
{{--                                    <div class="d-flex mb-0">--}}
{{--                                        <h4 class="text-muted"> {{ $course->category->name }} </h4>--}}
{{--                                    </div>--}}
{{--                                    <div class="pt-2 mb-3">--}}
{{--                                        <a class="me-4"><span class="font-weight-bold">عدد المحاضرات  :</span> <span class="text-muted"> {{$course->lectures_num}}</span></a>--}}
{{--                                        <a class="me-4 float-end"><span class="font-weight-bold">مدة المحاضرة  :</span><span class="text-muted"> {{$course->lecture_interval}}</span></a>--}}
{{--                                    </div>--}}

{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="card-footer">--}}
{{--                                <div class="d-flex">--}}
{{--                                    <div class="d-md-flex d-block mb-0">--}}
{{--                                        <a href="{{route('front.courses.details',$course->id)}}" class="form-control btn btn-primary fs-16 fw-600" style="color: whitesmoke"> عرض تفاصيل الدورة  </a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                @empty--}}
{{--                        <div  id="error-message" class="alert alert-primary alert-dismissible fade show" role="alert" style="margin-right: 23px ; width: 850px; padding-right: 12px;" >--}}
{{--                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">--}}
{{--                                <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>--}}
{{--                            </svg>--}}
{{--                            <h4 style="text-align: right;margin-bottom: 0px ; display: inline-block; margin-left: 1px; color: white">لا يوجد دورات  ...</h4>--}}
{{--                        </div>--}}
{{--                @endforelse--}}
{{--            </div>--}}

        </div>
    </section>
@endsection
{{--@section('script')--}}
{{--    <script>--}}
{{--        $(document).ready(function (){--}}
{{--            $('.select2-selection__placeholder').hide();--}}
{{--            $('#submitCourseSearch').click(function(e){--}}
{{--                e.preventDefault();--}}
{{--                $("#submitCourseSearch").html('تحميل').append('&nbsp;<span id="loadingCreate" class="spinner-border spinner-border-sm"></span>');--}}
{{--                var category_id = $('#category_id').val();--}}
{{--                var courseName= $('#courseName').val();--}}
{{--                var myformData  = new FormData();--}}
{{--                myformData.append("category_id", category_id);--}}
{{--                myformData.append("courseName", courseName);--}}
{{--                // console.log(category_id);--}}
{{--                $.ajaxSetup({--}}
{{--                    headers: {--}}
{{--                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')--}}
{{--                    }--}}
{{--                });--}}
{{--                $.ajax({--}}
{{--                    url: "{{ route('front.courses.search') }}",--}}
{{--                    method: 'POST',--}}
{{--                    dataType: 'json',--}}
{{--                    processData: false,--}}
{{--                    contentType: false,--}}
{{--                    cache: false,--}}
{{--                    data: myformData , // it send form data to server--}}
{{--                    enctype: 'multipart/form-data',--}}
{{--                    success: function(result) {--}}
{{--                        console.log(category_id);--}}
{{--                        clearInput();--}}
{{--                        $("#submitCourseSearch").html('بحث');--}}
{{--                        $('#loadingCreate').css('display','none');--}}
{{--                        $('#resultAfterSearch').html(result.html);--}}

{{--                    },--}}
{{--                    error:function(xhr,status,error){--}}
{{--                        clearInput();--}}
{{--                        $("#submitCourseSearch").html('بحث');--}}
{{--                        $('#loadingCreate').css('display','none');--}}
{{--                    }--}}
{{--                });--}}
{{--            });--}}
{{--            function clearInput(){--}}
{{--                $('#courseName').prop('value'," ");--}}
{{--                $('#category_id option:first').prop('selected',true);--}}
{{--                console.log($('#category_id').val()+ " ** "+$('#courseName').val());--}}
{{--            }--}}
{{--        });--}}
{{--    </script>--}}
{{--@endsection--}}
@push('script')
    <script>
        $(document).ready(function (){
            $('.select2-selection__placeholder').hide();
            $('#submitCourseSearch').click(function(e){
                e.preventDefault();
                $("#submitCourseSearch").html('تحميل').append('&nbsp;<span id="loadingCreate" class="spinner-border spinner-border-sm"></span>');
                var category_id = $('#category_id').val();
                var courseName= $('#courseName').val();
                var myformData  = new FormData();
                myformData.append("category_id", category_id);
                myformData.append("courseName", courseName);
                // console.log(category_id);
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    url: "{{ route('front.courses.search') }}",
                    method: 'POST',
                    dataType: 'json',
                    processData: false,
                    contentType: false,
                    cache: false,
                    data: myformData , // it send form data to server
                    enctype: 'multipart/form-data',
                    success: function(result) {
                        // console.log(result);
                        clearInput();
                        $("#submitCourseSearch").html('بحث');
                        $('#loadingCreate').css('display','none');
                        $('#resultAfterSearch').html(result.html);
                    },
                    error:function(xhr,status,error){
                        clearInput();
                        $("#submitCourseSearch").html('بحث');
                        $('#loadingCreate').css('display','none');
                    }
                });
            });
            function clearInput(){
                $('#courseName').prop('value'," ");
                $('#category_id option:first').prop('selected',true);
                console.log($('#category_id').val()+ " ** "+$('#courseName').val());
            }
        });
    </script>
@endpush

