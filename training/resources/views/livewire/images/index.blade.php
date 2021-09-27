<div>
    <div class="content-body">
        <div class="content-header row">
            <div class="content-header-left col-md-9 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h2 class="content-header-title float-left mb-0"> معرض الصور </h2>
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('dashboard')}}">الرئيسية</a>
                                </li>
                                <li class="breadcrumb-item active">معرض الصور  </li>
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
                                                                        <label for="اسم معرض الصور"> اسم معرض الصور </label>
                                                                        <input type="text" wire:model.defer="search_array.name" id="name" class="form-control" placeholder="اسم معرض الصور" name="اسم معرض الصور">
                                                                    </div>
                                                                </div>
                                                                <div class="col-12 mt-4 text-right">
                                                                    <button wire:loading.attr="disabled" type="submit" class="btn btn-primary mr-1 mb-1 waves-effect waves-light search_btn" wire:click="search">
                                                                        بحث
                                                                        <span wire:loading="" wire:target="search">
                                                                        <i class="fa fa-spinner fa-spin " aria-hidden="true"></i>
                                                                        </span>
                                                                    </button>
                                                                    <button wire:loading.attr="disabled" type="reset" class="btn btn-outline-warning mr-1 mb-1 waves-effect waves-light" wire:click="resetSearch">
                                                                        افراغ الحقول
                                                                        <span wire:loading="" wire:target="resetSearch">
                                                                            <i class="fa fa-spinner fa-spin " aria-hidden="true"></i>
                                                                        </span>
                                                                    </button>
                                                                </div>
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
                </div>

                <div class="table-responsive">
                    <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                        <div class="top">

                            <div class="actions action-btns">

                                <div class="dt-buttons btn-group">
                                    <a href="{{route('imagesGallery.create')}}"  class="btn btn-outline-primary mr-1 mb-1 waves-effect waves-light"><i class="feather icon-plus-circle"></i>
                                        اضافة معرض صور جديد                                 </a>

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
                                    الرقم
                                </th>

                                <th rowspan="1" colspan="1">
                                    اسم معرض الصور
                                </th>

                                <th rowspan="1" colspan="1">
                                    اسم الكورس
                                </th>

                                <th rowspan="1" colspan="1" >
                                    الخيارات
                                </th>

                            </tr>
                            </thead>
                            <tbody>

                            @forelse($imagesGallery as $imageGallery)
                                <tr>
                                    <td >{{ $imageGallery->id }}</td>
                                    <td >{{ $imageGallery->name }}</td>
                                    <td >{{ $imageGallery->course_name }}</td>
                                    <td >
                                        <a title=" عرض صور  المعرض" type="button" class="btn btn-icon btn-icon rounded-circle btn-primary mr-1 mb-1 waves-effect waves-light" href="{{route('images.show',$imageGallery->id)}}"><i class="feather icon-eye"></i></a>
                                        <a title=" تعديل معرض الصور " type="button" class="btn btn-icon btn-icon rounded-circle btn-primary mr-1 mb-1 waves-effect waves-light" href="{{route('imagesGallery.edit',$imageGallery->id)}}"><i class="feather icon-edit"></i></a>
                                        <button title="حذف معرض الصور" type="button" class="btn btn-icon btn-icon rounded-circle btn-danger mr-1 mb-1 waves-effect waves-light" wire:click="delete({{ $imageGallery->id }})"><i class="feather icon-trash"></i></button>
                                    </td>
                                </tr>
                            @empty
                                <tr>

                                    <div  class=" col-10 alert alert-primary alert-dismissible fade show" role="alert">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
                                            <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                                        </svg>
                                        <h5 style="display: inline-block; margin-left: 1px">لا يوجد معرض للصور...</h5>
                                    </div>


                                </tr>

                            @endforelse
                            </tbody>
                        </table>

                        <div class="bottom">
                            <div class="actions"></div>
                            <div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_0_paginate">
                                <div>
                                    {{ $imagesGallery->links() }}
                                </div>

                            </div>
                        </div>

                    </div>
                </div>


            </section>
        </div>



    </div>
</div>





