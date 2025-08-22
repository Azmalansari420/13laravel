@include('header')
@php
$about = DB::Table('content')->where('id',8)->first();
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
        <!-- tg-breadcrumb-area-start -->
        <div class="tg-breadcrumb-area 00tg-breadcrumb-spacing-5 fix p-relative z-index-1 include-bg get-banner-image" >
           <img src="{{ asset('public/media/uploads/content/' . @$about->image) }}" class="d-block w-100">
        </div>
        <!-- tg-breadcrumb-area-end -->

<style>
    .image-box {
  position: relative;
  overflow: hidden;
  text-align: center;
  display: block;
}

.image-caption {
  background: #fff;
  padding: 10px;
  transition: all 0.3s ease-in-out;
}

.image-caption .desc {
  display: none;
  font-size: 14px;
  color: #555;
}

.image-box:hover .desc {
  display: block;
}

.image-box:hover .title {
  font-weight: bold;
}

.image-caption .title {
  margin: 0;
  font-size: 16px;
  color: #111;
}

.image-box img {
  width: 100%;
  height: 500px; /* or any fixed height you want */
  object-fit: cover;
  border-radius: 8px; /* optional for rounded corners */
}


</style>

        <div class="tg-chose-area tg-chose-su-2-wrap pt-70 pb-60 p-relative z-index-9 fix">
            <img class="tg-chose-su-2-bg-shape p-absolute" src="{{url('')}}/assets/img/chose/su/shape.png" alt="">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-12">
                        <div class="row align-items-center">

                            @php
                            $gallery = DB::Table('gallery')
                                    ->where('status',1)
                                    ->orderBy('id','desc')
                                    ->paginate(16)
                            @endphp
                            @foreach($gallery as $key => $data)
                            <div class="col-lg-3 col-md-4 wow fadeInUp" data-wow-delay=".4s" data-wow-duration=".9s">
                              <div class="tg-chose-su-2-thumb mb-25 image-box">
                                <img class="w-100" src="{{url('public/media/uploads/gallery/'.$data->image)}}" alt="">
                                <div class="image-caption">
                                  <h5 class="title">{{@$data->name}}</h5>
                                  <p class="desc">{{@$data->content}}</p>
                                </div>
                              </div>
                            </div>

                            @endforeach

                           
                            
                        </div>
                    </div>

                    <div class="col-xl-12 pagination-wrapper text-center mt-4 d-flex justify-content-center">
                        {{ $gallery->links('pagination::bootstrap-4') }}
                    </div>

                   


                </div>
            </div>
        </div>


      

        

    </main>
    <!-- main-area-end -->


@include('footer')