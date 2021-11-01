<div>
    <div class="content-body">

        <div class="content-header row">
            <div class="content-header-left col-md-9 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h2 class="content-header-title float-left mb-0">القاعة :  {{ $hall->name }}</h2>
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('halls.index' )}}"><h4 style="color: #0a53be">  القاعات </h4> </a>
                                </li>
                                <li class="breadcrumb-item active">مواعيد القاعة المشغولة : </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>

        </div>

            <div class="content-body">
                <section id="data-thumb-view" class="data-thumb-view-header">

                    <div class="table-responsive">

     <table class="table data-thumb-view dataTable no-footer dt-checkboxes-select" id="DataTables_Table_0" role="grid">
      <thead>
        <tr role="row">

        <th rowspan="1" colspan="1">
           اسم الشعبة
        </th>

        <th rowspan="1" colspan="1">
            اسم الدورة
        </th>
        <th rowspan="1" colspan="1">
            من
        </th>
        <th rowspan="1" colspan="1">
             الى
        </th>
    </tr>
    </thead>
    <tbody>
    @forelse ($appointments as $appointment)
        <tr>
            <td>{{$appointment->name}}</td>
            <td>{{$appointment->course?$appointment->course->name:''}}</td>
            <td>{{$appointment->start_time}}</td>
            <td> {{$appointment->end_time}}</td>
{{--           --}}

        </tr>

    @empty
        <x-nodata></x-nodata>
    @endforelse
    </tbody>
</table>

<div class="bottom">
    <div class="actions"></div>
    <div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_0_paginate">
{{--        {{$halls->links()}}--}}
        <div>
        </div>

    </div>
</div>
                    </div>
                </section>
        </div>
    </div>
</div>
