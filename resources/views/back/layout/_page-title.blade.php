<div data-kt-swapper="true" data-kt-swapper-mode="prepend"
    data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}"
    class="page-title d-flex align-items-center flex-wrap me-3  mb-5 mb-lg-0 ">
    @isset($title)
        <h1 class="d-flex align-items-center text-gray-900 fw-bold my-1 fs-3">
            {{ $title }}
        </h1>
    @endisset
    <span class="h-20px border-gray-200 border-start mx-3"></span>
    <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-1">

        @isset($breadcrumbs)
            @foreach ($breadcrumbs as $breadcrumb)
                <li class="breadcrumb-item">
                    <span class="bullet bg-gray-200 w-5px h-2px"></span>
                </li>
                <li class="breadcrumb-item">
                    <a href="{{ $breadcrumb['link'] ?? '' }}"
                        class="text-muted text-hover-primary @if ($loop->last) text-gray-900 @endif">
                        {{ $breadcrumb['name'] ?? '' }} </a>
                </li>
            @endforeach
        @endisset

    </ul>
</div>
