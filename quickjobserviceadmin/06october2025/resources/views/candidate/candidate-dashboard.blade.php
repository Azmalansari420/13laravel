@php
checkUsersSession();

$user_id = session('user_id');
$profile = DB::table('users')->where('id',$user_id)->first();
// dd($profile->id);
@endphp
@include('header')

<div class="page-wrapper dashboard">
    <!-- Sidebar Backdrop -->
    <div class="sidebar-backdrop"></div>

    <!-- User Sidebar -->
    @include('candidate/can-sidebar')
    
    <!-- End User Sidebar -->

    <!-- Dashboard -->
    <section class="user-dashboard">
      <div class="dashboard-outer">
        <div class="upper-title-box">
          <h3>Howdy, {{$profile->name}}!!</h3>
          <div class="text">Ready to jump back in?</div>
        </div>
        <div class="row">
          <div class="col-xl-12 col-lg-12 col-md-6 col-sm-12">
            <div class="ui-item">
              <div class="right">
                <h4>Welcome Back {{$profile->name}}</h4>
                {{-- <p>Applied Jobs</p> --}}
              </div>
            </div>
          </div>
          {{-- <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
            <div class="ui-item ui-red">
              <div class="left">
                <i class="icon la la-file-invoice"></i>
              </div>
              <div class="right">
                <h4>9382</h4>
                <p>Job Alerts</p>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
            <div class="ui-item ui-yellow">
              <div class="left">
                <i class="icon la la-comment-o"></i>
              </div>
              <div class="right">
                <h4>74</h4>
                <p>Messages</p>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
            <div class="ui-item ui-green">
              <div class="left">
                <i class="icon la la-bookmark-o"></i>
              </div>
              <div class="right">
                <h4>32</h4>
                <p>Shortlist</p>
              </div>
            </div>
          </div> --}}
        </div>

      </div>
    </section>
    <!-- End Dashboard -->

 @include('candidate/can-footer');