<div xmlns="http://www.w3.org/1999/html">
    <div class="content-body">

        <div class="content-header row">
            <div class="content-header-left col-md-9 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h2 class="content-header-title float-left mb-0">الرسائل البريدية </h2>
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="">الرئيسية</a>
                                </li>
                                <li class="breadcrumb-item active">الرسائل البريدية  </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="content-body">
            <section id="data-thumb-view" class="data-thumb-view-header">
              <form>
                <div class="table-responsive">
                    <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                        <div class="top">
                            <div class="actions action-btns"><div class="dt-buttons btn-group">
{{--                               <button type="button" wire:click="create"  tabindex="0" aria-controls="data_table"  class="btn btn-outline-primary mr-1 mb-1 waves-effect waves-light" ><i class="feather icon-plus-circle"></i></button>--}}
                                    <button type="button"	wire:click="redirectToMyMail" class="btn btn-outline-primary mr-1 mb-1 waves-effect waves-light"><i class="feather icon-plus-circle"></i>
                                        اضافة رسالة  جديدة                                 </button>
                                </div></div>
                            <div class="action-filters">

                                <div class="dataTables_length" id="data_table_length">
                                    <label>
                                        <select name="data_table_length" aria-controls="data_table" class="custom-select custom-select-sm form-control form-control-sm">
                                            <option value="4">4</option><option value="10">10</option><option value="15">15</option><option value="20">20</option></select>
                                    </label>
                                </div>
                                <div id="data_table_filter" class="dataTables_filter"><label>
                                        <x-search wire:model="search"/>
                                    </label></div></div>
                        </div>
                        <div class="clear"></div>
                        <table class="table data-thumb-view dataTable no-footer dt-checkboxes-select" id="DataTables_Table_0" role="grid">
                            <thead>
                            <tr role="row">

{{--                                <th rowspan="1" colspan="1">--}}
                                <th class="sorting_disabled dt-checkboxes-cell dt-checkboxes-select-all" rowspan="1" colspan="1" style="width: 25px;" data-col="1" aria-label=""><div class="form-check">
                                        <input class="form-check-input check-all-js"  onclick="toggle(this);"  type="checkbox" value="all" id="checkboxSelectAll">
                                        <label class="form-check-label" for="checkboxSelectAll"></label></div></th>
{{--                                     <input type="checkbox"  onclick="checkedAll(this)" name="all" id="all" >--}}

                                <th rowspan="1" colspan="1">
                                    الايميل
                                </th>
                                <th rowspan="1" colspan="1">
                                    الخيارات
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse ($emails as $email)
                                <tr>
                                    <td class=" dt-checkboxes-cell"><div class="form-check"> <input class="form-check-input dt-checkboxes single-check-js" name="checked" value="{{ $email->id }}"   wire:model="gmail.{{ $email->id }}" type="checkbox" ><label class="form-check-label" for="checkbox100"></label></div></td>
{{--                                  <td>--}}
{{--                                      <input type="checkbox" value="{{ $email->id }}" wire:model="gmail.{{ $email->id }}" class="form-checkbox h-6 w-6">--}}
{{--                                  </td>--}}
                                    <td>{{$email->gmail}}</td>

                                    <td>
                                        <div class="inline-block whitespace-no-wrap">
{{--                                            <button type="button" wire:click="create"  tabindex="0" aria-controls="data_table"  class="btn btn-outline-primary mr-1 mb-1 waves-effect waves-light" ><i class="feather icon-plus-circle"></i></button>--}}
                                            <button type="button" wire:click="deleteId({{ $email->id }})" class="btn btn-icon btn-icon rounded-circle btn-danger mr-1 mb-1 waves-effect waves-light" data-toggle="modal" data-target="#exampleModal"><i class="feather icon-trash"></i></button>
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
                                {{$emails->links()}}
                                <div>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>

              </form>
            </section>
        </div>

    </div>

{{--    <div class="modal" id="CreateHallModal"  wire:ignore.self >--}}
{{--        <div class="modal-dialog">--}}
{{--            <div class="modal-content">--}}
{{--                <!-- Modal Header -->--}}
{{--                <div class="modal-header">--}}
{{--                    <h4 class="modal-title"> اضافة قاعة  جديدة </h4>--}}
{{--                    <button type="button" class="close" data-dismiss="modal">&times;</button>--}}
{{--                </div>--}}
{{--                <!-- Modal body -->--}}
{{--                <div class="modal-body">--}}
{{--                    <div class="alert alert-danger alert-dismissible fade show" role="alert" style="display: none;">--}}
{{--                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">--}}
{{--                            <span aria-hidden="true">&times;</span>--}}
{{--                        </button>--}}
{{--                    </div>--}}

{{--                    <div class="form-group">--}}
{{--                        <x-form.input title="العنوان"  type="text" class="form-control" wire:model="title"  name="title"/>--}}

{{--                    </div>--}}

{{--                    <div class="form-group">--}}
{{--                        <textarea wire:model="message"  type="text" class="form-control" ></textarea>--}}
{{--                        @error('message') <span class="text-danger">{{ $message }}</span> @enderror--}}

{{--                    </div>--}}

{{--                </div>--}}
{{--                <!-- Modal footer -->--}}
{{--                <div class="modal-footer">--}}
{{--                    <button type="reset" class="btn btn-danger" data-dismiss="modal">الغاء</button>--}}
{{--                    <button type="button" class="btn btn-success" wire:click.prevent="store" id="SubmitCreateHallForm">حفظ</button>--}}

{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
    <div wire:ignore.self class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">حذف الايميل  </h5>
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
    @push('script')
        <script>
        // function checkedAll(allCheckbox){
        //         var checkedIds =[];
        //         var allCheckboxes = document.getElementsByTagName('input');
        //             for (var i = 0; i < allCheckboxes.length; i++){
        //             var checked = allCheckboxes[i];
        //             if (checked.id != 'checkboxSelectAll'){
        //                 checked.checked = allCheckbox.checked;
        //                 checkedIds.push(checked.value);
        //                 // @this.set('course.trainer_id', checked);
        //             }
        //         }
        //             console.log( checkedIds);
        //     }

        // var checkboxes = document.getElementsByTagName('input');
        // var checkedIds =[];
        // function checkedAll(myCheckbox){
        //     if(myCheckbox.checked == true){
        //         for (var i = 0; i < checkboxes.length; i++){
        //             var checked = checkboxes[i];
        //             checked.checked=true;
        //             checkedIds.push(checked.value);
        //         }
        //     }
        //     else{
        //         for (var i = 0; i < checkboxes.length; i++){
        //             var checked = checkboxes[i];
        //             checked.checked=false;
        //         }
        //     }
        // }




        //
        // document.getElementById('checkboxSelectAll').onclick = function () {
        //     var checkboxes=document.querySelectorAll('input[type="checkbox"]');
        //     console.log( checkboxes);
        //     for( var checkbox of checkboxes){
        //         checkbox.checked=this.checked;
        //     }
        //
        // }
        var checkedIds =[];
        function toggle(source) {
        var checkboxes = document.querySelectorAll('input[type="checkbox"]');
        for (var i = 0; i < checkboxes.length; i++) {
            if (checkboxes[i] != source)
                checkboxes[i].checked = source.checked;
        }
        }

        $('#checkboxSelectAll').click(function(event) {
            if(this.checked) {
                // Iterate each checkbox
                $(':checkbox').each(function() {
                    this.checked = true;
                    checkedIds.push(checked.value);
                });
            } else {
                $(':checkbox').each(function() {
                    this.checked = false;
                });
            }
        });


        </script>
        @endpush
</div>
