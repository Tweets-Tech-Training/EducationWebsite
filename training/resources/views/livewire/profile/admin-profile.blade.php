<div>


    <section class="users-edit">
        <div class="">

            <div class="">
                <div class="">
                    <div class="content-header-left col-md-9 col-12 mb-2">
                        <div class="row breadcrumbs-top">
                            <div class="col-12">
                                <h2 class="content-header-title float-left mb-0"> البيانات الشخصية  </h2>
                                <div class="breadcrumb-wrapper col-12">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="{{route('dashboard')}}">الرئيسية</a>
                                        </li>
                                        <li class="breadcrumb-item active">الصفحة الشخصية  </li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-content">
                        <div class="tab-pane active" id="account" aria-labelledby="account-tab" role="tabpanel">


                            <!-- users edit account form start -->
                            <form  id="data_form_user" wire:submit.prevent="save" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="card m-b-20">

                                            <div class="card-body mb-0">
                                                <form class="form-horizontal">

                                                    <div class="media">
                                                        <a class="mr-2 my-25" href="#">
                                                            @if($image)
                                                                <img src="{{$image->temporaryUrl()}}" class="users-avatar-shadow rounded" height="90" width="90">
                                                            @else
                                                                @if($user)
                                                                    <img src="{{$user->image?asset('storage/images/'.$user->image):asset('storage/images/no-image.png')}}" alt="users avatar" id="output" class="users-avatar-shadow rounded" height="90" width="90">
                                                                @endif
                                                            @endif
                                                        </a>
                                                        <div class="media-body mt-50">
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

                                                    <div cLass="row">
                                                        <div class="col-sm-6 col-md-6">
                                                            <div class="form-group" >
                                                                <label class="form-label" id="inputPassword5">الاسم </label>
                                                                <input type="text" class="form-control"  wire:model="user.name" placeholder="Name" >

                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6 col-md-6">
                                                            <div class="form-group">
                                                                <label class="form-label">الايميل </label>
                                                                <input type="text" class="form-control"  wire:model="user.email" placeholder="Name" >
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div cLass="row">
                                                        <div class="col-sm-6 col-md-6">
                                                            <div class="form-group">
                                                                <label class="form-label">رقم الجوال</label>
                                                                <input type="text" class="form-control"  wire:model="user.mobile"  >
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6 col-md-6">
                                                            <div class="form-group">
                                                                <label class="form-label">كلمة المرور</label>
                                                                <input type="text" class="form-control"  wire:model="password"  >
                                                            </div>
                                                        </div>
                                                    </div>

                                                </form>
                                            </div>
                                            <div class="card-footer">
                                                <div class="col-12 d-flex flex-sm-row flex-column justify-content-end mt-1" >

                                                    <a href="{{route('dashboard')}}" class="btn btn-danger mr-1 mb-1">الغاء </a>
                                                    <button type="submit" class="btn btn-success  mr-1 mb-1">تعديل </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </form>
                            <!-- users edit account form ends -->
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

