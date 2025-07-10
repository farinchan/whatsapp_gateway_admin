@extends('front.app')
@section('styles')
@endsection
@section('content')
    <div id="kt_app_content" class="app-flex-column-fluid ">

            <div class="mb-10 z-index-2">
                <div class="container ">
                    <div class="text-center mb-17">
                        <h3 class="fs-2hx text-gray-900 mb-5" id="how-it-works"
                            data-kt-scroll-offset="{default: 100, lg: 150}">How it Works</h3>
                        <div class="fs-5 text-muted fw-bold">Save thousands to millions of bucks by using single tool
                            <br />for different amazing and great useful admin
                        </div>
                    </div>
                    <div class="row w-100 gy-10 mb-md-20">
                        <div class="col-md-4 px-5">
                            <div class="text-center mb-10 mb-md-0">
                                <img src="{{ asset('back/media/illustrations/sketchy-1/2.png') }}" class="mh-125px mb-9"
                                    alt="" />
                                <div class="d-flex flex-center mb-5">
                                    <span class="badge badge-circle badge-light-success fw-bold p-5 me-3 fs-3">1</span>
                                    <div class="fs-5 fs-lg-3 fw-bold text-gray-900">Jane Miller</div>
                                </div>
                                <div class="fw-semibold fs-6 fs-lg-4 text-muted">Save thousands to millions of bucks
                                    <br />by using single tool for different
                                    <br />amazing and great
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 px-5">
                            <div class="text-center mb-10 mb-md-0">
                                <img src="{{ asset('back/media/illustrations/sketchy-1/8.png') }}" class="mh-125px mb-9"
                                    alt="" />
                                <div class="d-flex flex-center mb-5">
                                    <span class="badge badge-circle badge-light-success fw-bold p-5 me-3 fs-3">2</span>
                                    <div class="fs-5 fs-lg-3 fw-bold text-gray-900">Setup Your App</div>
                                </div>
                                <div class="fw-semibold fs-6 fs-lg-4 text-muted">Save thousands to millions of bucks
                                    <br />by using single tool for different
                                    <br />amazing and great
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 px-5">
                            <div class="text-center mb-10 mb-md-0">
                                <img src="{{ asset('back/media/illustrations/sketchy-1/12.png') }}" class="mh-125px mb-9"
                                    alt="" />
                                <div class="d-flex flex-center mb-5">
                                    <span class="badge badge-circle badge-light-success fw-bold p-5 me-3 fs-3">3</span>
                                    <div class="fs-5 fs-lg-3 fw-bold text-gray-900">Enjoy Nautica App</div>
                                </div>
                                <div class="fw-semibold fs-6 fs-lg-4 text-muted">Save thousands to millions of bucks
                                    <br />by using single tool for different
                                    <br />amazing and great
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="card" id="kt_pricing">
                <div class="card-body p-lg-17">
                    <div class="d-flex flex-column">
                        <div class="mb-13 text-center">
                            <h1 class="fs-2hx fw-bold mb-5">Choose Your Plan</h1>
                            <div class="text-gray-600 fw-semibold fs-5">If you need more info about our pricing, please
                                check
                                <a href="#" class="link-primary fw-bold">Pricing Guidelines</a>.
                            </div>
                        </div>
                        <div class="nav-group nav-group-outline mx-auto mb-15" data-kt-buttons="true">
                            <button class="btn btn-color-gray-600 btn-active btn-active-secondary px-6 py-3 me-2 active"
                                data-kt-plan="month">Monthly</button>
                            <button class="btn btn-color-gray-600 btn-active btn-active-secondary px-6 py-3"
                                data-kt-plan="annual">Annual</button>
                        </div>
                        <div class="row g-10">
                            <div class="col-xl-4">
                                <div class="d-flex h-100 align-items-center">
                                    <div
                                        class="w-100 d-flex flex-column flex-center rounded-3 bg-light bg-opacity-75 py-15 px-10">
                                        <div class="mb-7 text-center">
                                            <h1 class="text-gray-900 mb-5 fw-bolder">Startup</h1>
                                            <div class="text-gray-600 fw-semibold mb-5">Optimal for 10+ team size
                                                <br />and new startup
                                            </div>
                                            <div class="text-center">
                                                <span class="mb-2 text-primary">$</span>
                                                <span class="fs-3x fw-bold text-primary" data-kt-plan-price-month="39"
                                                    data-kt-plan-price-annual="399">39</span>
                                                <span class="fs-7 fw-semibold opacity-50">/
                                                    <span data-kt-element="period">Mon</span></span>
                                            </div>
                                        </div>
                                        <div class="w-100 mb-10">
                                            <div class="d-flex align-items-center mb-5">
                                                <span class="fw-semibold fs-6 text-gray-800 flex-grow-1 pe-3">Up to 10
                                                    Active Users</span>
                                                <i class="ki-outline ki-check-circle fs-1 text-success"></i>
                                            </div>
                                            <div class="d-flex align-items-center mb-5">
                                                <span class="fw-semibold fs-6 text-gray-800 flex-grow-1 pe-3">Up to 30
                                                    Project Integrations</span>
                                                <i class="ki-outline ki-check-circle fs-1 text-success"></i>
                                            </div>
                                            <div class="d-flex align-items-center mb-5">
                                                <span class="fw-semibold fs-6 text-gray-800 flex-grow-1 pe-3">Analytics
                                                    Module</span>
                                                <i class="ki-outline ki-check-circle fs-1 text-success"></i>
                                            </div>
                                            <div class="d-flex align-items-center mb-5">
                                                <span class="fw-semibold fs-6 text-gray-600 flex-grow-1">Finance
                                                    Module</span>
                                                <i class="ki-outline ki-cross-circle fs-1"></i>
                                            </div>
                                            <div class="d-flex align-items-center mb-5">
                                                <span class="fw-semibold fs-6 text-gray-600 flex-grow-1">Accounting
                                                    Module</span>
                                                <i class="ki-outline ki-cross-circle fs-1"></i>
                                            </div>
                                            <div class="d-flex align-items-center mb-5">
                                                <span class="fw-semibold fs-6 text-gray-600 flex-grow-1">Network
                                                    Platform</span>
                                                <i class="ki-outline ki-cross-circle fs-1"></i>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <span class="fw-semibold fs-6 text-gray-600 flex-grow-1">Unlimited Cloud
                                                    Space</span>
                                                <i class="ki-outline ki-cross-circle fs-1"></i>
                                            </div>
                                        </div>
                                        <a href="#" class="btn btn-sm btn-primary">Select</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4">
                                <div class="d-flex h-100 align-items-center">
                                    <div
                                        class="w-100 d-flex flex-column flex-center rounded-3 bg-light bg-opacity-75 py-20 px-10">
                                        <div class="mb-7 text-center">
                                            <h1 class="text-gray-900 mb-5 fw-bolder">Advanced</h1>
                                            <div class="text-gray-600 fw-semibold mb-5">Optimal for 100+ team siz
                                                <br />e and grown company
                                            </div>
                                            <div class="text-center">
                                                <span class="mb-2 text-primary">$</span>
                                                <span class="fs-3x fw-bold text-primary" data-kt-plan-price-month="339"
                                                    data-kt-plan-price-annual="3399">339</span>
                                                <span class="fs-7 fw-semibold opacity-50">/
                                                    <span data-kt-element="period">Mon</span></span>
                                            </div>
                                        </div>
                                        <div class="w-100 mb-10">
                                            <div class="d-flex align-items-center mb-5">
                                                <span class="fw-semibold fs-6 text-gray-800 flex-grow-1 pe-3">Up to 10
                                                    Active Users</span>
                                                <i class="ki-outline ki-check-circle fs-1 text-success"></i>
                                            </div>
                                            <div class="d-flex align-items-center mb-5">
                                                <span class="fw-semibold fs-6 text-gray-800 flex-grow-1 pe-3">Up to 30
                                                    Project Integrations</span>
                                                <i class="ki-outline ki-check-circle fs-1 text-success"></i>
                                            </div>
                                            <div class="d-flex align-items-center mb-5">
                                                <span class="fw-semibold fs-6 text-gray-800 flex-grow-1 pe-3">Analytics
                                                    Module</span>
                                                <i class="ki-outline ki-check-circle fs-1 text-success"></i>
                                            </div>
                                            <div class="d-flex align-items-center mb-5">
                                                <span class="fw-semibold fs-6 text-gray-800 flex-grow-1 pe-3">Finance
                                                    Module</span>
                                                <i class="ki-outline ki-check-circle fs-1 text-success"></i>
                                            </div>
                                            <div class="d-flex align-items-center mb-5">
                                                <span class="fw-semibold fs-6 text-gray-800 flex-grow-1 pe-3">Accounting
                                                    Module</span>
                                                <i class="ki-outline ki-check-circle fs-1 text-success"></i>
                                            </div>
                                            <div class="d-flex align-items-center mb-5">
                                                <span class="fw-semibold fs-6 text-gray-600 flex-grow-1">Network
                                                    Platform</span>
                                                <i class="ki-outline ki-cross-circle fs-1"></i>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <span class="fw-semibold fs-6 text-gray-600 flex-grow-1">Unlimited Cloud
                                                    Space</span>
                                                <i class="ki-outline ki-cross-circle fs-1"></i>
                                            </div>
                                        </div>
                                        <a href="#" class="btn btn-sm btn-primary">Select</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4">
                                <div class="d-flex h-100 align-items-center">
                                    <div
                                        class="w-100 d-flex flex-column flex-center rounded-3 bg-light bg-opacity-75 py-15 px-10">
                                        <div class="mb-7 text-center">
                                            <h1 class="text-gray-900 mb-5 fw-bolder">Enterprise</h1>
                                            <div class="text-gray-600 fw-semibold mb-5">Optimal for 1000+ team
                                                <br />and enterpise
                                            </div>
                                            <div class="text-center">
                                                <span class="mb-2 text-primary">$</span>
                                                <span class="fs-3x fw-bold text-primary" data-kt-plan-price-month="999"
                                                    data-kt-plan-price-annual="9999">999</span>
                                                <span class="fs-7 fw-semibold opacity-50">/
                                                    <span data-kt-element="period">Mon</span></span>
                                            </div>
                                        </div>
                                        <div class="w-100 mb-10">
                                            <div class="d-flex align-items-center mb-5">
                                                <span class="fw-semibold fs-6 text-gray-800 flex-grow-1 pe-3">Up to 10
                                                    Active Users</span>
                                                <i class="ki-outline ki-check-circle fs-1 text-success"></i>
                                            </div>
                                            <div class="d-flex align-items-center mb-5">
                                                <span class="fw-semibold fs-6 text-gray-800 flex-grow-1 pe-3">Up to 30
                                                    Project Integrations</span>
                                                <i class="ki-outline ki-check-circle fs-1 text-success"></i>
                                            </div>
                                            <div class="d-flex align-items-center mb-5">
                                                <span class="fw-semibold fs-6 text-gray-800 flex-grow-1 pe-3">Analytics
                                                    Module</span>
                                                <i class="ki-outline ki-check-circle fs-1 text-success"></i>
                                            </div>
                                            <div class="d-flex align-items-center mb-5">
                                                <span class="fw-semibold fs-6 text-gray-800 flex-grow-1 pe-3">Finance
                                                    Module</span>
                                                <i class="ki-outline ki-check-circle fs-1 text-success"></i>
                                            </div>
                                            <div class="d-flex align-items-center mb-5">
                                                <span class="fw-semibold fs-6 text-gray-800 flex-grow-1 pe-3">Accounting
                                                    Module</span>
                                                <i class="ki-outline ki-check-circle fs-1 text-success"></i>
                                            </div>
                                            <div class="d-flex align-items-center mb-5">
                                                <span class="fw-semibold fs-6 text-gray-800 flex-grow-1 pe-3">Network
                                                    Platform</span>
                                                <i class="ki-outline ki-check-circle fs-1 text-success"></i>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <span class="fw-semibold fs-6 text-gray-800 flex-grow-1 pe-3">Unlimited
                                                    Cloud Space</span>
                                                <i class="ki-outline ki-check-circle fs-1 text-success"></i>
                                            </div>
                                        </div>
                                        <a href="#" class="btn btn-sm btn-primary">Select</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mt-20 mb-20 position-relative z-index-2">
                <div class="container">
                    <div class="text-center mb-17">
                        <h3 class="fs-2hx text-gray-900 mb-5" id="clients"
                            data-kt-scroll-offset="{default: 125, lg: 150}">What Our Clients Say</h3>
                        <div class="fs-5 text-muted fw-bold">
                            Save thousands to millions of bucks by using single tool <br>
                            for different amazing and great useful admin
                        </div>
                    </div>
                    <div class="row g-lg-10 mb-10 mb-lg-20">
                        <div class="col-lg-4">
                            <div
                                class="d-flex flex-column justify-content-between h-lg-100 px-10 px-lg-0 pe-lg-10 mb-15 mb-lg-0">
                                <div class="mb-7">
                                    <div class="rating mb-6">
                                        <div class="rating-label me-2 checked">
                                            <i class="ki-outline ki-star fs-5"></i>
                                        </div>
                                        <div class="rating-label me-2 checked">
                                            <i class="ki-outline ki-star fs-5"></i>
                                        </div>
                                        <div class="rating-label me-2 checked">
                                            <i class="ki-outline ki-star fs-5"></i>
                                        </div>
                                        <div class="rating-label me-2 checked">
                                            <i class="ki-outline ki-star fs-5"></i>
                                        </div>
                                        <div class="rating-label me-2 checked">
                                            <i class="ki-outline ki-star fs-5"></i>
                                        </div>
                                    </div>
                                    <div class="fs-2 fw-bold text-gray-900 mb-3">
                                        This is by far the cleanest template <br>
                                        and the most well structured
                                    </div>
                                    <div class="text-gray-500 fw-semibold fs-4">
                                        The most well thought out design theme I have ever used. The codes are up to
                                        tandard. The css styles are very clean.
                                        In fact the cleanest and the most up to standard I have ever seen.
                                    </div>
                                </div>
                                <div class="d-flex align-items-center">
                                    <div class="symbol symbol-circle symbol-50px me-5">
                                        <img src="{{ asset('front/') }}media/avatars/300-1.jpg" class=""
                                            alt="">
                                    </div>
                                    <div class="flex-grow-1">
                                        <a href="#" class="text-gray-900 fw-bold text-hover-primary fs-6">Paul
                                            Miles</a>
                                        <span class="text-muted d-block fw-bold">Development Lead</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div
                                class="d-flex flex-column justify-content-between h-lg-100 px-10 px-lg-0 pe-lg-10 mb-15 mb-lg-0">
                                <div class="mb-7">
                                    <div class="rating mb-6">
                                        <div class="rating-label me-2 checked">
                                            <i class="ki-outline ki-star fs-5"></i>
                                        </div>
                                        <div class="rating-label me-2 checked">
                                            <i class="ki-outline ki-star fs-5"></i>
                                        </div>
                                        <div class="rating-label me-2 checked">
                                            <i class="ki-outline ki-star fs-5"></i>
                                        </div>
                                        <div class="rating-label me-2 checked">
                                            <i class="ki-outline ki-star fs-5"></i>
                                        </div>
                                        <div class="rating-label me-2 checked">
                                            <i class="ki-outline ki-star fs-5"></i>
                                        </div>
                                    </div>
                                    <div class="fs-2 fw-bold text-gray-900 mb-3">
                                        This is by far the cleanest template <br>
                                        and the most well structured
                                    </div>
                                    <div class="text-gray-500 fw-semibold fs-4">
                                        The most well thought out design theme I have ever used. The codes are up to
                                        tandard. The css styles are very clean.
                                        In fact the cleanest and the most up to standard I have ever seen.
                                    </div>
                                </div>
                                <div class="d-flex align-items-center">
                                    <div class="symbol symbol-circle symbol-50px me-5">
                                        <img src="{{ asset('front/') }}media/avatars/300-2.jpg" class=""
                                            alt="">
                                    </div>
                                    <div class="flex-grow-1">
                                        <a href="#" class="text-gray-900 fw-bold text-hover-primary fs-6">Janya
                                            Clebert</a>
                                        <span class="text-muted d-block fw-bold">Development Lead</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div
                                class="d-flex flex-column justify-content-between h-lg-100 px-10 px-lg-0 pe-lg-10 mb-15 mb-lg-0">
                                <div class="mb-7">
                                    <div class="rating mb-6">
                                        <div class="rating-label me-2 checked">
                                            <i class="ki-outline ki-star fs-5"></i>
                                        </div>
                                        <div class="rating-label me-2 checked">
                                            <i class="ki-outline ki-star fs-5"></i>
                                        </div>
                                        <div class="rating-label me-2 checked">
                                            <i class="ki-outline ki-star fs-5"></i>
                                        </div>
                                        <div class="rating-label me-2 checked">
                                            <i class="ki-outline ki-star fs-5"></i>
                                        </div>
                                        <div class="rating-label me-2 checked">
                                            <i class="ki-outline ki-star fs-5"></i>
                                        </div>
                                    </div>
                                    <div class="fs-2 fw-bold text-gray-900 mb-3">
                                        This is by far the cleanest template <br>
                                        and the most well structured
                                    </div>
                                    <div class="text-gray-500 fw-semibold fs-4">
                                        The most well thought out design theme I have ever used. The codes are up to
                                        tandard. The css styles are very clean.
                                        In fact the cleanest and the most up to standard I have ever seen.
                                    </div>
                                </div>
                                <div class="d-flex align-items-center">
                                    <div class="symbol symbol-circle symbol-50px me-5">
                                        <img src="{{ asset('front/') }}media/avatars/300-16.jpg" class=""
                                            alt="">
                                    </div>
                                    <div class="flex-grow-1">
                                        <a href="#" class="text-gray-900 fw-bold text-hover-primary fs-6">Steave
                                            Brown</a>
                                        <span class="text-muted d-block fw-bold">Development Lead</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

    </div>
@endsection
@section('scripts')
@endsection
