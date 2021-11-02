<div>
    @section('sliderTitle','الصفحة الشخصية ')
    @section('sliderTitle2','الصفحة الشخصية  ')
    <div class="card mb-0">
        <div class="card-header">
            <h3 class="card-title">تعديل البيانات الشخصية  </h3>
        </div>
        <div class="card-body">
            <div class="media">
                <a class="mr-2 my-25" href="#">
                    @if($image)
                        <img src="{{$image->temporaryUrl()}}" class="users-avatar-shadow rounded" style="height:70px ; width:110px;">
                    @else
                        @if($user)
                            <img src="{{$user->image?asset('storage/images/'.$user->image):asset('storage/images/no-image.png')}}" alt="users avatar" id="output" class="users-avatar-shadow rounded"  style="height:70px ; width:110px;" >
                        @endif
                    @endif
                </a>
                <div class="media-body mt-50" style="margin-right: 20px;">
                    <h4 class="media-heading">الصورة الشخصية</h4>
                    <div class="col-12 px-0 d-flex flex-sm-row flex-column justify-content-start">
                        <label class="btn btn-sm btn-primary ml-50 mb-50 mb-sm-0 cursor-pointer waves-effect waves-light" for="image" >رفع صورة جديدة</label>
                        <input type="file" id="image"  wire:model="image" name="image" hidden  wire:loading.attr="disabled">
                        <span wire:loading="" wire:target="image">
                                                                            <i class="fa fa-spinner fa-spin " aria-hidden="true"></i>
                                                                        </span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 col-md-6">
                    <div class="form-group">
                        <label class="form-label">الاسم</label>
                        <input type="text" class="form-control"  wire:model="user.name" placeholder="Name" >
                    </div>
                </div>
                <div class="col-sm-6 col-md-6">
                    <div class="form-group">
                        <label class="form-label">كلمة المرور</label>
                        <input type="text" class="form-control" wire:model="password" >
                    </div>
                </div>
                <div class="col-sm-6 col-md-6">
                    <div class="form-group">
                        <label class="form-label">الايميل</label>
                        <input type="email" class="form-control" wire:model="user.email" placeholder="Email" >
                    </div>
                </div>
                <div class="col-sm-6 col-md-6">
                    <div class="form-group">
                        <label class="form-label"> رقم الجوال </label>
                        <input type="number" class="form-control" wire:model="user.mobile" placeholder="Number" >
                    </div>
                </div>
                <div class="col-sm-6 col-md-6">
                    <div class="form-group">
                        <label class="form-label"> العنوان </label>
                        <input type="text" class="form-control" wire:model="user.address" placeholder="العنوان" >
                    </div>
                </div>
                <div class="col-sm-6 col-md-6">
{{--                    <h4 style="text-align: center"> تغيير الصورة</h4>--}}
{{--                    <div class="upload-btn-wrapper mx-auto">--}}
{{--                        <div class="upload-btn">--}}
{{--                            @if($image)--}}
{{--                                <img src="{{$image->temporaryUrl()}}">--}}
{{--                            @else--}}
{{--                                @if($user)--}}
{{--                                    <img style="border: 3px solid #D3D3D3; border-radius: 15px; width: 100%; height: 100%" src="{{$user->image?asset('storage/images/'.$user->image):asset('storage/images/no-image.png')}}">--}}
{{--                                @endif--}}
{{--                            @endif--}}
{{--                        </div>--}}
{{--                        <input type="file" class="profile-img-input"  id="image"   wire:model="image" name="image" >--}}
{{--                        @error('user.image') <span class="text-danger">{{ $message }}</span>@enderror--}}
{{--                    </div>--}}


                </div>
                </div>
            </div>
        </div>
        <div class="card-footer">
            <button wire:click.prevent="save" class="btn btn-primary">تعديل البيانات </button>
        </div>
    </div>
</div>
