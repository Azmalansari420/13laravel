@include('header')
@php
$about = DB::Table('content')->where('id',4)->first();
@endphp
    <!-- main-area -->
    <main>

        <!-- tg-breadcrumb-area-start -->
        <div class="tg-breadcrumb-area tg-breadcrumb-spacing-5 fix p-relative z-index-1 include-bg" data-background="{{url('')}}/assets/img/breadcrumb/breadcrumb.jpg">
            <div class="tg-hero-top-shadow"></div>
            <div class="tg-breadcrumb-shadow"></div>
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="tg-breadcrumb-content text-center">
                            <h2 class="tg-breadcrumb-title mb-5 fs-40">Refund & Return Policy</h2>
                            <div class="tg-breadcrumb-list-4">
                                <ul>
                                    <li><a href="{{url('')}}">Home</a></li>
                                    <li><i class="fa-sharp fa-solid fa-angle-right"></i></li>
                                    <li>Pages</li>
                                    <li><i class="fa-sharp fa-solid fa-angle-right"></i></li>
                                    <li>Refund & Return Policy</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tg-hero-bottom-shape d-none d-md-block">
                <span>
                    <svg width="432" height="187" viewBox="0 0 432 187" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path class="line-1" opacity="0.4" d="M39.6042 428.345C4.41235 355.065 -24.3018 203.867 142.377 185.309C350.725 162.111 488.893 393.541 289.169 313.515C129.389 249.494 458.202 85.4772 642.58 11.4713" stroke="white" stroke-width="24" />
                    </svg>
                </span>
            </div>
            <div class="tg-hero-bottom-shape-2 d-none d-md-block">
                <span>
                    <svg width="154" height="243" viewBox="0 0 154 243" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path class="line-1" opacity="0.4" d="M144.616 328.905C116.117 300.508 62.5986 230.961 76.5162 179.949C93.9131 116.184 275.231 7.44494 -65.0181 12.8762" stroke="white" stroke-width="24" />
                    </svg>
                </span>
            </div>
        </div>
        <!-- tg-breadcrumb-area-end -->

        <!-- tg-about-us-area-start -->
        <div class="tg-about-area p-relative z-index-1 pt-80 pb-90">
            <img class="tg-about-details-shape p-absolute d-none d-lg-block" src="{{url('')}}/assets/img/about/details/shape.png" alt="shape">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <div class="tg-chose-content mb-35 ml-60">
                            <div class="tg-chose-section-title mb-30">
                                {!! @$about->content !!}                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- tg-about-us-area-end -->


    </main>
    <!-- main-area-end -->
@include('footer')