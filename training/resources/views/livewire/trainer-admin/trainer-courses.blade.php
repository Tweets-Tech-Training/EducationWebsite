

<div>

    <div class="card mb-0">
        <div class="card-header">
            <h3 class="card-title">عرض الدورات  </h3>
        </div>
        <div class="card-body">
            <div class="ads-tabs">
                <div class="tabs-menus">
                    <!-- Tabs -->
                    <ul class="nav panel-tabs">
                        <li class=""><a href="#tab1" class="active" data-bs-toggle="tab">كل الدورات   <span class="ms-3 badge badge-primary">{{ $numCourses }}</span></a></li>
                        {{--                        <li><a href="#tab2" data-bs-toggle="tab">التصنيف <span class="ms-3 badge badge-primary">8</span></a></li>--}}
                    </ul>
                </div>
                <div class="tab-content">
                    <div class="tab-pane  active table-responsive userprof-tab" id="tab1">
                        <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap5 select2-sm no-footer">
                            {{--                            <div class="row">--}}
                            <div class="col-12 d-flex flex-sm-row flex-column justify-content-between mt-1">
                                {{--                                <div class="col-12 d-flex flex-sm-row flex-column justify-content-between mt-1">--}}
                                <div class="col-xl-8 col-sm-12 col-lg-6 col-md-12">
                                    <label>عرض الدورات : </label>
                                </div>
                                <div class="col-xl-4 col-sm-12 col-lg-6 col-md-12">
                                    <div id="DataTables_Table_0_filter" class="dataTables_filter"><label>البحث:<input type="search" class="form-control select2-sm form-control-sm" wire:model="search" placeholder="" aria-controls="DataTables_Table_0"></label></div></div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">

                                    <table class="table table-bordered table-hover">
                                        <thead>
                                        <tr>
                                            <th>  </th>
                                            <th>الدورة </th>
                                            <th>الصنف </th>
                                            <th>تاريخ الانتهاء </th>
                                            <th>عدد المحاضرات  </th>
                                            <th> المكان   </th>
                                            <th>الخيارات  </th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @forelse($courses as $course)
                                            <tr class="odd">
                                                <td class="sorting_1">
                                                    <label class="custom-control form-checkbox">
                                                        <input type="checkbox" class="custom-control-input" name="checkbox" value="checkbox">
                                                        <span class="custom-control-label"></span>
                                                    </label>
                                                </td>
                                                <td>
                                                    <div class="media mt-0 mb-0">
                                                        <div class="card-aside-img">
                                                            <a href="javascript:void(0)"></a>

                                                            <img src="{{$course->image?asset('storage/images/'.$course->image):asset('storage/images/no-image.png')}}" alt="img">
                                                        </div>
                                                        <div class="media-body">
                                                            <div class="card-item-desc ms-2 p-0 mt-0">
                                                                <a href="javascript:void(0)" class="text-dark"><h4 class="font-weight-bold">{{$course->name}}</h4></a>
                                                                <a href="javascript:void(0)" class="text-muted fs-12"><i class="fa fa-clock-o me-1"></i> {{$course->start_date}}</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>{{$course->category?$course->category->name:''}}</td>
                                                <td> {{$course->end_date}} </td>
                                                <td class="font-weight-semibold fs-16">{{$course->lectures_num}}</td>
                                                <td>
                                                    <a href="javascript:void(0)">{{$course->place}}</a>
                                                </td>
                                                <td>
                                                    <a class="btn btn-outline-light btn-sm waves-effect waves-light" data-bs-toggle="tooltip"  href="{{route('trainer-course.show',$course->id)}}" data-bs-original-title="View"><i class="fe fe-eye fs-16"></i></a>
                                                </td>
                                            </tr>
                                        @empty
                                            <x-nodata></x-nodata>
                                        @endforelse
                                        </tbody>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 col-md-5">
                                    {{$courses->links()}}
                                </div>
                            </div>

                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
</div>

