<div class="slider-images">
    <div class="container-fuild mb-3">
        <div class="header-text slide-header-text mt-0 mb-0">
            <div class="col-xl-7 col-lg-8 col-md-8 d-block mx-auto">
                <div class="search-background bg-transparent input-field">
                    <div class="text-center text-white mb-5">
                        <h1 class="mb-1 font-weight-semibold fs-50"> طور مستقبلك معنا </h1>
                        <p class="d-none d-md-block fs-20 text-white-80"> تخصص الآن في أحد أهم التخصصات التدريبية المتنوعة المطروحة لدينا على المنصة <br>  نقدم لك منهجية منظمة وعالمية تجعلك من المتفوقين في  مجالك </p>
                    </div>
{{--                    <div class="form row g-0">--}}
{{--                        <div class="form-group col-xl-9 col-lg-9 col-md-12 mb-0">--}}
{{--                            <input type="text" class="form-control input-xl br-te-md-0 br-be-md-0" placeholder=" ابحث عن الكورسات هنا " data-min-length="1" list="courses" name="courses">--}}
{{--                        </div>--}}
{{--                        <div class="col-xl-3 col-lg-3 col-md-12 mb-0">--}}
{{--                            <a href="javascript:void(0)" class="btn btn-xl btn-block btn-primary br-ts-md-0 br-bs-md-0">ابحث هنا</a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                    <div class="recent-classes text-center mt-5">
                        @forelse($categories as $category)
                        <a class="recent-course" href="">
                          <i class="fa fa-{{$category->icon}}"></i>
                                <small>{{$category->name}}</small>
                        </a>

                        @empty
                            <a class="recent-course" href="">
                            <i class="fe fe-briefcase"></i>
                            <small>لا يوجد بيانات </small>
                        </a>-
                        @endforelse
                    </div>
                </div>
            </div>
        </div><!-- /header-text -->
    </div>

</div>
