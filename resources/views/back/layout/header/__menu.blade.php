<!--begin::Menu wrapper-->
<div class="header-menu align-items-stretch" data-kt-drawer="true" data-kt-drawer-name="header-menu"
    data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true"
    data-kt-drawer-width="{default:'200px', '300px': '250px'}" data-kt-drawer-direction="end"
    data-kt-drawer-toggle="#kt_header_menu_mobile_toggle" data-kt-swapper="true" data-kt-swapper-mode="prepend"
    data-kt-swapper-parent="{default: '#kt_body', lg: '#kt_header_nav'}">
    <!--begin::Menu-->
    <div class="menu menu-rounded menu-column menu-lg-row menu-active-bg menu-state-primary menu-title-gray-700 menu-arrow-gray-500 fw-semibold my-5 my-lg-0 px-2 px-lg-0 align-items-stretch"
        id="#kt_header_menu" data-kt-menu="true">
        <!--begin:Menu item-->
        <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="bottom-start"
            class="menu-item here show menu-here-bg menu-lg-down-accordion me-0 me-lg-2"><!--begin:Menu link--><span
                class="menu-link py-3"><span class="menu-title">Dashboards</span><span
                    class="menu-arrow d-lg-none"></span></span><!--end:Menu link--><!--begin:Menu sub-->
            <div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown p-0 w-100 w-lg-850px">
                @include('back/layout/partials/header/_menu/__dashboards')
            </div><!--end:Menu sub-->
        </div><!--end:Menu item--><!--begin:Menu item-->
        <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="bottom-start"
            class="menu-item menu-lg-down-accordion me-0 me-lg-2"><!--begin:Menu link--><span
                class="menu-link py-3"><span class="menu-title">Pages</span><span
                    class="menu-arrow d-lg-none"></span></span><!--end:Menu link--><!--begin:Menu sub-->
            <div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown p-0">
                @include('back/layout/partials/header/_menu/__pages')
            </div><!--end:Menu sub-->
        </div><!--end:Menu item--><!--begin:Menu item-->

        {{-- <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="bottom-start"
            class="menu-item menu-lg-down-accordion menu-sub-lg-down-indention me-0 me-lg-2">
            <!--begin:Menu link--><span class="menu-link py-3"><span class="menu-title">Help</span><span
                    class="menu-arrow d-lg-none"></span></span><!--end:Menu link--><!--begin:Menu sub-->
            <div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown px-lg-2 py-lg-4 w-lg-200px">
                <!--begin:Menu item-->
                <div class="menu-item"><!--begin:Menu link--><a class="menu-link py-3"
                        href="https://preview.keenthemes.com/html/metronic/docs/base/utilities" target="_blank"
                        title="Check out over 200 in-house components, plugins and ready for use solutions"
                        data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss="click"
                        data-bs-placement="right"><span class="menu-icon"><i
                                class="ki-outline ki-rocket fs-2"></i></span><span
                            class="menu-title">Components</span></a><!--end:Menu link--></div>
                <!--end:Menu item--><!--begin:Menu item-->
                <div class="menu-item"><!--begin:Menu link--><a class="menu-link py-3"
                        href="https://preview.keenthemes.com/html/metronic/docs" target="_blank"
                        title="Check out the complete documentation" data-bs-toggle="tooltip" data-bs-trigger="hover"
                        data-bs-dismiss="click" data-bs-placement="right"><span class="menu-icon"><i
                                class="ki-outline ki-abstract-26 fs-2"></i></span><span
                            class="menu-title">Documentation</span></a><!--end:Menu link--></div>
                <!--end:Menu item--><!--begin:Menu item-->
                <div class="menu-item"><!--begin:Menu link--><a class="menu-link py-3" href="?page=layout-builder"
                        title="Build your layout and export HTML for server side integration" data-bs-toggle="tooltip"
                        data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right"><span
                            class="menu-icon"><i class="ki-outline ki-switch fs-2"></i></span><span
                            class="menu-title">Layout Builder</span></a><!--end:Menu link--></div>
                <!--end:Menu item--><!--begin:Menu item-->
                <div class="menu-item"><!--begin:Menu link--><a class="menu-link py-3"
                        href="https://preview.keenthemes.com/html/metronic/docs/getting-started/changelog"
                        target="_blank"><span class="menu-icon"><i class="ki-outline ki-code fs-2"></i></span><span
                            class="menu-title">Changelog v8.3.0</span></a><!--end:Menu link--></div>
                <!--end:Menu item-->
            </div><!--end:Menu sub-->
        </div> --}}
    </div>
    <!--end::Menu-->
</div>
<!--end::Menu wrapper-->
