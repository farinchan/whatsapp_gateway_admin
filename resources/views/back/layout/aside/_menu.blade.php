<div class="hover-scroll-y my-2 my-lg-5 scroll-ms" id="kt_aside_menu_wrapper" data-kt-scroll="true"
    data-kt-scroll-height="auto" data-kt-scroll-dependencies="#kt_aside_logo, #kt_aside_footer"
    data-kt-scroll-wrappers="#kt_aside, #kt_aside_menu" data-kt-scroll-offset="5px">
    <div class="menu menu-column menu-title-gray-700 menu-state-title-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-500 fw-semibold"
        id="#kt_aside_menu" data-kt-menu="true">
        <a href="{{ route('back.home.index') }}"
            class="menu-item {{ request()->routeIs('back.home.*') ? 'here show' : '' }} py-2">
            <span class="menu-link menu-center">
                <span class="menu-icon me-0">
                    <i class="ki-outline ki-home-2 fs-2x"></i>
                </span>
                <span class="menu-title">Home</span>
            </span>
        </a>
        <a href="{{ route('back.home.index') }}" class="menu-item py-2">
            <span class="menu-link menu-center">
                <span class="menu-icon me-0">
                    <i class="ki-duotone ki-send fs-2x">
                        <span class="path1"></span>
                        <span class="path2"></span>
                    </i>

                </span>
                <span class="menu-title">Pesan</span>
            </span>
        </a>
        <a href="{{ route('back.home.index') }}" class="menu-item py-2">
            <span class="menu-link menu-center">
                <span class="menu-icon me-0">
                    <i class="ki-duotone ki-document fs-2x">
                        <span class="path1"></span>
                        <span class="path2"></span>
                    </i>
                </span>
                <span class="menu-title">Dokumentasi</span>
            </span>
        </a>
        <a href="{{ route('back.home.index') }}" class="menu-item py-2">
            <span class="menu-link menu-center">
                <span class="menu-icon me-0">
                    <i class="ki-duotone ki-messages fs-2x">
                        <span class="path1"></span>
                        <span class="path2"></span>
                        <span class="path3"></span>
                        <span class="path4"></span>
                        <span class="path5"></span>
                    </i>
                </span>
                <span class="menu-title">Forum</span>
            </span>
        </a>
        <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="right-start"
            class="menu-item py-2  {{ request()->routeIs('back.user.*') ? 'here show' : '' }}">
            <span class="menu-link menu-center">
                <span class="menu-icon me-0">
                    <i class="ki-outline ki-briefcase fs-2x"></i>
                </span>
                <span class="menu-title">Administator</span>
            </span>
            <div class="menu-sub menu-sub-dropdown px-2 py-4 w-200px w-lg-225px mh-75 overflow-auto">
                <div class="menu-item">
                    <div class="menu-content "><span class="menu-section fs-5 fw-bolder ps-1 py-1">Administrator</span>
                    </div>
                </div>
                <div class="menu-item">
                    <a class="menu-link {{ request()->routeIs('back.user.*') ? 'active' : '' }}" href="{{ route('back.user.index') }}">
                        <span class="menu-icon me-0">
                            <i class="ki-duotone ki-profile-user">
                                <span class="path1"></span>
                                <span class="path2"></span>
                                <span class="path3"></span>
                                <span class="path4"></span>
                            </i>
                        </span>
                        <span class="menu-title">Pengguna</span>
                    </a>
                </div>
                {{-- <div class="menu-item">
                    <a class="menu-link" href="#">
                        <span class="menu-bullet">
                            <span class="bullet bullet-dot"></span>
                        </span>
                        <span class="menu-title">User</span>
                    </a>
                </div> --}}
            </div>
        </div>
    </div>
</div>
