<div>
    {{--         If your happiness depends on money, you will never be happy with yourself.--}}
    <section class="users-edit">
        <div class="card">

            <div class="card-content">
                <div class="card-body">
                    <ul class="nav nav-tabs mb-3" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link d-flex align-items-center active" id="account-tab" data-toggle="tab" href="#" aria-controls="account" role="tab" aria-selected="true">
                                <i class="feather icon-user mr-25"></i>
                                @if($category->id)
                                    <span class="d-none d-sm-block">تعديل الصنف </span>
                                @else
                                    <span class="d-none d-sm-block">اضافة صنف جديد</span>
                                @endif

                            </a>
                        </li>

                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="account" aria-labelledby="account-tab" role="tabpanel">
                            <div class="row">
                                <div class="col-12 col-sm-8">
                                    <div class="form-group row">
                                        <div class="col-md-2">
                                            <span>اسم الصنف</span>
                                        </div>
                                        <div class="col-md-8">
                                            <input type="text" class="form-control" wire:model="category.name"  name="name"   placeholder="اسم الصنف">
                                            @error('category.name') <span class="text-danger">{{ $message }}</span> @enderror
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

                                                <div style="width: 200px ; height: 200px">
                                                    <img style="border: 3px solid #D3D3D3; border-radius: 15px; width: 100%; height: 100%" src="{{$category->image?asset('storage/images/'.$category->image):asset('storage/images/no-image.png')}}">
                                                    <div>
                                                        @error('category.image') <span class="text-danger" style="font-size: 1rem ;display: block;!important;">{{ $message }}</span> @enderror
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
                                @if($category->id)
                                    <button wire:click="save" wire:loading.attr="disabled" wire:target="image" type="submit" class="btn btn-primary glow mb-1 mb-sm-0 mr-0 mr-sm-1">
                                        تعديل
                                        <div wire:loading  wire:target="save"  style="margin-top: 10px;">
                                            <div  class="  spinner-border spinner-border-sm text-gray-200" role="status">
                                                <span class="visually-hidden "> </span>
                                            </div>
                                        </div>
                                    </button>
                                @else
                                    <button wire:click="save" wire:loading.attr="disabled" wire:target="image" type="submit" class="btn btn-primary glow mb-1 mb-sm-0 mr-0 mr-sm-1">حفظ
                                        <div wire:loading  wire:target="save"  style="margin-top: 10px;">
                                            <div  class="  spinner-border spinner-border-sm text-gray-200" role="status">
                                                <span class="visually-hidden "> </span>
                                            </div>
                                        </div>
                                    </button>
                                @endif

                                <a href="{{route('categories.index')}}"  class="btn btn-outline-danger">الغاء</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

</div>


