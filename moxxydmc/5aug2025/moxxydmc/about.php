<?php include('header.php'); ?>

    <!-- main-area -->
    <main>

        <!-- tg-breadcrumb-area-start -->
        <div class="tg-breadcrumb-area tg-breadcrumb-spacing-5 fix p-relative z-index-1 include-bg" data-background="assets/img/breadcrumb/breadcrumb.jpg">
            <div class="tg-hero-top-shadow"></div>
            <div class="tg-breadcrumb-shadow"></div>
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="tg-breadcrumb-content text-center">
                            <h2 class="tg-breadcrumb-title mb-5 fs-40">About Us</h2>
                            <div class="tg-breadcrumb-list-4">
                                <ul>
                                    <li><a href="index.html">Home</a></li>
                                    <li><i class="fa-sharp fa-solid fa-angle-right"></i></li>
                                    <li>Pages</li>
                                    <li><i class="fa-sharp fa-solid fa-angle-right"></i></li>
                                    <li>About</li>
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

        <!-- tg-about-us-area-start -->
        <div class="tg-about-area p-relative z-index-1 pt-80 pb-90">
            <img class="tg-about-details-shape p-absolute d-none d-lg-block" src="assets/img/about/details/shape.png" alt="shape">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <div class="tg-chose-content mb-35 ml-60">
                            <div class="tg-chose-section-title mb-30">
                                <h5 class="tg-section-subtitle mb-15 wow fadeInUp" data-wow-delay=".3s" data-wow-duration=".1s">Explore the world with us</h5>
                                <h2 class="mb-15 text-capitalize wow fadeInUp" data-wow-delay=".4s" data-wow-duration=".9s">The perfect vacation come true with our Travel Agency</h2>
                                <p class="text-capitalize wow fadeInUp mb-35" data-wow-delay=".5s" data-wow-duration=".9s">when an unknown printer took a galley of type and scrambled 
                                    it to make a type specimen book. It has survived not only five 
                                    centuries but also the leap into electronic typesetting<br>
                                    remaining essentially unchanged.</p>
                                
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
            <img class="tg-chose-6-shape d-none d-md-block" src="assets/img/banner/banner-2/shape.png" alt="">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="flip-box">
                          <div class="flip-box-inner">
                            <div class="flip-box-front" style="background-image: url('assets/mission.png');">
                              <h2>OUR MISSION</h2>
                            </div>
                            <div class="flip-box-back">
                              <h3>OUR MISSION</h3>
                              <p>To create holidays that leave you speechless, and then turn you into a storyteller.</p>
                            </div>
                          </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="flip-box">
                          <div class="flip-box-inner">
                            <div class="flip-box-front" style="background-image: url('assets/vision.jpg');">
                              <h2>OUR VISION</h2>
                            </div>
                            <div class="flip-box-back">
                              <h3>OUR VISION</h3>
                              <p>Once a year, we want everyone to travel some place they've never been before.</p>
                            </div>
                          </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="flip-box">
                          <div class="flip-box-inner">
                            <div class="flip-box-front" style="background-image: url('assets/value.jpg');">
                              <h2>OUR VALUE</h2>
                            </div>
                            <div class="flip-box-back">
                              <h3>OUR VALUE</h3>
                              <p>Deliver unmatched travel experience with quality travelling and service, making greatest marvels and adding joy to your journey without burning a hole in your pocket.</p>
                            </div>
                          </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
        

    </main>
    <!-- main-area-end -->


<?php include('footer.php'); ?>