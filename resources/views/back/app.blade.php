<!DOCTYPE html>
<!--
Author: Fajri Rinaldi Chan
-->
<html lang="en">
<!--begin::Head-->

<head>
    <base href="" />
    <title>
        @isset($title)
            {{ $title }} |
        @endisset Torkata WhatsApp API Gateway
    </title>
    <meta charset="utf-8" />
    <meta name="description"
        content="Torkata WhatsApp API Gateway is an advanced and flexible solution for integrating WhatsApp messaging services into your applications. This platform offers a user-friendly interface, comprehensive features such as multi-device management, bulk messaging, webhooks, and automation, as well as easy API integration with various external systems. With high-level security, real-time monitoring, and professional technical support, Torkata WhatsApp API Gateway helps your business improve communication efficiency, accelerate customer response, and expand service reach effectively and measurably. Suitable for various business needs, from automated notifications and customer service to digital marketing campaigns." />
    <meta name="keywords"
        content="
Torkata, WhatsApp API, WhatsApp Gateway, Messaging API, Multi-device management, Bulk messaging, Webhooks, Automation, API integration, Business communication, Customer service, Digital marketing" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title"
        content="Torkata WhatsApp API Gateway - Advanced Messaging Solution" />
    <meta property="og:url" content="{{ url()->current() }}" />
    <meta property="og:site_name" content="Torkata WhatsApp API Gateway" />
    <link rel="canonical" href="{{ url()->current() }}" />

    <link rel="shortcut icon" href="{{ asset('back/media/logos/favicon.ico') }}" />
    <!--begin::Fonts(mandatory for all pages)-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" /> <!--end::Fonts-->
    <!--begin::Vendor Stylesheets(used for this page only)-->
    <link href="{{ asset('back/plugins/custom/fullcalendar/fullcalendar.bundle.css') }}" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('back/plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet" type="text/css" />
    <!--end::Vendor Stylesheets-->
    <!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
    <link href="{{ asset('back/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('back/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
    <!--end::Global Stylesheets Bundle-->
    @yield('styles')
    <script>
        // Frame-busting to prevent site from being loaded within a frame without permission (click-jacking)
        if (window.top != window.self) {
            window.top.location.replace(window.self.location.href);
        }
    </script>
</head>
<!--end::Head-->
<!--begin::Body-->

<body id="kt_body"
    class="header-fixed header-tablet-and-mobile-fixed toolbar-enabled toolbar-fixed aside-enabled aside-fixed">
    @include('back/partials/theme-mode/_init')
    <!--begin::Main-->
    <!--begin::Root-->
    <div class="d-flex flex-column flex-root">
        <!--begin::Page-->
        <div class="page d-flex flex-row flex-column-fluid">
            @include('back/layout/aside/_base')
            <!--begin::Wrapper-->
            <div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
                @include('back/layout/header/_base')
                @include('back/layout/_toolbar')
                <!--begin::Content-->
                <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
                    @yield('content')
                </div>
                <!--end::Content-->
                @include('back/layout/_footer')
            </div>
            <!--end::Wrapper-->
        </div>
        <!--end::Page-->
    </div>
    <!--end::Root-->
    @include('back/partials/_drawers')
    <!--end::Main-->
    @include('back/partials/_scrolltop')
    <!--begin::Modals-->
    {{-- @include('back/partials/modals/_upgrade-plan')
    @include('back/partials/modals/create-campaign/_main')
    @include('back/partials/modals/_view-users')
    @include('back/partials/modals/users-search/_main')
    @include('back/partials/modals/_invite-friends') --}}
    <!--end::Modals-->
    <!--begin::Javascript-->
    <script>
        var hostUrl = "/back";
    </script>
    <!--begin::Global Javascript Bundle(mandatory for all pages)-->
    <script src="{{ asset('back/plugins/global/plugins.bundle.js') }}"></script>
    <script src="{{ asset('back/js/scripts.bundle.js') }}"></script>
    <!--end::Global Javascript Bundle-->
    <!--begin::Vendors Javascript(used for this page only)-->
    <script src="{{ asset('back/plugins/custom/fullcalendar/fullcalendar.bundle.js') }}"></script>
    {{-- <script src="https://cdn.amcharts.com/lib/5/index.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/xy.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/percent.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/radar.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/map.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/geodata/worldLow.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/geodata/continentsLow.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/geodata/usaLow.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/geodata/worldTimeZonesLow.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/geodata/worldTimeZoneAreasLow.js"></script> --}}
    <script src="{{ asset('back/plugins/custom/datatables/datatables.bundle.js') }}"></script>
    <!--end::Vendors Javascript-->
    <!--begin::Custom Javascript(used for this page only)-->
    <script src="{{ asset('back/js/widgets.bundle.js') }}"></script>
    <script src="{{ asset('back/js/custom/widgets.js') }}"></script>
    {{-- <script src="{{asset("back/js/custom/apps/chat/chat.js")}}"></script>
    <script src="{{asset("back/js/custom/utilities/modals/upgrade-plan.js")}}"></script>
    <script src="{{asset("back/js/custom/utilities/modals/create-campaign.js")}}"></script>
    <script src="{{asset("back/js/custom/utilities/modals/users-search.js")}}"></script> --}}
    <!--end::Custom Javascript-->
    <!--end::Javascript-->
    @if (session('error'))
        <script>
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: '{{ session('error') }}',
            });
        </script>
    @endif

    @if (session('success'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Success',
                text: '{{ session('success') }}',
            });
        </script>
    @endif

    @if (session('warning'))
        <script>
            Swal.fire({
                icon: 'warning',
                title: 'Warning',
                text: '{{ session('warning') }}',
            });
        </script>
    @endif

    @if (session('info'))
        <script>
            Swal.fire({
                icon: 'info',
                title: 'Info',
                text: '{{ session('info') }}',
            });
        </script>
    @endif
    @yield('scripts')
</body>
<!--end::Body-->

</html>
