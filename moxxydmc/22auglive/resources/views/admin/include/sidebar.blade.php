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


         <li class="{{ $currentUrl == route('admin/country/list') ? 'active' : '' }}">
            <a href="{{ route('admin/country/list') }}">
               <span class="nav-icon"><i class="fa fa-cog bg-black text-white"></i></span>
               <span class="nav-text">Country</span>
            </a>
         </li>

         <li class="{{ $currentUrl == route('admin/city/list') ? 'active' : '' }}">
            <a href="{{ route('admin/city/list') }}">
               <span class="nav-icon"><i class="fa fa-cog bg-black text-white"></i></span>
               <span class="nav-text">City</span>
            </a>
         </li>

     {{--     <li class="{{ $currentUrl == route('admin/sight_seeing/list') ? 'active' : '' }}">
            <a href="{{ route('admin/sight_seeing/list') }}">
               <span class="nav-icon"><i class="fa fa-cog bg-black text-white"></i></span>
               <span class="nav-text">Sight Seeing</span>
            </a>
         </li> --}}


         <li class="{{ $currentUrl == route('admin/package/list') ? 'active' : '' }}">
            <a href="{{ route('admin/package/list') }}">
               <span class="nav-icon"><i class="fa fa-cog bg-black text-white"></i></span>
               <span class="nav-text">Package</span>
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

         <li class="{{ $currentUrl == route('admin/partner/list') ? 'active' : '' }}">
            <a href="{{ route('admin/partner/list') }}">
               <span class="nav-icon"><i class="fa fa-cog bg-black text-white"></i></span>
               <span class="nav-text">Partner</span>
            </a>
         </li>

         <li class="{{ $currentUrl == route('admin/blog/list') ? 'active' : '' }}">
            <a href="{{ route('admin/blog/list') }}">
               <span class="nav-icon"><i class="fa fa-cog bg-black text-white"></i></span>
               <span class="nav-text">Blog</span>
            </a>
         </li>

         <li class="{{ $currentUrl == route('admin/package_enquiry/list') ? 'active' : '' }}">
            <a href="{{ route('admin/package_enquiry/list') }}">
               <span class="nav-icon"><i class="fa fa-cog bg-black text-white"></i></span>
               <span class="nav-text">Package Enquiry</span>
            </a>
         </li>
         

         <li class="has-sub">
            <a href="#">
            <span class="nav-icon"><i class="fa fa-cog bg-gradient-orange text-white"></i></span>
            <span class="nav-text">Content</span>
            <span class="nav-caret"><b class="caret"></b></span>
            </a>
            <ul class="nav-submenu">
               <li class="active"><a href="{{ route('admin/content/edit', ['id' => 1]) }}"><span class="nav-text">Home About Us</span></a></li>
               <li><a href="{{ route('admin/content/about', ['id' => 2]) }}"><span class="nav-text">About Us</span></a></li>
               <li><a href="{{ route('admin/content/privacy', ['id' => 3]) }}"><span class="nav-text">Privacy Policy</span></a></li>
               <li><a href="{{ route('admin/content/privacy', ['id' => 4]) }}"><span class="nav-text">Return & Refund Policy</span></a></li>
               <li><a href="{{ route('admin/content/privacy', ['id' => 5]) }}"><span class="nav-text">Term & Condition </span></a></li>
               <li><a href="{{ route('admin/content/explore', ['id' => 6]) }}"><span class="nav-text">Explore Banner </span></a></li>
            </ul>
         </li>


         <li class="has-sub">
            <a href="#">
            <span class="nav-icon"><i class="fa fa-cog bg-gradient-orange text-white"></i></span>
            <span class="nav-text">Banners</span>
            <span class="nav-caret"><b class="caret"></b></span>
            </a>
            <ul class="nav-submenu">
               <li><a href="{{ route('admin/content/banner', ['id' => 2]) }}"><span class="nav-text">About Us</span></a></li>
               <li><a href="{{ route('admin/content/banner', ['id' => 3]) }}"><span class="nav-text">Privacy Policy</span></a></li>
               <li><a href="{{ route('admin/content/banner', ['id' => 4]) }}"><span class="nav-text">Return & Refund Policy</span></a></li>
               <li><a href="{{ route('admin/content/banner', ['id' => 5]) }}"><span class="nav-text">Term & Condition </span></a></li>
               <li><a href="{{ route('admin/content/banner', ['id' => 7]) }}"><span class="nav-text">Tour Package </span></a></li>
                <li><a href="{{ route('admin/content/banner', ['id' => 8]) }}"><span class="nav-text">Gallery </span></a></li>
                <li><a href="{{ route('admin/content/banner', ['id' => 9]) }}"><span class="nav-text">Testimonial </span></a></li>
                <li><a href="{{ route('admin/content/banner', ['id' => 10]) }}"><span class="nav-text">Contact </span></a></li>
                <li><a href="{{ route('admin/content/banner', ['id' => 11]) }}"><span class="nav-text">Destination </span></a></li>
                <li><a href="{{ route('admin/content/banner', ['id' => 12]) }}"><span class="nav-text">FAQ </span></a></li>
                 <li class="active"><a href="{{ route('admin/content/banner', ['id' => 13]) }}"><span class="nav-text">Blog</span></a></li>
            </ul>
         </li>

         {{-- meta tags --}}
         <li class="has-sub">
            <a href="#">
            <span class="nav-icon"><i class="fa fa-cog bg-gradient-orange text-white"></i></span>
            <span class="nav-text">Meta Tags</span>
            <span class="nav-caret"><b class="caret"></b></span>
            </a>
            <ul class="nav-submenu">
               <li class="active"><a href="{{ route('admin/meta_tags/edit', ['id' => 1]) }}"><span class="nav-text">Home</span></a></li>
               <li class="active"><a href="{{ route('admin/meta_tags/edit', ['id' => 2]) }}"><span class="nav-text">About Us</span></a></li>
               <li class="active"><a href="{{ route('admin/meta_tags/edit', ['id' => 3]) }}"><span class="nav-text">Tours</span></a></li>
               <li class="active"><a href="{{ route('admin/meta_tags/edit', ['id' => 4]) }}"><span class="nav-text">Packages</span></a></li>
               <li class="active"><a href="{{ route('admin/meta_tags/edit', ['id' => 5]) }}"><span class="nav-text">Gallery</span></a></li>
               <li class="active"><a href="{{ route('admin/meta_tags/edit', ['id' => 6]) }}"><span class="nav-text">Testimonial</span></a></li>
               <li class="active"><a href="{{ route('admin/meta_tags/edit', ['id' => 7]) }}"><span class="nav-text">Contact</span></a></li>
               <li class="active"><a href="{{ route('admin/meta_tags/edit', ['id' => 8]) }}"><span class="nav-text">Blog</span></a></li>
               <li class="active"><a href="{{ route('admin/meta_tags/edit', ['id' => 9]) }}"><span class="nav-text">Privacy Policy</span></a></li>
               <li class="active"><a href="{{ route('admin/meta_tags/edit', ['id' => 10]) }}"><span class="nav-text">Refund Return policy</span></a></li>
               <li class="active"><a href="{{ route('admin/meta_tags/edit', ['id' => 11]) }}"><span class="nav-text">Term Condition</span></a></li>
               <li class="active"><a href="{{ route('admin/meta_tags/edit', ['id' => 12]) }}"><span class="nav-text">FAQ</span></a></li>
              
            </ul>
         </li>
         
         

         

        {{--  <li class="{{ $currentUrl == route('admin/contact/list') ? 'active' : '' }}">
            <a href="{{ route('admin/contact/list') }}">
               <span class="nav-icon"><i class="fa fa-cog bg-black text-white"></i></span>
               <span class="nav-text">Contact Enquiry</span>
            </a>
         </li> --}}

         
       
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