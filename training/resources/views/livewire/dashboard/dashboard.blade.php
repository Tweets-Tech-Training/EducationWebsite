
@extends('dashboard_layout.main')

@section('content')
<div>
    {{-- Because she competes with no one, no one can compete with her. --}}
    <div class="col-xl-12 col-md-6 col-12">
        <div class="card card-statistics">
            <div class="card-header">
                <h4 class="card-title">الاحصائيات </h4>
                <div class="d-flex align-items-center">
                    {{--                    <p class="card-text font-small-2 mr-25 mb-0">Updated 1 month ago</p>--}}
                </div>
            </div>
            <div class="card-body statistics-body">
                <div class="row">
                    <div class="col-xl-3 col-sm-6 col-12 mb-2 mb-xl-0">
                        <div class="media">


                                <div class="avatar bg-rgba-warning p-50 m-0 mb-1 mr-2">
                                    <div class="avatar-content">
                                        <i class="feather icon-list text-warning font-medium-5"></i>
                                    </div>
                                </div>

                            <div class="media-body my-auto">
                                <h4 class="font-weight-bolder mb-0">{{App\Models\Category::count()  }}</h4>
                                <p class="card-text font-small-3 mb-0">التصنيفات </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 col-12 mb-2 mb-xl-0">
                        <div class="media">
                            <div class="avatar bg-rgba-danger p-50 m-0 mb-1 mr-2">
                                <div class="avatar-content">
                                    <i class="feather icon-book-open text-danger font-medium-5"></i>
                                </div>
                            </div>

                            <div class="media-body my-auto">
                                <h4 class="font-weight-bolder mb-0">{{App\Models\Course::count()}}</h4>
                                <p class="card-text font-small-3 mb-0">الدورات </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 col-12 mb-2 mb-sm-0">
                        <div class="media">
                            <div class="avatar bg-rgba-success p-50 m-0 mb-1 mr-2">
                                <div class="avatar-content">
                                    <i class="feather icon-user text-success font-medium-5"></i>
                                </div>
                            </div>
                            <div class="media-body my-auto">
                                <h4 class="font-weight-bolder mb-0">{{ App\Models\Trainer::count() }}</h4>
                                <p class="card-text font-small-3 mb-0">المدربون  </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 col-12">
                        <div class="media">
                            <div class="avatar bg-rgba-primary p-50 m-0 mb-1 mr-2">
                                <div class="avatar-content">
                                    <i class="feather icon-users text-primary font-medium-5"></i></i>
                                </div>
                            </div>
                            <div class="media-body my-auto">
                                <h4 class="font-weight-bolder mb-0"> {{ App\Models\Student::count() }}  </h4>
                                <p class="card-text font-small-3 mb-0"> الطلاب </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</div>
<div class="col-md-12 col-lg-12 col-xl-12">
    <div class="card">
        <div class="card-header bg-transparent pd-b-0 pd-t-20 bd-b-0">
            <div class="d-flex justify-content-between">
                <h4 class="card-title mb-0">عدد الطلاب خلال السنة الحالية </h4>
                <i class="mdi mdi-dots-horizontal text-gray"></i>
            </div>

        </div>
        <div class="card-body" style="width: 90%">
            {!! $chartjs->render() !!}

        </div>
    </div>
</div>
@endsection
@push('script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.js"></script>
    @endpush
