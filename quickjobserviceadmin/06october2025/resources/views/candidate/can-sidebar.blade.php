@php
$currentUrl = url()->current();
// dd($currentUrl);
@endphp
<div class="user-sidebar">

      <div class="sidebar-inner">
        <ul class="navigation">
          <li class="{{$currentUrl == url('candidate/candidate-dashboard') ? "active" : ''}}"><a href="{{url('candidate/candidate-dashboard')}}"> <i class="la la-home"></i> Dashboard</a></li>
          <li class="{{$currentUrl == url('candidate/candidate-dashboard-profile') ? "active" : ''}}"><a href="{{url('candidate/candidate-dashboard-profile')}}"><i class="la la-user-tie"></i>My Profile</a></li>
          <li><a href="candidate-dashboard-resume.html"><i class="la la-file-invoice"></i>My Resume</a></li>
          <li><a href="candidate-dashboard-applied-job.html"><i class="la la-briefcase"></i> Applied Jobs </a></li>
          <li><a href="candidate-dashboard-cv-manager.html"><i class="la la-file-invoice"></i> CV manager</a></li>
          <li  class="{{$currentUrl == url('candidate/change-password') ? "active" : ''}}"><a href="{{url('candidate/change-password')}}"><i class="la la-lock"></i>Change Password</a></li>
          <li><a href="{{ route('userlogout') }}"> <i class="la la-sign-out"></i>Logout</a></li>
          {{-- <li><a href="dashboard-delete.html"><i class="la la-trash"></i>Delete Profile</a></li> --}}
        </ul>

        
      </div>
    </div>