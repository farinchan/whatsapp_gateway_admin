<!--begin::Toolbar-->
<div class="toolbar py-2" id="kt_toolbar">
    <!--begin::Container-->
    <div id="kt_toolbar_container" class=" container-fluid  d-flex align-items-center">
                    <!--begin::Page title-->
            <div class="flex-grow-1 flex-shrink-0 me-5">
@include("back/layout/_page-title")
            </div>
            <!--end::Page title-->
        <!--begin::Action group-->
        <div class="d-flex align-items-center flex-wrap">
            <!--begin::Wrapper-->
            <div class="flex-shrink-0 me-2">
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link btn btn-sm btn-color-muted btn-active-color-primary btn-active-light active fw-semibold fs-7 px-4 me-1" data-bs-toggle="tab" href="#">Day</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-sm btn-color-muted btn-active-color-primary btn-active-light fw-semibold fs-7 px-4 me-1" data-bs-toggle="tab" href="">Week</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-sm btn-color-muted btn-active-color-primary btn-active-light fw-semibold fs-7 px-4" data-bs-toggle="tab" href="#">Year</a>
                    </li>
                </ul>
            </div>
            <!--end::Wrapper-->
            <!--begin::Wrapper-->
            <div class="d-flex align-items-center">
                <!--begin::Daterangepicker-->
                <a href="#" class="btn btn-sm btn-bg-light btn-color-gray-500 btn-active-color-primary me-2" id="kt_dashboard_daterangepicker" data-bs-toggle="tooltip" data-bs-dismiss="click" data-bs-trigger="hover" title="Select dashboard daterange">
                    <span class="fw-semibold me-1" id="kt_dashboard_daterangepicker_title">Range:</span>
                    <span class="fw-bold" id="kt_dashboard_daterangepicker_date">
                        June 19                    </span>
                </a>
                <!--end::Daterangepicker-->
                <!--begin::Actions-->
                <div class="d-flex align-items-center me-n2 me-lg-0">
                    <button type="button" class="btn btn-sm btn-icon btn-color-primary btn-active-light btn-active-color-primary"  data-bs-toggle="modal" data-bs-target="#kt_modal_create_campaign" >
                        <i class="ki-outline ki-plus-square fs-2"></i>                    </button>
                </div>
                <!--end::Actions-->
            </div>
            <!--end::Wrapper-->
        </div>
        <!--end::Action group-->
    </div>
    <!--end::Container-->
</div>
<!--end::Toolbar-->
