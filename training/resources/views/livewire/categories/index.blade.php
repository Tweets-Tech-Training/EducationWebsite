<div>
    <div class="content-body">
        <div class="content-header row">
            <div class="content-header-left col-md-9 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h2 class="content-header-title float-left mb-0"> الأصناف </h2>
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('dashboard')}}">الرئيسية</a>
                                </li>
                                <li class="breadcrumb-item active">الأصناف </li>
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
                                    <a href="{{route('categories.create')}}"   tabindex="0" aria-controls="data_table"  class="btn btn-outline-primary mr-1 mb-1 waves-effect waves-light"><i class="feather icon-plus-circle"></i>
                                        اضافة صنف جديدة                                 </a>
                                </div></div>
                            <div class="action-filters">
                                <div class="dataTables_length" id="data_table_length"><label>
                                        <select name="data_table_length" aria-controls="data_table" class="custom-select custom-select-sm form-control form-control-sm">
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
                                    الرمز
                                </th>
                                <th rowspan="1" colspan="1">
                                    الصورة
                                </th>

                                <th rowspan="1" colspan="1" >
                                    الخيارات
                                </th>

                            </tr>
                            </thead>
                            <tbody>

                            @forelse($categories as $category)
                                <tr>
                                    <td >{{ $category->id }}</td>
                                    <td >{{ $category->name }}</td>
                                    <td > <i class="fa fa-{{$category->icon}} bg-{{$category->color}}-light text-{{$category->iconColor}}"></i>
                                    </td>
                                    <td ><img src="{{$category->image?asset('storage/images/'.$category->image):asset('storage/images/no-image.png')}}"  width="50" height="50" class="rounded-circle"  /></td>
                                    <td >
                                        <a type="button" class="btn btn-icon btn-icon rounded-circle btn-primary mr-1 mb-1 waves-effect waves-light" href="{{route('categories.edit',$category->id)}}"><i class="feather icon-edit"></i></a>
                                        <button type="button" wire:click="deleteId({{ $category->id }})" class="btn btn-icon btn-icon rounded-circle btn-danger mr-1 mb-1 waves-effect waves-light" data-toggle="modal" data-target="#exampleModal"><i class="feather icon-trash"></i></button>
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
                                    {{--  ****  pagination  *** --}}
                                    {{ $categories->links() }}
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
                    <h5 class="modal-title" id="exampleModalLabel">حذف الصنف</h5>
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




