


<div>
    <div class="content-body">

        <div class="content-header row">
            <div class="content-header-left col-md-9 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h2 class="content-header-title float-left mb-0">القاعات</h2>
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="">الرئيسية</a>
                                </li>
                                <li class="breadcrumb-item active">القاعات </li>
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
                                    <button wire:click="create"    tabindex="0" aria-controls="data_table"  class="btn btn-outline-primary mr-1 mb-1 waves-effect waves-light"><i class="feather icon-plus-circle"></i>
                                        اضافة قاعة جديدة                                 </button>
                                </div></div>
                            <div class="action-filters">
                                <div class="dataTables_length" id="data_table_length"><label>
                                        <select name="data_table_length" aria-controls="data_table" class="custom-select custom-select-sm form-control form-control-sm">
                                            <option value="4">4</option><option value="10">10</option><option value="15">15</option><option value="20">20</option></select>
                                    </label></div><div id="data_table_filter" class="dataTables_filter"><label>
                                   <x-search wire:model="search"/>
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
                                    السعة
                                </th>
                                <th rowspan="1" colspan="1">
                                    نوع القاعة
                                </th>
                                <th rowspan="1" colspan="1">
                                       مواعيد القاعة المشغولة
                                </th>
                                <th rowspan="1" colspan="1">
                                    الخيارات
                                </th>

                            </tr>
                            </thead>
                            <tbody>
                            @forelse ($halls as $hall)
                                <tr>
                                    <td>{{$hall->id}}</td>
                                    <td>{{$hall->name}}</td>
                                    <td>{{$hall->capacity}}</td>
                                    <td> {{$hall->computerized?'محوسبة':' ليست محوسبة '}}</td>
                                    <td>
                                        <div class="inline-block whitespace-no-wrap">
                                            <a type="button" href="{{route('halls.show',$hall->id)}}" class="btn btn-icon btn-icon rounded-circle btn-success mr-1 mb-1 waves-effect waves-light" ><i class="feather icon-eye"></i></a>
                                        </div>

                                    </td>
                                    <td>
                                        <div class="inline-block whitespace-no-wrap">
                                            <button type="button" class="btn btn-icon btn-icon rounded-circle btn-primary mr-1 mb-1 waves-effect waves-light"  wire:click="edit({{ $hall->id }})"><i class="feather icon-edit"></i></button>
                                            <button type="button" wire:click="deleteId({{ $hall->id }})" class="btn btn-icon btn-icon rounded-circle btn-danger mr-1 mb-1 waves-effect waves-light" data-toggle="modal" data-target="#exampleModal"><i class="feather icon-trash"></i></button>

                                        </div>
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
                                {{$halls->links()}}
                                <div>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>


            </section>
        </div>



    </div>



    <div class="modal" id="CreateHallModal"  wire:ignore.self >
        <div class="modal-dialog">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title"> اضافة قاعة  جديدة </h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <!-- Modal body -->
                <div class="modal-body">
                    <div class="alert alert-danger alert-dismissible fade show" role="alert" style="display: none;">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="form-group">
                        <x-form.input title="الاسم"  type="text" class="form-control" wire:model="name"  name="name"/>

                    </div>

                    <div class="form-group">
                        <x-form.input title="سعة القاعة "  type="number" class="form-control" wire:model="capacity"  name="name"/>
                    </div>
                    <div class="form-group">
                        <x-form.check title="نوع القاعة" checkbox-label="محوسبة" type="checkbox" class="custom-control-input"  id="customCheck3" wire:model="computerized"  name="computerized"/>
                    </div>

                </div>
                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="reset" class="btn btn-danger" data-dismiss="modal">الغاء</button>
                    <button type="button" class="btn btn-success" wire:click.prevent="store" id="SubmitCreateHallForm">حفظ</button>

                </div>
            </div>
        </div>
    </div>

    <div  class="modal fade" id="EditHallModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true"  wire:ignore.self>
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">تعديل الاصناف </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <x-form.input title="الاسم"  type="text" class="form-control" wire:model="name"  name="hall.name"/>

                        </div>

                        <div class="form-group">
                            <x-form.input title="سعة القاعة "  type="text" class="form-control" wire:model="capacity"  name="hall.name"/>
                        </div>
                        <div class="form-group">
                            <x-form.check title="نوع القاعة" checkbox-label="محوسبة" type="checkbox" class="custom-control-input"  id="customCheck3" wire:model="computerized"  name="computerized"/>
                        </div>


                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" wire:click.prevent="cancel" class="btn btn-danger" >الغاء</button>
                    <button type="button" wire:click.prevent="update" class="btn btn-success" >حفظ</button>
                </div>
            </div>
        </div>
    </div>




    <div wire:ignore.self class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">حذف القاعة </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true close-btn">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>هل انت متأكد؟؟</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary close-btn" data-dismiss="modal">الغاء</button>
                    <button type="button" wire:click.prevent="delete" class="btn btn-danger close-modal" data-dismiss="modal">نعم  </button>
                </div>
            </div>
        </div>
    </div>

</div>
