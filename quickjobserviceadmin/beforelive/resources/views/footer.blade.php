 <!-- Main Footer -->
    <footer class="main-footer style-three" style="background-image: url({{url('')}}/images/background/3.png);">
      <div class="auto-container">
        <!--Widgets Section-->
        <div class="widgets-section">

          {{-- <div class="newsletter-form wow fadeInUp">
            <div class="sec-title light text-center">
              <h2>Subscribe Our Newsletter</h2>
              <div class="text text-white">We don’t send spam so don’t worry.</div>
            </div>
            <form method="post" action="#" id="subscribe-form">
              <div class="form-group">
                <div class="response"></div>
              </div>
              <div class="form-group">
                <input type="email" name="email" class="email" value="" placeholder="Your e-mail" required>
                <button type="button" id="subscribe-newslatters" class="theme-btn btn-style-two">Subscribe</button>
              </div>
            </form>
          </div> --}}

          <div class="row">
            <div class="big-column col-xl-3 col-lg-4 col-md-12">
              <div class="footer-column about-widget">
                <div class="logo"><a href="{{url('')}}"><img src="{{url('public/media/uploads/site_setting/'.$sitesetting->logo)}}" alt=""></a></div>
                <p class="text-white">Quick Job Services – One trusted destination for Government & Private job opportunities across India.</p>
              </div>
            </div>

            <div class="big-column col-xl-9 col-lg-9 col-md-12">
              <div class="row">
                <div class="footer-column col-lg-4 col-md-6 col-sm-12">
                  <div class="footer-widget links-widget">
                    <h4 class="widget-title">Quick Links</h4>
                    <div class="widget-content">
                      <ul class="list">
                        <li><a href="{{url('')}}">Home</a></li>
                        <li><a href="{{url('about')}}">About Us</a></li>
                        <li><a href="{{url('blog')}}">Blog</a></li>
                        <li><a href="{{url('job')}}">Find Job</a></li>
                        <li><a href="{{url('contact')}}">Contact Us</a></li>
                      </ul>
                    </div>
                  </div>
                </div>

                <div class="footer-column col-lg-4 col-md-6 col-sm-12">
                  <div class="footer-widget links-widget">
                    <h4 class="widget-title">Job Categories</h4>
                    <div class="widget-content">
                      <ul class="list">
                        <li><a href="#">Government Sector Jobs </a></li>
                        <li><a href="#">Private Sector Jobs </a></li>
                        <li><a href="#">Pan-India Coverage </a></li>
                      </ul>
                    </div>
                  </div>
                </div>

                <div class="footer-column col-lg-4 col-md-6 col-sm-12">
                  <div class="footer-widget links-widget">
                    <h4 class="widget-title">Contact Us</h4>
                    <div class="widget-content">
                      <ul class="list">
                        <li><a href="tel:{{$sitesetting->mobile}}">{{$sitesetting->mobile}}, {{$sitesetting->alt_mobile}}</a></li>
                        <li><a href="mailto:{{$sitesetting->email}}">{{$sitesetting->email}}, {{$sitesetting->alt_email}}</a></li>
                        <li><a href="#!">{{$sitesetting->address}}</a></li>
                      </ul>
                    </div>
                  </div>
                </div>

              
              </div>
            </div>
          </div>
        </div>
      </div>


      <!--Bottom-->
      <div class="footer-bottom">
        <div class="auto-container">
          <div class="outer-box">
            <div class="copyright-text">© 2021 <a href="#">Quick Job Services</a>. All Right Reserved.</div>
            <div class="social-links">
              <a href="{{$sitesetting->facebook}}"><i class="fab fa-facebook-f"></i></a>
              <a href="{{$sitesetting->twitter}}"><i class="fab fa-twitter"></i></a>
              <a href="{{$sitesetting->instagram}}"><i class="fab fa-instagram"></i></a>
              <a href="{{$sitesetting->youtube}}"><i class="fab fa-youtube"></i></a>
            </div>
          </div>
        </div>
      </div>
      <div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-up"></span></div>
    </footer>
    <!-- End Main Footer -->

  </div><!-- End Page Wrapper -->


  <script src="{{url('')}}/js/jquery.js"></script>
  <script src="{{url('')}}/js/popper.min.js"></script>
  <script src="{{url('')}}/js/chosen.min.js"></script>
  <script src="{{url('')}}/js/bootstrap.min.js"></script>
  <script src="{{url('')}}/js/jquery.fancybox.js"></script>
  <script src="{{url('')}}/js/jquery.modal.min.js"></script>
  <script src="{{url('')}}/js/mmenu.polyfills.js"></script>
  <script src="{{url('')}}/js/mmenu.js"></script>
  <script src="{{url('')}}/js/appear.js"></script>
  <script src="{{url('')}}/js/anm.min.js"></script>
  <script src="{{url('')}}/js/ScrollMagic.min.js"></script>
  <script src="{{url('')}}/js/rellax.min.js"></script>
  <script src="{{url('')}}/js/owl.js"></script>
  <script src="{{url('')}}/js/wow.js"></script>
  <script src="{{url('')}}/js/script.js"></script>

</body>
</html>