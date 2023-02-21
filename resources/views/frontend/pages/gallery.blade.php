@extends('frontend.layouts.index')
@section('content')
    <!-- Start Site Title
    ============================================= -->
    <div class="site-title-area text-center shadow dark bg-fixed text-light"
        style="background-image: url({{ asset('frontend/assets/img/2440x1578.png') }});">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>QALEREYA</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- End Site Title -->

    <!-- Start Breadcrumb
    ============================================= -->
    <div class="breadcrumb-area text-center bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ul class="breadcrumb">
                        <li><a href="{{ route('main') }}"><i class="fas fa-home"></i>ANA SƏHİFƏ</a></li>
                        <li class="active"><a href="{{ route('gallery') }}">QALEREYA</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->

   <!-- Start Gallery
    ============================================= -->
    <div class="gallery-area bg-gray default-padding">
        <div class="container">
            <div class="gallery-items-area text-center">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="site-heading text-center">
                            <h2>Qalereya</h2>
                            <span class="devider"></span>
                            <p>
                                While mirth large of on front. Ye he greater related adapted proceed entered an. Through
                                it examine express promise no. Past add size game cold girl off how old
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="mix-item-menu text-center">
                            <button class="active" data-filter="*">All</button>
                            @foreach ($gallery_categories as $gallery_category)
                                <button
                                    data-filter=".{{ $gallery_category->title }}">{{ $gallery_category->title }}</button>
                            @endforeach
                        </div>
                        <!-- End Mixitup Nav-->

                        <div class="row text-center masonary">
                            <div id="portfolio-grid" class="gallery-items col-3">
                                @foreach ($galleries as $gallery)
                                    <!-- Single Item -->
                                    <div class="pf-item {{ $gallery->galleryCategory->title }}">
                                        <div class="item">
                                            <a href="#">
                                                <img src="{{ asset('frontend/gallery_images/' . $gallery->image) }}"
                                                    alt="{{ $gallery->title }}" height="400px">
                                                <div class="item-inner">
                                                    <h4>{{ $gallery->title }}</h4>
                                                    <p>{{ $gallery->subtitle }}</p>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- End Single Item -->
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Gallery -->

@stop