@php
$currentUrl = url()->current();
$siteSetting = DB::table('site_setting')->where('id', 1)->first();
@endphp
{{-- <pre>{{print_r($currentUrl)}}</pre> --}}
<sidebar id="sidebar" class="app-sidebar">
   <div data-scrollbar="true" data-height="100%">
      <ul class="nav">
         <li class="nav-profile">
            <div class="profile-img11">
               <img src="{{url('')}}/public/media/uploads/site_setting/{{$siteSetting->logo}}" alt="{{env('website_name')}}" style="width: 100%;" onerror="this.src='{{url('public/media/uploads/not-found.jpg')}}'">
            </div>
           
         </li>
         
         
         <li class="nav-divider"></li>
         <li class="nav-header">Admin Panel</li>

         <li class="{{ $currentUrl == route('admin/dashboard') ? 'active' : '' }}">
            <a href="{{route('admin/dashboard')}}">
            <span class="nav-icon"><i class="fa fa-cog bg-black text-white"></i></span>
            <span class="nav-text">Dashboard</span>
            </a>
         </li>

         <li class="{{ $currentUrl == route('admin/site_setting/edit', ['id' => 1]) ? 'active' : '' }}">
            <a href="{{ route('admin/site_setting/edit', ['id' => 1]) }}">
               <span class="nav-icon"><i class="fa fa-cog bg-black text-white"></i></span>
               <span class="nav-text">Site Setting</span>
            </a>
         </li>

         <li class="{{ $currentUrl == route('admin/slider/list') ? 'active' : '' }}">
            <a href="{{ route('admin/slider/list') }}">
               <span class="nav-icon"><i class="fa fa-cog bg-black text-white"></i></span>
               <span class="nav-text">Slider</span>
            </a>
         </li>


         <li class="{{ $currentUrl == route('admin/headline/list') ? 'active' : '' }}">
            <a href="{{ route('admin/headline/list') }}">
               <span class="nav-icon"><i class="fa fa-cog bg-black text-white"></i></span>
               <span class="nav-text">Headline</span>
            </a>
         </li>

         <li class="{{ $currentUrl == route('admin/category/list') ? 'active' : '' }}">
            <a href="{{ route('admin/category/list') }}">
               <span class="nav-icon"><i class="fa fa-cog bg-black text-white"></i></span>
               <span class="nav-text">Category</span>
            </a>
         </li>
         
         <li class="{{ $currentUrl == route('admin/job_type/list') ? 'active' : '' }}">
            <a href="{{ route('admin/job_type/list') }}">
               <span class="nav-icon"><i class="fa fa-cog bg-black text-white"></i></span>
               <span class="nav-text">Job Type</span>
            </a>
         </li>
         
         
         <li class="{{ $currentUrl == route('admin/skills/list') ? 'active' : '' }}">
            <a href="{{ route('admin/skills/list') }}">
               <span class="nav-icon"><i class="fa fa-cog bg-black text-white"></i></span>
               <span class="nav-text">Skills</span>
            </a>
         </li>
         
         
         <li class="{{ $currentUrl == route('admin/apply_now/list') ? 'active' : '' }}">
            <a href="{{ route('admin/apply_now/list') }}">
               <span class="nav-icon"><i class="fa fa-cog bg-black text-white"></i></span>
               <span class="nav-text">Apply Enquiry</span>
            </a>
         </li>

         

         <li class="has-sub">
            <a href="#">
            <span class="nav-icon"><i class="fa fa-cog bg-gradient-orange text-white"></i></span>
            <span class="nav-text">Location</span>
            <span class="nav-caret"><b class="caret"></b></span>
            </a>
            <ul class="nav-submenu">
               <li class="active"><a href="{{ route('admin/country/list') }}"><span class="nav-text">Country</span></a></li>
               <li class="active"><a href="{{ route('admin/state/list') }}"><span class="nav-text">State</span></a></li>
               <li class="active"><a href="{{ route('admin/city/list') }}"><span class="nav-text">City</span></a></li>
            </ul>
         </li>

         <li class="{{ $currentUrl == route('admin/job/list') ? 'active' : '' }}">
            <a href="{{ route('admin/job/list') }}">
               <span class="nav-icon"><i class="fa fa-cog bg-black text-white"></i></span>
               <span class="nav-text">Job</span>
            </a>
         </li>

          <li class="{{ $currentUrl == route('admin/blog/list') ? 'active' : '' }}">
            <a href="{{ route('admin/blog/list') }}">
               <span class="nav-icon"><i class="fa fa-cog bg-black text-white"></i></span>
               <span class="nav-text">Blog</span>
            </a>
         </li>


         <li class="nav-divider"></li>
          <li class="{{ $currentUrl == route('admin/pdf_category/list') ? 'active' : '' }}">
            <a href="{{ route('admin/pdf_category/list') }}">
               <span class="nav-icon"><i class="fa fa-cog bg-black text-white"></i></span>
               <span class="nav-text">PDF Category</span>
            </a>
         </li>
          <li class="{{ $currentUrl == route('admin/pdfs/list') ? 'active' : '' }}">
            <a href="{{ route('admin/pdfs/list') }}">
               <span class="nav-icon"><i class="fa fa-cog bg-black text-white"></i></span>
               <span class="nav-text">PDF</span>
            </a>
         </li>
          <li class="{{ $currentUrl == route('admin/pdf_purchase/list') ? 'active' : '' }}">
            <a href="{{ route('admin/pdf_purchase/list') }}">
               <span class="nav-icon"><i class="fa fa-cog bg-black text-white"></i></span>
               <span class="nav-text">PDF Purchase List</span>
            </a>
         </li>


         <li class="nav-divider"></li>
         <li class="has-sub">
            <a href="#">
            <span class="nav-icon"><i class="fa fa-cog bg-gradient-orange text-white"></i></span>
            <span class="nav-text">Policys</span>
            <span class="nav-caret"><b class="caret"></b></span>
            </a>
            <ul class="nav-submenu">
               <li class="active"><a href="{{ route('admin/content/edit', ['id' => 1]) }}"><span class="nav-text">About Us</span></a></li>
               <li class="active"><a href="{{ route('admin/content/edit', ['id' => 2]) }}"><span class="nav-text">About Us Page</span></a></li>
               <li class="active"><a href="{{ route('admin/content/edit', ['id' => 3]) }}"><span class="nav-text">Term & Condition</span></a></li>
               <li class="active"><a href="{{ route('admin/content/edit', ['id' => 4]) }}"><span class="nav-text">Privacy Policy</span></a></li>
            </ul>
         </li>

         
       
         <li class="nav-divider"></li>
         <li class="">
            <a href="{{route('admin/logout')}}">
               <span class="nav-icon"><i class="fa fa-cog bg-gradient-purple text-white"></i></span>
               <span class="nav-text">Logout </span>
            </a>
         </li>
         <li class="nav-copyright">&copy; <?=date('Y'); ?> {{env('website_name')}}.<br> All Right Reserved</li>
      </ul>
   </div>
</sidebar>