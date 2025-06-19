@extends('auth.app')
@section('content')
    <div class="d-flex flex-stack py-2">
        <div class="me-2">
            <a href="{{ route("auth.login") }}" class="btn btn-icon bg-light rounded-circle">
                <i class="ki-outline ki-black-left fs-2 text-gray-800"></i>
            </a>
        </div>
        <div class="m-0">
            <span class="text-gray-500 fw-bold fs-5 me-2" data-kt-translate="new-password-head-desc">Sudah punya akun?</span>
            <a href="{{ route("auth.login") }}" class="link-primary fw-bold fs-5"
                data-kt-translate="new-password-head-link">Masuk</a>
        </div>
    </div>
    <div class="py-20">
        <form class="form w-100" novalidate="novalidate" id="kt_new_password_form" action="#">
            <div class="text-start mb-10">
                <h1 class="text-gray-900 mb-3 fs-3x" data-kt-translate="new-password-title">Atur Kata Sandi Baru</h1>
                <div class="text-gray-500 fw-semibold fs-6" data-kt-translate="new-password-desc">Apakah Anda sudah mereset kata sandi?</div>
            </div>
            <div class="mb-10 fv-row" data-kt-password-meter="true">
                <div class="mb-1">
                    <div class="position-relative mb-3">
                        <input class="form-control form-control-lg form-control-solid" type="password"
                            placeholder="Kata Sandi" name="password" autocomplete="off"
                            data-kt-translate="new-password-input-password" />
                        <span class="btn btn-sm btn-icon position-absolute translate-middle top-50 end-0 me-n2"
                            data-kt-password-meter-control="visibility">
                            <i class="ki-outline ki-eye-slash fs-2"></i>
                            <i class="ki-outline ki-eye fs-2 d-none"></i>
                        </span>
                    </div>
                    <div class="d-flex align-items-center mb-3" data-kt-password-meter-control="highlight">
                        <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                        <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                        <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                        <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px"></div>
                    </div>
                </div>
                <div class="text-muted" data-kt-translate="new-password-hint">Gunakan 8 karakter atau lebih dengan kombinasi huruf, angka & simbol.</div>
            </div>
            <div class="fv-row mb-10">
                <input class="form-control form-control-lg form-control-solid" type="password"
                    placeholder="Konfirmasi Kata Sandi" name="confirm-password" autocomplete="off"
                    data-kt-translate="new-password-confirm-password" />
            </div>
            <div class="d-flex flex-stack">
                <button id="kt_new_password_submit" class="btn btn-primary" data-kt-translate="new-password-submit">
                    <span class="indicator-label">Kirim</span>
                    <span class="indicator-progress">Mohon tunggu...
                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                </button>
                {{-- <div class="d-flex align-items-center">
                    <div class="text-gray-500 fw-semibold fs-6 me-6" data-kt-translate="general-or">Atau</div>
                    <a href="#" class="symbol symbol-circle symbol-45px w-45px bg-light me-3">
                        <img alt="Logo" src="assets/media/svg/brand-logos/google-icon.svg" class="p-4" />
                    </a>
                    <a href="#" class="symbol symbol-circle symbol-45px w-45px bg-light me-3">
                        <img alt="Logo" src="assets/media/svg/brand-logos/facebook-3.svg" class="p-4" />
                    </a>
                    <a href="#" class="symbol symbol-circle symbol-45px w-45px bg-light">
                        <img alt="Logo" src="assets/media/svg/brand-logos/apple-black.svg"
                            class="theme-light-show p-4" />
                        <img alt="Logo" src="assets/media/svg/brand-logos/apple-black-dark.svg"
                            class="theme-dark-show p-4" />
                    </a>
                </div> --}}
            </div>
        </form>
    </div>
@endsection
