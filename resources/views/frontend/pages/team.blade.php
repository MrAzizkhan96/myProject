@extends('frontend.layouts.index')
@section('content')
    <!-- Start Site Title
        ============================================= -->
    <div class="site-title-area text-center shadow dark bg-fixed text-light"
        style="background-image: url({{asset('frontend/assets/img/2440x1578.png')}});">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Team Members</h1>
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
                        <li><a href="#"><i class="fas fa-home"></i> Home</a></li>
                        <li><a href="#">Pages</a></li>
                        <li class="active">Team</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->

    <!-- Start Team
        ============================================= -->
    <div class="team-area default-padding bottom-less">
        <div class="container">
            <div class="row">
                <div class="team-items text-center">
                    <!-- Single Item -->
                    @foreach($teams as $team)
                    <div class="col-md-4 single-item">
                        <div class="item">
                            <div class="thumb">
                                <div class="top-img">
                                    <img src="{{ asset('frontend/team_images/' . $team->image) }}" alt="Thumb">
                                </div>
                                <div class="overlay">
                                    <ul>
                                        <li class="facebook">
                                            <a href="{{ $team->facebook }}"><i class="fab fa-facebook-f"></i></a>
                                        </li>
                                        <li class="twitter">
                                            <a href="{{ $team->twitter }}"><i class="fab fa-twitter"></i></a>
                                        </li>
                                        <li class="pinterest">
                                            <a href="{{ $team->linkedin }}"><i class="fab fa-linkedin-in"></i></a>
                                        </li>
                                        <li class="google-plus">
                                            <a href="{{ $team->gmail }}"><i class="fab fa-google-plus-g"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="info">
                                <div class="overlay">
                                    <h4>{{ $team->employee }}</h4>
                                </div>
                                <span> {{ $team->position }} </span>
                                <p> {{ $team->description }}</p>
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
