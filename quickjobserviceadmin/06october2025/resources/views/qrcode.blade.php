@include('header')
@php
$order_id = request()->get('order_id');
@endphp

	
<style>
	.about-section-three .text-box, .about-section-three .fun-fact-section {
    max-width: 100%;
}
.qr-img {
    width: 100%;
    max-width: 275px;
    height: auto;
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
          <img src="{{ url('images/qrcode.jpg') }}" class="img-fluid qr-img">
        </div>


        <div class="row justify-content-center">
          <div class="col-12 text-center">
            <h3>Scan the QR Code to make the payment</h3>
            <p>After Payment, enter your Transaction ID to proceed.</p>
          </div>

          <div class="col-6">
            <form action="{{route('updateTranstion')}}" method="post"  class="default-form" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="order_id" value="{{@$order_id}}">
                <div class="form-group col-lg-12 col-md-12 col-sm-12">
                  <div class="field-label">Transaction ID <sup>*</sup></div>
                  <input type="text" name="transaction_id" value="" placeholder="Transaction ID" required>
                </div>
                <div class="col-12 text text-center mt-3">
                  <div class="form-group">
                    <button class="theme-btn btn-style-one submit-btn" type="submit" name="submit" >Submit</button>
                  </div>
                </div>
            </form>
            
          </div>
        </div>



      </div>
    </section>
    <!-- End About Section Three -->


@include('footer')