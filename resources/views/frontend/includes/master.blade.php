  <!-- Start Header Top
  ============================================= -->
  <div class="top-bar-area inline inc-border">
      <div class="container">
          <div class="row">
              <div class="col-md-7 address-info text-left">
                  <div class="info box">
                      <ul>
                          <li>
                              <i class="fas fa-map-marker-alt"></i>
                              <p>{{ $location->value }}</p>
                          </li>
                          <li>
                              <i class="fas fa-envelope-open"></i>
                              <p>{{ $gmail->value }}</p>
                          </li>
                          <li>
                              <i class="fas fa-phone"></i>
                              <p>{{ $mobile->value }}</p>
                          </li>
                      </ul>
                  </div>
              </div>
              <div class="col-md-5 info-right">
                  <div class="item-flex border-less">
                      <div class="social">
                          <ul>
                              <li>
                                  <a href="#"><i class="fab fa-facebook-f"></i></a>
                              </li>
                              <li>
                                  <a href="#"><i class="fab fa-twitter"></i></a>
                              </li>
                              <li>
                                  <a href="#"><i class="fab fa-pinterest"></i></a>
                              </li>
                              <li>
                                  <a href="#"><i class="fab fa-google-plus-g"></i></a>
                              </li>
                          </ul>
                      </div>
                      <div class="language-switcher">
                          <div class="dropdown">
                              <button class="dropdown-toggle" type="button" data-toggle="dropdown">
                                  ENG
                                  <span class="fas fa-angle-down"></span>
                              </button>
                              <ul class="dropdown-menu">
                                  <li><a href="#">ENG</a></li>
                                  <li><a href="#">AZE</a></li>
                              </ul>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!-- End Header Top -->
  <!-- Header
============================================= -->
  <header id="home">
      <!-- Start Navigation -->
      <nav class="navbar navbar-default active-border-top attr-border navbar-sticky bootsnav">
          <!-- Start Top Search -->
          <div class="container">
              <div class="row">
                  <div class="top-search">
                      <div class="input-group">
                          <form action="#">
                              <input type="text" name="text" class="form-control" placeholder="Search">
                              <button type="submit">
                                  <i class="fas fa-search"></i>
                              </button>
                          </form>
                      </div>
                  </div>
              </div>
          </div>
          <!-- End Top Search -->

          <div class="container">

              <!-- Start Atribute Navigation -->
              <div class="attr-nav">
                  <ul>
                      <li class="search"><a href="#"><i class="fa fa-search"></i></a></li>
                      <li class="side-menu"><a href="#"><i class="fa fa-bars"></i></a></li>
                  </ul>
              </div>
              <!-- End Atribute Navigation -->

              <!-- Start Header Navigation -->
              <div class="navbar-header">
                  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                      <i class="fa fa-bars"></i>
                  </button>
                  <a class="navbar-brand" href="{{ route('main') }}">
                      <img src="{{ asset('frontend/assets/img/logo1.png') }}" class="logo" alt="Logo">
                  </a>
              </div>
              <!-- End Header Navigation -->

              <!-- Collect the nav links, forms, and other content for toggling -->
              <div class="collapse navbar-collapse" id="navbar-menu">
                  <ul class="nav navbar-nav navbar-right" data-in="#" data-out="#">
                      <li>
                          <a href="{{ route('main') }}">@lang('translate.home')</a>
                      </li>
                      <li class="dropdown">
                          <a href="#" class="dropdown-toggle active" data-toggle="dropdown">@lang('translate.company')</a>
                          <ul class="dropdown-menu">
                              <li>
                                  <a href="{{ route('about') }}">@lang('translate.about')</a>
                              </li>
                              <li><a href="{{ route('contact') }}">@lang('translate.contact')</a></li>
                          </ul>
                      </li>
                      <li>
                          <a href="{{ route('gallery') }}">@lang('translate.gallery')</a>
                      </li>
                      <li class="dropdown">
                          <a href="{{ route('services') }}" class="dropdown-toggle active"
                              data-toggle="dropdown">@lang('translate.services')</a>
                      </li>
                      <li>
                          <a href="{{ route('team') }}">@lang('translate.team')</a>
                      </li>
                      <li>
                          <a href="{{ route('blog') }}">@lang('translate.blog')</a>
                      </li>
                      <li>
                          <a href="{{ route('contact') }}">@lang('translate.contact')</a>
                      </li>
                  </ul>
              </div><!-- /.navbar-collapse -->
          </div>

          <!-- Start Side Menu -->
          <div class="side">
              <a href="#" class="close-side"><i class="fa fa-times"></i></a>
              <div class="widget">
                  <h4 class="title">@lang('translate.about')</h4>
                  <p>
                      Arrived compass prepare an on as. Reasonable particular on my it in sympathize. Size now
                      easy eat hand how. Unwilling he departure elsewhere dejection at. Heart large seems may
                      purse means few blind.
                  </p>
              </div>
              <div class="widget address">
                  <h4 class="title">@lang('translate.address')</h4>
                  <ul>
                      <li>
                          <i class="fas fa-phone"></i>
                          {{ $mobile->value }}
                      </li>
                      <li>
                          <i class="fas fa-map-marker-alt"></i>
                          {{ $location->value }}
                      </li>
                      <li>
                          <i class="fas fa-envelope-open"></i>
                          {{ $gmail->value }}
                      </li>
                  </ul>
              </div>
              <div class="widget opening-hours">
                  <h4>@lang('translate.opening_hours')</h4>
                  <ul>
                      <li>
                          Mon - Fri <span>{{ $hours->value }}</span>
                      </li>
                  </ul>
              </div>
              <div class="widget social">
                  <h4 class="title">@lang('translate.connect_with_us')</h4>
                  <ul class="link">
                      <li class="facebook"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                      <li class="twitter"><a href="#"><i class="fab fa-twitter"></i></a></li>
                      <li class="pinterest"><a href="#"><i class="fab fa-pinterest"></i></a></li>
                      <li class="dribbble"><a href="#"><i class="fab fa-dribbble"></i></a></li>
                  </ul>
              </div>
          </div>
          <!-- End Side Menu -->

      </nav>
      <!-- End Navigation -->

  </header>
  <!-- End Header -->
