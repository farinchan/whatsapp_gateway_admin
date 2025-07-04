<!DOCTYPE html>
<html lang="en">
<head>
    <base href="../../../" />
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
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
    <link href="{{ asset('back/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('back/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
    <script>
        // Frame-busting to prevent site from being loaded within a frame without permission (click-jacking) if (window.top != window.self) { window.top.location.replace(window.self.location.href); }
    </script>
</head>

<body id="kt_body" class="auth-bg">
    <script>
        var defaultThemeMode = "light";
        var themeMode;
        if (document.documentElement) {
            if (document.documentElement.hasAttribute("data-bs-theme-mode")) {
                themeMode = document.documentElement.getAttribute("data-bs-theme-mode");
            } else {
                if (localStorage.getItem("data-bs-theme") !== null) {
                    themeMode = localStorage.getItem("data-bs-theme");
                } else {
                    themeMode = defaultThemeMode;
                }
            }
            if (themeMode === "system") {
                themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light";
            }
            document.documentElement.setAttribute("data-bs-theme", themeMode);
        }
    </script>

    <div class="d-flex flex-column flex-root">
        <div class="d-flex flex-column flex-lg-row flex-column-fluid">
            <a href="index.html" class="d-block d-lg-none mx-auto py-20">
                <img alt="Logo" src="{{ asset('back/media/logos/default.svg') }}" class="theme-light-show h-25px" />
                <img alt="Logo" src="{{ asset('back/media/logos/default-dark.svg') }}"
                    class="theme-dark-show h-25px" />
            </a>
            <div class="d-flex flex-column flex-column-fluid flex-center w-lg-50 p-10">
                <div class="d-flex justify-content-between flex-column-fluid flex-column w-100 mw-450px">

                    @yield('content')

                    <div class="m-0">

                        <button class="btn btn-flex btn-link rotate" data-kt-menu-trigger="click"
                            data-kt-menu-placement="bottom-start" data-kt-menu-offset="0px, 0px">
                            <img data-kt-element="current-lang-flag" class="w-25px h-25px rounded-circle me-3"
                                src="{{ asset("back/media/flags/indonesia.svg") }}" alt="" />
                            <span data-kt-element="current-lang-name" class="me-2">Indonesia</span>
                            <i class="ki-outline ki-down fs-2 text-muted rotate-180 m-0"></i>
                        </button>

                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-4"
                            data-kt-menu="true" id="kt_auth_lang_menu">
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link d-flex px-5" data-kt-lang="Indonesian" onclick="event.preventDefault();">
                                    <span class="symbol symbol-20px me-4">
                                        <img data-kt-element="lang-flag" class="rounded-1"
                                            src="{{ asset("back/media/flags/indonesia.svg") }}" alt="" />
                                    </span>
                                    <span data-kt-element="lang-name">Indonesia</span>
                                </a>
                            </div>
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link d-flex px-5" data-kt-lang="English" onclick="event.preventDefault();">
                                    <span class="symbol symbol-20px me-4">
                                        <img data-kt-element="lang-flag" class="rounded-1"
                                            src="{{ asset("back/media/flags/united-states.svg") }}" alt="" />
                                    </span>
                                    <span data-kt-element="lang-name">English</span>
                                </a>
                            </div>
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link d-flex px-5" data-kt-lang="Spanish" onclick="event.preventDefault();">
                                    <span class="symbol symbol-20px me-4">
                                        <img data-kt-element="lang-flag" class="rounded-1"
                                            src="{{ asset("back/media/flags/spain.svg") }}" alt="" />
                                    </span>
                                    <span data-kt-element="lang-name">Spanish</span>
                                </a>
                            </div>
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link d-flex px-5" data-kt-lang="German" onclick="event.preventDefault();">
                                    <span class="symbol symbol-20px me-4">
                                        <img data-kt-element="lang-flag" class="rounded-1"
                                            src="{{ asset("back/media/flags/germany.svg") }}" alt="" />
                                    </span>
                                    <span data-kt-element="lang-name">German</span>
                                </a>
                            </div>
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link d-flex px-5" data-kt-lang="Japanese" onclick="event.preventDefault();">
                                    <span class="symbol symbol-20px me-4">
                                        <img data-kt-element="lang-flag" class="rounded-1"
                                            src="{{ asset("back/media/flags/japan.svg") }}" alt="" />
                                    </span>
                                    <span data-kt-element="lang-name">Japanese</span>
                                </a>
                            </div>
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link d-flex px-5" data-kt-lang="French" onclick="event.preventDefault();">
                                    <span class="symbol symbol-20px me-4">
                                        <img data-kt-element="lang-flag" class="rounded-1"
                                            src="{{ asset("back/media/flags/france.svg") }}" alt="" />
                                    </span>
                                    <span data-kt-element="lang-name">French</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-none d-lg-flex flex-lg-row-fluid w-50 bgi-size-cover bgi-position-y-center bgi-position-x-start bgi-no-repeat"
                style="background-image: url({{ asset("back/media/auth/bg11-new.png") }})"></div>
        </div>
    </div>
    <script>
        var hostUrl = "back/";
    </script>
    <script src="{{ asset('back/plugins/global/plugins.bundle.js') }}"></script>
    <script src="{{ asset('back/js/scripts.bundle.js') }}"></script>
    <script src="{{ asset('back/js/custom/authentication/sign-in/general.js') }}"></script>
    <script src="{{ asset('back/js/custom/authentication/sign-in/i18n.js') }}"></script>
</body>
</html>
