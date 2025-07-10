@extends('auth.app')
@section('content')
    <div class="d-flex flex-stack py-2">
        <div class="me-2"></div>
        <div class="m-0">
            <span class="text-gray-500 fw-bold fs-5 me-2" data-kt-translate="sign-in-head-desc">Belum punya akun?</span>
            <a href="{{ route('auth.register') }}" class="link-primary fw-bold fs-5"
                data-kt-translate="sign-in-head-link">Daftar</a>
        </div>
    </div>
    <div class="py-20">
        <form class="form w-100" novalidate="novalidate" id="kt_sign_in_form" action="{{ route('auth.login.proses') }}" method="POST">
            @csrf
            <div class="card-body">
                <div class="text-start mb-10">
                    <h1 class="text-gray-900 mb-3 fs-3x" data-kt-translate="sign-in-title">Masuk</h1>
                    <div class="text-gray-500 fw-semibold fs-6" data-kt-translate="general-desc">Dapatkan akses Whatsapp Api
                        Unofficial dengan harga murah untuk kebutuhan UMKM, Lembaga dan Institusi anda</div>
                </div>
                <div class="fv-row mb-8">
                    <input type="text" placeholder="Email" name="email" autocomplete="off"
                        data-kt-translate="sign-in-input-email" class="form-control form-control-solid" />
                </div>
                <div class="fv-row mb-7">
                    <input type="password" placeholder="Kata Sandi" name="password" autocomplete="off"
                        data-kt-translate="sign-in-input-password" class="form-control form-control-solid" />
                </div>
                <div class="d-flex flex-stack flex-wrap gap-3 fs-base fw-semibold mb-10">
                    <div></div>
                    <a href="{{ route('auth.password.request') }}" class="link-primary"
                        data-kt-translate="sign-in-forgot-password">Lupa Kata Sandi?</a>
                </div>
                <div class="d-flex flex-stack">
                    <button id="kt_sign_in_submit" class="btn btn-primary me-2 flex-shrink-0">
                        <span class="indicator-label" data-kt-translate="sign-in-submit">Masuk</span>
                        <span class="indicator-progress">
                            <span data-kt-translate="general-progress">Mohon tunggu...</span>
                            <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                        </span>
                    </button>
                    <div class="d-flex align-items-center">
                        <div class="text-gray-500 fw-semibold fs-6 me-3 me-md-6" data-kt-translate="general-or">Atau</div>
                        <a href="{{ route('auth.google.redirect') }}" class="symbol symbol-circle symbol-45px w-45px bg-light me-3">
                            <img alt="Logo" src="{{ asset('back/media/svg/brand-logos/google-icon.svg') }}"
                                class="p-4" />
                        </a>
                        <a href="#" class="symbol symbol-circle symbol-45px w-45px bg-light me-3" data-bs-toggle="tooltip" data-bs-placement="top" title="Coming Soon">
                            <img alt="Logo" src="{{ asset('back/media/svg/brand-logos/facebook-3.svg') }}"
                                class="p-4" />
                        </a>
                        <a href="#" class="symbol symbol-circle symbol-45px w-45px bg-light" data-bs-toggle="tooltip" data-bs-placement="top" title="Coming Soon">
                            <img alt="Logo" src="{{ asset('back/media/svg/brand-logos/apple-black.svg') }}"
                                class="theme-light-show p-4" />
                            <img alt="Logo" src="{{ asset('back/media/svg/brand-logos/apple-black-dark.svg') }}"
                                class="theme-dark-show p-4" />
                        </a>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
