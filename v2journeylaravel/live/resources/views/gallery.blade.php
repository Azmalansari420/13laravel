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
                <h1 class="breadcrumb-title">Our Gallery</h1>
              </div>
              <div class="breadcrumb-menu">
                <ul class="custom-ul">
                  <li>
                    <a href="{{url('')}}">Home</a>
                  </li>
                  <li>destinations</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--================= Breadcrumb Area end =================-->

      <!--================= Destination Area Start =================-->
      <section class="vs-destination space">
        <div class="container">
          <div class="vs-destination-gallery-style1 overflow-hidden">
            <div class="row destination-gallery">
              <div class="col-lg-12">
                <div class="row">
                  @php
                  $gallery = DB::Table('gallery')
                             ->where('status',1)
                             ->get();
                  @endphp
                  @foreach($gallery as $data)
                  <div class="col-sm-4 mb-3">
                    <div class="destination-gallery-box h-100">
                      <img
                        src="{{url('public/media/uploads/gallery/'.$data->image)}}"
                        alt="destination-gallery"
                        class="w-100 h-100"
                      />
                      <div class="icon-box">
                        <a
                          href="{{url('public/media/uploads/gallery/'.$data->image)}}"
                          title="{{$data->name}}"
                          class=""
                        >
                          <i class="fa-solid fa-eye"></i>
                        </a>
                      </div>
                      <span class="content"> {{$data->name}} </span>
                    </div>
                  </div>
                  @endforeach


                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--================= Activities Area end =================-->
    </main>


@include('footer')
<style>
  .mfp-title>a {
      display: none;
  }
</style>