@include('header')
<style>
    .highlight-box {
    background-color: #f2f7ff;
    border: 2px solid #007BFF;
    border-radius: 12px;
    padding: 20px;
    max-width: 400px;
    box-shadow: 0 4px 10px rgba(0, 123, 255, 0.1);
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    margin: 20px auto;
}

.highlight-box .left {
    display: flex;
    flex-direction: column;
    gap: 8px;
}

.highlight-box .currency {
    font-size: 14px;
    font-weight: 500;
    color: #444;
}

.highlight-box .cost {
    font-size: 32px;
    font-weight: bold;
    color: #007BFF;
}

.highlight-box .cost_type {
    font-size: 14px;
    color: #666;
    margin-bottom: 10px;
}

.highlight-box .departure {
    font-size: 16px;
}





/*desktop*/
@media only screen and (min-width: 1025px) {
    .thumb-image {
        height: 150px;
    }
} 

/*mobile*/
@media only screen and (max-width: 1026px) {
    .thumb-image{
            height: 50px;
        }
} 

</style>
    <!-- main-area -->
    <main>

        <!-- tg-breadcrumb-area-start -->
        <div class="tg-breadcrumb-list-2 mt-15">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="tg-breadcrumb-list-2 tg-breadcrumb-list-3">
                            <ul>
                                <li><a href="{{url('')}}">Home</a></li>
                                <li><i class="fa-sharp fa-solid fa-angle-right"></i></li>
                                <li><a href="">{{countryname($EDITDATA[0]->country_id)}}</a></li>
                                <li><i class="fa-sharp fa-solid fa-angle-right"></i></li>
                                <li><span>{{@$EDITDATA[0]->name}}</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- tg-breadcrumb-area-end -->


        <!-- tg-tour-details-area-start -->
        <div class="tg-tour-details-area pt-20">
            <div class="container">
                <div class="row align-items-end mb-25">
                    <div class="col-xl-9 col-lg-8">
                        <div class="tg-tour-details-video-title-wrap">
                            <h2 class="tg-tour-details-video-title mb-15">{{@$EDITDATA[0]->name}}</h2>
                            <div class="tg-tour-details-video-location d-flex flex-wrap">
                                <div class="tg-tour-details-video-feature-price mb-10 mr-25">
                                    <p class="mb-0">From <span>₹ {{@$EDITDATA[0]->price}}</span>   &nbsp;PP/(On Twin Sharing)</p>
                                </div>
                                                                
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4">
                        <div class="tg-tour-details-video-share text-end mb-10">
                            <a href="#">
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M5.87746 9.03227L10.7343 11.8625M10.7272 4.05449L5.87746 6.88471M14.7023 2.98071C14.7023 4.15892 13.7472 5.11405 12.569 5.11405C11.3908 5.11405 10.4357 4.15892 10.4357 2.98071C10.4357 1.80251 11.3908 0.847382 12.569 0.847382C13.7472 0.847382 14.7023 1.80251 14.7023 2.98071ZM6.16901 7.95849C6.16901 9.1367 5.21388 10.0918 4.03568 10.0918C2.85747 10.0918 1.90234 9.1367 1.90234 7.95849C1.90234 6.78029 2.85747 5.82516 4.03568 5.82516C5.21388 5.82516 6.16901 6.78029 6.16901 7.95849ZM14.7023 12.9363C14.7023 14.1145 13.7472 15.0696 12.569 15.0696C11.3908 15.0696 10.4357 14.1145 10.4357 12.9363C10.4357 11.7581 11.3908 10.8029 12.569 10.8029C13.7472 10.8029 14.7023 11.7581 14.7023 12.9363Z" stroke="currentColor" stroke-width="0.977778" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                                Share
                            </a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- tg-tour-details-area-end -->

        <!-- tg-tour-about-start -->
        <div class="tg-tour-about-area">
            <div class="container">
                <div class="row">
                    <div class="col-xl-9 col-lg-8">
                        <div class="tg-tour-about-wrap mr-55">
@php
$multiple_image_json = collect(json_decode(@$EDITDATA[0]->multiple_image_json, true));
// dd($multiple_image_json);
@endphp
@if (!$multiple_image_json->isEmpty())

                            <div class="tg-tour-details-gallery-slider-wrap mb-40">
                                <div class="swiper-container tg-tour-details-gallery-active pb-20">
                                    <div class="swiper-wrapper">
                                        @foreach($multiple_image_json as $data)
                                       <div class="swiper-slide">
                                          <div class="tg-tour-details-gallery-thumb">
                                             <img class="w-100" src="{{url('public/media/uploads/package/'.@$data)}}" alt="{{@$EDITDATA[0]->name}}">
                                          </div>
                                       </div>
                                       @endforeach

                                    </div>
                                    <div class="tg-tour-details-gallery-navigation">
                                        <button class="tg-tour-details-gallery-prev">
                                            <svg width="21" height="15" viewBox="0 0 21 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M20.0449 7.45455H1.8631M1.8631 7.45455L8.22674 1.09091M1.8631 7.45455L8.22674 13.8182" stroke="currentColor" stroke-width="1.81818" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                       </button>
                                       <button class="tg-tour-details-gallery-next">
                                        <svg width="21" height="15" viewBox="0 0 21 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M0.955078 7.45455H19.1369M19.1369 7.45455L12.7733 1.09091M19.1369 7.45455L12.7733 13.8182" stroke="currentColor" stroke-width="1.81818" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                       </button>
                                    </div>
                                 </div>

                                 <div class="row justify-content-center">
                                    <div class="col-lg-12">
                                       <div class="swiper-container tg-tour-details-gallery-thumb-active p-relative">
                                          <div class="swiper-wrapper">
                                            @foreach($multiple_image_json as $data)
                                             <div class="swiper-slide">
                                                <div class="tg-tour-details-gallery-thumb">
                                                   <img class="w-100 thumb-image" src="{{url('public/media/uploads/package/'.@$data)}}" alt="{{@$EDITDATA[0]->name}}">
                                                </div>
                                             </div>

                                             @endforeach
                                             
                                          </div>
                                       </div>
                                    </div>
                                 </div>

                            </div>
@endif
                            
                            <div class="tg-tour-about-content tg-tour-about-2-content">

                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="tg-product-details-tab-nav mb-25">
                                            <div class="tg-product-details-tab-nav-inner nav cm-tab-menu d-flex c-relative flex-wrap" id="nav-tab-info" role="tablist">
                                                <button class="nav-link active" id="nav-desc-tab" data-bs-toggle="tab" data-bs-target="#nav-desc" type="button" role="tab" aria-controls="nav-desc" aria-selected="true">Overview</button>
                                                <button class="nav-link" id="nav-additional-tab" data-bs-toggle="tab" data-bs-target="#nav-additional" type="button" role="tab" aria-controls="nav-additional" aria-selected="false">Itinerary</button>
                                                <!-- <button class="nav-link" id="nav-review-tab" data-bs-toggle="tab" data-bs-target="#nav-review" type="button" role="tab" aria-controls="nav-review" aria-selected="false">Gallery</button> -->
                                                <button class="nav-link" id="nav-inclusion-tab" data-bs-toggle="tab" data-bs-target="#nav-inclusion" type="button" role="tab" aria-controls="nav-inclusion" aria-selected="false">Inclusions & Exclusions</button>
                                                <button class="nav-link" id="nav-highlights-tab" data-bs-toggle="tab" data-bs-target="#nav-highlights" type="button" role="tab" aria-controls="nav-highlights" aria-selected="false">Package Highlights</button>
                                            </div>
                                        </div>
                                        <div class="product__details-tab-content">
                                            <div class="tab-content" id="nav-tabContent-info">

                                                <!-- Overview -->
                                                <div class="tab-pane fade show active" id="nav-desc" role="tabpanel" aria-labelledby="nav-desc-tab">
                                                    <div class="tg-tour-about-inner tg-tour-about-2-inner mb-30">
                                                        <h4 class="tg-tour-about-title mb-15">About This Tour</h4>
                                                        {!! @$EDITDATA[0]->overview !!}                                                        
                                                    </div>
                                                </div>

                                                <!-- Itinerary -->
                                                <div class="tab-pane fade" id="nav-additional" role="tabpanel" aria-labelledby="nav-additional-tab">
                                                    <div class="tg-tour-about-inner tg-tour-about-2-inner mb-30">
                                                        <h4 class="tg-tour-about-title mb-15">Itinerary</h4>

                                                        <div class="tg-tour-about-faq-inner">
                                                            <div class="tg-tour-about-faq" id="accordionExample">
@php
$itinerary = collect(json_decode(@$EDITDATA[0]->itinerary, true));
// dd($multiple_image_json);
@endphp 
                                                            @foreach($itinerary as $key => $value)
                                                                <div class="accordion-item">
                                                                  <h2 class="accordion-header">
                                                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?=$key ?>" aria-expanded="{{ $key == 0 ? 'true' : 'false' }}" aria-controls="collapse<?=$key ?>">
                                                                       <span>Day-{{$key+1}}</span> {{@$value['itinerary_name']}}
                                                                    </button>
                                                                  </h2>

                                                                  <div id="collapse<?=$key ?>" class="accordion-collapse collapse {{ $key == 0 ? 'show' : '' }} " data-bs-parent="#accordionExample">
                                                                    <div class="accordion-body">
                                                                      <div class="row">
                                                                          <div class="col-lg-3">
                                                                            <div>
                                                                                <img src="{{url('public/media/uploads/package/'.@$value['itinerary_image'][0])}}" class="img-fluid">
                                                                            </div>
                                                                          </div>
                                                                          <div class="col-lg-9">
                                                                              <p>{{@$value['itinerary_description']}} </p>
                                                                          </div>
                                                                      </div>
                                                                    </div>
                                                                  </div>
                                                                </div>

                                                                @endforeach

                                                              </div>
                                                        </div>


                                                    </div>

                                                </div>

                                                <!-- Gallery -->
                                                <!-- <div class="tab-pane fade" id="nav-review" role="tabpanel" aria-labelledby="nav-review-tab">
                                                    <div class="row">
                                                        galleryt
                                                    </div>
                                                </div> -->
                                                <!-- Inclusions & Exclusions -->
                                                <div class="tab-pane fade" id="nav-inclusion" role="tabpanel" aria-labelledby="nav-inclusion-tab">
                                                    <div class="tg-tour-about-inner tg-tour-about-2-inner mb-30">
                                                        <div class="row">
                                                            <div class="col-lg-6 col-md-6 col-sm-6">
                                                                <h4 class="tg-tour-about-title mb-20">Inclusion</h4>
                                                                {!! @$EDITDATA[0]->inclusion !!}
                                                            </div>

                                                            <div class="col-lg-6 col-md-6 col-sm-6">
                                                                <h4 class="tg-tour-about-title mb-20">Exclusions</h4>
                                                                {!! @$EDITDATA[0]->exclusions !!}
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="tab-pane fade" id="nav-highlights" role="tabpanel" aria-labelledby="nav-highlights-tab">
                                                    <div class="tg-tour-about-inner tg-tour-about-2-inner mb-30">
                                                        <div class="row">
                                                            <div class="col-lg-6 col-md-6 col-sm-6">
                                                                <h4 class="tg-tour-about-title mb-10">Package Highlights</h4>
                                                                {!! @$EDITDATA[0]->package_highlight !!}
                                                            </div>

                                                          
                                                        </div>
                                                    </div>
                                                </div>


                                            </div>
                                        </div>
                                    </div>
                                </div>                                

                            </div>
                        </div>
                    </div>


                    <div class="col-xl-3 col-lg-4">
                        <div class="tg-tour-about-sidebar top-sticky mb-50">

                            <div class="highlight-box">
                                <div class="left">
                                    <!-- <span class="currency"></span> -->
                                    <span class="cost"> ₹ {{@$EDITDATA[0]->price}}</span>
                                    <span class="cost_type">PP/(On Twin Sharing)</span>
                                    <span class="departure">Departures</span>
                                    <span class="departure_date">{{@$EDITDATA[0]->departures}}</span>
                                </div>
                            </div>



                            <form action="{{ route('package.store') }}" method="post">
                                <h4 class="tg-tour-about-title title-2 mb-15">Enquiry Tour</h4>
                                @csrf
                                <input type="hidden" name="package_id" value="{{@$EDITDATA[0]->id}}">
                                <input type="hidden" name="package_price" value="{{@$EDITDATA[0]->price}}">
                                <div class="tg-booking-form-parent-inner mb-10">
                                    <div class="tg-tour-about-date p-relative">
                                        <input class="input" name="when_date" type="date" placeholder="When (Date)">
                                        <span class="calender">
                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M11.1111 1V3.80003M4.88888 1V3.80003M1 6.59992H15M2.55556 2.39988H13.4444C14.3036 2.39988 15 3.02668 15 3.79989V13.6C15 14.3732 14.3036 15 13.4444 15H2.55556C1.69645 15 1 14.3732 1 13.6V3.79989C1 3.02668 1.69645 2.39988 2.55556 2.39988Z" stroke="#560CE3" stroke-width="1.1" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </span>
                                        
                                    </div>
                                </div>

                                <div class="tg-booking-form-parent-inner mb-10">
                                    <div class="tg-tour-about-date p-relative">
                                        <input class="input" name="name" type="text" placeholder="Full Name">
                                        <span class="calender">
                                            <i class="fa-sharp fa-solid fa-user-alt"></i>
                                        </span>
                                    </div>
                                </div>

                                <div class="tg-booking-form-parent-inner mb-10">
                                    <div class="tg-tour-about-date p-relative">
                                        <input class="input" name="email" type="email" placeholder="Email Address">
                                        <span class="calender">
                                            <i class="fa-sharp fa-solid fa-envelope"></i>
                                        </span>
                                    </div>
                                </div>
                                <div class="tg-booking-form-parent-inner mb-10">
                                    <div class="tg-tour-about-date p-relative">
                                        <input class="input" name="mobile" type="tel" placeholder="Mobile No.">
                                        <span class="calender">
                                            <i class="fa-sharp fa-solid fa-phone"></i>
                                        </span>
                                    </div>
                                </div>

                                <div class="tg-booking-form-parent-inner mb-10">
                                    <div class="tg-tour-about-date p-relative">
                                        <input class="input" name="location" type="text" value="Saint Petersburg & Moscow">
                                        <span class="calender">
                                            <i class="fa-sharp fa-solid fa-location"></i>
                                        </span>
                                    </div>
                                </div>

                                <div class="tg-booking-form-parent-inner mb-10">
                                    <div class="tg-tour-about-date p-relative">
                                        <textarea class="inp5ut te5xtarea" placeholder=" Leave a Message" name="message"></textarea>
                                    </div>
                                </div>

                                <div class="tg-tour-about-border-doted mb-15"></div>
                               
                                <button type="submit" name="submit" class="tg-btn tg-btn-switch-animation w-100">Book now</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- tg-tour-about-end -->

      

    </main>
    <!-- main-area-end -->

   @include('footer')