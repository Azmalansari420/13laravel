@php
checkUsersSession();

$user_id = session('user_id');
$profile = DB::table('users')->where('id',$user_id)->first();
// dd($profile->id);
@endphp
@include('header')


<style>.default-form .form-group input[type="text"], .default-form .form-group input[type="password"], .default-form .form-group input[type="number"], .default-form .form-group input[type="email"], .default-form .form-group input[type="url"], .default-form .form-group textarea, .default-form .form-group select {
    border: 1px solid #000000;
    height:50px;
  }
</style>
<div class="page-wrapper dashboard">
    <!-- Sidebar Backdrop -->
    <div class="sidebar-backdrop"></div>

    <!-- User Sidebar -->
    @include('candidate/can-sidebar')
    
    <!-- End User Sidebar -->

    <section class="user-dashboard">
      <div class="dashboard-outer">
        <div class="upper-title-box">
          <h3>My Profile</h3>
          <div class="text">Ready to jump back in?</div>
        </div>

        <div class="row">
          <div class="col-lg-12">
            <!-- Ls widget -->
            <div class="ls-widget">
              <div class="tabs-box">
                <div class="widget-title">
                  <h4>My Profile</h4>
                </div>


                <div class="widget-content">

               <div class="uploading-outer" style="width: 100%; text-align: center;">
                <div class="uploadButton" style="position: relative;">
                    <!-- ✅ पुरानी Image या Default -->
                    <img 
                        id="previewImg" 
                        src="{{ $profile->profile_image ? url('public/media/uploads/users/' . $profile->profile_image) : url('public/default-user.png') }}" 
                        alt="User Logo" 
                        style="width:150px; height:150px; border-radius:5px; object-fit: cover; border:1px solid #ddd;"
                    >

                    <!-- ✅ Transparent File Input Only Inside the Box -->
                    <input class="uploadButton-input" 
                           type="file" 
                           name="logo" 
                           id="upload" 
                           style="position:absolute; top:0; left:0; width:100%; height:100%; opacity:0; cursor:pointer;" />
                </div>

                <label class="uploadButton-button ripple-effect" for="upload" style="margin-top: 10px; display:inline-block;margin-left: 5px;">
                    Click To Update 
                </label>
                {{-- <span class="uploadButton-file-name"></span> --}}
              </div>



                  <form class="default-form">
                    <div class="row">
                      <div class="form-group col-lg-6 col-md-12">
                        <label>Full Name</label>
                        <input type="text" id="name" placeholder="Jerome" value="{{@$profile->name}}">
                      </div>
                      <div class="form-group col-lg-6 col-md-12">
                        <label>Phone</label>
                        <input type="text" id="mobile" placeholder="0 123 456 7890" value="{{@$profile->mobile}}">
                      </div>
                      <div class="form-group col-lg-6 col-md-12">
                        <label>Email address</label>
                        <input type="text" id="email" placeholder="creativelayers" value="{{@$profile->email}}">
                      </div>
                      <div class="form-group col-lg-6 col-md-12">
                        <label>Website</label>
                        <input type="text" id="website" placeholder="www.jerome.com" value="{{@$profile->website}}">
                      </div>

                   {{--    <div class="form-group col-lg-3 col-md-12">
                        <label>Expected Salary($)</label>
                        <select class="chosen-select">
                          <option>120-350 K</option>
                          <option>40-70 K</option>
                          <option>50-80 K</option>
                          <option>60-90 K</option>
                          <option>70-100 K</option>
                          <option>100-150 K</option>
                        </select>
                      </div> --}}

                      <div class="form-group col-lg-6 col-md-12">
                        <label>Age</label>
                        <input type="text" id="age" placeholder="Age" value="{{@$profile->age}}">
                      </div>

                      <div class="form-group col-lg-6 col-md-12">
                        <label>Languages</label>
                        <input type="text" id="languages" placeholder="English, Turkish" value="{{@$profile->languages}}">
                      </div>

                      <div class="form-group col-lg-12 col-md-12">
                        <label>Description</label>
                        <textarea id="description" placeholder="About yourself">{{@$profile->description}}</textarea>
                      </div>

                      <div class="form-group col-lg-6 col-md-12">
                        <button type="button" class="theme-btn btn-style-one profile-btn" >Save</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>

            <!-- Ls widget -->
            <div class="ls-widget pt-0">
              <div class="tabs-box">
                <div class="widget-title">
                  <h4>Social Network</h4>
                </div>

                <div class="widget-content">
                  <form class="default-form">
                    <div class="row">
                      <div class="form-group col-lg-6 col-md-12">
                        <label>Facebook</label>
                        <input type="text" id="facebook" placeholder="www.facebook.com" value="{{@$profile->facebook}}">
                      </div>

                      <div class="form-group col-lg-6 col-md-12">
                        <label>Twitter</label>
                        <input type="text" id="twitter" placeholder="" value="{{@$profile->twitter}}">
                      </div>

                      <div class="form-group col-lg-6 col-md-12">
                        <label>Linkedin</label>
                        <input type="text" id="linkedin" placeholder="" value="{{@$profile->linkedin}}">
                      </div>

                      <div class="form-group col-lg-6 col-md-12">
                        <label>Instagram</label>
                        <input type="text" id="instagram" placeholder="" value="{{@$profile->instagram}}">
                      </div>

                      <div class="form-group col-lg-6 col-md-12">
                        <button class="theme-btn btn-style-one social-btn" type="button">Save</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>

           

          </div>


        </div>
      </div>
    </section>

 @include('candidate/can-footer');

 <script>

const user_id = "{{$user_id}}";
  
 $(document).on("click", ".profile-btn",(function(e) {
      profile_update();
    }));

  function profile_update()
  {
      var name = $("#name").val();
      var email = $("#email").val();
      var mobile = $("#mobile").val();
      var website = $("#website").val();
      var age = $("#age").val();
      var languages = $("#languages").val();
      var description = $("#description").val();

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

      var form = new FormData();
      form.append("user_id", user_id);
      form.append("name", name);
      form.append("email", email);
      form.append("mobile", mobile);
      form.append("website", website);
      form.append("age", age);
      form.append("languages", languages);
      form.append("description", description);
      form.append("_token", "{{ csrf_token() }}");


      var settings = {
        "url": "{{route('userProfileUpdate')}}",
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
            {{-- setTimeout(function(){
                window.location.href = response.url;
            }, 1000); --}}
        } else {
            showToast(response.message || "Something went wrong!", "warning");
        }
      });
  }


{{-- social link --}}

 $(document).on("click", ".social-btn",(function(e) {
      social_update();
    }));

  function social_update()
  {
      var facebook = $("#facebook").val();
      var twitter = $("#twitter").val();
      var linkedin = $("#linkedin").val();
      var instagram = $("#instagram").val();

      
      var form = new FormData();
      form.append("user_id", user_id);
      form.append("facebook", facebook);
      form.append("twitter", twitter);
      form.append("linkedin", linkedin);
      form.append("instagram", instagram);
      form.append("_token", "{{ csrf_token() }}");


      var settings = {
        "url": "{{route('usersocialUpdate')}}",
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
            {{-- setTimeout(function(){
                window.location.href = response.url;
            }, 1000); --}}
        } else {
            showToast(response.message || "Something went wrong!", "warning");
        }
      });
  }

{{-- profile update  --}}

$(document).on("change", "#upload", function(e) {
    uploadLogo();
});

function uploadLogo() {
    var user_id = "{{ session('user_id') }}";
    var file = $("#upload")[0].files[0];

    if (!file) {
        showToast("Please select a logo file.", "warning");
        return;
    }

    var form = new FormData();
    form.append("user_id", user_id);
    form.append("logo", file);
    form.append("_token", "{{ csrf_token() }}");

    $.ajax({
        url: "{{ route('userLogoUpload') }}",
        method: "POST",
        data: form,
        processData: false,
        contentType: false,
        success: function(response) {
            if (response.status === 200) {
                showToast(response.message, "success");
                $(".uploadButton-file-name").text(file.name);

                $("#previewImg").attr("src", response.file).show();


            } else {
                showToast(response.message || "Upload failed!", "danger");
            }
        },
        error: function() {
            showToast("Something went wrong!", "danger");
        }
    });
}

</script>