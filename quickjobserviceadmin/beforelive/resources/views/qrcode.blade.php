@include('header')
@php
$about = DB::table('content')->where('id',2)->first();
@endphp

	
<style>
	.about-section-three .text-box, .about-section-three .fun-fact-section {
    max-width: 100%;
}
</style>
	{{-- <section class="page-title">
      <div class="auto-container">
        <div class="title-outer">
          <h1>About Us</h1>
          <ul class="page-breadcrumb">
            <li><a href="">Home</a></li>
            <li>About Us</li>
          </ul>
        </div>
      </div>
    </section> --}}
    <!--End Page Title-->

    <!-- About Section Three -->
    <section class="about-section-three mt-5">
      <div class="auto-container">


        <div class="text-box text-center">
          <img src="{{url('images/qrcode.jpg')}}" class="img-fluid" style="width:350px">
        </div>
      </div>
    </section>
    <!-- End About Section Three -->


@include('footer')