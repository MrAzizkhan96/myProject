@extends('backend.layouts.index')
@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">İdarəetmə paneli</h1>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3 col-6">
                        <div class="small-box bg-primary">
                            <div class="inner">
                                <p>myProject</p>
                            </div>
                            <div class="icon">
                                <i class="fas fa-sitemap"></i>
                            </div>
                            <a href="{{ route('main') }}" class="small-box-footer">Daha çox <i
                                    class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6">
                        <div class="small-box bg-danger">
                            <div class="inner">
                                <p>Adminlər</p>
                            </div>
                            <div class="icon">
                                <i class="fas fa-user-secret"></i>
                            </div>
                            <a href="{{ route('admin.index') }}" class="small-box-footer">Daha çox <i
                                    class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6">
                        <div class="small-box bg-success">
                            <div class="inner">
                                <p>Əlaqə Formu</p>
                            </div>
                            <div class="icon">
                                <i class="fas fa-address-book"></i>
                            </div>
                            <a href="{{ route('contact_form.index') }}" class="small-box-footer">Daha çox <i
                                    class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6">
                        <div class="small-box bg-secondary">
                            <div class="inner">
                                <p>Bannerlər</p>
                            </div>
                            <div class="icon">
                                <i class="fas fa-picture-o"></i>
                            </div>
                            <a href="{{ route('banner.index') }}" class="small-box-footer">Daha çox <i
                                    class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6">
                        <div class="small-box bg-primary">
                            <div class="inner">
                                <p>Haqqımızda</p>
                            </div>
                            <div class="icon">
                                <i class="fas fa-address-card"></i>
                            </div>
                            <a href="{{ route('aboutback.index') }}" class="small-box-footer">Daha çox <i
                                    class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6">
                        <div class="small-box bg-danger">
                            <div class="inner">
                                <p>Bloq</p>
                            </div>
                            <div class="icon">
                                <i class="fas fa-blog"></i>
                            </div>
                            <a href="{{ route('blogback.index') }}" class="small-box-footer">Daha çox <i
                                    class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6">
                        <div class="small-box bg-success">
                            <div class="inner">
                                <p>Təkliflərimiz</p>
                            </div>
                            <div class="icon">
                                <i class="fas fa-star"></i>
                            </div>
                            <a href="{{ route('offer.index') }}" class="small-box-footer">Daha çox <i
                                    class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6">
                        <div class="small-box bg-secondary">
                            <div class="inner">
                                <p>Məqsədlərimiz</p>
                            </div>
                            <div class="icon">
                                <i class="fas fa-sort-numeric-up-alt"></i>
                            </div>
                            <a href="{{ route('our_goal.index') }}" class="small-box-footer">Daha çox <i
                                    class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-primary">
                            <div class="inner">
                                <p>Xidmətlərimiz</p>
                            </div>
                            <div class="icon">
                                <i class="fa fa-qrcode"></i>
                            </div>
                            <a href="{{ route('serviceback.index') }}" class="small-box-footer">Daha çox <i
                                    class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-danger">
                            <div class="inner">
                                <p>Komandamız</p>
                            </div>
                            <div class="icon">
                                <i class="fa fa-users"></i>
                            </div>
                            <a href="{{ route('teamback.index') }}" class="small-box-footer">Daha çox <i
                                    class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-success">
                            <div class="inner">
                                <p>Bloq rəyləri</p>
                            </div>
                            <div class="icon">
                                <i class="fa fa-comment"></i>
                            </div>
                            <a href="{{route('blog_comment.index')}}" class="small-box-footer">Daha çox <i
                                    class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-secondary">
                            <div class="inner">
                                <p>Müştəri rəyləri</p>
                            </div>
                            <div class="icon">
                                <i class="fas fa-comments"></i>
                            </div>
                            <a href="{{ route('customer_review.index') }}" class="small-box-footer">Daha çox <i
                                    class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-primary">
                            <div class="inner">
                                <p>Tez-tez soruşulan suallar</p>
                            </div>
                            <div class="icon">
                                <i class="fa fa-question-circle"></i>
                            </div>
                            <a href="{{ route('faq.index') }}" class="small-box-footer">Daha çox <i
                                    class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-danger">
                            <div class="inner">
                                <p>Qalereya kateqoriyaları</p>
                            </div>
                            <div class="icon">
                                <i class="fas fa-solid fa-list"></i>
                            </div>
                            <a href="{{ route('gallery_category.index') }}" class="small-box-footer">Daha çox <i
                                    class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-success">
                            <div class="inner">
                                <p>Qalereya</p>
                            </div>
                            <div class="icon">
                                <i class="fa fa-images"></i>
                            </div>
                            <a href="{{route('galleryback.index')}}" class="small-box-footer">Daha çox <i
                                    class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-secondary">
                            <div class="inner">
                                <p>Parametrlər</p>
                            </div>
                            <div class="icon">
                                <i class="fa fa-cog"></i>
                            </div>
                            <a href="{{route('setting.index')}}" class="small-box-footer">Daha çox <i
                                    class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div><div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-primary">
                            <div class="inner">
                                <p>Parametr Şəkilləri</p>
                            </div>
                            <div class="icon">
                                <i class="fa fa-cogs"></i>
                            </div>
                            <a href="{{route('setting_image.index')}}" class="small-box-footer">Daha çox <i
                                    class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
        </section>
    </div>

@stop
