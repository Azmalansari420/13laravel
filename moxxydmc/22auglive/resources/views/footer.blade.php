<style>

</style>
    <footer>
        <div class="tg-footer-area pt-70 include-bg" data-background="https://static.toiimg.com/photo/msid-83890076,width-96,height-65.cms">
           <div class="container">
                <div class="tg-footer-top pb-40">
                    <div class="row">

                        <div class="col-xl-12 col-lg-12 col-md-6 col-sm-6">
                            <div class="tg-footer-widget mb-40" style="display: flex;justify-content: center;">
                                <div class="tg-footer-logo mb-20">
                                    <a href="{{url('')}}"><img src="{{url('public/media/uploads/site_setting/'.@$sitesetting->logo)}}" alt="" style="width:200px;background: white;padding: 8px;border-radius: 6px;"></a>
                                </div>
                                {{-- <p class="mb-20">Pharetra maecenas felis vestibulum convallis mollis nullam congue sit.d rivers of Finland Quebec.</p> --}}
                                
                            </div>
                        </div>

                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                            <div class="tg-footer-widget tg-footer-link ml-80 mb-40">
                                <h3 class="tg-footer-widget-title mb-25">Quick Links</h3>
                                <ul>
                                    <li><a href="{{url('')}}">Home</a></li>
                                    <li><a href="{{url('about')}}">About Us</a></li>
                                    <li><a href="{{url('tour-package')}}">Packages</a></li>
                                    <li><a href="{{url('tours')}}">Tours</a></li>
                                    <li><a href="{{url('blog')}}">Blogs</a></li>
                                    <li><a href="{{url('contact')}}"> Contact Us</a></li>
                                </ul>
                            </div>
                        </div>
                        
                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                            <div class="tg-footer-widget tg-footer-link mb-40">
                                <h3 class="tg-footer-widget-title mb-25">Policy</h3>
                                <ul>
                                    <li><a href="{{url('privacy-policy')}}">Privacy Policy</a></li>
                                    <li><a href="{{url('refund-return-policy')}}">Refund & Return Policy</a></li>
                                    <li><a href="{{url('term-condition')}}">Term & Condition</a></li>
                                    <li><a href="{{url('faq')}}"> Faq's</a></li>
                                    <li><a href="{{url('testimonial')}}"> Testimonials</a></li>
                                    <li><a href="{{url('gallery')}}">Gallery</a></li>
                                </ul>
                            </div>
                        </div>
                        
                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                            <div class="tg-footer-widget tg-footer-link mb-40">
                                <h3 class="tg-footer-widget-title mb-25">Tour Destinations</h3>
                                <ul>
                                    @php
                                    $country = DB::Table('country')->where('status',1)->get();
                                    @endphp
                                    @foreach($country as $data)
                                    <li><a href="{{@$data->slug}}">{{@$data->name}}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>

                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                            <div class="tg-footer-widget tg-footer-info mb-40">
                                <h3 class="tg-footer-widget-title mb-25">Information</h3>
                                <ul>
                                    <li>
                                        <a class="d-flex" href="tel:{{@$sitesetting->mobile}}">
                                            <span class="mr-15">
                                                <i class="fa-sharp text-white fa-solid fa-phone"></i>
                                            </span>{{@$sitesetting->mobile}}
                                        </a>
                                        <a class="d-flex" href="tel:{{@$sitesetting->alt_mobile}}">
                                            <span class="mr-15">
                                                <i class="fa-sharp text-white fa-solid fa-phone"></i>
                                            </span>{{@$sitesetting->alt_mobile}}
                                        </a>
                                    </li>
                                    <br>
                                    <li>
                                        <a class="d-flex" href="mailto:{{@$sitesetting->email}}">
                                            <span class="mr-15">
                                                <i class="fa-sharp text-white fa-solid fa-envelope"></i>
                                            </span>
                                            {{@$sitesetting->email}}
                                        </a>
                                        <a class="d-flex" href="mailto:{{@$sitesetting->alt_email}}">
                                            <span class="mr-15">
                                                <i class="fa-sharp text-white fa-solid fa-envelope"></i>
                                            </span>
                                            {{@$sitesetting->alt_email}}
                                        </a>
                                    </li>
                                    <li>
                                        <a class="d-flex" href="https://www.google.com/maps/@41.6758525,-86.2531698,18.17z">
                                            <span class="mr-15">
                                                <svg width="20" height="24" viewBox="0 0 20 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M19.0013 10.0608C19.0013 16.8486 10.3346 22.6668 10.3346 22.6668C10.3346 22.6668 1.66797 16.8486 1.66797 10.0608C1.66797 7.74615 2.58106 5.52634 4.20638 3.88965C5.83169 2.25297 8.03609 1.3335 10.3346 1.3335C12.6332 1.3335 14.8376 2.25297 16.4629 3.88965C18.0882 5.52634 19.0013 7.74615 19.0013 10.0608Z" stroke="white" stroke-width="1.73333" stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M10.3346 12.9699C11.9301 12.9699 13.2235 11.6674 13.2235 10.0608C13.2235 8.45412 11.9301 7.15168 10.3346 7.15168C8.73915 7.15168 7.44575 8.45412 7.44575 10.0608C7.44575 11.6674 8.73915 12.9699 10.3346 12.9699Z" stroke="white" stroke-width="1.73333" stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                            </span>
                                            {!! @$sitesetting->address !!}
                                        </a>
                                    </li>


                                    
                                </ul>
                                
                                <div class="tg-footer-social">
                                    <a href="{{@$sitesetting->facebook}}"><i class="fa-brands fa-facebook-f"></i></a>
                                    <a href="{{@$sitesetting->twitter}}"><i class="fa-brands fa-twitter"></i></a>
                                    <a href="{{@$sitesetting->instagram}}"><i class="fa-brands fa-instagram"></i></a>
                                    <a href="{{@$sitesetting->youtube}}"><i class="fa-brands fa-youtube"></i></a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="tg-footer-copyright text-center">
                <span>
                    Copyright <a href="{{url('')}}">© {{env('website_name')}}</a> |  All Right Reserved
                </span>
            </div>
        </div>
    </footer>
    <!-- footer-area-end -->









<div id="enquiryModal" class="modal">
  <div class="modal-content">
    <span class="close" onclick="close_modal()">&times;</span>
    <h2>Enquiry Form</h2>
    <div class="tg-contact-form tg-tour-about-review-form">
        <div class="tg-contact-content-wrap mb-30">
            <form action="" id="quickInquiryForm" name="quickInquiryForm" novalidate="novalidate">
                <input type="hidden" name="_token" value="JCvVR2t66Mklvw5zlDAPXx4w15gvRYCvFpWy94Km">
                <div class="form-group row qe_tcf">
                    <label for="inputEmail4" class="col-sm-3 col-form-label">Tour Id</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="tour_coe" name="tour_coe" value="" required="required" readonly="">
                        <input type="hidden" id="subject" name="tour_id" value="212">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputEmail4" class="col-sm-3 col-form-label">Name</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="customer_name" id="customer_name" required="required">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputEmail4" class="col-sm-3 col-form-label">Mobile No</label>
                    <div class="col-sm-9">
                        <input type="number" class="form-control" id="mobile_no" name="mobile_no" required="required">
                    </div>

                </div>
                <div class="form-group row">
                    <label for="inputEmail4" class="col-sm-3 col-form-label">Email Id</label>
                    <div class="col-sm-9">
                        <input type="email" class="form-control" name="email" id="email" required="required">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputEmail4" class="col-sm-3 col-form-label">Interested Date</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="interested_date" id="interested_date" required="required">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputEmail4" class="col-sm-3 col-form-label">No. Adult</label>
                    <div class="col-sm-9">
                        <input type="number" class="form-control" name="adult" id="adult" required="required">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputEmail4" class="col-sm-3 col-form-label">No. Child</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="child" id="child" required="required">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword4" class="col-sm-3 col-form-label">Message</label>
                    <div class="col-sm-9">
                        <textarea name="message" id="message" cols="30" rows="4" class="form-control"></textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-9 offset-sm-3">
                        <button type="submit" class="btn btn-purple btn-sm">Submit</button>
                    </div>

                </div>
                
            </form>
        </div>
    </div>
  </div>
</div>









<style>
   

    #social-sidebar {
      position: fixed;
      top: 50%;
      left: 0;
      transform: translateY(-50%);
      z-index: 1000;
    }

    #social-sidebar a {
      display: flex;
      align-items: center;
      justify-content: center;
      width: 40px;
      height: 40px;
      color: white;
      font-size: 18px;
      transition: all 0.3s ease;
      margin: 5px 0;
      text-decoration: none;
    }

    #social-sidebar a:hover {
      opacity: 0.8;
    }

    #social-sidebar .facebook { background: #3b5998; }
    #social-sidebar .twitter { background: #1da1f2; }
    #social-sidebar .whatsapp { background: #25d366; }
    #social-sidebar .instagram { background: #e1306c; }
    #social-sidebar .youtube { background: #ff0000; }
  </style>

 <div id="social-sidebar">
    <a class="facebook" href="{{@$sitesetting->facebook}}"><i class="fab fa-facebook-f"></i></a>
    <a class="twitter" href="{{@$sitesetting->twitter}}"><i class="fab fa-twitter"></i></a>
    <a class="whatsapp" href="https://wa.me/{{ preg_replace('/[^0-9]/', '', @$sitesetting->whatsapp) }}" target="_blank">
        <i class="fab fa-whatsapp"></i> 
    </a>

    <a class="instagram" href="{{@$sitesetting->instagram}}"><i class="fab fa-instagram"></i></a>
    <a class="youtube" href="{{@$sitesetting->youtube}}"><i class="fab fa-youtube"></i></a>
  </div>








    <!-- JS here -->
    <script src="{{url('')}}/assets/js/vendor/jquery.js"></script>
    <script src="{{url('')}}/assets/js/bootstrap.min.js"></script>
    <script src="{{url('')}}/assets/js/isotope.pkgd.min.js"></script>
    <script src="{{url('')}}/assets/js/imagesloaded.pkgd.min.js"></script>
    <script src="{{url('')}}/assets/js/jquery.magnific-popup.min.js"></script>
    <script src="{{url('')}}/assets/js/jquery.odometer.min.js"></script>
    <script src="{{url('')}}/assets/js/jquery.appear.js"></script>
    <script src="{{url('')}}/assets/js/swiper-bundle.min.js"></script>
    <script src="{{url('')}}/assets/js/flatpickr.js"></script>
    <script src="{{url('')}}/assets/js/nice-select.js"></script>
    <script src="{{url('')}}/assets/js/ajax-form.js"></script>
    <script src="{{url('')}}/assets/js/wow.min.js"></script>
    <script src="{{url('')}}/assets/js/main.js"></script>



<script>
  function open_model(subjectText) {
    document.getElementById('subject').value = subjectText;
    document.getElementById('enquiryModal').style.display = 'block';
  }

  function close_modal() {
    document.getElementById('enquiryModal').style.display = 'none';
  }

  // Optional: Close modal on outside click
  window.onclick = function(event) {
    const modal = document.getElementById('enquiryModal');
    if (event.target === modal) {
      modal.style.display = "none";
    }
  }
</script>




</body>
</html>

