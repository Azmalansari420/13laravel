@include('header')

@php
$testimonials = DB::Table('testimonials')->where('status',1)->orderBy('id','desc')->paginate(12);
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
                            <h2 class="tg-breadcrumb-title mb-5 fs-40">Our Testimonial</h2>
                            <div class="tg-breadcrumb-list-4">
                                <ul>
                                    <li><a href="{{url('')}}">Home</a></li>
                                    <li><i class="fa-sharp fa-solid fa-angle-right"></i></li>
                                    <li>Pages</li>
                                    <li><i class="fa-sharp fa-solid fa-angle-right"></i></li>
                                    <li>Our Testimonial</li>
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

        <div class="tg-chose-area tg-chose-su-2-wrap pt-70 pb-60 p-relative z-index-9 fix">
            <img class="tg-chose-su-2-bg-shape p-absolute" src="{{url('')}}/assets/img/chose/su/shape.png" alt="">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-12">
                        <div class="row align-items-center">


                            
                            @foreach($testimonials as $key => $data)


                            <div class="col-lg-4 col-md-4 wow fadeInUp" data-wow-delay=".4s" data-wow-duration=".9s">
                                <div class="tg-testimonial-item mb-30">
                                    <div class="tg-testimonial-avatar-top d-flex align-items-start justify-content-between">
                                        <div class="tg-testimonial-avatar-inner d-flex align-items-center mr-20 mb-20">
                                            <div class="tg-testimonial-avatar-thumb mr-15">
                                                <img class="rounded-circale" src="{{url('public/media/uploads/testimonials/'.@$data->image)}}" alt="avatar">
                                            </div>
                                            <div class="tg-testimonial-avatar-content">
                                                <h5>{{@$data->name}}</h5>
                                                <span>{{@$data->position}}</span>
                                            </div>
                                        </div>
                                        <div class="tg-testimonial-avatar-qoute">
                                            <span>
                                                <svg width="44" height="34" viewBox="0 0 44 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1.23438 33.5V28.4177L2.53846 28.1579L2.53874 28.1578C5.54288 27.5574 7.72911 26.3475 8.91074 24.4843L8.91078 24.4843L8.91406 24.479C9.51081 23.5115 9.85009 22.4074 9.89965 21.2718L9.92242 20.75H9.40013H2.85938C2.4284 20.75 2.01507 20.5788 1.71033 20.274C1.40558 19.9693 1.23438 19.556 1.23438 19.125V4.25C1.23438 2.18227 2.91664 0.5 4.98438 0.5H17.7344C18.1654 0.5 18.5787 0.671205 18.8834 0.975951C19.1882 1.2807 19.3594 1.69402 19.3594 2.125V19.125V19.1745L19.364 19.1976C19.3646 19.2056 19.3653 19.2163 19.3661 19.2296C19.3684 19.2694 19.3713 19.3294 19.3734 19.4081C19.3776 19.5653 19.3788 19.795 19.3678 20.0841C19.3458 20.6626 19.275 21.4756 19.0821 22.419C18.696 24.3079 17.8253 26.7003 15.8985 28.7905L1.23438 33.5ZM1.23438 33.5H2.85938C8.68388 33.5 13.0411 31.8881 15.8984 28.7906L1.23438 33.5ZM24.6243 33.5V28.4177L25.9283 28.1579L25.9286 28.1578C28.9328 27.5574 31.119 26.3475 32.3006 24.4843L32.3007 24.4843L32.3039 24.479C32.9007 23.5115 33.24 22.4074 33.2895 21.2718L33.3123 20.75H32.79H26.2493C25.8183 20.75 25.4049 20.5788 25.1002 20.274C24.7955 19.9693 24.6243 19.556 24.6243 19.125V4.25C24.6243 2.18227 26.3065 0.5 28.3743 0.5H41.1242C41.5552 0.5 41.9686 0.671206 42.2733 0.975951C42.578 1.2807 42.7492 1.69402 42.7492 2.125V19.125V19.1745L42.7538 19.1975C42.7544 19.2056 42.7551 19.2162 42.7559 19.2294C42.7583 19.2692 42.7611 19.3292 42.7631 19.4079C42.7673 19.5651 42.7685 19.7949 42.7574 20.084C42.7353 20.6625 42.6642 21.4755 42.4712 22.419C42.0848 24.3079 41.2141 26.7003 39.2884 28.7905C36.4311 31.8881 32.0738 33.5 26.2493 33.5H24.6243ZM19.3623 19.1774C19.3622 19.176 19.3623 19.1773 19.3628 19.1823C19.3625 19.1799 19.3623 19.1782 19.3623 19.1774Z" stroke="#D1D1D1" />
                                                </svg>
                                            </span>
                                        </div>
                                    </div>
                                    <p class="tg-testimonial-avatar-para mb-10">“ {{@$data->content}} ”</p>
                                    {{-- <div class="tg-testimonial-ratings">
                                        <span><i class="fa-sharp fa-solid fa-star"></i></span>
                                        <span><i class="fa-sharp fa-solid fa-star"></i></span>
                                        <span><i class="fa-sharp fa-solid fa-star"></i></span>
                                        <span><i class="fa-sharp fa-solid fa-star"></i></span>
                                        <span><i class="fa-sharp fa-solid fa-star"></i></span>
                                    </div> --}}
                                </div>
                            </div>

                            @endforeach

                            

                            
                            
                        </div>
                    </div>


                    <div class="col-xl-12 pagination-wrapper text-center mt-4 d-flex justify-content-center">
                        {{ $testimonials->links('pagination::bootstrap-4') }}
                    </div>
                   


                </div>
            </div>
        </div>


      

        

    </main>
    <!-- main-area-end -->


@include('footer')