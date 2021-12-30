<div class="col-xl-12 col-lg-12 col-md-12">
    @section('sliderTitle','تسجيل الدخول ')
    @section('sliderTitle2','تسجيل الدخول ')
<section class="sptb">
    <div class="container customerpage">
        <div class="row">
            <div class="col-lg-5 col-xl-5 col-md-6 d-block mx-auto">
                <div class="row">
                    <div class="col-xl-12 col-md-12 col-md-12 register-right">
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <div class="card">
                                    <div class="card-body p-6">
                                        <div class="mb-6">
                                            <h5 class="fs-25 font-weight-semibold">تسجيل الدخول  </h5>
                                            <p class="fs-16">يمكنك تسجيل الدخول لعرض بياناتك </p>
                                            @if (session()->has('message'))
                                                <div class="alert alert-success">
                                                    {{ session('message') }}
                                                </div>
                                            @endif
                                            @if (session()->has('error'))
                                                <div class="alert alert-danger">
                                                    {{ session('error') }}
                                                </div>
                                            @endif
                                        </div>
                                        <div class="single-page customerpage">
                                            <div class="wrapper wrapper2 box-shadow-0">
{{--                                                <form id="login" class=""  action="{{ route('student-login') }}" tabindex="500">--}}
{{--                                                    @csrf--}}
                                                    <div class="Email">
                                                        <label> الايميل </label>
                                                        <input type="email" wire:model="email" name="email">
                                                        @error('email') <span class="text-danger error">{{ $message }}</span>@enderror
                                                    </div>
                                                    <div class="passwd">
                                                        <label>كلمة المرور</label>
                                                        <input type="password" wire:model="password" name="password">
                                                        @error('password') <span class="text-danger error">{{ $message }}</span>@enderror
                                                    </div>
                                                    <div class="submit" style="margin: 25px">
                                                        <button  wire:loading.attr="disabled" class="btn btn-primary mr-1 mb-1 btn-block fs-16"   wire:click.prevent="login" >تسجيل الدخول

                                                            <span wire:loading="" wire:target="login">
                                                                 <i class="fa fa-spinner fa-spin " aria-hidden="true"></i>
                                                            </span>
                                                        </button>
                                                    </div>
{{--                                                    <div class="d-flex mb-0">--}}
{{--                                                        <p class="mb-0"><a href="forgot.html">Forgot Password</a></p>--}}
{{--                                                        <p class="text-dark mb-0 ms-auto">Don't have account?<a href="register.html" class="text-primary ms-1">Signup</a></p>--}}
{{--                                                    </div>--}}
{{--                                                </form>--}}
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</div>
