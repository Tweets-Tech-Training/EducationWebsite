


<div>
    <div class="content-body">

        <div class="content-header row">
            <div class="content-header-left col-md-9 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h2 class="content-header-title float-left mb-0">اتصل بنا</h2>
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="">الرئيسية</a>
                                </li>
                                <li class="breadcrumb-item active">اتصل بنا </li>
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
                                </div></div>
                            <div class="action-filters">
                                <div class="dataTables_length" id="data_table_length"><label>
                                        <select name="data_table_length"  wire:model="paginateNum" aria-controls="data_table" class="custom-select custom-select-sm form-control form-control-sm">
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
                                    رقم الجوال
                                </th>
                                <th rowspan="1" colspan="1">

                                    الرسالة     </th>
                                <th rowspan="1" colspan="1">
                                    الخيارات
                                </th>

                            </tr>
                            </thead>
                            <tbody>
                            @forelse ($contacts as $contact)
                                <tr>
                                    <td>{{$contact->id}}</td>
                                    <td>{{$contact->name}}</td>
                                    <td>{{$contact->mobile}}</td>
                                    <td>{{$contact->message}}</td>
                                    <td>
                                        <div class="inline-block whitespace-no-wrap">
                                            <button type="button" wire:click="deleteId({{ $contact->id }})" class="btn btn-icon btn-icon rounded-circle btn-danger mr-1 mb-1 waves-effect waves-light" data-toggle="modal" data-target="#exampleModal"><i class="feather icon-trash"></i></button>

                                        </div>
                                    </td>

                                </tr>

                            @empty
                                <div class='alert alert-info mt-4'>لا يوجد عناصر لعرضها </div>
                            @endforelse
                            </tbody>
                        </table>

                        <div class="bottom">
                            <div class="actions"></div>
                            <div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_0_paginate">
                                                                {{$contacts->links()}}
                                <div>
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
                    <h5 class="modal-title" id="exampleModalLabel">Delete Confirm</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true close-btn">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>هل انت متأكد؟؟</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary close-btn" data-dismiss="modal">الغاء</button>
                    <button type="button" wire:click.prevent="delete" class="btn btn-danger close-modal" data-dismiss="modal">نعم !! احذف </button>
                </div>
            </div>
        </div>
    </div>

</div>
