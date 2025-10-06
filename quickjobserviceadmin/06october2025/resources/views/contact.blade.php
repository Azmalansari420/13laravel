@include('header')
<style>
  .contact-section .upper-box {
    margin-top: 0;
  }
</style>


    


    <!-- Contact Section -->
    <section class="contact-section">
      <div class="auto-container">
        <div class="upper-box">
          <div class="row">
            <div class="contact-block col-lg-4 col-md-6 col-sm-12">
              <div class="inner-box">
                <span class="icon"><img src="images/icons/placeholder.svg" alt=""></span>
                <h4>Address</h4>
                <p>{{$sitesetting->address}}</p>
              </div>
            </div>
            <div class="contact-block col-lg-4 col-md-6 col-sm-12">
              <div class="inner-box">
                <span class="icon"><img src="images/icons/smartphone.svg" alt=""></span>
                <h4>Call Us</h4>
                <p><a href="tel:{{$sitesetting->mobile}}" class="phone">{{$sitesetting->mobile}}, {{$sitesetting->alt_mobile}}</a></p>
              </div>
            </div>
            <div class="contact-block col-lg-4 col-md-6 col-sm-12">
              <div class="inner-box">
                <span class="icon"><img src="images/icons/letter.svg" alt=""></span>
                <h4>Email</h4>
                <p><a href="mailto:{{$sitesetting->email}}">{{$sitesetting->email}}, {{$sitesetting->alt_email}}</a></p>
              </div>
            </div>
          </div>
        </div>


        <!-- Contact Form -->
        <div class="contact-form default-form">
          <h3>Leave A Message</h3>
          <!--Contact Form-->
          <form method="post" action="{{route('contact.store')}}" >
            <div class="row">
              <div class="form-group col-lg-12 col-md-12 col-sm-12">
              </div>
              @csrf
              <div class="col-lg-6 col-md-12 col-sm-12 form-group">
                <label>Your Name</label>
                <input type="text" name="name" class="username" placeholder="Your Name*" required>
              </div>

              <div class="col-lg-6 col-md-12 col-sm-12 form-group">
                <label>Your Email</label>
                <input type="email" name="email" class="email" placeholder="Your Email*" >
              </div>

              <div class="col-lg-6 col-md-12 col-sm-12 form-group">
                <label>Mobile</label>
                <input type="text" name="mobile" class="mobile" placeholder="Mobile *" required>
              </div>

              <div class="col-lg-6 col-md-12 col-sm-12 form-group">
                <label>Subject</label>
                <input type="text" name="subject" class="subject" placeholder="Subject *" >
              </div>

              <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                <label>Your Message</label>
                <textarea name="message" placeholder="Write your message..." required=""></textarea>
              </div>

              <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                <button class="theme-btn btn-style-one" type="submit"  name="submit">Send Massage</button>
              </div>
            </div>
          </form>
        </div>
        <!--End Contact Form -->
      </div>
    </section>
    <!-- Contact Section -->

    <!-- Map Section -->
    <section class="map-section">
      <div class="map-outer">
        {!! $sitesetting->map !!}
      </div>
    </section>
    <!-- End Map Section -->


@include('footer')