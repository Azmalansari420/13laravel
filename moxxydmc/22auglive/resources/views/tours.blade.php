@include('header')
@php
$about = DB::Table('content')->where('id',11)->first();
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
</style>
        <!-- tg-breadcrumb-area-start -->
        <div class="tg-breadcrumb-area 00tg-breadcrumb-spacing-5 fix p-relative z-index-1 include-bg get-banner-image" >
           <img src="{{ asset('public/media/uploads/content/' . @$about->image) }}" class="d-block w-100">
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