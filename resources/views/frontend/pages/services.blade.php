@extends('frontend.layouts.index')
@section('content')
    <!-- Start Site Title
                            ============================================= -->
    <div class="site-title-area text-center shadow dark bg-fixed text-light"
        style="background-image: url({{ asset('frontend/assets/img/2440x1578.png') }});">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>BİZİM XİDMƏTLƏR</h1>
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
                        <li><a href="{{ route('main') }}"><i class="fas fa-home"></i> ANA SƏHİFƏ</a></li>
                        <li><a href="#">ŞİRKƏT</a></li>
                        <li class="active">XİDMƏTLƏRİMİZ</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->

    <!-- Start Services
                            ============================================= -->
    <div class="services-area thumb-less default-padding">
        <div class="container">
            <div class="row">
                <div class="services-items">
                    <!-- Single Item -->
                    @foreach ($services as $service)
                        <div class="single-item col-md-4 col-sm-6">
                            <div class="item">
                                <h4>{{ $service->title }}</h4>
                                <p> {{ $service->description }}</p>
                                <div class="icon">
                                    <img src="{{ asset('frontend/services/icons/' . $service->icon) }}"
                                        height="70px"><span>{{ $service->id }}</span>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Item -->
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!-- End Services -->


    <!-- Start Testimonials
                            ============================================= -->
    <div class="testimonials-area default-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-6 testimonial-box text-center">
                    <div class="heading">
                        <h2>Customer Review</h2>
                    </div>

                    <div class="testimonial-items">

                        <div class="carousel slide" data-ride="carousel" data-interval="500000" id="testimonial-carousel">

                            <div class="carousel-inner">
                                @foreach ($customer_reviews as $customer_review)
                                    <div class="item {{ $loop->first ? 'active' : '' }}">
                                        <p>{{ $customer_review->content }}</p>
                                        <h4>{{ $customer_review->fullname }}</h4>
                                        <span>{{ $customer_review->position }}</span>
                                    </div>
                                @endforeach
                            </div>
                            <!-- End Carousel Content -->


                            <!-- Carousel Indicators -->
                            <ol class="carousel-indicators">
                                @foreach ($customer_reviews as $customer_review)
                                    <li data-target="#testimonial-carousel" data-slide-to="{{ $customer_review->id - 1 }}"
                                        class="{{ $loop->first ? 'active' : '' }}">
                                        <img src="{{ asset('frontend/customer_images/' . $customer_review->image) }}"
                                            width="100px" height="100px" alt="Thumb">
                                    </li>
                                @endforeach
                            </ol>

                        </div>

                    </div>
                </div>
                <!-- Start Faq -->
                <div class="col-md-6 faq-area">
                    <div class="heading">
                        <h2>Suallar & Cavablar</h2>
                    </div>
                    <div class="acd-items acd-arrow">
                        <div class="panel-group symb" id="accordion">

                            <!-- Single Item -->
                            @foreach ($faqs as $faq)
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion"
                                                href="#ac{{ $faq->id }}"
                                                aria-expanded="{{ $loop->first ? 'true' : 'false' }}">
                                                {{ $faq->question }}
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="ac{{ $faq->id }}" class="panel-collapse collapse ">
                                        <div class="panel-body">
                                            <p>{{ $faq->answer }}</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Item -->
                            @endforeach


                        </div>
                    </div>
                </div>
                <!-- End Faq -->
            </div>
        </div>
    </div>
    <!-- End Testimonials -->
@stop
