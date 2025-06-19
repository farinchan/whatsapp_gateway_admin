<!--begin::Toolbar wrapper-->
<div class="d-flex align-items-stretch flex-shrink-0">
    <!--begin::Search-->
    {{-- <div class="d-flex align-items-stretch ms-1 ms-lg-3">
        @include('back/partials/search/_dropdown')
    </div> --}}
    <!--end::Search-->
    <!--begin::Activities-->
    {{-- <div class="d-flex align-items-center ms-1 ms-lg-3">
        <!--begin::Drawer toggle-->
        <div class="btn btn-icon btn-active-light-primary w-30px h-30px w-md-40px h-md-40px" id="kt_activities_toggle">
            <i class="ki-outline ki-notification-bing fs-1"></i>
        </div>
        <!--end::Drawer toggle-->
    </div> --}}
    <!--end::Activities-->
    <!--begin::Quick links-->
    {{-- <div class="d-flex align-items-center ms-1 ms-lg-3">
        <!--begin::Menu wrapper-->
        <div class="btn btn-icon btn-active-light-primary w-30px h-30px w-md-40px h-md-40px" data-kt-menu-trigger="click"
            data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
            <i class="ki-outline ki-tablet-ok fs-1"></i>
        </div>
        @include('back/partials/menus/_quick-links-menu')
        <!--end::Menu wrapper-->
    </div> --}}
    <!--end::Quick links-->
    <!--begin::Chat-->
    <div class="d-flex align-items-center ms-1 ms-lg-3">
        <!--begin::Menu wrapper-->
        <div class="btn btn-icon btn-active-light-primary position-relative btn btn-icon btn-active-light-primary w-30px h-30px w-md-40px h-md-40px pulse pulse-success"
            id="kt_drawer_chat_toggle">
            <i class="ki-outline ki-notification-2 fs-1"></i>
            <span class="pulse-ring w-45px h-45px"></span>
        </div>
        <!--end::Menu wrapper-->
    </div>
    <!--end::Chat-->
    <!--begin::Notifications-->
    {{-- <div class="d-flex align-items-center ms-1 ms-lg-3">
        <!--begin::Menu- wrapper-->
        <div class="btn btn-icon btn-active-light-primary w-30px h-30px w-md-40px h-md-40px position-relative"
            data-kt-menu-trigger="click" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
            <i class="ki-outline ki-element-11 fs-1"></i>
        </div>
        @include('back/partials/menus/_notifications-menu')
        <!--end::Menu wrapper-->
    </div> --}}
    <!--end::Notifications-->
    <!--begin::Theme mode-->
    <div class="d-flex align-items-center ms-1 ms-lg-3">
        @include('back/partials/theme-mode/_main')
    </div>
    <!--end::Theme mode-->
    <!--begin::User menu-->
    <div class="d-flex align-items-center ms-1 ms-lg-3" id="kt_header_user_menu_toggle">
        <!--begin::Menu wrapper-->
        <div class="cursor-pointer symbol symbol-30px symbol-md-40px" data-kt-menu-trigger="click"
            data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
            <img src="{{ Auth::user()->photo }}" alt="image" />
        </div>
        @include('back/partials/menus/_user-account-menu')
        <!--end::Menu wrapper-->
    </div>
    <!--end::User menu-->
    <!--begin::Heaeder menu toggle-->
    <div class="d-flex align-items-center d-lg-none ms-2 me-n2" title="Show header menu">
        <div class="btn btn-icon btn-active-color-primary w-30px h-30px w-md-40px h-md-40px"
            id="kt_header_menu_mobile_toggle">
            <i class="ki-outline ki-burger-menu-2 fs-1"></i>
        </div>
    </div>
    <!--end::Heaeder menu toggle-->
</div>
<!--end::Toolbar wrapper-->
