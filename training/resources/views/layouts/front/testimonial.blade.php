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
                        المدربون
                        <hr class="mt-2 mb-2">
                    </h2>
                    {{--                    <p class="fs-18 lead">--}}
                    {{--                        اختر الدورة المطلوبة--}}
                    {{--                    </p>--}}
                </div>
                <div class="ms-auto d-inline-flex">
                </div>
            </div>
            <div id="resultAfterSearch" class="row">
                {{--  *** Start Courses Section  ***  --}}
                @forelse($reviews as $review)
                    <div class="col-xl-4 col-md-6">

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
                                            <img src="{{$review->image?asset('storage/images/'.$review->image):asset('storage/images/no-image.png')}}" class="mx-auto d-block brround mb-3 mt-6 w-9 h-9" alt="img">
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
                                    </div> </div>

                            </div>
                                </div>
                            </div>
                    </div>
                @empty
                    <div  id="error-message" class="alert alert-primary alert-dismissible fade show" role="alert" style="margin-right: 23px ; width: 850px; padding-right: 12px;" >
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
                            <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                        </svg>
                        <h4 style="text-align: right;margin-bottom: 0px ; display: inline-block; margin-left: 1px; color: white">لا يوجد اراء ...</h4>
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
@endsection
