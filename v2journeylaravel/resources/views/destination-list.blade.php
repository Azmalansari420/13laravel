

@include('header')

      <!--================= Breadcrumb Area start =================-->
      <section
        class="vs-breadcrumb"
        data-bg-src="{{url('')}}/assets/img/bg/breadcrumb-bg-2.png"
      >
        <img
          src="{{url('')}}/assets/img/icons/cloud.png"
          alt="vs-breadcrumb-icon"
          class="vs-breadcrumb-icon-1 animate-parachute"
        />
        <img
          src="{{url('')}}/assets/img/icons/ballon-sclation.png"
          alt="vs-breadcrumb-icon"
          class="vs-breadcrumb-icon-2 animate-parachute"
        />
        <div class="container">
          <div class="row text-center">
            <div class="col-12">
              <div class="breadcrumb-content">
                <h1 class="breadcrumb-title">{{$destination->name}}</h1>
              </div>

            </div>
          </div>
        </div>
      </section>
      <!--================= Breadcrumb Area end =================-->

      <!--================= Tour Package Area start =================-->
      <section class="vs-tour-package style-2 space">
        <div class="container">
          
          <div class="row g-4">            

          	@php
          	$package = DB::table('package')
          				->where('status',1)
          				->where('destination_id',$destination->id)
          				->get();
          	@endphp

          	@if($package->count() > 0)
    		@foreach($package as $item)

            <div class="col-md-6 col-xl-4">
              <div class="tour-package-box style-3 bg-white-color">
                <div class="tour-package-thumb">
                  <img
                    src="{{url('public/media/uploads/package/')}}/{{$item->image}}"
                    alt="tour-package"
                    class="w-100"
                  />
                </div>
                <div class="tour-package-content">
                  <div class="location">
                    <i class="fa-sharp fa-light fa-location-dot"></i>
                    <span>{{$destination->name}}</span>
                  </div>
                  <h5 class="title line-clamp-2">
                    <a href="{{url('package-details/'.$item->slug)}}">{{$item->name}}</a>
                  </h5>
                  <div class="tour-package-footer">
                    <div class="tour-duration">
                      <svg
                        width="16"
                        height="16"
                        viewBox="0 0 16 16"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <path
                          d="M8 0C3.58888 0 0 3.58888 0 8C0 12.4111 3.58888 16 8 16C12.4111 16 16 12.4111 16 8C16 3.58888 12.4111 0 8 0ZM8 15C4.14013 15 1 11.8599 1 8C1 4.14013 4.14013 1 8 1C11.8599 1 15 4.14013 15 8C15 11.8599 11.8599 15 8 15Z"
                          fill="#556065"
                        />
                        <path
                          d="M8.5 3H7.5V8.20702L10.6465 11.3535L11.3535 10.6465L8.5 7.79295V3Z"
                          fill="#556065"
                        />
                      </svg>
                      <span>{{$item->duration}} - Days</span>
                    </div>
                    <div class="pricing-info fw-medium">
                      From
                      <del class="text-theme-color fw-semibold">{!! currency_simble($item->cutprice) !!}</del>
                      <h5 class="new-price">{!! currency_simble($item->price) !!}</h5>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            @endforeach
			@else
			    <div class="col-md-12 col-xl-12 text-center">
			    	<h2>Not found</h2>
			    </div>
			@endif

          </div>
          
        </div>
      </section>
      <!--================= Tour Package Area end =================-->
    </main>



@include('footer')