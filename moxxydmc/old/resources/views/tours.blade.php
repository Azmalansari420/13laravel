@include('header')

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
                            <h2 class="tg-breadcrumb-title mb-10 fs-40">INTERNATIONAL TOURS</h2>
                            <div class="tg-breadcrumb-list-4">
                                <ul>
                                    <li><a href="{{url('')}}">Home</a></li>
                                    <li><i class="fa-sharp fa-solid fa-angle-right"></i></li>
                                    <li>INTERNATIONAL TOURS</li>
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


        <div class="tg-location-area pt-70 pb-130 tg-grey-bg p-relative z-index-1">
            <img class="tg-location-shape d-none d-xl-block" src="{{url('')}}/assets/img/location/shape-2.png" alt="">
            <div class="container">
                <div class="row">

                    @php
                    $city = DB::Table('city')->where('status',1)->get();
                    @endphp
                    @foreach($city as $data)
                    <div class="col-md-3 col-sm-6   gallery_item-wrap Russia">
                        <div class="bt_bb_grid_item bt_bb_tile_format11">
                            <div class="bt_bb_grid_item_inner" data-hw="1">
                                <div class="bt_bb_grid_item_post_thumbnail">
                                    <a href="{{@$data->slug}}" title="Moscow">
                                        <img class="bt_bb_grid_item_inner_image" src="{{url('public/media/uploads/city/'.@$data->image)}}">
                                    </a>
                                </div>
                                <div class="bt_bb_grid_item_inner_content"><h5 class="bt_bb_grid_item_post_title">{{@$data->name}}</h5><div class="bt_bb_grid_item_post_excerpt">{{@$data->content}}</div></div><div class="bt_bb_grid_item_post_title_init"><h5>{{@$data->name}}</h5></div>
                            </div>
                        </div>
                    </div>
                 
                    @endforeach



                </div>
            </div>
        </div>

        

    </main>
    <!-- main-area-end -->


@include('footer')