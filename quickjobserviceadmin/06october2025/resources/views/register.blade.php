@include('header')



 <div class="login-section">
      <div class="image-layer" style="background-image: url(images/background/12.jpg);"></div>
      <div class="outer-box">
        <!-- Login Form -->
        <div class="login-form default-form">
          <div class="form-inner">
            <h3>Create a Free Account</h3>

            <!--Login Form-->
            <form method="post" >
              
              <div class="form-group">
                <label>Username</label>
                <input type="text" id="name" placeholder="Username" required>
              </div>

              <div class="form-group">
                <label>Mobile</label>
                <input type="number" id="mobile" placeholder="Mobile" required>
              </div>
              
              <div class="form-group">
                <label>Email Address</label>
                <input type="email" id="email" placeholder="Email" required>
              </div>

              <div class="form-group">
                <label>Password</label>
                <input  type="password" id="password" value="" placeholder="Password" required>
              </div>

              <div class="form-group">
                <button class="theme-btn btn-style-one submit-btn" type="button" >Register</button>
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

<script>
  
 $(document).on("click", ".submit-btn",(function(e) {
      login_distibuter();
    }));

  function login_distibuter()
  {
      var name = $("#name").val();
      var email = $("#email").val();
      var mobile = $("#mobile").val();
      var password = $("#password").val();

      if (name === "") {
          showToast("Name is Required!", "danger");
          return false;
      }

      if (email === "") {
           showToast("Email is Required!", "danger");
          return false;
      }

      if (mobile === "") {
          showToast("Mobile Number is Required!", "danger");
          return false;
      }
      if (password === "") {
          showToast("Password is Required!", "danger");
          return false;
      }

      {{-- console.log(name);
      console.log(email);
      console.log(mobile);
      console.log(password); --}}

      var form = new FormData();
      form.append("name", name);
      form.append("email", email);
      form.append("mobile", mobile);
      form.append("password", password);
      form.append("_token", "{{ csrf_token() }}");


      var settings = {
        "url": "{{route('userregistration')}}",
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