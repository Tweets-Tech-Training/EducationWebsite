
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
                            <h1 class="fs-22"> البرامج  و الدورات  </h1>
                            <ol class="breadcrumb text-center">
                                <li class="breadcrumb-item"><a href="{{route('front.index')}}"> الصفحة الرئيسية </a></li>
                                <li class="breadcrumb-item active text-white" aria-current="page">تفاصيل الدورة  </li>
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
    <section class="sptb">
        <div class="container">
            <div class="row">
                <!--Left Side Content-->
                <div class="col-xl-4 col-lg-4 col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <img src="{{asset('storage/images/'.$course->image)}}" alt="img" class="img-responsive  border br-7">
                            <div class="mt-4 mb-4 text-center">
                                <div class="mb-2">
										<span class="font-weight-semibold h2 text-default-dark mb-0">{{$course->name}}

										</span>
                                    <p class="font-weight-semibold h4 text-default-dark mb-0"> {{$course->price}}

										</p>
                                </div>
                            </div>
                            <div class="">
                                <a href="{{route('course.register.form')}}" class="btn btn-block btn-secondary mb-3 mb-xl-0"><span>سجل الان </span> <i class="fe fe-arrow-right mt-1 ms-2 fs-14"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">المدرب </h3>
                        </div>
                        <div class="card-body  item-user">
                            <div class="profile-pic mb-0">
                                <img src="{{asset('storage/images/'.$trainer->image)}}" class="brround avatar-xxl" alt="user">
                                <div>
                                    <a href="userprofile.html" class="text-dark"><h4 class="mt-3 mb-1 font-weight-bold">
                                        {{$trainer->name}}</h4></a>
                                    <span class="lead fs-16">{{$trainer->specialization}}</span>
                                    <div class=" item-user-icons mt-3">
{{--                                        <a href="javascript:void(0)" class="facebook-bg mt-0"><i class="fa fa-facebook"></i></a>--}}
{{--                                        <a href="javascript:void(0)" class="twitter-bg"><i class="fa fa-twitter"></i></a>--}}
{{--                                        <a href="javascript:void(0)" class="google-bg"><i class="fa fa-google"></i></a>--}}
{{--                                        <a href="javascript:void(0)" class="dribbble-bg"><i class="fa fa-dribbble"></i></a>--}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body item-user">
                            <h4 class="mb-4">معلومات التواصل </h4>
                            <div>
                                <h6 class="mb-3 float-start w-100"><span class="font-weight-semibold float-start"><i class="fe fe-map-pin me-2 mb-2"></i></span><a href="javascript:void(0)" class="text-body">{{$trainer->address}}</a></h6>
                                <h6 class="mb-3 float-start w-100"><span class="font-weight-semibold float-start"><i class="fe fe-mail me-2 mb-2"></i></span><a href="javascript:void(0)" class="text-body">{{$trainer->email}}</a></h6>
                                <h6 class="mb-3 float-start w-100"><span class="font-weight-semibold float-start"><i class="fe fe-phone me-2  mb-2"></i></span><a href="javascript:void(0)" class="text-body">{{$trainer->mobile}}</a></h6>
                            </div>
                        </div>
                        <div class="card-footer">
                        </div>
                    </div>

                </div>
                <!--Left Side Content-->
                <div class="col-xl-8 col-lg-8 col-md-12">
                    <!--Coursed Description-->
{{--                    <div class="card overflow-hidden">--}}
{{--                        <div class="ribbon ribbon-top-right text-danger"><span class="bg-danger">Best Seller</span>--}}
{{--                        </div>--}}
{{--                        <div class="card-body pb-0">--}}
{{--                            <a href="javascript:void(0)" class="text-dark"><h4 class="font-weight-semibold mb-0">اسم الدورة </h4></a>--}}
{{--                            <p class="lead-1">{{$course->name}}</p>--}}
{{--                        </div>--}}
{{--                        <div class="row details-1">--}}
{{--                            <div class="col-xl-4 col-lg-4 col-md-4 ">--}}
{{--                                <div class="card mb-0 border-0 shadow-none">--}}
{{--                                    <div class="card-body d-flex pb-0 pb-md-5">--}}
{{--                                        <div>--}}
{{--                                            <span class="icons fs-16 font-weight-semibold text-dark">المدرب </span>--}}
{{--                                            <a href="javascript:void(0)" class="icons h4 font-weight-semibold text-dark"><span class=" d-block">{{$trainer->name}}</span></a>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-xl-4 col-lg-4 col-md-4">--}}
{{--                                <div class="card mb-0 border-0 shadow-none">--}}
{{--                                    <div class="card-body pb-0 pb-md-5">--}}
{{--                                        <div>--}}
{{--                                            <span class="icons fs-16 font-weight-semibold text-dark">التصنيف </span>--}}
{{--                                            <a href="javascript:void(0)" class="icons h4 font-weight-semibold text-dark"></a>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                        </div>--}}
{{--                    </div>--}}
                    <div class="card">
                        <div class="card-header">
                            <div class="col-12 d-flex flex-sm-row flex-column justify-content-between mt-1">
                                <div>
                                    <p class="card-title"> اسم الدورة :   {{$course->name}}</p>
                                </div>
                                <div>
                                    <p class=" card-title">  التصنيف : {{$course->category?$course->category->name:''}}</p>
                                </div>

                            </div>
                        </div>
                        <div class="card-body">
                            <div class="mb-4 description">
                                <h4 class="mb-4 font-weight-bold">التفاصيل </h4>
                            <p> {{$course->details}} </p>
                            </div>
                            <h4 class="mb-4 font-weight-bold">معلومات الدورة </h4>
                            <div class="row">
                                <div class="col-xl-6 col-md-12">
                                    <ul class="list-unstyled widget-spec-1">
                                        <li class="text-default-dark"><i class="text-default float-start  mt-1 fe fe-alert-circle"></i><span>تاريخ بداية الدورة </span></li>
                                        <li class="text-default-dark"><i class="text-default float-start  mt-1   fe fe-alert-circle"></i><span>تاريخ انتهاء الدورة </span></li>
                                        <li class="text-default-dark"><i class="text-default float-start  mt-1  fa fa-hourglass"></i><span> عدد محاضراتها </span></li>
                                        <li class="text-default-dark"><i class="text-default float-start  mt-1  fa fa-map-marker"></i><span>  مكان الدورة </span></li>

                                    </ul>
                                </div>
                                <div class="col-xl-6 col-md-12">
                                    <ul class="list-unstyled widget-spec-1">
                                        <li class="text-default-dark">:<span> {{$course->start_date}}</span></li>
                                        <li class="text-default-dark">:<span>{{$course->end_date}}</span></li>
                                        <li class="text-default-dark">:<span> {{$course->lectures_num}}</span></li>
                                        <li class="text-default-dark">:<span> {{$course->place}} </span></li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">

                        </div>
                    </div>
                    <!--/Coursed Description-->
                </div>
            </div>
        </div>
    </section>
@endsection
