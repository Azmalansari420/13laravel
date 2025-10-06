<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Quick Job Services</title>

  <!-- Stylesheets -->
  <link href="{{url('')}}/css/bootstrap.css" rel="stylesheet">
  <link href="{{url('')}}/css/style.css" rel="stylesheet">
  <link href="{{url('')}}/css/responsive.css" rel="stylesheet">
  <link href="{{url('')}}/css/custom.css" rel="stylesheet">

  <link rel="shortcut icon" href="{{url('')}}/images/favicon.png" type="image/x-icon">
  <link rel="icon" href="{{url('')}}/images/favicon.png" type="image/x-icon">

  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
</head>

<body data-anm=".anm">

  <div class="page-wrapper">

    <!-- Preloader -->
    <!-- <div class="preloader"></div> -->

    <!-- Main Header-->
    <header class="main-header header-style-two alternate">
      <div class="auto-container">
        <div class="main-box">
          <div class="nav-outer">
            <div class="logo-box">
              <div class="logo"><a href="{{url('')}}"><img src="{{url('public/media/uploads/site_setting/'.$sitesetting->logo)}}" alt="" title=""></a></div>
            </div>

            <nav class="nav main-menu">
              <ul class="navigation" id="navbar">
                <li class="current ">
                  <a href="{{url('')}}">Home</a>
                </li>

                <li class="">
                  <a href="{{url('about')}}">About Us</a>
                </li>
                <li class="">
                  <a href="{{url('job')}}">Find Job</a>
                </li>

                <li class="">
                  <a href="{{url('blog')}}">Blog</a>
                </li>

                
                <li class="">
                  <a href="{{url('contact')}}">Contact us</a>
                </li>

                

                <!-- Only for Mobile View -->
                <li class="mm-add-listing">
                  <a href="#!" class="theme-btn btn-style-one">Job Post</a>
                  <span>
                    <span class="contact-info">
                      <span class="phone-num"><span>Call us</span><a href="tel:{{$sitesetting->mobile}}">{{$sitesetting->mobile}}</a></span>
                      <span class="address">{{$sitesetting->address}}</span>
                      <a href="mailto:{{$sitesetting->email}}" class="email">{{$sitesetting->email}}</a>
                    </span>
                    <span class="social-links">
                      <a href="{{$sitesetting->facebook}}"><span class="fab fa-facebook-f"></span></a>
                      <a href="{{$sitesetting->twitter}}"><span class="fab fa-twitter"></span></a>
                      <a href="{{$sitesetting->instagram}}"><span class="fab fa-instagram"></span></a>
                      <a href="{{$sitesetting->youtube}}"><span class="fab fa-youtube"></span></a>
                    </span>
                  </span>
                </li>
              </ul>
            </nav>
            <!-- Main Menu End-->
          </div>

          <div class="outer-box">
            <!-- Login/Register -->
            <div class="btn-box">
              <a href="{{url('login')}}" class="theme-btn btn-style-six ">Login / Register</a>
              <a href="" class="theme-btn btn-style-five"><span class="btn-title">Job Post</span></a>
            </div>
          </div>
        </div>
      </div>

      <!-- Mobile Header -->
      <div class="mobile-header">
        <div class="logo"><a href="{{url('')}}"><img src="{{url('public/media/uploads/site_setting/'.$sitesetting->logo)}}" alt="" title=""></a></div>

        <!--Nav Box-->
        <div class="nav-outer clearfix">

          <div class="outer-box">
            <!-- Login/Register -->
            <div class="login-box">
              <a href="{{url('login')}}" class=""><span class="icon-user"></span></a>
            </div>

            <a href="#nav-mobile" class="mobile-nav-toggler navbar-trigger"><span class="flaticon-menu-1"></span></a>
          </div>
        </div>
      </div>

      <!-- Mobile Nav -->
      <div id="nav-mobile"></div>
    </header>
    <!--End Main Header -->