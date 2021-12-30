<div>
    {{-- If your happiness depends on money, you will never be happy with yourself. --}}
    <section class="users-edit">
        <div class="card">

            <div class="card-content">
                <div class="card-body">
                    <ul class="nav nav-tabs mb-3" role="tablist">
                        <li class="nav-item">

                            @if($trainer->id)
                                <span> تعديل المدرب </span>
                            @else
                                <span> اضافة مدرب جديد </span>
                            @endif

                        </li>

                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="account" aria-labelledby="account-tab" role="tabpanel">

                            <div class="row">

                                <div class="col-12 col-sm-8">

                                    <div class="form-group row">
                                        <div class="col-md-6">
                                            <x-form.input title="الاسم"  type="text" class="form-control" wire:model="trainer.name"  name="trainer.name"/>

                                        </div>
                                        <div class="col-md-6">

                                            <x-form.input title="الايميل"  type="text" class="form-control" wire:model="trainer.email"  name="trainer.email"/>

                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-6">
                                        <x-form.input title="رقم الجوال "  type="text" class="form-control" wire:model="trainer.mobile"  name="trainer.mobile"/>
                                    </div>
                                        <div class="col-md-6">
                                            <x-form.input title="الراتب"  type="text" class="form-control" wire:model="trainer.salary"  name="password"/>

                                </div>

                                </div>
                                    <div class="form-group row">
                                        <div class="col-md-6">
                                            <x-form.input title="التخصص "  type="text" class="form-control" wire:model="trainer.specialization"  name="trainer.specialization"/>
                                        </div>
                                        <div class="col-md-6">
                                        <label> الجنس </label>
                                            <select class="form-select form-control"   wire:model="trainer.gender" aria-label="Default select example" name="gender"
                                                    id="customerstatus">
                                                <option value="">اخترالجنس  </option>
                                                <option  value="M">ذكر </option>
                                                <option  value="F">  انثى  </option>
                                            </select>
                                            @error('trainer.gender') <span class="text-danger">{{ $message }}</span>@enderror

                                        </div>

                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-6">
                                            <x-form.input title="عنوان السكن "  type="text" class="form-control" wire:model="trainer.address"  name="address"/>
                                        </div>
                                        <div class="col-md-6">
                                            <x-form.input title="حساب الفيسبوك"  type="text" class="form-control" wire:model="trainer.facebook"  name="trainer.facebook"/>                                        </div>

                                    </div>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <h4 style="text-align: center">  الصورة</h4>
                                    <div class="upload-btn-wrapper mx-auto">
                                        <div class="upload-btn">
                                            @if($image)

                                                <img src="{{$image->temporaryUrl()}}"  style="border: 3px solid #D3D3D3; border-radius: 15px; width:100%; height: 100%  ">
                                            @else
                                                @if($trainer)
                                                    <img style="border: 3px solid #D3D3D3; border-radius: 15px; width: 100%; height: 100%" src="{{$trainer->image?asset('storage/images/'.$trainer->image):asset('storage/images/no-image.png')}}">                                                    {{--                            <img  src="{{$bill->image?asset('storage/images/'.$bill->image):'#'}}"  style="border: 3px solid #D3D3D3; border-radius: 15px; width:100% ; height: 100%  ">--}}
                                                @endif
                                            @endif

                                        </div>
                                        <input type="file" class="profile-img-input"  id="image"   wire:model="image" name="image" >

                                        @error('trainer.image') <span class="text-danger">{{ $message }}</span>@enderror
                                    </div>


                                </div>


                            </div>

                            <div class="col-12 d-flex flex-sm-row flex-column justify-content-end mt-1" >
                                <button type="button"  wire:click.prevent="save" class="btn btn-success glow mb-1 mb-sm-0 mr-0 mr-sm-1">حفظ
                                </button>

                                <a  href='{{route("trainer")}}'  class="btn btn-outline-danger  ">الغاء</a>

                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

