<div class="content-body">

        <div class="content-header row">
            <div class="content-header-left col-md-9 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h2 class="content-header-title float-left mb-0">المحافظات</h2>
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="https://zara.com.ps/app/dashboard">الرئيسية</a>
                                </li>
                                <li class="breadcrumb-item active">المحافظات</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="content-body">
            <section id="data-thumb-view" class="data-thumb-view-header">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card collapse-icon accordion-icon-rotate">
                            <div class="card-body py-1">
                                <div class="default-collapse collapse-bordered">
                                    <div class="card collapse-header">
                                        <div id="headingCollapse1" class="card-header" data-toggle="collapse" role="button" data-target="#collapse1" aria-expanded="false" aria-controls="collapse1">
                                            <h4 class="card-title">بحث</h4>
                                        </div>
                                        <div id="collapse1" role="tabpanel" aria-labelledby="headingCollapse1" class="collapse">
                                            <div class="card-content">
                                                <div class="card-body">
                                                    <form class="form" wire:submit.prevent="search">
                                                        <div class="form-body">
                                                            <div class="row">
                                                                <div class="col-md-4 col-12">
                                                                    <div class="form-group">
                                                                        <label for="اسم المحافظة">اسم المحافظة</label>
                                                                        <input type="text" wire:model.defer="search_array.name" id="name" class="form-control" placeholder="اسم المحافظة" name="اسم المحافظة">
                                                                    </div>
                                                                </div>
                                                                <div class="col-12 mt-4 text-right">
                                                                    <button wire:loading.attr="disabled" type="submit" class="btn btn-primary mr-1 mb-1 waves-effect waves-light search_btn" wire:click="search">
                                                                        بحث
                                                                        <span wire:loading="" wire:target="search">
        <i class="fa fa-spinner fa-spin " aria-hidden="true"></i>
    </span>
                                                                    </button>                                                    <button wire:loading.attr="disabled" type="reset" class="btn btn-outline-warning mr-1 mb-1 waves-effect waves-light" wire:click="resetSearch">
                                                                        افراغ الحقول
                                                                        <span wire:loading="" wire:target="resetSearch">
        <i class="fa fa-spinner fa-spin " aria-hidden="true"></i>
    </span>
                                                                    </button>                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>            <div class="table-responsive">
                    <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                        <div class="top">
                            <div class="actions action-btns">

                                <div class="dt-buttons btn-group">
                                    <a href="https://zara.com.ps/app/dashboard/governorate/create" class="btn btn-outline-primary mr-1 mb-1 waves-effect waves-light"><i class="feather icon-plus-circle"></i>
                                        اضافة محافظة جديدة                                 </a>

                                </div>
                            </div>
                            <div class="action-filters">
                                <div class="dataTables_length" id="DataTables_Table_0_length">
                                    <label>
                                        <select wire:model="page_length" name="DataTables_Table_0_length" aria-controls="DataTables_Table_0" class="custom-select custom-select-sm form-control form-control-sm">
                                            <option value="10">10</option>
                                            <option value="20">20</option>
                                            <option value="50">50</option>
                                            <option value="100">100</option>
                                        </select>                                </label>
                                </div>
                            </div>
                        </div>
                        <div class="clear"></div>
                        <table class="table data-thumb-view dataTable no-footer dt-checkboxes-select" id="DataTables_Table_0" role="grid">
                            <thead>
                            <tr role="row">

                                <th rowspan="1" colspan="1">
                                    اسم المحافظة
                                </th>

                                <th rowspan="1" colspan="1">
                                    فعال/غير فعال
                                </th>

                                <th rowspan="1" colspan="1">
                                    الخيارات
                                </th>

                            </tr>
                            </thead>                        <tbody>
                            <tr role="row" class="even">

                                <td class="product-img ">
                                    غزة
                                </td>

                                <td class="product-img ">
                                    مفعل
                                </td>

                                <td class="product-action">
                                    <button type="button" class="btn btn-icon btn-icon rounded-circle btn-primary mr-1 mb-1 waves-effect waves-light" wire:click="edit(5)"><i class="feather icon-edit"></i></button>
                                    <button type="button" class="btn btn-icon btn-icon rounded-circle btn-danger mr-1 mb-1 waves-effect waves-light" wire:click="delete(5)"><i class="feather icon-trash"></i></button>
                                </td>
                            </tr>

                            <tr role="row" class="odd">

                                <td class="product-img ">
                                    الضفة الغربية
                                </td>

                                <td class="product-img ">
                                    مفعل
                                </td>

                                <td class="product-action">
                                    <button type="button" class="btn btn-icon btn-icon rounded-circle btn-primary mr-1 mb-1 waves-effect waves-light" wire:click="edit(3)"><i class="feather icon-edit"></i></button>
                                    <button type="button" class="btn btn-icon btn-icon rounded-circle btn-danger mr-1 mb-1 waves-effect waves-light" wire:click="delete(3)"><i class="feather icon-trash"></i></button>
                                </td>
                            </tr>

                            <tr role="row" class="even">

                                <td class="product-img ">
                                    غزة
                                </td>

                                <td class="product-img ">
                                    مفعل
                                </td>

                                <td class="product-action">
                                    <button type="button" class="btn btn-icon btn-icon rounded-circle btn-primary mr-1 mb-1 waves-effect waves-light" wire:click="edit(2)"><i class="feather icon-edit"></i></button>
                                    <button type="button" class="btn btn-icon btn-icon rounded-circle btn-danger mr-1 mb-1 waves-effect waves-light" wire:click="delete(2)"><i class="feather icon-trash"></i></button>
                                </td>
                            </tr>

                            </tbody>
                        </table>

                        <div class="bottom">
                            <div class="actions"></div>
                            <div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_0_paginate">
                                <div>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>


            </section>
        </div>



</div>
