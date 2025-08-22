@include('header')
@php
$about = DB::Table('content')->where('id',11)->first();
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

        <!-- tg-faq-area-start -->
        <div class="tg-pricing-area pb-120 pt-125 p-relative">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="tg-faq-content-wrap">
                            <div class="tg-faq-section-title text-center mb-40">
                                <h5 class="tg-section-subtitle mb-15 wow fadeInUp" data-wow-delay=".3s" data-wow-duration=".9s">Have questions you want answers to?</h5>
                                <h2 class="mb-15 text-capitalize wow fadeInUp" data-wow-delay=".4s" data-wow-duration=".9s">frequently Ask Questions</h2>
                            </div>
                            <div class="tg-faq-content">
                                <div class="accordion tg-custom-accordion" id="accordionExample">
                                    <div class="accordion-item tg-faq-active mb-10 wow fadeInUp" data-wow-delay=".3s" data-wow-duration=".9s">
                                      <h2 class="accordion-header">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            How does the free trial work?
                                        </button>
                                      </h2>
                                      <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p class="mb-0">The best destinations for honeymoon are Kerala, Goa, Uttarakhand, Andaman Islandsarea  and Kashmi your sanctuary 
                                                travel with our curated collection of hotels andThe best destinations for honeymoon aakhand, Andaman 
                                                slands, and Kashmi your sanctuary curated collection.</p>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="accordion-item mb-10 wow fadeInUp" data-wow-delay=".4s" data-wow-duration=".9s">
                                      <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            How will I receive my payment?
                                        </button>
                                      </h2>
                                      <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p class="mb-0">The best destinations for honeymoon are Kerala, Goa, Uttarakhand, Andaman Islandsarea  and Kashmi your sanctuary 
                                                travel with our curated collection of hotels andThe best destinations for honeymoon aakhand, Andaman 
                                                slands, and Kashmi your sanctuary curated collection.</p>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="accordion-item mb-10 wow fadeInUp" data-wow-delay=".5s" data-wow-duration=".9s">
                                      <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            How much does it cost to do a private tour?
                                        </button>
                                      </h2>
                                      <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                         <p class="mb-0">The best destinations for honeymoon are Kerala, Goa, Uttarakhand, Andaman Islandsarea  and Kashmi your sanctuary 
                                            travel with our curated collection of hotels andThe best destinations for honeymoon aakhand, Andaman 
                                            slands, and Kashmi your sanctuary curated collection.</p>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="accordion-item mb-10 wow fadeInUp" data-wow-delay=".6s" data-wow-duration=".9s">
                                      <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                            Can we customize our package with you?
                                        </button>
                                      </h2>
                                      <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                         <p class="mb-0">The best destinations for honeymoon are Kerala, Goa, Uttarakhand, Andaman Islandsarea  and Kashmi your sanctuary 
                                            travel with our curated collection of hotels andThe best destinations for honeymoon aakhand, Andaman 
                                            slands, and Kashmi your sanctuary curated collection.</p>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="accordion-item mb-10 wow fadeInUp" data-wow-delay=".7s" data-wow-duration=".9s">
                                      <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                            What do I need to bring?
                                        </button>
                                      </h2>
                                      <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                         <p class="mb-0">The best destinations for honeymoon are Kerala, Goa, Uttarakhand, Andaman Islandsarea  and Kashmi your sanctuary 
                                            travel with our curated collection of hotels andThe best destinations for honeymoon aakhand, Andaman 
                                            slands, and Kashmi your sanctuary curated collection.</p>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="accordion-item mb-10 wow fadeInUp" data-wow-delay=".8s" data-wow-duration=".9s">
                                      <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                            Do you offer international packages?
                                        </button>
                                      </h2>
                                      <div id="collapseSix" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                         <p class="mb-0">The best destinations for honeymoon are Kerala, Goa, Uttarakhand, Andaman Islandsarea  and Kashmi your sanctuary 
                                            travel with our curated collection of hotels andThe best destinations for honeymoon aakhand, Andaman 
                                            slands, and Kashmi your sanctuary curated collection.</p>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="accordion-item mb-10 wow fadeInUp" data-wow-delay=".9s" data-wow-duration=".9s">
                                      <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSaven" aria-expanded="false" aria-controls="collapseSaven">
                                            Should I print a receipt to show the tour guide?
                                        </button>
                                      </h2>
                                      <div id="collapseSaven" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                         <p class="mb-0">The best destinations for honeymoon are Kerala, Goa, Uttarakhand, Andaman Islandsarea  and Kashmi your sanctuary 
                                            travel with our curated collection of hotels andThe best destinations for honeymoon aakhand, Andaman 
                                            slands, and Kashmi your sanctuary curated collection.</p>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="accordion-item mb-10 wow fadeInUp" data-wow-delay=".99s" data-wow-duration=".9s">
                                      <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                            Are there any extra fees that I will have to pay on top of the listed price?
                                        </button>
                                      </h2>
                                      <div id="collapseEight" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                         <p class="mb-0">The best destinations for honeymoon are Kerala, Goa, Uttarakhand, Andaman Islandsarea  and Kashmi your sanctuary 
                                            travel with our curated collection of hotels andThe best destinations for honeymoon aakhand, Andaman 
                                            slands, and Kashmi your sanctuary curated collection.</p>
                                        </div>
                                      </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- tg-faq-area-end -->

        
    </main>
    <!-- main-area-end -->



 @include('footer')