@include('header')

<style>
    .carousel-item>img {
    border-radius: 10px;
}


    .img-hover-open:hover {
    transform: scale(1.1) !important;
}

.tg-breadcrumb-spacing-5 {
    padding-top: 350px;
    padding-bottom: 305px;
}
.bt_bb_grid_item_post_thumbnail {
    width: 100%;
    height: 350px; /* You can adjust the height */
    overflow: hidden;
    position: relative;
}

.bt_bb_grid_item_post_thumbnail img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    display: block;
}

/*.bt_bb_grid_item_post_thumbnail img {
    width: 100%;
    height: 250px !important;
    opacity: 1;
}*/
</style>
    <!-- main-area -->
    <main>

        <!-- tg-breadcrumb-area-start -->
        <div class="tg-breadcrumb-area tg-breadcrumb-spacing-5 fix p-relative z-index-1 include-bg" data-background="{{url('public/media/uploads/sight_seeing/'.@$EDITDATA[0]->banner)}}">
            
        </div>
        <!-- tg-breadcrumb-area-end -->


        <!-- tg-tour-details-area-start -->
        <div class="tg-chose-area pt-40 pb-10 p-relative z-index-1">
            <img class="tg-chose-5-map-shape d-none d-lg-block" src="{{url('')}}/assets/img/chose/chose-5/map.png" alt="">
            <div class="container">
                <div class="row a1lign-items-center">
                    
                    <div class="col-lg-12">
                        <div class="tg-chose-section-title mb-30">
                            <h5 class="tg-section-su-subtitle su-subtitle-2 mb-20 wow fadeInUp" data-wow-delay=".4s" data-wow-duration=".9s">{{cityname(@$EDITDATA[0]->city_id)}}</h5>
                            <h2 class="mb-15 text-capitalize wow fadeInUp" data-wow-delay=".4s" data-wow-duration=".9s">{{@$EDITDATA[0]->name}}</h2>
                        </div>
                        <div class="tg-chose-5-para">
                            {!! @$EDITDATA[0]->full_content  !!}
                        </div>
                      
                    </div>
                </div>

               
            </div>
        </div>
        <!-- tg-tour-details-area-end -->

@php
$where_to_go = collect(json_decode(@$EDITDATA[0]->where_to_go, true));
// dd($where_to_go);
@endphp
@if (!$where_to_go->isEmpty())
        <!-- Where To Go -->
        <div class="tg-location-area pt-25 pb-40 tg-grey-bg p-relative z-index-1">
            <div class="container">
                <div class="row align-items-end">
                    <div class="col-lg-9">
                        <div class="tg-location-section-title mb-40">
                            <h2 class="mb-15 text-capitalize wow fadeInUp" data-wow-delay=".5s" data-wow-duration=".9s">Where To Go</h2>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="tg-listing-5-slider-navigation text-end mb-50 wow fadeInUp" data-wow-delay=".4s" data-wow-duration="1s">
                            <button class="tg-listing-5-slide-prev"><i class="fa-solid fa-arrow-left-long"></i></button>
                            <button class="tg-listing-5-slide-next"><i class="fa-solid fa-arrow-right-long"></i></button>
                         </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="swiper-container tg-location-5-slider1 p-relative fix">
                            <div class="swiper-wrapper">
                                @foreach($where_to_go as $value)
                               
                                <div class="swiper-slide">
                                    <div class="gallery_item-wrap Russia">
                                        <div class="bt_bb_grid_item bt_bb_tile_format11">
                                            <div class="bt_bb_grid_item_inner" data-hw="1">
                                                <div class="bt_bb_grid_item_post_thumbnail">
                                                    <a href="#!" title="Moscow">
                                                        <img class="bt_bb_grid_item_inner_image" src="{{url('public/media/uploads/sight_seeing/'.@$value['where_to_go_image'][0])}}">
                                                    </a>
                                                </div>
                                                <div class="bt_bb_grid_item_inner_content"><h5 class="bt_bb_grid_item_post_title">{{$value['where_to_go_name']}}</h5><div class="bt_bb_grid_item_post_excerpt">{{$value['where_to_go_description']}}</div></div><div class="bt_bb_grid_item_post_title_init"><h5>{{$value['where_to_go_name']}}</h5></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endif

        


@php
$experiences_activities = collect(json_decode(@$EDITDATA[0]->experiences_activities, true));
// dd($experiences_activities);
@endphp
@if (!$experiences_activities->isEmpty())
        <!-- Where To Go -->
        <div class="tg-location-area pt-25 pb-40 tg-grey-bg p-relative z-index-1">
            <div class="container">
                <div class="row align-items-end">
                    <div class="col-lg-9">
                        <div class="tg-location-section-title mb-40">
                            <h2 class="mb-15 text-capitalize wow fadeInUp" data-wow-delay=".5s" data-wow-duration=".9s">Experiences or Activities</h2>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="tg-listing-5-slider-navigation text-end mb-50 wow fadeInUp" data-wow-delay=".4s" data-wow-duration="1s">
                            <button class="tg-listing-5-slide-prev"><i class="fa-solid fa-arrow-left-long"></i></button>
                            <button class="tg-listing-5-slide-next"><i class="fa-solid fa-arrow-right-long"></i></button>
                         </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="swiper-container tg-location-5-slider1 p-relative fix">
                            <div class="swiper-wrapper">
                                @foreach($experiences_activities as $value)
                               
                                <div class="swiper-slide">
                                    <div class="gallery_item-wrap Russia">
                                        <div class="bt_bb_grid_item bt_bb_tile_format11">
                                            <div class="bt_bb_grid_item_inner" data-hw="1">
                                                <div class="bt_bb_grid_item_post_thumbnail">
                                                    <a href="#!" title="Moscow">
                                                        <img class="bt_bb_grid_item_inner_image" src="{{url('public/media/uploads/sight_seeing/'.@$value['experiences_activities_image'][0])}}">
                                                    </a>
                                                </div>
                                                <div class="bt_bb_grid_item_inner_content"><h5 class="bt_bb_grid_item_post_title">{{$value['experiences_activities_name']}}</h5><div class="bt_bb_grid_item_post_excerpt">{{$value['experiences_activities_description']}}</div></div><div class="bt_bb_grid_item_post_title_init"><h5>{{$value['experiences_activities_name']}}</h5></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endif


        @php
$art_therter = collect(json_decode(@$EDITDATA[0]->art_therter, true));
// dd($art_therter);
@endphp
@if (!$art_therter->isEmpty())
        <!-- Where To Go -->
        <div class="tg-location-area pt-25 pb-40 tg-grey-bg p-relative z-index-1">
            <div class="container">
                <div class="row align-items-end">
                    <div class="col-lg-9">
                        <div class="tg-location-section-title mb-40">
                            <h2 class="mb-15 text-capitalize wow fadeInUp" data-wow-delay=".5s" data-wow-duration=".9s">Art & Theaters</h2>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="tg-listing-5-slider-navigation text-end mb-50 wow fadeInUp" data-wow-delay=".4s" data-wow-duration="1s">
                            <button class="tg-listing-5-slide-prev"><i class="fa-solid fa-arrow-left-long"></i></button>
                            <button class="tg-listing-5-slide-next"><i class="fa-solid fa-arrow-right-long"></i></button>
                         </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="swiper-container tg-location-5-slider1 p-relative fix">
                            <div class="swiper-wrapper">
                                @foreach($art_therter as $value)
                               
                                <div class="swiper-slide">
                                    <div class="gallery_item-wrap Russia">
                                        <div class="bt_bb_grid_item bt_bb_tile_format11">
                                            <div class="bt_bb_grid_item_inner" data-hw="1">
                                                <div class="bt_bb_grid_item_post_thumbnail">
                                                    <a href="#!" title="Moscow">
                                                        <img class="bt_bb_grid_item_inner_image" src="{{url('public/media/uploads/sight_seeing/'.@$value['art_therter_image'][0])}}">
                                                    </a>
                                                </div>
                                                <div class="bt_bb_grid_item_inner_content"><h5 class="bt_bb_grid_item_post_title">{{$value['art_therter_name']}}</h5><div class="bt_bb_grid_item_post_excerpt">{{$value['art_therter_description']}}</div></div><div class="bt_bb_grid_item_post_title_init"><h5>{{$value['art_therter_name']}}</h5></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endif

       
        
             @php
$park_garden = collect(json_decode(@$EDITDATA[0]->park_garden, true));
// dd($park_garden);
@endphp
@if (!$park_garden->isEmpty())
        <!-- Where To Go -->
        <div class="tg-location-area pt-25 pb-40 tg-grey-bg p-relative z-index-1">
            <div class="container">
                <div class="row align-items-end">
                    <div class="col-lg-9">
                        <div class="tg-location-section-title mb-40">
                            <h2 class="mb-15 text-capitalize wow fadeInUp" data-wow-delay=".5s" data-wow-duration=".9s">Parks And Gardens</h2>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="tg-listing-5-slider-navigation text-end mb-50 wow fadeInUp" data-wow-delay=".4s" data-wow-duration="1s">
                            <button class="tg-listing-5-slide-prev"><i class="fa-solid fa-arrow-left-long"></i></button>
                            <button class="tg-listing-5-slide-next"><i class="fa-solid fa-arrow-right-long"></i></button>
                         </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="swiper-container tg-location-5-slider1 p-relative fix">
                            <div class="swiper-wrapper">
                                @foreach($park_garden as $value)
                               
                                <div class="swiper-slide">
                                    <div class="gallery_item-wrap Russia">
                                        <div class="bt_bb_grid_item bt_bb_tile_format11">
                                            <div class="bt_bb_grid_item_inner" data-hw="1">
                                                <div class="bt_bb_grid_item_post_thumbnail">
                                                    <a href="#!" title="Moscow">
                                                        <img class="bt_bb_grid_item_inner_image" src="{{url('public/media/uploads/sight_seeing/'.@$value['park_garden_image'][0])}}">
                                                    </a>
                                                </div>
                                                <div class="bt_bb_grid_item_inner_content"><h5 class="bt_bb_grid_item_post_title">{{$value['park_garden_name']}}</h5><div class="bt_bb_grid_item_post_excerpt">{{$value['park_garden_description']}}</div></div><div class="bt_bb_grid_item_post_title_init"><h5>{{$value['park_garden_name']}}</h5></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endif


             @php
$hotels = collect(json_decode(@$EDITDATA[0]->hotels, true));
// dd($hotels);
@endphp
@if (!$hotels->isEmpty())
        <!-- Where To Go -->
        <div class="tg-location-area pt-25 pb-40 tg-grey-bg p-relative z-index-1">
            <div class="container">
                <div class="row align-items-end">
                    <div class="col-lg-9">
                        <div class="tg-location-section-title mb-40">
                            <h2 class="mb-15 text-capitalize wow fadeInUp" data-wow-delay=".5s" data-wow-duration=".9s">Hotels</h2>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="tg-listing-5-slider-navigation text-end mb-50 wow fadeInUp" data-wow-delay=".4s" data-wow-duration="1s">
                            <button class="tg-listing-5-slide-prev"><i class="fa-solid fa-arrow-left-long"></i></button>
                            <button class="tg-listing-5-slide-next"><i class="fa-solid fa-arrow-right-long"></i></button>
                         </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="swiper-container tg-location-5-slider1 p-relative fix">
                            <div class="swiper-wrapper">
                                @foreach($hotels as $value)
                               
                                <div class="swiper-slide">
                                    <div class="gallery_item-wrap Russia">
                                        <div class="bt_bb_grid_item bt_bb_tile_format11">
                                            <div class="bt_bb_grid_item_inner" data-hw="1">
                                                <div class="bt_bb_grid_item_post_thumbnail">
                                                    <a href="#!" title="Moscow">
                                                        <img class="bt_bb_grid_item_inner_image" src="{{url('public/media/uploads/sight_seeing/'.@$value['hotels_image'][0])}}">
                                                    </a>
                                                </div>
                                                <div class="bt_bb_grid_item_inner_content"><h5 class="bt_bb_grid_item_post_title">{{$value['hotels_name']}}</h5><div class="bt_bb_grid_item_post_excerpt">{{$value['hotels_description']}}</div></div><div class="bt_bb_grid_item_post_title_init"><h5>{{$value['hotels_name']}}</h5></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endif


         




    </main>
    <!-- main-area-end -->

    @include('footer')

<script>
    var slider = new Swiper('.tg-location-5-slider1', {
        spaceBetween: 50,
        loop: false,
        speed:500,
        autoplay: {
            delay: 4000,
        },
        navigation: {
            nextEl: '.tg-listing-5-slide-next',
            prevEl: '.tg-listing-5-slide-prev',
        },
        breakpoints: {
            '1200': {
                slidesPerView: 3,
            },
            '992': {
                slidesPerView: 3,
                spaceBetween: 40,
            },
            '768': {
                slidesPerView: 2,
                spaceBetween: 30,
            },
            '576': {
                slidesPerView: 2,
                spaceBetween: 30,
            },
            '0': {
                slidesPerView: 1,
                spaceBetween: 30,
            },
        },
    });
</script>