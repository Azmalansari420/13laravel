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
                <h1 class="breadcrumb-title">Explore destinations</h1>
              </div>
              <div class="breadcrumb-menu">
                <ul class="custom-ul">
                  <li>
                    <a href="index.html">Home</a>
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
          <div class="row gx-3 gy-3">
            @php
              $destination = DB::table('destination')
                  ->where('status', 1)
                  ->orderBy('id', 'desc')
                  ->get();
              @endphp

              @foreach($destination as $key => $data)

              @php
              $count = DB::table('package')->where('destination_id', $data->id)->count();
              @endphp
            <div class="col-md-6 col-lg-3">
              <div class="destination-box-2">
                <figure class="destination-thumb">
                  <img
                    src="{{url('public/media/uploads/destination')}}/{{$data->image}}"
                    alt="destination"
                    class="w-100"
                  />
                </figure>
                <div class="destination-content">
                  <h5 class="title">
                    <a href="{{url('destination-list/'.$data->slug)}}">{{$data->name}}</a>
                  </h5>
                  <span class="info">{{$count}} Place</span>
                </div>
              </div>
            </div>
            @endforeach


          </div>
        </div>
      </section>
      <!--================= Activities Area end =================-->
    </main>


@include('footer')