@include('header')
@php

$about = DB::Table('content')->where('id',3)->first();

@endphp

   <style>
     .about-info p {
    max-width: 100%;
}
   </style>

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
                <h1 class="breadcrumb-title">Term & Conditions</h1>
              </div>
              <div class="breadcrumb-menu">
                <ul class="custom-ul">
                  <li><a href="{{url('')}}">Home</a></li>
                  <li>Term & Conditions</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--================= Breadcrumb Area end =================-->

      <!--================= About Area start =================-->
      <section class="vs-about position-relative space">
        <img
          src="{{url('')}}/assets/img/icons/plain-globe.png"
          alt="plain-globe"
          class="about-icon-1 animate-parachute"
        />
        <img
          src="{{url('')}}/assets/img/icons/map.png"
          alt="plain-globe"
          class="about-icon-2 animate-parachute"
        />
        <div class="container">
          <div class="row">
            <div class="col-lg-auto mx-auto">
              <div class="title-area text-center">
                <h2 class="sec-title fade-anim" data-direction="bottom">Term & Conditions</h2>
              </div>
            </div>
          </div>
          <div class="row g-4 align-items-center">
            <div class="col-md-12 order-1 order-md-0">
              <div class="about-info-area">
                
                <div class="about-info">
                  <?=$about->content ?>                  
                </div>
              </div>
            </div>
           
          </div>
        </div>
      </section>
      <!--================= About Area end =================-->

   
      <!--================= Awards Area end =================-->
    </main>
    <!-- ================= Footer Start ================= -->
@include('footer')