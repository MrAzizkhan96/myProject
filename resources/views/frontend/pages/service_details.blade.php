@extends('frontend.layouts.index')
@section('content')
<!-- Start Site Title
    ============================================= -->
<div class="site-title-area text-center shadow dark bg-fixed text-light"
    style="background-image: url(  {{ asset('frontend/assets/img/2440x1578.png') }});">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Services Details</h1>
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
                    <li><a href="#"><i class="fas fa-home"></i> ANA SƏHİFƏ</a></li>
                    <li><a href="#">XİDMƏTLƏRİMİZ</a></li>
                    <li class="active">Single</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- End Breadcrumb -->

<!-- Start Services Single
    ============================================= -->
<div class="services-single-area default-padding">
    <div class="container">
        <div class="row">
            <div class="services-info col-md-8">
                <i class="flaticon-{{ asset('frontend/services/images/'. $service->image)}}"></i>
                <h2>{{ $service->title }}</h2>
                <p>{{ $service->description }}</p>                
                <a href="#" class="btn btn-theme border btn-md"><i class="fas fa-file-pdf"></i>PDF YÜKLƏ</a>
            </div>
            <div class="sidebar col-md-4">
                <!-- Single Item -->
                <div class="sidebar-item link">
                    <div class="title">
                        <h4>Services</h4>
                    </div>
                    <ul>
                        <!-- Activation -->
                        @foreach ($services as $service)
                         <li><a href="#">{{ $service->title }}</a></li>
                        @endforeach
                    </ul>
                </div>
                <!-- End Single Item -->
            </div>
        </div>
    </div>
</div>
<!-- End Services Single -->
@stop
