<div class="container-fluid">
    <div class="d-flex">
        <a class="header-brand" href="index.html">
            <img src="{{asset('FrontTheme/assets/images/brand/logo.png')}}" class="header-brand-img desktop-logo" alt="logo">
            <img src="{{asset('FrontTheme/assets/images/brand/favicon.png')}}" class="header-brand-img mobile-logo" alt="logo">
        </a>
        <a aria-label="Hide Sidebar" class="app-sidebar__toggle" data-bs-toggle="sidebar" href="javascript:void(0)"><i class=""><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M3 18h18v-2H3v2zm0-5h18v-2H3v2zm0-7v2h18V6H3z"/></svg></i></a>

        <div class="d-flex order-lg-2 ms-auto heaader-right">
            <button class="navbar-toggler navresponsive-toggler d-md-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent-4" aria-controls="navbarSupportedContent-4" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fe fe-more-vertical header-icons navbar-toggler-icon"></i>
            </button>
            <div class="p-0 mb-0 navbar navbar-expand-lg  responsive-navbar navbar-dark  ">
                <div class="navbar-collapse collapse" id="navbarSupportedContent-4">
                    <div class="d-flex">

                        <div class="dropdown header-user ">
                            <a href="javascript:void(0)" class="nav-link leading-none user-img" data-bs-toggle="dropdown">
                                <img src="{{asset('FrontTheme/assets/images/users/female/20.jpg')}}" alt="profile-img" class="avatar">
                            </a>
                            <div class="dropdown-menu dropdown-menu-start dropdown-menu-arrow ">
                                <a class="dropdown-item" href="{{ route('profile') }}">
                                    <i class="dropdown-icon icon icon-user"></i> البيانات الشخصية
                                </a>
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <a class="side-menu__item" href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                 this.closest('form').submit();">
                                            <i class="side-menu__icon fe fe-power"></i><span class="side-menu__label">تسجيل خروج </span></a>
                                    </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
