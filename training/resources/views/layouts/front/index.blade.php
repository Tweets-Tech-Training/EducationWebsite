@extends('front_layout.main-layout')
@section('title','Home Page')
@section('css')
    <style>
    </style>
@endsection
@section('sliderImage')
    <div class="slider-images">
        <div class="container-fuild">
            <div class="header-text slide-header-text mt-0 mb-0">
                <div class="col-xl-7 col-lg-8 col-md-8 d-block mx-auto">
                    <div class="search-background bg-transparent input-field">
                        <div class="text-center text-white mb-7">
                            <h1 class="mb-1 font-weight-semibold fs-50">Build Your Future Classes</h1>
                            <p class="d-none d-md-block fs-18 text-white-80">many variations of passages of Lorem Ipsum available, but the majority have suffered alteration <br> in some form, by injected humour, or randomised words</p>
                        </div>
                        <div class="form row g-0">
                            <div class="form-group col-xl-9 col-lg-9 col-md-12 mb-0">
                                <input type="text" class="form-control input-xl br-te-md-0 br-be-md-0" placeholder="Search Courses...." data-min-length="1" list="courses" name="courses">
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-12 mb-0">
                                <a href="javascript:void(0)" class="btn btn-xl btn-block btn-primary br-ts-md-0 br-bs-md-0">Search Here</a>
                            </div>
                        </div>
                        <div class="recent-classes text-center mt-5">
                            <a class="recent-course" href="">
                                <i class="fe fe-book-open"></i>
                                <small>Language</small>
                            </a>
                            <a class="recent-course" href="">
                                <i class="fe fe-airplay"></i>
                                <small>IT Course</small>
                            </a>
                            <a class="recent-course" href="">
                                <i class="fe fe-database"></i>
                                <small>Data Science</small>
                            </a>
                            <a class="recent-course" href="">
                                <i class="fe fe-heart"></i>
                                <small>Health</small>
                            </a>
                            <a class="recent-course" href="">
                                <i class="fe fe-briefcase"></i>
                                <small>Business</small>
                            </a>
                        </div>
                    </div>
                </div>
            </div><!-- /header-text -->
        </div>
    </div>
@endsection
@section('content')
    {{--    *** Section Online Classes  *** --}}
    <section class="sptb bg-white">
        <div class="container">
            <div class="section-title">
                <h2>Online Classes</h2>
                <p class="fs-18 lead">Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
            </div>
            <div class="row">
                <div class="col-12 col-md-12 col-lg-12 col-xl-12">
                    <div class="row">
                        @forelse($categories as $category)
                        <div class="col-sm-12 col-lg-4 col-md-4">
                            <a href="javascript:void(0)" class="item-card overflow-hidden">
                                <div class="item-card-desc">
                                    <div class="card text-center overflow-hidden">
                                        <div class="card-img">
                                            <img src="{{asset('FrontTheme/assets/images/media/14.jpg')}}" alt="img" class="cover-image">
                                        </div>
                                        <div class="item-card-text item-card-text-footer">
                                            <h4 class="font-weight-semibold"> {{ $category->name }} </h4>
{{--                                            <span class="text-white-80"><strong class="fs-18 font-weight-bold text-white">{{$category->getCourses()->count()}}</strong> Over  Courses</span>--}}
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        @empty
                            <div  class=" col-10 alert alert-primary alert-dismissible fade show" role="alert">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
                                    <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                                </svg>
                                <h5 style="display: inline-block; margin-left: 1px">لا يتم إضافة دورات بعد...</h5>
                            </div>

                        @endforelse
                </div>
            </div>
        </div>
    </section>

    <!--Section-->

@endsection
@section('script')
@endsection
