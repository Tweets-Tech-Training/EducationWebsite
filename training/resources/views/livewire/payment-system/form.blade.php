<div>
    @push('style')

        <style>
            .upload-btn-wrapper{
                width: 250px !important;
                height: 250px !important;
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
                                {{--                                @if($payment>id)--}}
                                {{--                                    <span class="d-none d-sm-block">تعديل الدفعة المالية  </span>--}}
                                {{--                                @else--}}
                                <span class="d-none d-sm-block">اضافة سجل مالي جديد</span>
                                {{--                                @endif--}}

                            </a>
                        </li>

                    </ul>

                    <div class="tab-content">
                        <div class="tab-pane active" id="account" aria-labelledby="account-tab" role="tabpanel">
                            <div class="row">
                                <div class="col-12 col-sm-8">
                                    <div class="form-group row">
                                        <div  class="col-md-6">
                                            <span> اسم الطالب </span>
                                            <div wire:ignore >
                                                <select wire:model="payment.student_id" name="student_id" id="student_id" class="form-control"  >
                                                    <option value=" " >اختر الطالب </option>
                                                    @if($students->count())
                                                        @foreach($students as $student)
                                                            <option class="p-5" name="student_id" value="{{$student->id}}">  {{$student->name}}  </option>
                                                        @endforeach
                                                    @endif
                                                </select>
                                            </div>
                                            @error('payment.student_id') <span class="text-danger">{{ $message }}</span> @enderror
                                        </div>
                                        <div  class="col-md-6">
                                            <span>  اختر الدورة   </span>
                                            <div wire:ignore>
                                                <select  name="course_id" id="select2-dropdown" wire:model="payment.course_id"  class="form-control" >
                                                    <option value=" ">اختر الدورة   </option>
                                                    @if($courses->count())
                                                        @foreach($courses as $course)
                                                            <option class="p-5" name="course_id" value="{{$course->id}}">  {{$course->name}}  </option>
                                                        @endforeach
                                                    @endif
                                                </select>
                                            </div>
                                            @error('payment.course_id') <span class="text-danger">{{ $message }}</span> @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div  class="col-md-6">
                                            <x-form.input title=" قيمة الدفعة الحالية"  type="text" class="form-control" wire:model="payment.payment_amount"  name="payment.payment_amount" />
                                            @error('payment.payment_amount') <span class="text-danger">{{ $message }}</span> @enderror
                                        </div>

                                        <div class="col-md-6">
                                            <?php
                                                if($payment->course_id ){
                                                    $course= \App\Models\Course::find($payment->course_id);
                                                    $price = $course->price;
                                                    $remaining_amount=$price - (float)$payment->payment_amount ;
                                                  }
                                                ?>
                                            <label> المبلغ المتبقي </label>
                                            <input type="text"  class="form-control" name="notes" id="notes " value="{{$remaining_amount}}">
                                        </div>

                                    </div>
                                    <div class="form-group row">

                                        <label for="name">ملاحظات :</label>
                                        <textarea wire:model="payment.notes" class="form-control" ></textarea>
                                        @error('payment.notes') <span class="text-danger">{{ $message }}</span> @enderror

                                    </div>

                                </div>


                            </div>

                            <div class="col-12 d-flex flex-sm-row flex-column justify-content-end mt-1" >
                                <button type="button"  wire:click.prevent="save" class="btn btn-success glow mb-1 mb-sm-0 mr-0 mr-sm-1">حفظ
                                </button>
                                <a href="{{route('paymentSystem.index')}}"  class="btn btn-outline-danger">الغاء</a>
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
        <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js" integrity="sha512-2ImtlRlf2VVmiGZsjm9bEyhjGW4dU7B6TNwh/hx/iSByxNENtj3WVE6o/9Lj4TJeVXPi4bnOIMXFIJJAeufa0A==" crossorigin="anonymous" referrerpolicy="no-referrer" ></script>
        {{--               <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>--}}

        <script>
            $(document).ready(function () {
                $('#select2-dropdown').select2();
                $('#select2-dropdown').on('change', function (e) {
                    var data = $('#select2-dropdown').select2("val");
                    console.log(data)
                @this.set('payment.course_id', data);
                });
            });

            $(document).ready(function () {
                $('#student_id').select2();
                $('#student_id').on('change', function (e) {
                    var data = $('#student_id').select2("val");
                    console.log(data)
                @this.set('payment.student_id', data);
                });
            });
        </script>
    @endpush
</div>




