<div>
    <div class="content-body">
        <div class="content-header row">
            <div class="content-header-left col-md-9 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h2 class="content-header-title float-left mb-0"> الدورات </h2>
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('dashboard')}}">الرئيسية</a>
                                </li>
                                <li class="breadcrumb-item active">الدورات </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="content-body">
            <section id="data-thumb-view" class="data-thumb-view-header">

                <div class="table-responsive">
                    <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                        <div class="top">
                            <div class="actions action-btns"><div class="dt-buttons btn-group">
                                    <a href="{{route('course.create')}}"   tabindex="0" aria-controls="data_table"  class="btn btn-outline-primary mr-1 mb-1 waves-effect waves-light"><i class="feather icon-plus-circle"></i>
                                        اضافة دورة جديدة                                 </a>
                                </div></div>
                            <div class="action-filters">
                                <div class="dataTables_length" id="data_table_length"><label>
                                        <select name="data_table_length"  wire:model="paginateNum" class="custom-select custom-select-sm form-control form-control-sm">
                                            <option value="4">4</option><option value="10">10</option><option value="15">15</option><option value="20">20</option></select>
                                    </label></div><div id="data_table_filter" class="dataTables_filter"><label>
                                        <input type="search" wire:model="search"  class="form-control form-control-sm" placeholder="" aria-controls="data_table">
                                    </label></div></div>
                        </div>
                        <div class="clear"></div>
                        <table class="table data-thumb-view dataTable no-footer dt-checkboxes-select" id="DataTables_Table_0" role="grid">
                            <thead>
                            <tr role="row">

                                <th rowspan="1" colspan="1">
                                    الرقم
                                </th>

                                <th rowspan="1" colspan="1">
                                    الاسم
                                </th>

                                <th rowspan="1" colspan="1">
                                    السعر
                                </th>
                                <th rowspan="1" colspan="1">
                                    تاريخ البدء
                                </th>
                                <th rowspan="1" colspan="1">
                                    تاريخ النهاية
                                </th>
                                <th rowspan="1" colspan="1">
                                  ادراة  الشعب
                                </th>

                                <th rowspan="1" colspan="1" >
                                    الخيارات
                                </th>

                            </tr>
                            </thead>
                            <tbody>

                            @forelse($courses as $course)
                                <tr>
                                    <td >{{ $course->id }}</td>
                                    <td >{{ $course->name }}</td>
                                    <td >{{ $course->price }}</td>
                                    <td >{{ $course->start_date }}</td>
                                    <td >{{ $course->end_date }}</td>
                                    <td>                                         <a type="button" title="إضافة شعبة" class="btn btn-icon btn-icon rounded-circle btn-success mr-1 mb-1 waves-effect waves-light" href="{{route('studyDivision.index')}}"><i class="feather icon-plus-circle"></i></a>
                                    </td>
                                    <td >
                                        <a type="button" class="btn btn-icon btn-icon rounded-circle btn-primary mr-1 mb-1 waves-effect waves-light" href="{{route('course.edit',$course->id)}}"><i class="feather icon-edit"></i></a>

                                        <button type="button" wire:click="deleteId({{ $course->id }})" class="btn btn-icon btn-icon rounded-circle btn-danger mr-1 mb-1 waves-effect waves-light" data-toggle="modal" data-target="#exampleModal"><i class="feather icon-trash"></i></button>


                                    </td>
                                </tr>
                            @empty
                                    <x-nodata></x-nodata>

                            @endforelse
                            </tbody>
                        </table>

                        <div class="bottom">
                            <div class="actions"></div>
                            <div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_0_paginate">
                                <div>
                                    {{ $courses->links() }}
                                </div>

                            </div>
                        </div>

                    </div>
                </div>


            </section>
        </div>



    </div>


    <div wire:ignore.self class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">حذف الدورة</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true close-btn">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>هل انت متأكد؟؟</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary close-btn" data-dismiss="modal">الغاء</button>
                    <button type="button" wire:click.prevent="delete" class="btn btn-danger close-modal" data-dismiss="modal">نعم </button>
                </div>
            </div>
        </div>
    </div>

</div>





