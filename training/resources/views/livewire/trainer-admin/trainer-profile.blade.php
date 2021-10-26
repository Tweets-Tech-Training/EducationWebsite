<div>


    <section class="users-edit">
        <div class="">

            <div class="">
                <div class="">
{{--                    <ul class="nav nav-tabs mb-3" role="tablist">--}}
{{--                        <li class="nav-item">--}}
{{--                            <i class="feather icon-user mr-25"></i>--}}
{{--                            <span class="d-none d-sm-block" style="font-size: 16px ; color: #0c63e4">تعديل البيانات الشخصية </span>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                    </ul>--}}
                    <div class="tab-content">
                        <div class="tab-pane active" id="account" aria-labelledby="account-tab" role="tabpanel">


                            <!-- users edit account form start -->
                            <form  id="data_form_user" wire:submit.prevent="save" enctype="multipart/form-data">
                                <div class="row">
                                        <div class="col-xl-12">
                                            <div class="card m-b-20">
                                                <div class="card-header">
                                                    <h3 class="card-title">تعديل الصفحة الشخصية </h3>
                                                </div>
                                                <div class="card-body mb-0">
                                                    <form class="form-horizontal">
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
                                                                    <label class="form-label">العنوان</label>
                                                                    <input type="text" class="form-control"  wire:model="user.address"  >
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div cLass="row">
                                                            <div class="col-sm-6 col-md-6">
                                                                <div class="form-group">
                                                                    <label class="form-label">كلمة المرور</label>
                                                                    <input type="text" class="form-control"  wire:model="password"  >
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6 col-md-6">
                                                                <div class="form-group">
                                                                    <label class="form-label"> حساب الفيسبوك </label>
                                                                    <input type="text" class="form-control"  wire:model="user.facebook"  >
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                                <div class="card-footer text-end">
                                                    <div class="d-flex">
                                                        <a href="javascript:void(0)" class="btn btn-secondary btn-link">Cancel</a>
                                                        <button type="submit" class="btn btn-primary ms-auto">Send data</button>
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

