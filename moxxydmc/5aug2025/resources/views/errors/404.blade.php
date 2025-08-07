@include('header')

    <!-- main-area -->
    <main>

        

        <!-- tg-error-area-start -->
        <div class="tg-error-area-start tg-error-spacing">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-7 col-md-9">
                        <div class="tg-error-content text-center">
                            <img class="mb-40" src="{{url('')}}/assets/img/error/text.png" alt="error">
                            <h2 class="mb-15">Error Page!</h2>
                            <p class="mb-35">Sorry! This Page is Not Available!</p>
                            <div class="tg-error-btn">
                                <a class="tg-btn" href="{{url('')}}">Go Back To Home Page</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- tg-error-area-end -->

    </main>
@include('footer')