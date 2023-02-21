<!DOCTYPE html>
<html lang="en">

<head>
    @include('frontend.includes.head')
</head>

<body>
    @include('frontend.includes.master')

    <!-- Start Banner
    ============================================= -->
    <div class="banner-area auto-height title-uppercase small-first text-light text-center">
        <div id="bootcarousel" class="carousel inc-top-heading slide carousel-fade animate_text" data-ride="carousel">
            <!-- Wrapper for slides -->
            <div class="carousel-inner carousel-zoom">
                @foreach ($banners as $banner)
                    <div class="item {{ $loop->first ? 'active' : '' }} ">
                        <div class="slider-thumb bg-cover"
                            style="background-image: url({{ asset('frontend/banners/' . $banner->image) }});">
                        </div>
                        <div class="box-table">
                            <div class="box-cell shadow dark">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-10 col-md-offset-1">
                                            <div class="content">
                                                <h3 data-animation="animated slideInDown">{{ $banner->title }}</h3>
                                                <h1 data-animation="animated slideInDown">{{ $banner->description }}
                                                </h1>
                                                <a data-animation="animated slideInUp"
                                                    class="btn btn-light border btn-md" href="{{ $banner->url }}">View
                                                    Details</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <!-- End Wrapper for slides -->

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#bootcarousel" data-slide="prev">
                <i class="fa fa-angle-left"></i>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#bootcarousel" data-slide="next">
                <i class="fa fa-angle-right"></i>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <!-- End Banner -->
    <!-- Start About
    ============================================= -->
    <div class="about-area default-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-4 thumb">
                    <img src="{{ asset('frontend/setting_images/' . $setting_image->value) }}"
                        style="height: 150mm; width: 150mm" alt="Thumb">
                </div>
                <div class="col-md-8 tabs-items">
                    <div class="row">

                        <div class="tab-navs col-md-4">
                            <!-- Tab Nav -->
                            <ul class="nav nav-pills">
                                @foreach ($abouts as $about)
                                    <li {{ $loop->first ? 'class=active' : '' }}>
                                        <a data-toggle="tab" href="#tab{{ $about->id }}"
                                            aria-expanded="{{ $loop->first ? 'true' : 'false' }}">
                                            <img src="{{ asset('frontend/about_icons/' . $about->icon) }}"
                                                style="width: 160px; height: 100px;"> {{ $about->icon_title }}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                            <!-- End Tab Nav -->
                        </div>

                        <div class="tab-content-box col-md-8">
                            <!-- Start Tab Content -->
                            <div class="tab-content tab-content-info">
                                <!-- Single Item -->
                                @foreach ($abouts as $about)
                                    <div id="tab{{ $about->id }}"
                                        class="tab-pane fade {{ $loop->first ? 'active in' : '' }}">
                                        <div class="info title">
                                            <h2>{{ $about->title }}</h2>
                                            <p>{{ $about->content }}</p>
                                            <p>{{ $about->description }}</p>
                                            <a class="btn btn-theme border btn-md" href="/about">Daha çox</a>
                                        </div>
                                    </div>
                                @endforeach
                                <!-- End Single Item -->
                            </div>
                            <!-- End Tab Content -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End About -->

    <!-- Start Services
    ============================================= -->
    <div class="services-area carousel-shadow half-bg inc-thumb default-padding bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="site-heading text-center">
                        <h2>Xidmətlərimiz</h2>
                        <span class="devider"></span>
                        <p>
                            While mirth large of on front. Ye he greater related adapted proceed entered an. Through it
                            examine express promise no. Past add size game cold girl off how old
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    
                    <div class="services-items services-carousel owl-carousel owl-theme text-center">
                        <!-- Single Item -->
                        @foreach ($services as $service)
                            <div class="item">
                                <div class="thumb">
                                    <img src="{{ asset('frontend/services/images/' . $service->image) }}"
                                        alt="Thumb">
                                    <div class="overlay">
                                        <a href="{{ route('service_details')}}">Read More</a>
                                    </div>
                                </div>
                                <div class="info">
                                    <div class="icon">
                                        <i><img src="{{ asset('frontend/services/icons/' . $service->icon) }}"
                                            height="70px"></i>
                                    </div>
                                    <h4>
                                        <a href="#">{{ $service->title }}</a>
                                    </h4>
                                    <p>{{ $service->description }}</p>
                                </div>
                            </div>
                            <!-- End Single Item -->
                            @endforeach
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    <!-- End Services -->


    <!-- Start Chart Box
    ============================================= -->
    <div class="chart-area default-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-6 default info">
                    <h2>We are offering best ways To Grow Your Business Management</h2>
                    <p>
                        Both rest of know draw fond post as. It agreement defective to excellent. Feebly do engage of
                        narrow. Extensive repulsive belonging depending if promotion be zealously as. Preference
                        inquietude ask now are dispatched led appearance. Small meant in so doubt hopes. Exquisite
                        excellent son gentleman acuteness her. Do is voice total power mr ye might round still. Delay
                        rapid joy share allow age manor six. Went why far saw many knew.
                    </p>
                    <div class="fun-facts">
                        <div class="row">
                            <div class="col-md-4 item">
                                <div class="fun-fact">
                                    <div class="timer" data-to="230" data-speed="5000"></div>
                                    <span class="medium">Global Locations</span>
                                </div>
                            </div>
                            <div class="col-md-4 item">
                                <div class="fun-fact">
                                    <div class="timer" data-to="89" data-speed="5000"></div>
                                    <span class="medium">Consultants</span>
                                </div>
                            </div>
                            <div class="col-md-4 item">
                                <div class="fun-fact">
                                    <div class="timer" data-to="2348" data-speed="5000"></div>
                                    <span class="medium">Successfull Projects</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="lineChart">
                        <canvas id="lineChart" height="200"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Chart Box -->


    <!-- Start Our Goal
    ============================================= -->
    <div class="our-goal-area default-padding top-border">
        <div class="container">
            <div class="row">
                <div class="goal-items goal-carousel owl-carousel owl-theme">
                    <!-- Single Item -->
                    @foreach ($our_goals as $our_goal)
                        <div class="item">
                            <div class="col-md-6 thumb">
                                <img src="{{ asset('frontend/our_goals/' . $our_goal->image) }}" alt="Thumb">
                            </div>
                            <div class="col-md-6 info">
                                <h2>{{ $our_goal->title }}</h2>
                                <h4>{{ $our_goal->subtitle }}</h4>
                                <p> {{ $our_goal->content }}</p>
                            </div>
                        </div>
                        <!-- End Single Item -->
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!-- End Our Goal -->



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


    <!-- Start Video Area
    ============================================= -->
    @foreach ($offers as $offer)
        <div class="video-area default-padding text-center half-bg">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="heading">
                            <h2>{{ $offer->title }}</h2>
                        </div>
                    </div>
                    <div class="col-md-8 col-md-offset-2">
                        <div class="thumb wow fadeInUp">
                            <img src="{{ asset('frontend/offers/images/' . $offer->image) }}" alt="Thumb">
                            <a href="{{ $offer->video }}" class="popup-youtube light video-play-button item-center">
                                <i class="fa fa-play"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
    <!-- End Video Area -->


    <!-- Start Team
    ============================================= -->
    <div class="team-area bg-gray default-padding bottom-less">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="site-heading text-center">
                        <h2>Bizim komanda ilə görüş</h2>
                        <span class="devider"></span>
                        <p>
                            While mirth large of on front. Ye he greater related adapted proceed entered an. Through it
                            examine express promise no. Past add size game cold girl off how old
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="team-items text-center">
                    <!-- Single Item -->
                    @foreach ($teams as $team)
                    <div class="col-md-4 single-item">
                        
                            <div class="item">
                                <div class="thumb">
                                    <div class="top-img">
                                        <img src="{{ asset('frontend/team_images/' . $team->image) }}"
                                            height="300px" width="300px" alt="Thumb">
                                    </div>
                                    <div class="overlay">
                                        <ul>
                                            <li class="facebook">
                                                <a href="{{ $team->facebook }}"><i class="fab fa-facebook-f"></i></a>
                                            </li>
                                            <li class="twitter">
                                                <a href="{{ $team->twitter }}"><i class="fab fa-twitter"></i></a>
                                            </li>
                                            <li class="linkedin">
                                                <a href="{{ $team->linkedin }}"><i
                                                        class="fab fa-linkedin-in"></i></a>
                                            </li>
                                            <li class="gmail">
                                                <a href="{{ $team->gmail }}"><i
                                                        class="fab fa-google-plus-g"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="info">
                                    <div class="overlay">
                                        <h4>{{ $team->employee }}</h4>
                                    </div>
                                    <span>{{ $team->position }} </span>
                                    <p>{{ $team->description }}</p>
                                </div>
                            </div>
                    </div>
                    <!-- End Single Item -->
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!-- End Team -->


    <!-- Start Blog Area
    ============================================= -->
    <div class="blog-area default-padding bottom-less">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="site-heading text-center">
                        <h2>Son xəbərlər</h2>
                        <span class="devider"></span>
                        <p>
                            While mirth large of on front. Ye he greater related adapted proceed entered an. Through it
                            examine express promise no. Past add size game cold girl off how old
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="blog-items">
                    <!-- Single Item -->
                    @foreach($blogs as $blog)
                    <div class="col-md-6 single-item">
                        <div class="item">
                            <div class="thumb">
                                <a href="#"><img src="{{ asset('frontend/blog_images/' . $blog->image) }}"
                                        alt="Thumb"></a>
                            </div>
                            <div class="info">
                                <div class="date">
                                    <h4>{{ $blog->created_at }}</h4>
                                </div>
                                <h4>
                                    <a href="#">{{ $blog->title }}</a>
                                </h4>
                                <div class="meta">
                                    <ul>
                                        <li>
                                            <a href="#"><i class="fas fa-user"></i> Admin</a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fas fa-comments"></i> 23 Comments</a>
                                        </li>
                                    </ul>
                                </div>
                                <p>{{ $blog->description}}</p>
                                <a class="btn btn-theme border btn-md" href="/blog_details/{{$blog->id}}">Daha çox</a>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!-- End Blog Area -->

    @include('frontend.includes.footer')
    @include('frontend.includes.scriptjs')


</body>

</html>
