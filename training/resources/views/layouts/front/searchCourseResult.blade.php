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
                            <small class="text-muted"> {{ $course->category->name }} </small>
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
        <div  id="error-message" class="alert alert-primary alert-dismissible fade show" role="alert" style="margin-right: 23px ; width: 850px; padding-right: 12px;" >
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
                <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
            </svg>
            <h4 style="text-align: right;margin-bottom: 0px ; display: inline-block; margin-left: 1px; color: white">لا يوجد دورة بهذا الاسم  ...</h4>
        </div>
    @endforelse
</div>
