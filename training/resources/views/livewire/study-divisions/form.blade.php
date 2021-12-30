<div>
    @push('style')

        <style>

            /*.select2-container--default .select2-selection--single {*/
            /*    border: 1px solid #d9d9d9;*/
            /*}*/
            .buttonArray{
                margin-top: 21px;
                height: 37px;
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
                                <div class="col-12 col-sm-12">
                                    <div class="form-group row">
                                        <div class="col-md-3">
                                            <x-form.input title="الاسم"  type="text" class="form-control" wire:model="studyDivision.name"  name="studyDivision.name"/>
                                        </div>
                                        <div class="col-md-3">
                                            <x-form.input title="عدد الطلاب"  type="text" class="form-control" wire:model="studyDivision.students_number"  name="studyDivision.students_number"/>
                                        </div>
                                        <div  class="col-md-3">
                                            <span>  اختر الدورة التابعة لها </span>
                                            <div wire:ignore>
                                                <select  name="course_id" id="select2-dropdown" wire:model="studyDivision.course_id" class="form-control" >
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
                                    </div>

                                    <div class="form-group row">
                                        @foreach($appointment as $index => $object)
                                        <div class="col-md-3">
                                            <label> اليوم  </label>
                                            <input type="date"    wire:model="appointment.{{$index}}.day" name="day"  class="form-control" >
                                        </div>
                                        <div wire:ignore class="col-md-3">

                                            <x-form.pickerLimitTime title="وقت البداية"  type="text"  value="{{$start_time}}" name="start_time" id="start_time{{$index}}" class="form-control " placeholder="9:00 AM"
                                                                    aria-haspopup="true" aria-readonly="false" aria-owns="pt-min-max_root" />
                                        </div>
                                        <div wire:ignore class="col-md-3">
                                            <x-form.pickerLimitTime title="وقت النهاية"  type="text"  name="end_time"  class="form-control" id="end_time{{$index}}"  value="{{$end_time}}" placeholder="11:00 AM"
                                                                    aria-haspopup="true" aria-readonly="false" aria-owns="pt-min-max_root"/>
                                        </div>
                                            @if($index==0)
                                                <div class="form-group col-md-2 buttonArray">
                                                    <button  wire:click="addRow" class="btn btn-icon btn-icon  btn-primary mr-1 mb-1 waves-effect waves-light"><i class="feather icon-plus-circle"></i>
                                                        {{--                                        <button   wire:click="addRow" class="btn btn-outline-primary mr-1  mb-1 waves-effect waves-light"><i class="feather icon-plus-circle"></i>--}}

                                                    </button>

                                                </div>
                                            @endif
                                            @if($index > 0)
                                                <div class="form-group col-md-2 buttonArray">
                                                    <div wire:ignore.self >
                                                        <button  wire:click="deleteRaw" class="btn btn-icon btn-icon  btn-danger mr-1 mb-1 waves-effect waves-light">  <i class="feather icon-trash"></i>

                                                        </button>
                                                    </div>
                                                </div>
                                            @endif
                                        @endforeach
                                    </div>

                                    <div class="form-group row">
                                        <div  class="col-md-3">
                                            <span>  اختر القاعة المخصصة لها </span>
                                            <div>
                                                <select wire:model="studyDivision.hall_id" name="hall_id" id="select2-dropdown" class="form-control"  data-placeholder="Select Category">
                                                    <option value=" ">اختر القاعة   </option>

                                                    @foreach($halls as $hall)
                                                        <option class="p-5" name="hall_id" value="{{$hall->id}}">  {{$hall->name}}  </option>
                                                    @endforeach

                                                </select>
                                            </div>
                                            @error('studyDivision.hall_id') <span class="text-danger">{{ $message }}</span> @enderror
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
                                            <div  class="spinner-border spinner-border-sm text-gray-200" role="status">
                                                <span class="visually-hidden "> </span>
                                            </div>
                                        </div>
                                    </button>
                                @endif

                                <a href="{{route('studyDivision.index')}}"  class="btn btn-outline-danger">الغاء</a>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    @push('script')
        <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js" integrity="sha512-2ImtlRlf2VVmiGZsjm9bEyhjGW4dU7B6TNwh/hx/iSByxNENtj3WVE6o/9Lj4TJeVXPi4bnOIMXFIJJAeufa0A==" crossorigin="anonymous" referrerpolicy="no-referrer" ></script>
        {{--               <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>--}}
        <script>
            $(document).ready(function () {
                $('#select2-dropdown').select2();
                $('#select2-dropdown').on('change', function (e) {
                    var data = $('#select2-dropdown').select2("val");
                    console.log(data)
                          @this.set('studyDivision.course_id', data);
                });
            });
            $(document).ready(function () {
                $('.day').select2();
                $('.day').on('change', function (e) {
                    var data = $('.day').select2("val");
                    console.log(data);
                @this.set('appointment.{{$index}}.day', e.target.value);

                });
            });
        </script>
        <script>
            // var basicPickr = $('.flatpickr-basic'),
            //     timePickr = $('.flatpickr-time'),
            //     dateTimePickr = $('.flatpickr-date-time'),
            //     multiPickr = $('.flatpickr-multiple'),
            //     rangePickr = $('.flatpickr-range'),
            //     humanFriendlyPickr = $('.flatpickr-human-friendly'),
            //     disabledRangePickr = $('.flatpickr-disabled-range'),
            //     inlineRangePickr = $('.flatpickr-inline');



            // Time
            // if (timePickr.length) {
            //     timePickr.flatpickr({
            //         enableTime: true,
            //         noCalendar: true
            //     });
            // }
            // $('#fp-time').pickatime();
            // if (dateTimePickr.length) {
            //     dateTimePickr.flatpickr({
            //         enableTime: true
            //     });
            // }
            // Min - Max Time to select
            $('.pickatime-min-max').pickatime({
                min: [9,0],
                max: [19,0]
            });
        </script>
    @endpush
</div>




