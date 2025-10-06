@include('header');

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
</style>
    <!--Page Title-->
    <section class="page-title">
      <div class="auto-container">
        <div class="title-outer">
          <h1>Checkout</h1>
          <ul class="page-breadcrumb">
            <li><a href="">Home</a></li>
            <li>Checkout</li>
          </ul>
        </div>
      </div>
    </section>
    <!--End Page Title-->

    <!--CheckOut Page-->
    <section class="checkout-page">
      <div class="auto-container">
        <div class="row">

          <div class="column col-lg-8 col-md-12 col-sm-12">
            <!--Checkout Details-->
            <div class="checkout-form">
              <h3 class="title">Billing Details</h3>
              <form method="post"  class="default-form">
                <div class="row">
                  <!--Form Group-->
                  <div class="form-group col-lg-6 col-md-12 col-sm-12">
                    <div class="field-label">First name <sup>*</sup></div>
                    <input type="text" id="first-name" value="" placeholder="" required>
                  </div>

                  <!--Form Group-->
                  <div class="form-group col-lg-6 col-md-12 col-sm-12">
                    <div class="field-label">Last name</div>
                    <input type="text" id="last-name" value="" placeholder="">
                  </div>
                 
                  <!--Form Group-->
                  <div class="form-group col-lg-6 col-md-12 col-sm-12">
                    <div class="field-label">Phone <sup>*</sup></div>
                    <input type="text" id="mobile" value="" placeholder="" required>
                  </div>

                  <!--Form Group-->
                  <div class="form-group col-lg-6 col-md-12 col-sm-12">
                    <div class="field-label">Email Address <sup>*</sup></div>
                    <input type="text" id="email" value="" placeholder="" required>
                  </div>


                </div>
              </form>
            </div>
            <!--End Checkout Details-->
          </div>

          <div class="column col-lg-4 col-md-12 col-sm-12">
            <!--Order Box-->
            <div class="order-box">
              <h3>Your Order</h3>
              <table>
                <thead>
                  <tr>
                    <th><strong>Product</strong></th>
                    <th><strong>Subtotal</strong></th>
                  </tr>
                </thead>
                <tbody>

                  <tr class="cart-item">
                    <td class="product-name">{{$EDITDATA->name}} </td>
                    <td class="product-total">{!! currency_symbol($EDITDATA->amount) !!}</td>
                  </tr>

                </tbody>
                <tfoot>
                  <tr class="order-total">
                    <td>Total</td>
                    <td><span class="amount">{!! currency_symbol($EDITDATA->amount) !!}</span></td>
                  </tr>
                </tfoot>
              </table>
            </div>
            <!--End Order Box-->

            <!--Payment Box-->
            <div class="payment-box">
              <!--Payment Options-->
              <div class="payment-options">
                <div class="btn-box">
                  <a href="javascript:void(0)" class="theme-btn btn-style-one place-order-btn">Place Order</a>
                </div>
              </div>

            </div>
            <!--End Payment Box-->
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
      var pdf_id = "{{$EDITDATA->id}}";
      var pdf_name = "{{$EDITDATA->name}}";
      var amount = "{{$EDITDATA->amount}}";
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




</script>