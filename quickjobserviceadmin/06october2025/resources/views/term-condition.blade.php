@include('header')
@php
$about = DB::table('content')->where('id',3)->first();
@endphp

	
<style>
	.about-section-three .text-box, .about-section-three .fun-fact-section {
    max-width: 100%;
}
</style>
	<section class="page-title">
      <div class="auto-container">
        <div class="title-outer">
          <h1>Term & Condition</h1>
          <ul class="page-breadcrumb">
            <li><a href="">Home</a></li>
            <li>Term & Condition</li>
          </ul>
        </div>
      </div>
    </section>
    <!--End Page Title-->

    <!-- About Section Three -->
    <section class="about-section-three">
      <div class="auto-container">


        <div class="text-box">
          {!! @$about->content !!}
        </div>
      </div>
    </section>
    <!-- End About Section Three -->


@include('footer')