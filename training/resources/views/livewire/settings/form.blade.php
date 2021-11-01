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
                                @if($setting->id)
                                    <span class="d-none d-sm-block">تعديل الإعدادات </span>
                                @else
                                    <span class="d-none d-sm-block">اضافة الإعدادات </span>
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
                                            <span> اسم الموقع </span>
                                            <input type="text" class="form-control" wire:model="setting.site_name"  name="site_name"   placeholder=" اسم الموقع ">
                                            @error('setting.site_name') <span class="text-danger">{{ $message }}</span> @enderror
                                        </div>

                                        <div class="col-md-6">
                                            <span> رقم الجوال </span>
                                            <div class="input-group mb-75">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text feather icon-phone">
{{--                                                        <i class="fa-solid fa-mobile-screen-button"></i>--}}
                                                    </span>
                                                </div>
                                                <input type="text" class="form-control" wire:model="setting.mobile"  name="mobile"   placeholder="رقم الجوال">
                                            </div>
                                            @error('setting.mobile') <span class="text-danger">{{ $message }}</span> @enderror
                                        </div>

                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-6">
                                            <span> الإيميل </span>
                                            <div class="input-group mb-75">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text feather icon-mail" id="basic-addon4"></span>
                                                </div>
                                                <input type="text" class="form-control" wire:model="setting.email"  name="email"   placeholder=" الإيميل ">
                                            </div>
                                            @error('setting.email') <span class="text-danger">{{ $message }}</span> @enderror
                                        </div>
                                        <div class="col-md-6">
                                            <span> المكان </span>
                                            <div class="input-group mb-75">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text feather icon-map" id="basic-addon4"></span>
                                                </div>
                                                <input type="text" class="form-control" wire:model="setting.place"  name="facebook"   >
                                            </div>
                                            @error('setting.place') <span class="text-danger">{{ $message }}</span> @enderror
                                        </div>

                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-6">
                                            <span> حساب الفيس بوك </span>
                                            <div class="input-group mb-75">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text feather icon-facebook" id="basic-addon4"></span>
                                                </div>
                                                <input type="text" class="form-control" wire:model="setting.facebook"  name="facebook"   placeholder="حساب الفيس بوك">
                                            </div>
                                            @error('setting.facebook') <span class="text-danger">{{ $message }}</span> @enderror
                                        </div>
                                        <div class="col-md-6">
                                            <span> حساب انستغرام </span>
                                            <div class="input-group mb-75">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text feather icon-instagram" id="basic-addon4"></span>
                                                </div>
                                                <input type="text" class="form-control" wire:model="setting.instagram"  name="instagram"   placeholder=" حساب انستغرام ">
                                            </div>

                                            @error('setting.instagram') <span class="text-danger">{{ $message }}</span> @enderror
                                        </div>



                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-6">
                                            <span> حساب تويتر </span>
                                            <div class="input-group mb-75">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text feather icon-twitter" id="basic-addon4"></span>
                                                </div>
                                                <input type="text" class="form-control" wire:model="setting.twitter"  name="twitter"   placeholder="حساب تويتر">
                                            </div>
                                            @error('setting.twitter') <span class="text-danger">{{ $message }}</span> @enderror
                                        </div>
                                        <div class="col-md-6">
                                            <span>  رابط اليوتيوب </span>
                                            <div class="input-group mb-75">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text feather icon-youtube" id="basic-addon4"></span>
                                                </div>
                                                <input type="text" class="form-control" wire:model="setting.youtube"  name="mobile"   placeholder="رابط اليوتيوب">
                                            </div>

                                            @error('setting.youtube') <span class="text-danger">{{ $message }}</span> @enderror
                                        </div>
                                        <div class="col-md-6">
                                            <span> حساب واتس آب </span>
                                            <input type="text" class="form-control" wire:model="setting.whatsapp"  name="name"   placeholder=" حساب واتس آب ">
{{--                                            <div class="input-group mb-75">--}}
{{--                                                <div class="input-group-prepend">--}}
{{--                                                    <span class="input-group-text feather icon-whatsapp" id="basic-addon4"></span>--}}
{{--                                                </div>--}}
{{--                                                <input type="text" class="form-control" wire:model="setting.whatsapp"  name="name"   placeholder=" حساب واتس آب ">--}}
{{--                                            </div>--}}
                                            @error('setting.whatsapp') <span class="text-danger">{{ $message }}</span> @enderror
                                        </div>


                                    </div>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <h4 style="text-align: center">   الصورة</h4>
                                    <div class="upload-btn-wrapper mx-auto">
                                        <div class="upload-btn">
                                            @if($image)

                                                <img src="{{$image->temporaryUrl()}}">

                                            @else

                                                <div style="width: 250px ; height: 250px; max-height: 250px;">
                                                    <div>
                                                        <img style="border: 3px solid #D3D3D3; border-radius: 15px; width: 100%; max-height: 250px;" src="{{ $setting->logo ? asset('storage/images/'.$setting->logo):asset('storage/images/no-image.png')}}">
                                                        @error('setting.logo') <span class="text-danger" style="font-size: 1rem ;display: block;!important;">{{ $message }}</span> @enderror
                                                    </div>
                                                </div>
                                            @endif
                                        </div>
                                        <input wire:click type="file" class="profile-img-input"  id="image"   wire:model="image" name="image" >

                                        <div wire:loading   wire:target="image" style="margin-top: 10px;">
                                            <h6 style="display: inline-block">   جار الرفع...   </h6>
                                            <div  class="  spinner-border spinner-border-sm text-gray-200" role="status">
                                                <span class="visually-hidden "> </span>
                                            </div>

                                        </div>
                                        @error('image') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>

                                </div>
                            </div>

                            <div class="col-12 d-flex flex-sm-row flex-column justify-content-end mt-1" >
                                @if($setting->id)
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




