@include('header')

    <!-- Banner Section-->
    <section class="banner-section-four" style="background-image: url({{url('')}}/images/background/2.png);">
      <div class="auto-container">
        <div class="cotnent-box">
          <div class="title-box wow fadeInUp" data-wow-delay="500ms">
            <h3>Connecting Talent with Opportunity, Fast!</h3>
          </div>

          <!-- Job Search Form -->
          <div class="job-search-form wow fadeInUp" data-wow-delay="1000ms">
            <form method="post" action="">
              <div class="row">
                <!-- Form Group -->
                <div class="form-group col-lg-4 col-md-12 col-sm-12">
                  <span class="icon flaticon-search-1"></span>
                  <input type="text" name="field_name" placeholder="Job title, keywords, or company">
                </div>

                <!-- Form Group -->
                <div class="form-group col-lg-3 col-md-12 col-sm-12 location">
                  <span class="icon flaticon-map-locator"></span>
                  <input type="text" name="field_name" placeholder="City or postcode">
                </div>

                <!-- Form Group -->
                <div class="form-group col-lg-3 col-md-12 col-sm-12 category">
                  <span class="icon flaticon-briefcase"></span>
                  <select class="chosen-select">
                    <option value="">All Categories</option>
                    <option value="44">Accounting / Finance</option>
                    <option value="106">Automotive Jobs</option>
                    <option value="46">Customer</option>
                    <option value="48">Design</option>
                    <option value="47">Development</option>
                    <option value="45">Health and Care</option>
                    <option value="105">Marketing</option>
                    <option value="107">Project Management</option>
                  </select>
                </div>

                <!-- Form Group -->
                <div class="form-group col-lg-2 col-md-12 col-sm-12 text-right">
                  <button type="submit" class="theme-btn btn-style-two">Find Jobs</button>
                </div>
              </div>
            </form>
          </div>
          <!-- Job Search Form -->

          <!-- Popular Search -->
          <div class="popular-searches wow fadeInUp" data-wow-delay="1500ms">
            <span class="title">Your trusted destination for Government & Private job opportunities across India. </span>
            <!-- <a href="#">Designer</a>,
            <a href="#">Developer</a>,
            <a href="#">Web</a>,
            <a href="#">IOS</a>,
            <a href="#">PHP</a>,
            <a href="#">Senior</a>,
            <a href="#">Engineer</a>, -->
          </div>
          <!-- End Popular Search -->
        </div>
      </div>
    </section>
    <!-- End Banner Section-->

{{-- @php
$about = DB::table('content')->where('id',1)->first();
@endphp
    <section class="about-section">
      <div class="auto-container">
        <div class="row">
          <div class="content-column col-lg-6 col-md-12 col-sm-12 order-2">
            <div class="inner-column wow fadeInUp">
              <div class="sec-title">
                {!! @$about->content !!}
              </div>
              
              <a href="{{url('about')}}" class="theme-btn btn-style-one bg-blue"><span class="btn-title">Read More</span></a>
            </div>
          </div>
          <div class="image-column col-lg-6 col-md-12 col-sm-12">
            <figure class="image wow fadeInLeft"><img src="{{url('')}}/images/resource/image-2.jpg" alt=""></figure>

          </div>
        </div>

      </div>
    </section> --}}

    <!-- Job Section -->
    <section class="job-section alternate">
      <div class="auto-container">
        <div class="sec-title text-center">
          <h2>Most Popular Jobs</h2>
          <div class="text">Know your worth and find the job that qualify your life</div>
        </div>

        <div class="default-tabs tabs-box">
          
          <div class="tabs-content wow fadeInUp">

            <div class="tab active-tab" id="tab2">
              <div class="row">
                
                @php
                $job = DB::table('job')
                        ->where('status',1)
                        ->orderBy('id','desc')
                        ->limit(6)
                        ->get();
                @endphp
                @foreach($job as $data)

                <div class="job-block col-lg-6 col-md-12 col-sm-12">
                  <div class="inner-box">
                    <div class="content">
                      <span class="company-logo"><img src="{{url('public/media/uploads/job/'.$data->image)}}" alt="" onerror="this.onerror=null; this.src='{{ url('images/job.jpg') }}';"></span>
                      <h4><a href="{{url($data->slug)}}">{{$data->name}}</a></h4>
                      <ul class="job-info">
                        {{-- <li><span class="icon flaticon-briefcase"></span> Segment</li> --}}
                        <li><span class="icon flaticon-map-locator"></span>{!! statename($data->state_id) !!}, {!! countryname($data->city_id) !!}</li>
                        <li><span class="icon flaticon-clock-3"></span> {!! hoursDifference($data->post_date) !!} hours ago</li>
                        <li><span class="icon flaticon-money"></span> {{$data->salery}}</li>
                      </ul>
                      <ul class="job-other-info">
                        <li class="time">{!! jobtype($data->job_type) !!}</li>
                      </ul>
                      {{-- <button class="bookmark-btn"><span class="flaticon-bookmark"></span></button> --}}
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
    <!-- End Job Section -->




    <!-- Process Section -->
    <section class="process-section pt-0">
      <div class="auto-container">
        <div class="sec-title text-center sec-title-new">
          <h2>How It Works?</h2>
        </div>

        <div class="row wow fadeInUp">
          <!-- Process Block -->
          <div class="process-block col-lg-4 col-md-6 col-sm-12">
            <div class="icon-box"><img src="{{url('')}}/images/resource/process-1.png" alt=""></div>
            <h4>Register an account <br>to start</h4>
          </div>

          <!-- Process Block -->
          <div class="process-block col-lg-4 col-md-6 col-sm-12">
            <div class="icon-box"><img src="{{url('')}}/images/resource/process-2.png" alt=""></div>
            <h4>Explore over thousands <br>of resumes</h4>
          </div>

          <!-- Process Block -->
          <div class="process-block col-lg-4 col-md-6 col-sm-12">
            <div class="icon-box"><img src="{{url('')}}/images/resource/process-3.png" alt=""></div>
            <h4>Find the most suitable <br>candidate</h4>
          </div>
        </div>
      </div>
    </section>
    <!-- End Process Section -->

    <!-- Top Companies -->
    <section class="top-companies style-two">
      <div class="auto-container">
        <div class="sec-title">
          <h2>Pan-India Coverage</h2>
          <div class="text">Whether you are a fresher, skilled worker, or experienced professional, Quick Job Services offers verified job opportunities across all major cities and states in India, including: </div>
        </div>

        <div class="carousel-outer wow fadeInUp">

          <div class="companies-carousel owl-carousel owl-theme default-dots">
            <!-- Company Block -->
            <div class="company-block">
              <div class="inner-box">
                <figure class="image"><img src="{{url('')}}/images/Delhi.png" alt=""></figure>
                <h4 class="name">Delhi NCR</h4>
                <a href="#" class="theme-btn btn-style-three">15 Open Position</a>
              </div>
            </div>

            <!-- Company Block -->
            <div class="company-block">
              <div class="inner-box">
                <figure class="image"><img src="{{url('')}}/images/resource/company-2.png" alt=""></figure>
                <h4 class="name">Mumbai</h4>
                <a href="#" class="theme-btn btn-style-three">22 Open Position</a>
              </div>
            </div>

            <!-- Company Block -->
            <div class="company-block">
              <div class="inner-box">
                <figure class="image"><img src="{{url('')}}/images/Bangalore.png" alt=""></figure>
                <h4 class="name">Bangalore</h4>
                <a href="#" class="theme-btn btn-style-three">22 Open Position</a>
              </div>
            </div>

            <!-- Company Block -->
            <div class="company-block">
              <div class="inner-box">
                <figure class="image"><img src="{{url('')}}/images/Chennai.png" alt=""></figure>
                <h4 class="name">Chennai</h4>
                <a href="#" class="theme-btn btn-style-three">22 Open Position</a>
              </div>
            </div>

            <!-- Company Block -->
            <div class="company-block">
              <div class="inner-box">
                <figure class="image"><img src="{{url('')}}/images/Ahmedabad.png" alt=""></figure>
                <h4 class="name">Hyderabad</h4>
                <a href="#" class="theme-btn btn-style-three">15 Open Position</a>
              </div>
            </div>

            <!-- Company Block -->
            <div class="company-block">
              <div class="inner-box">
                <figure class="image"><img src="{{url('')}}/images/resource/company-2.png" alt=""></figure>
                <h4 class="name">Kolkata</h4>
                <a href="#" class="theme-btn btn-style-three">22 Open Position</a>
              </div>
            </div>

           

            <!-- Company Block -->
            <div class="company-block">
              <div class="inner-box">
                <figure class="image"><img src="{{url('')}}/images/resource/company-4.png" alt=""></figure>
                <h4 class="name">•  Regional hubs and tier-2/tier-3 cities</h4>
                <a href="#" class="theme-btn btn-style-three">22 Open Position</a>
              </div>
            </div>


          </div>
        </div>
      </div>
    </section>
    <!-- End Top Companies -->

    <!-- Job Categories -->
    <section class="job-categories">
      <div class="auto-container">
        <div class="sec-title text-center">
          <h2>Popular Job Categories</h2>
          <div class="text">2020 jobs live - 293 added today.</div>
        </div>

        <div class="row wow fadeInUp">
          <!-- Category Block -->
          <div class="category-block col-lg-4 col-md-6 col-sm-12">
            <div class="inner-box">
              <div class="content">
                <span class="icon flaticon-money-1"></span>
                <h4><a href="#">Accounting / Finance</a></h4>
                <p>(2 open positions)</p>
              </div>
            </div>
          </div>

          <!-- Category Block -->
          <div class="category-block col-lg-4 col-md-6 col-sm-12">
            <div class="inner-box">
              <div class="content">
                <span class="icon flaticon-promotion"></span>
                <h4><a href="#">Marketing</a></h4>
                <p>86 open positions)</p>
              </div>
            </div>
          </div>

          <!-- Category Block -->
          <div class="category-block col-lg-4 col-md-6 col-sm-12">
            <div class="inner-box">
              <div class="content">
                <span class="icon flaticon-vector"></span>
                <h4><a href="#">Design</a></h4>
                <p>43 open positions)</p>
              </div>
            </div>
          </div>

          <!-- Category Block -->
          <div class="category-block col-lg-4 col-md-6 col-sm-12">
            <div class="inner-box">
              <div class="content">
                <span class="icon flaticon-web-programming"></span>
                <h4><a href="#">Development</a></h4>
                <p>(12 open positions)</p>
              </div>
            </div>
          </div>

          <!-- Category Block -->
          <div class="category-block col-lg-4 col-md-6 col-sm-12">
            <div class="inner-box">
              <div class="content">
                <span class="icon flaticon-headhunting"></span>
                <h4><a href="#">Human Resource</a></h4>
                <p>55 open positions)</p>
              </div>
            </div>
          </div>

          <!-- Category Block -->
          <div class="category-block col-lg-4 col-md-6 col-sm-12">
            <div class="inner-box">
              <div class="content">
                <span class="icon flaticon-rocket-ship"></span>
                <h4><a href="#">Project Management</a></h4>
                <p>(2 open positions)</p>
              </div>
            </div>
          </div>

          <!-- Category Block -->
          <div class="category-block col-lg-4 col-md-6 col-sm-12">
            <div class="inner-box">
              <div class="content">
                <span class="icon flaticon-support-1"></span>
                <h4><a href="#">Customer Service</a></h4>
                <p>(2 open positions)</p>
              </div>
            </div>
          </div>

          <!-- Category Block -->
          <div class="category-block col-lg-4 col-md-6 col-sm-12">
            <div class="inner-box">
              <div class="content">
                <span class="icon flaticon-first-aid-kit-1"></span>
                <h4><a href="#">Health and Care</a></h4>
                <p>(25 open positions)</p>
              </div>
            </div>
          </div>

          <!-- Category Block -->
          <div class="category-block col-lg-4 col-md-6 col-sm-12">
            <div class="inner-box">
              <div class="content">
                <span class="icon flaticon-car"></span>
                <h4><a href="#">Automotive Jobs</a></h4>
                <p>92 open positions</p>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section>
    <!-- End Job Categories -->

    <!-- News Section -->
    <section class="news-section style-two">
      <div class="auto-container">
        <div class="sec-title text-center">
          <h2>Recent News Articles</h2>
          <div class="text">Fresh job related news content posted each day.</div>
        </div>

        <div class="row wow fadeInUp">
          <!-- News Block -->
          <div class="news-block col-lg-4 col-md-6 col-sm-12">
            <div class="inner-box">
              <div class="image-box">
                <figure class="image"><img src="{{url('')}}/images/resource/news-1.jpg" alt="" /></figure>
              </div>
              <div class="lower-content">
                <ul class="post-meta">
                  <li><a href="#">August 31, 2021</a></li>
                  <li><a href="#">12 Comment</a></li>
                </ul>
                <h3><a href="blog-single.html">Attract Sales And Profits</a></h3>
                <p class="text">A job ravenously while Far much that one rank beheld after outside....</p>
                <a href="#" class="read-more">Read More <i class="fa fa-angle-right"></i></a>
              </div>
            </div>
          </div>

          <!-- News Block -->
          <div class="news-block col-lg-4 col-md-6 col-sm-12">
            <div class="inner-box">
              <div class="image-box">
                <figure class="image"><img src="{{url('')}}/images/resource/news-2.jpg" alt="" /></figure>
              </div>
              <div class="lower-content">
                <ul class="post-meta">
                  <li><a href="#">August 31, 2021</a></li>
                  <li><a href="#">12 Comment</a></li>
                </ul>
                <h3><a href="blog-single.html">5 Tips For Your Job Interviews</a></h3>
                <p class="text">A job ravenously while Far much that one rank beheld after outside....</p>
                <a href="#" class="read-more">Read More <i class="fa fa-angle-right"></i></a>
              </div>
            </div>
          </div>

          <!-- News Block -->
          <div class="news-block col-lg-4 col-md-6 col-sm-12">
            <div class="inner-box">
              <div class="image-box">
                <figure class="image"><img src="{{url('')}}/images/resource/news-3.jpg" alt="" /></figure>
              </div>
              <div class="lower-content">
                <ul class="post-meta">
                  <li><a href="#">August 31, 2021</a></li>
                  <li><a href="#">12 Comment</a></li>
                </ul>
                <h3><a href="blog-single.html">An Overworked Newspaper Editor</a></h3>
                <p class="text">A job ravenously while Far much that one rank beheld after outside....</p>
                <a href="#" class="read-more">Read More <i class="fa fa-angle-right"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End News Section -->

    <!--Clients Section-->
    <section class="clients-section alternate">
      <div class="sponsors-outer">
        <!--Sponsors Carousel-->
        <ul class="sponsors-carousel owl-carousel owl-theme">
          <li class="slide-item">
            <figure class="image-box"><a href="#"><img src="{{url('')}}/images/clients/1-1.png" alt=""></a></figure>
          </li>
          <li class="slide-item">
            <figure class="image-box"><a href="#"><img src="{{url('')}}/images/clients/1-2.png" alt=""></a></figure>
          </li>
          <li class="slide-item">
            <figure class="image-box"><a href="#"><img src="{{url('')}}/images/clients/1-3.png" alt=""></a></figure>
          </li>
          <li class="slide-item">
            <figure class="image-box"><a href="#"><img src="{{url('')}}/images/clients/1-4.png" alt=""></a></figure>
          </li>
          <li class="slide-item">
            <figure class="image-box"><a href="#"><img src="{{url('')}}/images/clients/1-5.png" alt=""></a></figure>
          </li>
          <li class="slide-item">
            <figure class="image-box"><a href="#"><img src="{{url('')}}/images/clients/1-6.png" alt=""></a></figure>
          </li>
          <li class="slide-item">
            <figure class="image-box"><a href="#"><img src="{{url('')}}/images/clients/1-7.png" alt=""></a></figure>
          </li>
        </ul>
      </div>
    </section>
    <!-- End Clients Section-->

@include('footer')