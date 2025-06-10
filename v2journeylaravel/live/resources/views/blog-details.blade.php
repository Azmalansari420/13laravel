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
                <h1 class="breadcrumb-title">{{$blogdata->name}}</h1>
              </div>
              <div class="breadcrumb-menu">
                <ul class="custom-ul">
                  <li>
                    <a href="{{url('')}}">Home</a>
                  </li>
                  <li>{{$blogdata->name}}</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--================= Breadcrumb Area end =================-->

      <!--================= Destination Area Start =================-->
      <section class="space">
        <div class="container">
          <div class="row gx-3 g-4 gx-xl-5 justify-content-center">
            <div class="col-lg-8">
              <div class="vs-blog vs-blog-box3 blog-single">
                <div class="blog-img rounded-bottom-0">
                  <img
                    class="img"
                    src="{{url('public/media/uploads/blog/'.$blogdata->image)}}"
                    alt="blog"
                  />
                </div>
                <div class="blog-content">
                  <div class="blog-meta">
                    <span class="blog-date">
                      <i class="fa-regular fa-calendar-days"></i>
                      {!! dateformet($blogdata->addeddate) !!}
                    </span>
                  </div>
                  <h4 class="blog-title">{{$blogdata->name}}</h4>
                  {!! $blogdata->content !!}
                  
                 
                </div>
              </div>
              
            </div>
           


          </div>
        </div>
      </section>
      <!--================= Activities Area end =================-->
    </main>


@include('footer')