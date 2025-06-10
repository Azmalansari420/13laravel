@php

$sitesetting = DB::Table('site_setting')->where('id',1)->first();

@endphp
    <footer
      class="vs-footer-style1"
      data-bg-src="{{url('')}}/assets/img/footer/footer-style1-bg.png"
    >
      <div class="footer-top space-top">
        <div class="container">
          <div class="row gx-4">
            <div class="col-12">
              <div
                class="footer-cta bg-third-theme-color fade-anim"
                data-bg-src="{{url('')}}/assets/img/footer/footer-cta-bg.png"
              >
                <div class="row g-4 align-items-center">
                  <div class="col-lg-8">
                    <div class="cta-contact-items">
                      <div class="contact-item">
                        <span class="icon">
                          <i class="fa-light fa-location-dot"></i>
                        </span>
                        <div class="info">
                          <h5 class="info-title text-white-color">Location</h5>
                          <p>{{$sitesetting->address}}</p>
                        </div>
                      </div>
                      <div class="contact-item">
                        <span class="icon">
                          <i class="fa-sharp fa-light fa-phone-rotary"></i>
                        </span>
                        <div class="info">
                          <h5 class="info-title text-white-color">
                            Contact Us
                          </h5>
                          <p>
                            <a href="mailto:{{$sitesetting->email}}"
                              >{{$sitesetting->email}}</a
                            >
                            <a href="tel:{{$sitesetting->mobile}}">{{$sitesetting->mobile}}</a>
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div
                    class="col-lg-4 d-flex justify-content-center justify-content-lg-end btn-trigger btn-bounce"
                  >
                    <a href="{{url('contact')}}" class="vs-btn style6">
                      <span>booking now</span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="footer-center space-extra">
        <div class="container">
          <div class="row gx-4 gy-4 gx-xl-2 justify-content-between">
            <div class="col-md-6 col-lg-4 col-xl-4">
              <div class="footer-widgets">
                <a href="" class="logo">
                  <img src="{{url('')}}/assets/logo.png" alt="logo" style="background: white;width: 50%;border-radius: 10px;" />
                </a>
                <div class="social-media">
                  <ul class="custom-ul">
                    <li>
                      <a href="{{$sitesetting->facebook}}" target="_blank"
                        ><i class="fa-brands fa-facebook-f"></i
                      ></a>
                    </li>
                    <li>
                      <a href="{{$sitesetting->twitter}}" target="_blank"
                        ><i class="fa-brands fa-x-twitter"></i
                      ></a>
                    </li>
                    <li>
                      <a href="{{$sitesetting->instagram}}" target="_blank"
                        ><i class="fa-brands fa-instagram"></i
                      ></a>
                    </li>
                    <li>
                      <a href="{{$sitesetting->youtube}}" target="_blank"
                        ><i class="fa-brands fa-youtube"></i
                      ></a>
                    </li>
                  </ul>
                </div>

                <p class="mt-4 mb-3 text-color-5">
                  Stay connected for future updates.
                </p>
                <div class="newsletter">
                  <form action="" class="w100">
                    <input
                      type="email"
                      class="form-control"
                      placeholder="Enter Email Address"
                    />
                    <button type="submit" class="text-uppercase text-color-5">
                      <i class="fa-solid fa-angles-right"></i>
                      <span>Subscribe now</span>
                    </button>
                  </form>
                </div>
              </div>
            </div>
            <div class="col-lg-5 col-xl-4 order-md-3 order-lg-2">
              <div class="footer-widgets">
                <h5 class="widgets-title text-white-color text-capitalize">
                  Useful Links
                </h5>
                <div class="row gx-xl-2 g-2">
                  <div class="col-md-6">
                    <div class="footer-links">
                      <ul class="custom-ul">
                        <li>
                          <a href="{{url('')}}">
                            <i class="fa-solid fa-angles-right"></i>
                            Home
                          </a>
                        </li>
                        <li>
                          <a href="{{url('about')}}">
                            <i class="fa-solid fa-angles-right"></i>
                            About Us
                          </a>
                        </li>
                        <li>
                          <a href="{{url('contact')}}">
                            <i class="fa-solid fa-angles-right"></i>
                            Contact Us
                          </a>
                        </li>
                        <li>
                          <a href="{{url('destinations')}}">
                            <i class="fa-solid fa-angles-right"></i>
                            Destinations
                          </a>
                        </li>
                        <li>
                          <a href="{{url('blog')}}">
                            <i class="fa-solid fa-angles-right"></i>
                            Blog
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                  
                  <div class="col-md-6">
                    <div class="footer-links">
                      <ul class="custom-ul">
                        <li>
                          <a href="{{url('packages')}}">
                            <i class="fa-solid fa-angles-right"></i>
                            Packages
                          </a>
                        </li>
                        <li>
                          <a href="{{url('gallery')}}">
                            <i class="fa-solid fa-angles-right"></i>
                            Gallery
                          </a>
                        </li>
                        <li>
                          <a href="{{url('faq')}}">
                            <i class="fa-solid fa-angles-right"></i>
                            Faq's
                          </a>
                        </li>
                        <li>
                          <a href="{{url('privacy-policy')}}">
                            <i class="fa-solid fa-angles-right"></i>
                            Privacy Policy
                          </a>
                        </li>
                        <li>
                          <a href="{{url('term-condition')}}">
                            <i class="fa-solid fa-angles-right"></i>
                            Term & Condition
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-3 col-xl-3 order-md-2 order-lg-3">
              <div class="footer-widgets">
                <h5 class="widgets-title text-white-color text-capitalize">
                  instagram
                </h5>
                <div class="instagram">
                  @php
                  $instagallery = DB::Table('instagramgallery')
                                  ->where('status',1)
                                  ->orderBy('id','desc')
                                  ->limit('6')
                                  ->get();
                  @endphp
                  @foreach($instagallery as $data)
                  <a href="https://www.instagram.com/" target="_blank">
                    <img
                      src="{{url('public/media/uploads/instagramgallery/'.$data->image)}}"
                      alt="instagram-1"
                      class="w-100"
                    />
                  </a>
                  @endforeach
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="footer-bottom bg-third-theme-color">
        <div class="container">
          <div class="row">
            <div class="col-md-6 order-2 order-md-1">
              <p class="footer-copyright text-center text-md-start">
                © <span class="current-year"></span>
                <a
                  href=""
                  title="Develop by <?=env('website_name') ?>"
                  class="text-theme-color"
                  ><?=env('website_name') ?></a
                >, All Rights Reserved by <a href="" ><?=env('website_name') ?></a>
              </p>
            </div>
            <div class="col-md-6 order-1 order-md-2">
              <div class="footer-menu">
                <ul
                  class="custom-ul justify-content-center justify-content-md-end"
                >
                  <!-- <li><a href="">About Us</a></li>
                  <li><a href="">Faq’s</a></li>
                  <li><a href="">Team</a></li> -->
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!-- ================= Footer End ================= -->



<style>
    .float-wa {
            position: fixed;
            width: 60px;
            height: 60px;
            bottom: 60px;
            left: 30px;
            /*background-color: #0C9;*/
            color: #FFF;
            border-radius: 50px;
            text-align: center;
            /*box-shadow: 2px 2px 3px #999;*/
            z-index: 999;
        }
        .my-float {
    margin-top: 11px;
    color: #ffffff;
}
  </style>

  <a href="https://wa.me/91{{$sitesetting->mobile}}" target="_blank" class="float-wa">
        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/6b/WhatsApp.svg/2044px-WhatsApp.svg.png" class="my-float">
    </a>







    <!-- ================= Main Section Wrapper End ================= -->
    <a href="#" class="scrollToTop scroll-btn"
      ><i class="far fa-arrow-up"></i
    ></a>
    <!-- ***************** Code End  Here ***************** -->
    <!--================= All Js File ================= -->
    <!-- Jquery -->
    <script src="{{url('')}}/assets/js/vendor/jquery-3.6.0.min.js"></script>
    <!-- Jquery UI -->
    <script src="{{url('')}}/assets/js/jquery-ui.min.js"></script>
    <!-- Jquery UI -->
    <script src="{{url('')}}/assets/js/moment.min.js"></script>
    <!-- Jquery UI -->
    <script src="{{url('')}}/assets/js/daterangepicker.min.js"></script>
    <!-- Swiper Slider -->
    <script src="{{url('')}}/assets/js/swiper-bundle.min.js"></script>
    <!-- Bootstrap -->
    <script src="{{url('')}}/assets/js/bootstrap.min.js"></script>
    <!-- WOW.js Animation -->
    <script src="{{url('')}}/assets/js/wow.min.js"></script>
    <!-- Magnific Popup -->
    <script src="{{url('')}}/assets/js/jquery.magnific-popup.min.js"></script>
    <!-- Image Loaded Jquery -->
    <script src="{{url('')}}/assets/js/imagesloaded.pkgd.min.js"></script>
    <!-- Odometer JS -->
    <script src="{{url('')}}/assets/js/odometer.min.js"></script>
    <script src="{{url('')}}/assets/js/viewport.jquery.js"></script>
    <!-- Gsap -->
    <script src="{{url('')}}/assets/js/gsap.min.js"></script>
    <!-- ScrollTrigger -->
    <script src="{{url('')}}/assets/js/ScrollTrigger.min.js"></script>
    <!-- ScrollToPlugin -->
    <script src="{{url('')}}/assets/js/ScrollToPlugin.min.js"></script>
    <!-- SplitText -->
    <script src="{{url('')}}/assets/js/SplitText.min.js"></script>

    <!-- Main Js File -->
    <script src="{{url('')}}/assets/js/main.js"></script>
  </body>
</html>
