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
                                        <div class="col-md-2">
                                            <span>الاسم</span>
                                        </div>
                                        <div class="col-md-8">
                                            <input type="text" class="form-control" wire:model="trainer.name"  name="name"  placeholder="الاسم">
                                            @error('trainer.name') <span class="text-danger">{{ $message }}</span> @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-2">
                                            <span>رقم الجوال </span>
                                        </div>
                                        <div class="col-md-8">
                                            <input type="text" class="form-control" wire:model="trainer.mobile"  name="name"  placeholder="الاسم">
                                            @error('trainer.mobile') <span class="text-danger">{{ $message }}</span> @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-2">
                                            <span>البريد الالكتروني</span>
                                        </div>
                                        <div class="col-md-8">
                                            <input type="text"  class="form-control"  name="email" wire:model="trainer.email">
                                            @error('trainer.email') <span class="text-danger">{{ $message }}</span>@enderror

                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-md-2">
                                            <span>كلمة المرور </span>
                                        </div>
                                        <div class="col-md-8">
                                            <input wire:model.defer="password" type="text" name="password" class="form-control" placeholder="كلمة المرور  " >
                                            @error('password') <span class="text-danger">{{ $message }}</span>@enderror
                                        </div>
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

