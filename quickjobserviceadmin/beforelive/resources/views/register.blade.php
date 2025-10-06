@include('header')



 <div class="login-section">
      <div class="image-layer" style="background-image: url(images/background/12.jpg);"></div>
      <div class="outer-box">
        <!-- Login Form -->
        <div class="login-form default-form">
          <div class="form-inner">
            <h3>Create a Free Account</h3>

            <!--Login Form-->
            <form method="post" action="">
              
              <div class="form-group">
                <label>Username</label>
                <input type="text" name="username" placeholder="Username" required>
              </div>

              <div class="form-group">
                <label>Mobile</label>
                <input type="tel" name="email" placeholder="Mobile" required>
              </div>
              
              <div class="form-group">
                <label>Email Address</label>
                <input type="email" name="email" placeholder="Email" required>
              </div>

              <div class="form-group">
                <label>Password</label>
                <input id="password-field" type="password" name="password" value="" placeholder="Password">
              </div>

              <div class="form-group">
                <button class="theme-btn btn-style-one " type="submit" name="Register">Register</button>
              </div>
            </form>

            <div class="bottom-box">
              <div class="text">Already have an account? <a href="{{url('login')}}">SignIn</a></div>
              {{-- <div class="divider"><span>or</span></div> --}}
              {{-- <div class="btn-box row">
                <div class="col-lg-6 col-md-12">
                  <a href="#" class="theme-btn social-btn-two facebook-btn"><i class="fab fa-facebook-f"></i> Log In via Facebook</a>
                </div>
                <div class="col-lg-6 col-md-12">
                  <a href="#" class="theme-btn social-btn-two google-btn"><i class="fab fa-google"></i> Log In via Gmail</a>
                </div>
              </div> --}}
            </div>
          </div>
        </div>
        <!--End Login Form -->
      </div>
    </div>

@include('footer')