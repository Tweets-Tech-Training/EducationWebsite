<div>
    {{-- If your happiness depends on money, you will never be happy with yourself. --}}
    <section class="users-edit">
        <div class="card">

            <div class="card-content">
                <div class="card-body">
                    <ul class="nav nav-tabs mb-3" role="tablist">
                        <li class="nav-item">
                            @if($student->id)
                                <span> تعديل الطالب </span>
                                @endif
                        </li>

                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="account" aria-labelledby="account-tab" role="tabpanel">

                            <div class="row">

                                <div class="col-12 col-sm-8">

                                    <div class="form-group row">
                                        <div class="col-md-6">
                                            <x-form.input title="الاسم"  type="text" class="form-control" wire:model="student.name"  name="name"/>

                                        </div>
                                        <div class="col-md-6">

                                            <x-form.input title="الايميل"  type="text" class="form-control" wire:model="student.email"  name="email"/>

                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-6">
                                            <x-form.input title="رقم الجوال "  type="text" class="form-control" wire:model="student.mobile"  name="mobile"/>
                                        </div>
                                        <div class="col-md-6">
                                        <x-form.input title="عنوان السكن "  type="text" class="form-control" wire:model="student.address"  name="address"/>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-6">
                                            <label> الجنس </label>
                                            <select class="form-select form-control"   wire:model="student.gender" aria-label="Default select example" name="gender"
                                                    id="customerstatus">
                                                <option value="">اخترالجنس  </option>
                                                <option  value="M">ذكر </option>
                                                <option  value="F">  انثى  </option>
                                            </select>
                                            @error('student.gender') <span class="text-danger">{{ $message }}</span>@enderror

                                        </div>
                                        <div class="col-md-6">
                                            <label> حالة الطالب  </label>
                                            <select class="form-select form-control"   wire:model="student.status" aria-label="Default select example" name="gender"
                                                    id="customerstatus">
                                                <option  value="under-consideration">قيد الدراسة  </option>
                                                <option  value="studying">  قيد العمل   </option>
                                                <option  value="end-course"> انتهى الكورس    </option>
                                            </select>
                                            @error('student.status') <span class="text-danger">{{ $message }}</span>@enderror

                                        </div>

                                    </div>

                                </div>
                                <div class="col-12 col-sm-4">

                                </div>


                            </div>

                            <div class="col-12 d-flex flex-sm-row flex-column justify-content-end mt-1" >
                                <button type="button"  wire:click.prevent="save" class="btn btn-success glow mb-1 mb-sm-0 mr-0 mr-sm-1">حفظ
                                </button>

                                <a  href='{{route("student")}}'  class="btn btn-outline-danger  ">الغاء</a>

                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

@push('script')
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>

    <script>

    $(document).ready(function() {
            $('#course').select2();
            $('#course').on('change', function (e) {
                var data = $('#course').select2("val");
                     @this.set('course', e.target.value);
            });
        });
    </script>
@endpush
