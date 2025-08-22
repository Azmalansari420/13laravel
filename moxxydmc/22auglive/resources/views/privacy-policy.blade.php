@include('header')
@php
$about = DB::Table('content')->where('id',3)->first();
@endphp
    <!-- main-area -->
    <main>

        <!-- tg-breadcrumb-area-start -->
        <div class="tg-breadcrumb-area 00tg-breadcrumb-spacing-5 fix p-relative z-index-1 include-bg get-banner-image" >
           <img src="{{ asset('public/media/uploads/content/' . @$about->image) }}" class="d-block w-100">
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