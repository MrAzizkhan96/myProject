    @extends('frontend.layouts.index')
    @section('content')
        
    
    <!-- Start Site Title
    ============================================= -->
    <div class="site-title-area text-center shadow dark bg-fixed text-light"
        style="background-image: url({{ asset('frontend/assets/img/2440x1578.png') }});">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>BLOQ</h1>
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
                        <li><a href="#">BLOQ</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->

    <!-- Start Blog
    ============================================= -->
    <div class="blog-area full-blog blog-standard default-padding">
        <div class="container">
            <div class="row">
                <div class="blog-items">
                    <div class="blog-content col-md-10 col-md-offset-1">

                        <!-- Single Item -->
                        @foreach($blogs as $blog)
                        <div class="single-item">
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
                                    <p>{{ $blog->description }}</p>
                                    <a class="btn btn-theme border btn-md"
                                        href="/blog_details/{{$blog->id}}">ƏTRAFLI</a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        <!-- End Single Item -->

                        <!-- Pagination -->
                        <div class="row">
                            <div class="col-md-12 pagi-area">
                                <nav aria-label="navigation">
                                    <ul class="pagination">
                                        <li><a href="#"><i class="fas fa-long-arrow-alt-left"></i></a></li>
                                        <li class="active"><a href="#">1</a></li>
                                        <li><a href="#">2</a></li>
                                        <li><a href="#">3</a></li>
                                        <li><a href="#"><i class="fas fa-long-arrow-alt-right"></i></a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Blog -->
    @stop
