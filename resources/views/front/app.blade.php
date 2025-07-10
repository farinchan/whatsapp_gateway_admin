<!DOCTYPE html>
<html lang="en">

@php
    $setting_website = \App\Models\SettingWebsite::first();
@endphp

<head>
    <base href="" />
    <title>{{ $setting_website->name }}
        @isset($page_title)
            | {{ $page_title }}
        @endisset
    </title>
    <meta charset="utf-8" />
    <meta name="description" content="
            {{ $setting_website->about }}
        " />
    <meta name="keywords"
        content="
            {{ $setting_website->name }}, PPDB, Sumatera barat, Madrasah, Madrasah Aliyah, Kementrian Agama, Pendidikan, Pendaftaran, Online, Padang Panjang, Sumatera, Sumatera barat
        " />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta property="og:locale" content="id_ID" />
    <meta property="og:type" content="article" />
    <meta property="og:title"
        content="{{ $setting_website->name }} @isset($page_title) | {{ $page_title }} @endisset" />
    <meta property="og:url" content="{{ url()->current() }}" />
    <meta property="og:site_name" content="{{ $setting_website->name }}" />
    <link rel="canonical" href="{{ url()->current() }}" />
    <link rel="shortcut icon" href="{{ Storage::url($setting_website->favicon) }}" />
    <!--begin::Fonts(mandatory for all pages)-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" /> <!--end::Fonts-->
    <!--begin::Vendor Stylesheets(used for this page only)-->
    <link href="{{ asset('back/plugins/custom/fullcalendar/fullcalendar.bundle.css') }}" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('back/plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet"
        type="text/css" />
    <!--end::Vendor Stylesheets-->
    <!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
    <link href="{{ asset('back/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('front/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
    @yield('styles')
    <!--end::Global Stylesheets Bundle-->
    <script>
        // Frame-busting to prevent site from being loaded within a frame without permission (click-jacking)
        if (window.top != window.self) {
            window.top.location.replace(window.self.location.href);
        }
    </script>
</head>
<!--end::Head-->
<!--begin::Body-->

<body id="kt_app_body" data-kt-app-header-fixed-mobile="true" data-kt-app-toolbar-enabled="true" class="app-default">
    @include('front/partials/theme-mode/_init')
    <div class="d-flex flex-column flex-root app-root" id="kt_app_root">
        <div class="app-page  flex-column flex-column-fluid " id="kt_app_page">
            @include('front/layout/partials/_header')
            <div class="app-wrapper  flex-column flex-row-fluid " id="kt_app_wrapper">

                @if (request()->routeIs('home.index'))
                    <div class="mb-10" id="home">
                        <div class="bgi-no-repeat bgi-size-contain bgi-position-x-center bgi-position-y-bottom landing-dark-bg"
                            style="background-image: url({{ asset('back/media/svg/illustrations/landing.svg') }})">

                            <div class="d-flex flex-column flex-center w-100 min-h-350px min-h-lg-500px px-9">
                                <div class="text-center mb-5 mb-lg-10 py-10 py-lg-20">
                                    <h1 class="text-white lh-base fw-bold fs-2x fs-lg-3x mb-15">
                                        Penerimaan Peserta Didik Baru <br>
                                        <span
                                            style="background: linear-gradient(to right, #12CE5D 0%, #FFD80C 100%);-webkit-background-clip: text;-webkit-text-fill-color: transparent;">
                                            <span id="kt_landing_hero_text">MAN 1 Padang Panjang</span>
                                        </span>
                                    </h1>
                                    <a href="{{ route('auth.register') }}" class="btn btn-primary">Daftar Sekarang</a>
                                </div>
                                <div class="d-flex flex-center flex-wrap position-relative px-5">
                                    <div class="d-flex flex-center m-3 m-md-6" data-bs-toggle="tooltip"
                                        aria-label="Fujifilm" data-bs-original-title="Fujifilm" data-kt-initialized="1">
                                        <img src="{{ asset('back/media/svg/brand-logos/fujifilm.svg') }}"
                                            class="mh-30px mh-lg-40px" alt="">
                                    </div>
                                    <div class="d-flex flex-center m-3 m-md-6" data-bs-toggle="tooltip"
                                        aria-label="Vodafone" data-bs-original-title="Vodafone" data-kt-initialized="1">
                                        <img src="{{ asset('back/media/svg/brand-logos/vodafone.svg') }}"
                                            class="mh-30px mh-lg-40px" alt="">
                                    </div>
                                    <div class="d-flex flex-center m-3 m-md-6" data-bs-toggle="tooltip"
                                        aria-label="KPMG International" data-bs-original-title="KPMG International"
                                        data-kt-initialized="1">
                                        <img src="{{ asset('back/media/svg/brand-logos/kpmg.svg') }}"
                                            class="mh-30px mh-lg-40px" alt="">
                                    </div>
                                    <div class="d-flex flex-center m-3 m-md-6" data-bs-toggle="tooltip"
                                        aria-label="Nasa" data-bs-original-title="Nasa" data-kt-initialized="1">
                                        <img src="{{ asset('back/media/svg/brand-logos/nasa.svg') }}"
                                            class="mh-30px mh-lg-40px" alt="">
                                    </div>
                                    <div class="d-flex flex-center m-3 m-md-6" data-bs-toggle="tooltip"
                                        aria-label="Aspnetzero" data-bs-original-title="Aspnetzero"
                                        data-kt-initialized="1">
                                        <img src="{{ asset('back/media/svg/brand-logos/aspnetzero.svg') }}"
                                            class="mh-30px mh-lg-40px" alt="">
                                    </div>
                                    <div class="d-flex flex-center m-3 m-md-6" data-bs-toggle="tooltip"
                                        aria-label="AON - Empower Results"
                                        data-bs-original-title="AON - Empower Results" data-kt-initialized="1">
                                        <img src="{{ asset('back/media/svg/brand-logos/aon.svg') }}"
                                            class="mh-30px mh-lg-40px" alt="">
                                    </div>
                                    <div class="d-flex flex-center m-3 m-md-6" data-bs-toggle="tooltip"
                                        aria-label="Hewlett-Packard" data-bs-original-title="Hewlett-Packard"
                                        data-kt-initialized="1">
                                        <img src="{{ asset('back/media/svg/brand-logos/hp-3.svg') }}"
                                            class="mh-30px mh-lg-40px" alt="">
                                    </div>
                                    <div class="d-flex flex-center m-3 m-md-6" data-bs-toggle="tooltip"
                                        aria-label="Truman" data-bs-original-title="Truman" data-kt-initialized="1">
                                        <img src="{{ asset('back/media/svg/brand-logos/truman.svg') }}"
                                            class="mh-30px mh-lg-40px" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- <div class="landing-curve landing-dark-color ">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                                <path fill="#13263C" fill-opacity="1"
                                    d="M0,96L34.3,106.7C68.6,117,137,139,206,128C274.3,117,343,75,411,85.3C480,96,549,160,617,165.3C685.7,171,754,117,823,106.7C891.4,96,960,128,1029,122.7C1097.1,117,1166,75,1234,80C1302.9,85,1371,139,1406,165.3L1440,192L1440,0L1405.7,0C1371.4,0,1303,0,1234,0C1165.7,0,1097,0,1029,0C960,0,891,0,823,0C754.3,0,686,0,617,0C548.6,0,480,0,411,0C342.9,0,274,0,206,0C137.1,0,69,0,34,0L0,0Z">
                                </path>
                            </svg>
                        </div> --}}
                    </div>
                @else
                    <div id="kt_app_toolbar" class="app-toolbar  py-6 ">
                        <div id="kt_app_toolbar_container"
                            class="app-container  container-xxl d-flex align-items-start ">
                            <div class="d-flex flex-column flex-row-fluid">
                                <div class="d-flex align-items-center pt-1">
                                    @include('front/layout/partials/toolbar/_breadcrumb')
                                </div>
                                <div class="d-flex flex-stack flex-wrap flex-lg-nowrap gap-4 gap-lg-10 pt-13 pb-6">
                                    @include('front/layout/partials/toolbar/_page-title')
                                    {{-- @include('front/layout/partials/toolbar/_stats') --}}
                                </div>
                            </div>
                        </div>
                    </div>
                @endif



                <div class="app-container  container-xxl ">
                    <div class="app-main flex-column flex-row-fluid " id="kt_app_main">
                        <div class="d-flex flex-column flex-column-fluid">
                            @yield('content')
                        </div>
                        {{-- @include('front/layout/partials/_footer') --}}
                    </div>
                </div>
                
                <div class="mb-0">

                    <div class="landing-dark-bg pt-20">
                        <div class="container">
                            <div class="row py-10 py-lg-20">flu
                                <div class="col-lg-5 pe-lg-16 mb-10 mb-lg-0">
                                    <div class="rounded landing-dark-border p-9 mb-10">
                                        <h2 class="text-white">Butuh Bantuan Melalui Email?</h2>
                                        <span class="fw-normal fs-4 text-gray-700">
                                            Kirim email ke
                                            <a href="mailto:{{ $setting_website->email }}?subject=Halo%20MAN%201%20Padang%20Panjang"
                                                class="text-white opacity-50 text-hover-primary">{{ $setting_website->email }}</a>
                                        </span>
                                    </div>
                                    <div class="rounded landing-dark-border p-9">
                                        <h2 class="text-white">Butuh Bantuan Melalui Telepon/WhatsApp?</h2>
                                        <span class="fw-normal fs-4 text-gray-700">
                                            Hubungi kami di
                                            <a href="https://wa.me/{{ $setting_website->phone }}?text=Halo%20MAN%201%20Padang%20Panjang"
                                                class="text-white opacity-50 text-hover-primary"
                                                target="_blank">{{ $setting_website->phone }}</a>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-lg-6 ps-lg-16">
                                    <div class="d-flex justify-content-center">
                                        <div class="d-flex fw-semibold flex-column me-20">
                                            <h4 class="fw-bold text-gray-500 mb-6">Internal Link</h4>
                                            <a href="{{ route('home.index') }}"
                                                class="text-white opacity-50 text-hover-primary fs-5 mb-6">Beranda</a>
                                            <a href="{{ route('blogs.index') }}"
                                                class="text-white opacity-50 text-hover-primary fs-5 mb-6">Blog</a>
                                            <a href="{{ route('contact.index') }}"
                                                class="text-white opacity-50 text-hover-primary fs-5 mb-6">Hubungi
                                                Kami</a>
                                        </div>
                                        <div class="d-flex fw-semibold flex-column ">
                                            <h4 class="fw-bold text-gray-500 mb-6">External Link</h4>
                                            <a href="{{ route('home.index') }}"
                                                class="text-white opacity-50 text-hover-primary fs-5 mb-6">Website</a>
                                            <a href="#"
                                                class="text-white opacity-50 text-hover-primary fs-5 mb-6">PPDB</a>
                                            <a href="#"
                                                class="text-white opacity-50 text-hover-primary fs-5 mb-6">PPID</a>
                                            <a href="#"
                                                class="text-white opacity-50 text-hover-primary fs-5 mb-6">PTSP</a>
                                            <a href="#"
                                                class="text-white opacity-50 text-hover-primary fs-5 mb-6">Pustaka
                                                Digital</a>
                                        </div>
                                        <div class="d-flex fw-semibold flex-column ms-lg-20">
                                            <h4 class="fw-bold text-gray-500 mb-6">Social Media</h4>
                                            <a href="https://www.facebook.com/keenthemes" class="mb-6">
                                                <img src="{{ asset('back/media/svg/brand-logos/facebook-4.svg') }}"
                                                    class="h-20px me-2" alt="">
                                                <span
                                                    class="text-white opacity-50 text-hover-primary fs-5 mb-6">Facebook</span>
                                            </a>
                                            <a href="https://github.com/KeenthemesHub" class="mb-6">
                                                <img src="{{ asset('back/media/svg/brand-logos/github.svg') }}"
                                                    class="h-20px me-2" alt="">
                                                <span
                                                    class="text-white opacity-50 text-hover-primary fs-5 mb-6">Github</span>
                                            </a>
                                            <a href="https://twitter.com/keenthemes" class="mb-6">
                                                <img src="{{ asset('back/media/svg/brand-logos/twitter.svg') }}"
                                                    class="h-20px me-2" alt="">
                                                <span
                                                    class="text-white opacity-50 text-hover-primary fs-5 mb-6">Twitter</span>
                                            </a>
                                            <a href="https://dribbble.com/keenthemes" class="mb-6">
                                                <img src="{{ asset('back/media/svg/brand-logos/dribbble-icon-1.svg') }}"
                                                    class="h-20px me-2" alt="">
                                                <span
                                                    class="text-white opacity-50 text-hover-primary fs-5 mb-6">Dribbble</span>
                                            </a>
                                            <a href="https://www.instagram.com/keenthemes" class="mb-6">
                                                <img src="{{ asset('back/media/svg/brand-logos/instagram-2-1.svg') }}"
                                                    class="h-20px me-2" alt="">
                                                <span
                                                    class="text-white opacity-50 text-hover-primary fs-5 mb-6">Instagram</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="landing-dark-separator"></div>
                        <div class="container">
                            <div class="d-flex flex-column flex-md-row flex-stack py-7 py-lg-10">
                                <div class="d-flex align-items-center order-2 order-md-1">
                                    <a href="#">
                                        <img alt="Logo" src="{{ Storage::url($setting_website->logo) }}"
                                            class="h-15px h-md-20px">
                                    </a>
                                    <span class="mx-5 fs-6 fw-semibold text-gray-600 pt-1"
                                        href="https://keenthemes.com">
                                        © {{ date('Y') }} {{ $setting_website->name }}
                                    </span>
                                </div>
                                <ul
                                    class="menu menu-gray-600 menu-hover-primary fw-semibold fs-6 fs-md-5 order-1 mb-5 mb-md-0">
                                    <li class="menu-item">
                                        <a href="https://keenthemes.com" target="_blank"
                                            class="menu-link px-2">Website</a>
                                    </li>
                                    <li class="menu-item mx-5">
                                        <a href="https://devs.keenthemes.com" target="_blank"
                                            class="menu-link px-2">Support</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- @include('front/partials/_drawers') --}}
    @include('front/partials/_scrolltop')
    <!--begin::Modals-->
    {{-- @include('front/partials/modals/_upgrade-plan')
    @include('front/partials/modals/_invite-friends')
    @include('front/partials/modals/_new-target')
    @include('front/partials/modals/create-app/_main')
    @include('front/partials/modals/users-search/_main') --}}
    <!--end::Modals-->
    <!--begin::Javascript-->
    <script>
        var hostUrl = "assets/";
    </script>
    <!--begin::Global Javascript Bundle(mandatory for all pages)-->
    <script src="{{ asset('back/plugins/global/plugins.bundle.js') }}"></script>
    <script src="{{ asset('front/js/scripts.bundle.js') }}"></script>
    <!--end::Global Javascript Bundle-->
    <!--begin::Vendors Javascript(used for this page only)-->
    {{-- <script src="{{ asset('back/plugins/custom/fullcalendar/fullcalendar.bundle.js') }}"></script> --}}
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
    <script src="{{ asset('front/js/widgets.bundle.js') }}"></script>
    {{-- <script src="{{ asset('back/js/custom/widgets.js') }}"></script>
    <script src="{{ asset('back/js/custom/apps/chat/chat.js') }}"></script>
    <script src="{{ asset('back/js/custom/utilities/modals/upgrade-plan.js') }}"></script>
    <script src="{{ asset('back/js/custom/utilities/modals/new-target.js') }}"></script>
    <script src="{{ asset('back/js/custom/utilities/modals/create-app.js') }}"></script>
    <script src="{{ asset('back/js/custom/utilities/modals/users-search.js') }}"></script> --}}
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
