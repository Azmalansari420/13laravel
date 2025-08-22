@include('header')
@php
$about = DB::Table('content')->where('id',2)->first();
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
<style>
   .flip-box {
  background-color: transparent;
  width: 100%;
  height: 300px;
  perspective: 1000px; /* Enables 3D effect */
}

.flip-box-inner {
  position: relative;
  width: 100%;
  height: 100%;
  transition: transform 0.8s;
  transform-style: preserve-3d;
}

.flip-box:hover .flip-box-inner {
  transform: rotateY(180deg);
}

.flip-box-front, .flip-box-back {
  position: absolute;
  width: 100%;
  height: 100%;
  backface-visibility: hidden;
  color: white;
  text-align: center;
  padding: 40px;
  display: flex;
  flex-direction: column;
  justify-content: center;
  border-radius: 10px;
}

.flip-box-front {
  background-size: cover;
  background-position: center;
}

.flip-box-back {
  background: linear-gradient(to right, rgb(254 33 51), rgb(4 117 232));
  transform: rotateY(180deg);
}


</style>
        <!-- why-chose-us-area-start -->
        <div class="tg-chose-area tg-grey-bg pt-20 pb-20 p-relative z-index-1">
            <img class="tg-chose-6-shape d-none d-md-block" src="{{url('')}}/assets/img/banner/banner-2/shape.png" alt="">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="flip-box">
                          <div class="flip-box-inner">
                            <div class="flip-box-front" style="background-image: url('{{url('')}}/assets/mission.png');">
                              <h2>OUR MISSION</h2>
                            </div>
                            <div class="flip-box-back">
                              <h3>OUR MISSION</h3>
                              <p>{{@$about->mission}}</p>
                            </div>
                          </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="flip-box">
                          <div class="flip-box-inner">
                            <div class="flip-box-front" style="background-image: url('{{url('')}}/assets/vision.jpg');">
                              <h2>OUR VISION</h2>
                            </div>
                            <div class="flip-box-back">
                              <h3>OUR VISION</h3>
                               <p>{{@$about->vision}}</p>
                            </div>
                          </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="flip-box">
                          <div class="flip-box-inner">
                            <div class="flip-box-front" style="background-image: url('{{url('')}}/assets/value.jpg');">
                              <h2>OUR VALUE</h2>
                            </div>
                            <div class="flip-box-back">
                              <h3>OUR VALUE</h3>
                               <p>{{@$about->value}}</p>
                            </div>
                          </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
        

    </main>
    <!-- main-area-end -->
@include('footer')