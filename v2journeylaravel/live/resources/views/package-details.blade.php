@include('header')
<section class=vs-breadcrumb data-bg-src="{{url('')}}/assets/img/bg/breadcrumb-bg.png">
   <img src="{{url('')}}/assets/img/icons/cloud.png" alt=vs-breadcrumb-icon class="vs-breadcrumb-icon-1 animate-parachute">
   <img src="{{url('')}}/assets/img/icons/ballon-sclation.png" alt=vs-breadcrumb-icon class="vs-breadcrumb-icon-2 animate-parachute">
   <div class=container>
      <div class="row text-center">
         <div class=col-12>
            <div class=breadcrumb-content>
               <h1 class=breadcrumb-title>{{$package->name}}</h1>
            </div>
            <div class=breadcrumb-menu>
               <ul class=custom-ul>
                  <li>
                     <a href={{url('')}}>Home</a>
                  </li>
                  <li>{{$package->name}}</li>
               </ul>
            </div>
         </div>
      </div>
   </div>
</section>
<section class="vs-destination-details space bg-theme-07">
   <div class=container>
      <div class="row gx-3 gx-xl-5 gy-5">
         <div class=col-lg-8>
            <div class=vs-destination-single>
               <div class="row align-items-center gy-3 mb-4">
                  <div class="col-8 col-sm-10">
                     <h2 class=destination-single-title>
                        {{$package->name}}
                     </h2>
                  </div>
                  <div class="col-4 col-sm-2 d-flex justify-content-end">
                     <div class=destination-single-meta>
                        <h3>{{$package->duration}}</h3>
                        <span>days</span>
                     </div>
                  </div>
               </div>




               @php
               $multiimage = json_decode($package->multiple_image_json);
               @endphp




               <div class=destination-single-info>
                  <figure class="destination-single-img d-block">
                     <div id=carouselExampleIndicators class="carousel slide" data-bs-ride=carousel data-bs-interval=3000>
                        <div class=carousel-indicators>
                           @foreach($multiimage as $key1 => $value1)
                           <button type=button data-bs-target=#carouselExampleIndicators data-bs-slide-to='{{$key1}}' class=<?php if($key1==0) echo "active"; ?> aria-current=true aria-label="Slide 1"></button>
                           @endforeach
                        </div>
                        <div class=carousel-inner>
                           @foreach($multiimage as $key => $value)
                           <div class="carousel-item <?php if($key==0) echo "active"; ?>">
                              <img src="{{url('public/media/uploads/package/'.$value)}}" class="d-block w-100" alt=...>
                           </div>
                           @endforeach
                        </div>
                        <button class=carousel-control-prev type=button data-bs-target=#carouselExampleIndicators data-bs-slide=prev>
                        <span class=carousel-control-prev-icon aria-hidden=true></span>
                        <span class=visually-hidden>Previous</span>
                        </button>
                        <button class=carousel-control-next type=button data-bs-target=#carouselExampleIndicators data-bs-slide=next>
                        <span class=carousel-control-next-icon aria-hidden=true></span>
                        <span class=visually-hidden>Next</span>
                        </button>
                     </div>
                  </figure>

                  <div class=destination-single-px>
                     <div class="destination-info-tabs mt-0">
                        <ul class=custom-ul>
                           <li class=current><a href=#current>Overview</a></li>
                           <li><a href=#itinerary>Itinerary</a></li>
                           <li><a href=#cost>Cost</a></li>
                           <li><a href=#faq>FAQs</a></li>
                           <li><a href=#map>Map</a></li>
                        </ul>
                     </div>

                     <div id=current class="destination-overview tab-content">
                        <h4 class=title>Overview</h4>
                        {!! $package->overview !!}
                     </div>

                     <div id=itinerary class="destination-ltinerary tab-content">
                        <div class="d-flex justify-content-between align-items-center gap-2">
                           <h4 class=title>Itinerary</h4>
                           <a href={{url('faq')}} class=expand-btn>Expand all</a>
                        </div>

                        <div class="d-flex gap-2 gap-xl-4">
                           <div class=progress-area>
                              <svg xmlns=http://www.w3.org/2000/svg width=37 height=37 viewBox="0 0 37 37" fill=none>
                                 <circle cx=18.5 cy=18.5 r=18.5 fill=#F7921E />
                                 <path d="M23.4463 11.5947C22.6394 10.934 21.6959 10.4606 20.6839 10.2087C19.6719 9.95679 18.6167 9.93261 17.5942 10.1379C16.2795 10.4074 15.07 11.0492 14.1098 11.9867C13.1496 12.9243 12.4791 14.1181 12.1782 15.4259C11.8773 16.7338 11.9587 18.1006 12.4127 19.3635C12.8667 20.6264 13.6742 21.7322 14.7389 22.5491C15.9546 23.4388 16.9896 24.552 17.7886 25.829L18.3331 26.7344C18.4022 26.8494 18.5 26.9445 18.6168 27.0106C18.7336 27.0766 18.8655 27.1114 18.9997 27.1114C19.1338 27.1114 19.2658 27.0766 19.3826 27.0106C19.4994 26.9445 19.5971 26.8494 19.6662 26.7344L20.1881 25.8648C20.8839 24.6416 21.8327 23.581 22.9711 22.7536C23.8637 22.1395 24.6013 21.3264 25.1259 20.3784C25.6504 19.4304 25.9475 18.3734 25.9937 17.291C26.0398 16.2085 25.8338 15.1301 25.3918 14.1409C24.9499 13.1517 24.2841 12.2787 23.4471 11.5908L23.4463 11.5947ZM18.9989 20.1123C18.3836 20.1123 17.782 19.9298 17.2704 19.5879C16.7588 19.2461 16.36 18.7602 16.1245 18.1917C15.8891 17.6232 15.8275 16.9977 15.9475 16.3942C16.0675 15.7907 16.3639 15.2363 16.799 14.8012C17.2341 14.3661 17.7884 14.0698 18.3919 13.9497C18.9954 13.8297 19.621 13.8913 20.1895 14.1268C20.758 14.3623 21.2439 14.761 21.5857 15.2726C21.9276 15.7843 22.11 16.3858 22.11 17.0011C22.11 17.8262 21.7823 18.6176 21.1988 19.201C20.6153 19.7845 19.824 20.1123 18.9989 20.1123Z" fill=white />
                              </svg>
                              <svg xmlns=http://www.w3.org/2000/svg width=37 height=37 viewBox="0 0 37 37" fill=none>
                                 <circle cx=18.5 cy=18.5 r=18.5 fill=#F7921E />
                                 <path d="M28.7986 16.489C28.611 16.3202 28.3423 16.2765 28.1173 16.3827C26.936 16.9202 26.2734 16.314 25.1984 15.1952C24.3796 14.3389 23.392 13.3138 21.967 13.4388C21.917 13.2576 21.7794 13.1076 21.5857 13.0388C21.2607 12.92 20.9044 13.0826 20.7856 13.4076L20.5356 14.0951L19.0012 18.3107L17.4667 14.0951L17.2167 13.4076C17.0979 13.0826 16.7354 12.92 16.4167 13.0388C16.2229 13.1076 16.0916 13.2576 16.0354 13.4388C14.6103 13.3076 13.6228 14.3389 12.7977 15.1952C11.7289 16.314 11.0664 16.9202 9.88507 16.3827C9.65381 16.2765 9.38505 16.3202 9.19751 16.489C9.01627 16.664 8.95378 16.9265 9.03504 17.164L10.7664 21.9205C10.8226 22.0768 10.9414 22.2018 11.0976 22.2706C11.5851 22.4956 12.0289 22.5893 12.4352 22.5893C13.729 22.5893 14.6541 21.6268 15.4354 20.8142C16.4354 19.7766 17.073 19.1766 18.1167 19.5391L18.3364 20.1435L16.7479 24.5081C16.6292 24.8332 16.7917 25.1894 17.1167 25.3082C17.4799 25.4292 17.8146 25.2311 17.9167 24.9394L18.9998 21.9688L20.0794 24.9394C20.2014 25.2649 20.562 25.4236 20.8794 25.3082C21.2044 25.1894 21.3732 24.8332 21.2544 24.5081L19.6662 20.1407L19.8856 19.5391C20.9294 19.1829 21.5732 19.7766 22.567 20.8142C23.342 21.6268 24.2671 22.5893 25.5671 22.5893C25.9734 22.5893 26.4172 22.4956 26.9047 22.2706C27.0547 22.2018 27.1735 22.0768 27.2297 21.9205L28.9611 17.164C29.0486 16.9265 28.9861 16.664 28.7986 16.489Z" fill=white />
                              </svg>
                           </div>
                           <div class="accordion-style2 accordion flex-grow-1" id=accordionExampleThree>

                              @php
                              $Itinerary = json_decode($package->Itinerary);
                              @endphp

                              @foreach($Itinerary as $key2 => $data)
                              <div class=accordion-item>
                                 <h6 class=accordion-header>
                                    <button class=accordion-button type=button data-bs-toggle=collapse data-bs-target=#collapseOne_{{$key2}} aria-expanded=true aria-controls=collapseOne_{{$key2}}> {{$data->itinerary_title}}
                                    </button>
                                 </h6>
                                 <div id=collapseOne_{{$key2}} class="accordion-collapse collapse <?php if($key2==0) echo "show"; ?>" data-bs-parent=#accordionExampleThree>
                                    <div class=accordion-body>
                                       {!! $data->itinerary_content !!}
                                    </div>
                                 </div>
                              </div>
                              @endforeach

                             
                              
                           </div>
                        </div>
                     </div>

                     <div id=cost class="destination-cost tab-content">
                        <h4 class=title>Cost</h4>
                        <div class=includes>
                           {!! $package->costdetails !!}
                        </div>
                     </div>

                     <div id=faq class="destination-faq tab-content">
                        <div class="d-flex justify-content-between align-items-center gap-2">
                           <h4 class=title>FAQs</h4>
                           <a href={{url('faq')}} class=expand-btn>Expand all</a>
                        </div>
                        <div class="accordion-style2 accordion" id=accordionExampleTwo>
                           @php
                              $faq = json_decode($package->faq);
                           @endphp
                           @foreach($faq as $key3 => $faqdata)
                           <div class=accordion-item>
                              <h6 class=accordion-header>
                                 <button class=accordion-button type=button data-bs-toggle=collapse data-bs-target=#collapseOne{{$key3}} aria-expanded=true aria-controls=collapseOne{{$key3}}>{{$faqdata->faq_question}}
                                 </button>
                              </h6>
                              <div id=collapseOne{{$key3}} class="accordion-collapse collapse <?php if($key3==0) echo "show"; ?>" data-bs-parent=#accordionExampleTwo>
                                 <div class=accordion-body>
                                    {!! $faqdata->faq_answere !!}
                                 </div>
                              </div>
                           </div>
                           @endforeach

                        </div>
                     </div>

                     <div class="destination-map tab-content mt-4" id="map">
                        {!! $package->map !!}
                     </div>
                     
                  </div>
               </div>
            </div>
         </div>
         <div class=col-lg-4>
            <div class="sidebar-area tours-sidebar">
               <div class="widget widget_trip-Availability accordion" id=accordionTripAvailability>
                  <div class=accordion-item>
                     <h6 class=accordion-header>
                        <button class=accordion-button type=button data-bs-toggle=collapse data-bs-target=#collapseOne_1 aria-expanded=true aria-controls=collapseOne_1>
                        Send Request
                        </button>
                     </h6>
                     <div id=collapseOne_1 class="accordion-collapse collapse show" data-bs-parent=#accordionTripAvailability>
                        <div class=accordion-body>
                           <div class=row>
                              <div class=col-12>
                                 @if(session('success'))
                                    <p style="color: green;margin-bottom: 15px;">{{ session('success') }}</p>
                                @endif

                                 <form action="{{route('packageenquiry.store')}}" method=post class=form-style2>

                                    @csrf
                                    <div class=row>
                                       <div class="col-12 form-group">
                                          <label for=name>Your Name <span>*</span></label>
                                          <input id=name name=name class=form-control placeholder="Enter Your Name *" required autocomplete=off>
                                       </div>
                                       <div class="col-12 form-group">
                                          <label for=email>Your Email <span>*</span></label>
                                          <input id=email name=email type=email class=form-control placeholder="Enter Your Email *" required>
                                       </div>
                                       <div class="col-md-12 form-group">
                                          <label for=phone>Contact Number <span>*</span></label>
                                          <input id=phone name=mobile type=tel class=form-control placeholder="Enter Your Number *" required>
                                       </div>
                                       
                                       <div class="col-12 form-group">
                                          <label for=subject>Enquiry Subject <span>*</span></label>
                                          <input id=subject name=subject class=form-control placeholder="Enter Enquiry Subject *" required value="{{$package->name}}">
                                       </div>
                                       <div class="col-12 form-group">
                                          <label for=message>Your Message <span>*</span></label>
                                          <textarea id=message name=message class=form-control placeholder="Enter Your Message *" required></textarea>
                                       </div>
                                       <div class="col-12 form-group mb-0">
                                          <button class=vs-btn type=submit name="submit">
                                          Send Request
                                          </button>
                                       </div>
                                    </div>
                                 </form>
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
</section>

@php
$package = DB::table('package')
         ->where('status',1)
         ->limit(3)
         ->where('destination_id',$package->id)
         ->get();
@endphp
@if($package->count() > 0)
<section class="vs-tour-package style-3 space-bottom bg-theme-07">
   <div class=container>
      <div class=row>
         <div class="col-lg-auto mx-auto">
            <div class="title-area text-center">
               <span class="sec-subtitle text-capitalize">Related trips</span>
               <h2 class=sec-title>Related trips interested</h2>
            </div>
         </div>
      </div>
      <div class="row g-4">


         

            
         @foreach($package as $item)

         <div class="col-md-6 col-xl-4">
            <div class="tour-package-box style-3 bg-white-color">
               <div class=tour-package-thumb>
                  <img src="{{url('')}}/assets/img/tour-packages/tour-package-3-1.png" alt=tour-package class=w-100>
               </div>
               <div class=tour-package-content>
                  <div class=location>
                     <i class="fa-sharp fa-light fa-location-dot"></i>
                     <span>Thailand, vietnam, Nepal</span>
                  </div>
                  <h5 class="title line-clamp-2">
                     <a href=packages.php>Maldives Travel Experience of the Lifetime</a>
                  </h5>
                  <div class=tour-package-footer>
                     <div class=tour-duration>
                        <i class="fa-regular fa-clock"></i>
                        <span>6 - Days</span>
                     </div>
                     <div class="pricing-info fw-medium">
                        From
                        <del class="text-theme-color fw-semibold">$800</del>
                        <h5 class=new-price>$700</h5>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         @endforeach
         



      </div>
   </div>
</section>
@endif
@include('footer')