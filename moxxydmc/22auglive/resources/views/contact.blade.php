@include('header')
@php
$about = DB::Table('content')->where('id',10)->first();
@endphp

    <!-- main-area -->
    <main>
<style>
   .get-banner-image {
    height: 600px; /* Best for desktop */
    overflow: hidden;
}
.get-banner-image img {
    width: 100%;
    height: 100%;
    object-fit: cover; /* Fill area, crop if needed */
    display: block;
}



@media (max-width: 991px) {
    .get-banner-image {
        height: 400px; /* For tablets */
    }
}

@media (max-width: 576px) {
    .get-banner-image {
        height: 280px; /* For mobiles */
    }
    .tg-header-height
    {
        height:103px!important;
    }
}

.tg-team-details-contact a {
    font-weight: 500;
    font-size: 18px;
    color: var(--tg-common-black);
    text-transform: none;
}
</style>
        <!-- tg-breadcrumb-area-start -->

        <div class="tg-breadcrumb-area 00tg-breadcrumb-spacing-5 fix p-relative z-index-1 include-bg get-banner-image" >
           <img src="{{ asset('public/media/uploads/content/' . @$about->image) }}" class="d-block w-100">
        </div>
       {{--  <div class="tg-breadcrumb-area tg-breadcrumb-spacing-5 fix p-relative z-index-1 include-bg" data-background="{{url('')}}/assets/img/breadcrumb/breadcrumb.jpg">
            <div class="tg-hero-top-shadow"></div>
            <div class="tg-breadcrumb-shadow"></div>
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="tg-breadcrumb-content text-center">
                            <h2 class="tg-breadcrumb-title mb-10 fs-40">Contact With Us</h2>
                            <div class="tg-breadcrumb-list-4">
                                <ul>
                                    <li><a href="{{url('')}}">Home</a></li>
                                    <li><i class="fa-sharp fa-solid fa-angle-right"></i></li>
                                    <li>Contact</li>
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
        </div> --}}
        <!-- tg-breadcrumb-area-end -->

        <!-- tg-contact-area-start -->
        <div class="tg-contact-area pt-130 p-relative z-index-1 pb-100">
            <img class="tg-team-shape-2 d-none d-md-block" src="{{url('')}}/assets/img/banner/banner-2/shape.png" alt="">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-5">
                        <div class="tg-team-details-contant tg-contact-info-wrap mb-30">
                            {{-- <h6 class="mb-15">Information:</h6>
                            <p class="mb-25">Brendan Fraser, renowned actor of the silver screen, has taken on a new  as a tour guide, leveraging his passion for adventure</p> --}}
                            <div class="tg-team-details-contact-info mb-35">
                                <div class="tg-team-details-contact">
                                    <div class="item">
                                        <span>Phone :</span> 
                                        <a href="tel:{{@$sitesetting->mobile}}">{{@$sitesetting->mobile}}</a> , 
                                        <a href="tel:{{@$sitesetting->alt_mobile}}">{{@$sitesetting->alt_mobile}}</a>
                                    </div>
                                    <div class="item">
                                        <span>Website : </span>
                                        <a href="{{url('')}}">{{url('')}}</a>
                                    </div>
                                    <div class="item">
                                        <span>E-mail : </span>
                                        <a href="mailto:{{@$sitesetting->email}}">{{@$sitesetting->email}}</a> , 
                                        <a href="mailto:{{@$sitesetting->alt_email}}">{{@$sitesetting->alt_email}}</a>
                                    </div>
                                    <div class="item">
                                        <span>Address :</span>
                                        <a href="#!"> {!! @$sitesetting->address !!}</a>
                                    </div>
                                </div>
                            </div>
                            <div class="tg-contact-map h-100">
                                {!! @$sitesetting->map !!}
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="tg-contact-content-wrap ml-40 mb-30">
                            <h3 class="tg-contact-title mb-15">Let's connect and get to know <br>
                                each other</h3>
                            @if(session('success'))
                                <p style="color: green;">{{ session('success') }}</p>
                            @endif
                            <div class="tg-contact-form tg-tour-about-review-form">
                                <form  action="{{ route('contact.store') }}" method="post">
                                    @csrf
                                    <div class="row">
                                        <div class="col-lg-6 mb-25">
                                            <input class="input" type="text" name="name" placeholder="Name" required>
                                        </div>
                                        <div class="col-lg-6 mb-25">
                                            <input class="input" type="email" name="email" placeholder="E-mail">
                                        </div>
                                        <div class="col-lg-6 mb-25">
                                            <input class="input" type="text" name="mobile" placeholder="Mobile" required>
                                        </div>
                                        <div class="col-lg-6 mb-25">
                                            <input class="input" type="text" name="subject" placeholder="Subject">
                                        </div>
                                        <div class="col-lg-12">
                                            <textarea name="message" class="textarea  mb-5" placeholder="Comments"></textarea>
                                            
                                            <button type="submit" name="submit" class="tg-btn" name="message">Send Message</button>

                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- tg-contact-area-end -->
    </main>
    <!-- footer-area-start -->
   @include('footer')