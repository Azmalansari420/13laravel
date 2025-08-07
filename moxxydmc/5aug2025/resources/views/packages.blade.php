@include('header')
@php
$query = DB::table('package')->where('status', 1);

if(request('search')) {
    $query->where('name', 'like', '%' . request('search') . '%');
}

$package = $query->orderBy('id', 'desc')->paginate(16);
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
                            <h2 class="tg-breadcrumb-title mb-5 fs-40">Tour Packages</h2>
                            <div class="tg-breadcrumb-list-4">
                                <ul>
                                    <li><a href="{{url('')}}">Home</a></li>
                                    <li><i class="fa-sharp fa-solid fa-angle-right"></i></li>
                                    <li>Pages</li>
                                    <li><i class="fa-sharp fa-solid fa-angle-right"></i></li>
                                    <li>Tour Packages</li>
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


        <div class="tg-listing-area tg-grey-bg pt-70 pb-70 p-relative z-index-9">
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

        

    </main>
    <!-- main-area-end -->


@include('footer')