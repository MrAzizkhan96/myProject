    @extends('frontend.layouts.index')
    @section('content')
        <!-- Start Site Title
        ============================================= -->
        <div class="site-title-area text-center shadow dark bg-fixed text-light"
            style="background-image: url({{asset('frontend/assets/img/2440x1578.png')}});">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1>HAQQIMIZDA</h1>
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
                            <li><a href="#">ŞİRKƏT</a></li>
                            <li class="active">HAQQIMIZDA</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Breadcrumb -->

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

        <!-- Start Work Process
        ============================================= -->
        <div class="work-process-area bg-gray default-padding bottom-less">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="site-heading text-center">
                            <h2>Work Process</h2>
                            <span class="devider"></span>
                            <p>
                                While mirth large of on front. Ye he greater related adapted proceed entered an. Through it
                                examine express promise no. Past add size game cold girl off how old
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="process-items text-center">
                        <div class="col-md-4 col-sm-4 single-item">
                            <div class="item">
                                <a href="#">
                                    <i class="fas fa-newspaper"></i>
                                    <h4>Discuss</h4>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4 single-item">
                            <div class="item">
                                <a href="#">
                                    <i class="fas fa-chart-line"></i>
                                    <h4>Analysis</h4>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4 single-item">
                            <div class="item">
                                <a href="#">
                                    <i class="fas fa-check-double"></i>
                                    <h4>Launch</h4>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Work Process -->

        <!-- Start Services
        ============================================= -->
        <div class="services-area thumb-less default-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="site-heading text-center">
                            <h2>What we offer</h2>
                            <span class="devider"></span>
                            <p>
                                While mirth large of on front. Ye he greater related adapted proceed entered an. Through it
                                examine express promise no. Past add size game cold girl off how old
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    
                    <div class="services-items">
                        <!-- Single Item -->
                        @foreach($services as $service)
                        <div class="single-item col-md-4 col-sm-6">
                           
                            <div class="item">
                                <h4>{{ $service->title }}</h4>
                                <p>{{ $service->description }}</p>
                                <div class="icon">
                                    <img src="{{ asset('frontend/services/icons/' . $service->icon) }}"
                                            height="70px">
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

    @stop
