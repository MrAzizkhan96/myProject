@extends('frontend.layouts.index')
@section('content')
    <!-- Start Site Title
        ============================================= -->
    <div class="site-title-area text-center shadow dark bg-fixed text-light"
        style="background-image: url({{ asset('frontend/assets/img/2440x1578.png') }});">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>BİZİMLƏ ƏLAQƏ</h1>
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
                        <li class="active">ƏLAQƏ</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->

    <!-- Start Contact List
        ============================================= -->
    <div class="contact-list-area text-center">
        <div class="container">
            <div class="row">
                <!-- Start Contact Info -->
                <div class="contact-info">
                    <div class="col-md-4 col-sm-4 single">
                        <div class="item">
                            <div class="icon">
                                <i class="fas fa-mobile-alt"></i>
                            </div>
                            <div class="info">
                                <h4>ZƏNG ET</h4>
                                <span>{{ $mobile->value }}</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 single">
                        <div class="item">
                            <div class="icon">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div class="info">
                                <h4>ÜNVAN</h4>
                                <span>{{ $location->value }}</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 single">
                        <div class="item">
                            <div class="icon">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <div class="info">
                                <h4>MAİL GÖNDƏR</h4>
                                <span>{{ $gmail->value}}</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Contact Info -->
            </div>
        </div>
    </div>
    <!-- End Contact List -->

    <!-- Start Contact
        ============================================= -->
    <div class="contact-area bg-gray default-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-7 col-md-offset-5 contact-form">

                    <div class="info">
                        <h2>Let's lalk about your idea</h2>
                        <p>
                            Our next drew much you with rank. Tore many held age hold rose than our. She literature
                            sentiments any contrasted. Set aware joy sense young now tears china shy.
                        </p>
                        <form action="{{ route('contact_form.index') }}" method="POST" class="contact-form">
                            @csrf
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="form-group">
                                        <input class="form-control" id="name" name="name" placeholder="Ad"
                                            type="text">
                                        <span class="alert-error"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input class="form-control" id="email" name="email" placeholder="Email"
                                            type="email">
                                        <span class="alert-error"></span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input class="form-control" id="phone" name="phone" placeholder="Telefon"
                                            type="text">
                                        <span class="alert-error"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="form-group comments">
                                        <textarea class="form-control" id="comments" name="message" placeholder="Bizə yazın"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="row">
                                    <button type="submit" name="submit" id="submit">
                                        Göndər<i class="fa fa-paper-plane"></i>
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
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- End Contact -->

    <!-- Start Google Maps
        ============================================= -->
    <div class="maps-area">
        <div class="container-full">
            <div class="row">
                <div class="google-maps">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d14767.262289338461!2d70.79414485000001!3d22.284975!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1424308883981"></iframe>
                </div>
            </div>
        </div>
    </div>
    <!-- End Google Maps -->
@stop
