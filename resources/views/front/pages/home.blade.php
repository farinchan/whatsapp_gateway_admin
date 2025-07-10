@extends('front.app')
@section('styles')
@endsection
@section('content')
    <div id="kt_app_content" class="app-
      flex-column-fluid ">
        <div class="row g-5 g-xl-8">
            <div class="row flex-lg-row-reverse align-items-center g-5 py-5 mb-10">
                <div class="col-10 col-sm-8 col-lg-6">
                    <img src="{{ asset('img_ext/ppdb_siswa.png') }}" class="d-block mx-lg-auto img-fluid"
                        alt="Bootstrap Themes" width="700" height="500" loading="lazy">
                </div>
                <div class="col-lg-6">
                    <h1 class="fs-2hx text-gray-900 mb-5">
                        Mari Bergabung Bersama Kami di MAN 1 Padang Panjang
                    </h1>
                    <p class="fs-5 text-muted fw-semibold">PPDB telah dibuka untuk tahun ajaran baru! Nikmati pendidikan
                        berkualitas dengan
                        fasilitas modern, bimbingan dari guru profesional, dan program unggulan yang mendukung prestasi
                        akademik dan pengembangan karakter. Jangan lewatkan kesempatan untuk menjadi bagian dari keluarga
                        besar MAN 1 Padang Panjang, tempat di mana impian masa depan Anda dimulai!"
                    </p>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                        <button type="button" class="btn btn-primary btn-lg px-4 me-md-2">Daftar Sekarang</button>
                        <button type="button" class="btn btn-outline-secondary btn-lg px-4">Login</button>
                    </div>
                </div>
            </div>
            <div class="mb-18">
                <div class="text-center mb-12">
                    <h3 class="fs-2hx  mb-5 ">
                        <a class="text-gray-900 text-hover-primary" href="#">Berita PPDB</a>
                    </h3>
                    <div class="fs-5 text-muted fw-semibold">
                        Berita terbaru seputar Penerimaan Peserta Didik Baru
                    </div>
                </div>
                @if (count($blogs) == 0)
                    <div class="text-center">
                        <img src="{{ asset('img_ext/empty.svg') }}" class="mw-100 mh-300px" alt="">
                        <div class="fs-5 text-muted fw-semibold">Belum ada berita terbaru</div>
                    </div>
                @else
                    <div class="tns tns-default mb-10">
                        <div data-tns="true" data-tns-loop="true" data-tns-swipe-angle="false" data-tns-speed="2000"
                            data-tns-autoplay="true" data-tns-autoplay-timeout="18000" data-tns-controls="true"
                            data-tns-nav="false" data-tns-items="1" data-tns-center="false" data-tns-dots="false"
                            data-tns-prev-button="#kt_news_slider_prev" data-tns-next-button="#kt_news_slider_next"
                            data-tns-responsive="{1200: {items: 3}, 992: {items: 2}}">
                            @foreach ($blogs as $blog)
                                <div class="col-md-4 px-5">
                                    <div class="card-xl-stretch mx-md-3">
                                        <a class="d-block overlay"
                                            href="{{ route("ppdb.news.detail", $blog->slug) }}">
                                            <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded min-h-175px"
                                                style="background-image:url('{{ $blog->getThumbnail() }}')"></div>
                                        </a>
                                        <div class="m-0">
                                            <a href="{{ route("ppdb.news.detail", $blog->slug) }}"
                                                class="fs-4 text-gray-900 fw-bold text-hover-primary text-gray-900 lh-base">
                                                {{ Str::limit($blog->title, 76) }}
                                            </a>
                                            <div class="fw-semibold fs-5 text-gray-600  my-4">
                                                {{ strip_tags(Str::limit($blog->content, 100)) }}
                                            </div>
                                            <div class="fs-6 fw-bold">
                                                <a href="#"
                                                    class="text-gray-700 text-hover-primary">{{ $blog->user->teacher->name }}</a>
                                                <span class="text-muted">{{ $blog->created_at->diffForHumans() }}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <button class="btn btn-icon btn-active-color-primary" id="kt_news_slider_prev">
                            <i class="ki-outline ki-left fs-3x"></i>
                        </button>
                        <button class="btn btn-icon btn-active-color-primary" id="kt_news_slider_next">
                            <i class="ki-outline ki-right fs-3x"></i>
                        </button>
                    </div>
                @endif
            </div>

        </div>
    </div>
@endsection
@section('scripts')
@endsection
