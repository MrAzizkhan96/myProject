 <!-- Start Footer
    ============================================= -->
 <footer class="bg-dark text-light">
     <div class="container">
         <div class="row">
             <div class="f-items default-padding">
                 <!-- Single Item -->
                 <div class="col-md-4 item">
                     <div class="f-item about">
                         <a href="{{ route('main') }}">
                             <img src="{{ asset('frontend/assets/img/logo-light.png') }}" alt="Logo">
                         </a><br><br>
                         <p> {{ $location->value }}</p>
                         <ul>
                             <li>
                                 <span>İş Saatları: </span> {{ $hours->value }}
                             </li>
                             <li>
                                 <span>Email: </span> <a href="mailto:support@validtheme.com"> {{ $gmail->value }}</a>
                             </li>
                         </ul>
                         <h2><i class="fas fa-phone"></i> +123 456 7890</h2>
                     </div>
                 </div>
                 <!-- End Single Item -->
                 <!-- Single Item -->
                 <div class="col-md-4 item">
                     <div class="f-item link">
                         <h4>XİDMƏTLƏRİMİZ</h4>
                         <ul>
                            @foreach($services as $service)
                             <li>
                                 <a href="#">{{ $service->title }}</a>
                             </li>
                            @endforeach                             
                         </ul>
                     </div>
                 </div>
                 <!-- End Single Item -->
                 <!-- Single Item -->
                 <div class="col-md-4 item">
                     <div class="f-item recent-post">
                         <h4>ƏN SON PAYLAŞILANLAR</h4>
                         <ul>
                             <li>
                                 <div class="info">
                                     <a href="#">Debating all she mistaken indulged believed provided declared</a>
                                     <div class="meta-title">
                                         <span class="post-date">12 Nov, 2019</span> - By <a href="#">{{ $author->value }}</a>
                                     </div>
                                 </div>
                             </li>
                             <li>
                                 <div class="info">
                                     <a href="#">Whence and unable limits. Use off abilities concluded immediate
                                         allowance. </a>
                                     <div class="meta-title">
                                         <span class="post-date">18 Aug, 2019</span> - By <a href="#">{{ $author->value }}</a>
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
 </footer>
 <!-- End Footer -->

 <!-- jQuery Frameworks
    ============================================= -->
 

 </body>

 </html>
