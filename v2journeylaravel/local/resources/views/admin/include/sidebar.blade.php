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

        <li class="{{ $currentUrl == route('admin.site_setting.edit', ['id' => 1]) ? 'active' : '' }}">
             <a href="{{ route('admin.site_setting.edit', ['id' => 1]) }}">
                 <span class="nav-icon"><i class="fa fa-cog bg-black text-white"></i></span>
                 <span class="nav-text">Site Setting</span>
             </a>
         </li>


         <li class="{{ $currentUrl == route('admin/destination/list') ? 'active' : '' }}">
            <a href="{{ route('admin/destination/list') }}">
               <span class="nav-icon"><i class="fa fa-cog bg-black text-white"></i></span>
               <span class="nav-text">Destination</span>
            </a>
         </li>

         <li class="{{ $currentUrl == route('admin/package/list') ? 'active' : '' }}">
            <a href="{{ route('admin/package/list') }}">
               <span class="nav-icon"><i class="fa fa-cog bg-black text-white"></i></span>
               <span class="nav-text">Package</span>
            </a>
         </li>
         
         
         

         <li class="{{ $currentUrl == route('admin/packageenquiry/list') ? 'active' : '' }}">
            <a href="{{ route('admin/packageenquiry/list') }}">
               <span class="nav-icon"><i class="fa fa-cog bg-black text-white"></i></span>
               <span class="nav-text">Package Enquiry</span>
            </a>
         </li>
         
         



         <li class="{{ $currentUrl == route('admin/testimonials/list') ? 'active' : '' }}">
            <a href="{{ route('admin/testimonials/list') }}">
               <span class="nav-icon"><i class="fa fa-cog bg-black text-white"></i></span>
               <span class="nav-text">Testimonials</span>
            </a>
         </li>

         <li class="{{ $currentUrl == route('admin/gallery/list') ? 'active' : '' }}">
            <a href="{{ route('admin/gallery/list') }}">
               <span class="nav-icon"><i class="fa fa-cog bg-black text-white"></i></span>
               <span class="nav-text">Gallery</span>
            </a>
         </li>


         <li class="{{ $currentUrl == route('admin/instagramgallery/list') ? 'active' : '' }}">
            <a href="{{ route('admin/instagramgallery/list') }}">
               <span class="nav-icon"><i class="fa fa-cog bg-black text-white"></i></span>
               <span class="nav-text">Instagram Gallery</span>
            </a>
         </li>

         <li class="{{ $currentUrl == route('admin/blog/list') ? 'active' : '' }}">
            <a href="{{ route('admin/blog/list') }}">
               <span class="nav-icon"><i class="fa fa-cog bg-black text-white"></i></span>
               <span class="nav-text">Blog</span>
            </a>
         </li>





         <li class="{{ $currentUrl == route('admin/faq/list') ? 'active' : '' }}">
            <a href="{{ route('admin/faq/list') }}">
               <span class="nav-icon"><i class="fa fa-cog bg-black text-white"></i></span>
               <span class="nav-text">FAQ's</span>
            </a>
         </li>







         

         

         <li class="has-sub">
            <a href="#">
            <span class="nav-icon"><i class="fa fa-cog bg-gradient-orange text-white"></i></span>
            <span class="nav-text">Content & Policy</span>
            <span class="nav-caret"><b class="caret"></b></span>
            </a>
            <ul class="nav-submenu">

               <li class=""><a href="{{ route('admin.content.edit', ['id' => 1]) }}"><span class="nav-text">About Us</span></a></li>

               <li class=""><a href="{{ route('admin.content.edit', ['id' => 2]) }}"><span class="nav-text">Privacy Policy</span></a></li>
               <li class=""><a href="{{ route('admin.content.edit', ['id' => 3]) }}"><span class="nav-text">Term & Conditions</span></a></li>
            </ul>
         </li>


         

         <li class="{{ $currentUrl == route('admin/contact/list') ? 'active' : '' }}">
            <a href="{{ route('admin/contact/list') }}">
               <span class="nav-icon"><i class="fa fa-cog bg-black text-white"></i></span>
               <span class="nav-text">Contact Enquiry</span>
            </a>
         </li>

         
       
         <li class="nav-divider"></li>
         <li class="">
            <a href="">
               <span class="nav-icon"><i class="fa fa-cog bg-gradient-purple text-white"></i></span>
               <span class="nav-text">Logout </span>
            </a>
         </li>
         <li class="nav-copyright">&copy; <?=date('Y'); ?> {{env('website_name')}}.<br> All Right Reserved</li>
      </ul>
   </div>
</sidebar>