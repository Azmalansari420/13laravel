@include('header')



<div class="login-section">
      <div class="image-layer" style="background-image: url(images/background/12.jpg);"></div>
      <div class="outer-box">
        <!-- Login Form -->
        <div class="login-form default-form">
          <div class="form-inner">
            <h3>Login to {{env('website_name')}}</h3>
            <!--Login Form-->
            <form method="post" action="">
              <div class="form-group">
                <label>Username</label>
                <input type="text" id="email" placeholder="Username" required>
              </div>

              <div class="form-group">
                <label>Password</label>
                <input  type="password" id="password" value="" placeholder="Password">
              </div>

              <div class="form-group">
                <div class="field-outer">
                  <div class="input-group checkboxes square">
                    <input type="checkbox" name="remember-me" value="" id="remember">
                    <label for="remember" class="remember"><span class="custom-checkbox"></span> Remember me</label>
                  </div>
                  <a href="#" class="pwd">Forgot password?</a>
                </div>
              </div>

              <div class="form-group">
                <button class="theme-btn btn-style-one submit-btn" type="button" name="log-in">Log In</button>
              </div>
            </form>

            <div class="bottom-box">
              <div class="text">Don't have an account? <a href="{{url('register')}}">Signup</a></div>
              {{-- <div class="divider"><span>or</span></div>
              <div class="btn-box row">
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


<script>
  
 $(document).on("click", ".submit-btn",(function(e) {
      login_distibuter();
    }));

  function login_distibuter()
  {
      var email = $("#email").val();
      var password = $("#password").val();

      
      if (email === "") {
           showToast("Email is Required!", "danger");
          return false;
      }
      if (password === "") {
          showToast("Password is Required!", "danger");
          return false;
      }

      console.log(password);

      var form = new FormData();
      form.append("email", email);
      form.append("password", password);
      form.append("_token", "{{ csrf_token() }}");


      var settings = {
        "url": "{{route('userLogin')}}",
        "method": "POST",
        "dataType": "json",
        "timeout": 0,
        "processData": false,
        "mimeType": "multipart/form-data",
        "contentType": false,
        "data": form
      };

      $.ajax(settings).done(function (response) {
        console.log(response);
        if (response.status === 200) {
            showToast(response.message, "success");
            setTimeout(function(){
                window.location.href = response.url;
            }, 1000);
        } else {
            showToast(response.message || "Something went wrong!", "warning");
        }
      });
  }
</script>