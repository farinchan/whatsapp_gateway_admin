@extends('auth.app')
@section('content')
    <div class="d-flex flex-stack py-2">
        <div class="me-2">
            <a href="{{ route("auth.login") }}" class="btn btn-icon bg-light rounded-circle">
                <i class="ki-outline ki-black-left fs-2 text-gray-800"></i>
            </a>
        </div>
        <div class="m-0">
            <span class="text-gray-500 fw-bold fs-5 me-2" data-kt-translate="password-reset-head-desc">Sudah punya akun?</span>
            <a href="{{ route("auth.login") }}" class="link-primary fw-bold fs-5"
                data-kt-translate="password-reset-head-link">Masuk</a>
        </div>
    </div>
    <div class="py-20">
        <form class="form w-100" novalidate="novalidate" id="kt_password_reset_form"
            data-kt-redirect-url="authentication/layouts/fancy/new-password.html" action="#">
            <div class="text-start mb-10">
                <h1 class="text-gray-900 mb-3 fs-3x" data-kt-translate="password-reset-title">Lupa Kata Sandi?</h1>
                <div class="text-gray-500 fw-semibold fs-6" data-kt-translate="password-reset-desc">Masukkan email Anda untuk mengatur ulang kata sandi.</div>
            </div>
            <div class="fv-row mb-10">
                <input class="form-control form-control-solid" type="email" placeholder="Email" name="email"
                    autocomplete="off" data-kt-translate="password-reset-input-email" />
            </div>
            <div class="d-flex flex-stack">
                <div class="m-0">
                    <button id="kt_password_reset_submit" class="btn btn-primary me-2"
                        data-kt-translate="password-reset-submit">
                        <span class="indicator-label">Kirim</span>
                        <span class="indicator-progress">Mohon tunggu...
                            <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                    </button>
                    <a href="authentication/layouts/fancy/sign-in.html" class="btn btn-lg btn-light-primary fw-bold"
                        data-kt-translate="password-reset-cancel">Batal</a>
                </div>
            </div>
        </form>
    </div>
@endsection
