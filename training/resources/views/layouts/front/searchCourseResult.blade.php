<div class="row">
    {{--  *** Start Courses Section  ***  --}}
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
            <h4 style="text-align: right;margin-bottom: 0px ; display: inline-block; margin-left: 1px; color: white">لا يوجد دورة بهذا الاسم  ...</h4>
        </div>
    @endforelse
</div>
