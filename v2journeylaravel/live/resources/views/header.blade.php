@php

$sitesetting = DB::Table('site_setting')->where('id',1)->first();

@endphp

<!DOCTYPE html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="author" content="{{url('')}}" />
    <title><?=env('website_name') ?></title>

    <meta name="description" content="<?=env('website_name') ?>" />
    <meta name="keywords" content="<?=env('website_name') ?> " />
    <meta name="robots" content="INDEX,FOLLOW" />
    <meta name="developer" content="<?=env('website_name') ?>" />

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Favicons - Place favicon.ico in the root directory -->
    <link rel="apple-touch-icon" sizes="57x57" href="{{url('public/media/uploads/site_setting/'.$sitesetting->logo)}}" />
    <link rel="apple-touch-icon" sizes="60x60" href="{{url('public/media/uploads/site_setting/'.$sitesetting->logo)}}" />
    <link rel="apple-touch-icon" sizes="72x72" href="{{url('public/media/uploads/site_setting/'.$sitesetting->logo)}}" />
    <link rel="apple-touch-icon" sizes="76x76" href="{{url('public/media/uploads/site_setting/'.$sitesetting->logo)}}" />
    <link rel="apple-touch-icon" sizes="114x114" href="{{url('public/media/uploads/site_setting/'.$sitesetting->logo)}}" />
    <link rel="apple-touch-icon" sizes="120x120" href="{{url('public/media/uploads/site_setting/'.$sitesetting->logo)}}" />
    <link rel="apple-touch-icon" sizes="144x144" href="{{url('public/media/uploads/site_setting/'.$sitesetting->logo)}}" />
    <link rel="apple-touch-icon" sizes="152x152" href="{{url('public/media/uploads/site_setting/'.$sitesetting->logo)}}" />
    <link rel="apple-touch-icon" sizes="180x180" href="{{url('public/media/uploads/site_setting/'.$sitesetting->logo)}}" />
    <link rel="icon" type="image/png" sizes="32x32" href="{{url('public/media/uploads/site_setting/'.$sitesetting->logo)}}" />
    <link rel="icon" type="image/png" sizes="96x96" href="{{url('public/media/uploads/site_setting/'.$sitesetting->logo)}}" />
    <link rel="icon" type="image/png" sizes="16x16" href="{{url('public/media/uploads/site_setting/'.$sitesetting->logo)}}" />
    <link rel="manifest" href="{{url('')}}/assets/img/favicons/manifest.json" />
    <meta name="msapplication-TileColor" content="#ffffff" />
    <meta name="msapplication-TileImage" content="{{url('public/media/uploads/site_setting/'.$sitesetting->logo)}}" />
    <meta name="theme-color" content="#fff" />
    <link rel="preconnect" href="https://fonts.googleapis.com/" />
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&amp;family=Bricolage+Grotesque:opsz,wght@12..96,200..800&amp;family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;family=Rubik:ital,wght@0,300..900;1,300..900&amp;display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="{{url('assets/css/plugins.css')}}" />
    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="{{url('assets/css/style.css')}}" />
  </head>

  <style>
    .vs-breadcrumb {
      padding: 68px 0 80px;
      position: relative;
  }
  </style>

  <body class="vs-body">
    
    <!--=================
    Preloader
  =================-->
    <!-- <div class="preloader">
      <button class="vs-btn preloaderCls">Cancel Preloader</button>
      <div class="preloader-inner">
        <img src="{{url('public/media/uploads/site_setting/'.$sitesetting->logo)}}" style="max-width: 130px!important;height: 105px!important;" alt="logo" />
        <span class="loader"></span>
      </div>
    </div> -->
    <!--=================
    Mobile Menu
  ================= -->
    <div class="vs-menu-wrapper">
      <div class="vs-menu-area text-center">
        <div class="mobile-logo">
          <a href="{{url('')}}"
            ><img src="{{url('public/media/uploads/site_setting/'.$sitesetting->logo)}}" style="max-width: 130px!important;height: 105px!important;" alt="<?=env('website_name') ?>" class="logo header-logomobile-img"
          /></a>
          <button class="vs-menu-toggle"><i class="fal fa-times"></i></button>
        </div>
        <div class="vs-mobile-menu">
          <ul>
            <li><a href="{{url('')}}">Home</a></li>
            <li><a href="{{url('about')}}">About Us</a></li>
            <li><a href="{{url('destinations')}}">Destinations</a></li>
            <li><a href="{{url('packages')}}">Packages</a></li>            
            <li><a href="{{url('gallery')}}">Gallery</a></li>
            <li><a href="{{url('faq')}}">Faq's</a></li>
            <li><a href="{{url('contact')}}">Contact</a></li>
          </ul>
        </div>
      </div>
    </div>

    <!-- =================
      Popup Search Box
    ================= -->
    {{-- <div class="popup-search-box">
      <button class="searchClose"><i class="fal fa-times"></i></button>
      <form action="#">
        <input
          type="text"
          class="border-theme"
          placeholder="What are you looking for"
        />
        <button type="submit"><i class="fal fa-search"></i></button>
      </form>
    </div> --}}
    <!-- =================
      Sticky Navbar
    ================= -->
    <div id="navbars" class="header-sticky navbars">
      <div class="container custom-container">
        <div class="row justify-content-between align-items-center">
          <div class="col-auto col-lg-2">
            <button class="vs-menu-toggle d-inline-block d-lg-none">
              <i class="fal fa-bars"></i>
            </button>
            <div class="logo d-none d-lg-block">
              <a href="{{url('')}}"
                ><img src="{{url('public/media/uploads/site_setting/'.$sitesetting->logo)}}" style="max-width: 130px!important;height: 105px!important;" alt="<?=env('website_name') ?>" class="logo"
              /></a>
            </div>
          </div>
          <div class="col-xl-auto col-lg-auto col-sm-3 d-none d-sm-block">
            <nav class="main-menu d-none d-lg-block">
              <ul>
                <li><a href="{{url('')}}">Home</a></li>
                <li><a href="{{url('about')}}">About Us</a></li>
                <li><a href="{{url('destinations')}}">Destinations</a></li>
                <li><a href="{{url('packages')}}">Packages</a></li>
                <li><a href="{{url('gallery')}}">Gallery</a></li>
                <li><a href="{{url('faq')}}">Faq's</a></li>
                <li><a href="{{url('contact')}}">Contact</a></li>

              </ul>
            </nav>
            <div class="logo d-lg-none">
              <a href="{{url('')}}"
                ><img src="{{url('public/media/uploads/site_setting/'.$sitesetting->logo)}}" style="max-width: 130px!important;height: 105px!important;" alt="<?=env('website_name') ?>" class="logo"
              /></a>
            </div>
          </div>
          <div class="col-xl-3 col-md-auto col-auto">
            <div class="header-wc style2">
              <button class="wc-link2 searchBoxTggler text-title-color">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="21"
                  height="20"
                  viewBox="0 0 21 20"
                  fill="none"
                >
                  <path
                    d="M20.4174 16.6954L17.2213 13.4773C19.3155 10.0703 18.8936 5.54217 15.9593 2.58766C12.5328 -0.862552 6.9769 -0.862552 3.55037 2.58766C0.123835 6.03787 0.123835 11.6322 3.55037 15.0824C6.5354 18.088 11.1341 18.4736 14.5333 16.2469L17.7019 19.4335C18.4521 20.1888 19.6711 20.1888 20.4213 19.4335C21.1675 18.6781 21.1675 17.4507 20.4174 16.6954ZM5.711 12.9029C3.48395 10.6604 3.48395 7.00959 5.711 4.76715C7.93805 2.52471 11.5638 2.52471 13.7909 4.76715C16.018 7.00959 16.018 10.6604 13.7909 12.9029C11.5638 15.1453 7.93805 15.1453 5.711 12.9029Z"
                    fill="#F6F5F5"
                  ></path>
                </svg>
              </button>
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="6"
                height="39"
                viewBox="0 0 6 39"
                fill="none"
              >
                <rect
                  x="5"
                  width="1"
                  height="39"
                  fill="#D9D9D9"
                  fill-opacity="0.7"
                ></rect>
                <rect
                  y="9"
                  width="1"
                  height="20"
                  fill="#D9D9D9"
                  fill-opacity="0.7"
                ></rect>
              </svg>
              <div class="logo d-none d-sm-block">
                <a href="{{url('destinations')}}" class="vs-btn style10">
                  <span>let’s plan</span>
                </a>
              </div>
              <div class="logo d-sm-none">
                <a href="{{url('')}}"
                  ><img src="{{url('public/media/uploads/site_setting/'.$sitesetting->logo)}}" style="max-width: 130px!important;height: 105px!important;" alt="<?=env('website_name') ?>" class="logo"
                /></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- =================
      Main Section Wrapper
    ================= -->
    <main class="main">
      <!--================= Header Area =================-->
      <header class="vs-header layout2">
        <!-- Main Menu Area -->
        <div class="sticky-wrapper position-relative">
          <div class="header-top-wrap">
            <div class="container custom-container">
              <div class="row">
                <div class="col-lg-12">
                  <div class="header-top">
                    <div
                      class="row g-3 justify-content-between align-items-center"
                    >
                      <div class="col-md-6 d-none d-md-block">
                        <div class="contact-info">
                          <ul class="custom-ul">
                            <li>
                              <i class="fa-solid fa-phone-volume"></i>
                              <a href="tel:{{$sitesetting->mobile}}">{{$sitesetting->mobile}}</a>
                            </li>
                            <li>
                              <svg
                                xmlns="http://www.w3.org/2000/svg"
                                width="4"
                                height="22"
                                viewBox="0 0 4 22"
                                fill="none"
                              >
                                <line
                                  x1="0.75"
                                  y1="2.774e-08"
                                  x2="0.749999"
                                  y2="21.6114"
                                  stroke="white"
                                  stroke-opacity="0.3"
                                  stroke-width="1.5"
                                />
                                <line
                                  x1="3.5"
                                  y1="3.92926"
                                  x2="3.5"
                                  y2="17.682"
                                  stroke="white"
                                  stroke-opacity="0.3"
                                />
                              </svg>
                            </li>
                            <li>
                              <i class="fa-solid fa-envelope"></i>
                              <a href="mailto:{{$sitesetting->email}}">
                                {{$sitesetting->email}}
                              </a>
                            </li>
                          </ul>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="social-share">
                          <span class="info-share">Follow on:</span>
                          <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="4"
                            height="22"
                            viewBox="0 0 4 22"
                            fill="none"
                          >
                            <line
                              x1="0.75"
                              y1="2.774e-08"
                              x2="0.749999"
                              y2="21.6114"
                              stroke="white"
                              stroke-opacity="0.3"
                              stroke-width="1.5"
                            />
                            <line
                              x1="3.5"
                              y1="3.92941"
                              x2="3.5"
                              y2="17.6821"
                              stroke="white"
                              stroke-opacity="0.3"
                            />
                          </svg>
                          <ul class="custom-ul">
                            <li>
                              <a href="{{$sitesetting->twitter}}" target="_blank">
                                <i class="fa-brands fa-x-twitter"></i>
                              </a>
                            </li>
                            <li>
                              <a
                                href="{{$sitesetting->facebook}}"
                                target="_blank"
                              >
                                <i class="fab fa-facebook-f"></i>
                              </a>
                            </li>
                            <li>
                              <a
                                href="{{$sitesetting->instagram}}"
                                target="_blank"
                              >
                                <i class="fab fa-instagram"></i>
                              </a>
                            </li>
                            <li>
                              <a
                                href="{{$sitesetting->youtube}}"
                                target="_blank"
                              >
                                <i class="fab fa-youtube"></i>
                              </a>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="header-bottom">
            <div class="container custom-container">
              <div class="row justify-content-between align-items-center">
                <div class="col-xl-3 col-lg-auto">
                  <div
                    class="header-logo d-flex justify-content-between align-items-center"
                  >
                    <a href="{{url('')}}"
                      ><img
                        src="{{url('public/media/uploads/site_setting/'.$sitesetting->logo)}}"
                        alt="<?=env('website_name') ?>"
                        class="logo header-logo-img" style="max-width: 130px!important;height: 105px!important;"
                    /></a>
                    <div class="d-flex align-items-center gap-3">
                      <button class="wc-link2 searchBoxTggler d-lg-none">
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          width="21"
                          height="20"
                          viewBox="0 0 21 20"
                          fill="none"
                        >
                          <path
                            d="M20.4174 16.6954L17.2213 13.4773C19.3155 10.0703 18.8936 5.54217 15.9593 2.58766C12.5328 -0.862552 6.9769 -0.862552 3.55037 2.58766C0.123835 6.03787 0.123835 11.6322 3.55037 15.0824C6.5354 18.088 11.1341 18.4736 14.5333 16.2469L17.7019 19.4335C18.4521 20.1888 19.6711 20.1888 20.4213 19.4335C21.1675 18.6781 21.1675 17.4507 20.4174 16.6954ZM5.711 12.9029C3.48395 10.6604 3.48395 7.00959 5.711 4.76715C7.93805 2.52471 11.5638 2.52471 13.7909 4.76715C16.018 7.00959 16.018 10.6604 13.7909 12.9029C11.5638 15.1453 7.93805 15.1453 5.711 12.9029Z"
                            fill="#141414"
                          ></path>
                        </svg>
                      </button>
                      <button
                        class="vs-menu-toggle style2 d-inline-block d-lg-none"
                      >
                        <i class="fal fa-bars"></i>
                      </button>
                    </div>
                  </div>
                </div>
                <div
                  class="col-xl-9 col-lg-auto d-none d-lg-flex justify-content-end gap-md-4 gap-xl-5"
                >
                  <nav class="main-menu menu-style1 v2 d-none d-lg-block">
                    <ul
                      class="d-flex justify-content-center align-items-center"
                    >
                    <li><a href="{{url('')}}">Home</a></li>
                    <li><a href="{{url('about')}}">About Us</a></li>
                    <li><a href="{{url('destinations')}}">Destinations</a></li>
                     <li><a href="{{url('packages')}}">Packages</a></li>
                      <li><a href="{{url('gallery')}}">Gallery</a></li>
                      <li><a href="{{url('faq')}}">Faq's</a></li>
                      <li><a href="{{url('contact')}}">Contact</a></li>

                    </ul>
                  </nav>
                  <div class="header-wc style2">
                    {{-- <button class="wc-link2 searchBoxTggler">
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="21"
                        height="20"
                        viewBox="0 0 21 20"
                        fill="none"
                        class="text-title-color"
                      >
                        <path
                          d="M20.4174 16.6954L17.2213 13.4773C19.3155 10.0703 18.8936 5.54217 15.9593 2.58766C12.5328 -0.862552 6.9769 -0.862552 3.55037 2.58766C0.123835 6.03787 0.123835 11.6322 3.55037 15.0824C6.5354 18.088 11.1341 18.4736 14.5333 16.2469L17.7019 19.4335C18.4521 20.1888 19.6711 20.1888 20.4213 19.4335C21.1675 18.6781 21.1675 17.4507 20.4174 16.6954ZM5.711 12.9029C3.48395 10.6604 3.48395 7.00959 5.711 4.76715C7.93805 2.52471 11.5638 2.52471 13.7909 4.76715C16.018 7.00959 16.018 10.6604 13.7909 12.9029C11.5638 15.1453 7.93805 15.1453 5.711 12.9029Z"
                          fill="currentColor"
                        />
                      </svg>
                    </button> --}}
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      width="6"
                      height="39"
                      viewBox="0 0 6 39"
                      fill="none"
                    >
                      <rect
                        x="5"
                        width="1"
                        height="39"
                        fill="#9A9696"
                        fill-opacity="0.7"
                      />
                      <rect
                        y="9"
                        width="1"
                        height="20"
                        fill="#9A9696"
                        fill-opacity="0.7"
                      />
                    </svg>
                    <a href="{{url('destinations')}}" class="vs-btn style8">
                      <span>let’s plan</span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </header>
      <!--================= Header Area end =================-->