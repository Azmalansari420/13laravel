@include('header')
@php
$about = DB::table('content')->where('id',2)->first();
@endphp

	
<style>
	.about-section-three .text-box, .about-section-three .fun-fact-section {
    max-width: 100%;
}
</style>
	<section class="page-title mt-5">
      <div class="auto-container">
        <div class="title-outer">
          <h1>Blogs</h1>
          <ul class="page-breadcrumb">
            <li><a href="">Home</a></li>
            <li>Blogs</li>
          </ul>
        </div>
      </div>
    </section>
    <!--End Page Title-->

    <!-- About Section Three -->
    <section class="news-section style-two">
      <div class="auto-container">
        <div class="sec-title text-center">
          <h2>Recent News Articles</h2>
          <div class="text">Fresh job related news content posted each day.</div>
        </div>

        <div class="row wow fadeInUp">

          @php
          $blog = DB::table('blog')->where('status',1)->orderBy('id','desc')->get();
          @endphp
          @foreach($blog as $data)
          <div class="news-block col-lg-4 col-md-6 col-sm-12">
            <div class="inner-box">
              <div class="image-box">
                <figure class="image"><img src="{{url('public/media/uploads/blog/'.$data->image)}}" alt="" /></figure>
              </div>
              <div class="lower-content">
                <ul class="post-meta">
                  <li><a href="{{$data->slug}}">{!! dateformet($data->addeddate) !!}</a></li>
                </ul>
                <h3><a href="{{$data->slug}}">{{$data->name}}</a></h3>
                <a href="{{$data->slug}}" class="read-more">Read More <i class="fa fa-angle-right"></i></a>
              </div>
            </div>
          </div>

        @endforeach        

        </div>
      </div>
    </section>
    <!-- End About Section Three -->


@include('footer')