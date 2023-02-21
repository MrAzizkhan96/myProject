@extends('frontend.layouts.index')
@section('content')



    <!-- Start Site Title
        ============================================= -->
    <div class="site-title-area text-center shadow dark bg-fixed text-light"
        style="background-image: url({{asset('frontend/assets/img/2440x1578.png')}});">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Bloq</h1>
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
                        <li><a href="#"><i class="fas fa-home"></i> Blog</a></li>
                        <li><a href="#">Single</a></li>
                        <li class="active">Standard</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->

    <!-- Start Blog
        ============================================= -->
    <div class="blog-area single full-blog default-padding">
        <div class="container">
            <div class="row">
                <div class="blog-items">
                    <div class="blog-content col-md-10 col-md-offset-1">
                        
                        <div class="item">
                            
                            <!-- Start Post Thumb -->
                            <div class="thumb">
                                <img src="{{asset('frontend/blog_images/' . $blog->image)}}" alt="Thumb">
                            </div>
                            <!-- Start Post Thumb -->

                            <div class="info">
                                <div class="date">
                                    <h4>{{ $blog->created_at }}</h4>
                                </div>
                                <h3>{{ $blog->title }}</h3>                                
                                <p> {{ $blog->description }}</p>

                                <!-- Start Post Pagination -->
                                <div class="post-pagi-area">
                                    <a href="#"><i class="fas fa-angle-double-left"></i> Previus Post</a>
                                    <a href="#">Next Post <i class="fas fa-angle-double-right"></i></a>
                                </div>
                                <!-- End Post Pagination -->

                                <!-- Start Post Tag s-->
                                <div class="post-tags share">
                                    <div class="tags">
                                        <span>Tags: </span>
                                        <a href="#">Consulting</a>
                                        <a href="#">Planing</a>
                                        <a href="#">Business</a>
                                        <a href="#">Fashion</a>
                                    </div>
                                </div>
                                <!-- End Post Tags -->

                                <!-- Start Comments Form -->
                                <div class="comments-area">
                                    <div class="comments-title">
                                        <h4>
                                            5 comments
                                        </h4>
                                        <div class="comments-list">
                                            <div class="commen-item">
                                                <div class="avatar">
                                                    <img src="{{asset('frontend/assets/img/800x800.png')}}" alt="Author">
                                                </div>
                                                <div class="content">
                                                    <h5>Jonathom Doe</h5>
                                                    <div class="comments-info">
                                                        <p>July 15, 2018</p> <a href="#"><i
                                                                class="fa fa-reply"></i>Reply</a>
                                                    </div>
                                                    <p>
                                                        Delivered ye sportsmen zealously arranging frankness estimable as.
                                                        Nay any article enabled musical shyness yet sixteen yet blushes.
                                                        Entire its the did figure wonder off.
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="commen-item reply">
                                                <div class="avatar">
                                                    <img src="{{asset('frontend/assets/img/800x800.png')}}" alt="Author">
                                                </div>
                                                <div class="content">
                                                    <h5>Spark Lee</h5>
                                                    <div class="comments-info">
                                                        <p>July 15, 2018</p> <a href="#"><i
                                                                class="fa fa-reply"></i>Reply</a>
                                                    </div>
                                                    <p>
                                                        Delivered ye sportsmen zealously arranging frankness estimable as.
                                                        Nay any article enabled musical shyness yet sixteen yet blushes.
                                                        Entire its the did figure wonder off.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="comments-form">
                                        <div class="title">
                                            <h4>Leave a comments</h4>
                                        </div>
                                        <form action="{{ route('blog_comment.store') }}" class="contact-comments" method="POST">
                                            @csrf
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <!-- Name -->
                                                        <input name="blog_id" class="form-control" value="{{$blog->id}}"
                                                            type="hidden">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <!-- Name -->
                                                        <input name="name" class="form-control" placeholder="Name *"
                                                            type="text">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <!-- Email -->
                                                        <input name="email" class="form-control" placeholder="Email *"
                                                            type="email">
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group comments">
                                                        <!-- Comment -->
                                                        <textarea class="form-control" name="comment" placeholder="Comment"></textarea>
                                                    </div>
                                                    <div class="form-group full-width submit">
                                                        <button type="submit" name="submit">
                                                            Post Comments
                                                        </button>
                                                    </div>
                                                </div>
                                                <div>
                                                    @if ($message = Session::get('success'))
                                                        <div class="alert alert-success">
                                                            <p>{{ $message }}</p>
                                                        </div>
                                                    @elseif($message = Session::get('error'))
                                                        <div style="24px" class="alert alert-danger">
                                                            <p>{{ $message }}</p>
                                                        </div>
                                                    @endif
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <!-- End Comments Form -->
                            </div>
                            
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Blog -->

    <!-- Start Footer
        ============================================= -->
    <footer class="bg-dark text-light">
        <div class="container">
            <div class="row">

                <div class="f-items default-padding">

                    <!-- Single Item -->
                    <div class="col-md-4 item">
                        <div class="f-item about">
                            <img src="{{asset('frontend/assets/img/logo-light.png')}}" alt="Logo">
                            <p>
                                20, floor, Queenslad Victoria Building. 60 california street california USA
                            </p>
                            <ul>
                                <li>
                                    <span>Office Hours: </span> Sat - Thu / 8AM - 10PM
                                </li>
                                <li>
                                    <span>Email: </span> <a href="mailto:support@validtheme.com">support@validtheme.com</a>
                                </li>
                            </ul>
                            <h2><i class="fas fa-phone"></i> +123 456 7890</h2>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="col-md-4 item">
                        <div class="f-item link">
                            <h4>Services</h4>
                            <ul>
                                <li>
                                    <a href="#">Financial Planning</a>
                                </li>
                                <li>
                                    <a href="#">Investment</a>
                                </li>
                                <li>
                                    <a href="#">Lead Generation</a>
                                </li>
                                <li>
                                    <a href="#">Email Marketing</a>
                                </li>
                                <li>
                                    <a href="#">Mutual Funds</a>
                                </li>
                                <li>
                                    <a href="#">Business Services</a>
                                </li>
                                <li>
                                    <a href="#">Social Marketing</a>
                                </li>
                                <li>
                                    <a href="#">Growth Hacking</a>
                                </li>
                                <li>
                                    <a href="#">Markets Research</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="col-md-4 item">
                        <div class="f-item recent-post">
                            <h4>Recent Posts</h4>
                            <ul>
                                <li>
                                    <div class="info">
                                        <a href="#">Debating all she mistaken indulged believed provided declared</a>
                                        <div class="meta-title">
                                            <span class="post-date">12 Nov, 2019</span> - By <a href="#">Author</a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="info">
                                        <a href="#">Whence and unable limits. Use off abilities concluded immediate
                                            allowance. </a>
                                        <div class="meta-title">
                                            <span class="post-date">18 Aug, 2019</span> - By <a href="#">Author</a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- End Single Item -->
                </div>
            </div>
        </div>
        <!-- Start Footer Bottom -->
        <div class="footer-bottom bg-dark-hard text-light">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <p>&copy; Copyright 2019. All Rights Reserved by <a href="#">validthemes</a></p>
                    </div>
                    <div class="col-md-6 text-right link">
                        <ul>
                            <li>
                                <a href="#">Terms of user</a>
                            </li>
                            <li>
                                <a href="#">License</a>
                            </li>
                            <li>
                                <a href="#">Support</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Footer Bottom -->

    @stop
