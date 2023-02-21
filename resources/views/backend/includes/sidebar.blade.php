 <!-- Brand Logo -->
 <a href="index3.html" class="brand-link">
    <img src="{{ asset('backend/dist/img/AdminLTELogo.png') }}" alt="Admin Logo" class="brand-image img-circle elevation-3"
        style="opacity: .8">
    <span class="brand-text font-weight-light">Admin Panel</span>
</a>

<!-- Sidebar -->
<div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
            <img src="{{ asset('backend/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
            <a href="#" class="d-block">Alexander Pierce</a>
        </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
            data-accordion="false">
            <li class="nav-item menu-open">
                <a href="#" class="nav-link">
                    <p>
                        İdarəetmə paneli
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{route('main')}}" class="nav-link">
                            <i class="fas fa-sitemap"></i> 
                            <p>myProject</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('admin.index')}}" class="nav-link">
                            <i class="fas fa-user-lock"></i> 
                            <p>Adminlər</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('contact_form.index')}}" class="nav-link">
                            <i class="fas fa-address-book"></i> 
                            <p>Əlaqə Formu</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('banner.index')}}" class="nav-link">
                            <i class="fas fa-picture-o"></i> 
                            <p>Bannerlər</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('aboutback.index')}}" class="nav-link">
                            <i class="fas fa-address-card"></i> 
                            <p>Haqqımızda</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('blogback.index')}}" class="nav-link">
                            <i class="fas fa-blog"></i> 
                            <p>Bloq</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('offer.index')}}" class="nav-link">
                            <i class="fas fa-star"></i> 
                            <p>Təkliflərimiz</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('our_goal.index')}}" class="nav-link">
                            <i class="fas fa-sort-numeric-up-alt"></i> 
                            <p>Məqsədlərimiz</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('serviceback.index')}}" class="nav-link">
                            <i class="fas fa-qrcode"></i> 
                            <p>Xidmətlərimiz</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('teamback.index')}}" class="nav-link">
                            <i class="fas fa-users"></i> 
                            <p>Komandamız</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('blog_comment.index')}}" class="nav-link">
                            <i class="fas fa-comment"></i> 
                            <p>Bloq rəyləri</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('customer_review.index')}}" class="nav-link">
                            <i class="fas fa-comments"></i> 
                            <p>Müştəri rəyləri</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('faq.index')}}" class="nav-link">
                            <i class="fas fa-question-circle"></i> 
                            <p>FAQ</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('gallery_category.index')}}" class="nav-link">
                            <i class="fas fa-list"></i> 
                            <p>Qalereya kateqoriyaları</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('galleryback.index')}}" class="nav-link">
                            <i class="fas fa-images"></i> 
                            <p>Qalereya</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('setting.index')}}" class="nav-link">
                            <i class="fa fa-cog"></i>
                            <p>Parametrlər</p> 
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('setting_image.index')}}" class="nav-link">
                            <i class="fa fa-cogs"></i>
                            <p>Parametr Şəkilləri</p> 
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </nav>
</div>