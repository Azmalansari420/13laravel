@include('header');

      
      <!--================= Breadcrumb Area end =================-->

      <!--================= Error Area Start =================-->
      <section class="vs-error space" data-bg-src="{{url('')}}/assets/img/bg/404-bg.png">
        <div class="container">
          <div
            class="row g-4 gx-xxl-5 justify-content-between align-items-center p-xxl-0"
          >
            <div class="col-lg-6">
              <img
                class="error-img mb-60"
                src="{{url('')}}/assets/img/error/error.png"
                alt="error"
              />
            </div>
            <div class="col-lg-6">
              <div class="error-content text-center">
                <h2 class="sec-title">404</h2>
                <span class="sec-subtitle mb-3"
                  >oops! that page can’t be found</span
                >
                <p class="error-text">
                  Rainbow’s high techngy systems with the help of reoving unseen
                  dusothtls miyoutes and bed
                </p>
                <a href="<?=url('') ?>" class="vs-btn">Go Back To Home</a>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--================= Error Area end =================-->
    </main>
    <!-- ================= Footer Start ================= -->


@include('footer');