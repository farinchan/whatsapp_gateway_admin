<!--begin::User account menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-color fw-semibold py-4 fs-6 w-275px" data-kt-menu="true">
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <div class="menu-content d-flex align-items-center px-3">
            <!--begin::Avatar-->
            <div class="symbol symbol-50px me-5">
                <img alt="Logo" src="{{ Auth::user()->photo }}"/>
            </div>
            <!--end::Avatar-->
            <!--begin::Username-->
            <div class="d-flex flex-column">
                <div class="fw-bold d-flex align-items-center fs-5">
                    {{ Auth::user()->name }}
                    {{-- <span class="badge badge-light-success fw-bold fs-8 px-2 py-1 ms-2">Pro</span> --}}
                </div>
                <a href="#" class="fw-semibold text-muted text-hover-primary fs-7">{{ Auth::user()->email }}</a>
            </div>
            <!--end::Username-->
        </div>
    </div>
    <!--end::Menu item-->
    <!--begin::Menu separator-->
    <div class="separator my-2"></div>
    <!--end::Menu separator-->
    <!--begin::Menu item-->
    <div class="menu-item px-5">
        <a href="?page=account/overview" class="menu-link px-5">
            My Profile
        </a>
    </div>
    <!--end::Menu item-->
    <!--begin::Menu item-->
    <div class="menu-item px-5">
        <a href="#" class="menu-link px-5">
            <span class="menu-text">Whatsapp Session</span>
            <span class="menu-badge">
                <span class="badge badge-light-danger badge-circle fw-bold fs-7">1</span>
            </span>
        </a>
    </div>

    <!--end::Menu item-->
    <!--begin::Menu separator-->
    <div class="separator my-2"></div>
    <!--end::Menu separator-->
    <!--begin::Menu item-->
    <div class="menu-item px-5" data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="left-start" data-kt-menu-offset="-15px, 0">
        <a href="#" class="menu-link px-5">
            <span class="menu-title position-relative">
                Language
                <span class="fs-8 rounded bg-light px-3 py-2 position-absolute translate-middle-y top-50 end-0">
                    Indonesia <img class="w-15px h-15px rounded-1 ms-2" src="{{ asset("back/media/flags/indonesia.svg") }}" alt=""/>
                </span>
            </span>
        </a>
        <div class="menu-sub menu-sub-dropdown w-175px py-4">
            <div class="menu-item px-3">
                <a href="?page=account/settings" class="menu-link d-flex px-5 active">
                    <span class="symbol symbol-20px me-4">
                        <img class="rounded-1" src="{{ asset("back/media/flags/indonesia.svg") }}" alt=""/>
                    </span>
                    Indonesia
                </a>
            </div>
            {{-- <div class="menu-item px-3">
                <a href="?page=account/settings" class="menu-link d-flex px-5 active">
                    <span class="symbol symbol-20px me-4">
                        <img class="rounded-1" src="{{ asset("back/media/flags/united-states.svg") }}" alt=""/>
                    </span>
                    English
                </a>
            </div>

            <div class="menu-item px-3">
                <a href="?page=account/settings" class="menu-link d-flex px-5">
                    <span class="symbol symbol-20px me-4">
                        <img class="rounded-1" src="{{ asset("back/media/flags/spain.svg") }}" alt=""/>
                    </span>
                    Spanish
                </a>
            </div>

            <div class="menu-item px-3">
                <a href="?page=account/settings" class="menu-link d-flex px-5">
                    <span class="symbol symbol-20px me-4">
                        <img class="rounded-1" src="{{ asset("back/media/flags/germany.svg") }}" alt=""/>
                    </span>
                    German
                </a>
            </div>

            <div class="menu-item px-3">
                <a href="?page=account/settings" class="menu-link d-flex px-5">
                    <span class="symbol symbol-20px me-4">
                        <img class="rounded-1" src="{{ asset("back/media/flags/japan.svg") }}" alt=""/>
                    </span>
                    Japanese
                </a>
            </div>

            <div class="menu-item px-3">
                <a href="?page=account/settings" class="menu-link d-flex px-5">
                    <span class="symbol symbol-20px me-4">
                        <img class="rounded-1" src="{{ asset("back/media/flags/france.svg") }}" alt=""/>
                    </span>
                    French
                </a>
            </div> --}}
        </div>
    </div>
    <!--end::Menu item-->
    <!--begin::Menu item-->
    <!--end::Menu item-->
    <!--begin::Menu item-->
    <div class="menu-item px-5">
            <a href="{{ route("auth.logout") }}" type="submit" class="menu-link px-5">
                Sign Out
            </a>
    </div>
    <!--end::Menu item-->
</div>
<!--end::User account menu-->
