<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    {!! $meta_html ?? '' !!}
    {{-- <title>MOXXY DMC</title>
    <meta name="description" content="MOXXY DMC"> --}}
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" type="image/x-icon" href="{{url('public/media/uploads/site_setting/'.@$sitesetting->logo)}}">

    <!-- CSS here -->
    <link rel="stylesheet" href="{{url('')}}/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{url('')}}/assets/css/animate.min.css">
    <link rel="stylesheet" href="{{url('')}}/assets/css/magnific-popup.css">
    <link rel="stylesheet" href="{{url('')}}/assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="{{url('')}}/assets/css/swiper-bundle.min.css">
    <link rel="stylesheet" href="{{url('')}}/assets/css/flatpicker.css">
    <link rel="stylesheet" href="{{url('')}}/assets/css/odometer.css">
    <link rel="stylesheet" href="{{url('')}}/assets/css/default.css">
    <link rel="stylesheet" href="{{url('')}}/assets/css/main.css">
    <link rel="stylesheet" href="{{url('')}}/assets/css/custom.css">
</head>

<body>
<style>
    .tg-location-thumb {
    width: 100%;
    height: 350px; /* Or any fixed height you want */
    overflow: hidden;
    border-radius: 25px;
    position: relative;
}

.tg-location-thumb img {
    width: 100%;
    height: 100%;
    object-fit: cover; /* This ensures the image fills the area without distortion */
    border-radius: 25px;
    display: block;
}

.bt_bb_grid_item_post_thumbnail {
    width: 100%;
    height: 400px; /* or any fixed height */
    overflow: hidden;
    border-radius: 20px; /* optional for rounded corners */
}

.bt_bb_grid_item_post_thumbnail img {
    width: 100%;
    height: 100%;
    object-fit: cover; /* ensures the image fills without distortion */
    display: block;
    border-radius: 20px; /* match with container */
}


</style>
    <!-- <div id="loading">
        <div class="loader"></div>
    </div> -->
    
    <!-- Scroll-top -->
    <button class="scroll__top scroll-to-target" data-target="html">
        <i class="fa-sharp fa-regular fa-arrow-up"></i>
    </button>
    <!-- Scroll-top-end-->


    <!-- header-search -->
    <div class="search__popup">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="search__wrapper">
                        <div class="search__close">
                            <button type="button" class="search-close-btn">
                                <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M17 1L1 17" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round"></path>
                                    <path d="M1 1L17 17" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round"></path>
                                </svg>
                            </button>
                        </div>
                        <div class="search__form">
                            <form action="{{ url('/tour-package') }}" method="GET">
                                <div class="search__input">
                                    <input class="search-input-field" type="text" placeholder="Type keywords here" name="search">
                                    <span class="search-focus-border"></span>
                                    <button>
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M9.55 18.1C14.272 18.1 18.1 14.272 18.1 9.55C18.1 4.82797 14.272 1 9.55 1C4.82797 1 1 4.82797 1 9.55C1 14.272 4.82797 18.1 9.55 18.1Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                            <path d="M19.0002 19.0002L17.2002 17.2002" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        </svg>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="search-popup-overlay"></div>
    <!-- header-search-end -->

    <!-- header-area -->
    <header class="tg-header-height">
        <div class="tg-header__area">
            <div class="tg-header-top tg-header-top-space tg-primary-bg d-none d-lg-block">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="tg-header-top-info d-flex align-items-center">
                                <a href="#!"><i class="mr-5 fa-regular fa-location-dot"></i> {!! @$sitesetting->address !!}</a>
                                <span class="tg-header-dvdr mr-10 ml-10"></span>
                                <a href="mailto:{{@$sitesetting->email}}"><i class="mr-5 fa-regular fa-envelope"></i> {{@$sitesetting->email}}</a>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="tg-header-top-info d-flex align-items-center justify-content-end">
                                <a style="text-align: center;" href="tel:{{@$sitesetting->mobile}}"><i class="fa-sharp fa-regular fa-phone"></i> {{@$sitesetting->mobile}}</a>
                                <a style="text-align: center;" href="tel:{{@$sitesetting->alt_mobile}}"><i class="fa-sharp fa-regular fa-phone"></i> {{@$sitesetting->alt_mobile}}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tg-header-4-bootom tg-header-lg-space" id="header-sticky">
                <div class="container">
                    <div class="row align-items-center">

                        <div class="col-lg-11 col-7">
                            <div class="tgmenu__wrap d-flex align-items-center">
                                <div class="logo flex-auto">
                                    <a href="{{url('')}}"><img src="{{url('public/media/uploads/site_setting/'.@$sitesetting->logo)}}" alt="Logo" style="width: 213px;"></a>
                                </div>
                                <nav class="tgmenu__nav  header-margin d-none d-xl-block">
                                    <div class="tgmenu__navbar-wrap tgmenu__main-menu tgmenu__navbar-wrap-4 d-none d-xl-flex">
                                        <ul class="navigation">
                                            <li class="active"><a href="{{url('')}}">HOME</a></li>
                                            <li class=""><a href="{{url('about')}}">ABOUT US</a></li>

                                            <li class="menu-item-has-children"><a href="{{url('tours')}}">DESTINATION</a>
                                                <ul class="sub-menu">
                                                    @php
                                                    $country = DB::Table('country')->where('status',1)->get();
                                                    @endphp
                                                    @foreach($country as $data)
                                                    <li><a href="{{@$data->slug}}">{{@$data->name}}</a></li>
                                                    @endforeach
                                                </ul>
                                            </li>

                                            <li class=""><a href="{{url('tour-package')}}">TOUR PACKAGES</a></li>
                                            <li class=""><a href="{{url('gallery')}}">GALLERY</a></li>
                                            <li class=""><a href="{{url('testimonial')}}">TESTIMONIALS</a></li>
                                            <li><a href="{{url('contact')}}">CONTACT</a></li>
                                        </ul>
                                    </div>
                                </nav>
                            </div>
                        </div>

                        <div class="col-lg-1 col-5">
                            <div class="tg-menu-right-action tg-menu-right-action-3 tg-menu-4-right-action d-flex align-items-center justify-content-end">
                                <button class="search-button search-open-btn">
                                    <svg width="19" height="18" viewBox="0 0 19 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M17.3047 16.8044L13.8294 13.3291M15.9857 8.14485C15.9857 12.1989 12.6992 15.4854 8.64519 15.4854C4.59114 15.4854 1.30469 12.1989 1.30469 8.14485C1.30469 4.09081 4.59114 0.804352 8.64519 0.804352C12.6992 0.804352 15.9857 4.09081 15.9857 8.14485Z" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </button>
                               
                                <div class="tg-header-menu-bar lh-1 p-relative ml-10">
                                    <button class="tgmenu-offcanvas-open-btn menu-tigger d-none d-xl-block">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </button>
                                    <button class="tgmenu-offcanvas-open-btn mobile-nav-toggler d-block d-xl-none">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Mobile Menu  -->
        <div class="tgmobile__menu">
            <nav class="tgmobile__menu-box">
                <div class="close-btn"><i class="fa-solid fa-xmark"></i></div>
                <div class="nav-logo">
                    <a href="{{url('')}}"><img src="{{url('public/media/uploads/site_setting/'.@$sitesetting->logo)}}" alt="logo"></a>
                </div>
                <div class="tgmobile__search">
                    <form action="#">
                        <input type="text" placeholder="Search here...">
                        <button><i class="fas fa-search"></i></button>
                    </form>
                </div>
                <div class="tgmobile__menu-outer">
                    <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
                </div>
                <div class="social-links">
                    <ul class="list-wrap">
                        <li><a href="{{@$sitesetting->facebook}}"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="{{@$sitesetting->twitter}}"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="{{@$sitesetting->instagram}}"><i class="fab fa-instagram"></i></a></li>
                        <li><a href="{{@$sitesetting->youtube}}"><i class="fab fa-youtube"></i></a></li>
                    </ul>
                </div>
            </nav>
        </div>
        <div class="tgmobile__menu-backdrop"></div>
        <!-- End Mobile Menu -->

        <!-- offCanvas-menu -->
        <div class="offCanvas__info">
            <div class="offCanvas__close-icon menu-close">
                <button><i class="fa-sharp fa-regular fa-xmark"></i></button>
            </div>
            <div class="offCanvas__logo mb-30">
                <a href="{{url('')}}"><img src="{{url('public/media/uploads/site_setting/'.@$sitesetting->logo)}}" alt="Logo"></a>
            </div>
            <div class="offCanvas__side-info mb-30">
                <div class="contact-list mb-30">
                    <h4>Office Address</h4>
                    <p>{!! @$sitesetting->address !!}</p>
                </div>
                <div class="contact-list mb-30">
                    <h4>Phone Number</h4>
                    <p>{{@$sitesetting->mobile}}</p>
                    <p>{{@$sitesetting->alt_mobile}}</p>
                </div>
                <div class="contact-list mb-30">
                    <h4>Email Address</h4>
                    <p>{{@$sitesetting->email}}</p>
                    <p>{{@$sitesetting->alt_email}}</p>
                </div>
            </div>
            <div class="offCanvas__social-icon mt-30">
                <a href="{{@$sitesetting->facebook}}"><i class="fab fa-facebook-f"></i></a>
                <a href="{{@$sitesetting->twitter}}"><i class="fab fa-twitter"></i></a>
                <a href="{{@$sitesetting->youtube}}"><i class="fab fa-youtube"></i></a>
                <a href="{{@$sitesetting->instagram}}"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
        <div class="offCanvas__overly"></div>
        <!-- offCanvas-menu-end -->

    </header>
    <!-- header-area-end -->

    <!-- main-area -->