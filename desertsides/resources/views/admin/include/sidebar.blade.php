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
         
         <li class="{{ $currentUrl == route('admin/gallery/list') ? 'active' : '' }}">
            <a href="{{ route('admin/gallery/list') }}">
               <span class="nav-icon"><i class="fa fa-cog bg-black text-white"></i></span>
               <span class="nav-text">Gallery</span>
            </a>
         </li>
         <li class="{{ $currentUrl == route('admin/blog_category/list') ? 'active' : '' }}">
            <a href="{{ route('admin/blog_category/list') }}">
               <span class="nav-icon"><i class="fa fa-cog bg-black text-white"></i></span>
               <span class="nav-text">Blog Category</span>
            </a>
         </li>
         
         <li class="{{ $currentUrl == route('admin/blog/list') ? 'active' : '' }}">
            <a href="{{ route('admin/blog/list') }}">
               <span class="nav-icon"><i class="fa fa-cog bg-black text-white"></i></span>
               <span class="nav-text">Blog</span>
            </a>
         </li>
         <li class="{{ $currentUrl == route('admin/services/list') ? 'active' : '' }}">
            <a href="{{ route('admin/services/list') }}">
               <span class="nav-icon"><i class="fa fa-cog bg-black text-white"></i></span>
               <span class="nav-text">Services</span>
            </a>
         </li>
         
         <li class="{{ $currentUrl == route('admin/projects_cate/list') ? 'active' : '' }}">
            <a href="{{ route('admin/projects_cate/list') }}">
               <span class="nav-icon"><i class="fa fa-cog bg-black text-white"></i></span>
               <span class="nav-text">Projects Cate</span>
            </a>
         </li>
         <li class="{{ $currentUrl == route('admin/projects/list') ? 'active' : '' }}">
            <a href="{{ route('admin/projects/list') }}">
               <span class="nav-icon"><i class="fa fa-cog bg-black text-white"></i></span>
               <span class="nav-text">Projects</span>
            </a>
         </li>
         
         
         <li class="{{ $currentUrl == route('admin/products/list') ? 'active' : '' }}">
            <a href="{{ route('admin/products/list') }}">
               <span class="nav-icon"><i class="fa fa-cog bg-black text-white"></i></span>
               <span class="nav-text">Products</span>
            </a>
         </li>
         
         
         <li class="{{ $currentUrl == route('admin/clients/list') ? 'active' : '' }}">
            <a href="{{ route('admin/clients/list') }}">
               <span class="nav-icon"><i class="fa fa-cog bg-black text-white"></i></span>
               <span class="nav-text">Clients</span>
            </a>
         </li>
         
         <li class="{{ $currentUrl == route('admin/team/list') ? 'active' : '' }}">
            <a href="{{ route('admin/team/list') }}">
               <span class="nav-icon"><i class="fa fa-cog bg-black text-white"></i></span>
               <span class="nav-text">Team</span>
            </a>
         </li>
         
         
         <li class="{{ $currentUrl == route('admin/contact/list') ? 'active' : '' }}">
            <a href="{{ route('admin/contact/list') }}">
               <span class="nav-icon"><i class="fa fa-cog bg-black text-white"></i></span>
               <span class="nav-text">Contact Enquiry</span>
            </a>
         </li>

         

         <!-- <li class="has-sub">
            <a href="#">
            <span class="nav-icon"><i class="fa fa-cog bg-gradient-orange text-white"></i></span>
            <span class="nav-text">Forms</span>
            <span class="nav-caret"><b class="caret"></b></span>
            </a>
            <ul class="nav-submenu">
               <li class="active"><a href="add.php"><span class="nav-text">Add</span></a></li>
               <li><a href="list.php"><span class="nav-text">Table</span></a></li>
            </ul>
         </li> -->

         
       
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