<div>
    @push('style')

        <style>
            .upload-btn-wrapper{
                width: 250px !important;
                height: 250px !important;
            }

            .ck-editor__editable_inline {
                min-height: 200px;
            }
            .ck-editor__editable{
                text-align: right !important;
            }

            .select2-container--default .select2-selection--single {
                border: 1px solid #d9d9d9;
            }
            #course_image{
                border: 3px solid #D3D3D3;
                border-radius: 15px;
                width: 100%;
                height: 100%;
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
                                @if($studyDivision->id)
                                    <span class="d-none d-sm-block">تعديل الشعبة </span>
                                @else
                                    <span class="d-none d-sm-block">اضافة شعبة جديدة</span>
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
                                            <x-form.input title="الاسم"  type="text" class="form-control" wire:model="studyDivision.name"  name="studyDivision.name"/>
                                        </div>
                                        <div class="col-md-6">
                                            <x-form.input title="عدد الطلاب"  type="text" class="form-control" wire:model="studyDivision.students_number"  name="studyDivision.students_number"/>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div  class="col-md-6">
                                            <span>  اختر الدورة التابعة لها </span>
                                            <div wire:ignore>
                                                <select wire:model="studyDivision.course_id" name="course_id" id="select2-dropdown" class="form-control"  data-placeholder="Select Category">
                                                    <option value=" ">اختر الدورة   </option>
                                                    @if($courses->count())
                                                        @foreach($courses as $course)
                                                            <option class="p-5" name="course_id" value="{{$course->id}}">  {{$course->name}}  </option>
                                                        @endforeach
                                                    @endif
                                                </select>
                                            </div>
                                            @error('studyDivision.course_id') <span class="text-danger">{{ $message }}</span> @enderror
                                        </div>

                                        <div  class="col-md-6">
                                            <span>  اختر القاعة المخصصة لها </span>
                                            <div wire:ignore>
                                                <select wire:model="studyDivision.hall_id" name="hall_id" id="select2-dropdown" class="form-control"  data-placeholder="Select Category">
                                                    <option value=" ">اختر القاعة   </option>
                                                    @if($halls->count())
                                                        @foreach($halls as $hall)
                                                            <option class="p-5" name="hall_id" value="{{$hall->id}}">  {{$hall->name}}  </option>
                                                        @endforeach
                                                    @endif
                                                </select>
                                            </div>
                                            @error('studyDivision.hall_id') <span class="text-danger">{{ $message }}</span> @enderror
                                        </div>

                                    </div>

                                    <div class="form-group row">
                                        <div class="col-md-6">
                                            <label>وقت البداية</label>
                                            <input type="text" id="fp-time" class="form-control flatpickr-time text-left" placeholder="HH:MM" />
{{--                                            <x-form.input title="وقت البداية"  type="text" class="form-control" wire:model="studyDivision.start_time"  name="studyDivision.start_time" placeholder="وقت بداية الشعبة"/>--}}
                                        </div>
                                        <div class="col-md-6">
                                            <x-form.input title="وقت النهاية"  type="text" class="form-control" wire:model="studyDivision.end_time"  name="studyDivision.end_time" placeholder="وقت انتهاء الشعبة "/>
                                        </div>

                                    </div>

                                </div>


                            </div>

                            <div class="col-12 d-flex flex-sm-row flex-column justify-content-end mt-1" >
                                @if($studyDivision->id)
                                    <button wire:click="save" wire:loading.attr="disabled" wire:target="image" type="submit" class="btn btn-primary glow mb-1 mb-sm-0 mr-0 mr-sm-1">
                                        تعديل
                                        <div wire:loading  wire:target="save"  style="margin-top: 10px;">
                                            <div  class="  spinner-border spinner-border-sm text-gray-200" role="status">
                                                <span class="visually-hidden "> </span>
                                            </div>
                                        </div>
                                    </button>
                                @else
                                    <button wire:click="save" wire:loading.attr="disabled" type="submit" class="btn btn-primary glow mb-1 mb-sm-0 mr-0 mr-sm-1">حفظ
                                        <div wire:loading  wire:target="save"  style="margin-top: 10px;">
                                            <div  class="  spinner-border spinner-border-sm text-gray-200" role="status">
                                                <span class="visually-hidden "> </span>
                                            </div>
                                        </div>
                                    </button>
                                @endif

                                <a href="{{route('studyDivision.index')}}"  class="btn btn-outline-danger">الغاء</a>
                            </div>
                        {{--                            </form>--}}
                        <!-- users edit account form ends -->
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    @push('script')
        <script src="https://cdn.ckeditor.com/ckeditor5/28.0.0/classic/ckeditor.js"></script>
        {{--    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>--}}
        <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js" integrity="sha512-2ImtlRlf2VVmiGZsjm9bEyhjGW4dU7B6TNwh/hx/iSByxNENtj3WVE6o/9Lj4TJeVXPi4bnOIMXFIJJAeufa0A==" crossorigin="anonymous" referrerpolicy="no-referrer" ></script>
        {{--               <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>--}}
        <script>
            ClassicEditor
                .create( document.querySelector( '#detailsEditor' ) )
                .then( newEditor => {
                    var details= newEditor.getData();
                    newEditor.model.document.on('change:data', () => {
                        // $dispatch('detailsEditor', newEditor.getData())
                    @this.set('course.details', newEditor.getData());
                    })

                } )
                .catch( error => {
                    console.error( error );
                } );
        </script>
        <script>
            $(document).ready(function () {
                $('#select2-dropdown').select2();
                $('#select2-dropdown').on('change', function (e) {
                    var data = $('#select2-dropdown').select2("val");
                    console.log(data)
                @this.set('course.category_id', data);
                });
            });
        </script>
        <script>
            var basicPickr = $('.flatpickr-basic'),
                timePickr = $('.flatpickr-time'),
                dateTimePickr = $('.flatpickr-date-time'),
                multiPickr = $('.flatpickr-multiple'),
                rangePickr = $('.flatpickr-range'),
                humanFriendlyPickr = $('.flatpickr-human-friendly'),
                disabledRangePickr = $('.flatpickr-disabled-range'),
                inlineRangePickr = $('.flatpickr-inline');

            // Default
            if (basicPickr.length) {
                basicPickr.flatpickr();
            }

            // Time
            if (timePickr.length) {
                timePickr.flatpickr({
                    enableTime: true,
                    noCalendar: true
                });
            }
            $('#fp-time').pickatime();
        </script>
    @endpush
</div>




