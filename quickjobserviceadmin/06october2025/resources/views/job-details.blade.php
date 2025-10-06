@include('header')

<style>
	.sidebar-widget {
	    margin-bottom: 0px;
	}
</style>
    <!-- Job Detail Section -->
    <section class="job-detail-section">
      <div class="job-detail-outer">
        <div class="auto-container">
          <div class="row">
            <div class="content-column col-lg-8 col-md-12 col-sm-12">
              <div class="job-block-outer">
                
                <div class="job-block-seven">
                  <div class="inner-box">
                    <div class="content">
                      <span class="company-logo"><img src="{{url('public/media/uploads/job/'.@$EDITDATA->image)}}" alt="" onerror="this.onerror=null; this.src='{{ url('images/job.jpg') }}';"></span>
                      <h4><a href="#">{{@$EDITDATA->name}}</a></h4>
                      <ul class="job-info">
                        {{-- <li><span class="icon flaticon-briefcase"></span> Segment</li> --}}
                        <li><span class="icon flaticon-map-locator"></span> {!! statename(@$EDITDATA->state_id) !!}, {!! countryname(@$EDITDATA->city_id) !!}</li>
                        <li><span class="icon flaticon-clock-3"></span> {!! hoursDifference(@$EDITDATA->post_date) !!} hours ago</li>
                        <li><span class="icon flaticon-money"></span> {{@$EDITDATA->salery}}</li>
                      </ul>
                      <ul class="job-other-info">
                        <li class="time">{!! jobtype(@$EDITDATA->job_type) !!}</li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <div class="job-detail">
                {!! (@$EDITDATA->description) !!}
              </div>

              <!-- Other Options -->
              <div class="other-options">
                <div class="social-share">
                  <h5>Share this job</h5>
                  <a href="#" class="facebook"><i class="fab fa-facebook-f"></i> Facebook</a>
                  <a href="#" class="twitter"><i class="fab fa-twitter"></i> Twitter</a>
                  <a href="#" class="google"><i class="fab fa-google"></i> Google+</a>
                </div>
              </div>

              {{-- <div class="map-outer">
                <div class="map-canvas" data-zoom="12" data-lat="-37.817085" data-lng="144.955631" data-type="roadmap" data-hue="#ffc400" data-title="Envato" data-icon-path="{{url('')}}/images/resource/map-marker.png" data-content="Melbourne VIC 3000, Australia<br><a href='mailto:info@youremail.com'>info@youremail.com</a>">
                </div>
              </div> --}}

              {{-- <div class="related-jobs">
                <div class="title-box">
                  <h3>Related Jobs</h3>
                  <div class="text">2020 jobs live - 293 added today.</div>
                </div>

                <div class="row">                  
                  <div class="job-block-four col-lg-6 col-md-6 col-sm-12">
                    <div class="inner-box">
                      <ul class="job-other-info">
                        <li class="time">Full Time</li>
                        <li class="privacy">Private</li>
                        <li class="required">Urgent</li>
                      </ul>
                      <span class="company-logo"><img src="{{url('')}}/images/resource/company-logo/3-1.png" alt=""></span>
                      <span class="company-name">Catalyst</span>
                      <h4><a href="#">Software Engineer (Android), Libraries</a></h4>
                      <div class="location"><span class="icon flaticon-map-locator"></span> London, UK</div>
                    </div>
                  </div>                  
                  <div class="job-block-four col-lg-6 col-md-6 col-sm-12">
                    <div class="inner-box">
                      <ul class="job-other-info">
                        <li class="time">Full Time</li>
                      </ul>
                      <span class="company-logo"><img src="{{url('')}}/images/resource/company-logo/3-2.png" alt=""></span>
                      <span class="company-name">Catalyst</span>
                      <h4><a href="#">Software Engineer (Android), Libraries</a></h4>
                      <div class="location"><span class="icon flaticon-map-locator"></span> London, UK</div>
                    </div>
                  </div>
                </div>
              </div> --}}
            </div>

            <div class="sidebar-column col-lg-4 col-md-12 col-sm-12">
              <aside class="sidebar">
                <div class="btn-box">
                  <a href="{{url('apply-now?id='.@$EDITDATA->id)}}" class="theme-btn btn-style-one">Apply For Job</a>
                  {{-- <button class="bookmark-btn"><i class="flaticon-bookmark"></i></button> --}}
                </div>

                <div class="sidebar-widget">
                  <!-- Job Overview -->
                  <h4 class="widget-title">Job Overview</h4>
                  <div class="widget-content">
                    <ul class="job-overview">
                      <li>
                        <i class="icon icon-calendar"></i>
                        <h5>Date Posted:</h5>
                        <span>{!! dateformet(@$EDITDATA->post_date) !!}</span>
                      </li>
                      <li>
                        <i class="icon icon-expiry"></i>
                        <h5>Expiration date:</h5>
                        <span>{!! dateformet(@$EDITDATA->expire_date) !!}</span>
                      </li>
                      <li>
                        <i class="icon icon-location"></i>
                        <h5>Location:</h5>
                        <span>{!! statename(@$EDITDATA->state_id) !!}, {!! countryname(@$EDITDATA->city_id) !!}</span>
                      </li>
                      <li>
                        <i class="icon icon-rate"></i>
                        <h5>Salary:</h5>
                        <span>{{@$EDITDATA->salery}}</span>
                      </li>
                    </ul>
                  </div>

@php
$jobskill = json_decode(@$EDITDATA->job_skills);
@endphp
                  <!-- Job Skills -->
                  @if(!empty($jobskill))
                  <h4 class="widget-title">Job Skills</h4>
                  <div class="widget-content">
                    <ul class="job-skills">
                    @php
                    $jobskill = json_decode(@$EDITDATA->job_skills);
                    if(!empty($jobskill))
                    @endphp
                    @foreach($jobskill as $value)
                      <li><a href="#">{!! jobskill($value) !!}</a></li>
                      @endforeach

                    </ul>
                  </div>
                </div>
                @endif

                
             {{--    <div class="sidebar-widget contact-widget">
                  <h4 class="widget-title">Apply For Job</h4>
                  <div class="widget-content">
                    <div class="default-form">
                      <form action="{{route('jobapply.store')}}" method="post">
                        @csrf
                        <input type="hidden" name="applyfor" value="{{@@$EDITDATA->name}}">
                        <div class="row clearfix">
                          <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                            <input type="text" name="name" placeholder="Your Name" required>
                          </div>
                          <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                            <input type="email" name="email" placeholder="Email Address" required>
                          </div>
                          <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                            <input type="number" name="mobile" placeholder="Mobile" required>
                          </div>
                          <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                            <textarea class="darma" name="message" placeholder="Message"></textarea>
                          </div>
                          <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                            <button class="theme-btn btn-style-one" type="submit" name="submit">Apply Now</button>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div> --}}



              </aside>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Job Detail Section -->

	

@include('footer')