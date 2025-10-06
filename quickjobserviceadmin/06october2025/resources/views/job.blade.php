@include('header')
@php

$state_id = request('state_id');
$cat_id = request('cat_id');
$name = request('name');
// dd($state_id);


$jobQuery = DB::table('job')->where('status',1);

if (!empty($EDITDATA->id)) {
    $jobQuery->where('cat_id', $EDITDATA->id); 
}

if (!empty($state_id)) {
    $jobQuery->where('state_id', $state_id); 
}

if (!empty($cat_id)) {
    $jobQuery->where('cat_id', $cat_id); 
}

if (!empty($name)) {
    $jobQuery->where('name', 'like', '%' . $name . '%');
}

$job = $jobQuery->orderBy('id','desc')->get();
@endphp

	
<style>
	
section.job-section.alternate.mt-5 {
    margin-top: 75px !important;
}
</style>


    <section class="job-section alternate mt-5">
      <div class="auto-container">
        <div class="sec-title text-center">
          <h2>Most Popular Jobs</h2>
          <div class="text">Know your worth and find the job that qualify your life</div>
        </div>

        <div class="default-tabs tabs-box">
          
          <div class="tabs-content wow fadeInUp">

            <div class="tab active-tab" id="tab2">
              <div class="row">
                
                
             @if(!empty($job) && count($job) > 0)

              @foreach($job as $data)
                  <div class="job-block col-lg-6 col-md-12 col-sm-12">
                      <div class="inner-box">
                          <div class="content">
                              <span class="company-logo">
                                  <img src="{{ url('public/media/uploads/job/'.$data->image) }}" alt="" 
                                       onerror="this.onerror=null; this.src='{{ url('images/job.jpg') }}';">
                              </span>
                              <h4><a href="{{ url($data->slug) }}">{{ $data->name }}</a></h4>
                              <ul class="job-info">
                                  <li><span class="icon flaticon-map-locator"></span>{!! statename($data->state_id) !!}, {!! countryname($data->city_id) !!}</li>
                                  <li><span class="icon flaticon-clock-3"></span>{!! hoursDifference($data->post_date) !!} hours ago</li>
                                  <li><span class="icon flaticon-money"></span>{{ $data->salery }}</li>
                              </ul>
                              <ul class="job-other-info">
                                  <li class="time">{!! jobtype($data->job_type) !!}</li>
                              </ul>
                          </div>
                      </div>
                  </div>
              @endforeach

          @else
              <div class="job-block col-lg-12 col-md-12 col-sm-12 text-center">
                  <h2>Not Found!</h2>
              </div>
          @endif



              </div>
            </div>

           

          </div>
        </div>
      </div>
    </section>
    


@include('footer')