
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
                        <div class="card-header">
                            <h3 class="card-title">المدرب </h3>
                        </div>
                        <div class="card-body  item-user">
                            <div class="profile-pic mb-0">
                                <img src="{{asset('storage/images/'.$trainer->image)}}" class=" avatar-xxl" style="width: 243px ; height: 126px ;" alt="user">
                                <div>
                                    <a href="userprofile.html" class="text-dark text-center"><h4 class="mt-3  font-weight-bold">
                                            {{$trainer->name}}</h4></a>
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

                    </div>

                </div>
                <!--Left Side Content-->
                <div class="col-xl-8 col-lg-8 col-md-12">

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
                                                        <a class="col-md-6"><i class="fa fa-clock-o"></i><span class="font-weight-bold">تاريخ النهاية  :</span> <span class="text-muted"> {{$course->end_date}}</span></a>
                                                    </div>
                                                    <div class="row">
                                                        <a class="col-md-6"><i class="fa fa-clock-o"></i><span class="font-weight-bold">عدد المحاضرات  :</span> <span class="text-muted"> {{$course->lectures_num}}</span></a>
                                                        <a class="col-md-6"><i class="fa fa-clock-o"></i><span class="font-weight-bold">مكان الدورة    :</span> <span class="text-muted"> {{$course->place}}</span></a>
                                                    </div>
                                                </div>
                                                {{--                                                    <div class="card-footer">--}}
                                                <div class="d-flex align-items-center pt-2 mt-auto">
                                                    <div>
                                                        <a href="{{route('front.courses.details',$course->id)}}" class="form-control btn btn-primary fs-16 fw-600" style="color: whitesmoke"> عرض التفاصيل</a>
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
                </div>
            </div>
        </div>
    </section>
@endsection
