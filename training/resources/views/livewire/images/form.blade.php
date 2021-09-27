<div>
    <section class="users-edit">
        <div class="card">
            <div class="card-content">
                <div class="card-body">
                    <ul class="nav nav-tabs mb-3" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link d-flex align-items-center active" id="account-tab" data-toggle="tab" href="#" aria-controls="account" role="tab" aria-selected="true">
                                <i class="feather icon-user mr-25"></i>
                                @if($imagesGallery->id)
                                    <span class="d-none d-sm-block">تعديل معرض الصور </span>
                                @else
                                    <span class="d-none d-sm-block"> اضافة معرض صور جديد </span>
                                @endif

                            </a>
                        </li>

                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="account" aria-labelledby="account-tab" role="tabpanel">
                                <div class="row">
                                    <div class="col-md-8 col-sm-8">
                                        <div class="form-group row">
                                            <div class="col-md-10">
                                                <span> اسم معرض الصور </span>
                                                <input type="text" class="form-control" wire:model="imagesGallery.name"  name="name"   placeholder="اسم معرض الصور">
                                                @error('imagesGallery.name') <span class="text-danger">{{ $message }}</span> @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-10">
                                                <span> اسم الدورة </span>
                                                <input type="text" class="form-control" wire:model="imagesGallery.course_name"  name="course_name"   placeholder="اسم الدورة">
                                                @error('imagesGallery.course_name') <span class="text-danger">{{ $message }}</span> @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-10">
                                                <span> اختر صور المعرض </span>
                                                <input type="file" class="form-control" wire:model="images"  name="images[]" multiple >
{{--                                                <input wire:click type="file" class="profile-img-input"  id="image"  wire:model="image" name="image[]" multiple >--}}
                                                <div wire:loading   wire:target="images" style="margin-top: 10px;">
                                                    <h6 style="display: inline-block">   جار الرفع...   </h6>
                                                    <div  class="  spinner-border spinner-border-sm text-gray-200" role="status">
                                                        <span class="visually-hidden "> </span>
                                                    </div>
                                                    @error('images') <span class="text-danger">{{ $message }}</span> @enderror
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <div class="col-8 d-flex flex-sm-row flex-column justify-content-end mt-1" >
                                    @if($imagesGallery->id)
                                        <button  wire:click="save" wire:loading.attr="disabled" wire:target="images"  type="submit" class="btn btn-primary glow mb-1 mb-sm-0 mr-0 mr-sm-1">
                                            تعديل
                                            <div wire:loading  wire:target="save"  style="margin-top: 10px;">
                                                <div  class="  spinner-border spinner-border-sm text-gray-200" role="status">
                                                    <span class="visually-hidden "> </span>
                                                </div>
                                            </div>
                                        </button>
                                    @else
                                        <button wire:click="save" wire:loading.attr="disabled" wire:target="images" type="submit" class="btn btn-primary glow mb-1 mb-sm-0 mr-0 mr-sm-1">حفظ
                                            <div wire:loading  wire:target="save"  style="margin-top: 10px;">
                                                <div  class="  spinner-border spinner-border-sm text-gray-200" role="status">
                                                    <span class="visually-hidden "> </span>
                                                </div>
                                            </div>
                                        </button>
                                    @endif

                                    <a href="{{route('imagesGallery.index')}}"  class="btn btn-outline-danger">الغاء</a>
                                </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
</div>


