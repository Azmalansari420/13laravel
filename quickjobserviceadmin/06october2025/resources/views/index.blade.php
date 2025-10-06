@include('header')

<style>
  .banner-sec
  {
    
  }
.marquee-container {
  width: 100%;
  overflow: hidden;
  white-space: nowrap;
  background: #222;  /* Optional background */
  padding: 10px 0;
  margin-top: 80px;
}

.marquee-content {
  position: relative;
  display: inline-block;
  animation: scroll-left 30s linear infinite;
  transform: translateX(100%); /* ✅ Start from right side (fixed) */
  will-change: transform;
  color: white;
  font-size: 18px;
}

.marquee-container a {
  color: #ffeb3b;
  text-decoration: none;
  margin: 0 10px;
}

.marquee-container a:hover {
  text-decoration: underline;
}

/* Animation */
@keyframes scroll-left {
  0% {
    transform: translateX(40%); /* Start fully on the right */
  }
  100% {
    transform: translateX(-100%); /* Move out fully to the left */
  }
}
.marquee-container:hover .marquee-content {
  animation-play-state: paused;
}

</style>

    <!-- Banner Section-->

   <div class="marquee-container">
      <div class="marquee-content">
        @php
        $headine = DB::table('headline')->where('status',1)->orderBy('id','desc')->get();
        @endphp
        @foreach($headine as $data)
        <a href="{{$data->url}}" target="_blank">{{$data->name}}</a> ||
        @endforeach
      </div>
    </div>


    @php
  $slider = DB::table('slider')->where('status',1)->orderBy('id','desc')->get();
@endphp

<section class="banner-sec">
  <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000" data-bs-pause="hover">


    <div class="carousel-indicators">
      @foreach($slider as $key => $data)
        <button type="button"
                data-bs-target="#carouselExampleIndicators"
                data-bs-slide-to="{{ $key }}"
                class="{{ $key == 0 ? 'active' : '' }}"
                aria-label="Slide {{ $key }}">
        </button>
      @endforeach
    </div>

    <div class="carousel-inner">
      @foreach($slider as $key => $data)
        <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
          <a href="{{ $data->url }}">
            <img src="{{ url('public/media/uploads/slider/'.$data->image) }}"
                 class="d-block w-100"
                 alt="slide-{{ $key }}">
          </a>
        </div>
      @endforeach
    </div>

    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>

    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>

  </div>
</section>


    {{-- <section class="banner-section-four" style="background-image: url({{url('')}}/images/background/2.png);">
      <div class="auto-container">
        <div class="cotnent-box">
          <div class="title-box wow fadeInUp" data-wow-delay="500ms">
            <h3>Connecting Talent with Opportunity, Fast!</h3>
          </div>
          <div class="job-search-form wow fadeInUp" data-wow-delay="1000ms">
            <form method="get" action="{{route('search.searchjob')}}">
              <div class="row">
                <div class="form-group col-lg-4 col-md-12 col-sm-12">
                  <span class="icon flaticon-search-1"></span>
                  <input type="text" name="name" placeholder="Job title, keywords, or company">
                </div>
                <div class="form-group col-lg-3 col-md-12 col-sm-12 category">
                  <span class="icon flaticon-briefcase"></span>
                  <select class="chosen-seledct" name="state_id">
                    <option value="">All State</option>
                    @php
                    $country = DB::table('state')->where('status',1)->get();
                    @endphp
                    @foreach($country as $data)
                    <option value="{{$data->id}}">{{$data->name}}</option>
                    @endforeach
                  </select>
                </div>
                <div class="form-group col-lg-3 col-md-12 col-sm-12 ">
                  <span class="icon flaticon-briefcase"></span>
                  <select class="chosen-selecdt" name="cat_id">
                    <option value="">All Categories</option>
                    @php
                    $country = DB::table('category')->where('status',1)->get();
                    @endphp
                    @foreach($country as $data)
                    <option value="{{$data->id}}">{{$data->name}}</option>
                    @endforeach
                  </select>
                </div>
                <div class="form-group col-lg-2 col-md-12 col-sm-12 text-right">
                  <button type="submit" name="submit" class="theme-btn btn-style-two">Find Jobs</button>
                </div>
              </div>
            </form>
          </div>
          <div class="popular-searches wow fadeInUp" data-wow-delay="1500ms">
            <span class="title">Your trusted destination for Government & Private job opportunities across India. </span>
          </div>
        </div>
      </div>
    </section> --}}


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
          <h2>Purchase Notes</h2>
          <div class="text">Whether you are a fresher, skilled worker, or experienced professional, Quick Job Services offers Notes. </div>
        </div>

        <div class="carousel-outer wow fadeInUp">

          <div class="companies-carousel owl-carousel owl-theme default-dots">
            @php
            $pdfcat = DB::table('pdf_category')->where('status',1)->get();
            @endphp
            @foreach($pdfcat as $data)
            <div class="company-block">
              <div class="inner-box">
                <figure class="image"><img src="{{url('public/media/uploads/pdf_category/'.$data->image)}}" alt=""></figure>
                <a href="{{$data->slug}}"><h4 class="name">{{$data->name}}</h4></a>
                {{-- <a href="{{$data->slug}}" class="theme-btn btn-style-three">15 Open Position</a> --}}
              </div>
            </div>

           @endforeach

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
          {{-- <div class="text">2020 jobs live - 293 added today.</div> --}}
        </div>

        <div class="row wow fadeInUp">
          <!-- Category Block -->
          @php
          $category = DB::table('category')->where('status',1)->get();
          @endphp
          @foreach($category as $data)
          @php
          $count = DB::table('job')->where('cat_id', $data->id)->count();
          @endphp
          <div class="category-block col-lg-4 col-md-6 col-sm-12">
            <div class="inner-box">
              <div class="content">
                {{-- <span class="icon flaticon-money-1"></span> --}}
                <h4><a href="{{url($data->slug)}}">{{$data->name}}</a></h4>
                <p>({{$count}} open positions)</p>
              </div>
            </div>
          </div>
          @endforeach

         

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
          @php
          $blog = DB::table('blog')->where('status',1)->orderBy('id','desc')->limit(3)->get();
          @endphp
          @foreach($blog as $data)
          <div class="news-block col-lg-4 col-md-6 col-sm-12">
            <div class="inner-box">
              <div class="image-box">
                <figure class="image"><img src="{{url('public/media/uploads/blog/'.$data->image)}}" alt="" /></figure>
              </div>
              <div class="lower-content">
                <ul class="post-meta">
                  <li><a href="{{$data->slug}}">{!! dateformet($data->addeddate) !!}</a></li>
                </ul>
                <h3><a href="{{$data->slug}}">{{$data->name}}</a></h3>
                <a href="{{$data->slug}}" class="read-more">Read More <i class="fa fa-angle-right"></i></a>
              </div>
            </div>
          </div>

        @endforeach 

         

        </div>
      </div>
    </section>
    <!-- End News Section -->

    <!--Clients Section-->
  {{--   <section class="clients-section alternate">
      <div class="sponsors-outer">
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
    </section> --}}
    <!-- End Clients Section-->

@include('footer')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
