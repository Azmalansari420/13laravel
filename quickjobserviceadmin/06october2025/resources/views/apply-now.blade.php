@include('header');
@php
$id = request()->get('id');
$jobname = DB::table('job')->where('id',$id)->first();
// dd($id)
@endphp

<style>
  .default-form .form-group input[type="text"], .default-form .form-group input[type="password"], .default-form .form-group input[type="number"], .default-form .form-group input[type="email"], .default-form .form-group input[type="url"], .default-form .form-group textarea, .default-form .form-group select {
    position: relative;
    width: 100%;
    display: block;
    height: 50px;
    line-height: 30px;
    padding: 15px 20px;
    font-size: 15px;
    color: #696969;
    background: #F0F5F7;
    border: 1px solid #070d0f;
  }

 input[type="file"] {
    position: relative;
    width: 100%;
    display: block;
    height: 50px;
    line-height: 22px;
    padding: 11px 20px;
    font-size: 15px;
    color: #696969;
    background: #F0F5F7;
    border: 1px solid #070d0f;
}input[type="date"] {
    position: relative;
    width: 100%;
    display: block;
    height: 50px;
    line-height: 22px;
    padding: 11px 20px;
    font-size: 15px;
    color: #696969;
    background: #F0F5F7;
    border: 1px solid #070d0f;
}
</style>
    <!--Page Title-->
    <section class="page-title">
      <div class="auto-container">
        <div class="title-outer">
          <h1>Apply Now</h1>
          <ul class="page-breadcrumb">
            <li><a href="">Home</a></li>
            <li>Apply Now</li>
          </ul>
        </div>
      </div>
    </section>
    <!--End Page Title-->

    <!--CheckOut Page-->
    <section class="checkout-page">
      <div class="auto-container">
        <div class="row justify-content-center">

          <div class="column col-lg-12 col-md-12 col-sm-12">
            <!--Checkout Details-->
            <div class="checkout-form">
              <h3 class="title">Fill All  Details</h3>
              <form action="{{route('jobapply.store')}}" method="post"  class="default-form" enctype="multipart/form-data">
                @csrf
                <div class="row">
                  <input type="hidden" name="job_id" value="{{@$id}}">
                  <input type="hidden" name="applyfor" value="{{@$jobname->name}}">
                  <!--Form Group-->
                  <div class="form-group col-lg-6 col-md-12 col-sm-12">
                    <div class="field-label">Full Name <sup>*</sup></div>
                    <input type="text" name="name" value="" placeholder="Full Name" required>
                  </div>

                  <!--Form Group-->
                  <div class="form-group col-lg-6 col-md-12 col-sm-12">
                    <div class="field-label">Gender</div>
                    <input type="text" name="gender" value="" placeholder="Gender">
                  </div>
                 
                  <!--Form Group-->
                  <div class="form-group col-lg-4 col-md-12 col-sm-12">
                    <div class="field-label">DOB <sup>*</sup></div>
                    <input type="date" name="dob" value="" placeholder="DOB" required>
                  </div>
                  <!--Form Group-->
                  <div class="form-group col-lg-4 col-md-12 col-sm-12">
                    <div class="field-label">Father name <sup>*</sup></div>
                    <input type="text" name="father_name" value="" placeholder="Father name" required>
                  </div>
                  <!--Form Group-->
                  <div class="form-group col-lg-4 col-md-12 col-sm-12">
                    <div class="field-label">Mother name <sup>*</sup></div>
                    <input type="text" name="mother_name" value="" placeholder="Mother name" required>
                  </div>

                  <!--Form Group-->
                  <div class="form-group col-lg-6 col-md-12 col-sm-12">
                    <div class="field-label">Experience <sup>*</sup></div>
                    <select class="" name="experience">
                      <option value="no">No</option>
                      <option value="yes">Yes</option>
                    </select>
                  </div>
                  <!--Form Group-->
                  <div class="form-group col-lg-6 col-md-12 col-sm-12">
                    <div class="field-label">Education  <sup>*</sup></div>
                    <input type="text" name="education" value="" placeholder="Education" required>
                  </div>
                  <!--Form Group-->
                  <div class="form-group col-lg-6 col-md-12 col-sm-12">
                    <div class="field-label">Passport Size Photo  <sup>*</sup></div>
                    <input type="file" name="passportimage" value="" placeholder="Education" required>
                  </div>
                  <!--Form Group-->
                  <div class="form-group col-lg-6 col-md-12 col-sm-12">
                    <div class="field-label">Upload 10th Marksheet<sup>*</sup></div>
                    <input type="file" name="tenmarksheet" value="" placeholder="Education" required>
                  </div>                  
                  <!--Form Group-->

                  <!-- Other Qualifications / Diploma -->
                  <div class="form-group col-lg-12 col-md-12 col-sm-12">
                    <div class="field-label">Upload Other Qualifications/Diploma <sup>*</sup></div>
                    <input type="file" class="mt-2" name="otherqualifications" id="otherqualificationsInput" >
                  </div> 



                  <div class="form-group col-lg-6 col-md-12 col-sm-12">
                    <div class="field-label">Upload 12th Marksheet <sup>*</sup></div>
                    <select class="" id="twelemarksheetSelect" name="twelemarksheetSelect">
                      <option value="no">No</option>
                      <option value="yes">Yes</option>
                    </select>
                    <input type="file" class="mt-2" name="twelemarksheet" id="twelemarksheetInput" style="display:none;">
                  </div>

                  <div class="form-group col-lg-6 col-md-12 col-sm-12">
                    <div class="field-label">Upload Graduation Marksheet <sup>*</sup></div>
                    <select class="" id="graduationSelect" name="graduationSelect">
                      <option value="no">No</option>
                      <option value="yes">Yes</option>
                    </select>
                    <input type="file" class="mt-2" name="graduationmarksheet" id="graduationInput" style="display:none;">
                  </div>

                  <!-- Other Qualifications / Diploma -->
                  {{-- <div class="form-group col-lg-12 col-md-12 col-sm-12">
                    <div class="field-label">Upload Other Qualifications/Diploma <sup>*</sup></div>
                    <select class="" id="otherqualificationsSelect" name="otherqualificationsSelect">
                      <option value="no">No</option>
                      <option value="yes">Yes</option>
                    </select>
                    <input type="file" class="mt-2" name="otherqualifications" id="otherqualificationsInput" style="display:none;">
                  </div>  --}}

                                

                  <!--Form Group-->
                  <div class="form-group col-lg-6 col-md-12 col-sm-12">
                    <div class="field-label">Email Address <sup>*</sup></div>
                    <input type="text" name="email" value="" placeholder="" required>
                  </div>

                  <!--Form Group-->
                  <div class="form-group col-lg-6 col-md-12 col-sm-12">
                    <div class="field-label">Mobile <sup>*</sup></div>
                    <input type="text" name="mobile" value="" placeholder="" required>
                  </div>



                  <div class="col-12">
                    <div class="bottom-box">
                        <label class="text"><input type="checkbox" name="" required> I Agree With <a href="{{url('term-condition')}}">Term & Condition.</a></label>
                    </div>
                  </div>

                  <div class="col-12 text mt-3">
                    <div class="form-group">
                      <button class="theme-btn btn-style-one submit-btn" type="submit" name="submit" >Register</button>
                    </div>
                  </div>


                </div>
              </form>
            </div>
            <!--End Checkout Details-->
          </div>

         
        </div>
      </div>
    </section>
    <!--End CheckOut Page-->

@include('footer');

<script>
  
 $(document).on("click", ".place-order-btn",(function(e) {
      login_distibuter();
      // alert('dd');
    }));

  function login_distibuter()
  {
      var first_name = $("#first-name").val();
      var last_name = $("#last-name").val();
      var email = $("#email").val();
      var mobile = $("#mobile").val();

      if (first_name === "") {
          alert("First Name is Required.");
          return false;
      }

      if (email === "") {
          alert("Email is Required.");
          return false;
      }

      if (mobile === "") {
          alert("Mobile Number is Required.");
          return false;
      }



      var form = new FormData();
      form.append("pdf_id", pdf_id);
      form.append("pdf_name", pdf_name);
      form.append("amount", amount);
      form.append("first_name", first_name);
      form.append("last_name", last_name);
      form.append("email", email);
      form.append("mobile", mobile);
      form.append("_token", "{{ csrf_token() }}");


      var settings = {
        "url": "{{route('pdf.purchasePDF')}}",
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
        if (response.status === 200) 
        {
          window.location.href = response.url; 
        } else {
          alert(response.message || "Something went wrong!");
        }
      });
  }




  // 12th Marksheet
  document.getElementById("twelemarksheetSelect").addEventListener("change", function () {
    document.getElementById("twelemarksheetInput").style.display =
      this.value === "yes" ? "block" : "none";
  });

  // Graduation Marksheet
  document.getElementById("graduationSelect").addEventListener("change", function () {
    document.getElementById("graduationInput").style.display =
      this.value === "yes" ? "block" : "none";
  });

  // Other Qualifications
  document.getElementById("otherqualificationsSelect").addEventListener("change", function () {
    document.getElementById("otherqualificationsInput").style.display =
      this.value === "yes" ? "block" : "none";
  });
</script>
