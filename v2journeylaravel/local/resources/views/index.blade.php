@php
$sitesetting = DB::Table('site_setting')->where('id',1)->first();
@endphp
@include('header')
      <!--================= Hero Area =================-->
      <section
        class="z-index-common hero-layout3 overflow-clip"
        data-bg-src="{{url('')}}/assets/img/hero/hero-layout3-bg.png"
      >
        <div class="container">
          <div class="row gy-5 justify-content-between align-items-center">
            <div class="col-lg-6">
              <div class="hero-content">
                <span class="sec-subtitle text-capitalize mb-2"
                  >make your trip</span
                >
                <h1 class="sec-title text-white-color">
                  Find your <span class="text-theme-color">next</span> holiday
                </h1>
                <div
                  class="d-flex justify-content-center justify-content-lg-start mt-3 mt-md-4 fade-anim"
                  data-delay="0.76"
                  data-direction="top"
                >
                  <a href="{{url('destinations')}}" class="vs-btn style8">explore more</a>
                </div>
              </div>
            </div>
            <div
              class="col-lg-6 fade-anim"
              data-delay="0.76"
              data-direction="right"
            >
              <div class="trip-booking">
                <div class="booking-header">
                  <h5 class="title">Let's Plan Your Dream Trip Together</h5>
                  <figure class="avatar d-inline-block">
                    <img
                      src="{{url('')}}/assets/img/hero/booking-avatar.png"
                      alt="avatar"
                    />
                  </figure>
                </div>


                <form method="POST" action="{{ route('contact.store') }}" class="row gx-2">
                  @csrf
                  <div class="col-12 form-group">
                    <label for="destination">Your Name</label>
                    <div class="form-control-wrapper destination">
                      <input
                        type="text"
                        id="destination"
                        placeholder="Your Name"
                        class="form-control"
                        name="name"
                        required
                      />
                    </div>
                  </div>
                  <div class="col-12 form-group">
                    <label for="destination">Your Email</label>
                    <div class="form-control-wrapper destination">
                      <input
                        type="email"
                        name="email"
                        id="destination"
                        placeholder="Your Email"
                        class="form-control"
                        required
                      />
                    </div>
                  </div>
                  <div class="col-12 form-group">
                    <label for="destination">Your Mobile</label>
                    <div class="form-control-wrapper destination">
                      <input
                        name="mobile"
                        type="number"
                        id="destination"
                        placeholder="Your Mobile"
                        class="form-control"
                        required
                      />
                    </div>
                  </div>
                  <div class="col-12 form-group">
                    <label for="destination">Your Subject</label>
                    <div class="form-control-wrapper destination">
                      <input
                        name="subject"
                        type="text"
                        id="destination"
                        placeholder="Your Subject"
                        class="form-control"
                        required
                      />
                    </div>
                  </div>
                  <div class="col-12 form-group">
                    <label for="destination">Your Message</label>
                    <div class="form-control-wrapper destination">
                      <textarea
                      name="message"
                      class="form-control"
                      placeholder="Your Message..."
                      required
                    ></textarea>
                  </div>

                  <div class="col-12 form-group">
                    <button type="submit"  name="submit" class="vs-btn style7 w-100">
                      Book NoW
                    </button>
                  </div>
                </form>


              </div>
            </div>
          </div>
        </div>
      </section>
      <!--================= Hero Area end =================-->

      <!--================= Destination Area start =================-->
      <section class="vs-about position-relative space">
        <img
          src="{{url('')}}/assets/img/icons/plain-globe.png"
          alt="plain-globe"
          class="about-icon-1 animate-parachute"
        />
        <img
          src="{{url('')}}/assets/img/icons/map.png"
          alt="plain-globe"
          class="about-icon-2 animate-parachute"
        />
        <div class="container">
          <div class="row">
            <div class="col-lg-auto mx-auto">
              <div class="title-area text-center">
                <h2 class="sec-title fade-anim" data-direction="bottom" style="">About V2Journey
                </h2>
              </div>
            </div>
          </div>
          <div class="row g-4 align-items-center">
            <div class="col-md-6 order-1 order-md-0">
              <div class="about-info-area">
                <div class="title-area mb-4">
                  <span class="sec-subtitle text-capitalize"
                    >Explore our trip</span
                  >
                  <h2 class="sec-title">Discover luxury tour thailand</h2>
                </div>
                <div class="about-info">
                  <p>
                    Blienum nhaedrum torquatos nec eul, vis detraxit periculis
                    exnihil is in mei. Xei an periculau ripidis, fincarte
                    Dlienum phaed is tours hack mdei Lei hincartem eiest.
                  </p>
                  <div class="services-lists">
                    <ul class="custom-ul">
                      <li class="fade-anim" data-delay="0.30">
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          width="18"
                          height="16"
                          viewBox="0 0 18 16"
                          fill="none"
                        >
                          <path
                            d="M7.99949 15.7247C7.94644 15.7247 7.89396 15.7137 7.84536 15.6924C7.79675 15.6712 7.75308 15.6401 7.71707 15.6011L0.102184 7.36399C0.0514209 7.30907 0.0177684 7.24055 0.00534479 7.16681C-0.0070788 7.09306 0.00226539 7.0173 0.0322339 6.94878C0.0622023 6.88026 0.111495 6.82197 0.174079 6.78104C0.236663 6.7401 0.309824 6.7183 0.384607 6.71829H4.04999C4.10502 6.7183 4.15942 6.73011 4.2095 6.75293C4.25958 6.77575 4.30418 6.80904 4.3403 6.85056L6.88522 9.77841C7.16026 9.19049 7.69268 8.21156 8.62699 7.01872C10.0082 5.25526 12.5774 2.66176 16.9729 0.320525C17.0579 0.275283 17.1567 0.263542 17.2499 0.287618C17.3431 0.311694 17.4239 0.369838 17.4763 0.450569C17.5287 0.531301 17.5489 0.62875 17.533 0.723675C17.5171 0.8186 17.4661 0.904101 17.3902 0.963294C17.3735 0.97641 15.6787 2.31103 13.7282 4.7556C11.9331 7.00522 9.54691 10.6837 8.37272 15.4325C8.3521 15.516 8.30412 15.5901 8.23645 15.6431C8.16878 15.696 8.08532 15.7248 7.99938 15.7248L7.99949 15.7247Z"
                            fill="currentColor"
                          />
                        </svg>
                        Vietnam include visits
                      </li>
                      <li class="fade-anim" data-delay="0.40">
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          width="18"
                          height="16"
                          viewBox="0 0 18 16"
                          fill="none"
                        >
                          <path
                            d="M7.99949 15.7247C7.94644 15.7247 7.89396 15.7137 7.84536 15.6924C7.79675 15.6712 7.75308 15.6401 7.71707 15.6011L0.102184 7.36399C0.0514209 7.30907 0.0177684 7.24055 0.00534479 7.16681C-0.0070788 7.09306 0.00226539 7.0173 0.0322339 6.94878C0.0622023 6.88026 0.111495 6.82197 0.174079 6.78104C0.236663 6.7401 0.309824 6.7183 0.384607 6.71829H4.04999C4.10502 6.7183 4.15942 6.73011 4.2095 6.75293C4.25958 6.77575 4.30418 6.80904 4.3403 6.85056L6.88522 9.77841C7.16026 9.19049 7.69268 8.21156 8.62699 7.01872C10.0082 5.25526 12.5774 2.66176 16.9729 0.320525C17.0579 0.275283 17.1567 0.263542 17.2499 0.287618C17.3431 0.311694 17.4239 0.369838 17.4763 0.450569C17.5287 0.531301 17.5489 0.62875 17.533 0.723675C17.5171 0.8186 17.4661 0.904101 17.3902 0.963294C17.3735 0.97641 15.6787 2.31103 13.7282 4.7556C11.9331 7.00522 9.54691 10.6837 8.37272 15.4325C8.3521 15.516 8.30412 15.5901 8.23645 15.6431C8.16878 15.696 8.08532 15.7248 7.99938 15.7248L7.99949 15.7247Z"
                            fill="currentColor"
                          />
                        </svg>
                        Discover Ultimate Travel Hack
                      </li>
                      <li class="fade-anim" data-delay="0.60">
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          width="18"
                          height="16"
                          viewBox="0 0 18 16"
                          fill="none"
                        >
                          <path
                            d="M7.99949 15.7247C7.94644 15.7247 7.89396 15.7137 7.84536 15.6924C7.79675 15.6712 7.75308 15.6401 7.71707 15.6011L0.102184 7.36399C0.0514209 7.30907 0.0177684 7.24055 0.00534479 7.16681C-0.0070788 7.09306 0.00226539 7.0173 0.0322339 6.94878C0.0622023 6.88026 0.111495 6.82197 0.174079 6.78104C0.236663 6.7401 0.309824 6.7183 0.384607 6.71829H4.04999C4.10502 6.7183 4.15942 6.73011 4.2095 6.75293C4.25958 6.77575 4.30418 6.80904 4.3403 6.85056L6.88522 9.77841C7.16026 9.19049 7.69268 8.21156 8.62699 7.01872C10.0082 5.25526 12.5774 2.66176 16.9729 0.320525C17.0579 0.275283 17.1567 0.263542 17.2499 0.287618C17.3431 0.311694 17.4239 0.369838 17.4763 0.450569C17.5287 0.531301 17.5489 0.62875 17.533 0.723675C17.5171 0.8186 17.4661 0.904101 17.3902 0.963294C17.3735 0.97641 15.6787 2.31103 13.7282 4.7556C11.9331 7.00522 9.54691 10.6837 8.37272 15.4325C8.3521 15.516 8.30412 15.5901 8.23645 15.6431C8.16878 15.696 8.08532 15.7248 7.99938 15.7248L7.99949 15.7247Z"
                            fill="currentColor"
                          />
                        </svg>
                        secure and flexible payment options
                      </li>
                    </ul>
                  </div>
                  <a
                    href="{{url('about')}}"
                    class="vs-btn style6 text-capitalize"
                    >Read Nore</a
                  >
                </div>
              </div>
            </div>
            <div class="col-md-6 order-0 order-md-1">
              <div class="about-thumb fade-anim" data-direction="right">
                <img
                  src="{{url('')}}/assets/img/about/about-thumb.png"
                  alt="about-thumb"
                  class="w-100"
                />
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--================= Destination Area end =================-->

      <section
        class="vs-destination-style1 bg-third-theme-12 overflow-hidden space"
        data-bg-src="{{url('')}}/assets/img/bg/destination.png"
      >
        <img
          class="des-icon-1 animate-parachute"
          src="{{url('')}}/assets/img/icons/destination-icon-1.png"
          alt="icon"
        />
        <img
          class="des-icon-2 animate-tree"
          src="{{url('')}}/assets/img/icons/destination-icon-2.png"
          alt="icon"
        />
        <div class="container">
          <div class="row">
            <div class="col-lg-auto mx-auto">
              <div class="title-area text-center">
                <span class="sec-subtitle fade-anim" data-direction="top"
                  >Top Destinations</span
                >
                <h2 class="sec-title move-anim">Discover Top Destinations</h2>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-12">
              <div class="destination-box-wrapper">

              @php
              $destination = DB::table('destination')
                  ->where('status', 1)
                  ->orderBy('id', 'desc')
                  ->limit(4)
                  ->get();
              @endphp

              @foreach($destination as $key => $data)
                <div class="destination-box {{$key==0 ? 'active' : ''}} ">
                  <div class="destination-thumb">
                    <img
                      src="{{url('public/media/uploads/destination')}}/{{$data->image}}"
                      alt="destination"
                      class="w-100"
                    />
                  </div>
                  <div class="destination-content">
                    <div class="info">
                      <h4 class="text-white text-capitalize">
                        <a href="{{url('destination-list/'.$data->slug)}}">{{$data->name}}</a>
                      </h4>
                      {{-- <span class="text-theme-color d-block">30% discount</span> --}}
                    </div>
                    <a href="{{url('destination-list/'.$data->slug)}}" class="icon bg-theme-color text-white-color">
                      <i class="fa-solid fa-location-dot"></i>
                    </a>
                  </div>
                </div>
                @endforeach

                
              </div>
              <div class="text-center mt-50 btn-trigger btn-bounce">
                <a href="{{url('destinations')}}" class="vs-btn style4">
                  <span>view more</span>
                </a>
              </div>
            </div>
          </div>
        </div>
      </section>



      <!--================= Destination Gallery Area start =================-->
      <section class="vs-exclusive-gallery bg-title-color overflow-hidden" data-bg-src="{{url('')}}/assets/img/bg/exclusive-gallery-bg.png">
        <div class="vs-exclusive-gallery-wrapper space">
          <div class="has-shape"></div>
          <div class="container-fluid p-0 overflow-hidden">
            <div class="row">
              <div class="col-lg-auto mx-auto">
                <div class="title-area text-center">
                  <span
                    class="sec-subtitle text-capitalize fade-anim"
                    data-direction="top"
                    >exclusive gallery</span
                  >
                  <h2
                    class="sec-title text-white fade-anim"
                    data-direction="bottom"
                  >
                    Unveiling World's
                    <br class="d-md-none" />
                    Top Travel
                    <br class="d-none d-md-block" />
                    Hotspots
                  </h2>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-12">
                <div class="swiper exclusive-gallery-slider">
                  <div class="swiper-wrapper">

                    @php
                    $galleery = DB::Table('gallery')
                                ->where('status',1)
                                ->orderBy('id','desc')
                                ->get();
                    @endphp
                    @foreach($galleery as $data)
                    <div class="swiper-slide">
                      <div class="exclusive-gallery-box">
                        <div class="gallery-thumb">
                          <img
                            src="{{url('public/media/uploads/gallery/'.$data->image)}}"
                            alt="gallery"
                            class="w-100"
                          />
                        </div>
                      </div>
                    </div>
                    @endforeach                    
                  </div>
                  <div class="exclusive-gallery-slider-pagination"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--================= Destination Gallery Area end =================-->

      <section class="vs-cta space" data-bg-src="{{url('')}}/assets/img/bg/cta-bg.png">
        <img
          src="{{url('')}}/assets/img/icons/cloud.png"
          alt="cta-icon"
          class="cta-icon-1 animate-parachute"
        />
        <img
          src="{{url('')}}/assets/img/icons/ballon-sclation.png"
          alt="cta-icon"
          class="cta-icon-2 animate-parachute"
        />
        <div class="container">
          <div class="row">
            <div class="col-lg-auto mx-auto">
              <div class="title-area text-center">
                <span
                  class="sec-subtitle text-capitalize fade-anim"
                  data-direction="top"
                  >Find your tour</span
                >
                <h2
                  class="sec-title text-white fade-anim"
                  data-direction="bottom"
                >
                Have a dream destination in mind?
                  <br class="d-none d-md-block" />
                  Whether want to follow
                </h2>
                <div class="btn-bounce btn-trigger">
                  <a href="{{url('destinations')}}" class="vs-btn style8 mt-5">discover more</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

     

      <section class="vs-tour-package style-3 bg-third-theme-14 space">
        <img src="{{url('')}}/assets/img/icons/rope-clamps.png" alt="icon" class="swing tour-package-icon-1" />
        <img src="{{url('')}}/assets/img/icons/mountan.png" alt="icon" class="tour-package-icon-2"
        />
        <div class="container">
          <div class="row justify-content-between align-items-center">
            <div class="col-md-6 col-lg-6 col-xxl-5">
              <div class="title-area text-center text-md-start">
                <span class="sec-subtitle fade-anim" data-direction="top"
                  >Awesome Tours</span>
                <h2 class="sec-title fade-anim" data-direction="bottom">
                  Awesome Tips with us
                </h2>
              </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xxl-5">
              <div class="swiper-arrow2 tour-packages-navigation justify-content-center justify-content-md-end"
              >
                <button class="tour-packages-next">
                  <svg
                    width="9"
                    height="18"
                    viewBox="0 0 9 18"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      d="M8.08984 16.92L1.56984 10.4C0.799843 9.62996 0.799843 8.36996 1.56984 7.59996L8.08984 1.07996"
                      stroke="#fff"
                      stroke-width="1.5"
                      stroke-miterlimit="10"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                    ></path>
                  </svg>
                </button>
                <button class="tour-packages-prev btn-right">
                  <svg
                    width="9"
                    height="18"
                    viewBox="0 0 9 18"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      d="M0.910156 16.92L7.43016 10.4C8.20016 9.62996 8.20016 8.36996 7.43016 7.59996L0.910156 1.07996"
                      stroke="#EEDCB3"
                      stroke-width="1.5"
                      stroke-miterlimit="10"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                    ></path>
                  </svg>
                </button>
              </div>
            </div>
            <div class="col-12 mt-30 mt-md-0 fade-anim" data-direction="left">
              <div class="swiper tour-package-slider">
                <div class="swiper-wrapper">

                  @php
                    $packages = DB::Table('package')
                                ->where('status',1)
                                ->orderBy('id','desc')
                                ->get();
                    @endphp
                    @foreach($packages as $data)
                    @php
                    $destination = DB::Table('destination')->where('id',$data->destination_id)->first();
                    @endphp
                  <div class="swiper-slide">
                    <div class="tour-package-box bg-white-color">
                      <div class="tour-package-thumb">
                        <img
                          src="{{url('public/media/uploads/package/'.$data->image)}}"
                          alt="tour-package"
                          class="w-100"
                        />
                      </div>
                      <div class="tour-package-content">
                        <h5 class="title line-clamp-2">
                          <a href="{{url('package-details/'.$data->slug)}}"
                            >{{$data->name}}</a
                          >
                        </h5>
                        <div class="pricing-container">
                          <div class="package-info">
                            <span class="package-location">
                              <i class="fa-sharp fa-thin fa-location-dot"></i>
                              {{$destination->name}}
                            </span>
                            <span class="package-time">
                              <i class="fa-sharp fa-thin fa-clock"></i>
                              {{$data->duration}} - Days
                            </span>
                          </div>
                          <div class="price-info">
                            {{-- <span class="price-off text-white-color ff-poppins">50% off</span> --}}
                            <div class="price">
                              <h6 class="fs-30 ff-rubik" style="font-size: 20px;">{!! currency_simble($data->price) !!}</h6>
                              <del class="fs-sm ff-rubik">{!! currency_simble($data->cutprice) !!}</del>
                            </div>
                          </div>
                        </div>
                        <a href="{{url('package-details/'.$data->slug)}}" class="vs-btn style7 w-100"
                          >Book Now</a
                        >
                      </div>
                    </div>
                  </div>

                  @endforeach

                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--================= Tour Package Area end =================-->

      <!--================= Travel-guides end =================-->

      <!--================= Testimonial Section Start =================-->
      <section
        class="testimonial position-relative space"
        data-bg-src="{{url('')}}/assets/img/bg/testimonial-bg.png"
      >
        <img
          src="{{url('')}}/assets/img/icons/eiffel-tower-dark.png"
          alt="testimonial-icon"
          class="testimonial-icon"
        />
        <div class="container">
          <div class="row">
            <div class="col-lg-auto mx-auto">
              <div class="title-area text-center">
                <span class="sec-subtitle fade-anim" data-direction="bottom"
                  >Our Testimonials</span
                >
                <h2 class="sec-title fade-anim" data-direction="top">
                  What Customers Say About Us
                </h2>
              </div>
            </div>
          </div>
          <div class="row fade-anim">
            <div class="col-xl-10 mx-auto">
              <!-- <div class="testimonial-sliders-wrapper"> -->
              <div class="row g-4">
                <div class="col-lg-5">
                  <div class="swiper testimonial-thumbnail-slider">
                    <div class="swiper-wrapper">
                      @php
                    $testimonials = DB::Table('testimonials')
                                ->where('status',1)
                                ->orderBy('id','desc')
                                ->get();
                    @endphp
                    @foreach($testimonials as $data)

                      <div class="swiper-slide">
                        <div class="testimonial-thumbnail">
                          <img
                            src="{{url('public/media/uploads/testimonials/'.$data->image)}}"
                            alt="Person 1"
                            class="w-100"
                          />
                        </div>
                      </div>
                      @endforeach
                    </div>
                  </div>
                </div>
                <div class="col-lg-7 d-lg-flex align-items-lg-center">
                  <!-- Swiper Content Slider -->
                  <div class="swiper testimonial-content-slider">
                    <div class="swiper-wrapper">
                      @php
                    $testimonials = DB::Table('testimonials')
                                ->where('status',1)
                                ->orderBy('id','desc')
                                ->get();
                    @endphp
                    @foreach($testimonials as $data)
                      <div class="swiper-slide">
                        <div class="testimonial-content">
                          <i class="fa-solid fa-quote-left"></i>
                          <div class="rating">
                            <ul class="custom-ul">
                              <li><i class="fa-solid fa-star"></i></li>
                              <li><i class="fa-solid fa-star"></i></li>
                              <li><i class="fa-solid fa-star"></i></li>
                              <li><i class="fa-solid fa-star"></i></li>
                              <li><i class="fa-solid fa-star"></i></li>
                            </ul>
                          </div>
                          <p class="revew">
                            “{{$data->content}}”
                          </p>
                          <div class="author">
                            <h5 class="author-name">{{$data->name}}</h5>
                            <span class="author-degi">{{$data->position}}}</span>
                          </div>
                        </div>
                      </div>
                      @endforeach


                    </div>
                    <div class="swiper-pagination"></div>
                  </div>
                </div>
              </div>

              <!-- </div> -->
            </div>
          </div>
        </div>
      </section>
      <!--================= Testimonial Section End =================-->

      <!--================= Instagram start =================-->
      <div class="instagram-style1 space-top">
        <div class="container">
          <div class="row">
            <div class="col-lg-auto mx-auto">
              <div class="title-area text-center">
                <span class="sec-subtitle fade-anim" data-direction="bottom"
                  >Instagram</span
                >
                <h2 class="sec-title fade-anim" data-direction="top">
                  follow us on instagram
                </h2>
              </div>
            </div>
          </div>
        </div>
        <div class="container-fluid p-0 overflow-hidden">
          <div class="row">
            <div class="col-12">
              <div class="swiper instagram-slider">
                <div class="swiper-wrapper animate-linear">

                  @php
                  $instagallery = DB::Table('instagramgallery')
                                  ->where('status',1)
                                  ->orderBy('id','desc')
                                  ->get();
                  @endphp
                  @foreach($instagallery as $data)
                  <div class="swiper-slide">
                    <div class="instagram-box">
                      <div class="insta-post-thumb">
                        <img
                          src="{{url('public/media/uploads/instagramgallery/'.$data->image)}}"
                          alt="instagram"
                          class="w-100"
                        />
                      </div>
                      <div class="insta-post-content">
                        <a href="{{$sitesetting->instagram}}" target="_blank">
                          <i class="fa-solid fa-link"></i>
                        </a>
                      </div>
                    </div>
                  </div>
                  @endforeach


                  
                </div>
              </div>
            </div>
           
          </div>
        </div>
      </div>
      <!--================= Instagram end =================-->
    </main>

@include('footer')