@include('header')
@php
$query = DB::table('package')->where('status', 1)->where('city_id', $EDITDATA[0]->id);

if(request('search')) {
    $query->where('name', 'like', '%' . request('search') . '%');
}
$package = $query->orderBy('id', 'desc')->paginate(16);
@endphp
    <!-- main-area -->

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
    <main>

        <!-- tg-breadcrumb-area-start -->
        <div class="tg-breadcrumb-area tg-breadcrumb-spacing-5 fix p-relative z-index-1 include-bg" data-background="{{url('public/media/uploads/city/'.@$EDITDATA[0]->banner)}}">
            <div class="tg-hero-top-shadow"></div>
            <div class="tg-breadcrumb-shadow"></div>
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="tg-breadcrumb-content text-center">
                            <h2 class="tg-breadcrumb-title mb-5 fs-40">{{@$EDITDATA[0]->name}}</h2>
                            <div class="tg-breadcrumb-list-4">
                                <ul>
                                    <li><a href="{{url('')}}">Home</a></li>
                                    <li><i class="fa-sharp fa-solid fa-angle-right"></i></li>
                                    <li>City</li>
                                    <li><i class="fa-sharp fa-solid fa-angle-right"></i></li>
                                    <li>{{@$EDITDATA[0]->name}}</li>
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


        <div class="tg-chose-area pt-140 pb-130 p-relative z-index-10">
            <img class="tg-chose-5-map-shape d-none d-lg-block"  alt="">
            <div class="container">
                <div class="row a1lign-items-center">

                    <div class="col-lg-7">
                        <div class="tg-chose-5-left mr-40">
                            <div class="row gx-2">
                                <!-- Left: Two stacked images -->
                                <div class="col-lg-5 col-md-5 col-sm-12">
                                    <div class="d-flex flex-column h-100 gap-2">
                                        <img class="img-fluid w-100 flex-fill img-hover-open" src="{{url('public/media/uploads/city/'.@$EDITDATA[0]->image2)}}" alt="" style="object-fit: cover; border-radius: 10px;">
                                        <img class="img-fluid w-100 flex-fill img-hover-open" src="{{url('public/media/uploads/city/'.@$EDITDATA[0]->image3)}}" alt="" style="object-fit: cover; border-radius: 10px;">
                                    </div>
                                </div>

                                <!-- Right: One tall image -->
                                <div class="col-lg-7 col-md-7 col-sm-12">
                                    <div class="h-100 d-flex align-items-center">
                                        <img class="img-fluid w-100 img-hover-open" src="{{url('public/media/uploads/city/'.@$EDITDATA[0]->image4)}}" alt="" style="height: 100%; object-fit: cover; border-radius: 15px;">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                   {{--  <div class="col-lg-7">
                        <div class="tg-chose-5-left mr-40">
                            <div class="row">
                                <div class="col-lg-5 col-md-5 col-sm-5">
                                    <div class="tg-chose-5-thumb">
                                        <img class="mb-20 img-hover-open" src="{{url('public/media/uploads/city/'.@$EDITDATA[0]->image2)}}" alt="">
                                        <img class="img-hover-open" src="{{url('public/media/uploads/city/'.@$EDITDATA[0]->image3)}}" alt="">
                                    </div>
                                </div>
                                <div class="col-lg-7 col-md-7 col-sm-7 d-flex align-items-center">
                                    
                                    <img class="img-hover-open" src="{{url('public/media/uploads/city/'.@$EDITDATA[0]->image4)}}" alt="" style="border-radius: 15px;">
                                </div>
                            </div>
                        </div>
                    </div> --}}

                    <div class="col-lg-5">
                        <div class="tg-chose-section-title mb-30">
                            <h2 class="mb-15 text-capitalize wow fadeInUp" data-wow-delay=".4s" data-wow-duration=".9s">About {{@$EDITDATA[0]->name}}</h2>
                        </div>
                        <div class="tg-chose-5-para">
                            {!! @$EDITDATA[0]->content !!}
                        </div>

                        <div class="tg-chose-btn wow fadeInUp mt-2" data-wow-delay=".8s" data-wow-duration=".9s">
                            <a href="#packages" class="tg-btn tg-btn-switch-animation">
                                <span class="d-flex align-items-center justify-content-center">
                                   <span class="btn-text">Book Your Trip</span>
                                   <span class="btn-icon ml-5">
                                        <svg width="21" height="16" viewBox="0 0 21 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M1.0017 8.00001H19.9514M19.9514 8.00001L12.9766 1.02515M19.9514 8.00001L12.9766 14.9749" stroke="white" stroke-width="1.77778" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                   </span>
                                   <span class="btn-icon ml-5">
                                        <svg width="21" height="16" viewBox="0 0 21 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M1.0017 8.00001H19.9514M19.9514 8.00001L12.9766 1.02515M19.9514 8.00001L12.9766 14.9749" stroke="white" stroke-width="1.77778" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                   </span>
                               </span> 
                            </a>
                        </div>
                    </div>
                </div>

               
            </div>
        </div>



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
                            <h2 class="mb-15 text-capitalize wow fadeInUp" data-wow-delay=".5s" data-wow-duration=".9s">Major Attractions in {{@$EDITDATA[0]->name}}</h2>
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
                                                        <img class="bt_bb_grid_item_inner_image" src="{{url('public/media/uploads/city/'.@$value['where_to_go_image'][0])}}">
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
                            <h2 class="mb-15 text-capitalize wow fadeInUp" data-wow-delay=".5s" data-wow-duration=".9s">Adventure and Activities in  {{@$EDITDATA[0]->name}}</h2>
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
                                                        <img class="bt_bb_grid_item_inner_image" src="{{url('public/media/uploads/city/'.@$value['experiences_activities_image'][0])}}">
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
        <div class="tg-location-area pt-25 pb-40 tg-grey-bg p-relative z-index-1" style="display: none;">
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
                                                        <img class="bt_bb_grid_item_inner_image" src="{{url('public/media/uploads/city/'.@$value['art_therter_image'][0])}}">
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
        <div class="tg-location-area pt-25 pb-40 tg-grey-bg p-relative z-index-1" style="display: none;">
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
                                                        <img class="bt_bb_grid_item_inner_image" src="{{url('public/media/uploads/city/'.@$value['park_garden_image'][0])}}">
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
                            <h2 class="mb-15 text-capitalize wow fadeInUp" data-wow-delay=".5s" data-wow-duration=".9s">Most popular hotels in {{@$EDITDATA[0]->name}}</h2>
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
                                                        <img class="bt_bb_grid_item_inner_image" src="{{url('public/media/uploads/city/'.@$value['hotels_image'][0])}}">
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
















@if(!$package->isEmpty())

        <div class="tg-listing-area tg-grey-bg pt-70 pb-70 p-relative z-index-9" id="packages">
            <img class="tg-listing-2-shape d-none d-sm-block" src="{{url('')}}/assets/img/listing/listing-2/shape-1.png" alt="">
            <img class="tg-listing-2-shape-2 d-none d-xl-block" src="{{url('')}}/assets/img/listing/listing-2/shape-2.png" alt="">
            <img class="tg-listing-2-shape-3 d-none d-sm-block" src="{{url('')}}/assets/img/listing/listing-2/shape-3.png" alt="">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="tg-listing-section-title text-center mb-35">
                            <h5 class="tg-section-subtitle wow fadeInUp" data-wow-delay=".4s" data-wow-duration=".6s">Most Popular Tour Packages </h5>
                        </div>
                    </div>
                </div>
                <div class="row">

                    
                    @foreach($package as $data)
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay=".3s" data-wow-duration=".6s">
                        <div class="tg-listing-card-item tg-listing-2-card-item mb-25">
                            <div class="tg-listing-card-thumb tg-listing-2-card-thumb fix p-relative">
                                <a href="{{url(@$data->slug)}}" class="tour-one__image">
                                  <div class="flip-box">
                                    <div class="flip-inner">
                                      <img src="{{url('public/media/uploads/package/'.@$data->image)}}" alt="{{@$data->name}}">
                                    </div>
                                  </div>
                                </a>

                                <div class="tg-listing-2-mask">
                                    <img class="w-100" src="{{url('')}}/assets/img/listing/listing-2/shape.png" alt="">
                                </div>
                                
                            </div>
                            <div class="tg-listing-card-content p-relative">
                                <div class="tg-listing-2-price-wrap text-center">
                                    <div class="tg-listing-2-price">
                                        <span class="new">₹ {{@$data->price}}</span>
                                        <span class="shift">PP/(On Twin Sharing)</span>
                                    </div>
                                </div>
                                <h4 class="tg-listing-card-title"><a href="{{url(@$data->slug)}}">{{@$data->name}}</a></h4>
                                <div class="tg-listing-card-review mb-5">
                                     <?php 
                                     $i=1;
                                     while($i<=5){ 
                                     if($i<=$data->rating)
                                     {
                                     ?>
                                    <span class="tg-listing-rating-icon"><i class="fa-sharp fa-solid fa-star"></i></span>
                                     <?php }  $i++; } ?>
                                    {{-- <span class="tg-listing-rating-percent">(5 Reviews)</span> --}}
                                </div>
                                <div class="tg-listing-card-duration-tour">
                                    <span class="tg-listing-card-duration-time mb-5">
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M8.00175 3.73329V7.99996L10.8462 9.42218M15.1128 8.00003C15.1128 11.9274 11.9291 15.1111 8.00174 15.1111C4.07438 15.1111 0.890625 11.9274 0.890625 8.00003C0.890625 4.07267 4.07438 0.888916 8.00174 0.888916C11.9291 0.888916 15.1128 4.07267 15.1128 8.00003Z" stroke="currentColor" stroke-width="1.06667" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                        {{@$data->duration}}
                                    </span>

                                    <span class="tg-listing-card-duration-map ">
                                        {{@$data->departures}}
                                    </span>                                    
                                </div>

                                <div class="d-flex justify-content-between mt-2 align-items-center">
                                    <a href="{{url(@$data->slug)}}" class="blue-color">Details</a>
                                    <a href="{{url(@$data->slug)}}" class="red-color">Book Online</a>
                                    <a href="javascript:void(0)" class="blue-color" onclick="open_model('{{@$data->name}}')">Enquiry</a>
                                </div>
                            </div>
                        </div>
                    </div>
                     @endforeach

                     @if ($package->isEmpty())

                    <div class="col-xl-12 pagination-wrapper text-center mt-4 d-flex justify-content-center">
                        <h2>Not Found !!</h2>
                    </div>

                    @endif

                    
                     <div class="col-xl-12 pagination-wrapper text-center mt-4 d-flex justify-content-center">
                        {{ $package->appends(request()->query())->links() }}
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
                slidesPerView: 4,
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