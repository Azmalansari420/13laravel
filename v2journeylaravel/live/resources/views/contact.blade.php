@php
$sitesetting = DB::Table('site_setting')->where('id',1)->first();
@endphp

@include('header')

      <!--================= Breadcrumb Area start =================-->
      <section
        class="vs-breadcrumb"
        data-bg-src="{{url('')}}/assets/img/bg/breadcrumb-bg.png"
      >
        <img
          src="{{url('')}}/assets/img/icons/cloud.png"
          alt="vs-breadcrumb-icon"
          class="vs-breadcrumb-icon-1 animate-parachute"
        />
        <img
          src="{{url('')}}/assets/img/icons/ballon-sclation.png"
          alt="vs-breadcrumb-icon"
          class="vs-breadcrumb-icon-2 animate-parachute"
        />
        <div class="container">
          <div class="row text-center">
            <div class="col-12">
              <div class="breadcrumb-content">
                <h1 class="breadcrumb-title">Contact us</h1>
              </div>
              <div class="breadcrumb-menu">
                <ul class="custom-ul">
                  <li>
                    <a href="{{url('')}}">Home</a>
                  </li>
                  <li>Contact Us</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--================= Breadcrumb Area end =================-->

      <!--================= Contact Area Start =================-->
      <section class="vs-contact space">
        <div class="container">
          <div class="row g-4 gx-xl-5 overflow-hidden">
            <div class="col-lg-5">
              <div class="title-area text-start mb-2">
                <span class="sec-subtitle style-2">contact us</span>
                <h2 class="sec-title">Get in touch with us</h2>
              </div>
              <div class="vs-contact-info mt-3 mb-2">
                <p>
                  <span class="text-theme-color fw-bold">Address:</span> {{$sitesetting->address}}</p>
                <div class="vs-contact-list">
                  <div class="contact-item">
                    <span class="icon">
                      <i class="fa-solid fa-phone-volume"></i>
                    </span>
                    <div class="info">
                      <h6 class="info-title">Customer Service :</h6>
                      <p>
                        <a href="tel:{{$sitesetting->mobile}}">{{$sitesetting->mobile}}</a> ,
                        <a href="tel:{{$sitesetting->alt_mobile}}">{{$sitesetting->alt_mobile}}</a>
                      </p>
                    </div>
                  </div>
                  <div class="contact-item">
                    <span class="icon">
                      <i class="fa-light fa-envelope"></i>
                    </span>
                    <div class="info">
                      <h6 class="info-title">careers :</h6>
                      <p>
                        <a href="mailto:{{$sitesetting->email}}">{{$sitesetting->email}}</a> , 
                        <a href="mailto:{{$sitesetting->alt_email}}">{{$sitesetting->alt_email}}</a>
                      </p>
                    </div>
                  </div>
                </div>
                <div class="social-follow">
                  <span>Follow Us :</span>

                  <ul class="custom-ul">
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
                      <a href="{{$sitesetting->facebook}}"><i class="fa-brands fa-facebook"></i></a>
                    </li>
                    <li>
                      <a href="{{$sitesetting->youtube}}"><i class="fa-brands fa-youtube"></i></a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-lg-7">
              @if(session('success'))
                  <p style="color: green;">{{ session('success') }}</p>
              @endif

              
              <form method="POST" action="{{ route('contact.store') }}" class="form-styl4e1 ajax-con1tact" >
                @csrf
                <div class="row">
                  <div class="col-md-6 form-group">
                    <input
                      name="name"
                      type="text"
                      class="form-control"
                      placeholder="Your Name*"
                      required
                      autocomplete="off"
                    />
                  </div>
                  
                  <div class="col-md-6 form-group">
                    <input
                      name="email"
                      type="email"
                      class="form-control"
                      placeholder="Your Email*"
                      required
                    />
                  </div>
                  <div class="col-md-6 form-group">
                    <input
                      name="mobile"
                      type="tel"
                      class="form-control"
                      placeholder="Your Phone*"
                      required
                    />
                  </div>
                  <div class="col-md-6 form-group">
                    <input
                      name="subject"
                      type="text"
                      class="form-control"
                      placeholder="Subject*"
                      required
                    />
                  </div>
                  <div class="col-12 form-group">
                    <textarea
                      name="message"
                      class="form-control"
                      placeholder="Your Message..."
                      required
                    ></textarea>
                  </div>
                  <div class="col-12 form-group mt-2 mb-0">
                    <button name="submit" class="vs-btn" type="submit">Send Message</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </section>
      <!--================= Contact Area end =================-->

      <!--================= Map Area start =================-->
      <div class="map-layout1">
        {!! $sitesetting->map !!}
      </div>
    </main>
    <!-- ================= Footer Start ================= -->
@include('footer')