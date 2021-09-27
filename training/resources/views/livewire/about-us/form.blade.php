<div>
    <section class="users-edit">
        <div class="card">

            <div class="card-content">
                <div class="card-body">
                    <ul class="nav nav-tabs mb-3" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link d-flex align-items-center active" id="account-tab" data-toggle="tab" href="#" aria-controls="account" role="tab" aria-selected="true">
                                <i class="feather icon-user mr-25"></i>
                                @if($aboutUs->id)
                                    <span class="d-none d-sm-block">تعديل البيانات </span>
                                @else
                                    <span class="d-none d-sm-block"> إضافة بيانات جديدة </span>
                                @endif

                            </a>
                        </li>

                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="account" aria-labelledby="account-tab" role="tabpanel">
                                <div class="row">
                                    <div class="col-12 col-sm-8">

                                        <div class="form-group row">
                                            <div class="col-md-12">
                                                <span>اسم المؤسسة</span>
                                                <input type="text" class="form-control" wire:model="aboutUs.name"  name="name"   placeholder="اسم المركز التدريبي">
                                                @error('aboutUs.name') <span class="text-danger">{{ $message }}</span> @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-6">
                                                <span> اختر طريقة لرفع الفيديو </span>
                                                <select wire:model="aboutUs.type" name="upload-way" class=" form-control" aria-label="Default select example">
                                                    <option class="p-5" value="" > اختر طريقة لرفع الفيديو  </option>
                                                    <option class=" p-5"  value="desktop" >    سطح المكتب </option>
                                                    <option class="p-5" value="youtube"> اليوتيوب </option>
                                                </select>
                                            </div>

                                            <div class="col-md-6" >
                                                    <span> اختر الفيديو </span>
                                                    @if($aboutUs->type == "youtube")
                                                        <input  name="urlVideo" id="urlVideo"  wire:model="aboutUs.video"   type="text" placeholder="أضف رابط اليوتيوب"  class="profile-img-input form-control">
                                                    @else
                                                    <input type="file"  name="file" id="file" wire:model="desktopVideo" class="profile-img-input form-control">
                                                    @endif
                                                <div wire:loading   wire:target="desktopVideo" style="margin-top: 10px;">
                                                <h6 style="display: inline-block">   جار الرفع...   </h6>
                                                <div  class="  spinner-border spinner-border-sm text-gray-200" role="status">
                                                    <span class="visually-hidden "> </span>
                                                </div></div>
                                                @error('desktopVideo') <span class="text-danger">{{ $message }}</span> @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-12">
                                                <span>الوصف</span>
                                                <textarea type="text" class="form-control" wire:model="aboutUs.details"  name="details" rows="8"> </textarea>
                                                @error('aboutUs.details') <span class="text-danger">{{ $message }}</span> @enderror
                                            </div>

                                        </div>
                                    </div>

                                    <div class="col-12 col-sm-4">
                                        <h4 style="text-align: center">  صورة الغلاف  </h4>
                                        <div class="upload-btn-wrapper mx-auto">
                                            <div class="upload-btn">
                                                @if($cover_image)

                                                    <img src="{{$cover_image->temporaryUrl()}}">

                                                @else
                                                    @if($aboutUs->id)
                                                    <div style="width: 200px ; height: 200px; max-height: 200px ;">
                                                        <img style="border: 3px solid #D3D3D3; border-radius: 15px; width: 100%; height: 100%" src="{{$aboutUs->cover_image?asset('storage/images/'.$aboutUs->cover_image):asset('storage/images/no-image.png')}}">
                                                        <div>
                                                            @error('aboutUs.cover_image') <span class="text-danger" style="font-size: 1rem ;display: block;!important;">{{ $message }}</span> @enderror
                                                        </div>
                                                    </div>
                                                    @endif
                                                @endif
                                            </div>
                                            <input wire:click type="file" class="profile-img-input"  id="cover_image"  wire:model="cover_image" name="cover_image" >
                                            <div wire:loading   wire:target="cover_image" style="margin-top: 10px;">
                                                <h6 style="display: inline-block">   جار الرفع...   </h6>
                                                <div  class="  spinner-border spinner-border-sm text-gray-200" role="status">
                                                    <span class="visually-hidden "> </span>
                                                </div>

                                            </div>
                                            @error('cover_image') <span class="text-danger">{{ $message }}</span> @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 d-flex flex-sm-row flex-column justify-content-end mt-1" >
                                    @if($aboutUs->id)
                                        <button wire:click="save" wire:loading.attr="disabled" wire:target="cover_image" type="submit" class="btn btn-primary glow mb-1 mb-sm-0 mr-0 mr-sm-1">
                                            تعديل
                                            <div wire:loading  wire:target="save"  style="margin-top: 10px;">
                                                <div  class="  spinner-border spinner-border-sm text-gray-200" role="status">
                                                    <span class="visually-hidden "> </span>
                                                </div>
                                            </div>
                                        </button>
                                    @else
                                        <button wire:click="save" wire:loading.attr="disabled" wire:target="cover_image" type="submit" class="btn btn-primary glow mb-1 mb-sm-0 mr-0 mr-sm-1">حفظ
                                            <div wire:loading  wire:target="save"  style="margin-top: 10px;">
                                                <div  class="  spinner-border spinner-border-sm text-gray-200" role="status">
                                                    <span class="visually-hidden "> </span>
                                                </div>
                                            </div>
                                        </button>
                                    @endif

                                    <a href="{{route('about-us.index')}}"  class="btn btn-outline-danger">الغاء</a>
                                </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
</div>


