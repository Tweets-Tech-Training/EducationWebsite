<div>
    @push('style')
        <style>
            .upload-btn-wrapper{
                width: 250px !important;
                height: 250px !important;
            }
        </style>
    @endpush
    <section class="users-edit">
        <div class="card">

            <div class="card-content">
                <div class="card-body">
                    <ul class="nav nav-tabs mb-3" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link d-flex align-items-center active" id="account-tab" data-toggle="tab" href="#account" aria-controls="account" role="tab" aria-selected="true">
                                <i class="feather icon-user mr-25"></i>
                                @if($isUpdate)
                                    <span class="d-none d-sm-block">تعديل القوائم </span>
                                @else
                                    <span class="d-none d-sm-block">اضافة قائمة جديدة </span>
                                @endif
                            </a>
                        </li>

                    </ul>

                    <div class="tab-content">
                        <div class="tab-pane active" id="account" aria-labelledby="account-tab" role="tabpanel">
                            <div class="row">
                                <div class="col-12 col-sm-8">
                                    <div class="form-group row">
                                        <div class="col-md-6">
                                            <span> اختر القسم الذي تريد التعديل عليه </span>
                                            <select wire:model="list.type" name="upload-way" class=" form-control" aria-label="Default select example">
                                                <option class="p-5" value="" > اختر القسم  </option>
                                                <option class=" p-5"  value="header" > Header </option>
                                                <option class="p-5" value="footer"> Footer </option>
                                            </select>
{{--                                        @error('setting.site_name') <span class="text-danger">{{ $message }}</span> @enderror--}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
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
                                                الصورة
                                            </th>

                                            <th rowspan="1" colspan="1" >
                                                الخيارات
                                            </th>

                                        </tr>
                                        </thead>
                                        <tbody>

{{--                                        @forelse($categories as $category)--}}
{{--                                            <tr>--}}
{{--                                                <td >{{ $category->id }}</td>--}}
{{--                                                <td >{{ $category->name }}</td>--}}
{{--                                                <td ><img src="{{asset('/storage/images/' . $category->image)}}"  width="50" height="50" class="rounded-circle"  /></td>--}}
{{--                                                <td >--}}
{{--                                                    <a type="button" class="btn btn-icon btn-icon rounded-circle btn-primary mr-1 mb-1 waves-effect waves-light" href="{{route('categories.edit',$category->id)}}"><i class="feather icon-edit"></i></a>--}}
{{--                                                    <button type="button" class="btn btn-icon btn-icon rounded-circle btn-danger mr-1 mb-1 waves-effect waves-light" wire:click="delete({{ $category->id }})"><i class="feather icon-trash"></i></button>--}}
{{--                                                </td>--}}
{{--                                            </tr>--}}
{{--                                        @empty--}}
{{--                                            <tr>--}}

{{--                                                <div  class=" col-10 alert alert-primary alert-dismissible fade show" role="alert">--}}
{{--                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">--}}
{{--                                                        <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>--}}
{{--                                                    </svg>--}}
{{--                                                    <h5 style="display: inline-block; margin-left: 1px">لا يوجد أصناف...</h5>--}}
{{--                                                </div>--}}


{{--                                            </tr>--}}

{{--                                        @endforelse--}}

                                        </tbody>
                                    </table>

                                    <div class="bottom">
                                        <div class="actions"></div>
                                        <div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_0_paginate">
                                            <div>
                                                {{--  ****  pagination  *** --}}
{{--                                                {{ $categories->links() }}--}}
                                            </div>

                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="col-12 d-flex flex-sm-row flex-column justify-content-end mt-1" >
                                @if($isUpdate)
                                    <button wire:loading.attr="disabled" wire:click="save"     type="submit" class="btn btn-primary glow mb-1 mb-sm-0 mr-0 mr-sm-1">
                                        تعديل
                                        <div wire:loading  wire:target="save"  style="margin-top: 10px;">
                                            <div  class="  spinner-border spinner-border-sm text-gray-200" role="status">
                                                <span class="visually-hidden "> </span>
                                            </div>
                                        </div>
                                    </button>
                                @else
                                    <button wire:click="save"  wire:loading.attr="disabled" wire:target="image"  type="submit" class="btn btn-primary glow mb-1 mb-sm-0 mr-0 mr-sm-1">حفظ

                                        <div wire:loading  wire:target="save"  style="margin-top: 10px;">
                                            <div  class="  spinner-border spinner-border-sm text-gray-200" role="status">
                                                <span class="visually-hidden "> </span>
                                            </div>
                                        </div>
                                    </button>
                                @endif
                                <a href="{{route('settings.index')}}"  class="btn btn-outline-danger">الغاء</a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

</div>




