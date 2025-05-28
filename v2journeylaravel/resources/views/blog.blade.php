@include('header')

      <!--================= Breadcrumb Area start =================-->
      <section
        class="vs-breadcrumb"
        data-bg-src="{{url('')}}/assets/img/bg/breadcrumb-bg.png"
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
                <h1 class="breadcrumb-title">Latest News</h1>
              </div>
              <div class="breadcrumb-menu">
                <ul class="custom-ul">
                  <li>
                    <a href="index.html">Home</a>
                  </li>
                  <li>our blog</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--================= Breadcrumb Area end =================-->

      <!--================= Destination Area Start =================-->
      <section class="vs-blog-wrapper space">
        <div class="container">
          <div class="row gx-3 g-5 justify-content-center">
            <div class="col-lg-8">
              <div class="row g-4 gy-4 gy-sm-5">

                @php
                $blog = DB::Table('blog')->where('status',1)->orderBy('id','desc')->get();
                @endphp
                @foreach($blog as $data)
                <div class="col-12">
                  <div class="vs-blog vs-blog-box3">
                    <div class="blog-img">
                      <a href="{{url('blog-details/'.$data->slug)}}">
                        <img
                          class="img"
                          src="{{url('public/media/uploads/blog/'.$data->image)}}"
                          alt="blog"
                        />
                      </a>
                    </div>
                    <div class="blog-content">
                      <div class="blog-meta">
                        <span class="blog-date">
                          <i class="fa-regular fa-calendar-days"></i>
                          {!! dateformet($data->addeddate) !!}
                        </span>
                      </div>
                      <h3 class="blog-title">
                        <a href="{{url('blog-details/'.$data->slug)}}">
                          Indonesia Your Dream Destination
                        </a>
                      </h3>
                    </div>
                  </div>
                </div>
                @endforeach



              </div>
            </div>

          </div>
        </div>
      </section>
      <!--================= Activities Area end =================-->
    </main>
    <!-- ================= Footer Start ================= -->
@include('footer')